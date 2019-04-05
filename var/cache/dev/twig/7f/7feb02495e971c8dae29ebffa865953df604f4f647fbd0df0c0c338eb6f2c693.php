<?php

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_1c3796c32b36b1feb80db683e6f1993d9446513eba50061f3ccd6b496ada7048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'perfs_memcache_servers' => array($this, 'block_perfs_memcache_servers'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a1d0b66da53ab80723fbd67a068a08a10b25043bef4fa8163ef6496ad1593da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1d0b66da53ab80723fbd67a068a08a10b25043bef4fa8163ef6496ad1593da->enter($__internal_3a1d0b66da53ab80723fbd67a068a08a10b25043bef4fa8163ef6496ad1593da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        $__internal_f03d9d24d4b1557cdf7981b0e23bd5f2ea374b4d4a84986a29e51da3888456dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d9d24d4b1557cdf7981b0e23bd5f2ea374b4d4a84986a29e51da3888456dc->enter($__internal_f03d9d24d4b1557cdf7981b0e23bd5f2ea374b4d4a84986a29e51da3888456dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('perfs_memcache_servers', $context, $blocks);
        
        $__internal_3a1d0b66da53ab80723fbd67a068a08a10b25043bef4fa8163ef6496ad1593da->leave($__internal_3a1d0b66da53ab80723fbd67a068a08a10b25043bef4fa8163ef6496ad1593da_prof);

        
        $__internal_f03d9d24d4b1557cdf7981b0e23bd5f2ea374b4d4a84986a29e51da3888456dc->leave($__internal_f03d9d24d4b1557cdf7981b0e23bd5f2ea374b4d4a84986a29e51da3888456dc_prof);

    }

    public function block_perfs_memcache_servers($context, array $blocks = array())
    {
        $__internal_7b16f0cab55b777123a7955d17d78742be9e55fbc1a53c9c425aaf6a95f88033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b16f0cab55b777123a7955d17d78742be9e55fbc1a53c9c425aaf6a95f88033->enter($__internal_7b16f0cab55b777123a7955d17d78742be9e55fbc1a53c9c425aaf6a95f88033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        $__internal_1a5d208591fd24bea6ce9fdbd3db7379326385c4f11083df773d28cfa08be8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5d208591fd24bea6ce9fdbd3db7379326385c4f11083df773d28cfa08be8ec->enter($__internal_1a5d208591fd24bea6ce9fdbd3db7379326385c4f11083df773d28cfa08be8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        // line 28
        echo "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add server", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP Address", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_ip", array()), 'errors');
        echo "
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_ip", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_port", array()), 'errors');
        echo "
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_port", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_weight", array()), 'errors');
        echo "
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "memcache_weight", array()), 'widget');
        echo "
        </div>
    </div>

    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Server", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Test Server", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "</span></th>
                <th><span class=\"title_box\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP Address", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servers"] ?? $this->getContext($context, "servers")));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 87
            echo "                <tr id=\"row_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", array()), "html", null, true);
            echo "\">
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "ip", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "port", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "weight", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 93
            $context["removeMsg"] = twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", array("%serverIp%" => $this->getAttribute($context["server"], "ip", array()), "%serverPort%" => $this->getAttribute($context["server"], "port", array())), "Admin.Advparameters.Notification"));
            // line 94
            echo "                        <a class=\"btn btn-default\" href=\"\" onclick=\"app.removeServer(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($context["removeMsg"] ?? $this->getContext($context, "removeMsg")), "html", null, true);
            echo ");\"><i class=\"material-icons\">remove_circle</i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_1a5d208591fd24bea6ce9fdbd3db7379326385c4f11083df773d28cfa08be8ec->leave($__internal_1a5d208591fd24bea6ce9fdbd3db7379326385c4f11083df773d28cfa08be8ec_prof);

        
        $__internal_7b16f0cab55b777123a7955d17d78742be9e55fbc1a53c9c425aaf6a95f88033->leave($__internal_7b16f0cab55b777123a7955d17d78742be9e55fbc1a53c9c425aaf6a95f88033_prof);

    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 98,  186 => 94,  184 => 93,  179 => 91,  175 => 90,  171 => 89,  167 => 88,  162 => 87,  158 => 86,  150 => 81,  146 => 80,  142 => 79,  138 => 78,  125 => 68,  121 => 67,  114 => 63,  107 => 59,  103 => 58,  98 => 56,  90 => 51,  86 => 50,  81 => 48,  73 => 43,  69 => 42,  64 => 40,  56 => 35,  47 => 28,  29 => 27,  26 => 26,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block perfs_memcache_servers %}
<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> {{ 'Add server'|trans }}</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'IP Address'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_ip) }}
          {{ form_widget(form.memcache_ip) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'Port'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_port) }}
          {{ form_widget(form.memcache_port) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'Weight'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_weight) }}
          {{ form_widget(form.memcache_weight) }}
        </div>
    </div>

    {{ form_rest(form) }}

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">{{ 'Add Server'|trans }}</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">{{ 'Test Server'|trans }}</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'ID'|trans({}, 'Admin.Global') }}</span></th>
                <th><span class=\"title_box\">{{ 'IP Address'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Port'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Weight'|trans }}</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for server in servers %}
                <tr id=\"row_{{ server.id_memcached_server }}\">
                    <td>{{ server.id_memcached_server }}</td>
                    <td>{{ server.ip }}</td>
                    <td>{{ server.port }}</td>
                    <td>{{ server.weight }}</td>
                    <td>
                        {% set removeMsg = 'Do you really want to remove the server %serverIp%:%serverPort% ?'|trans({'%serverIp%': server.ip, '%serverPort%': server.port}, 'Admin.Advparameters.Notification')|json_encode|raw  %}
                        <a class=\"btn btn-default\" href=\"\" onclick=\"app.removeServer({{ server.id_memcached_server }}, {{ removeMsg }});\"><i class=\"material-icons\">remove_circle</i> {{ 'Remove'|trans({}, 'Admin.Actions') }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "@AdvancedParameters/memcache_servers.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
