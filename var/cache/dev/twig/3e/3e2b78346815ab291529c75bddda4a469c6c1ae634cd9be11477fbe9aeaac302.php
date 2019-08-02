<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig */
class __TwigTemplate_698f2e198b3e6de79689cb16b58078a62a9a75b27ca1cba3c413897e3fec2cb7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'manufacturer_form_rest' => [$this, 'block_manufacturer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brands", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'errors');
        echo "

      ";
        // line 38
        ob_start();
        // line 39
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["invalidCatalogNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" =>         // line 44
($context["invalidCatalogNameHint"] ?? $this->getContext($context, "invalidCatalogNameHint"))]);
        // line 45
        echo "

      ";
        // line 47
        ob_start();
        // line 48
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}"), "html", null, true);
        echo "
      ";
        $context["invalidGenericNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
      ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "short_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Short description", [], "Admin.Catalog.Feature")]);
        // line 53
        echo "

      ";
        // line 55
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global")]);
        // line 57
        echo "

      ";
        // line 59
        ob_start();
        // line 60
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a brand logo from your computer.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
      ";
        $context["logoHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
      ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "logo", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logo", [], "Admin.Global"), "help" =>         // line 65
($context["logoHint"] ?? $this->getContext($context, "logoHint"))]);
        // line 66
        echo "

      ";
        // line 68
        if (((isset($context["logoImage"]) || array_key_exists("logoImage", $context)) &&  !(null === ($context["logoImage"] ?? $this->getContext($context, "logoImage"))))) {
            // line 69
            echo "        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 72
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 72)->display($context);
            // line 73
            echo "          </div>
        </div>
      ";
        }
        // line 76
        echo "
      ";
        // line 77
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Catalog.Feature"), "help" =>         // line 79
($context["invalidGenericNameHint"] ?? $this->getContext($context, "invalidGenericNameHint"))]);
        // line 80
        echo "

      ";
        // line 82
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 84
($context["invalidGenericNameHint"] ?? $this->getContext($context, "invalidGenericNameHint"))]);
        // line 85
        echo "

      ";
        // line 87
        ob_start();
        // line 88
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 89
        echo twig_escape_filter($this->env, ($context["invalidGenericNameHint"] ?? $this->getContext($context, "invalidGenericNameHint")), "html", null, true);
        echo "
      ";
        $context["keywordHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
      ";
        // line 92
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 94
($context["keywordHint"] ?? $this->getContext($context, "keywordHint"))]);
        // line 95
        echo "

      ";
        // line 97
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "is_enabled", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled", [], "Admin.Global")]);
        // line 99
        echo "

      ";
        // line 101
        if ($this->getAttribute(($context["manufacturerForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 102
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 104
            echo "
      ";
        }
        // line 106
        echo "
      ";
        // line 107
        $this->displayBlock('manufacturer_form_rest', $context, $blocks);
        // line 110
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_manufacturer_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manufacturer_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manufacturer_form_rest"));

        // line 108
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 108,  230 => 107,  218 => 121,  211 => 117,  205 => 114,  201 => 113,  196 => 110,  194 => 107,  191 => 106,  187 => 104,  184 => 102,  182 => 101,  178 => 99,  176 => 97,  172 => 95,  170 => 94,  169 => 92,  166 => 91,  161 => 89,  156 => 88,  154 => 87,  150 => 85,  148 => 84,  147 => 82,  143 => 80,  141 => 79,  140 => 77,  137 => 76,  132 => 73,  130 => 72,  125 => 69,  123 => 68,  119 => 66,  117 => 65,  116 => 63,  113 => 62,  107 => 60,  105 => 59,  101 => 57,  99 => 55,  95 => 53,  93 => 51,  90 => 50,  84 => 48,  82 => 47,  78 => 45,  76 => 44,  75 => 42,  72 => 41,  66 => 39,  64 => 38,  59 => 36,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(manufacturerForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    {{ 'Brands'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(manufacturerForm) }}

      {% set invalidCatalogNameHint %}
        {{ 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}' }}
      {% endset %}

      {{ ps.form_group_row(manufacturerForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global'),
        'help': invalidCatalogNameHint
      }) }}

      {% set invalidGenericNameHint %}
        {{ 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>={}' }}
      {% endset %}

      {{ ps.form_group_row(manufacturerForm.short_description, {}, {
        'label': 'Short description'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {{ ps.form_group_row(manufacturerForm.description, {}, {
        'label': 'Description'|trans({}, 'Admin.Global')
      }) }}

      {% set logoHint %}
        {{ 'Upload a brand logo from your computer.'|trans({}, 'Admin.Catalog.Help') }}
      {% endset %}

      {{ ps.form_group_row(manufacturerForm.logo, {}, {
        'label': 'Logo'|trans({}, 'Admin.Global'),
        'help': logoHint
      }) }}

      {% if logoImage is defined and logoImage is not null %}
        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {% include '@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig' %}
          </div>
        </div>
      {% endif %}

      {{ ps.form_group_row(manufacturerForm.meta_title, {}, {
        'label': 'Meta title'|trans({}, 'Admin.Catalog.Feature'),
        'help': invalidGenericNameHint
      }) }}

      {{ ps.form_group_row(manufacturerForm.meta_description, {}, {
        'label': 'Meta description'|trans({}, 'Admin.Global'),
        'help': invalidGenericNameHint
      }) }}

      {% set keywordHint %}
        {{ 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help') }}
        {{ invalidGenericNameHint }}
      {% endset %}

      {{ ps.form_group_row(manufacturerForm.meta_keyword, {}, {
        'label': 'Meta keywords'|trans({}, 'Admin.Global'),
        'help': keywordHint
      }) }}

      {{ ps.form_group_row(manufacturerForm.is_enabled, {}, {
        'label': 'Enabled'|trans({}, 'Admin.Global')
      }) }}

      {% if manufacturerForm.shop_association is defined %}
        {{ ps.form_group_row(manufacturerForm.shop_association, {}, {
          'label': 'Shop association'|trans({}, 'Admin.Global')
        }) }}
      {% endif %}

      {% block manufacturer_form_rest %}
        {{ form_rest(manufacturerForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_manufacturers_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(manufacturerForm) }}
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig");
    }
}
