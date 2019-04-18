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
			&& $this->dbInstall('install')) {
			return true;
		} else {
			$this->uninstall();
			return false;
		}
	}

	public function uninstall() {
		return ($this->dbInstall('uninstall') && parent::uninstall());
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
		$this->context->controller->addJS(_PS_JS_DIR_.'validate.js');
		$this->context->controller->addJqueryPlugin(array('fancybox'));
	}
	function hookdisplayProductButtons($params) {
		return $this->renderWidget('displayProductButtons', $params);
	}

    public function renderWidget($hookName, array $params)
    {
//		file_put_contents(__DIR__.'/.logs', print_r($params, true));
		if (!$pid = Tools::getValue('id_product')) return null;
        if (!$this->isCached($this->templateFile, $this->getCacheId('cache-'.$this->name.'-'.$pid))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        }
//		echo '=ok=';
//		echo $this->dbInstall('uninstall');
        return $this->fetch($this->templateFile, $this->getCacheId('cache-'.$this->name.'-'.$pid));
    }

    public function getWidgetVariables($hookName, array $params) {
		if (!$pid = Tools::getValue('id_product')) return null;
		return ['id_product' => $pid];
	}
}
