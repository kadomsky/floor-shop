<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

include_once(_PS_MODULE_DIR_.'psblog/loader.php');

class Psblog extends Module
{
    private static $ps_xml_fields = array('title', 'guid', 'description', 'author', 'comments', 'pubDate', 'source', 'link', 'content');
    public $base_config_url;

    public function __construct()
    {
        $currentIndex = '';

        $this->name = 'psblog';
        $this->tab = 'front_office_features';
        $this->version = '3.0.0';
        $this->author = 'Prestashop';
        $this->controllers = array('blog', 'category', 'list');
        $this->need_instance = 0;
        $this->bootstrap = true;

        $this->secure_key = Tools::encrypt($this->name);

        parent::__construct();

        $this->base_config_url = $currentIndex.'&configure='.$this->name.'&token='.Tools::getValue('token');
        $this->displayName = $this->getTranslator()->trans('Ps Blog Management', array(), 'Modules.PsBlog.Admin');
        $this->description = $this->getTranslator()->trans('Manage Blog Content', array(), 'Modules.PsBlog.Admin');
		
		//DONGND: check thumb column, if not exist auto add
		if(Db::getInstance()->executeS('SHOW TABLES LIKE \'%psblog_blog%\'') && count(Db::getInstance()->executes('SELECT "thumb" FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'psblog_blog" AND COLUMN_NAME = "thumb"'))<1)
		{			
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'psblog_blog` ADD `thumb` varchar(255) DEFAULT NULL');
		}
    }

    /**
     * Uninstall
     */
    private function uninstallModuleTab($class_sfx = '')
    {
        $tab_class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);

        $id_tab = Tab::getIdFromClassName($tab_class);
        if ($id_tab != 0) {
            $tab = new Tab($id_tab);
            $tab->delete();
            return true;
        }
        return false;
    }

    /**
     * Install Module Tabs
     */
    private function installModuleTab($title, $class_sfx = '', $parent = '')
    {
        $class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
        @copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'t/'.$class.'.gif');
        if ($parent == '') {
            # validate module
            $position = Tab::getCurrentTabId();
        } else {
            # validate module
            $position = Tab::getIdFromClassName($parent);
        }

        $tab1 = new Tab();
        $tab1->class_name = $class;
        $tab1->module = $this->name;
        $tab1->id_parent = (int)$position;
        $langs = Language::getLanguages(false);
        foreach ($langs as $l) {
            # validate module
            $tab1->name[$l['id_lang']] = $title;
        }
//        $id_tab1 = $tab1->add(true, false);
        $tab1->add(true, false);
    }

    /**
     * @see Module::install()
     */
    public function install()
    {
        /* Adds Module */
        if (parent::install()
                && $this->registerHook('header')
                //&& $this->registerHook('top')
                //&& $this->registerHook('displayNav')
                && $this->registerHook('leftColumn')
                && $this->registerHook('moduleRoutes')
                && $this->registerHook('displayBackOfficeHeader')
                && $this->registerHook('displayBanner')
		&& $this->registerHook('displayHome')
                && Configuration::updateValue('btmenu_iscache', 1)
                && Configuration::updateValue('btmenu_cachetime', 24)) {
            $res = true;

            Configuration::updateValue('PsBLOG_CATEORY_MENU', 1);
            Configuration::updateValue('PsBLOG_LASTEST_POST', 1);
            Configuration::updateValue('PsBLOG_LASTEST_LIMIT', 5);
            Configuration::updateValue('PsBLOG_LASTEST_HEIGHT', 668);
            Configuration::updateValue('PsBLOG_LASTEST_WIDTH', 1000);
			Configuration::updateValue('PsBLOG_DASHBOARD_DEFAULTTAB', '#fieldset_0');
            /* Creates tables */
            $res &= $this->createTables();
            //DONGND: check thumb column, if not exist auto add
            if(Db::getInstance()->executeS('SHOW TABLES LIKE \'%psblog_blog%\'') && count(Db::getInstance()->executes('SELECT "thumb" FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'psblog_blog" AND COLUMN_NAME = "thumb"'))<1)
            {           
                Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'psblog_blog` ADD `thumb` varchar(255) DEFAULT NULL');
            }
            
            $this->registerHook('header'); # remove code in 2018
            $id_parent = Tab::getIdFromClassName('IMPROVE');
            
            $class = 'Admin'.Tools::ucfirst($this->name).'Management';
            $tab1 = new Tab();
            $tab1->class_name = $class;
            $tab1->module = $this->name;
            $tab1->id_parent = $id_parent;
            $langs = Language::getLanguages(false);
            foreach ($langs as $l) {
                # validate module
                $tab1->name[$l['id_lang']] = $this->getTranslator()->trans('Ps Blog Management', array(), 'Modules.PsBlog.Admin');
            }
//            $id_tab1 = $tab1->add(true, false);
            $tab1->add(true, false);

            $this->installModuleTab('Blog Dashboard', 'dashboard', 'AdminPsblogManagement');
            $this->installModuleTab('Categories Management', 'categories', 'AdminPsblogManagement');
            $this->installModuleTab('Blogs Management', 'blogs', 'AdminPsblogManagement');
            $this->installModuleTab('Comment Management', 'comments', 'AdminPsblogManagement');
			$this->installModuleTab('Ps Blog Configuration', 'module', 'AdminPsblogManagement');
			
			
            return (bool)$res;
        }
        return false;
    }

    public function hookDisplayBackOfficeHeader()
    {
        if (file_exists(_PS_THEME_DIR_.'css/modules/psblog/assets/admin/blogmenu.css')) {
            $this->context->controller->addCss($this->_path.'assets/admin/blogmenu.css');
        } else {
            $this->context->controller->addCss($this->_path.'views/css/admin/blogmenu.css');
        }
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitBlockCategories')) {
            # validate module
            Configuration::updateValue('PsBLOG_CATEORY_MENU', (int)Tools::getValue('PsBLOG_CATEORY_MENU'));
            Configuration::updateValue('PsBLOG_LASTEST_POST', (int)Tools::getValue('PsBLOG_LASTEST_POST'));
            Configuration::updateValue('PsBLOG_LASTEST_LIMIT', (int)Tools::getValue('PsBLOG_LASTEST_LIMIT'));
            Configuration::updateValue('PsBLOG_LASTEST_HEIGHT', (int)Tools::getValue('PsBLOG_LASTEST_HEIGHT'));
            Configuration::updateValue('PsBLOG_LASTEST_WIDTH', (int)Tools::getValue('PsBLOG_LASTEST_WIDTH'));
        }
        return $this->renderForm();
    }

    public function getTreeForApPageBuilder($selected)
    {
        $cat = new Psblogcat();
        return $cat->getTreeForApPageBuilder($selected);
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->getTranslator()->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Enable Categories Tree Block', array(), 'Modules.PsBlog.Admin'),
                        'name' => 'PsBLOG_CATEORY_MENU',
                        'desc' => $this->getTranslator()->trans('Activate  The Module.', array(), 'Modules.PsBlog.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Enabled', array(), 'Admin.Actions')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('Disabled', array(), 'Admin.Actions')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Enable Lastest Post', array(), 'Modules.PsBlog.Admin'),
                        'name' => 'PsBLOG_LASTEST_POST',
                        'desc' => $this->getTranslator()->trans('Activate  The Module.', array(), 'Modules.PsBlog.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Enabled', array(), 'Admin.Actions')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('Disabled', array(), 'Admin.Actions')
                            )
                        ),
                    ),                    
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Limit Item', array(), 'Modules.PsBlog.Admin'),
                        'name' => 'PsBLOG_LASTEST_LIMIT',
                        'values' => ""
                    ),
                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                    'class' => 'btn btn-default')
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBlockCategories';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
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
            'PsBLOG_CATEORY_MENU' => Tools::getValue('PsBLOG_CATEORY_MENU', Configuration::get('PsBLOG_CATEORY_MENU')),
            'PsBLOG_LASTEST_POST' => Tools::getValue('PsBLOG_LASTEST_POST', Configuration::get('PsBLOG_LASTEST_POST')),
            'PsBLOG_LASTEST_LIMIT' => Tools::getValue('PsBLOG_LASTEST_LIMIT', Configuration::get('PsBLOG_LASTEST_LIMIT')),
        );
    }

    public function _prepareHook()
    {
        $helper = PsBlogHelper::getInstance();

        $category = new Psblogcat(Tools::getValue('id_psblogcat'), $this->context->language->id);

        $tree = $category->getFrontEndTree((int)$category->id_psblogcat > 1 ? $category->id_psblogcat : 1, $helper);
        $this->smarty->assign('tree', $tree);
        if ($category->id_psblogcat) {
            # validate module
            $this->smarty->assign('currentCategory', $category);
        }
        $limititem = Configuration::get('PsBLOG_LASTEST_LIMIT')? Configuration::get('PsBLOG_LASTEST_LIMIT') : 5;
        $bloglist = new PsBlogBlog("", $this->context->language->id);
        $blogs = $bloglist->getListBlogs("", $this->context->language->id, 0, $limititem , "", "");
        $authors = array();
        $image_w = Configuration::get('listing_secondary_img_width', 1000);
        $image_h = Configuration::get('listing_secondary_img_height', 786);
        foreach ($blogs as $key => &$blog) {
            $blog = PsBlogHelper::buildBlog($helper, $blog, "", "");
            if ($blog['id_employee']) {
                if (!isset($authors[$blog['id_employee']])) {
                    $authors[$blog['id_employee']] = new Employee($blog['id_employee']);
                }
                $blog['author'] = $authors[$blog['id_employee']]->firstname.' '.$authors[$blog['id_employee']]->lastname;
                $blog['author_link'] = $helper->getBlogAuthorLink($authors[$blog['id_employee']]->id);
            } else {
                $blog['author'] = '';
                $blog['author_link'] = '';
            }
            unset($key); # validate module
        }
        $this->smarty->assign('blogs', $blogs);
        //echo "<pre>".print_r($listblog);die;
        
        return true;
    }

    public function hookDisplayHeader()
    {
        if (file_exists(_PS_THEME_DIR_.'css/modules/psblog/assets/psblog.css')) {
            $this->context->controller->addCSS(($this->_path).'assets/psblog.css', 'all');
        } else {
            $this->context->controller->addCSS(($this->_path).'views/css/psblog.css', 'all');
        }
	if (file_exists(_PS_THEME_DIR_.'css/modules/psblog/assets/lightbox.css')) {
            $this->context->controller->addCSS(($this->_path).'assets/lightbox.css', 'all');
        } else {
            $this->context->controller->addCSS(($this->_path).'views/css/lightbox.css', 'all');
        }
	$this->context->controller->registerJavascript('modules-psblog', 'modules/'.$this->name.'/views/js/lightbox-2.6.min.js', ['position' => 'bottom', 'priority' => 150]);
    }

   public function hookLeftColumn()
    {
        //$html ="";
        //$config = PsBlogConfig::getInstance();
        //$en_rss = $config->get('indexation');
        //if($en_rss && $en_rss == 1)
        //$html .=  $this->hookRSS($params);
        if ((Configuration::get('PsBLOG_CATEORY_MENU') || Configuration::get('PsBLOG_LASTEST_POST')) && $this->_prepareHook()) {
            $t = "";
            if(Configuration::get('PsBLOG_CATEORY_MENU')) 
                $t .= $this->display(__FILE__, 'views/templates/hook/categories_menu.tpl');
            /*if(Configuration::get('PsBLOG_CATEORY_MENU'))
                $t .= $this->display(__FILE__, 'views/templates/hook/psbloglatest.tpl');*/
            return $t;
        } else {
            return false;
        }
    }
	
	 public function hookHome() {
	 	if ((Configuration::get('PsBLOG_CATEORY_MENU') || Configuration::get('PsBLOG_LASTEST_POST')) && $this->_prepareHook()) {
			if(Configuration::get('PsBLOG_CATEORY_MENU')) {
                return $this->display(__FILE__, 'views/templates/hook/psbloghome.tpl');
			}
		 } else {
            return false;
         }
	 }
    /*
      function hookRSS($params)
      {
      if (!$this->isCached('psblogrss.tpl', $cacheId))
      {
      // Getting data
      $config = PsBlogConfig::getInstance();
      $title = strval($config->get('rss_title_item', 'RSS FEED'));
      $url = Tools::htmlentitiesutf8('http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__).'modules/psblog/rss.php';
      $nb = (int)$config->get('rss_limit_item', 1);
      $cacheId = $this->getCacheId($this->name.'-'.date("YmdH"));
      $rss_links = array();
      if ($url && ($contents = Tools::file_get_contents($url)))
      try
      {
      if (@$src = new XML_Feed_Parser($contents))
      for ($i = 0; $i < ($nb ? $nb : 5); $i++)
      if (@$item = $src->getEntryByOffset($i))
      {
      $xmlValues = array();
      foreach(self::$ps_xml_fields as $xmlField)
      $xmlValues[$xmlField] = $item->__get($xmlField);
      $xmlValues['enclosure'] = $item->getEnclosure();
      # Compatibility
      $xmlValues['url'] = $xmlValues['link'];
      $rss_links[] = $xmlValues;
      }
      }
      catch (XML_Feed_Parser_Exception $e)
      {
      Tools::dieOrLog(sprintf($this->getTranslator()->trans('Error: invalid RSS feed in "psblogrss" module: %s'), $e->getMessage()), false);
      }

      // Display smarty
      $this->smarty->assign(array('title' => ($title ? $title : $this->getTranslator()->trans('RSS feed')), 'rss_links' => $rss_links));
      }

      return $this->display(__FILE__, 'views/templates/hook/psblogrss.tpl', $cacheId);
      }
     */

    protected function getCacheId($name = null)
    {
        $name = ($name ? $name.'|' : '').implode('-', Customer::getGroupsStatic($this->context->customer->id));
        return parent::getCacheId($name);
    }

    public function hookRightcolumn($params)
    {
        return $this->hookLeftColumn($params);
    }

    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        if (parent::uninstall()) {
            $res = true;

            $this->uninstallModuleTab('management');

            $this->uninstallModuleTab('categories');
            $this->uninstallModuleTab('blogs');
            $this->uninstallModuleTab('comments');
            $this->uninstallModuleTab('dashboard');
            $res = $this->deleteTables();

            return (bool)$res;
        }
        return false;
    }

    public function deleteTables()
    {
        return true;
        /*
		  return Db::getInstance()->execute('
		  DROP TABLE IF EXISTS
		  `'._DB_PREFIX_.'psblogcat`,
		  `'._DB_PREFIX_.'psblogcat_lang`,
		  `'._DB_PREFIX_.'psblogcat_shop`,
		  `'._DB_PREFIX_.'psblog_comment`,
		  `'._DB_PREFIX_.'psblog_blog`,
		  `'._DB_PREFIX_.'psblog_blog_lang`,
		  `'._DB_PREFIX_.'psblog_blog_shop`');
         */
    }

    /**
     * Creates tables
     */
    protected function createTables()
    {
        if ($this->_installDataSample()) {
            return true;
        }
        $res = 1;
        include_once( dirname(__FILE__).'/install/install.php' );
        return $res;
    }

    private function _installDataSample()
    {
        if (!file_exists(_PS_MODULE_DIR_.'pstempcp/libs/DataSample.php')) {
            return false;
        }
        require_once( _PS_MODULE_DIR_.'pstempcp/libs/DataSample.php' );

        $sample = new Datasample(1);
        return $sample->processImport($this->name);
    }

    protected function installSample()
    {
        $res = 1;
        include_once( dirname(__FILE__).'/install/sample.php' );
        return $res;
    }

    public function hookDisplayNav($params)
    {
        return $this->hookDisplayTop($params);
    }

    /**
     * Show correct re_write url on BlockLanguage module
     * http://ps_1609_test/vn/index.php?controller=blog?id=9&fc=module&module=psblog
     * 	$default_rewrite = array(
      '1' => 'http://ps_1609_test/en/blog/lang-en-b9.html',
      '2' => 'http://ps_1609_test/vn/blog/lang-vn-b9.html',
      '3' => 'http://ps_1609_test/cb/blog/lang-cb-b9.html',
      );
     * 
     */
    public function hookDisplayBanner()
    {
        if (Module::isEnabled('blocklanguages')) {
            $default_rewrite = array();
            $module = Validate::isModuleName(Tools::getValue('module')) ? Tools::getValue('module') : '';
            $controller = Tools::getValue('controller');
            if ($module == 'psblog' && $controller == 'blog' && ($id_blog = (int)Tools::getValue('id'))) {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = PsBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'/';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'/';

                    $blog = new PsBlogBlog($id_blog, $lang['id_lang']);
                    $temp_link = $link->getModuleLink($module, $controller, array('id' => $id_blog, 'rewrite' => $blog->link_rewrite), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
//					$default_rewrite[$lang['id_lang']] = $link->getModuleLink($module, $controller, array('id'=>$id_blog, 'rewrite'=>$blog->link_rewrite), null, $lang['id_lang']);
                }
            } elseif ($module == 'psblog' && $controller == 'category' && ($id_blog = (int)Tools::getValue('id'))) {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = PsBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'/';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'/';

                    $blog = new Psblogcat($id_blog, $lang['id_lang']);
                    $temp_link = $link->getModuleLink($module, $controller, array('id' => $id_blog, 'rewrite' => $blog->link_rewrite), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
//					$default_rewrite[$lang['id_lang']] = $link->getModuleLink($module, $controller, array('id'=>$id_blog, 'rewrite'=>$blog->link_rewrite), null, $lang['id_lang']);
                }
            } elseif ($module == 'psblog' && $controller == 'list') {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = PsBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'';

                    $temp_link = $link->getModuleLink($module, $controller, array(), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
                }
            }

            $this->context->smarty->assign('lang_ps_rewrite_urls', $default_rewrite);
        }
    }

    /**
     * Hook Display Top
     */
    public function hookDisplayTop($params)
    {
        $params = array();
        $link = PsBlogHelper::getInstance()->getFontBlogLink();
        $config = PsBlogConfig::getInstance();

        return '<div class="topbar-box"><a href="'.$link.'">'.$config->get('blog_link_title_'.$this->context->language->id, 'Blog').'</a></div>';
    }

    /**
     * Hook ModuleRoutes
     */
    public function hookModuleRoutes($route = '', $detail = array())
    {
        $config = PsBlogConfig::getInstance();
        $routes = array();

        $routes['module-psblog-list'] = array(
            'controller' => 'list',
            'rule' => _Ps_BLOG_REWRITE_ROUTE_.'.html',
            'keywords' => array(
            ),
            'params' => array(
                'fc' => 'module',
                'module' => 'psblog'
            )
        );

        if( $config->get('url_use_id', 1))
        {
            // URL HAVE ID
            $routes['module-psblog-blog'] = array(
                'controller' => 'blog',
                'rule' => _Ps_BLOG_REWRITE_ROUTE_.'/{rewrite}-b{id}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'psblog',
                )
            );

            $routes['module-psblog-category'] = array(
                'controller' => 'category',
                'rule' => _Ps_BLOG_REWRITE_ROUTE_.'/{rewrite}-c{id}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'psblog',
                )
            );
        }else{
            // REMOVE ID FROM URL
            $category_rewrite = 'category_rewrite'.'_'.Context::getContext()->language->id;
            $category_rewrite = $config->get($category_rewrite, 'category');
            $detail_rewrite = 'detail_rewrite'.'_'.Context::getContext()->language->id;
            $detail_rewrite = $config->get($category_rewrite, 'detail');

            $routes['module-psblog-blog'] = array(
                'controller' => 'blog',
                'rule' => _Ps_BLOG_REWRITE_ROUTE_.'/'.$detail_rewrite.'/{rewrite}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'psblog',
                )
            );

            $routes['module-psblog-category'] = array(
                'controller' => 'category',
                'rule' => _Ps_BLOG_REWRITE_ROUTE_.'/'.$category_rewrite.'/{rewrite}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'psblog',
                )
            );
        }
        return $routes;
    }

    /**
     * Get lastest blog for ApPageBuilder module
     * @param type $params
     * @return type
     */
    public function getBlogsFont($params)
    {
        $config = PsBlogConfig::getInstance();
        $id_categories = '';
        if (isset($params['chk_cat'])) {
            # validate module
            $id_categories = $params['chk_cat'];
        }
        $order_by = isset($params['order_by']) ? $params['order_by'] : 'id_psblog_blog';
        $order_way = isset($params['order_way']) ? $params['order_way'] : 'DESC';
        $helper = PsBlogHelper::getInstance();
        $limit = (int)$params['nb_blogs'];
        $blogs = PsBlogBlog::getListBlogsForApPageBuilder($id_categories, $this->context->language->id, $limit, $order_by, $order_way, array(), true);
        $authors = array();
        $image_w = (int)$config->get('listing_leading_img_width', 1000);
        $image_h = (int)$config->get('listing_leading_img_height', 786);
        foreach ($blogs as $key => &$blog) {
            $blog = PsBlogHelper::buildBlog($helper, $blog, $image_w, $image_h, $config);
            if ($blog['id_employee']) {
                if (!isset($authors[$blog['id_employee']])) {
                    $authors[$blog['id_employee']] = new Employee($blog['id_employee']);
                }
                $blog['author'] = $authors[$blog['id_employee']]->firstname.' '.$authors[$blog['id_employee']]->lastname;
                $blog['author_link'] = $helper->getBlogAuthorLink($authors[$blog['id_employee']]->id);
            } else {
                $blog['author'] = '';
                $blog['author_link'] = '';
            }
            unset($key); # validate module
        }
        return $blogs;
    }
}
