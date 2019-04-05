<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e8ce999ed7578805ef79ea9be6c59c84459266206b0a813e604b8d00ea6e26d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e01ae11a27a4c3f7176d0377826a303640430cf5c0c7f4443fb5430ec318eae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01ae11a27a4c3f7176d0377826a303640430cf5c0c7f4443fb5430ec318eae8->enter($__internal_e01ae11a27a4c3f7176d0377826a303640430cf5c0c7f4443fb5430ec318eae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3bd64756ac2e2d8c815ca475830b9d121d2753563cc6c6b42a5060240a022638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd64756ac2e2d8c815ca475830b9d121d2753563cc6c6b42a5060240a022638->enter($__internal_3bd64756ac2e2d8c815ca475830b9d121d2753563cc6c6b42a5060240a022638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e01ae11a27a4c3f7176d0377826a303640430cf5c0c7f4443fb5430ec318eae8->leave($__internal_e01ae11a27a4c3f7176d0377826a303640430cf5c0c7f4443fb5430ec318eae8_prof);

        
        $__internal_3bd64756ac2e2d8c815ca475830b9d121d2753563cc6c6b42a5060240a022638->leave($__internal_3bd64756ac2e2d8c815ca475830b9d121d2753563cc6c6b42a5060240a022638_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8c50f8b34c26ac99cda6d87fad94a9ed5d73243a1145ce8b923c780b78360d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c50f8b34c26ac99cda6d87fad94a9ed5d73243a1145ce8b923c780b78360d6->enter($__internal_e8c50f8b34c26ac99cda6d87fad94a9ed5d73243a1145ce8b923c780b78360d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_316827407ef02ddff265a47b6b2e94c7f713fee4c78196d15f6ec04d0befd837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316827407ef02ddff265a47b6b2e94c7f713fee4c78196d15f6ec04d0befd837->enter($__internal_316827407ef02ddff265a47b6b2e94c7f713fee4c78196d15f6ec04d0befd837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_316827407ef02ddff265a47b6b2e94c7f713fee4c78196d15f6ec04d0befd837->leave($__internal_316827407ef02ddff265a47b6b2e94c7f713fee4c78196d15f6ec04d0befd837_prof);

        
        $__internal_e8c50f8b34c26ac99cda6d87fad94a9ed5d73243a1145ce8b923c780b78360d6->leave($__internal_e8c50f8b34c26ac99cda6d87fad94a9ed5d73243a1145ce8b923c780b78360d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34500efc5f745642a5e1b6a16ac6f10df00e6eb166dbc31d5b305604a44cf0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34500efc5f745642a5e1b6a16ac6f10df00e6eb166dbc31d5b305604a44cf0cd->enter($__internal_34500efc5f745642a5e1b6a16ac6f10df00e6eb166dbc31d5b305604a44cf0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d5b2b9b437b8fda674882542be09295e08cb4947d47febd060661063bcdb2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5b2b9b437b8fda674882542be09295e08cb4947d47febd060661063bcdb2c6->enter($__internal_6d5b2b9b437b8fda674882542be09295e08cb4947d47febd060661063bcdb2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d5b2b9b437b8fda674882542be09295e08cb4947d47febd060661063bcdb2c6->leave($__internal_6d5b2b9b437b8fda674882542be09295e08cb4947d47febd060661063bcdb2c6_prof);

        
        $__internal_34500efc5f745642a5e1b6a16ac6f10df00e6eb166dbc31d5b305604a44cf0cd->leave($__internal_34500efc5f745642a5e1b6a16ac6f10df00e6eb166dbc31d5b305604a44cf0cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66741396e05ee8072272c6a251ab3df5507d661d8136f4dd28b9da8f3a1f27a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66741396e05ee8072272c6a251ab3df5507d661d8136f4dd28b9da8f3a1f27a8->enter($__internal_66741396e05ee8072272c6a251ab3df5507d661d8136f4dd28b9da8f3a1f27a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4195764202f9640b14b35a706f8b5ddaa0b38abe110f5fe57c144ae0cdef88eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4195764202f9640b14b35a706f8b5ddaa0b38abe110f5fe57c144ae0cdef88eb->enter($__internal_4195764202f9640b14b35a706f8b5ddaa0b38abe110f5fe57c144ae0cdef88eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4195764202f9640b14b35a706f8b5ddaa0b38abe110f5fe57c144ae0cdef88eb->leave($__internal_4195764202f9640b14b35a706f8b5ddaa0b38abe110f5fe57c144ae0cdef88eb_prof);

        
        $__internal_66741396e05ee8072272c6a251ab3df5507d661d8136f4dd28b9da8f3a1f27a8->leave($__internal_66741396e05ee8072272c6a251ab3df5507d661d8136f4dd28b9da8f3a1f27a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
