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
        $__internal_aee13af9204c1a9d5530213f95215403dcd50fce5cfd0184a3c3c02868a2cb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee13af9204c1a9d5530213f95215403dcd50fce5cfd0184a3c3c02868a2cb63->enter($__internal_aee13af9204c1a9d5530213f95215403dcd50fce5cfd0184a3c3c02868a2cb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c69666761cee83719a1299a9b7d868c051c5d93c2df56eb75883906b7e0adb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69666761cee83719a1299a9b7d868c051c5d93c2df56eb75883906b7e0adb33->enter($__internal_c69666761cee83719a1299a9b7d868c051c5d93c2df56eb75883906b7e0adb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aee13af9204c1a9d5530213f95215403dcd50fce5cfd0184a3c3c02868a2cb63->leave($__internal_aee13af9204c1a9d5530213f95215403dcd50fce5cfd0184a3c3c02868a2cb63_prof);

        
        $__internal_c69666761cee83719a1299a9b7d868c051c5d93c2df56eb75883906b7e0adb33->leave($__internal_c69666761cee83719a1299a9b7d868c051c5d93c2df56eb75883906b7e0adb33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5130bd8b01b01de353a67209269fef6b381a6a78fee03c3122799501f158dc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5130bd8b01b01de353a67209269fef6b381a6a78fee03c3122799501f158dc21->enter($__internal_5130bd8b01b01de353a67209269fef6b381a6a78fee03c3122799501f158dc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_083f4a2d117d14e1bb94adb1d6a129205ef4fe5a2cebe285fa8c6250d364b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083f4a2d117d14e1bb94adb1d6a129205ef4fe5a2cebe285fa8c6250d364b6a4->enter($__internal_083f4a2d117d14e1bb94adb1d6a129205ef4fe5a2cebe285fa8c6250d364b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_083f4a2d117d14e1bb94adb1d6a129205ef4fe5a2cebe285fa8c6250d364b6a4->leave($__internal_083f4a2d117d14e1bb94adb1d6a129205ef4fe5a2cebe285fa8c6250d364b6a4_prof);

        
        $__internal_5130bd8b01b01de353a67209269fef6b381a6a78fee03c3122799501f158dc21->leave($__internal_5130bd8b01b01de353a67209269fef6b381a6a78fee03c3122799501f158dc21_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df6f9a4f7872888dd7b5a6c026c546eba1fecccd702d4b71109cc6abb68a697f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6f9a4f7872888dd7b5a6c026c546eba1fecccd702d4b71109cc6abb68a697f->enter($__internal_df6f9a4f7872888dd7b5a6c026c546eba1fecccd702d4b71109cc6abb68a697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b3da96fefb0458850cfef599975b66cbad1012eee281dcf07ea7dd4b177ddfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3da96fefb0458850cfef599975b66cbad1012eee281dcf07ea7dd4b177ddfd->enter($__internal_7b3da96fefb0458850cfef599975b66cbad1012eee281dcf07ea7dd4b177ddfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7b3da96fefb0458850cfef599975b66cbad1012eee281dcf07ea7dd4b177ddfd->leave($__internal_7b3da96fefb0458850cfef599975b66cbad1012eee281dcf07ea7dd4b177ddfd_prof);

        
        $__internal_df6f9a4f7872888dd7b5a6c026c546eba1fecccd702d4b71109cc6abb68a697f->leave($__internal_df6f9a4f7872888dd7b5a6c026c546eba1fecccd702d4b71109cc6abb68a697f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bc5af99b072481ecbb03ca1ae27933be08eac10b89edc72ca441b9ad0d0b0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc5af99b072481ecbb03ca1ae27933be08eac10b89edc72ca441b9ad0d0b0cd->enter($__internal_0bc5af99b072481ecbb03ca1ae27933be08eac10b89edc72ca441b9ad0d0b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8ceaadc4d419c31831db2b76edf4708833d5d108b1a055a8858a1892e2fdb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ceaadc4d419c31831db2b76edf4708833d5d108b1a055a8858a1892e2fdb18->enter($__internal_e8ceaadc4d419c31831db2b76edf4708833d5d108b1a055a8858a1892e2fdb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e8ceaadc4d419c31831db2b76edf4708833d5d108b1a055a8858a1892e2fdb18->leave($__internal_e8ceaadc4d419c31831db2b76edf4708833d5d108b1a055a8858a1892e2fdb18_prof);

        
        $__internal_0bc5af99b072481ecbb03ca1ae27933be08eac10b89edc72ca441b9ad0d0b0cd->leave($__internal_0bc5af99b072481ecbb03ca1ae27933be08eac10b89edc72ca441b9ad0d0b0cd_prof);

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
