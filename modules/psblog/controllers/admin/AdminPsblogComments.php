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

class AdminPsblogCommentsController extends ModuleAdminController
{
    protected $max_image_size = 1048576;
    protected $position_identifier = 'id_psblog_blog';

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'psblog_comment';
//		$this->list_id = 'id_comment';		// must be set same value $this->table to delete multi rows
        $this->identifier = 'id_comment';
        $this->className = 'PsBlogComment';
        $this->lang = false;

        $this->addRowAction('edit');
        $this->addRowAction('delete');

        if (Tools::getValue('id_psblog_blog')) {
            # validate module
            $this->_where = ' AND id_psblog_blog='.(int)Tools::getValue('id_psblog_blog');
        }
        parent::__construct();
		
		$this->bulk_actions = array('delete' => array('text' => $this->module->getTranslator()->trans('Delete selected', array(), 'Modules.PsBlog.Admin'), 'confirm' => $this->module->getTranslator()->trans('Delete selected items?', array(), 'Modules.PsBlog.Admin'), 'icon' => 'icon-trash'));

        $this->fields_list = array(
            'id_comment' => array('title' => $this->module->getTranslator()->trans('ID', array(), 'Modules.PsBlog.Admin'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'id_psblog_blog' => array('title' => $this->module->getTranslator()->trans('Blog ID', array(), 'Modules.PsBlog.Admin'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'user' => array('title' => $this->module->getTranslator()->trans('User', array(), 'Modules.PsBlog.Admin')),
            'comment' => array('title' => $this->module->getTranslator()->trans('Comment', array(), 'Modules.PsBlog.Admin'), 'filter_key' => 'b!Comment'),
            'date_add' => array('title' => $this->module->getTranslator()->trans('Date Added', array(), 'Modules.PsBlog.Admin'), 'filter_key' => 'b!data_add'),
            'active' => array('title' => $this->module->getTranslator()->trans('Displayed', array(), 'Modules.PsBlog.Admin'), 'align' => 'center', 'active' => 'status', 'class' => 'fixed-width-sm', 'type' => 'bool', 'orderby' => false)
        );
    }

    public function initPageHeaderToolbar()
    {
        $link = $this->context->link;

        if (Tools::getValue('id_psblog_blog')) {
            $this->page_header_toolbar_btn['back-blog'] = array(
                'href' => $link->getAdminLink('AdminPsblogBlogs').'&updatepsblog_blog&id_psblog_blog='.Tools::getValue('id_psblog_blog'),
                'desc' => $this->module->getTranslator()->trans('Back To The Blog', array(), 'Modules.PsBlog.Admin'),
                'icon' => 'icon-blog icon-3x process-icon-blog'
            );
        }
        if (Tools::getValue('id_comment')) {
            $this->page_header_toolbar_btn['save-and-stay'] = array(
                'short' => 'SaveAndStay',
                'href' => '#',
                'desc' => $this->module->getTranslator()->trans('Save and stay', array(), 'Admin.Actions'),
            );
        }
        return parent::initPageHeaderToolbar();
    }

    public function renderForm()
    {
        if (!$this->loadObject(true)) {
            if (Validate::isLoadedObject($this->object)) {
                $this->display = 'edit';
            } else {
                $this->display = 'add';
            }
        }
        $this->initToolbar();
        $this->initPageHeaderToolbar();

        //$id_psblogcat = (int) (Tools::getValue('id_psblogcat'));
        //$obj           = new psblogcat($id_psblogcat);
        //$tree          = $obj->getTree();
        //$menus         = $obj->getDropdown(null, $obj->id_parent);

        $blog = new PsBlogBlog($this->object->id_psblog_blog, $this->context->language->id);

        $this->multiple_fieldsets = true;
        $this->object->blog_title = $blog->meta_title;

        $this->fields_form[0]['form'] = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->module->getTranslator()->trans('Blog Form', array(), 'Modules.PsBlog.Admin'),
                'icon' => 'icon-folder-close'
            ),
            'input' => array(
                array(
                    'type' => 'hidden',
                    'label' => $this->module->getTranslator()->trans('Comment ID', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'id_comment',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Blog Title', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'blog_title',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('User', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'user',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Email', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'email',
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Blog Content', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'comment',
                    'rows' => 5,
                    'cols' => 40,
                    'hint' => $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' <>;=#{}'
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Displayed:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'active',
                    'required' => false,
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->module->getTranslator()->trans('Enabled', array(), 'Admin.Actions')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->module->getTranslator()->trans('Disabled', array(), 'Admin.Actions')
                        )
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->module->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                'class' => 'btn btn-default'
            )
        );

        $this->tpl_form_vars = array(
            'active' => $this->object->active,
            'PS_ALLOW_ACCENTED_CHARS_URL', (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL')
        );
        $html = '
					<script type="text/javascript">
						var PS_ALLOW_ACCENTED_CHARS_URL = '.(int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL').';
					</script>
			';
        return $html.parent::renderForm();
    }

    public function renderList()
    {
        $this->toolbar_title = $this->module->getTranslator()->trans('Comments Management', array(), 'Modules.PsBlog.Admin');
        $this->toolbar_btn['new'] = null;

        return parent::renderList();
    }

    public function displayList($token = null)
    {
        /* Display list header (filtering, pagination and column names) */
        $this->displayListHeader($token);

        if (!count($this->_list)) {
            echo '<tr><td class="center" colspan="'.(count($this->fields_list) + 2).'">'.$this->module->getTranslator()->trans('No items found', array(), 'Modules.PsBlog.Admin').'</td></tr>';
        }

        /* Show the content of the table */
        $this->displayListContent($token);

        /* Close list table and submit button */
        $this->displayListFooter($token);
    }
}
