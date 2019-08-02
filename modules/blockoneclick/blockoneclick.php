<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

error_reporting(1);
ini_set('memory_limit', '-1');
ini_set("max_execution_time", "600");

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Blockoneclick extends Module implements WidgetInterface {
	private $templateFile;
	private $track = [];
	private $combo = [[]];

	public function __construct() {
		$this->name = 'blockoneclick';
		$this->version = '1.1';
		$this->author = 'kadomsky.net';
		$this->need_instance = 0;

		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->trans('one click module', array(), 'Modules.'.$this->name.'.Admin');
		$this->description = $this->trans('one click function.', array(), 'Modules.'.$this->name.'.Admin');


		$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);

		$this->templateFile = 'module:'.$this->name.'/views/templates/front/button.tpl';
		$this->shop_id = Context::getContext()->shop->id;
		$this->lang_id = $this->context->language->id;
		$this->ajax = '/module/'.$this->name.'/ajax';
		$this->modulepath = __DIR__;
	}

	public function install() {
		if (parent::install()
			&& $this->registerHook('header')
			&& $this->registerHook('displayProductButtons')
			/*&& $this->dbInstall('install')*/) {
			return true;
		} else {
			$this->uninstall();
			return false;
		}
	}

	public function uninstall() {
		return (/*$this->dbInstall('uninstall') && */parent::uninstall());
	}

	public function dbInstall($key = null) {
		require_once(__DIR__.'/classes/dbupdate.php');
		$dbupdate = new dbupdate();
		return $dbupdate->{'_'.$key}();
	}

	public function hookHeader($params) {
		Media::addJsDef(['oneclickAjaxURL' => $this->ajax]);
		$this->context->controller->addJS(($this->_path).'js/blockoneclick.js');
		$this->context->controller->addJS(($this->_path).'js/jquery.inputmask.js');
		$this->context->controller->addCSS(($this->_path).'css/blockoneclick.css');
//		$this->context->controller->addJS(($this->_path).'js/number.js');
//		$this->context->controller->addCSS(($this->_path).'css/number.css');
		$this->context->controller->addJS(_PS_JS_DIR_.'validate.js');
		$this->context->controller->addJqueryPlugin(array('fancybox'));
	}

	function hookdisplayProductButtons($params) {
		return $this->renderWidget('displayProductButtons', $params);
	}

	public function renderWidget($hookName, array $params) {
		if (isset($params['product']['id_product']) && (int)$params['product']['id_product'] > 0) $pid = $params['product']['id_product'];
		else return null;
		if (isset($params['product']['id_product_attribute']) && (int)$params['product']['id_product_attribute'] > 0) $aid = $params['product']['id_product_attribute'];
		else $aid = 0;
		$cash = 'cache-'.$this->name.'-'.$pid.'-'.$aid;
        if (!$this->isCached($this->templateFile, $this->getCacheId($cash))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
		}
//		print_r($_GET);
        return $this->fetch($this->templateFile, $this->getCacheId($cash));
    }

    public function getWidgetVariables($hookName, array $params) {
		if (isset($params['product']['id_product']) && (int)$params['product']['id_product'] > 0) $pid = $params['product']['id_product'];
		else return null;
		$ain = '1'; $ainfot = false; $ainfo = []; $aid = false;
		if (isset($params['product']['id_product_attribute']) && (int)$params['product']['id_product_attribute'] > 0) {
			$aid = $params['product']['id_product_attribute'];
			$ainfo = Product::getAttributesParams($pid, $aid);
			foreach ($ainfo as $k=>$ai) {
				if (mb_strtolower(trim((string)$ai['group']), 'utf-8') === 'ширина') {
					$ainfot = $ai['id_attribute_group'];
					$ain = $ai['name'];
				}
			}
		}
//		foreach ($params['product'] as $k=>$v) echo $k.'====>'.nl2br(print_r($v, true))."<br>\n";
		$utype = 0;
		$params['product']['unit_price_ratio'] = $params['product']['unit_price_ratio'] ? $params['product']['unit_price_ratio'] : 1;
		if (in_array($params['product']['unity'], ['кв.метр'])) $utype = 1;
		elseif (in_array($params['product']['unity'], ['пог.метр'])) $utype = 2;
		return ['id_product' => $pid,
			'utype' => $utype,
			'unit_price' => (int)$params['product']['price'],
			'product' => $params['product'],
			'ainfo' => $ainfot,
			'ain' => $ain,
			'aind' => explode('.', (string)$ain)
		];
	}
    public function createCombination($attrs) {
		foreach ($attrs as $key=>$attrList) {
			$combinacia = [];
			foreach ($attrList as $attr) {
				foreach ($this->combo as $c) {
					array_push($c, $attr);
					$combinacia[] = $c;
				}
			}
			$this->combo = $combinacia;
		}
		return $this->combo;
	}
    public function getContent() {
		$html = '';
		$result = [];
		if (((bool)Tools::isSubmit('submitAK'.$this->name)) == true) {
			$clist = Tools::getValue('AK_CATE_LIST');
			Configuration::updateValue('AK_CATE_LIST', serialize($clist));
			$attrs = [];
			foreach (array_merge($_GET, $_POST) as $k=>$v)
				if (strpos($k, 'AK_ATTR_SETGROUP_') !== false) {
					$spk = explode('_', $k);
					$gr = $spk[(count($spk)-2)];
					$at = $spk[(count($spk)-1)];
					$attrs[$gr][] = $at;
				}
			if ($this->combo === [[]]) $this->createCombination($attrs);
			foreach ($clist as $cat) $result = array_merge($result, $this->updateCatProduct($cat));
		}
		$html .= nl2br(print_r($this->track, true));
		/*
		$catList = $this->getChildCat((int)Configuration::get('PS_HOME_CATEGORY'));
		*/
//      return $output.$this->renderForm().$this->imageForm().$this->renderList();
		$attrs = Attribute::getAttributes($this->context->language->id);
		$this->smarty->assign([
			'attrs' => $attrs
		]);
		$html .= $this->renderForm();
//		$html .= $this->display(__FILE__, 'views/templates/admin/form.tpl');
		return $html;
    }

    protected function renderForm()
    {
        $values = $this->getConfigFormValues(); // Get values form database
        $var = $values['AK_CATE_LIST'];
        if (!is_array($var)) {
            $var = array(1);
        }
		$af[] = array(
                        'type' => 'categories',
                        'label' => $this->trans('Show Link/Label Category:', array(), 'Modules.BlockOneClick'),
                        'name' => 'AK_CATE_LIST',
                        'class' => 'fixed-width-xs',
                        'desc' => $this->trans('Set the categories to be showed.', array(), 'Modules.BlockOneClick'),
                        'tree'  => array(
                            'id'                  => 'categories-tree',
                            'selected_categories' => $var,
                            'disabled_categories' => null,
                            'use_search'          => true,
                            'use_checkbox'        => true,
                        ),
                    );
		$id_attribute_group = -1;
		foreach (Attribute::getAttributes($this->context->language->id) as $attr) {
			if ((int)$id_attribute_group !== (int)$attr['id_attribute_group']) {
				//$attr['attribute_group']
				$af[(int)$attr['id_attribute_group']] = [
					'type' => 'checkbox',
					'label' => $this->l($attr['attribute_group']),
					'desc' => $this->l($attr['attribute_group']),
					'name' => 'AK_ATTR_SETGROUP_'.$attr['id_attribute'],
					'values' => [
						'query' => [],
						'id' => 'check_id',
						'name' => 'name',
						'desc' => $this->l('Please select')
					],
				];
				$id_attribute_group = $attr['id_attribute_group'];
			}
			$af[(int)$attr['id_attribute_group']]['values']['query'][(int)$attr['id_attribute']]['check_id'] = (int)$attr['id_attribute'];
			$af[(int)$attr['id_attribute_group']]['values']['query'][(int)$attr['id_attribute']]['name'] = trim($attr['name']);
//			$values['PS_LOGS_BY_EMAIL_'.$attr['id_attribute']] = $attr['id_attribute'];
		}
        $fields_form = array(
            'form' => array(
                'legend' => array(
                'title' => $this->trans('Category List', array(), 'Modules.BlockOnelick'),
                'icon' => 'icon-cogs',
                ),
                'input' => $af,
				'submit' => array(
                    'title' => $this->trans('Save', array(), 'Modules.BlockOneClick'),
                    'name' => 'submitAKblockoneclick',

                ),
            ),
        );

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitAKblockoneclick';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    protected function getConfigFormValues()
    {
        $result =  array(
            'AK_CATE_LIST' =>  Tools::getValue('AK_CATE_LIST', Configuration::get('AK_CATE_LIST')),
            'category_id' => Tools::getValue('category_id', Configuration::get('category_id')),
        );
        if(!is_array($result['AK_CATE_LIST']) && !empty($result['AK_CATE_LIST'])) {
            $result['AK_CATE_LIST'] = unserialize($result['AK_CATE_LIST']);
        }

        return $result;
	}

	function updateCatProduct($parent=null, $p=1, $n=100) {
		$result = []; $_res = [];
		$cat = new Category((int)$parent);
		$prods = $cat->getProducts($idLang = $this->context->language->id, $p, $n, $orderyBy = null, $orderWay = null, $getTotal = false, $active = false, $random = false, $randomNumberProducts = 1, $checkAccess = false);
		foreach ($prods as $prod) {
			$_res[] = $this->setProdCombination($prod);
//			break;
		}
		$result[] = $parent.' - '.count($prods).' - '.nl2br(print_r($_res, true))."<br>\n";
		if (count($prods) === (int)$n) {
			$result = array_merge($result, $this->updateCatProduct((int)$parent, ($p+1), $n));
		} else {
			if ($catList = Category::getChildren($parent, $this->context->language->id, false))
				foreach ($catList as $cat) {
					$result = array_merge($result, $this->updateCatProduct((int)$cat['id_category'], 1, $n));
				}
		}
		return $result;
	}

	function setProdCombination($prod=null) {
		if (!$prod) return false;
		if (!(int)$prod['id_product_attribute']) {
			$this->track[] = 'Обрабатываем товар '.(int)$prod['id_product'];
//			return true;
			$product = new Product((int)$prod['id_product']);
			$def=1;
			foreach ($this->combo as $acomb) {
				/*
				use $combination->setAttributes()
				use StockAvailable::setProductDependsOnStock() (There is not enough information about thşs function too)
				use StockAvailable::setProductOutOfStock() (There is not enough information about thşs function too)
				use StockAvailable::setQuantity();
				use AttributeGroup::cleanDeadCombinations();
				use Product::SetDefaultAttribute();
				use Product::save();
				*/
//				if ($product->productAttributeExists($acomb)) {
				$quantity=((int)$prod['quantity']>0 ? (int)$prod['quantity'] : '1000000');
				$id_product_attribute = $product->addCombinationEntity(
					$wholesale_price=0, $price=0, $weight=0, $unit_impact=0, $ecotax=$prod['ecotax'], $quantity, $id_images=null, $reference=$prod['reference'],
					$id_supplier=$prod['id_supplier'], $ean13=$prod['ean13'], $default=$def);
				$def=0;
				StockAvailable::setProductDependsOnStock((int) $product->id, $product->depends_on_stock, null, (int) $id_product_attribute);
				StockAvailable::setProductOutOfStock((int) $product->id, $product->out_of_stock, null, (int) $id_product_attribute);
				StockAvailable::setQuantity((int) $product->id, $id_product_attribute, $quantity);
				$combination = new Combination((int) $id_product_attribute);
				$combination->setAttributes($acomb);
				/*
				// images could be deleted before
				$id_images = Tools::getValue('id_image_attr');
				if (!empty($id_images)) {
					$combination->setImages($id_images);
				}
				*/
				$product->checkDefaultAttributes();
			}
			$product->update();
		} else {
			$this->track[] = 'Пропускаем товар '.(int)$prod['id_product'];
			if (Tools::getValue('delete_all_combinatiom')) {
				$product = new Product((int)$prod['id_product']);
				$comb = $product->getAttributeCombinations();
				foreach ($comb as $c) {
					$this->track[] = print_r($c['id_product_attribute'], true);
					StockAvailable::setQuantity((int) $product->id, $c['id_product_attribute'], '1000000');
//					$product->deleteAttributeCombination($c['id_product_attribute']);
				}
			}
		}
		return $prod;
	}

	function getChildCat($parent) {
		$result = [];
		if ($catList = Category::getChildren($parent, $this->context->language->id, false))
			foreach ($catList as $cat) {
				$cat['sub_list'] = $this->getChildCat((int)$cat['id_category']);
				$result[] = $cat;
			}
		return $result;
	}
}
