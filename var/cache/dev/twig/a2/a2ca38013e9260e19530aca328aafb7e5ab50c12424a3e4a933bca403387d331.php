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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig */
class __TwigTemplate_422b48d1feec725ced91a03f5572d3001146e5101a7daabe22107b130f251160 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !(null === $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), "employee", []))) {
            // line 27
            echo "  ";
            // line 28
            list($context["employeeName"], $context["employeeImage"]) =             [$this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), "employee", []), (("http://profile.prestashop.com/" . twig_urlencode_filter($this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), "email", []))) . ".jpg")];
            // line 30
            echo "  <span class=\"employee_avatar_small\">
    <img class=\"img rounded-circle\" alt=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? $this->getContext($context, "employeeName")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["employeeImage"] ?? $this->getContext($context, "employeeImage")), "html", null, true);
            echo "\" height=\"32\" width=\"32\" />
  </span>
  ";
            // line 33
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? $this->getContext($context, "employeeName")), "html", null, true);
            echo "
";
        } else {
            // line 35
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"), "html", null, true);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 35,  55 => 33,  48 => 31,  45 => 30,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% if record.employee is not null %}
  {%
    set employeeName, employeeImage = record.employee, 'http://profile.prestashop.com/'~record.email|url_encode~'.jpg'
  %}
  <span class=\"employee_avatar_small\">
    <img class=\"img rounded-circle\" alt=\"{{ employeeName }}\" src=\"{{ employeeImage }}\" height=\"32\" width=\"32\" />
  </span>
  {{ employeeName }}
{% else %}
  {{ 'N/A'|trans({}, 'Admin.Global') }}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig");
    }
}
