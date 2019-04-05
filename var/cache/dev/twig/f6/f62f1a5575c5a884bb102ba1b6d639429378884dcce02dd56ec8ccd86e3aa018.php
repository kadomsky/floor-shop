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
        $__internal_9614b3f9f03e4b931a427dcf18dc5a7194345995dc49e0e167c155afe9ad81f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9614b3f9f03e4b931a427dcf18dc5a7194345995dc49e0e167c155afe9ad81f3->enter($__internal_9614b3f9f03e4b931a427dcf18dc5a7194345995dc49e0e167c155afe9ad81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_178a3df904b4844ee6234e8452bc2d1f45299412dbd5a8a444515d2feee02b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178a3df904b4844ee6234e8452bc2d1f45299412dbd5a8a444515d2feee02b3f->enter($__internal_178a3df904b4844ee6234e8452bc2d1f45299412dbd5a8a444515d2feee02b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9614b3f9f03e4b931a427dcf18dc5a7194345995dc49e0e167c155afe9ad81f3->leave($__internal_9614b3f9f03e4b931a427dcf18dc5a7194345995dc49e0e167c155afe9ad81f3_prof);

        
        $__internal_178a3df904b4844ee6234e8452bc2d1f45299412dbd5a8a444515d2feee02b3f->leave($__internal_178a3df904b4844ee6234e8452bc2d1f45299412dbd5a8a444515d2feee02b3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67160f0dd8bc6763d168fc7027427eaf74cc433e3619111493140ed2c1ea0c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67160f0dd8bc6763d168fc7027427eaf74cc433e3619111493140ed2c1ea0c34->enter($__internal_67160f0dd8bc6763d168fc7027427eaf74cc433e3619111493140ed2c1ea0c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcac038d38f81f18aac507594f1b3fb7be0d5d4af2a55889d3181ff96be431ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac038d38f81f18aac507594f1b3fb7be0d5d4af2a55889d3181ff96be431ba->enter($__internal_bcac038d38f81f18aac507594f1b3fb7be0d5d4af2a55889d3181ff96be431ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bcac038d38f81f18aac507594f1b3fb7be0d5d4af2a55889d3181ff96be431ba->leave($__internal_bcac038d38f81f18aac507594f1b3fb7be0d5d4af2a55889d3181ff96be431ba_prof);

        
        $__internal_67160f0dd8bc6763d168fc7027427eaf74cc433e3619111493140ed2c1ea0c34->leave($__internal_67160f0dd8bc6763d168fc7027427eaf74cc433e3619111493140ed2c1ea0c34_prof);

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
