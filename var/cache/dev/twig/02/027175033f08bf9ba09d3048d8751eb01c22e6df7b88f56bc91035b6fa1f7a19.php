<?php

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_5f16d62962999d6429916f7f7777415526af674ddbb12c93b4377f9229ca85b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preferences_form_general' => array($this, 'block_preferences_form_general'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2583d644761aa9fc435da26dbc3c9f321537e3015ad1ad9c44070b2d42bf3d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2583d644761aa9fc435da26dbc3c9f321537e3015ad1ad9c44070b2d42bf3d13->enter($__internal_2583d644761aa9fc435da26dbc3c9f321537e3015ad1ad9c44070b2d42bf3d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        $__internal_1de628ae3389efd84a97976d4299aff787b769534d3a80aaf83c95511df58577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de628ae3389efd84a97976d4299aff787b769534d3a80aaf83c95511df58577->enter($__internal_1de628ae3389efd84a97976d4299aff787b769534d3a80aaf83c95511df58577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 27);
        // line 30
        $context["generalForm"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "general", array());
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2583d644761aa9fc435da26dbc3c9f321537e3015ad1ad9c44070b2d42bf3d13->leave($__internal_2583d644761aa9fc435da26dbc3c9f321537e3015ad1ad9c44070b2d42bf3d13_prof);

        
        $__internal_1de628ae3389efd84a97976d4299aff787b769534d3a80aaf83c95511df58577->leave($__internal_1de628ae3389efd84a97976d4299aff787b769534d3a80aaf83c95511df58577_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_21ae5eba6c7ae761cc598e52b70a7c780a301f23c7dc29e86faa048162cb03b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ae5eba6c7ae761cc598e52b70a7c780a301f23c7dc29e86faa048162cb03b0->enter($__internal_21ae5eba6c7ae761cc598e52b70a7c780a301f23c7dc29e86faa048162cb03b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_801285d1095ad8ee4491e0426ecca64ed9665162c513f5674a2f20fcb0f2ee12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801285d1095ad8ee4491e0426ecca64ed9665162c513f5674a2f20fcb0f2ee12->enter($__internal_801285d1095ad8ee4491e0426ecca64ed9665162c513f5674a2f20fcb0f2ee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 36
        $this->displayBlock('preferences_form_general', $context, $blocks);
        // line 178
        echo "
    </div>
    ";
        // line 180
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_801285d1095ad8ee4491e0426ecca64ed9665162c513f5674a2f20fcb0f2ee12->leave($__internal_801285d1095ad8ee4491e0426ecca64ed9665162c513f5674a2f20fcb0f2ee12_prof);

        
        $__internal_21ae5eba6c7ae761cc598e52b70a7c780a301f23c7dc29e86faa048162cb03b0->leave($__internal_21ae5eba6c7ae761cc598e52b70a7c780a301f23c7dc29e86faa048162cb03b0_prof);

    }

    // line 36
    public function block_preferences_form_general($context, array $blocks = array())
    {
        $__internal_e69c672d2a62f167dbd3846affa1799a5c72aebfcd4360674d7b2373b2fe6d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69c672d2a62f167dbd3846affa1799a5c72aebfcd4360674d7b2373b2fe6d14->enter($__internal_e69c672d2a62f167dbd3846affa1799a5c72aebfcd4360674d7b2373b2fe6d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preferences_form_general"));

        $__internal_e13b35a59dbb2a901d9ae92475f94d92fa9d1ded94a6be26ecd1279e046cb7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13b35a59dbb2a901d9ae92475f94d92fa9d1ded94a6be26ecd1279e046cb7c7->enter($__internal_e13b35a59dbb2a901d9ae92475f94d92fa9d1ded94a6be26ecd1279e046cb7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preferences_form_general"));

        // line 37
        echo "            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            <div class=\"form-group row\">
                                ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", array(), "Admin.Shopparameters.Help"));
        // line 48
        echo "
                                ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isSecure", array(), "method")) {
            // line 50
            echo "                                    <div class=\"col-sm\">
                                        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_ssl", array()), 'errors');
            echo "
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_ssl", array()), 'widget');
            echo "
                                        <small class=\"form-text\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you own an SSL certificate for your shop's domain name, you can activate SSL encryption (https://) for customer account identification and order processing.", array(), "Admin.Shopparameters.Help"), "html", null, true);
            echo "</small>
                                    </div>
                                ";
        } else {
            // line 56
            echo "                                    <div class=\"col-sm\">
                                        <div class=\"form-control-plaintext\">
                                            <a class=\"d-block\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["sslUri"] ?? $this->getContext($context, "sslUri")), "html", null, true);
            echo "\">
                                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please click here to check if your shop supports HTTPS.", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
                                            </a>
                                        </div>
                                    </div>
                                ";
        }
        // line 64
        echo "                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL on all pages", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_ssl_everywhere", array()), 'errors');
        echo "
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_ssl_everywhere", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabled, all the pages of your shop will be SSL-secured.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increase front office security", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_token", array()), 'errors');
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_token", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable token in the Front Office to improve PrestaShop's security.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_token", array()), "vars", array()), "disabled", array())) {
            // line 81
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", array(), "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 87
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on HTML fields", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "allow_html_iframes", array()), 'errors');
        echo "
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "allow_html_iframes", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on text fields like product description. We recommend that you leave this option disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use HTMLPurifier Library", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "use_htmlpurifier", array()), 'errors');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "use_htmlpurifier", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clean the HTML content on text fields. We recommend that you leave this option enabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round mode", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_round_mode", array()), 'errors');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_round_mode", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round type", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_round_type", array()), 'errors');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_round_type", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of decimals", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_display_precision", array()), 'errors');
        echo "
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "price_display_precision", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose how many decimals you want to display", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display brands and suppliers", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "display_suppliers", array()), 'errors');
        echo "
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "display_suppliers", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable brands and suppliers pages on your front office even when their respective modules are disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display best sellers", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "display_best_sellers", array()), 'errors');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "display_best_sellers", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable best sellers page on your front office even when its respective module is disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Multistore", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "multishop_feature_active", array()), 'errors');
        echo "
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "multishop_feature_active", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 152
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "multishop_feature_active", array()), "vars", array()), "disabled", array())) {
            // line 153
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", array(), "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 159
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main Shop Activity", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "shop_activity", array()), 'errors');
        echo "
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "shop_activity", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_e13b35a59dbb2a901d9ae92475f94d92fa9d1ded94a6be26ecd1279e046cb7c7->leave($__internal_e13b35a59dbb2a901d9ae92475f94d92fa9d1ded94a6be26ecd1279e046cb7c7_prof);

        
        $__internal_e69c672d2a62f167dbd3846affa1799a5c72aebfcd4360674d7b2373b2fe6d14->leave($__internal_e69c672d2a62f167dbd3846affa1799a5c72aebfcd4360674d7b2373b2fe6d14_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 172,  386 => 165,  382 => 164,  377 => 162,  372 => 159,  365 => 155,  361 => 153,  359 => 152,  354 => 150,  350 => 149,  346 => 148,  341 => 146,  334 => 142,  330 => 141,  326 => 140,  321 => 138,  314 => 134,  310 => 133,  306 => 132,  301 => 130,  294 => 126,  290 => 125,  286 => 124,  281 => 122,  274 => 118,  270 => 117,  266 => 116,  261 => 114,  254 => 110,  250 => 109,  246 => 108,  241 => 106,  234 => 102,  230 => 101,  226 => 100,  221 => 98,  214 => 94,  210 => 93,  206 => 92,  201 => 90,  196 => 87,  189 => 83,  185 => 81,  183 => 80,  178 => 78,  174 => 77,  170 => 76,  165 => 74,  158 => 70,  154 => 69,  150 => 68,  145 => 66,  141 => 64,  133 => 59,  129 => 58,  125 => 56,  119 => 53,  115 => 52,  111 => 51,  108 => 50,  106 => 49,  103 => 48,  101 => 45,  93 => 40,  88 => 37,  79 => 36,  67 => 180,  63 => 178,  61 => 36,  55 => 34,  46 => 33,  36 => 25,  34 => 30,  32 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{%
  set generalForm = form.general
%}

{% block content %}
    {{ form_start(form, {'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}
    <div class=\"row justify-content-center\">
        {% block preferences_form_general %}
            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> {{ 'General'|trans({}, 'Admin.Global') }}
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            <div class=\"form-group row\">
                                {{ ps.label_with_help(
                                    ('Enable SSL'|trans),
                                    ('If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.'|trans({}, 'Admin.Shopparameters.Help'))
                                ) }}
                                {% if app.request.isSecure() %}
                                    <div class=\"col-sm\">
                                        {{ form_errors(generalForm.enable_ssl) }}
                                        {{ form_widget(generalForm.enable_ssl) }}
                                        <small class=\"form-text\">{{ 'If you own an SSL certificate for your shop\\'s domain name, you can activate SSL encryption (https://) for customer account identification and order processing.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                    </div>
                                {% else %}
                                    <div class=\"col-sm\">
                                        <div class=\"form-control-plaintext\">
                                            <a class=\"d-block\" href=\"{{ sslUri }}\">
                                                {{ 'Please click here to check if your shop supports HTTPS.'|trans({}, 'Admin.Shopparameters.Feature') }}
                                            </a>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Enable SSL on all pages'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.enable_ssl_everywhere) }}
                                    {{ form_widget(generalForm.enable_ssl_everywhere) }}
                                    <small class=\"form-text\">{{ 'When enabled, all the pages of your shop will be SSL-secured.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Increase front office security'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.enable_token) }}
                                    {{ form_widget(generalForm.enable_token) }}
                                    <small class=\"form-text\">{{ 'Enable or disable token in the Front Office to improve PrestaShop\\'s security.'|trans({}, 'Admin.Shopparameters.Help') }}</small>

                                    {% if generalForm.enable_token.vars.disabled %}
                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
                                        </p>
                                      </div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Allow iframes on HTML fields'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.allow_html_iframes) }}
                                    {{ form_widget(generalForm.allow_html_iframes) }}
                                    <small class=\"form-text\">{{ 'Allow iframes on text fields like product description. We recommend that you leave this option disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Use HTMLPurifier Library'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.use_htmlpurifier) }}
                                    {{ form_widget(generalForm.use_htmlpurifier) }}
                                    <small class=\"form-text\">{{ 'Clean the HTML content on text fields. We recommend that you leave this option enabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Round mode'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_round_mode) }}
                                    {{ form_widget(generalForm.price_round_mode) }}
                                    <small class=\"form-text\">{{ 'You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Round type'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_round_type) }}
                                    {{ form_widget(generalForm.price_round_type) }}
                                    <small class=\"form-text\">{{ 'You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Number of decimals'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_display_precision) }}
                                    {{ form_widget(generalForm.price_display_precision) }}
                                    <small class=\"form-text\">{{ 'Choose how many decimals you want to display'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Display brands and suppliers'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.display_suppliers) }}
                                    {{ form_widget(generalForm.display_suppliers) }}
                                    <small class=\"form-text\">{{ 'Enable brands and suppliers pages on your front office even when their respective modules are disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Display best sellers'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.display_best_sellers) }}
                                    {{ form_widget(generalForm.display_best_sellers) }}
                                    <small class=\"form-text\">{{ 'Enable best sellers page on your front office even when its respective module is disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Enable Multistore'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.multishop_feature_active) }}
                                    {{ form_widget(generalForm.multishop_feature_active) }}
                                    <small class=\"form-text\">{{ 'The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.'|trans({}, 'Admin.Shopparameters.Help') }}</small>

                                    {% if generalForm.multishop_feature_active.vars.disabled %}
                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
                                        </p>
                                      </div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Main Shop Activity'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.shop_activity) }}
                                    {{ form_widget(generalForm.shop_activity) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

    </div>
    {{ form_end(form) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
