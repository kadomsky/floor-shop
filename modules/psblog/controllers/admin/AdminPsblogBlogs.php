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

class AdminPsblogBlogsController extends ModuleAdminController
{
    protected $max_image_size = 1048576;
    protected $position_identifier = 'id_psblog_blog';

    public function __construct()
    {
        parent::__construct();
        $this->bootstrap = true;
        $this->table = 'psblog_blog';
        //$this->list_id = 'id_psblog_blog';        // must be set same value $this->table to delete multi rows
        $this->identifier = 'id_psblog_blog';
        $this->className = 'PsBlogBlog';
        $this->lang = true;
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->bulk_actions = array('delete' => array('text' => $this->module->getTranslator()->trans('Delete selected', array(), 'Modules.PsBlog.Admin'), 'confirm' => $this->module->getTranslator()->trans('Delete selected items?', array(), 'Modules.PsBlog.Admin'), 'icon' => 'icon-trash'));
        $this->fields_list = array(
            'id_psblog_blog' => array('title' => $this->module->getTranslator()->trans('ID', array(), 'Modules.PsBlog.Admin'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'meta_title' => array('title' => $this->module->getTranslator()->trans('Blog Title', array(), 'Modules.PsBlog.Admin'), 'filter_key' => 'b!meta_title'),
            'title' => array('title' => $this->module->getTranslator()->trans('Category Title', array(), 'Modules.PsBlog.Admin'), 'filter_key' => 'cl!title'),
            'active' => array('title' => $this->module->getTranslator()->trans('Displayed', array(), 'Modules.PsBlog.Admin'), 'align' => 'center', 'active' => 'status', 'class' => 'fixed-width-sm', 'type' => 'bool', 'orderby' => false)
        );
        $this->_select .= ' cl.title ';
        $this->_join .= ' LEFT JOIN '._DB_PREFIX_.'psblogcat c ON a.id_psblogcat = c.id_psblogcat
                                  LEFT JOIN '._DB_PREFIX_.'psblogcat_lang cl ON cl.id_psblogcat=c.id_psblogcat AND cl.id_lang=b.id_lang 
                ';
        if (Shop::getContext() == Shop::CONTEXT_SHOP) {
            $this->_join .= ' INNER JOIN `'._DB_PREFIX_.'psblog_blog_shop` sh ON (sh.`id_psblog_blog` = b.`id_psblog_blog` AND sh.id_shop = '.(int)Context::getContext()->shop->id.') ';
        }
        $this->_where = '';
        $this->_group = ' GROUP BY (a.id_psblog_blog) ';
        $this->_orderBy = 'a.position';
    }

    public function initPageHeaderToolbar()
    {
        $link = $this->context->link;
        if (Tools::getValue('id_psblog_blog')) {
            $this->page_header_toolbar_btn['save-and-preview'] = array(
                'href' => $link->getAdminLink('AdminPsblogComments').'&id_psblog_blog='.Tools::getValue('id_psblog_blog'),
                'desc' => $this->module->getTranslator()->trans('Manage Comments'),
                'icon' => 'icon-comment icon-3x process-icon-comment'
            );

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

        $id_psblogcat = (int)(Tools::getValue('id_psblogcat'));
        $obj = new psblogcat($id_psblogcat);
//      $tree = $obj->getTree();    # validate module
        $obj->getTree();
        $menus = $obj->getDropdown(null, $obj->id_parent);

        if ($this->object->image) {
            # validate module
            $thumb = __PS_BASE_URI__.'modules/psblog/views/img/b/'.$this->object->image;
        } else {
            # validate module
            $thumb = '';
        }
        
        if ($this->object->thumb) {
            # validate module
            $thumb_img = __PS_BASE_URI__.'modules/psblog/views/img/b/'.$this->object->thumb;
        } else {
            # validate module
            $thumb_img = '';
        }


        $this->multiple_fieldsets = true;

        $this->fields_form[0]['form'] = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->module->getTranslator()->trans('Blog Form', array(), 'Modules.PsBlog.Admin'),
                'icon' => 'icon-folder-close'
            ),
            'input' => array(
                // custom template

                array(
                    'type' => 'select',
                    'label' => $this->module->getTranslator()->trans('Category', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'id_psblogcat',
                    'options' => array('query' => $menus,
                        'id' => 'id',
                        'name' => 'title'),
                    'default' => $id_psblogcat,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Meta title:', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_title',
                    'id' => 'name', // for copyMeta2friendlyURL compatibility
                    'lang' => true,
                    'required' => true,
                    'class' => 'copyMeta2friendlyURL',
                    'hint' => $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' &lt;&gt;;=#{}'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Friendly URL', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'link_rewrite',
                    'required' => true,
                    'lang' => true,
                    'hint' => $this->module->getTranslator()->trans('Only letters and the minus (-) character are allowed', array(), 'Modules.PsBlog.Admin')
                ),
                array(
                    'type' => 'tags',
                    'label' => $this->module->getTranslator()->trans('Tags', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'tags',
                    'lang' => true,
                    'hint' => array(
                        $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' &lt;&gt;;=#{}',
                        $this->module->getTranslator()->trans('To add "tags" click in the field, write something, and then press "Enter."', array(), 'Modules.PsBlog.Admin')
                    )
                ),
                array(
                    'type' => 'file',
                    'label' => $this->module->getTranslator()->trans('Image', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'image',
                    'display_image' => true,
                    'default' => '',
                    'desc' => $this->module->getTranslator()->trans('', array(), 'Modules.PsBlog.Admin'),
                    'thumb' => $thumb,
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'hidden_image',
                    'default' => '',
                ),
                array(
                    'type' => 'file',
                    'label' => $this->module->getTranslator()->trans('Thumb image', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'thumb',
                    'display_image' => true,
                    'default' => '',
                    'desc' => $this->module->getTranslator()->trans('', array(), 'Modules.PsBlog.Admin'),
                    'thumb' => $thumb_img,
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'hidden_thumb',
                    'default' => '',
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Video Code', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'video_code',
                    'rows' => 5,
                    'cols' => 30,
                    'hint' => $this->module->getTranslator()->trans('Enter Video Code Copying From Youtube, Vimeo', array(), 'Modules.PsBlog.Admin').' <>;=#{}'
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Blog description', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'description',
                    'autoload_rte' => true,
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 30,
                    'hint' => $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' <>;=#{}'
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Blog Content', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'content',
                    'autoload_rte' => true,
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 40,
                    'hint' => $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' <>;=#{}'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Blog Date add', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'date_add',
                    'autoload_rte' => true,
                    'lang' => false,
                    'hint' => $this->module->getTranslator()->trans('YYYY-MM-DD', array(), 'Modules.PsBlog.Admin')
                ),
                array(
                    'type' => 'text',
                    'label' => $this->module->getTranslator()->trans('Blog Date upd', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'date_upd',
                    'autoload_rte' => true,
                    'lang' => false,
                    'hint' => $this->module->getTranslator()->trans('YYYY-MM-DD HH:mm:SS', array(), 'Modules.PsBlog.Admin')
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->module->getTranslator()->trans('Indexation (by search engines):', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'indexation',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'values' => array(
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
                    ),
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
                'class' => 'btn btn-default pull-right'
            )
        );

        $this->fields_form[1]['form'] = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->module->getTranslator()->trans('SEO', array(), 'Modules.PsBlog.Admin'),
                'icon' => 'icon-folder-close'
            ),
            'input' => array(
                // custom template
                array(
                    'type' => 'textarea',
                    'label' => $this->module->getTranslator()->trans('Meta description', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_description',
                    'lang' => true,
                    'cols' => 40,
                    'rows' => 10,
                    'hint' => $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' &lt;&gt;;=#{}'
                ),
                array(
                    'type' => 'tags',
                    'label' => $this->module->getTranslator()->trans('Meta keywords', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'meta_keywords',
                    'lang' => true,
                    'hint' => array(
                        $this->module->getTranslator()->trans('Invalid characters:', array(), 'Modules.PsBlog.Admin').' &lt;&gt;;=#{}',
                        $this->module->getTranslator()->trans('To add "tags" click in the field, write something, and then press "Enter."', array(), 'Modules.PsBlog.Admin')
                    )
                ),
            )
        );

        /*      if (Shop::isFeatureActive())
          {
          $this->fields_form['input'][] = array(
          'type' => 'shop',
          'label' => $this->module->getTranslator()->trans('Shop association:', array(), 'Modules.PsBlog.Admin'),
          'name' => 'checkBoxShopAsso',
          );
          }
         */
        $this->tpl_form_vars = array(
            'active' => $this->object->active,
            'PS_ALLOW_ACCENTED_CHARS_URL', (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL')
        );
        $this->fields_value = array(
            'hidden_image' => $this->object->image,
            'hidden_thumb' => $this->object->thumb
        );
        $html = '
                            <script type="text/javascript">
                                var PS_ALLOW_ACCENTED_CHARS_URL = '.(int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL').';
                            </script>
                    ';
        return $html.AdminController::renderForm();
    }

    public function renderList()
    {
        $this->toolbar_title = $this->module->getTranslator()->trans('Blogs Management', array(), 'Modules.PsBlog.Admin');
        $this->toolbar_btn['new'] = array(
            'href' => self::$currentIndex.'&add'.$this->table.'&id_psblog_blog_category='.(int)'9'.'&token='.$this->token,
            'desc' => $this->module->getTranslator()->trans('Add new', array(), 'Modules.PsBlog.Admin')
        );

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

    public function postProcess()
    {
        if (Tools::isSubmit('viewblog') && ($id_psblog_blog = (int)Tools::getValue('id_psblog_blog')) && ($blog = new PsBlogBlog($id_psblog_blog, $this->context->language->id)) && Validate::isLoadedObject($blog)) {
            $this->redirect_after = $this->getPreviewUrl($blog);
        }

        if (Tools::isSubmit('submitAddpsblog_blog') || Tools::isSubmit('submitAddpsblog_blogAndPreview')) {
            parent::validateRules();
            if (count($this->errors)) {
                return false;
            }

            if (!$id_psblog_blog = (int)Tools::getValue('id_psblog_blog')) {
                $blog = new PsBlogBlog();
                $this->copyFromPost($blog, 'blog');

                if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
                    if (!$image = $this->_uploadImage($_FILES['image'], '', '')) {
                        return false;
                    }
                    $blog->image = $image;
                } elseif ( Tools::getValue('hidden_image') ) {
                    $blog->image = Tools::getValue('hidden_image');
                }
                
                if (isset($_FILES['thumb']) && isset($_FILES['thumb']['tmp_name']) && !empty($_FILES['thumb']['tmp_name'])) {
                    if (!$thumb = $this->_uploadImage($_FILES['thumb'], '', '')) {
                        return false;
                    }
                    $blog->thumb = $thumb;
                } elseif ( Tools::getValue('hidden_thumb') ) {
                    $blog->thumb = Tools::getValue('hidden_thumb');
                }

                $blog->id_employee = $this->context->employee->id;

                if (!$blog->add()) {
                    $this->errors[] = Tools::displayError('An error occurred while creating an object.')
                            .' <b>'.$this->table.' ('.Db::getInstance()->getMsgError().')</b>';
                } else {
                    # validate module
                    $this->updateAssoShop($blog->id);
                }
            } else {
                $blog = new PsBlogBlog($id_psblog_blog);
                $this->copyFromPost($blog, 'blog');
                //$folder = _PsBLOG_BLOG_IMG_DIR_; # validate module

                if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
                    if (file_exists(_PsBLOG_CACHE_IMG_DIR_.'b/'.$id_psblog_blog)) {
                        PsBlogHelper::rrmdir(_PsBLOG_CACHE_IMG_DIR_.'b/'.$id_psblog_blog);
                    }
                    if (!$image = $this->_uploadImage($_FILES['image'], '', '')) {
                        return false;
                    }
                    $blog->image = $image;
                } elseif (Tools::getValue('hidden_image')) {
                    $blog->image = Tools::getValue('hidden_image');
                }
                
                if (isset($_FILES['thumb']) && isset($_FILES['thumb']['tmp_name']) && !empty($_FILES['thumb']['tmp_name'])) {
                    if (file_exists(_PsBLOG_CACHE_IMG_DIR_.'b/'.$id_psblog_blog)) {
                        PsBlogHelper::rrmdir(_PsBLOG_CACHE_IMG_DIR_.'b/'.$id_psblog_blog);
                    }
                    if (!$thumb = $this->_uploadImage($_FILES['thumb'], '', '')) {
                        return false;
                    }
                    $blog->thumb = $thumb;
                } elseif (Tools::getValue('hidden_thumb')) {
                    $blog->thumb = Tools::getValue('hidden_thumb');
                }

                if (!$blog->update()) {
                    $this->errors[] = Tools::displayError('An error occurred while updating an object.')
                            .' <b>'.$this->table.' ('.Db::getInstance()->getMsgError().')</b>';
                } else {
                    # validate module
                    $this->updateAssoShop($blog->id);
                }
            }

            if (Tools::isSubmit('submitAddblogAndPreview')) {
                # validate module
                $this->redirect_after = $this->previewUrl($blog);
            } elseif (Tools::isSubmit('submitAdd'.$this->table.'AndStay')) {
                # validate module
                Tools::redirectAdmin(self::$currentIndex.'&'.$this->identifier.'='.$blog->id.'&conf=4&update'.$this->table.'&token='.Tools::getValue('token'));
            } else {
                # validate module
                Tools::redirectAdmin(self::$currentIndex.'&id_psblogcat='.$blog->id_psblogcat.'&conf=4&token='.Tools::getValue('token'));
            }
        } else {
            parent::postProcess(true);
        }
    }

    protected function _uploadImage($image, $image_w = '', $image_h = '')
    {
        $res = false;
        if (is_array($image) && (ImageManager::validateUpload($image, $this->max_image_size) === false) && ($tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) && move_uploaded_file($image['tmp_name'], $tmp_name)) {
            $type = Tools::strtolower(Tools::substr(strrchr($image['name'], '.'), 1));
            $img_name = 'b-'.Tools::strtolower(str_replace('.'.$type, '', $image['name']).'.'.$type);

            Configuration::set('PS_IMAGE_QUALITY', 'png_all');
            if (ImageManager::resize($tmp_name, _PsBLOG_BLOG_IMG_DIR_.'b/'.$img_name, $image_w, $image_h)) {
                $res = true;
            }
        }

//      if (isset($temp_name))
//              @unlink($tmp_name);
        if (!$res) {
            # validate module
            return false;
        }

        return $img_name;
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);
        $this->addJqueryUi('ui.widget');
        $this->addJqueryPlugin('tagify');
		$this->addJqueryUI('ui.datepicker');
		$this->context->controller->addJS(__PS_BASE_URI__.'modules/psblog/views/js/admin/formblog.js');
    }

    public function ajaxProcessUpdateblogPositions()
    {
        if ($this->tabAccess['edit'] === '1') {
            $id_psblog_blog = (int)Tools::getValue('id_psblog_blog');
            $id_category = (int)Tools::getValue('id_psblog_blog_category');
            $way = (int)Tools::getValue('way');
            $positions = Tools::getValue('blog');
            if (is_array($positions)) {
                foreach ($positions as $key => $value) {
                    $pos = explode('_', $value);
                    if ((isset($pos[1]) && isset($pos[2])) && ($pos[1] == $id_category && $pos[2] == $id_psblog_blog)) {
                        $position = $key;
                        break;
                    }
                }
            }
            $blog = new blog($id_psblog_blog);
            if (Validate::isLoadedObject($blog)) {
                if (isset($position) && $blog->updatePosition($way, $position)) {
                    die(true);
                } else {
                    die('{"hasError" : true, "errors" : "Can not update blog position"}');
                }
            } else {
                die('{"hasError" : true, "errors" : "This blog can not be loaded"}');
            }
        }
    }

    public function ajaxProcessUpdateblogCategoriesPositions()
    {
        if ($this->tabAccess['edit'] === '1') {
            $id_psblog_blog_category_to_move = (int)Tools::getValue('id_psblog_blog_category_to_move');
            $id_psblog_blog_category_parent = (int)Tools::getValue('id_psblog_blog_category_parent');
            $way = (int)Tools::getValue('way');
            $positions = Tools::getValue('blog_category');
            if (is_array($positions)) {
                foreach ($positions as $key => $value) {
                    $pos = explode('_', $value);
                    if ((isset($pos[1]) && isset($pos[2])) && ($pos[1] == $id_psblog_blog_category_parent && $pos[2] == $id_psblog_blog_category_to_move)) {
                        $position = $key;
                        break;
                    }
                }
            }
            $blog_category = new blogCategory($id_psblog_blog_category_to_move);
            if (Validate::isLoadedObject($blog_category)) {
                if (isset($position) && $blog_category->updatePosition($way, $position)) {
                    die(true);
                } else {
                    die('{"hasError" : true, "errors" : "Can not update blog categories position"}');
                }
            } else {
                die('{"hasError" : true, "errors" : "This blog category can not be loaded"}');
            }
        }
    }

    public function ajaxProcessPublishblog()
    {
        if ($this->tabAccess['edit'] === '1') {
            if ($id_psblog_blog = (int)Tools::getValue('id_psblog_blog')) {
                $bo_blog_url = dirname($_SERVER['PHP_SELF']).'/index.php?tab=AdminblogContent&id_psblog_blog='.(int)$id_psblog_blog.'&updateblog&token='.$this->token;

                if (Tools::getValue('redirect')) {
                    die($bo_blog_url);
                }

                $blog = new blog((int)(Tools::getValue('id_psblog_blog')));
                if (!Validate::isLoadedObject($blog)) {
                    die('error: invalid id');
                }

                $blog->active = 1;
                if ($blog->save()) {
                    die($bo_blog_url);
                } else {
                    die('error: saving');
                }
            } else {
                die('error: parameters');
            }
        }
    }
}
