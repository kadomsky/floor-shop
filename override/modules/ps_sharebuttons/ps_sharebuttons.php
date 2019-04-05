<?php
class Ps_SharebuttonsOverride extends Ps_Sharebuttons
{
    protected static $networks = array('Facebook', 'Twitter', 'Google', 'Pinterest', 'vk', 'ok', 'mail');

    private $templateFile;

    public function __construct()
    {
        $this->name = 'ps_sharebuttons';
        $this->author = 'PrestaShop';
        $this->version = '2.0.1';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->_directory = dirname(__FILE__);

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Social media share buttons', array(), 'Modules.Sharebuttons.Admin');
        $this->description = $this->trans('Displays social media sharing buttons (Twitter, Facebook, Google+ and Pinterest) on every product page.', array(), 'Modules.Sharebuttons.Admin');

        $this->templateFile = 'module:ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl';
    }

    public function install()
    {
        return parent::install()
            && Configuration::updateValue('PS_SC_TWITTER', 1)
            && Configuration::updateValue('PS_SC_FACEBOOK', 1)
            && Configuration::updateValue('PS_SC_GOOGLE', 1)
            && Configuration::updateValue('PS_SC_PINTEREST', 1)
            && Configuration::updateValue('PS_SC_VK', 1)
            && Configuration::updateValue('PS_SC_OK', 1)
            && Configuration::updateValue('PS_SC_MAIL', 1)
            && $this->registerHook('displayProductButtons')
        ;
    }

    public function getConfigFieldsValues()
    {
        $values = array();

        foreach (self::$networks as $network) {
            $values['PS_SC_'.Tools::strtoupper($network)] = (int)Tools::getValue('PS_SC_'.Tools::strtoupper($network), Configuration::get('PS_SC_'.Tools::strtoupper($network)));
        }

        return $values;
    }

    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submitSocialSharing')) {
            foreach (self::$networks as $network) {
                Configuration::updateValue('PS_SC_'.Tools::strtoupper($network), (int)Tools::getValue('PS_SC_'.Tools::strtoupper($network)));
            }

            $this->_clearCache($this->templateFile);

            $output .= $this->displayConfirmation($this->trans('Settings updated.', array(), 'Admin.Notifications.Success'));

            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=6&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }

        $helper = new HelperForm();
        $helper->submit_action = 'submitSocialSharing';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array('fields_value' => $this->getConfigFieldsValues());

        $fields = array();
        foreach (self::$networks as $network) {
            $fields[] = array(
                'type' => 'switch',
                'label' => $network,
                'name' => 'PS_SC_'.Tools::strtoupper($network),
                'values' => array(
                    array(
                        'id' => Tools::strtolower($network).'_active_on',
                        'value' => 1,
                        'label' => $this->trans('Enabled', array(), 'Admin.Global')
                    ),
                    array(
                        'id' => Tools::strtolower($network).'_active_off',
                        'value' => 0,
                        'label' => $this->trans('Disabled', array(), 'Admin.Global')
                    )
                )
            );
        }

        return $output.$helper->generateForm(array(
            array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->displayName,
                        'icon' => 'icon-share'
                    ),
                    'input' => $fields,
                    'submit' => array(
                        'title' => $this->trans('Save', array(), 'Admin.Actions')
                    )
                )
            )
        ));
    }

    public function renderWidget($hookName, array $params)
    {

		if ($hookName === 'displayCMSpage' && $id_cms = (int)Tools::getValue('id_cms')) {
			$key = 'ps_sharebuttons|'.$hookName.'|'.$id_cms;
			// echo $key;
		} else {
			$key = 'ps_sharebuttons|' . $params['product']['id_product'];
			if (!empty($params['product']['id_product_attribute'])) {
				$key .= '|' . $params['product']['id_product_attribute'];
			}
		}

		if (!$this->isCached($this->templateFile, $this->getCacheId($key))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        }

        return $this->fetch($this->templateFile, $this->getCacheId($key));
    }

    public function getWidgetVariables($hookName, array $params)
    {
		if ($hookName === 'displayCMSpage' && $id_cms = (int)Tools::getValue('id_cms')) {
			$this->cms = new CMS($id_cms, $this->context->language->id, $this->context->shop->id);
			$canonicalURL = $this->context->link->getCMSLink($this->cms, $this->cms->link_rewrite, $this->ssl);
			$sharing_img = '';
			$sharing_url = $canonicalURL;
			$sharing_name = $this->cms->meta_title;
		} else {
			if (!method_exists($this->context->controller, 'getProduct')) {
				return;
			}

			$product = $this->context->controller->getProduct();

			if (!Validate::isLoadedObject($product)) {
				return;
			}

			$social_share_links = [];
			$sharing_url = addcslashes($this->context->link->getProductLink($product), "'");
			$sharing_name = addcslashes($product->name, "'");

			$image_cover_id = $product->getCover($product->id);
			if (is_array($image_cover_id) && isset($image_cover_id['id_image'])) {
				$image_cover_id = (int)$image_cover_id['id_image'];
			} else {
				$image_cover_id = 0;
			}

			$sharing_img = addcslashes($this->context->link->getImageLink($product->link_rewrite, $image_cover_id), "'");
		}
        if (Configuration::get('PS_SC_FACEBOOK')) {
            $social_share_links['facebook'] = array(
                'label' => $this->trans('Share', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'facebook',
                'url' => 'https://www.facebook.com/sharer.php?u='.$sharing_url,
				'font' => 'fa-facebook'
            );
        }

        if (Configuration::get('PS_SC_TWITTER')) {
            $social_share_links['twitter'] = array(
                'label' => $this->trans('Tweet', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'twitter',
                'url' => 'https://twitter.com/intent/tweet?text='.$sharing_name.' '.$sharing_url,
				'font' => 'fa-twitter'
            );
        }

        if (Configuration::get('PS_SC_GOOGLE')) {
            $social_share_links['googleplus'] = array(
                'label' => $this->trans('Google+', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'googleplus',
                'url' => 'https://plus.google.com/share?url='.$sharing_url,
				'font' => 'fa-google-plus'
            );
        }

        if (Configuration::get('PS_SC_PINTEREST')) {
            $social_share_links['pinterest'] = array(
                'label' => $this->trans('Pinterest', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'pinterest',
                'url' => 'https://www.pinterest.com/pin/create/button/?media='.$sharing_img.'&url='.$sharing_url,
				'font' => 'fa-pinterest-p'
            );
        }

        if (Configuration::get('PS_SC_VK')) {
            $social_share_links['VK'] = array(
                'label' => $this->trans('VK', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'VK',
                'url' => 'https://vkontakte.ru/share.php?url='.$sharing_url.'&image='.$sharing_img,
				'font' => 'fa-vk'
            );
        }

        if (Configuration::get('PS_SC_OK')) {
            $social_share_links['OK'] = array(

                'label' => $this->trans('OK', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'OK',
                'url' => 'https://connect.ok.ru/offer?url='.$sharing_url.'&imageUrl='.$sharing_img,
				'font' => 'fa-odnoklassniki'
            );
        }

        if (Configuration::get('PS_SC_MAIL')) {
            $social_share_links['MAIL'] = array(
                'label' => $this->trans('MAIL MIR', array(), 'Modules.Sharebuttons.Shop'),
                'class' => 'MAIL-RU',
                'url' => 'https://connect.mail.ru/share?url='.$sharing_url.'&image_url='.$sharing_img,
				'font' => 'fa-moy-mir'
            );
        }
// PRINT_R($social_share_links);
        return array(
            'social_share_links' => $social_share_links,
        );
    }
}
