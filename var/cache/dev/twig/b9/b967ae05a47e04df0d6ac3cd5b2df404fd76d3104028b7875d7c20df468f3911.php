<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_6238a1f4f9bffa8b7f463d4357a04b7bfa86f32414d57b76c68573e448a5cf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd6b1487ee2a442f097ea22b86b07ce225bce5d375b88ea02d75109e2448bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd6b1487ee2a442f097ea22b86b07ce225bce5d375b88ea02d75109e2448bef->enter($__internal_bcd6b1487ee2a442f097ea22b86b07ce225bce5d375b88ea02d75109e2448bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $__internal_f44b20c5122c1e2d1d2a1f6813587464cbafc3ec756032e82155f21856cce33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44b20c5122c1e2d1d2a1f6813587464cbafc3ec756032e82155f21856cce33d->enter($__internal_f44b20c5122c1e2d1d2a1f6813587464cbafc3ec756032e82155f21856cce33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd6b1487ee2a442f097ea22b86b07ce225bce5d375b88ea02d75109e2448bef->leave($__internal_bcd6b1487ee2a442f097ea22b86b07ce225bce5d375b88ea02d75109e2448bef_prof);

        
        $__internal_f44b20c5122c1e2d1d2a1f6813587464cbafc3ec756032e82155f21856cce33d->leave($__internal_f44b20c5122c1e2d1d2a1f6813587464cbafc3ec756032e82155f21856cce33d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf36f56514f56d137bd9eb2a2acb19ddc51c6f9d6516a379f277c86fa5a1f21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf36f56514f56d137bd9eb2a2acb19ddc51c6f9d6516a379f277c86fa5a1f21f->enter($__internal_bf36f56514f56d137bd9eb2a2acb19ddc51c6f9d6516a379f277c86fa5a1f21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8143da6791cbc3c9ecc387edb3ef2903559df4fa3c292e6a85c206f705073adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8143da6791cbc3c9ecc387edb3ef2903559df4fa3c292e6a85c206f705073adf->enter($__internal_8143da6791cbc3c9ecc387edb3ef2903559df4fa3c292e6a85c206f705073adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        if ((($context["callCount"] ?? $this->getContext($context, "callCount")) == 0)) {
            // line 10
            echo "        ";
            $context["color_code"] = "";
            // line 11
            echo "    ";
        } elseif ((($context["errorCount"] ?? $this->getContext($context, "errorCount")) > 0)) {
            // line 12
            echo "        ";
            $context["color_code"] = "red";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $context["color_code"] = "green";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 19
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo twig_escape_filter($this->env, ($context["color_code"] ?? $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 23
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        }
        // line 25
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        ob_start();
        // line 28
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 30
        echo twig_escape_filter($this->env, (($context["callCount"] ?? $this->getContext($context, "callCount")) - ($context["errorCount"] ?? $this->getContext($context, "errorCount"))), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["errorCount"] ?? $this->getContext($context, "errorCount")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_8143da6791cbc3c9ecc387edb3ef2903559df4fa3c292e6a85c206f705073adf->leave($__internal_8143da6791cbc3c9ecc387edb3ef2903559df4fa3c292e6a85c206f705073adf_prof);

        
        $__internal_bf36f56514f56d137bd9eb2a2acb19ddc51c6f9d6516a379f277c86fa5a1f21f->leave($__internal_bf36f56514f56d137bd9eb2a2acb19ddc51c6f9d6516a379f277c86fa5a1f21f_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_17c1172fcc2f0f63016da926590e6acb699cbbcad79eecf309775598198f12ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c1172fcc2f0f63016da926590e6acb699cbbcad79eecf309775598198f12ab->enter($__internal_17c1172fcc2f0f63016da926590e6acb699cbbcad79eecf309775598198f12ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_075d42a47272bbf348440d00350b062244c276703fa7d700c3516b47159fc45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075d42a47272bbf348440d00350b062244c276703fa7d700c3516b47159fc45a->enter($__internal_075d42a47272bbf348440d00350b062244c276703fa7d700c3516b47159fc45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 42
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 45
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 46
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 47
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_075d42a47272bbf348440d00350b062244c276703fa7d700c3516b47159fc45a->leave($__internal_075d42a47272bbf348440d00350b062244c276703fa7d700c3516b47159fc45a_prof);

        
        $__internal_17c1172fcc2f0f63016da926590e6acb699cbbcad79eecf309775598198f12ab->leave($__internal_17c1172fcc2f0f63016da926590e6acb699cbbcad79eecf309775598198f12ab_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66fb0928b425badcb9ecec7042ffc82f753efa68b013d84aa2b7ead640be5c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fb0928b425badcb9ecec7042ffc82f753efa68b013d84aa2b7ead640be5c07->enter($__internal_66fb0928b425badcb9ecec7042ffc82f753efa68b013d84aa2b7ead640be5c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e714b6a3900f389e88e3f9bded133958448bdf310de1d1af60b28e1f6cbf4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e714b6a3900f389e88e3f9bded133958448bdf310de1d1af60b28e1f6cbf4e6->enter($__internal_6e714b6a3900f389e88e3f9bded133958448bdf310de1d1af60b28e1f6cbf4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 56
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 57
        echo "            ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 62
        echo "
        </span>
        <strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        <span class=\"count\">
            ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) {
            // line 67
            echo "                <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            ";
        }
        // line 69
        echo "        </span>
    </span>
";
        
        $__internal_6e714b6a3900f389e88e3f9bded133958448bdf310de1d1af60b28e1f6cbf4e6->leave($__internal_6e714b6a3900f389e88e3f9bded133958448bdf310de1d1af60b28e1f6cbf4e6_prof);

        
        $__internal_66fb0928b425badcb9ecec7042ffc82f753efa68b013d84aa2b7ead640be5c07->leave($__internal_66fb0928b425badcb9ecec7042ffc82f753efa68b013d84aa2b7ead640be5c07_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dedf228b56bb948645689d3b19364a26820a3b6a2ab7b012ea2b6b041ec3132f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedf228b56bb948645689d3b19364a26820a3b6a2ab7b012ea2b6b041ec3132f->enter($__internal_dedf228b56bb948645689d3b19364a26820a3b6a2ab7b012ea2b6b041ec3132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30922c364b13ef7fc5914ec1248b565d7e5463d3c22c49a5af24c176c07dc909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30922c364b13ef7fc5914ec1248b565d7e5463d3c22c49a5af24c176c07dc909->enter($__internal_30922c364b13ef7fc5914ec1248b565d7e5463d3c22c49a5af24c176c07dc909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 75
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_30922c364b13ef7fc5914ec1248b565d7e5463d3c22c49a5af24c176c07dc909->leave($__internal_30922c364b13ef7fc5914ec1248b565d7e5463d3c22c49a5af24c176c07dc909_prof);

        
        $__internal_dedf228b56bb948645689d3b19364a26820a3b6a2ab7b012ea2b6b041ec3132f->leave($__internal_dedf228b56bb948645689d3b19364a26820a3b6a2ab7b012ea2b6b041ec3132f_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 75,  274 => 74,  265 => 73,  253 => 69,  247 => 67,  245 => 66,  240 => 64,  236 => 62,  230 => 60,  224 => 58,  221 => 57,  219 => 56,  211 => 54,  202 => 53,  188 => 48,  183 => 47,  180 => 46,  178 => 45,  174 => 44,  170 => 43,  165 => 42,  156 => 41,  144 => 38,  141 => 37,  135 => 34,  128 => 30,  124 => 28,  122 => 27,  119 => 26,  116 => 25,  111 => 23,  106 => 22,  99 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        <span class=\"count\">
            {% if collector.calls is not empty %}
                <span>{{ collector.calls|length }}</span>
            {% endif %}
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "CsaGuzzleBundle:Collector:guzzle.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/csa/guzzle-bundle/src/Resources/views/Collector/guzzle.html.twig");
    }
}
