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

include_once(_PS_MODULE_DIR_.'psblog/loader.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/comment.php');

class AdminPsblogDashboardController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->display = 'view';
        $this->addRowAction('view');
        parent::__construct();
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();
        
        $this->page_header_toolbar_title = $this->module->getTranslator()->trans('Dashboard', array(), 'Modules.PsBlog.Admin');
        $this->page_header_toolbar_btn = array();
    }
	
    public function postProcess()
    {
        if (Tools::isSubmit('saveConfiguration')) {
            $keys = PsBlogHelper::getConfigKey(false);
            $post = array();
            foreach ($keys as $key) {
                # validate module
                $post[$key] = Tools::getValue($key);
            }

            $multi_lang_keys = PsBlogHelper::getConfigKey(true);
            foreach ($multi_lang_keys as $multi_lang_key) {
                foreach (Language::getIDs(false) as $id_lang) {
                    $post[$multi_lang_key.'_'.(int)$id_lang] = Tools::getValue($multi_lang_key.'_'.(int)$id_lang);
                }
            }
			
            PsBlogConfig::updateConfigValue('cfg_global', serialize($post));
			// print_r(Tools::getValue('PsBLOG_DASHBOARD_DEFAULTTAB'));
			
			Configuration::updateValue('PsBLOG_DASHBOARD_DEFAULTTAB', Tools::getValue('PsBLOG_DASHBOARD_DEFAULTTAB'));
			// print_r(Configuration::updateValue('PsBLOG_DASHBOARD_DEFAULTTAB'));
			// die();
        }
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);
        $this->addJqueryUi('ui.widget');
        $this->addJqueryPlugin('tagify');
		if (file_exists(_PS_THEME_DIR_.'js/modules/psblog/assets/psblog.js')) {
            $this->context->controller->addJS(__PS_BASE_URI__.'modules/psblog/assets/admin/form.js');
        } else {
            $this->context->controller->addJS(__PS_BASE_URI__.'modules/psblog/views/js/admin/form.js');
        }
    }

    public function renderView()
    {
        $link = $this->context->link;

        $quicktools = array();

        $quicktools[] = array(
            'title' => $this->module->getTranslator()->trans('Categories', array(), 'Modules.PsBlog.Admin'),
            'href' => $link->getAdminLink('AdminPsblogCategories'),
            'icon' => 'icon-desktop',
            'class' => '',
        );

        $quicktools[] = array(
            'title' => $this->module->getTranslator()->trans('Add Category', array(), 'Modules.PsBlog.Admin'),
            'href' => $link->getAdminLink('AdminPsblogCategories'),
            'icon' => 'icon-list',
            'class' => '',
        );

        $quicktools[] = array(
            'title' => $this->module->getTranslator()->trans('Blogs', array(), 'Modules.PsBlog.Admin'),
            'href' => $link->getAdminLink('AdminPsblogBlogs'),
            'icon' => 'icon-list',
            'class' => '',
        );

        $quicktools[] = array(
            'title' => $this->module->getTranslator()->trans('Add Blog', array(), 'Modules.PsBlog.Admin'),
            'href' => $link->getAdminLink('AdminPsblogBlogs').'&addpsblog_blog',
            'icon' => 'icon-list',
            'class' => '',
        );

        $quicktools[] = array(
            'title' => $this->module->getTranslator()->trans('Comments', array(), 'Modules.PsBlog.Admin'),
            'href' => $link->getAdminLink('AdminPsblogComments').'&listcomments',
            'icon' => 'icon-list',
            'class' => '',
        );

        $onoff = array(
            array(
                'id' => 'indexation_on',
                'value' => 1,
                'label' => $this->module->getTranslator()->trans('Enabled', array(), 'Admin.Actions')
            ),
            array(
                'id' => 'indexation_off',
                'value' => 0,
                'label' => $this->module->getTranslator()->trans('Disabled', array(), 'Admin.Actions')
            )
        );

        //$obj           = new Psblogcat();
        //$menus         = $obj->getDropdown(null, $obj->id_parent);
        $templates = PsBlogHelper::getTemplates();
        $url_rss = Tools::htmlentitiesutf8('http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__).'modules/psblog/rss.php';
        $form = '';

        $this->fields_form[0]['form'] = array(
            'tinymce' => true,
            // 'legend' => array(
                // 'title' => $this->module->getTranslator()->trans('General Setting', array(), 'Modules.PsBlog.Admin'),
                // 'icon' => 'icon-folder-close',
            // ),
            'input' => array(
				
                // custom template
				array(
                    'type' => 'hidden',
                    'name' => 'PsBLOG_DASHBOARD_DEFAULTTAB',                   
                    'default' => '',
                ),
                array(
                    'type' => 'select',
                    'label' => $this->module->getTranslator()->trans('Theme - Template', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'template',
                    'options' => array('query' => $templates,
                        'id' => 'template',
                        'name' => 'template'),
                    'default' => 'default',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Root Link Title', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'blog_link_title',
                    'required' => true,
                    'lang' => true,
                    'desc' => $this->module->getTranslator()->trans('Make Link Title For Blog Root Link, Example http://domain/blog', array(), 'Modules.PsBlog.Admin'),
                    'default' => 'Blog',
                ),
                array(
                    'type' => 'select',
                    'label' => $this->module->getTranslator()->trans('Friendly URL', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'url_use_id',
                    'required' => false,
                    'class' => 'form-action',
                    'is_bool' => true,
                    'default' => '1',
                    'hint' => $this->module->getTranslator()->trans('When turn on Prestashop SEO, Blog show Friendly URL', array(), 'Modules.PsBlog.Admin'),
                    'options' => array(
                        'query' => array(
                            array(
                                'value' => 1,
                                'name' => self::l('Include ID'),
                            ),
                            array(
                                'value' => 0,
                                'name' => self::l('NOT include ID'),
                            ),
                        ),
                        'id' => 'value',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Rootww', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'link_rewrite',
                    'required' => true,
                    'lang' => true,
//                    'desc' => $this->module->getTranslator()->trans('Make seo start with this, Example http://domain/blog', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->module->getTranslator()->trans('Example http://domain/en/blog.html', array(), 'Modules.PsBlog.Admin'),
                    'default' => 'blog',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Category', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'category_rewrite',
                    'required' => true,
                    'lang' => true,
                    'default' => 'category',
                    'form_group_class' => 'url_use_id_sub url_use_id-0',
                    'desc' => $this->module->getTranslator()->trans('Example http://domain/blog/category/CATEGORY_NAME.html', array(), 'Modules.PsBlog.Admin'),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Detail', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'detail_rewrite',
                    'required' => true,
                    'lang' => true,
                    'default' => 'detail',
                    'form_group_class' => 'url_use_id_sub url_use_id-0',
                    'hint' => $this->module->getTranslator()->trans('Example http://domain/blog/detail/name.html', array(), 'Modules.PsBlog.Admin'),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Meta Title', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_title',
                    'lang' => true,
                    'cols' => 40,
                    'rows' => 10,
                    'default' => 'Blog',
                    'desc' => $this->module->getTranslator()->trans('Display browser title on frontpage blog', array(), 'Modules.PsBlog.Admin')
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Meta description', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_description',
                    'lang' => true,
                    'cols' => 40,
                    'rows' => 10,
                    'default' => '',
                    'desk' => $this->module->getTranslator()->trans('Display meta descrition on frontpage blog', array(), 'Modules.PsBlog.Admin').'note: note &lt;&gt;;=#{}'
                ),
                array(
                    'type' => 'tags',
                    'label' => $this->module->getTranslator()->trans('Meta keywords', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_keywords',
                    'default' => '',
                    'lang' => true,
                    'desc' => array(
                        $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' &lt;&gt;;=#{}',
                        $this->module->getTranslator()->trans('To add "tags" click in the field, write something, and then press "Enter."', array(), 'Modules.PsBlog.Admin')
                    )
                ),
                /*array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Enable Rss:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'indexation',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '',
                    'values' => $onoff,
                    'desc' => $url_rss
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Rss Limit Items', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'rss_limit_item',
                    'default' => '20',
                    'desc' => 'Set Maximun shows in rss'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Rss Title', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'rss_title_item',
                    'default' => 'RSS FEED',
                    'desc' => 'Set title in rss'
                ),*/
//				array(
//					'type' => 'text',
//					'label' => $this->module->getTranslator()->trans('Limit Latest Item', array(), 'Modules.PsBlog.Admin'),
//					'name' => 'latest_limit_items',
//					'default' => '20',
//					'desc' => 'Set Maximun shows in latest blog page'
//				),
            ),
            'submit' => array(
                'title' => $this->module->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                'class' => 'btn btn-danger'
            )
        );

        $this->fields_form[1]['form'] = array(
            'tinymce' => true,
            'default' => '',
            // 'legend' => array(
                // 'title' => $this->module->getTranslator()->trans('Listing Blog Setting', array(), 'Modules.PsBlog.Admin'),
                // 'icon' => 'icon-folder-close'
            // ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Category Info:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_categoryinfo',
                    'required' => false,
                    'class' => 't',
                    'desc' => $this->module->getTranslator()->trans('Display category information in listing blogs', array(), 'Modules.PsBlog.Admin'),
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Sub Categories:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_subcategories',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                    'desc' => $this->module->getTranslator()->trans('Display subcategory in listing blog', array(), 'Modules.PsBlog.Admin')
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Leading Column:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_leading_column',
                    'required' => false,
                    'class' => 't',
                    'default' => '1',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Leading Limit Items:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_leading_limit_items',
                    'required' => false,
                    'class' => 't',
                    'default' => '2',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Leading Image Width:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_leading_img_width',
                    'required' => false,
                    'class' => 't',
                    'default' => '1000',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Leading Image Height:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_leading_img_height',
                    'required' => false,
                    'class' => 't',
                    'default' => '786',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Secondary Column:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_secondary_column',
                    'required' => false,
                    'class' => 't',
                    'default' => '2',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Secondary Limit Items:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_secondary_limit_items',
                    'required' => false,
                    'class' => 't',
                    'default' => '2',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Secondary Image Width:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_secondary_img_width',
                    'required' => false,
                    'class' => 't',
                    'default' => '1000',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Secondary Image Height:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_secondary_img_height',
                    'required' => false,
                    'class' => 't',
                    'default' => '786',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Title:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_title',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Description:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_description',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Readmore:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_readmore',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Image:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_image',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Author:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_author',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Category:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_category',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Created Date:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_created',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Hits:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_hit',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Counter:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'listing_show_counter',
                    'required' => false,
                    'class' => 't',
                    'default' => '1',
                    'values' => $onoff,
                ),
            ),
            'submit' => array(
                'title' => $this->module->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                'class' => 'btn btn-danger'
            )
        );

        $this->fields_form[2]['form'] = array(
            'tinymce' => true,
            'default' => '',
            // 'legend' => array(
                // 'title' => $this->module->getTranslator()->trans('Item Blog Setting', array(), 'Modules.PsBlog.Admin'),
                // 'icon' => 'icon-folder-close'
            // ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Item Image Width:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_img_width',
                    'required' => false,
                    'class' => 't',
                    'default' => '1000',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Item Image Height:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_img_height',
                    'required' => false,
                    'class' => 't',
                    'default' => '786',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Description:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_description',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Image:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_image',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Author:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_author',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Category:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_category',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Created Date:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_created',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Hits:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_hit',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Counter:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_counter',
                    'required' => false,
                    'class' => 't',
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Show Comments:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_show_comments',
                    'required' => false,
                    'class' => 't',
                    'default' => '1',
                    'values' => $onoff,
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Social Sharing CODE', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'social_code',
                    'required' => false,
                    'default' => '',
                    'desc' => 'put sharing social code from sharethis service....to replace current sharing social.'
                ),
//				array(
//					'type' => 'switch',
//					'label' => $this->module->getTranslator()->trans('Comment Engine:', array(), 'Modules.PsBlog.Admin'),
//					'name' => 'item_comment_engine',
//					'required' => false,
//					'class' => 't',
//					'default' => '1',
//					'values' => $onoff,
//				),
                array(
                    'type' => 'select',
                    'label' => $this->module->getTranslator()->trans('Comment Engine:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_comment_engine',
                    'id' => 'item_comment_engine',
                    'options' => array('query' => array(
                            array('id' => 'local', 'name' => $this->module->getTranslator()->trans('Local', array(), 'Modules.PsBlog.Admin')),
                            array('id' => 'facebook', 'name' => $this->module->getTranslator()->trans('Facebook', array(), 'Modules.PsBlog.Admin')),
                            array('id' => 'diquis', 'name' => $this->module->getTranslator()->trans('Diquis', array(), 'Modules.PsBlog.Admin')),
                        ),
                        'id' => 'id',
                        'name' => 'name'),
                    'default' => 'local'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Limit Local Comment', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_limit_comments',
                    'required' => false,
                    'class' => 't',
                    'default' => '10',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Diquis Account:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_diquis_account',
                    'required' => false,
                    'class' => 't',
                    'default' => '',
                    'desc' => '<a target="_blank" href="https://disqus.com/admin/signup/">'.$this->module->getTranslator()->trans('Sign Up Diquis', array(), 'Modules.PsBlog.Admin').'</a>'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Facebook Application ID:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_facebook_appid',
                    'required' => false,
                    'class' => 't',
                    'default' => '',
                    'desc' => '<a target="_blank" href="http://developers.facebook.com/docs/reference/plugins/comments/">'.$this->module->getTranslator()->trans('Register A Comment Box, Then Get Application ID in Script Or Register Facebook Application ID to moderate comments', array(), 'Modules.PsBlog.Admin').'</a>'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Facebook Width:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'item_facebook_width',
                    'required' => false,
                    'class' => 't',
                    'default' => '600'
                ),
            ),
            'submit' => array(
                'title' => $this->module->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                'class' => 'btn btn-danger'
            )
        );

        $data = PsBlogConfig::getConfigValue('cfg_global');
        $obj = new stdClass();

        if ($data && $tmp = unserialize($data)) {
            foreach ($tmp as $key => $value) {
                # validate module
                $obj->{$key} = $value;
            }
        }

        $fields_value = $this->getConfigFieldsValues($obj);
        $helper = new HelperForm($this);
		
		// echo '<pre>';
		// print_r($helper);die();
        $this->setHelperDisplay($helper);
		// $helper->override_folder = 'test/';
        $helper->fields_value = $fields_value;
        $helper->tpl_vars = $this->tpl_form_vars;
        !is_null($this->base_tpl_form) ? $helper->base_tpl = $this->base_tpl_form : '';
        if ($this->tabAccess['view']) {
            $helper->tpl_vars['show_toolbar'] = false;
            $helper->tpl_vars['submit_action'] = 'saveConfiguration';
            if (Tools::getValue('back')) {
                $helper->tpl_vars['back'] = '';
            } else {
                $helper->tpl_vars['back'] = '';
            }
        }
		// echo '<pre>';
		// print_r($helper);die();
        $form = $helper->generateForm($this->fields_form);
		// echo '<pre>';
		// print_r($this->fields_form);die();
        $template = $this->createTemplate('panel.tpl');

        $comments = PsBlogComment::getComments(null, 10, $this->context->language->id);
        $blogs = PsBlogBlog::getListBlogs(null, $this->context->language->id, 0, 10, 'hits', 'DESC');

        $template->assign(array(
            'quicktools' => $quicktools,
            'showed' => 1,
            'comment_link' => $link->getAdminLink('AdminPsblogComments'),
            'blog_link' => $link->getAdminLink('AdminPsblogBlogs'),
            'blogs' => $blogs,
            'count_blogs' => PsBlogBlog::countBlogs(null, $this->context->language->id),
            'count_cats' => Psblogcat::countCats(),
            'count_comments' => PsBlogComment::countComments(),
            'latest_comments' => $comments,
            'globalform' => $form,
			'default_tab' => Configuration::get('PsBLOG_DASHBOARD_DEFAULTTAB')
        ));
		// print_r(Configuration::get('PsBLOG_DASHBOARD_DEFAULTTAB'));die();
        return $template->fetch();
    }

    /**
     * Asign value for each input of Data form
     */
    public function getConfigFieldsValues($obj)
    {
        $languages = Language::getLanguages(false);
        $fields_values = array();

        foreach ($this->fields_form as $k => $f) {
            foreach ($f['form']['input'] as $j => $input) {

                if (isset($input['lang'])) {
                    foreach ($languages as $lang) {
                        if (isset($obj->{trim($input['name']).'_'.$lang['id_lang']})) {
                            $data = $obj->{trim($input['name']).'_'.$lang['id_lang']};
                            $fields_values[$input['name']][$lang['id_lang']] = $data;
                        } else {
                            # validate module
                            $fields_values[$input['name']][$lang['id_lang']] = $input['default'];
                        }
                    }
                } else {
                    if (isset($obj->{trim($input['name'])})) {
                        $data = $obj->{trim($input['name'])};

                        if ($input['name'] == 'image' && $data) {
                            $thumb = __PS_BASE_URI__.'modules/'.$this->name.'/views/img/'.$data;
                            $this->fields_form[$k]['form']['input'][$j]['thumb'] = $thumb;
                        }

                        $fields_values[$input['name']] = $data;
                    } else {
                        # validate module
                        $fields_values[$input['name']] = $input['default'];
                    }
                }
            }
        }
		
		$fields_values['PsBLOG_DASHBOARD_DEFAULTTAB'] = Tools::getValue('PsBLOG_DASHBOARD_DEFAULTTAB', Configuration::get('PsBLOG_DASHBOARD_DEFAULTTAB'));
        return $fields_values;
    }
}
