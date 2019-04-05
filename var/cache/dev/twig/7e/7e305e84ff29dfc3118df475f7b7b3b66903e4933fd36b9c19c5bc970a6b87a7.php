<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_012d1a841d5323085e07eca07dfb5ade8d4acf3f1a09a59ef32fcb50b4c12414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
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
        $__internal_62a7147967d95919db524a8a849ff28dc4526d178b61c1b18d4d3fff62d81912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a7147967d95919db524a8a849ff28dc4526d178b61c1b18d4d3fff62d81912->enter($__internal_62a7147967d95919db524a8a849ff28dc4526d178b61c1b18d4d3fff62d81912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_190eb1c85457e9c3433777054e50a8055fc1ac483da5c6908853d6ca9e914d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190eb1c85457e9c3433777054e50a8055fc1ac483da5c6908853d6ca9e914d8b->enter($__internal_190eb1c85457e9c3433777054e50a8055fc1ac483da5c6908853d6ca9e914d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a7147967d95919db524a8a849ff28dc4526d178b61c1b18d4d3fff62d81912->leave($__internal_62a7147967d95919db524a8a849ff28dc4526d178b61c1b18d4d3fff62d81912_prof);

        
        $__internal_190eb1c85457e9c3433777054e50a8055fc1ac483da5c6908853d6ca9e914d8b->leave($__internal_190eb1c85457e9c3433777054e50a8055fc1ac483da5c6908853d6ca9e914d8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de453aa50fc18d12cae0fcb31011d23590434ead77575faca8ce58736be25787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de453aa50fc18d12cae0fcb31011d23590434ead77575faca8ce58736be25787->enter($__internal_de453aa50fc18d12cae0fcb31011d23590434ead77575faca8ce58736be25787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9bdc1e7cb785450617155e5bcf395dd8b73678fab060422de286c196a6b354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bdc1e7cb785450617155e5bcf395dd8b73678fab060422de286c196a6b354e->enter($__internal_a9bdc1e7cb785450617155e5bcf395dd8b73678fab060422de286c196a6b354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a9bdc1e7cb785450617155e5bcf395dd8b73678fab060422de286c196a6b354e->leave($__internal_a9bdc1e7cb785450617155e5bcf395dd8b73678fab060422de286c196a6b354e_prof);

        
        $__internal_de453aa50fc18d12cae0fcb31011d23590434ead77575faca8ce58736be25787->leave($__internal_de453aa50fc18d12cae0fcb31011d23590434ead77575faca8ce58736be25787_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_800ad92bf2789844d45a240e5e6779bd9f575f3eff1584d03d82e357e8f3266a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800ad92bf2789844d45a240e5e6779bd9f575f3eff1584d03d82e357e8f3266a->enter($__internal_800ad92bf2789844d45a240e5e6779bd9f575f3eff1584d03d82e357e8f3266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a81edbedbfa0e155df78dbc3b88a2a6c46b9edd302a5e9935ac49e26b0c60564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81edbedbfa0e155df78dbc3b88a2a6c46b9edd302a5e9935ac49e26b0c60564->enter($__internal_a81edbedbfa0e155df78dbc3b88a2a6c46b9edd302a5e9935ac49e26b0c60564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a81edbedbfa0e155df78dbc3b88a2a6c46b9edd302a5e9935ac49e26b0c60564->leave($__internal_a81edbedbfa0e155df78dbc3b88a2a6c46b9edd302a5e9935ac49e26b0c60564_prof);

        
        $__internal_800ad92bf2789844d45a240e5e6779bd9f575f3eff1584d03d82e357e8f3266a->leave($__internal_800ad92bf2789844d45a240e5e6779bd9f575f3eff1584d03d82e357e8f3266a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61e9ef39e41181bdeb941c6192c2de9cc2b23c68a90cf9610cf61d09ebbea3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e9ef39e41181bdeb941c6192c2de9cc2b23c68a90cf9610cf61d09ebbea3a9->enter($__internal_61e9ef39e41181bdeb941c6192c2de9cc2b23c68a90cf9610cf61d09ebbea3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_764f9ff485d18f99a2d17e023a8752d4fe429f8fb370f62e105c24efa153a208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764f9ff485d18f99a2d17e023a8752d4fe429f8fb370f62e105c24efa153a208->enter($__internal_764f9ff485d18f99a2d17e023a8752d4fe429f8fb370f62e105c24efa153a208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_764f9ff485d18f99a2d17e023a8752d4fe429f8fb370f62e105c24efa153a208->leave($__internal_764f9ff485d18f99a2d17e023a8752d4fe429f8fb370f62e105c24efa153a208_prof);

        
        $__internal_61e9ef39e41181bdeb941c6192c2de9cc2b23c68a90cf9610cf61d09ebbea3a9->leave($__internal_61e9ef39e41181bdeb941c6192c2de9cc2b23c68a90cf9610cf61d09ebbea3a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
