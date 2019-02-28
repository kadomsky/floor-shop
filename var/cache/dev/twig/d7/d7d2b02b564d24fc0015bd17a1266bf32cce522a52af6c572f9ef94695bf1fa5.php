<?php

/* __string_template__0ed8adf8af5e0ea10d842571490e0bb5839cb209c606466b3273dbfff9720b6c */
class __TwigTemplate_3f7a4fe4e7412a8a9f2a202d1f2df6833cfc953c24b671a2ba91470f11943238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5e45690ef7de6a012d4171c53ffbd2eeaacc965e8642aea92e3fe2478f7ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5e45690ef7de6a012d4171c53ffbd2eeaacc965e8642aea92e3fe2478f7ce4->enter($__internal_ea5e45690ef7de6a012d4171c53ffbd2eeaacc965e8642aea92e3fe2478f7ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__0ed8adf8af5e0ea10d842571490e0bb5839cb209c606466b3273dbfff9720b6c"));

        $__internal_8939fca259bab8e3fcc1c2d445a5c1cfabb61b98b57f6cda4cf5bd15d6e35efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8939fca259bab8e3fcc1c2d445a5c1cfabb61b98b57f6cda4cf5bd15d6e35efd->enter($__internal_8939fca259bab8e3fcc1c2d445a5c1cfabb61b98b57f6cda4cf5bd15d6e35efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__0ed8adf8af5e0ea10d842571490e0bb5839cb209c606466b3273dbfff9720b6c"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Производительность • магазин ковролина</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '8b47352a1a096195c726eb355fd1e7f3';
    var token_admin_orders = '992e152db4addae3daa910365b80a442';
    var token_admin_customers = '089574e18f76eb0ed89ea24d870d4a3b';
    var token_admin_customer_threads = 'e00c0f6e0971861fb12d1f1d46d8bd3e';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'add9490bade5b703eb8ff66521da52eb';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin444r1iiva/index.php/improve/modules/catalog/recommended?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin444r1iiva/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin444r1iiva/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin444r1iiva\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u0440\\u0443\\u0431.\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminGamification&token=b9782a6db20fce13d434bf0eb283ff54';
\t\t\t\tvar current_id_tab = 103;
\t\t\t</script>

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-ru adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCategories&amp;addcategory&amp;token=20fff170f7c956478b6f67e6afeacb21\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6aaef3094099882ae7e805e59f5f1250\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php/sell/catalog/products/new?token=3276c37f29bea4f63b6d30679a0caf6e\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=feea0645aa7083d6ebf0b4d2e4396b14\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php/improve/modules/manage?token=3276c37f29bea4f63b6d30679a0caf6e\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"4\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
        data-post-link=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminQuickAccesses&token=4431fdfc5db09a5be18ec0930ac75ea3\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Производительность - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminQuickAccesses&token=4431fdfc5db09a5be18ec0930ac75ea3\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin444r1iiva/index.php?controller=AdminSearch&amp;token=e415a8518aec0d0a411cee32206f97c7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Ваш сайт в режиме отладки.</strong></p><p class='text-left'>Отображаются все ошибки и сообщения РНР. Если вам это болше не нужно, <strong>выключите</strong> этот режим.</p>\"
           href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Режим отладки</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://shop.floor-shop.ru/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Давно проверяли вашу конверсию?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Видимо, все ваши клиенты счастливы :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/info%40floor-shop.ru.jpg\" />
      <span>Floor Admin</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=add9490bade5b703eb8ff66521da52eb\">
      <i class=\"material-icons\">settings_applications</i>
      Ваш профиль
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminLogin&amp;logout=1&amp;token=f61ccb410be2bd95a3953fda74224dab\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin444r1iiva/index.php/sell/orders/invoices/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSlip&amp;token=d5cdb4b977588deb67cfd261933e7fc7\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin444r1iiva/index.php/sell/orders/delivery-slips/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarts&amp;token=f5bdd91d9d93698be331b3e9e6942538\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin444r1iiva/index.php/sell/catalog/products?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin444r1iiva/index.php/sell/catalog/products?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCategories&amp;token=20fff170f7c956478b6f67e6afeacb21\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminTracking&amp;token=ff33b777a298874c51f089a29eb99446\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAttributesGroups&amp;token=79b9d859a97c049522f82b0c82d15edd\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminManufacturers&amp;token=ac5a6f56b682f3c6b0a575040e7c1390\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAttachments&amp;token=dae84daf071beeb64934b8ee5af0888a\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCartRules&amp;token=6aaef3094099882ae7e805e59f5f1250\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin444r1iiva/index.php/sell/stocks/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomers&amp;token=089574e18f76eb0ed89ea24d870d4a3b\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomers&amp;token=089574e18f76eb0ed89ea24d870d4a3b\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAddresses&amp;token=0de387c402d458b8016467e15187aa24\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomerThreads&amp;token=e00c0f6e0971861fb12d1f1d46d8bd3e\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomerThreads&amp;token=e00c0f6e0971861fb12d1f1d46d8bd3e\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrderMessage&amp;token=e98d109da13dee205ec4da5d98792c36\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminReturn&amp;token=5bba6a33df8badafddeb0bdfb4c37047\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminStats&amp;token=feea0645aa7083d6ebf0b4d2e4396b14\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&amp;token=0165ae6d69da2dffe4db0cad31651cee\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&amp;token=0165ae6d69da2dffe4db0cad31651cee\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin444r1iiva/index.php/improve/modules/manage?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminThemes&amp;token=faf924ba1df62fff00d406466acdb854\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminThemes&amp;token=faf924ba1df62fff00d406466acdb854\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboTheme&amp;token=60895267635a82f918c84ecd3d6896b0\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCmsContent&amp;token=071791f4b35e46aad108c099d4b13ff9\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin444r1iiva/index.php/improve/design/modules/positions/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminImages&amp;token=b94833d55a2dc17af5675a419267b557\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin444r1iiva/index.php/modules/link-widget/list?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarriers&amp;token=cfb028a554b84ce9d01e00c18b6fb4e6\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarriers&amp;token=cfb028a554b84ce9d01e00c18b6fb4e6\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin444r1iiva/index.php/improve/shipping/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin444r1iiva/index.php/improve/payment/payment_methods?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin444r1iiva/index.php/improve/payment/payment_methods?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin444r1iiva/index.php/improve/payment/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin444r1iiva/index.php/improve/international/localization/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin444r1iiva/index.php/improve/international/localization/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminZones&amp;token=baa40be6974a132e102f9f622710e1ea\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminTaxes&amp;token=dafc342363dc688617e32cb0488738b9\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin444r1iiva/index.php/improve/international/translations/settings?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-AdminPsblogManagement\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogDashboard&amp;token=b17cee58ea399c208a2535e1f0cd20ce\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Ps Blog Management
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsblogDashboard\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogDashboard&amp;token=b17cee58ea399c208a2535e1f0cd20ce\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsblogCategories\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogCategories&amp;token=6b69d859411357261e2aefa4f33ebc2e\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsblogBlogs\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogBlogs&amp;token=26ccfedfafb854d86f0af16030ece86f\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsblogComments\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogComments&amp;token=0a4cfa7389988a5b8290b95b80ecd785\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"138\" id=\"subtab-AdminPsblogModule\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogModule&amp;token=6ffa8ac7c5e4afd62757ec74641b4e19\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin444r1iiva/index.php/configure/shop/preferences/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/preferences/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/order-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/product-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/customer-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminContacts&amp;token=7f8ffdf65407d72c8fa05c2f26f1aea5\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/seo-urls/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSearchConf&amp;token=92e43d958351bcf7e353ccc4a061f456\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminGamification&amp;token=b9782a6db20fce13d434bf0eb283ff54\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin444r1iiva/index.php/configure/advanced/system-information/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/system-information/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/administration/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/emails/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/import/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminEmployees&amp;token=add9490bade5b703eb8ff66521da52eb\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminRequestSql&amp;token=3c1be0397b9a721c69dbdcb0ffd4cc51\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/logs/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminWebservice&amp;token=f055f73234ba4480cb0c7ca0e7f75c7e\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"119\" id=\"tab-DEFAULT\">
              <span class=\"title\">Еще</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSelfUpgrade&amp;token=dfaff441a20468dab48ab12dc24efeb6\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Расширенные параметры</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" aria-current=\"page\">Производительность</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Производительность          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&token=0165ae6d69da2dffe4db0cad31651cee';
    var controller = 'AdminPerformance';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin444r1iiva/index.php/configure/advanced/performance/clear-cache?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"                  title=\"Очистка кэша\"                >
                  <i class=\"material-icons\">delete</i>
                  Очистка кэша
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin444r1iiva/index.php/improve/modules/catalog?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin444r1iiva/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.5.1%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1216
        $this->displayBlock('content_header', $context, $blocks);
        // line 1217
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1218
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1219
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1220
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=info%40floor-shop.ru&amp;firstname=Floor&amp;lastname=Admin&amp;website=http%3A%2F%2Fshop.floor-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin444r1iiva/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=info%40floor-shop.ru&amp;firstname=Floor&amp;lastname=Admin&amp;website=http%3A%2F%2Fshop.floor-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1343
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_ea5e45690ef7de6a012d4171c53ffbd2eeaacc965e8642aea92e3fe2478f7ce4->leave($__internal_ea5e45690ef7de6a012d4171c53ffbd2eeaacc965e8642aea92e3fe2478f7ce4_prof);

        
        $__internal_8939fca259bab8e3fcc1c2d445a5c1cfabb61b98b57f6cda4cf5bd15d6e35efd->leave($__internal_8939fca259bab8e3fcc1c2d445a5c1cfabb61b98b57f6cda4cf5bd15d6e35efd_prof);

    }

    // line 83
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_491cc37df3a95e7657e84a3f239c1d2ddb9bd6aff0e889211a985c5bd366c73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491cc37df3a95e7657e84a3f239c1d2ddb9bd6aff0e889211a985c5bd366c73a->enter($__internal_491cc37df3a95e7657e84a3f239c1d2ddb9bd6aff0e889211a985c5bd366c73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d86d3f230874c799965a162ec96f7e2ebb5f2662ffd09c6e252fc6aabfa61893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86d3f230874c799965a162ec96f7e2ebb5f2662ffd09c6e252fc6aabfa61893->enter($__internal_d86d3f230874c799965a162ec96f7e2ebb5f2662ffd09c6e252fc6aabfa61893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d86d3f230874c799965a162ec96f7e2ebb5f2662ffd09c6e252fc6aabfa61893->leave($__internal_d86d3f230874c799965a162ec96f7e2ebb5f2662ffd09c6e252fc6aabfa61893_prof);

        
        $__internal_491cc37df3a95e7657e84a3f239c1d2ddb9bd6aff0e889211a985c5bd366c73a->leave($__internal_491cc37df3a95e7657e84a3f239c1d2ddb9bd6aff0e889211a985c5bd366c73a_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_945ef0f771b531bbc7ac571fcd712bcd47f1c1eb174c8a7a30dbc86a01801945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945ef0f771b531bbc7ac571fcd712bcd47f1c1eb174c8a7a30dbc86a01801945->enter($__internal_945ef0f771b531bbc7ac571fcd712bcd47f1c1eb174c8a7a30dbc86a01801945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_219ce4cc617a2c87ffe19eb76ee354df987606bb83600b80687e9d1b2e53a23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219ce4cc617a2c87ffe19eb76ee354df987606bb83600b80687e9d1b2e53a23b->enter($__internal_219ce4cc617a2c87ffe19eb76ee354df987606bb83600b80687e9d1b2e53a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_219ce4cc617a2c87ffe19eb76ee354df987606bb83600b80687e9d1b2e53a23b->leave($__internal_219ce4cc617a2c87ffe19eb76ee354df987606bb83600b80687e9d1b2e53a23b_prof);

        
        $__internal_945ef0f771b531bbc7ac571fcd712bcd47f1c1eb174c8a7a30dbc86a01801945->leave($__internal_945ef0f771b531bbc7ac571fcd712bcd47f1c1eb174c8a7a30dbc86a01801945_prof);

    }

    // line 1216
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_b2c81854647bc08810e7ff02cfe3ec5c7a1b6e6bbb74ae9d808daa722daf33e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c81854647bc08810e7ff02cfe3ec5c7a1b6e6bbb74ae9d808daa722daf33e5->enter($__internal_b2c81854647bc08810e7ff02cfe3ec5c7a1b6e6bbb74ae9d808daa722daf33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_08f1882e398ee4a4d69e022609cefabd8658bea7141b2304408078136ce00dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f1882e398ee4a4d69e022609cefabd8658bea7141b2304408078136ce00dc7->enter($__internal_08f1882e398ee4a4d69e022609cefabd8658bea7141b2304408078136ce00dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_08f1882e398ee4a4d69e022609cefabd8658bea7141b2304408078136ce00dc7->leave($__internal_08f1882e398ee4a4d69e022609cefabd8658bea7141b2304408078136ce00dc7_prof);

        
        $__internal_b2c81854647bc08810e7ff02cfe3ec5c7a1b6e6bbb74ae9d808daa722daf33e5->leave($__internal_b2c81854647bc08810e7ff02cfe3ec5c7a1b6e6bbb74ae9d808daa722daf33e5_prof);

    }

    // line 1217
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ed48ba5abe9404fea58f4c8dc169b240d22d717a488a68a310d3f875b476950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed48ba5abe9404fea58f4c8dc169b240d22d717a488a68a310d3f875b476950->enter($__internal_6ed48ba5abe9404fea58f4c8dc169b240d22d717a488a68a310d3f875b476950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a441afba214de4a277c3666c1c70bb8332754a9455dc484ee75843733fb36941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a441afba214de4a277c3666c1c70bb8332754a9455dc484ee75843733fb36941->enter($__internal_a441afba214de4a277c3666c1c70bb8332754a9455dc484ee75843733fb36941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a441afba214de4a277c3666c1c70bb8332754a9455dc484ee75843733fb36941->leave($__internal_a441afba214de4a277c3666c1c70bb8332754a9455dc484ee75843733fb36941_prof);

        
        $__internal_6ed48ba5abe9404fea58f4c8dc169b240d22d717a488a68a310d3f875b476950->leave($__internal_6ed48ba5abe9404fea58f4c8dc169b240d22d717a488a68a310d3f875b476950_prof);

    }

    // line 1218
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_804fa811cdc5adba3b9b221b13597de098541f6e9dd091d8874806750a7d661c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804fa811cdc5adba3b9b221b13597de098541f6e9dd091d8874806750a7d661c->enter($__internal_804fa811cdc5adba3b9b221b13597de098541f6e9dd091d8874806750a7d661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_2d22fe2e13b49cc46368139fbc17ef57d7e86ebe7281bf642db3020da2887799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d22fe2e13b49cc46368139fbc17ef57d7e86ebe7281bf642db3020da2887799->enter($__internal_2d22fe2e13b49cc46368139fbc17ef57d7e86ebe7281bf642db3020da2887799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_2d22fe2e13b49cc46368139fbc17ef57d7e86ebe7281bf642db3020da2887799->leave($__internal_2d22fe2e13b49cc46368139fbc17ef57d7e86ebe7281bf642db3020da2887799_prof);

        
        $__internal_804fa811cdc5adba3b9b221b13597de098541f6e9dd091d8874806750a7d661c->leave($__internal_804fa811cdc5adba3b9b221b13597de098541f6e9dd091d8874806750a7d661c_prof);

    }

    // line 1219
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_0be43b9afdcd6050bb90ed096846ae456770188f89cad0d71730a62d014bbd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be43b9afdcd6050bb90ed096846ae456770188f89cad0d71730a62d014bbd1f->enter($__internal_0be43b9afdcd6050bb90ed096846ae456770188f89cad0d71730a62d014bbd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_07ea3994e1b265845ebc11a5f2dca7e41d84ace0744b1ad36a92e50c108b8de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ea3994e1b265845ebc11a5f2dca7e41d84ace0744b1ad36a92e50c108b8de9->enter($__internal_07ea3994e1b265845ebc11a5f2dca7e41d84ace0744b1ad36a92e50c108b8de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_07ea3994e1b265845ebc11a5f2dca7e41d84ace0744b1ad36a92e50c108b8de9->leave($__internal_07ea3994e1b265845ebc11a5f2dca7e41d84ace0744b1ad36a92e50c108b8de9_prof);

        
        $__internal_0be43b9afdcd6050bb90ed096846ae456770188f89cad0d71730a62d014bbd1f->leave($__internal_0be43b9afdcd6050bb90ed096846ae456770188f89cad0d71730a62d014bbd1f_prof);

    }

    // line 1343
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67590932746dc15c4dbdb565cabfe70441d7415c4ce6cc637d42400b47fb8d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67590932746dc15c4dbdb565cabfe70441d7415c4ce6cc637d42400b47fb8d76->enter($__internal_67590932746dc15c4dbdb565cabfe70441d7415c4ce6cc637d42400b47fb8d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16f4b678c21e50fd574e91c9c65a82751cf8e7510de7fe37b123c7ba348bced8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f4b678c21e50fd574e91c9c65a82751cf8e7510de7fe37b123c7ba348bced8->enter($__internal_16f4b678c21e50fd574e91c9c65a82751cf8e7510de7fe37b123c7ba348bced8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16f4b678c21e50fd574e91c9c65a82751cf8e7510de7fe37b123c7ba348bced8->leave($__internal_16f4b678c21e50fd574e91c9c65a82751cf8e7510de7fe37b123c7ba348bced8_prof);

        
        $__internal_67590932746dc15c4dbdb565cabfe70441d7415c4ce6cc637d42400b47fb8d76->leave($__internal_67590932746dc15c4dbdb565cabfe70441d7415c4ce6cc637d42400b47fb8d76_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_943bc44a3b83418dce76b8054fabeab0c3a23392cccf2d6614f7a577b002230f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943bc44a3b83418dce76b8054fabeab0c3a23392cccf2d6614f7a577b002230f->enter($__internal_943bc44a3b83418dce76b8054fabeab0c3a23392cccf2d6614f7a577b002230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_ca7c56483f02980a166f2728717c5c790cbf068bd20b1a9c7d02ffe269648555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7c56483f02980a166f2728717c5c790cbf068bd20b1a9c7d02ffe269648555->enter($__internal_ca7c56483f02980a166f2728717c5c790cbf068bd20b1a9c7d02ffe269648555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_ca7c56483f02980a166f2728717c5c790cbf068bd20b1a9c7d02ffe269648555->leave($__internal_ca7c56483f02980a166f2728717c5c790cbf068bd20b1a9c7d02ffe269648555_prof);

        
        $__internal_943bc44a3b83418dce76b8054fabeab0c3a23392cccf2d6614f7a577b002230f->leave($__internal_943bc44a3b83418dce76b8054fabeab0c3a23392cccf2d6614f7a577b002230f_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_5459601096d722dde165dc8ebc51504929323bd6fe6478a124dd4d9d8e9fd631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5459601096d722dde165dc8ebc51504929323bd6fe6478a124dd4d9d8e9fd631->enter($__internal_5459601096d722dde165dc8ebc51504929323bd6fe6478a124dd4d9d8e9fd631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_9c831b7747193ddbda01fc6ef72a97b6fa0ea28ca9fb16a0e0260563edf9658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c831b7747193ddbda01fc6ef72a97b6fa0ea28ca9fb16a0e0260563edf9658e->enter($__internal_9c831b7747193ddbda01fc6ef72a97b6fa0ea28ca9fb16a0e0260563edf9658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_9c831b7747193ddbda01fc6ef72a97b6fa0ea28ca9fb16a0e0260563edf9658e->leave($__internal_9c831b7747193ddbda01fc6ef72a97b6fa0ea28ca9fb16a0e0260563edf9658e_prof);

        
        $__internal_5459601096d722dde165dc8ebc51504929323bd6fe6478a124dd4d9d8e9fd631->leave($__internal_5459601096d722dde165dc8ebc51504929323bd6fe6478a124dd4d9d8e9fd631_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__0ed8adf8af5e0ea10d842571490e0bb5839cb209c606466b3273dbfff9720b6c";
    }

    public function getDebugInfo()
    {
        return array (  1506 => 1343,  1489 => 1219,  1472 => 1218,  1455 => 1217,  1438 => 1216,  1405 => 83,  1391 => 1343,  1266 => 1220,  1263 => 1219,  1260 => 1218,  1257 => 1217,  1255 => 1216,  118 => 83,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Производительность • магазин ковролина</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '8b47352a1a096195c726eb355fd1e7f3';
    var token_admin_orders = '992e152db4addae3daa910365b80a442';
    var token_admin_customers = '089574e18f76eb0ed89ea24d870d4a3b';
    var token_admin_customer_threads = 'e00c0f6e0971861fb12d1f1d46d8bd3e';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'add9490bade5b703eb8ff66521da52eb';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin444r1iiva/index.php/improve/modules/catalog/recommended?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin444r1iiva/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin444r1iiva/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin444r1iiva\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u0440\\u0443\\u0431.\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin444r1iiva/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminGamification&token=b9782a6db20fce13d434bf0eb283ff54';
\t\t\t\tvar current_id_tab = 103;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-ru adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCategories&amp;addcategory&amp;token=20fff170f7c956478b6f67e6afeacb21\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6aaef3094099882ae7e805e59f5f1250\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php/sell/catalog/products/new?token=3276c37f29bea4f63b6d30679a0caf6e\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=feea0645aa7083d6ebf0b4d2e4396b14\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php/improve/modules/manage?token=3276c37f29bea4f63b6d30679a0caf6e\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"4\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
        data-post-link=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminQuickAccesses&token=4431fdfc5db09a5be18ec0930ac75ea3\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Производительность - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminQuickAccesses&token=4431fdfc5db09a5be18ec0930ac75ea3\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin444r1iiva/index.php?controller=AdminSearch&amp;token=e415a8518aec0d0a411cee32206f97c7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Ваш сайт в режиме отладки.</strong></p><p class='text-left'>Отображаются все ошибки и сообщения РНР. Если вам это болше не нужно, <strong>выключите</strong> этот режим.</p>\"
           href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Режим отладки</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://shop.floor-shop.ru/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Давно проверяли вашу конверсию?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Видимо, все ваши клиенты счастливы :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/info%40floor-shop.ru.jpg\" />
      <span>Floor Admin</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=add9490bade5b703eb8ff66521da52eb\">
      <i class=\"material-icons\">settings_applications</i>
      Ваш профиль
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminLogin&amp;logout=1&amp;token=f61ccb410be2bd95a3953fda74224dab\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrders&amp;token=992e152db4addae3daa910365b80a442\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin444r1iiva/index.php/sell/orders/invoices/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSlip&amp;token=d5cdb4b977588deb67cfd261933e7fc7\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin444r1iiva/index.php/sell/orders/delivery-slips/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarts&amp;token=f5bdd91d9d93698be331b3e9e6942538\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin444r1iiva/index.php/sell/catalog/products?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin444r1iiva/index.php/sell/catalog/products?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCategories&amp;token=20fff170f7c956478b6f67e6afeacb21\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminTracking&amp;token=ff33b777a298874c51f089a29eb99446\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAttributesGroups&amp;token=79b9d859a97c049522f82b0c82d15edd\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminManufacturers&amp;token=ac5a6f56b682f3c6b0a575040e7c1390\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAttachments&amp;token=dae84daf071beeb64934b8ee5af0888a\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCartRules&amp;token=6aaef3094099882ae7e805e59f5f1250\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin444r1iiva/index.php/sell/stocks/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomers&amp;token=089574e18f76eb0ed89ea24d870d4a3b\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomers&amp;token=089574e18f76eb0ed89ea24d870d4a3b\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminAddresses&amp;token=0de387c402d458b8016467e15187aa24\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomerThreads&amp;token=e00c0f6e0971861fb12d1f1d46d8bd3e\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCustomerThreads&amp;token=e00c0f6e0971861fb12d1f1d46d8bd3e\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminOrderMessage&amp;token=e98d109da13dee205ec4da5d98792c36\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminReturn&amp;token=5bba6a33df8badafddeb0bdfb4c37047\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminStats&amp;token=feea0645aa7083d6ebf0b4d2e4396b14\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&amp;token=0165ae6d69da2dffe4db0cad31651cee\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&amp;token=0165ae6d69da2dffe4db0cad31651cee\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin444r1iiva/index.php/improve/modules/manage?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminThemes&amp;token=faf924ba1df62fff00d406466acdb854\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminThemes&amp;token=faf924ba1df62fff00d406466acdb854\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboTheme&amp;token=60895267635a82f918c84ecd3d6896b0\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCmsContent&amp;token=071791f4b35e46aad108c099d4b13ff9\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin444r1iiva/index.php/improve/design/modules/positions/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminImages&amp;token=b94833d55a2dc17af5675a419267b557\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin444r1iiva/index.php/modules/link-widget/list?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarriers&amp;token=cfb028a554b84ce9d01e00c18b6fb4e6\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminCarriers&amp;token=cfb028a554b84ce9d01e00c18b6fb4e6\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin444r1iiva/index.php/improve/shipping/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin444r1iiva/index.php/improve/payment/payment_methods?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin444r1iiva/index.php/improve/payment/payment_methods?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin444r1iiva/index.php/improve/payment/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin444r1iiva/index.php/improve/international/localization/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin444r1iiva/index.php/improve/international/localization/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminZones&amp;token=baa40be6974a132e102f9f622710e1ea\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminTaxes&amp;token=dafc342363dc688617e32cb0488738b9\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin444r1iiva/index.php/improve/international/translations/settings?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-AdminPsblogManagement\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogDashboard&amp;token=b17cee58ea399c208a2535e1f0cd20ce\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Ps Blog Management
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsblogDashboard\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogDashboard&amp;token=b17cee58ea399c208a2535e1f0cd20ce\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsblogCategories\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogCategories&amp;token=6b69d859411357261e2aefa4f33ebc2e\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsblogBlogs\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogBlogs&amp;token=26ccfedfafb854d86f0af16030ece86f\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsblogComments\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogComments&amp;token=0a4cfa7389988a5b8290b95b80ecd785\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"138\" id=\"subtab-AdminPsblogModule\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsblogModule&amp;token=6ffa8ac7c5e4afd62757ec74641b4e19\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin444r1iiva/index.php/configure/shop/preferences/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/preferences/preferences?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/order-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/product-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/customer-preferences/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminContacts&amp;token=7f8ffdf65407d72c8fa05c2f26f1aea5\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin444r1iiva/index.php/configure/shop/seo-urls/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSearchConf&amp;token=92e43d958351bcf7e353ccc4a061f456\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminGamification&amp;token=b9782a6db20fce13d434bf0eb283ff54\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin444r1iiva/index.php/configure/advanced/system-information/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/system-information/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/administration/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/emails/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/import/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminEmployees&amp;token=add9490bade5b703eb8ff66521da52eb\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminRequestSql&amp;token=3c1be0397b9a721c69dbdcb0ffd4cc51\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin444r1iiva/index.php/configure/advanced/logs/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminWebservice&amp;token=f055f73234ba4480cb0c7ca0e7f75c7e\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"119\" id=\"tab-DEFAULT\">
              <span class=\"title\">Еще</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminSelfUpgrade&amp;token=dfaff441a20468dab48ab12dc24efeb6\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Расширенные параметры</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin444r1iiva/index.php/configure/advanced/performance/?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\" aria-current=\"page\">Производительность</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Производительность          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminPsMboModule&token=0165ae6d69da2dffe4db0cad31651cee';
    var controller = 'AdminPerformance';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin444r1iiva/index.php/configure/advanced/performance/clear-cache?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"                  title=\"Очистка кэша\"                >
                  <i class=\"material-icons\">delete</i>
                  Очистка кэша
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin444r1iiva/index.php/improve/modules/catalog?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin444r1iiva/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.5.1%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=E6ZvEbYD1ZggUs-wip7ocY6xBpXLO2nhbfd8KzhXd0E\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"https://shop.floor-shop.ru/admin444r1iiva/index.php?controller=AdminDashboard&amp;token=d2d6f94545edcb36f229c21a2e224a0a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=info%40floor-shop.ru&amp;firstname=Floor&amp;lastname=Admin&amp;website=http%3A%2F%2Fshop.floor-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin444r1iiva/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=info%40floor-shop.ru&amp;firstname=Floor&amp;lastname=Admin&amp;website=http%3A%2F%2Fshop.floor-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__0ed8adf8af5e0ea10d842571490e0bb5839cb209c606466b3273dbfff9720b6c", "");
    }
}
