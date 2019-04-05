<?php

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_c1dbae2f0b7ce00c6d9baae3652bc0006d9eeca4f6454ed07084fd8d10558745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
            'content_header' => array($this, 'block_content_header'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_legacy_controller"), "method"), ((        // line 28
array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? $this->getContext($context, "layoutTitle"))) : ("")), ((        // line 29
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? $this->getContext($context, "layoutHeaderToolbarBtn"))) : (array())), ((        // line 30
array_key_exists("layoutDisplayType", $context)) ? (($context["layoutDisplayType"] ?? $this->getContext($context, "layoutDisplayType"))) : ("")), ((        // line 31
array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? $this->getContext($context, "showContentHeader"))) : (true)), ((        // line 32
array_key_exists("headerTabContent", $context)) ? (($context["headerTabContent"] ?? $this->getContext($context, "headerTabContent"))) : ("")), ((        // line 33
array_key_exists("enableSidebar", $context)) ? (($context["enableSidebar"] ?? $this->getContext($context, "enableSidebar"))) : (false)), ((        // line 34
array_key_exists("help_link", $context)) ? (($context["help_link"] ?? $this->getContext($context, "help_link"))) : ("")))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fafb335ff3c306712745a3bf8f3727d56b81b28b64ba5205e3337e5b5aa59c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fafb335ff3c306712745a3bf8f3727d56b81b28b64ba5205e3337e5b5aa59c8->enter($__internal_2fafb335ff3c306712745a3bf8f3727d56b81b28b64ba5205e3337e5b5aa59c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        $__internal_3b97e8ffc57f851a4b1ef298987233f4888f931a332f30ba0f8b6c36f504957c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b97e8ffc57f851a4b1ef298987233f4888f931a332f30ba0f8b6c36f504957c->enter($__internal_3b97e8ffc57f851a4b1ef298987233f4888f931a332f30ba0f8b6c36f504957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        // line 38
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/layout.html.twig", 38);
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fafb335ff3c306712745a3bf8f3727d56b81b28b64ba5205e3337e5b5aa59c8->leave($__internal_2fafb335ff3c306712745a3bf8f3727d56b81b28b64ba5205e3337e5b5aa59c8_prof);

        
        $__internal_3b97e8ffc57f851a4b1ef298987233f4888f931a332f30ba0f8b6c36f504957c->leave($__internal_3b97e8ffc57f851a4b1ef298987233f4888f931a332f30ba0f8b6c36f504957c_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_839000b3215e9993749c87ce8a6ce35dce22bf8a231af39a4ba5b420c5658ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839000b3215e9993749c87ce8a6ce35dce22bf8a231af39a4ba5b420c5658ee6->enter($__internal_839000b3215e9993749c87ce8a6ce35dce22bf8a231af39a4ba5b420c5658ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_71bb379d121bb52ee0e327136bfd38da9293af80d07e99c94e4f41f20d15a428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bb379d121bb52ee0e327136bfd38da9293af80d07e99c94e4f41f20d15a428->enter($__internal_71bb379d121bb52ee0e327136bfd38da9293af80d07e99c94e4f41f20d15a428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_71bb379d121bb52ee0e327136bfd38da9293af80d07e99c94e4f41f20d15a428->leave($__internal_71bb379d121bb52ee0e327136bfd38da9293af80d07e99c94e4f41f20d15a428_prof);

        
        $__internal_839000b3215e9993749c87ce8a6ce35dce22bf8a231af39a4ba5b420c5658ee6->leave($__internal_839000b3215e9993749c87ce8a6ce35dce22bf8a231af39a4ba5b420c5658ee6_prof);

    }

    // line 45
    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_da233e561e78d311274fb132572e8d76bae1e3508bb3a13541257d4fa19789e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da233e561e78d311274fb132572e8d76bae1e3508bb3a13541257d4fa19789e8->enter($__internal_da233e561e78d311274fb132572e8d76bae1e3508bb3a13541257d4fa19789e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_3f628ec1a55f3f5b56f5077813442b3c4b9c86881e9f62e0f21ce5216c76f3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f628ec1a55f3f5b56f5077813442b3c4b9c86881e9f62e0f21ce5216c76f3a0->enter($__internal_3f628ec1a55f3f5b56f5077813442b3c4b9c86881e9f62e0f21ce5216c76f3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        // line 46
        echo "  <script>
    var translate_javascripts = ";
        // line 47
        echo twig_jsonencode_filter(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
        
        $__internal_3f628ec1a55f3f5b56f5077813442b3c4b9c86881e9f62e0f21ce5216c76f3a0->leave($__internal_3f628ec1a55f3f5b56f5077813442b3c4b9c86881e9f62e0f21ce5216c76f3a0_prof);

        
        $__internal_da233e561e78d311274fb132572e8d76bae1e3508bb3a13541257d4fa19789e8->leave($__internal_da233e561e78d311274fb132572e8d76bae1e3508bb3a13541257d4fa19789e8_prof);

    }

    // line 52
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_5b891bcd0fa7ea271fbe599d29d25749857ec6649e5b2f9e60a5393573d0705a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b891bcd0fa7ea271fbe599d29d25749857ec6649e5b2f9e60a5393573d0705a->enter($__internal_5b891bcd0fa7ea271fbe599d29d25749857ec6649e5b2f9e60a5393573d0705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_11195dfb761ee15d1e3312574c4b454751fe29bf6e48133835a212e6ca73d712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11195dfb761ee15d1e3312574c4b454751fe29bf6e48133835a212e6ca73d712->enter($__internal_11195dfb761ee15d1e3312574c4b454751fe29bf6e48133835a212e6ca73d712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 53
        echo "  ";
        // line 73
        echo "  ";
        $context["layout"] = $this;
        // line 74
        echo "
  ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "error"), "method")) > 0)) {
            // line 76
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "failure"), "method")) > 0)) {
            // line 79
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "failure"), "method"));
            echo "
  ";
        }
        // line 81
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "success"), "method")) > 0)) {
            // line 82
            echo "    ";
            echo $context["layout"]->getalert("success", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            echo "
  ";
        }
        // line 84
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "warning"), "method")) > 0)) {
            // line 85
            echo "    ";
            echo $context["layout"]->getalert("warning", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
            echo "
  ";
        }
        
        $__internal_11195dfb761ee15d1e3312574c4b454751fe29bf6e48133835a212e6ca73d712->leave($__internal_11195dfb761ee15d1e3312574c4b454751fe29bf6e48133835a212e6ca73d712_prof);

        
        $__internal_5b891bcd0fa7ea271fbe599d29d25749857ec6649e5b2f9e60a5393573d0705a->leave($__internal_5b891bcd0fa7ea271fbe599d29d25749857ec6649e5b2f9e60a5393573d0705a_prof);

    }

    // line 89
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_4512b01ad5dbeecbcc10a087962a41565bbf75fb5a3e5a96d65264a13e22cc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4512b01ad5dbeecbcc10a087962a41565bbf75fb5a3e5a96d65264a13e22cc45->enter($__internal_4512b01ad5dbeecbcc10a087962a41565bbf75fb5a3e5a96d65264a13e22cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_a7ac296174d800703d0e178580b985959b0929c28dee353804b1cdd26b82d5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ac296174d800703d0e178580b985959b0929c28dee353804b1cdd26b82d5ba->enter($__internal_a7ac296174d800703d0e178580b985959b0929c28dee353804b1cdd26b82d5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        // line 90
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", array(), "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
        
        $__internal_a7ac296174d800703d0e178580b985959b0929c28dee353804b1cdd26b82d5ba->leave($__internal_a7ac296174d800703d0e178580b985959b0929c28dee353804b1cdd26b82d5ba_prof);

        
        $__internal_4512b01ad5dbeecbcc10a087962a41565bbf75fb5a3e5a96d65264a13e22cc45->leave($__internal_4512b01ad5dbeecbcc10a087962a41565bbf75fb5a3e5a96d65264a13e22cc45_prof);

    }

    // line 53
    public function getalert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_35a0a06fbbabb52e216f2f7f8098a11945d0ec7993f355f7ec7271ba7ed8aa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_35a0a06fbbabb52e216f2f7f8098a11945d0ec7993f355f7ec7271ba7ed8aa39->enter($__internal_35a0a06fbbabb52e216f2f7f8098a11945d0ec7993f355f7ec7271ba7ed8aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_7ca0f0c4e0b69e36c21e96ab9000b25c8947dc8d3193e05f43590d643a24e0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7ca0f0c4e0b69e36c21e96ab9000b25c8947dc8d3193e05f43590d643a24e0fa->enter($__internal_7ca0f0c4e0b69e36c21e96ab9000b25c8947dc8d3193e05f43590d643a24e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            // line 54
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 58
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent"))) > 1)) {
                // line 59
                echo "        <ul class=\"alert-text\">
          ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 61
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "        </ul>
      ";
            } else {
                // line 65
                echo "        <div class=\"alert-text\">
          ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 67
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "        </div>
      ";
            }
            // line 71
            echo "    </div>
  ";
            
            $__internal_7ca0f0c4e0b69e36c21e96ab9000b25c8947dc8d3193e05f43590d643a24e0fa->leave($__internal_7ca0f0c4e0b69e36c21e96ab9000b25c8947dc8d3193e05f43590d643a24e0fa_prof);

            
            $__internal_35a0a06fbbabb52e216f2f7f8098a11945d0ec7993f355f7ec7271ba7ed8aa39->leave($__internal_35a0a06fbbabb52e216f2f7f8098a11945d0ec7993f355f7ec7271ba7ed8aa39_prof);

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
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 71,  268 => 69,  259 => 67,  255 => 66,  252 => 65,  248 => 63,  239 => 61,  235 => 60,  232 => 59,  230 => 58,  222 => 54,  203 => 53,  189 => 97,  185 => 96,  177 => 90,  168 => 89,  154 => 85,  151 => 84,  145 => 82,  142 => 81,  136 => 79,  133 => 78,  127 => 76,  125 => 75,  122 => 74,  119 => 73,  117 => 53,  108 => 52,  95 => 48,  91 => 47,  88 => 46,  79 => 45,  67 => 42,  62 => 41,  53 => 40,  43 => 25,  41 => 38,  29 => 34,  28 => 33,  27 => 32,  26 => 31,  25 => 30,  24 => 29,  23 => 28,  22 => 27,  21 => 25,);
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
{% extends(template_from_string(
  getLegacyLayout(
    app.request.attributes.get('_legacy_controller'),
    layoutTitle is defined ? layoutTitle : '',
    layoutHeaderToolbarBtn is defined ? layoutHeaderToolbarBtn : [],
    layoutDisplayType is defined ? layoutDisplayType : '',
    showContentHeader is defined ? showContentHeader : true,
    headerTabContent is defined ? headerTabContent : '',
    enableSidebar is defined ? enableSidebar : false,
    help_link is defined ? help_link : ''
  )
  )) %}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block javascripts %}
  <script src=\"{{ asset('themes/default/js/bundle/default.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/right-sidebar.js') }}\"></script>
{% endblock %}

{% block translate_javascripts %}
  <script>
    var translate_javascripts = {{ js_translatable|json_encode()|raw }};
    var PS_ALLOW_ACCENTED_CHARS_URL = {{ 'PS_ALLOW_ACCENTED_CHARS_URL'|configuration|intCast }};
  </script>
{% endblock %}

{% block content_header %}
  {% macro alert(type, flashbagContent) %}
    <div class=\"alert alert-{{ type }}\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      {% if flashbagContent|length > 1 %}
        <ul class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <li>{{ flashMessage|raw }}</li>
          {% endfor %}
        </ul>
      {% else %}
        <div class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <p>{{ flashMessage|raw }}</p>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endmacro %}
  {% import _self as layout %}

  {% if app.session.flashbag.peek('error')|length() > 0 %}
    {{ layout.alert('danger', app.session.flashbag.get('error')) }}
  {% endif %}
  {% if app.session.flashbag.peek('failure')|length() > 0 %}
    {{ layout.alert('danger', app.session.flashbag.get('failure')) }}
  {% endif %}
  {% if app.session.flashbag.peek('success')|length() > 0 %}
    {{ layout.alert('success', app.session.flashbag.get('success')) }}
  {% endif %}
  {% if app.session.flashbag.peek('warning')|length() > 0 %}
    {{ layout.alert('warning', app.session.flashbag.get('warning')) }}
  {% endif %}
{% endblock %}

{% block sidebar_right %}
  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"{{ asset('themes/default/img/bundle/dashboard_loading.gif') }}\"
      style=\"margin-top: 10em;\" alt=\"{{ 'Loading...'|trans({}, 'Admin.Global') }}\"
    />
  </nav>
{% endblock %}
", "@PrestaShop/Admin/layout.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
