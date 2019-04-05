<?php

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_cbec17ed78abb817625ea1c351bf62222a98d6ce08b870c940171939e7c24e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecc7ce1dec5041f580dd3f3f79f77d0d5c856affc40ca2561999dea6c2c279fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc7ce1dec5041f580dd3f3f79f77d0d5c856affc40ca2561999dea6c2c279fb->enter($__internal_ecc7ce1dec5041f580dd3f3f79f77d0d5c856affc40ca2561999dea6c2c279fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        $__internal_3612bd744978a46dfe438cd6e678cd12876ecb15be05ee4f899b5a3428eb9f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3612bd744978a46dfe438cd6e678cd12876ecb15be05ee4f899b5a3428eb9f39->enter($__internal_3612bd744978a46dfe438cd6e678cd12876ecb15be05ee4f899b5a3428eb9f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        // line 66
        echo "
";
        // line 83
        echo "
";
        
        $__internal_ecc7ce1dec5041f580dd3f3f79f77d0d5c856affc40ca2561999dea6c2c279fb->leave($__internal_ecc7ce1dec5041f580dd3f3f79f77d0d5c856affc40ca2561999dea6c2c279fb_prof);

        
        $__internal_3612bd744978a46dfe438cd6e678cd12876ecb15be05ee4f899b5a3428eb9f39->leave($__internal_3612bd744978a46dfe438cd6e678cd12876ecb15be05ee4f899b5a3428eb9f39_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_72413c506487d0db76864d6068a55a2f890de82f0d6985b0d4fea5c3155c49d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_72413c506487d0db76864d6068a55a2f890de82f0d6985b0d4fea5c3155c49d6->enter($__internal_72413c506487d0db76864d6068a55a2f890de82f0d6985b0d4fea5c3155c49d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_6428010efb2768a3d2716c80282aae1c89a0457ac7eeca72220399edca1e0ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6428010efb2768a3d2716c80282aae1c89a0457ac7eeca72220399edca1e0ae4->enter($__internal_6428010efb2768a3d2716c80282aae1c89a0457ac7eeca72220399edca1e0ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_6428010efb2768a3d2716c80282aae1c89a0457ac7eeca72220399edca1e0ae4->leave($__internal_6428010efb2768a3d2716c80282aae1c89a0457ac7eeca72220399edca1e0ae4_prof);

            
            $__internal_72413c506487d0db76864d6068a55a2f890de82f0d6985b0d4fea5c3155c49d6->leave($__internal_72413c506487d0db76864d6068a55a2f890de82f0d6985b0d4fea5c3155c49d6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7d70ee6c7e7f1f96282a17b57323a39e78d5790923350a4f270c7ff5e7cc5427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7d70ee6c7e7f1f96282a17b57323a39e78d5790923350a4f270c7ff5e7cc5427->enter($__internal_7d70ee6c7e7f1f96282a17b57323a39e78d5790923350a4f270c7ff5e7cc5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            $__internal_2f89dd2f72f109d27923cf36eb5fdc9cc374a55cea38ef3cd3d2fb84b1deaf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2f89dd2f72f109d27923cf36eb5fdc9cc374a55cea38ef3cd3d2fb84b1deaf70->enter($__internal_2f89dd2f72f109d27923cf36eb5fdc9cc374a55cea38ef3cd3d2fb84b1deaf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_2f89dd2f72f109d27923cf36eb5fdc9cc374a55cea38ef3cd3d2fb84b1deaf70->leave($__internal_2f89dd2f72f109d27923cf36eb5fdc9cc374a55cea38ef3cd3d2fb84b1deaf70_prof);

            
            $__internal_7d70ee6c7e7f1f96282a17b57323a39e78d5790923350a4f270c7ff5e7cc5427->leave($__internal_7d70ee6c7e7f1f96282a17b57323a39e78d5790923350a4f270c7ff5e7cc5427_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53af1ef52b8e74e3651c2f4fffbe6e86b267d5125e8281fa77a1ae3d323b1aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53af1ef52b8e74e3651c2f4fffbe6e86b267d5125e8281fa77a1ae3d323b1aa1->enter($__internal_53af1ef52b8e74e3651c2f4fffbe6e86b267d5125e8281fa77a1ae3d323b1aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_18e50ef781ceea50c5bc5edfddcd7aba8bb2055cd47c966e6db9c5561e815edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_18e50ef781ceea50c5bc5edfddcd7aba8bb2055cd47c966e6db9c5561e815edb->enter($__internal_18e50ef781ceea50c5bc5edfddcd7aba8bb2055cd47c966e6db9c5561e815edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_18e50ef781ceea50c5bc5edfddcd7aba8bb2055cd47c966e6db9c5561e815edb->leave($__internal_18e50ef781ceea50c5bc5edfddcd7aba8bb2055cd47c966e6db9c5561e815edb_prof);

            
            $__internal_53af1ef52b8e74e3651c2f4fffbe6e86b267d5125e8281fa77a1ae3d323b1aa1->leave($__internal_53af1ef52b8e74e3651c2f4fffbe6e86b267d5125e8281fa77a1ae3d323b1aa1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_913a7d73e6c38508cb85ed035d99f018c0bc6eb9498fb0d981b27ea09b675732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_913a7d73e6c38508cb85ed035d99f018c0bc6eb9498fb0d981b27ea09b675732->enter($__internal_913a7d73e6c38508cb85ed035d99f018c0bc6eb9498fb0d981b27ea09b675732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_c6f874ab06eecbcdfb73d5517746a3544f6ab5ea6de01859ecc11bae6b030989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c6f874ab06eecbcdfb73d5517746a3544f6ab5ea6de01859ecc11bae6b030989->enter($__internal_c6f874ab06eecbcdfb73d5517746a3544f6ab5ea6de01859ecc11bae6b030989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_c6f874ab06eecbcdfb73d5517746a3544f6ab5ea6de01859ecc11bae6b030989->leave($__internal_c6f874ab06eecbcdfb73d5517746a3544f6ab5ea6de01859ecc11bae6b030989_prof);

            
            $__internal_913a7d73e6c38508cb85ed035d99f018c0bc6eb9498fb0d981b27ea09b675732->leave($__internal_913a7d73e6c38508cb85ed035d99f018c0bc6eb9498fb0d981b27ea09b675732_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c8bdcea373b39be08ee6cd0e65ae810d68a8080e26668b4a0fa91e28ef863c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c8bdcea373b39be08ee6cd0e65ae810d68a8080e26668b4a0fa91e28ef863c7b->enter($__internal_c8bdcea373b39be08ee6cd0e65ae810d68a8080e26668b4a0fa91e28ef863c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_6035b8f97a3ef9e84b707eee4b0da138ede862eb404dfe6ca555600ac6a26b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6035b8f97a3ef9e84b707eee4b0da138ede862eb404dfe6ca555600ac6a26b6b->enter($__internal_6035b8f97a3ef9e84b707eee4b0da138ede862eb404dfe6ca555600ac6a26b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_6035b8f97a3ef9e84b707eee4b0da138ede862eb404dfe6ca555600ac6a26b6b->leave($__internal_6035b8f97a3ef9e84b707eee4b0da138ede862eb404dfe6ca555600ac6a26b6b_prof);

            
            $__internal_c8bdcea373b39be08ee6cd0e65ae810d68a8080e26668b4a0fa91e28ef863c7b->leave($__internal_c8bdcea373b39be08ee6cd0e65ae810d68a8080e26668b4a0fa91e28ef863c7b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2227b19dc350b2d8fd5a592d734e56668a25afbf49e52de52ecd747f3d4992aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2227b19dc350b2d8fd5a592d734e56668a25afbf49e52de52ecd747f3d4992aa->enter($__internal_2227b19dc350b2d8fd5a592d734e56668a25afbf49e52de52ecd747f3d4992aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_89590d729a6438fc6790aeb7e8bc6f4db5c290171a4f21b9c1ba2b9c6e965f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_89590d729a6438fc6790aeb7e8bc6f4db5c290171a4f21b9c1ba2b9c6e965f33->enter($__internal_89590d729a6438fc6790aeb7e8bc6f4db5c290171a4f21b9c1ba2b9c6e965f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span
    class=\"help-box\"
    data-toggle=\"popover\"
    data-content=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
<p class=\"sr-only\">";
            // line 64
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "</p>
";
            
            $__internal_89590d729a6438fc6790aeb7e8bc6f4db5c290171a4f21b9c1ba2b9c6e965f33->leave($__internal_89590d729a6438fc6790aeb7e8bc6f4db5c290171a4f21b9c1ba2b9c6e965f33_prof);

            
            $__internal_2227b19dc350b2d8fd5a592d734e56668a25afbf49e52de52ecd747f3d4992aa->leave($__internal_2227b19dc350b2d8fd5a592d734e56668a25afbf49e52de52ecd747f3d4992aa_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 68
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6cb6e50231ac8622f948dcc8fa89555abfe58bd41bc5e00e7e55d59fe7872a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6cb6e50231ac8622f948dcc8fa89555abfe58bd41bc5e00e7e55d59fe7872a65->enter($__internal_6cb6e50231ac8622f948dcc8fa89555abfe58bd41bc5e00e7e55d59fe7872a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_d623011b8b7d62e59655532c6f6f24116d797d3d901807d0a1221545f0705e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d623011b8b7d62e59655532c6f6f24116d797d3d901807d0a1221545f0705e20->enter($__internal_d623011b8b7d62e59655532c6f6f24116d797d3d901807d0a1221545f0705e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 69
            echo "  ";
            list($context["sortOrder"], $context["orderBy"]) =             array(((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "")) : ("")));
            // line 70
            echo "    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")), "html", null, true);
            echo "\"
      ";
            // line 73
            if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")))) {
                // line 74
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 75
                echo (((($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 77
            echo "    >
      <span role=\"columnheader\">";
            // line 78
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
";
            
            $__internal_d623011b8b7d62e59655532c6f6f24116d797d3d901807d0a1221545f0705e20->leave($__internal_d623011b8b7d62e59655532c6f6f24116d797d3d901807d0a1221545f0705e20_prof);

            
            $__internal_6cb6e50231ac8622f948dcc8fa89555abfe58bd41bc5e00e7e55d59fe7872a65->leave($__internal_6cb6e50231ac8622f948dcc8fa89555abfe58bd41bc5e00e7e55d59fe7872a65_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6125dd44ec3094724b7da92ebf266f1e688adc6885a0fe0d88de48ed3949676f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6125dd44ec3094724b7da92ebf266f1e688adc6885a0fe0d88de48ed3949676f->enter($__internal_6125dd44ec3094724b7da92ebf266f1e688adc6885a0fe0d88de48ed3949676f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_9004a0bd380759d62fcb9c65a6b8552e1a028c086adb8aedb119a1c6d15b0a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9004a0bd380759d62fcb9c65a6b8552e1a028c086adb8aedb119a1c6d15b0a68->enter($__internal_9004a0bd380759d62fcb9c65a6b8552e1a028c086adb8aedb119a1c6d15b0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 86
            echo "    <a class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_sample_download", array("sampleName" => ($context["filename"] ?? $this->getContext($context, "filename")))), "html", null, true);
            echo "\">
        ";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_9004a0bd380759d62fcb9c65a6b8552e1a028c086adb8aedb119a1c6d15b0a68->leave($__internal_9004a0bd380759d62fcb9c65a6b8552e1a028c086adb8aedb119a1c6d15b0a68_prof);

            
            $__internal_6125dd44ec3094724b7da92ebf266f1e688adc6885a0fe0d88de48ed3949676f->leave($__internal_6125dd44ec3094724b7da92ebf266f1e688adc6885a0fe0d88de48ed3949676f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 87,  439 => 86,  420 => 85,  395 => 79,  391 => 78,  388 => 77,  383 => 75,  380 => 74,  378 => 73,  374 => 72,  370 => 70,  367 => 69,  346 => 68,  323 => 64,  317 => 61,  310 => 57,  305 => 56,  285 => 55,  260 => 50,  256 => 48,  238 => 47,  213 => 42,  209 => 40,  191 => 39,  167 => 35,  160 => 34,  140 => 33,  116 => 30,  98 => 29,  74 => 26,  54 => 25,  43 => 83,  40 => 66,  37 => 54,  34 => 46,  31 => 38,  28 => 32,  25 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '') %}
<label class=\"form-control-label {{ class }}\">
  {{ label }}
  <span
    class=\"help-box\"
    data-toggle=\"popover\"
    data-content=\"{{ help }}\">
  </span>
</label>
<p class=\"sr-only\">{{ help }}</p>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder) %}
  {% set sortOrder, orderBy = sortOrder|default(''), orderBy|default('') %}
    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
    </div>
  </th>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a class=\"list-group-item list-group-item-action\" href=\"{{ path('admin_import_sample_download', {'sampleName': filename}) }}\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}
", "@PrestaShop/Admin/macros.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
