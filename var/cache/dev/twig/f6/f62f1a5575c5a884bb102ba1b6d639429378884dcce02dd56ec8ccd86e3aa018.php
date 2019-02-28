<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_490822ca63181b4c3cbdfe1dcc96ac0f585f1fcd6155a17ed9cc7ae2535fc768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c8e61bec041118ae8fd771870a7889a7f296138aed19430d7e3bbf28b2ca348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8e61bec041118ae8fd771870a7889a7f296138aed19430d7e3bbf28b2ca348->enter($__internal_9c8e61bec041118ae8fd771870a7889a7f296138aed19430d7e3bbf28b2ca348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e0ab29dca2639d712fcd80ceaa130831e768796cbedb3a0f8c924455f446445e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ab29dca2639d712fcd80ceaa130831e768796cbedb3a0f8c924455f446445e->enter($__internal_e0ab29dca2639d712fcd80ceaa130831e768796cbedb3a0f8c924455f446445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8e61bec041118ae8fd771870a7889a7f296138aed19430d7e3bbf28b2ca348->leave($__internal_9c8e61bec041118ae8fd771870a7889a7f296138aed19430d7e3bbf28b2ca348_prof);

        
        $__internal_e0ab29dca2639d712fcd80ceaa130831e768796cbedb3a0f8c924455f446445e->leave($__internal_e0ab29dca2639d712fcd80ceaa130831e768796cbedb3a0f8c924455f446445e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c6ca1a83b6a2e59ef73f295e9987f9a09538d0a8220f13acf95e0cafc834f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6ca1a83b6a2e59ef73f295e9987f9a09538d0a8220f13acf95e0cafc834f45->enter($__internal_0c6ca1a83b6a2e59ef73f295e9987f9a09538d0a8220f13acf95e0cafc834f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1d41de90cce72bf1e62b923d50b332acf84b157d125c935e02dcf1b9a9a0fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d41de90cce72bf1e62b923d50b332acf84b157d125c935e02dcf1b9a9a0fd2->enter($__internal_d1d41de90cce72bf1e62b923d50b332acf84b157d125c935e02dcf1b9a9a0fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d1d41de90cce72bf1e62b923d50b332acf84b157d125c935e02dcf1b9a9a0fd2->leave($__internal_d1d41de90cce72bf1e62b923d50b332acf84b157d125c935e02dcf1b9a9a0fd2_prof);

        
        $__internal_0c6ca1a83b6a2e59ef73f295e9987f9a09538d0a8220f13acf95e0cafc834f45->leave($__internal_0c6ca1a83b6a2e59ef73f295e9987f9a09538d0a8220f13acf95e0cafc834f45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
