<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_6ca91f2fb9523d2f35b170dd52b11bcf1b790b6e8ff84648bdcf707a9039db55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'perfs_form_smarty_cache' => array($this, 'block_perfs_form_smarty_cache'),
            'perfs_form_debug_mode' => array($this, 'block_perfs_form_debug_mode'),
            'perfs_form_optional_features' => array($this, 'block_perfs_form_optional_features'),
            'perfs_form_ccc' => array($this, 'block_perfs_form_ccc'),
            'perfs_form_media_servers' => array($this, 'block_perfs_form_media_servers'),
            'perfs_form_caching' => array($this, 'block_perfs_form_caching'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da8b62c9e6f235458df0aab842f3c22bb0bdde98bd8fae487afdab02e6935958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8b62c9e6f235458df0aab842f3c22bb0bdde98bd8fae487afdab02e6935958->enter($__internal_da8b62c9e6f235458df0aab842f3c22bb0bdde98bd8fae487afdab02e6935958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        $__internal_d31d5a0432dc6ba5484ec980a9f6d6e0ca794eb5629eb3ae7dd9ec98114be820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31d5a0432dc6ba5484ec980a9f6d6e0ca794eb5629eb3ae7dd9ec98114be820->enter($__internal_d31d5a0432dc6ba5484ec980a9f6d6e0ca794eb5629eb3ae7dd9ec98114be820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 27);
        // line 30
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         array($this->getAttribute(        // line 31
($context["form"] ?? $this->getContext($context, "form")), "smarty", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debug_mode", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optional_features", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ccc", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "media_servers", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caching", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "add_memcache_server", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8b62c9e6f235458df0aab842f3c22bb0bdde98bd8fae487afdab02e6935958->leave($__internal_da8b62c9e6f235458df0aab842f3c22bb0bdde98bd8fae487afdab02e6935958_prof);

        
        $__internal_d31d5a0432dc6ba5484ec980a9f6d6e0ca794eb5629eb3ae7dd9ec98114be820->leave($__internal_d31d5a0432dc6ba5484ec980a9f6d6e0ca794eb5629eb3ae7dd9ec98114be820_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_39a543974a7cafc8ca95cab31e47551d6ca7c314f1246926734375b97d29bdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a543974a7cafc8ca95cab31e47551d6ca7c314f1246926734375b97d29bdfb->enter($__internal_39a543974a7cafc8ca95cab31e47551d6ca7c314f1246926734375b97d29bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8dcc8ad32aa0d467c3ccd855bae48f5e6976c5a57b236730c85c7b414de1033e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcc8ad32aa0d467c3ccd855bae48f5e6976c5a57b236730c85c7b414de1033e->enter($__internal_8dcc8ad32aa0d467c3ccd855bae48f5e6976c5a57b236730c85c7b414de1033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form")));
        echo "
  <div class=\"row justify-content-center\">
    ";
        // line 37
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 132
        echo "
    ";
        // line 133
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 189
        echo "
    ";
        // line 190
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 235
        echo "
    ";
        // line 236
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 281
        echo "
    ";
        // line 282
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 316
        echo "  </div>
  ";
        // line 317
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8dcc8ad32aa0d467c3ccd855bae48f5e6976c5a57b236730c85c7b414de1033e->leave($__internal_8dcc8ad32aa0d467c3ccd855bae48f5e6976c5a57b236730c85c7b414de1033e_prof);

        
        $__internal_39a543974a7cafc8ca95cab31e47551d6ca7c314f1246926734375b97d29bdfb->leave($__internal_39a543974a7cafc8ca95cab31e47551d6ca7c314f1246926734375b97d29bdfb_prof);

    }

    // line 37
    public function block_perfs_form_smarty_cache($context, array $blocks = array())
    {
        $__internal_9d3eccf005c0efe143bb058e5fa08d1426e75b548e1d96257137a67e2e198d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3eccf005c0efe143bb058e5fa08d1426e75b548e1d96257137a67e2e198d6b->enter($__internal_9d3eccf005c0efe143bb058e5fa08d1426e75b548e1d96257137a67e2e198d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        $__internal_cb0b207b7539cf0a75fe49ce2c2c46ccc97adc2848e4e155b67c77b56eb37396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0b207b7539cf0a75fe49ce2c2c46ccc97adc2848e4e155b67c77b56eb37396->enter($__internal_cb0b207b7539cf0a75fe49ce2c2c46ccc97adc2848e4e155b67c77b56eb37396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        // line 38
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smarty", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template compilation", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "template_compilation", array()), 'errors');
        echo "
                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "template_compilation", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 53
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cache", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled except for debugging.", array(), "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "cache", array()), 'errors');
        echo "
                  ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "cache", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                ";
        // line 60
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multi-front optimizations", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled if you want to avoid to store the smarty cache on NFS.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "multi_front_optimization", array()), 'errors');
        echo "
                  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "multi_front_optimization", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching type", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "caching_type", array()), 'errors');
        echo "
                  ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "caching_type", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clear cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "clear_cache", array()), 'errors');
        echo "
                  ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "clear_cache", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_cb0b207b7539cf0a75fe49ce2c2c46ccc97adc2848e4e155b67c77b56eb37396->leave($__internal_cb0b207b7539cf0a75fe49ce2c2c46ccc97adc2848e4e155b67c77b56eb37396_prof);

        
        $__internal_9d3eccf005c0efe143bb058e5fa08d1426e75b548e1d96257137a67e2e198d6b->leave($__internal_9d3eccf005c0efe143bb058e5fa08d1426e75b548e1d96257137a67e2e198d6b_prof);

    }

    // line 92
    public function block_perfs_form_debug_mode($context, array $blocks = array())
    {
        $__internal_1db43bba2e3631d45caa27fb3aec29ea1d9cc4df27290c3bf6a158644eabb33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db43bba2e3631d45caa27fb3aec29ea1d9cc4df27290c3bf6a158644eabb33f->enter($__internal_1db43bba2e3631d45caa27fb3aec29ea1d9cc4df27290c3bf6a158644eabb33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        $__internal_1be4014b1e6ad6af3689f4450cbe407b6a03e5dad5a5e13bdba338bd246559f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be4014b1e6ad6af3689f4450cbe407b6a03e5dad5a5e13bdba338bd246559f8->enter($__internal_1be4014b1e6ad6af3689f4450cbe407b6a03e5dad5a5e13bdba338bd246559f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        // line 93
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">bug_report</i> ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 101
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable non PrestaShop modules", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable non PrestaShop Modules.", array(), "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_non_native_modules", array()), 'errors');
        echo "
                  ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_non_native_modules", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 108
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable all overrides", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable all classes and controllers overrides.", array(), "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_overrides", array()), 'errors');
        echo "
                  ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_overrides", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 115
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable debug mode.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "debug_mode", array()), 'errors');
        echo "
                  ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "debug_mode", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_1be4014b1e6ad6af3689f4450cbe407b6a03e5dad5a5e13bdba338bd246559f8->leave($__internal_1be4014b1e6ad6af3689f4450cbe407b6a03e5dad5a5e13bdba338bd246559f8_prof);

        
        $__internal_1db43bba2e3631d45caa27fb3aec29ea1d9cc4df27290c3bf6a158644eabb33f->leave($__internal_1db43bba2e3631d45caa27fb3aec29ea1d9cc4df27290c3bf6a158644eabb33f_prof);

    }

    // line 133
    public function block_perfs_form_optional_features($context, array $blocks = array())
    {
        $__internal_aac57147c9296af00fc00539eec4605f0418f5c887ea86df7cad29a5cf96a01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac57147c9296af00fc00539eec4605f0418f5c887ea86df7cad29a5cf96a01c->enter($__internal_aac57147c9296af00fc00539eec4605f0418f5c887ea86df7cad29a5cf96a01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        $__internal_f50b37177d63f6fa8503c66d50011c102dbc1407ab2c5b761068a04976dee4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50b37177d63f6fa8503c66d50011c102dbc1407ab2c5b761068a04976dee4b5->enter($__internal_f50b37177d63f6fa8503c66d50011c102dbc1407ab2c5b761068a04976dee4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        // line 134
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">extension</i> ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional features", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 144
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some features can be disabled in order to improve performance.", array(), "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 149
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Combinations.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), 'errors');
        echo "
                  ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), 'widget');
        echo "
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 158
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), "vars", array()), "disabled", array())) {
            // line 159
            echo "                    ";
            echo $context["ps"]->getwarningtip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You cannot set this parameter to No when combinations are already used by some of your products", array(), "Admin.Advparameters.Help"));
            echo "
                  ";
        }
        // line 161
        echo "                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 165
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Features.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "features", array()), 'errors');
        echo "
                  ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "features", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 172
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer groups", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Customer Groups.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "customer_groups", array()), 'errors');
        echo "
                  ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "customer_groups", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_f50b37177d63f6fa8503c66d50011c102dbc1407ab2c5b761068a04976dee4b5->leave($__internal_f50b37177d63f6fa8503c66d50011c102dbc1407ab2c5b761068a04976dee4b5_prof);

        
        $__internal_aac57147c9296af00fc00539eec4605f0418f5c887ea86df7cad29a5cf96a01c->leave($__internal_aac57147c9296af00fc00539eec4605f0418f5c887ea86df7cad29a5cf96a01c_prof);

    }

    // line 190
    public function block_perfs_form_ccc($context, array $blocks = array())
    {
        $__internal_816217e97d6015226721900f1580b16ca5b8154c951e0da4589aee7841f602f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816217e97d6015226721900f1580b16ca5b8154c951e0da4589aee7841f602f0->enter($__internal_816217e97d6015226721900f1580b16ca5b8154c951e0da4589aee7841f602f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        $__internal_1a4d7f77af581e9caca4457d52847f703679388d1c577bbf50f0dbf9e4f5da75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4d7f77af581e9caca4457d52847f703679388d1c577bbf50f0dbf9e4f5da75->enter($__internal_1a4d7f77af581e9caca4457d52847f703679388d1c577bbf50f0dbf9e4f5da75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        // line 191
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">zoom_out_map</i> ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC (Combine, Compress and Cache)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 200
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.", array(), "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for CSS", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", array()), 'errors');
        echo "
                  ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for JavaScript", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", array()), 'errors');
        echo "
                  ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 218
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apache optimization", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will add directives to your .htaccess file, which should improve caching and compression.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", array()), 'errors');
        echo "
                  ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_1a4d7f77af581e9caca4457d52847f703679388d1c577bbf50f0dbf9e4f5da75->leave($__internal_1a4d7f77af581e9caca4457d52847f703679388d1c577bbf50f0dbf9e4f5da75_prof);

        
        $__internal_816217e97d6015226721900f1580b16ca5b8154c951e0da4589aee7841f602f0->leave($__internal_816217e97d6015226721900f1580b16ca5b8154c951e0da4589aee7841f602f0_prof);

    }

    // line 236
    public function block_perfs_form_media_servers($context, array $blocks = array())
    {
        $__internal_e01a589a08f3bd091895bb4c54b38a58edf53ff0a67d8bd9adb636f2d82ec388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01a589a08f3bd091895bb4c54b38a58edf53ff0a67d8bd9adb636f2d82ec388->enter($__internal_e01a589a08f3bd091895bb4c54b38a58edf53ff0a67d8bd9adb636f2d82ec388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        $__internal_5b23304c2bb78bb662d2256d31bd84b85dc4e5739efb538ac33067d19033b893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b23304c2bb78bb662d2256d31bd84b85dc4e5739efb538ac33067d19033b893->enter($__internal_5b23304c2bb78bb662d2256d31bd84b85dc4e5739efb538ac33067d19033b893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        // line 237
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media servers (use only with CCC)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 246
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", array(), "Admin.Advparameters.Feature"));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 250
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #1", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_one", array()), 'errors');
        echo "
                  ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_one", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 257
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #2", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_two", array()), 'errors');
        echo "
                  ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_two", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 264
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #3", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_three", array()), 'errors');
        echo "
                  ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_three", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_5b23304c2bb78bb662d2256d31bd84b85dc4e5739efb538ac33067d19033b893->leave($__internal_5b23304c2bb78bb662d2256d31bd84b85dc4e5739efb538ac33067d19033b893_prof);

        
        $__internal_e01a589a08f3bd091895bb4c54b38a58edf53ff0a67d8bd9adb636f2d82ec388->leave($__internal_e01a589a08f3bd091895bb4c54b38a58edf53ff0a67d8bd9adb636f2d82ec388_prof);

    }

    // line 282
    public function block_perfs_form_caching($context, array $blocks = array())
    {
        $__internal_84269a81c183e01a1a168251c0405bf37a0bdebb71aec46e9f53dc948119bc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84269a81c183e01a1a168251c0405bf37a0bdebb71aec46e9f53dc948119bc1c->enter($__internal_84269a81c183e01a1a168251c0405bf37a0bdebb71aec46e9f53dc948119bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        $__internal_b20a7347f13680a44e9de1c80c4947a88eb839cf1dce67b904f09f29823b9fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20a7347f13680a44e9de1c80c4947a88eb839cf1dce67b904f09f29823b9fdb->enter($__internal_b20a7347f13680a44e9de1c80c4947a88eb839cf1dce67b904f09f29823b9fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        // line 283
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "use_cache", array()), 'errors');
        echo "
                  ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "use_cache", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row memcache\" id=\"caching_systems\">
                <label class=\"form-control-label\">";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching system", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "caching_system", array()), 'errors');
        echo "
                  ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "caching_system", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), 'rest');
        echo "
              ";
        // line 305
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", array("form" => ($context["memcacheForm"] ?? $this->getContext($context, "memcacheForm"))));
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_b20a7347f13680a44e9de1c80c4947a88eb839cf1dce67b904f09f29823b9fdb->leave($__internal_b20a7347f13680a44e9de1c80c4947a88eb839cf1dce67b904f09f29823b9fdb_prof);

        
        $__internal_84269a81c183e01a1a168251c0405bf37a0bdebb71aec46e9f53dc948119bc1c->leave($__internal_84269a81c183e01a1a168251c0405bf37a0bdebb71aec46e9f53dc948119bc1c_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45482429fc3084dcf9871b2b6a8a76e8cf51480f445bc5574d24fad137d7fd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45482429fc3084dcf9871b2b6a8a76e8cf51480f445bc5574d24fad137d7fd80->enter($__internal_45482429fc3084dcf9871b2b6a8a76e8cf51480f445bc5574d24fad137d7fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6085b113c6241c56d08a989a6f79734ea43b2a0e14ab7957cf902e1466a868da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6085b113c6241c56d08a989a6f79734ea43b2a0e14ab7957cf902e1466a868da->enter($__internal_6085b113c6241c56d08a989a6f79734ea43b2a0e14ab7957cf902e1466a868da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 321
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 325
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
      'removeServerUrl': '";
        // line 326
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
      'testServerUrl': '";
        // line 327
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
    };
    var app = new PerformancePage(
      configuration.addServerUrl,
      configuration.removeServerUrl,
      configuration.testServerUrl
    );

    window.addEventListener('load', function() {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6085b113c6241c56d08a989a6f79734ea43b2a0e14ab7957cf902e1466a868da->leave($__internal_6085b113c6241c56d08a989a6f79734ea43b2a0e14ab7957cf902e1466a868da_prof);

        
        $__internal_45482429fc3084dcf9871b2b6a8a76e8cf51480f445bc5574d24fad137d7fd80->leave($__internal_45482429fc3084dcf9871b2b6a8a76e8cf51480f445bc5574d24fad137d7fd80_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 351,  758 => 327,  754 => 326,  750 => 325,  744 => 322,  739 => 321,  730 => 320,  714 => 310,  706 => 305,  702 => 304,  696 => 301,  692 => 300,  687 => 298,  680 => 294,  676 => 293,  671 => 291,  663 => 286,  658 => 283,  649 => 282,  633 => 275,  625 => 270,  619 => 267,  615 => 266,  610 => 264,  603 => 260,  599 => 259,  594 => 257,  587 => 253,  583 => 252,  578 => 250,  571 => 246,  562 => 240,  557 => 237,  548 => 236,  532 => 229,  524 => 224,  518 => 221,  514 => 220,  509 => 218,  502 => 214,  498 => 213,  493 => 211,  486 => 207,  482 => 206,  477 => 204,  470 => 200,  461 => 194,  456 => 191,  447 => 190,  431 => 183,  423 => 178,  417 => 175,  413 => 174,  408 => 172,  401 => 168,  397 => 167,  392 => 165,  386 => 161,  380 => 159,  378 => 158,  369 => 152,  365 => 151,  360 => 149,  352 => 144,  342 => 137,  337 => 134,  328 => 133,  312 => 126,  304 => 121,  298 => 118,  294 => 117,  289 => 115,  282 => 111,  278 => 110,  273 => 108,  266 => 104,  262 => 103,  257 => 101,  249 => 96,  244 => 93,  235 => 92,  219 => 85,  211 => 80,  205 => 77,  201 => 76,  196 => 74,  189 => 70,  185 => 69,  180 => 67,  173 => 63,  169 => 62,  164 => 60,  157 => 56,  153 => 55,  148 => 53,  141 => 49,  137 => 48,  132 => 46,  124 => 41,  119 => 38,  110 => 37,  98 => 317,  95 => 316,  93 => 282,  90 => 281,  88 => 236,  85 => 235,  83 => 190,  80 => 189,  78 => 133,  75 => 132,  73 => 92,  70 => 91,  68 => 37,  62 => 35,  53 => 34,  43 => 25,  41 => 31,  40 => 30,  38 => 27,  11 => 25,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{%
    set smartyForm, debugModeForm, optionalFeaturesForm, combineCompressCacheForm, mediaServersForm, cachingForm, memcacheForm =
    form.smarty, form.debug_mode, form.optional_features, form.ccc, form.media_servers, form.caching, form.add_memcache_server
%}

{% block content %}
  {{ form_start(form, {'attr' : {'class': 'form'} }) }}
  <div class=\"row justify-content-center\">
    {% block perfs_form_smarty_cache %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> {{ 'Smarty'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Template compilation'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.template_compilation) }}
                  {{ form_widget(smartyForm.template_compilation) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Cache'|trans), ('Should be enabled except for debugging.'|trans)) }}
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.cache) }}
                  {{ form_widget(smartyForm.cache) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                {{ ps.label_with_help(('Multi-front optimizations'|trans), ('Should be enabled if you want to avoid to store the smarty cache on NFS.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.multi_front_optimization) }}
                  {{ form_widget(smartyForm.multi_front_optimization) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">{{ 'Caching type'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.caching_type) }}
                  {{ form_widget(smartyForm.caching_type) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">{{ 'Clear cache'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.clear_cache) }}
                  {{ form_widget(smartyForm.clear_cache) }}
                </div>
              </div>
              {{ form_rest(smartyForm) }}
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

    {% block perfs_form_debug_mode %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">bug_report</i> {{ 'Debug mode'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Disable non PrestaShop modules'|trans), ('Enable or disable non PrestaShop Modules.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.disable_non_native_modules) }}
                  {{ form_widget(debugModeForm.disable_non_native_modules) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Disable all overrides'|trans), ('Enable or disable all classes and controllers overrides.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.disable_overrides) }}
                  {{ form_widget(debugModeForm.disable_overrides) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Debug mode'|trans), ('Enable or disable debug mode.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.debug_mode) }}
                  {{ form_widget(debugModeForm.debug_mode) }}
                </div>
              </div>
              {{ form_rest(debugModeForm) }}
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

    {% block perfs_form_optional_features %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">extension</i> {{ 'Optional features'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('Some features can be disabled in order to improve performance.'|trans({}, 'Admin.Advparameters.Help')) }}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ ps.label_with_help(('Combinations'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Combinations.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.combinations) }}
                  {{ form_widget(optionalFeaturesForm.combinations) }}
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col\">
                  {% if optionalFeaturesForm.combinations.vars.disabled %}
                    {{ ps.warningtip('You cannot set this parameter to No when combinations are already used by some of your products'|trans({}, 'Admin.Advparameters.Help')) }}
                  {% endif %}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ ps.label_with_help(('Features'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Features.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.features) }}
                  {{ form_widget(optionalFeaturesForm.features) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Customer groups'|trans), ('Choose \"No\" to disable Customer Groups.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.customer_groups) }}
                  {{ form_widget(optionalFeaturesForm.customer_groups) }}
                </div>
              </div>
              {{ form_rest(optionalFeaturesForm) }}
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

    {% block perfs_form_ccc %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">zoom_out_map</i> {{ 'CCC (Combine, Compress and Cache)'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.'|trans({}, 'Admin.Advparameters.Help')) }}
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Smart cache for CSS'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.smart_cache_css) }}
                  {{ form_widget(combineCompressCacheForm.smart_cache_css) }}
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Smart cache for JavaScript'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.smart_cache_js) }}
                  {{ form_widget(combineCompressCacheForm.smart_cache_js) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Apache optimization'|trans), ('This will add directives to your .htaccess file, which should improve caching and compression.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.apache_optimization) }}
                  {{ form_widget(combineCompressCacheForm.apache_optimization) }}
                </div>
              </div>
              {{ form_rest(combineCompressCacheForm) }}
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

    {% block perfs_form_media_servers %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> {{ 'Media servers (use only with CCC)'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('You must enter another domain, or subdomain, in order to use cookieless static content.'|trans({}, 'Admin.Advparameters.Feature')) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #1'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_one) }}
                  {{ form_widget(mediaServersForm.media_server_one) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #2'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_two) }}
                  {{ form_widget(mediaServersForm.media_server_two) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #3'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_three) }}
                  {{ form_widget(mediaServersForm.media_server_three) }}
                </div>
              </div>
              {{ form_rest(mediaServersForm) }}
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

    {% block perfs_form_caching %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> {{ 'Caching'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Use cache'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(cachingForm.use_cache) }}
                  {{ form_widget(cachingForm.use_cache) }}
                </div>
              </div>
              <div class=\"form-group row memcache\" id=\"caching_systems\">
                <label class=\"form-control-label\">{{ 'Caching system'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(cachingForm.caching_system) }}
                  {{ form_widget(cachingForm.caching_system) }}
                </div>
              </div>
              {{ form_rest(cachingForm) }}
              {{ include('@AdvancedParameters/memcache_servers.html.twig', {'form': memcacheForm}) }}
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

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePage.js') }}\"></script>
  <script>
    var configuration = {
      'addServerUrl': '{{ url('admin_servers_add')|e('js') }}',
      'removeServerUrl': '{{ url('admin_servers_delete')|e('js') }}',
      'testServerUrl': '{{ url('admin_servers_test')|e('js') }}'
    };
    var app = new PerformancePage(
      configuration.addServerUrl,
      configuration.removeServerUrl,
      configuration.testServerUrl
    );

    window.addEventListener('load', function() {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePageUI.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
