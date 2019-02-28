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
        $__internal_81fe45cbce4d9d88bb70ede09e4e1153e0729851ed959befb76b918f37dccb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fe45cbce4d9d88bb70ede09e4e1153e0729851ed959befb76b918f37dccb64->enter($__internal_81fe45cbce4d9d88bb70ede09e4e1153e0729851ed959befb76b918f37dccb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        $__internal_8a364d9f9d95a22408abff399101b931bcfe6b5ffe8716dd6aaab4be233c4221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a364d9f9d95a22408abff399101b931bcfe6b5ffe8716dd6aaab4be233c4221->enter($__internal_8a364d9f9d95a22408abff399101b931bcfe6b5ffe8716dd6aaab4be233c4221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 27);
        // line 30
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         array($this->getAttribute(        // line 31
($context["form"] ?? $this->getContext($context, "form")), "smarty", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debug_mode", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optional_features", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ccc", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "media_servers", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caching", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "add_memcache_server", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fe45cbce4d9d88bb70ede09e4e1153e0729851ed959befb76b918f37dccb64->leave($__internal_81fe45cbce4d9d88bb70ede09e4e1153e0729851ed959befb76b918f37dccb64_prof);

        
        $__internal_8a364d9f9d95a22408abff399101b931bcfe6b5ffe8716dd6aaab4be233c4221->leave($__internal_8a364d9f9d95a22408abff399101b931bcfe6b5ffe8716dd6aaab4be233c4221_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_02ec9aa075fbd793669620171fc20893e7f91ca341d08582b3203ec04e0f6863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ec9aa075fbd793669620171fc20893e7f91ca341d08582b3203ec04e0f6863->enter($__internal_02ec9aa075fbd793669620171fc20893e7f91ca341d08582b3203ec04e0f6863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eabe119fd3f1cdf2c8694f47afbb1c8b8365223ecfcbab77151fb4ac5d8aa478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabe119fd3f1cdf2c8694f47afbb1c8b8365223ecfcbab77151fb4ac5d8aa478->enter($__internal_eabe119fd3f1cdf2c8694f47afbb1c8b8365223ecfcbab77151fb4ac5d8aa478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_eabe119fd3f1cdf2c8694f47afbb1c8b8365223ecfcbab77151fb4ac5d8aa478->leave($__internal_eabe119fd3f1cdf2c8694f47afbb1c8b8365223ecfcbab77151fb4ac5d8aa478_prof);

        
        $__internal_02ec9aa075fbd793669620171fc20893e7f91ca341d08582b3203ec04e0f6863->leave($__internal_02ec9aa075fbd793669620171fc20893e7f91ca341d08582b3203ec04e0f6863_prof);

    }

    // line 37
    public function block_perfs_form_smarty_cache($context, array $blocks = array())
    {
        $__internal_792c615ca5471df8c9d354e99cacb646d2dd9d6828457d727498b4852b397163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792c615ca5471df8c9d354e99cacb646d2dd9d6828457d727498b4852b397163->enter($__internal_792c615ca5471df8c9d354e99cacb646d2dd9d6828457d727498b4852b397163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        $__internal_8d5fb8d74513dec977593d0ee04a749ade5392fd266b749826c98c6b3f4e5a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5fb8d74513dec977593d0ee04a749ade5392fd266b749826c98c6b3f4e5a0c->enter($__internal_8d5fb8d74513dec977593d0ee04a749ade5392fd266b749826c98c6b3f4e5a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

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
        
        $__internal_8d5fb8d74513dec977593d0ee04a749ade5392fd266b749826c98c6b3f4e5a0c->leave($__internal_8d5fb8d74513dec977593d0ee04a749ade5392fd266b749826c98c6b3f4e5a0c_prof);

        
        $__internal_792c615ca5471df8c9d354e99cacb646d2dd9d6828457d727498b4852b397163->leave($__internal_792c615ca5471df8c9d354e99cacb646d2dd9d6828457d727498b4852b397163_prof);

    }

    // line 92
    public function block_perfs_form_debug_mode($context, array $blocks = array())
    {
        $__internal_923c08c8fc0b60c93c42d91e42e1d57809bae09d8915de4f98f5b6b3d31548d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923c08c8fc0b60c93c42d91e42e1d57809bae09d8915de4f98f5b6b3d31548d2->enter($__internal_923c08c8fc0b60c93c42d91e42e1d57809bae09d8915de4f98f5b6b3d31548d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        $__internal_07da35eda4da4bdf2f8b594e00edc85c9d3ef0ec0df94b5f8b6f6b9901dbe9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07da35eda4da4bdf2f8b594e00edc85c9d3ef0ec0df94b5f8b6f6b9901dbe9c8->enter($__internal_07da35eda4da4bdf2f8b594e00edc85c9d3ef0ec0df94b5f8b6f6b9901dbe9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

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
        
        $__internal_07da35eda4da4bdf2f8b594e00edc85c9d3ef0ec0df94b5f8b6f6b9901dbe9c8->leave($__internal_07da35eda4da4bdf2f8b594e00edc85c9d3ef0ec0df94b5f8b6f6b9901dbe9c8_prof);

        
        $__internal_923c08c8fc0b60c93c42d91e42e1d57809bae09d8915de4f98f5b6b3d31548d2->leave($__internal_923c08c8fc0b60c93c42d91e42e1d57809bae09d8915de4f98f5b6b3d31548d2_prof);

    }

    // line 133
    public function block_perfs_form_optional_features($context, array $blocks = array())
    {
        $__internal_8e607db54c43ba4cde30a63a7e6a41980a4e4fdccc26973023369672f65ddf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e607db54c43ba4cde30a63a7e6a41980a4e4fdccc26973023369672f65ddf3f->enter($__internal_8e607db54c43ba4cde30a63a7e6a41980a4e4fdccc26973023369672f65ddf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        $__internal_7cfc4fe3f40b4e50e92272d026f2bf818f0b32a14989382f944db68100523734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfc4fe3f40b4e50e92272d026f2bf818f0b32a14989382f944db68100523734->enter($__internal_7cfc4fe3f40b4e50e92272d026f2bf818f0b32a14989382f944db68100523734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

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
        
        $__internal_7cfc4fe3f40b4e50e92272d026f2bf818f0b32a14989382f944db68100523734->leave($__internal_7cfc4fe3f40b4e50e92272d026f2bf818f0b32a14989382f944db68100523734_prof);

        
        $__internal_8e607db54c43ba4cde30a63a7e6a41980a4e4fdccc26973023369672f65ddf3f->leave($__internal_8e607db54c43ba4cde30a63a7e6a41980a4e4fdccc26973023369672f65ddf3f_prof);

    }

    // line 190
    public function block_perfs_form_ccc($context, array $blocks = array())
    {
        $__internal_7c6d33e667d09a721e2ce0077f1125207f33c5b724fef7b95c8936d32c8b8449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6d33e667d09a721e2ce0077f1125207f33c5b724fef7b95c8936d32c8b8449->enter($__internal_7c6d33e667d09a721e2ce0077f1125207f33c5b724fef7b95c8936d32c8b8449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        $__internal_451da63258f14cf667c8c4af498a0925ed3fd4009ffa9257047d0d703986cc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451da63258f14cf667c8c4af498a0925ed3fd4009ffa9257047d0d703986cc2a->enter($__internal_451da63258f14cf667c8c4af498a0925ed3fd4009ffa9257047d0d703986cc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

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
        
        $__internal_451da63258f14cf667c8c4af498a0925ed3fd4009ffa9257047d0d703986cc2a->leave($__internal_451da63258f14cf667c8c4af498a0925ed3fd4009ffa9257047d0d703986cc2a_prof);

        
        $__internal_7c6d33e667d09a721e2ce0077f1125207f33c5b724fef7b95c8936d32c8b8449->leave($__internal_7c6d33e667d09a721e2ce0077f1125207f33c5b724fef7b95c8936d32c8b8449_prof);

    }

    // line 236
    public function block_perfs_form_media_servers($context, array $blocks = array())
    {
        $__internal_6f26128fe46538136814f7ed557473e88605f7198b45c6848696bb8ec4eb5678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f26128fe46538136814f7ed557473e88605f7198b45c6848696bb8ec4eb5678->enter($__internal_6f26128fe46538136814f7ed557473e88605f7198b45c6848696bb8ec4eb5678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        $__internal_4d85b2409d2875afe36bc7fa655bbf852a2e7850f41480497fbb6d3e31fb72e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d85b2409d2875afe36bc7fa655bbf852a2e7850f41480497fbb6d3e31fb72e6->enter($__internal_4d85b2409d2875afe36bc7fa655bbf852a2e7850f41480497fbb6d3e31fb72e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

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
        
        $__internal_4d85b2409d2875afe36bc7fa655bbf852a2e7850f41480497fbb6d3e31fb72e6->leave($__internal_4d85b2409d2875afe36bc7fa655bbf852a2e7850f41480497fbb6d3e31fb72e6_prof);

        
        $__internal_6f26128fe46538136814f7ed557473e88605f7198b45c6848696bb8ec4eb5678->leave($__internal_6f26128fe46538136814f7ed557473e88605f7198b45c6848696bb8ec4eb5678_prof);

    }

    // line 282
    public function block_perfs_form_caching($context, array $blocks = array())
    {
        $__internal_f34a4a42677c9ea398e3938bcba8524d974ce78f14312fe367fa677883f1f20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34a4a42677c9ea398e3938bcba8524d974ce78f14312fe367fa677883f1f20c->enter($__internal_f34a4a42677c9ea398e3938bcba8524d974ce78f14312fe367fa677883f1f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        $__internal_f47092d9776279498b90ceabfdd6f4fe73a465723d5c4b086af3aa497b4224e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47092d9776279498b90ceabfdd6f4fe73a465723d5c4b086af3aa497b4224e7->enter($__internal_f47092d9776279498b90ceabfdd6f4fe73a465723d5c4b086af3aa497b4224e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_caching"));

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
        
        $__internal_f47092d9776279498b90ceabfdd6f4fe73a465723d5c4b086af3aa497b4224e7->leave($__internal_f47092d9776279498b90ceabfdd6f4fe73a465723d5c4b086af3aa497b4224e7_prof);

        
        $__internal_f34a4a42677c9ea398e3938bcba8524d974ce78f14312fe367fa677883f1f20c->leave($__internal_f34a4a42677c9ea398e3938bcba8524d974ce78f14312fe367fa677883f1f20c_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04580e4d770917e3ac6fd0cbe3e27132b8856268acef94b633d3fa17a22282b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04580e4d770917e3ac6fd0cbe3e27132b8856268acef94b633d3fa17a22282b6->enter($__internal_04580e4d770917e3ac6fd0cbe3e27132b8856268acef94b633d3fa17a22282b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32c2a8bf5a25e45523fc0ef8672153fa186a12b1209812a325ad60eb5e3cf517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c2a8bf5a25e45523fc0ef8672153fa186a12b1209812a325ad60eb5e3cf517->enter($__internal_32c2a8bf5a25e45523fc0ef8672153fa186a12b1209812a325ad60eb5e3cf517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_32c2a8bf5a25e45523fc0ef8672153fa186a12b1209812a325ad60eb5e3cf517->leave($__internal_32c2a8bf5a25e45523fc0ef8672153fa186a12b1209812a325ad60eb5e3cf517_prof);

        
        $__internal_04580e4d770917e3ac6fd0cbe3e27132b8856268acef94b633d3fa17a22282b6->leave($__internal_04580e4d770917e3ac6fd0cbe3e27132b8856268acef94b633d3fa17a22282b6_prof);

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
