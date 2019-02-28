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
if (!class_exists('PsblogOwlCarousel')) {

    class PsblogOwlCarousel
    {
        const MODULE_NAME = 'pstempcp';

        public static function l($string, $specific = false, $name = '')
        {
            if (empty($name)) {
                # validate module
                $name = self::MODULE_NAME;
            }
            return Translate::getModuleTranslation($name, $string, ($specific) ? $specific : $name);
        }
        const ENABLE = '1';
        const DISABLE = '0';

        public static function getEnableOptions()
        {
            return array(array(
                    'id' => 'active_on',
                    'value' => self::ENABLE,
                    'label' => self::l('Enabled')
                ),
                array(
                    'id' => 'active_off',
                    'value' => self::DISABLE,
                    'label' => self::l('Disabled')
            ));
        }
        const CAROUSEL_BOOTSTRAP = 'carousel_bootstrap';
        const CAROUSEL_OWL = 'carousel_owl';

        public static function getCaroulseOptions()
        {
            return array(
                array(
                    'value' => self::CAROUSEL_BOOTSTRAP,
                    'name' => self::l('Bootstrap'),
                ),
                array(
                    'value' => self::CAROUSEL_OWL,
                    'name' => self::l('Own Carousel'),
                ),
            );
        }
        const TRANSITIONSTYLE_FADE = 'fade';
        const TRANSITIONSTYLE_BACKSLIDE = 'backSlide';
        const TRANSITIONSTYLE_GODOWN = 'goDown';
        const TRANSITIONSTYLE_FADEUP = 'fadeUp';

        public static function getTransitionStyleOptions()
        {
            return array(
                array(
                    'value' => self::TRANSITIONSTYLE_FADE,
                    'name' => self::l('Fade'),
                ),
                array(
                    'value' => self::TRANSITIONSTYLE_BACKSLIDE,
                    'name' => self::l('Back Slide'),
                ),
                array(
                    'value' => self::TRANSITIONSTYLE_GODOWN,
                    'name' => self::l('Go Down'),
                ),
                array(
                    'value' => self::TRANSITIONSTYLE_FADEUP,
                    'name' => self::l('Fade Up'),
                ),
            );
        }

        /**
         * Declare owl carousel inputs of form in Backend
         */
        public function getOwlCarouselAdminFormOptions()
        {
            return array(
                # config for Owl Carousel - BEGIN
                array(
                    'type' => 'text',
                    'label' => $this->getTranslator()->trans('Items Per Row', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_items',
                    'default' => 3,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'fixed-width-xl digits',
                    'desc' => $this->getTranslator()->trans('This variable allows you to set the maximum amount of items displayed at a time with the widest browser width', array(), 'Modules.PsBlog.Admin'),
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->getTranslator()->trans('Number of rows', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_rows',
                    'default' => 1,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'fixed-width-xl digits',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->getTranslator()->trans('Auto Play', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_autoPlay',
                    'default' => 8000,
                    'desc' => $this->getTranslator()->trans('Enter Time(miniseconds) to play carousel. Value 0 to stop.', array(), 'Modules.PsBlog.Admin'),
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'fixed-width-xl digits',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Stop On Hover', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_stopOnHover',
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'values' => self::getEnableOptions(),
                    'desc' => $this->getTranslator()->trans('Stop "Auto Play" on mouse hover.', array(), 'Modules.PsBlog.Admin'),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Auto Height', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_autoHeight',
                    'default' => self::DISABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'values' => self::getEnableOptions(),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Reponsive', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_responsive',
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'values' => self::getEnableOptions(),
                ),
                /*
                  array(
                  'type' => 'select',
                  'label' => $this->getTranslator()->trans('Transition Style', array(), 'Modules.PsBlog.Admin'),
                  'name' => 'owl_transitionStyle',
                  'default' => PsmanagewidgetsOwlCarousel::TRANSITIONSTYLE_FADE,
                  'form_group_class' => 'carousel_type_sub carousel_type-' . self::CAROUSEL_OWL,
                  'options' => array(
                  'query' => PsmanagewidgetsOwlCarousel::getTransitionStyleOptions(),
                  'id' => 'value',
                  'name' => 'name'
                  )
                  ),
                 */
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Mouse Drag', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_mouseDrag',
                    'desc' => $this->getTranslator()->trans('Turn off/on mouse events.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Touch Drag', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_touchDrag',
                    'desc' => $this->getTranslator()->trans('Turn off/on touch events.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Navigation', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_navigation',
                    'desc' => $this->getTranslator()->trans('Display "next" and "prev" buttons.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_slideSpeed',
                    'label' => $this->getTranslator()->trans('Slide Speed', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('Slide speed in milliseconds. Time to next/drag/tough each item. Ex 200.', array(), 'Modules.PsBlog.Admin'),
                    'default' => '200',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'fixed-width-xl digits',
                ),
                array(
                    'type' => 'html',
                    'name' => 'noname',
                    'html_content' => '<div class="space"><strong>'.$this->getTranslator()->trans('Items for Screens', array(), 'Modules.PsBlog.Admin').'</strong><hr/></div>',
                    'default' => 'novalue',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsDesktop',
                    'label' => $this->getTranslator()->trans('Items Desktop (~1199)', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('This allows you to preset the number of slides visible with ItemsDesktop (1199). Value 0 to disable. (Ex 4).', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'required carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                //'required' => 'true',
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsDesktopSmall',
                    'label' => $this->getTranslator()->trans('Items Desktop Small (~979)', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('This allows you to preset the number of slides visible with itemsDesktopSmall (979px). Value 0 to disable. (Ex 3).', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsTablet',
                    'label' => $this->getTranslator()->trans('Items Tablet (~768)', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('This allows you to preset the number of slides visible with itemsTablet (768). Value 0 to disable. (Ex 2).', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsTabletSmall',
                    'label' => $this->getTranslator()->trans('Items Tablet Small (~640)', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('This allows you to preset the number of slides visible with itemsTabletSmall (640). Value 0 to disable. (Ex 2).', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsMobile',
                    'label' => $this->getTranslator()->trans('Items Mobile (~479)', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('This allows you to preset the number of slides visible with itemsmobile (360). Value 0 to disable. (Ex 1).', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_itemsCustom',
                    'label' => $this->getTranslator()->trans('Items Custom', array(), 'Modules.PsBlog.Admin'),
                    //'desc' => $this->getTranslator()->trans('(Advance User) Example: [[0, 2], [400, 4], [700, 6], [1000, 8], [1200, 10], [1600, 16]]. The format is [x,y] whereby x=browser width and y=number of slides displayed. Value 0 to disable.', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('(Advance User) Example: [[320, 1], [360, 1], [480, 2], [568, 2], [600, 2], [640, 2], [768, 3], [900, 3], [960, 3], [1024, 4]]. The format is [x,y] whereby x=browser width and y=number of slides displayed. Override all above Items. Value 0 to disable.', array(), 'Modules.PsBlog.Admin'),
                    'default' => '0',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'owl_items_custom',
                ),
                array(
                    'type' => 'html',
                    'name' => 'noname',
                    'html_content' => '<div class="space"><strong>'.$this->getTranslator()->trans('Effect', array(), 'Modules.PsBlog.Admin').'</strong><hr/></div>',
                    'default' => 'novalue',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Lazy Load', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_lazyLoad',
                    'default' => self::DISABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'values' => self::getEnableOptions(),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Lazy Effect', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_lazyEffect',
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'values' => self::getEnableOptions(),
                    'desc' => $this->getTranslator()->trans('Default is fadeIn on 400ms speed.', array(), 'Modules.PsBlog.Admin'),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Lazy Follow', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_lazyFollow',
                    'is_bool' => true,
                    'desc' => $this->getTranslator()->trans('When pagination used, it skips loading the images from pages that got skipped. It only loads the images that get displayed in viewport. If set to false, all images get loaded when pagination used. It is a sub setting of the lazy load function.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'html',
                    'name' => 'noname',
                    'html_content' => '<div class="space"><strong>'.$this->getTranslator()->trans('Pagination', array(), 'Modules.PsBlog.Admin').'</strong><hr/></div>',
                    'default' => 'novalue',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Show Pagination', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_pagination',
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Show Pagination Numbers', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_paginationNumbers',
                    'values' => self::getEnableOptions(),
                    'default' => self::DISABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_paginationSpeed',
                    'label' => $this->getTranslator()->trans('Pagination Speed', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('Enter Time(miniseconds) to next/prev page. Ex 800.', array(), 'Modules.PsBlog.Admin'),
                    'default' => '800',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Rewind Nav', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_rewindNav',
                    'is_bool' => true,
                    'desc' => $this->getTranslator()->trans('Slide to first page. Use "Rewind Speed" to change animation speed.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::ENABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
                array(
                    'type' => 'text',
                    'name' => 'owl_rewindSpeed',
                    'label' => $this->getTranslator()->trans('Rewind Speed', array(), 'Modules.PsBlog.Admin'),
                    'desc' => $this->getTranslator()->trans('Enter Time(miniseconds) to back first page. "Rewind Nav" must be enable. Ex 1000', array(), 'Modules.PsBlog.Admin'),
                    'default' => '1000',
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                    'class' => 'digits',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->getTranslator()->trans('Scroll Per Page', array(), 'Modules.PsBlog.Admin'),
                    'name' => 'owl_scrollPerPage',
                    'is_bool' => true,
                    'desc' => $this->getTranslator()->trans('Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging. Use "Slide Speed" to change animation speed.', array(), 'Modules.PsBlog.Admin'),
                    'values' => self::getEnableOptions(),
                    'default' => self::DISABLE,
                    'form_group_class' => 'carousel_type_sub carousel_type-'.self::CAROUSEL_OWL,
                ),
            );
        }
    }

}
