<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
class WiInstagram extends Module implements WidgetInterface
{
	public function __construct()
	{
			$this->name = 'wiinstagram';
			$this->tab = 'others';
			$this->version = '1.0.0';
			$this->author = 'Webinth';
			$this->module_key = '';
			$this->bootstrap = true;
			parent::__construct();
			$this->displayName = $this->getTranslator()->trans('WI Instagram Block.', array(), 'Modules.WiInstagram.Admin');
			$this->description = $this->getTranslator()->trans('Displays Instagram block.', array(), 'Modules.WiInstagram.Admin');
			$this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
	}
	public function install()
	{
		return parent::install() &&
			Configuration::updateValue('WI_INS_ID', '5420406393') &&
			Configuration::updateValue('WI_INS_CT', '5420406393.1677ed0.d3654786bd4b4534802749c037b86e02') &&
			Configuration::updateValue('WI_INS_NB', 6) &&
			$this->registerHook('displayHome') &&
			$this->registerHook('displayHeader');
	}
	public function uninstall()
	{
		Configuration::deleteByName('WI_INS_ID');
		Configuration::deleteByName('WI_INS_CT');
		Configuration::deleteByName('WI_INS_NB');
		return parent::uninstall();
	}
	public function getContent()
	{
		$html = '';
		if (Tools::isSubmit('submitModule'))
		{
			Configuration::updateValue('WI_INS_ID', Tools::getValue('WI_INS_ID'));
			Configuration::updateValue('WI_INS_CT', Tools::getValue('WI_INS_CT', ''));
			Configuration::updateValue('WI_INS_NB', Tools::getValue('WI_INS_NB', ''));
			$html .= $this->displayConfirmation($this->l('Configuration updated'));
			$this->_clearCache('wiinstagram.tpl');
			Tools::redirectAdmin('index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
		}
		$html .= $this->renderForm().$this->_displayAdvertising();
		return $html;

	}

public function getWidgetVariables($hookName = null, array $configuration = [])
{
			$images_ins = $this->userMedia();
			return [
				'imagesIns' => $images_ins,
				'nb' => Configuration::get('WI_INS_NB')
			];
		
}
public function renderWidget($hookName = null, array $configuration = [])
{
	
		$page = $this->context->controller->php_self;
		if ($page == 'index')
		{
			$this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
			return $this->fetch('module:'.$this->name.'/views/templates/hook/'.$this->name.'.tpl', $this->getCacheId());
		}
		
        
}

	 public function _displayAdvertising()
		{
		$html1 = '
		<br/>
		<fieldset>
		</fieldset>';
		return $html1;
		}
	public function userMedia()
	{
		$user_id = Configuration::get('WI_INS_ID');
		$access_token = Configuration::get('WI_INS_CT');
		$url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token;
		$nb = Configuration::get('WI_INS_NB');
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $nb);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$json = curl_exec($ch);
		curl_close($ch);
		return Tools::jsonDecode($json, true);
	}
	public function hookHeader()
	{
		$this->page_name = Dispatcher::getInstance()->getController();
		$this->context->controller->addJs($this->_path.'views/js/jquery.carouFredSel-6.1.0.js');
		$this->context->controller->addJs($this->_path.'views/js/waterthemes.js');
		$this->context->controller->addCss($this->_path.'views/css/wiinstagram.css');
	}

	public function renderForm()
	{
			$fields_form = array(
				'form' => array(
					'legend' => array(
						'title' => $this->l('Settings'),
						'icon' => 'icon-cogs'
					),
					'input' => array(
						array(
							'type' => 'text',
							'label' => $this->l('User ID'),
							'name' => 'WI_INS_ID',
							'desc' => $this->l('Instagram User ID. How to get : https://smashballoon.com/instagram-feed/find-instagram-user-id/'),
						),
						array(
							'type' => 'text',
							'label' => $this->l('AccessToken'),
							'name' => 'WI_INS_CT',
							'desc' => $this->l('Instagram Access Token.  How to get : http://instagram.pixelunion.net/'),
						),
						array(
							'type' => 'text',
							'label' => $this->l('Number Images'),
							'name' => 'WI_INS_NB'
						)
					),
					'submit' => array(
						'title' => $this->l('Save')
					)
				),
			);

			$helper = new HelperForm();
			$helper->show_toolbar = false;
			$helper->table = $this->table;
			$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
			$helper->default_form_language = $lang->id;
			$aefl = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
			$helper->allow_employee_form_lang = $aefl ? $aefl : 0;
			$this->fields_form = array();

			$helper->identifier = $this->identifier;
			$helper->submit_action = 'submitModule';
			$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
			.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
			$helper->token = Tools::getAdminTokenLite('AdminModules');
			$helper->tpl_vars = array(
				'fields_value' => $this->getConfigFieldsValues(),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
			);
			return $helper->generateForm(array($fields_form));
	}

	public function getConfigFieldsValues()
	{
		return array(
				'WI_INS_ID' => Tools::getValue('WI_INS_ID', Configuration::get('WI_INS_ID')),
				'WI_INS_CT' => Tools::getValue('WI_INS_CT', Configuration::get('WI_INS_CT')),
				'WI_INS_NB' => Tools::getValue('WI_INS_NB', Configuration::get('WI_INS_NB')),
		);
	}
}
