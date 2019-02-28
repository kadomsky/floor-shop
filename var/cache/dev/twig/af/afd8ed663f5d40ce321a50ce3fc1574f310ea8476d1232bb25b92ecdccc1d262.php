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
        $__internal_0a489f8f927a7fb06666d7dd4909fd2f729822b8b21259bc13d414257c99a78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a489f8f927a7fb06666d7dd4909fd2f729822b8b21259bc13d414257c99a78c->enter($__internal_0a489f8f927a7fb06666d7dd4909fd2f729822b8b21259bc13d414257c99a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4978403173bd26e5c3c732da1e07c5b98923b352b021c75bbccd630ab36e81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4978403173bd26e5c3c732da1e07c5b98923b352b021c75bbccd630ab36e81a8->enter($__internal_4978403173bd26e5c3c732da1e07c5b98923b352b021c75bbccd630ab36e81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a489f8f927a7fb06666d7dd4909fd2f729822b8b21259bc13d414257c99a78c->leave($__internal_0a489f8f927a7fb06666d7dd4909fd2f729822b8b21259bc13d414257c99a78c_prof);

        
        $__internal_4978403173bd26e5c3c732da1e07c5b98923b352b021c75bbccd630ab36e81a8->leave($__internal_4978403173bd26e5c3c732da1e07c5b98923b352b021c75bbccd630ab36e81a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_129f87f51ba4340321a4c06795cfd3c6acff558856693278e5f257aa7be1c433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129f87f51ba4340321a4c06795cfd3c6acff558856693278e5f257aa7be1c433->enter($__internal_129f87f51ba4340321a4c06795cfd3c6acff558856693278e5f257aa7be1c433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b3fa05345e178e83550b21fd531bef952f8201b9a2419f3b88d97b3f2d50799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3fa05345e178e83550b21fd531bef952f8201b9a2419f3b88d97b3f2d50799->enter($__internal_4b3fa05345e178e83550b21fd531bef952f8201b9a2419f3b88d97b3f2d50799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b3fa05345e178e83550b21fd531bef952f8201b9a2419f3b88d97b3f2d50799->leave($__internal_4b3fa05345e178e83550b21fd531bef952f8201b9a2419f3b88d97b3f2d50799_prof);

        
        $__internal_129f87f51ba4340321a4c06795cfd3c6acff558856693278e5f257aa7be1c433->leave($__internal_129f87f51ba4340321a4c06795cfd3c6acff558856693278e5f257aa7be1c433_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea19920c0a32a10b0d72cba149620b74d917646e324f84f82354350349ed636e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea19920c0a32a10b0d72cba149620b74d917646e324f84f82354350349ed636e->enter($__internal_ea19920c0a32a10b0d72cba149620b74d917646e324f84f82354350349ed636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9399157194553edc993dcf3a01cd6ac078d38e4c254b33e50b2fdc11da36b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9399157194553edc993dcf3a01cd6ac078d38e4c254b33e50b2fdc11da36b90->enter($__internal_f9399157194553edc993dcf3a01cd6ac078d38e4c254b33e50b2fdc11da36b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9399157194553edc993dcf3a01cd6ac078d38e4c254b33e50b2fdc11da36b90->leave($__internal_f9399157194553edc993dcf3a01cd6ac078d38e4c254b33e50b2fdc11da36b90_prof);

        
        $__internal_ea19920c0a32a10b0d72cba149620b74d917646e324f84f82354350349ed636e->leave($__internal_ea19920c0a32a10b0d72cba149620b74d917646e324f84f82354350349ed636e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_985618c8c8af62987e7615c0d111a3a66b0e2037a1c71230c36c401b24d4000c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985618c8c8af62987e7615c0d111a3a66b0e2037a1c71230c36c401b24d4000c->enter($__internal_985618c8c8af62987e7615c0d111a3a66b0e2037a1c71230c36c401b24d4000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c08dcca305f8bd1a423d3d12b85f4306cf5c4aaa0152484cb8bc4acd70366e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08dcca305f8bd1a423d3d12b85f4306cf5c4aaa0152484cb8bc4acd70366e42->enter($__internal_c08dcca305f8bd1a423d3d12b85f4306cf5c4aaa0152484cb8bc4acd70366e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c08dcca305f8bd1a423d3d12b85f4306cf5c4aaa0152484cb8bc4acd70366e42->leave($__internal_c08dcca305f8bd1a423d3d12b85f4306cf5c4aaa0152484cb8bc4acd70366e42_prof);

        
        $__internal_985618c8c8af62987e7615c0d111a3a66b0e2037a1c71230c36c401b24d4000c->leave($__internal_985618c8c8af62987e7615c0d111a3a66b0e2037a1c71230c36c401b24d4000c_prof);

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
