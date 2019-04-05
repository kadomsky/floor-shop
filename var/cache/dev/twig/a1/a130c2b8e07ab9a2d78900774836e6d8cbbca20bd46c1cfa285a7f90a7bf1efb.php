<?php

/* @PrestaShop/Admin/Security/compromised.html.twig */
class __TwigTemplate_13c327ef3c9ec9b96da3a27704580ed932927af534bb664f76eb6ae7d5fa2873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("::base.html.twig", "@PrestaShop/Admin/Security/compromised.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2f0a6dcf8c1b96ed9931a31184dcc21679b737f9da712d6068add9fb01709e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2f0a6dcf8c1b96ed9931a31184dcc21679b737f9da712d6068add9fb01709e->enter($__internal_ea2f0a6dcf8c1b96ed9931a31184dcc21679b737f9da712d6068add9fb01709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Security/compromised.html.twig"));

        $__internal_17d8d00f1b98fb786a84fef213b6860be0aca47d19bfac92f8b7475534e47f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d8d00f1b98fb786a84fef213b6860be0aca47d19bfac92f8b7475534e47f42->enter($__internal_17d8d00f1b98fb786a84fef213b6860be0aca47d19bfac92f8b7475534e47f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Security/compromised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2f0a6dcf8c1b96ed9931a31184dcc21679b737f9da712d6068add9fb01709e->leave($__internal_ea2f0a6dcf8c1b96ed9931a31184dcc21679b737f9da712d6068add9fb01709e_prof);

        
        $__internal_17d8d00f1b98fb786a84fef213b6860be0aca47d19bfac92f8b7475534e47f42->leave($__internal_17d8d00f1b98fb786a84fef213b6860be0aca47d19bfac92f8b7475534e47f42_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7f91e37ffe604e599463671bdaeed1ca4c00ecee699bd73f5829037e1584cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f91e37ffe604e599463671bdaeed1ca4c00ecee699bd73f5829037e1584cc6->enter($__internal_b7f91e37ffe604e599463671bdaeed1ca4c00ecee699bd73f5829037e1584cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cb0e78d3f01b94d892f257a9003d648280cb458dd298037a6d2edc59e9ccbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb0e78d3f01b94d892f257a9003d648280cb458dd298037a6d2edc59e9ccbc8->enter($__internal_6cb0e78d3f01b94d892f257a9003d648280cb458dd298037a6d2edc59e9ccbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
";
        
        $__internal_6cb0e78d3f01b94d892f257a9003d648280cb458dd298037a6d2edc59e9ccbc8->leave($__internal_6cb0e78d3f01b94d892f257a9003d648280cb458dd298037a6d2edc59e9ccbc8_prof);

        
        $__internal_b7f91e37ffe604e599463671bdaeed1ca4c00ecee699bd73f5829037e1584cc6->leave($__internal_b7f91e37ffe604e599463671bdaeed1ca4c00ecee699bd73f5829037e1584cc6_prof);

    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4849e99b569625e4ec0d60af4529e007e927f1730595ee9fa0bb0bfa3cf8a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4849e99b569625e4ec0d60af4529e007e927f1730595ee9fa0bb0bfa3cf8a60->enter($__internal_c4849e99b569625e4ec0d60af4529e007e927f1730595ee9fa0bb0bfa3cf8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f767d2db73553ccb8261ac392274dd9724f4a939011aa020322c8fe538e2c340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f767d2db73553ccb8261ac392274dd9724f4a939011aa020322c8fe538e2c340->enter($__internal_f767d2db73553ccb8261ac392274dd9724f4a939011aa020322c8fe538e2c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 48
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid token", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
";
        
        $__internal_f767d2db73553ccb8261ac392274dd9724f4a939011aa020322c8fe538e2c340->leave($__internal_f767d2db73553ccb8261ac392274dd9724f4a939011aa020322c8fe538e2c340_prof);

        
        $__internal_c4849e99b569625e4ec0d60af4529e007e927f1730595ee9fa0bb0bfa3cf8a60->leave($__internal_c4849e99b569625e4ec0d60af4529e007e927f1730595ee9fa0bb0bfa3cf8a60_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_9afe2a661c59060a51b65204e0648e21791cae0d37ecd86b6a4bc6e32916b392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afe2a661c59060a51b65204e0648e21791cae0d37ecd86b6a4bc6e32916b392->enter($__internal_9afe2a661c59060a51b65204e0648e21791cae0d37ecd86b6a4bc6e32916b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26d6b3a63a6a4e547a90f49e7f5f9763668ec633736edf71c52e50fc7fb749f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d6b3a63a6a4e547a90f49e7f5f9763668ec633736edf71c52e50fc7fb749f0->enter($__internal_26d6b3a63a6a4e547a90f49e7f5f9763668ec633736edf71c52e50fc7fb749f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 56
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.", array(), "Admin.Catalog.Help"), array("[1]" => "<b>", "[/1]" => "</b>"));
        echo "
            </p>
          </div>

          <h1 class=\"text-md-center\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to display this page?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["requestUri"] ?? $this->getContext($context, "requestUri")), "html", null, true);
        echo "\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, I understand the risks", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Take me out of there!", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
  </div>
";
        
        $__internal_26d6b3a63a6a4e547a90f49e7f5f9763668ec633736edf71c52e50fc7fb749f0->leave($__internal_26d6b3a63a6a4e547a90f49e7f5f9763668ec633736edf71c52e50fc7fb749f0_prof);

        
        $__internal_9afe2a661c59060a51b65204e0648e21791cae0d37ecd86b6a4bc6e32916b392->leave($__internal_9afe2a661c59060a51b65204e0648e21791cae0d37ecd86b6a4bc6e32916b392_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Security/compromised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  139 => 65,  134 => 63,  130 => 62,  125 => 60,  118 => 56,  111 => 51,  102 => 50,  89 => 48,  80 => 47,  51 => 28,  42 => 27,  11 => 25,);
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
{% extends '::base.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme.css') }}\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
{% endblock %}

{% block title %}
  {{ 'Invalid token'|trans({},'Admin.Catalog.Help' ) }}
{% endblock %}
{% block body %}
  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              {{ '[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.'|trans({},'Admin.Catalog.Help')|replace({'[1]' : '<b>', '[/1]' : '</b>'})|raw }}
            </p>
          </div>

          <h1 class=\"text-md-center\">{{ 'Do you want to display this page?'|trans({},'Admin.Catalog.Help' ) }}</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"{{ requestUri }}\">
              {{ 'Yes, I understand the risks'|trans({},'Admin.Catalog.Help' ) }}
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"{{ getAdminLink(\"AdminDashboard\") }}\">
              {{ 'Take me out of there!'|trans({},'Admin.Catalog.Help' ) }}
            </a>
          </div>
        </div>
      </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Security/compromised.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Security/compromised.html.twig");
    }
}
