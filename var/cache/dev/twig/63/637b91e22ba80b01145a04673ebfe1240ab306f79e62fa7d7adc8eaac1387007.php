<?php

/* ::base.html.twig */
class __TwigTemplate_06ccc48d3ac3262dd92069d8f979d59b932bc054a0f13d613a0fcdb22f5fecfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae383827435cc910321d36133bb184b7a5eeade75ecdfd56285814aa5bff8f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae383827435cc910321d36133bb184b7a5eeade75ecdfd56285814aa5bff8f37->enter($__internal_ae383827435cc910321d36133bb184b7a5eeade75ecdfd56285814aa5bff8f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a2ae471bed52690a3f55206d10ce0b7bc042acc110cd4b84b4e5ff4878b7463b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ae471bed52690a3f55206d10ce0b7bc042acc110cd4b84b4e5ff4878b7463b->enter($__internal_a2ae471bed52690a3f55206d10ce0b7bc042acc110cd4b84b4e5ff4878b7463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 25
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "  </body>
</html>
";
        
        $__internal_ae383827435cc910321d36133bb184b7a5eeade75ecdfd56285814aa5bff8f37->leave($__internal_ae383827435cc910321d36133bb184b7a5eeade75ecdfd56285814aa5bff8f37_prof);

        
        $__internal_a2ae471bed52690a3f55206d10ce0b7bc042acc110cd4b84b4e5ff4878b7463b->leave($__internal_a2ae471bed52690a3f55206d10ce0b7bc042acc110cd4b84b4e5ff4878b7463b_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_44d1b168f53aeb4469d9fd6386bb3d2bbdafa319c88bae3d5302c230525ad717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d1b168f53aeb4469d9fd6386bb3d2bbdafa319c88bae3d5302c230525ad717->enter($__internal_44d1b168f53aeb4469d9fd6386bb3d2bbdafa319c88bae3d5302c230525ad717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a09fd7778307cad3d990779fbd9464f3a7ee898f2cc7ec2d353e2df0d4ab0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a09fd7778307cad3d990779fbd9464f3a7ee898f2cc7ec2d353e2df0d4ab0f9->enter($__internal_8a09fd7778307cad3d990779fbd9464f3a7ee898f2cc7ec2d353e2df0d4ab0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a09fd7778307cad3d990779fbd9464f3a7ee898f2cc7ec2d353e2df0d4ab0f9->leave($__internal_8a09fd7778307cad3d990779fbd9464f3a7ee898f2cc7ec2d353e2df0d4ab0f9_prof);

        
        $__internal_44d1b168f53aeb4469d9fd6386bb3d2bbdafa319c88bae3d5302c230525ad717->leave($__internal_44d1b168f53aeb4469d9fd6386bb3d2bbdafa319c88bae3d5302c230525ad717_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c9a156f3ac1de37118b27d573edef512f7f5941fe29b49ff07874aaef2397a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9a156f3ac1de37118b27d573edef512f7f5941fe29b49ff07874aaef2397a2->enter($__internal_2c9a156f3ac1de37118b27d573edef512f7f5941fe29b49ff07874aaef2397a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a815d7a975f163566184b1a1b3527c85e77c075edbc70645af1b7951667900d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a815d7a975f163566184b1a1b3527c85e77c075edbc70645af1b7951667900d->enter($__internal_7a815d7a975f163566184b1a1b3527c85e77c075edbc70645af1b7951667900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a815d7a975f163566184b1a1b3527c85e77c075edbc70645af1b7951667900d->leave($__internal_7a815d7a975f163566184b1a1b3527c85e77c075edbc70645af1b7951667900d_prof);

        
        $__internal_2c9a156f3ac1de37118b27d573edef512f7f5941fe29b49ff07874aaef2397a2->leave($__internal_2c9a156f3ac1de37118b27d573edef512f7f5941fe29b49ff07874aaef2397a2_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_36468077e6a76b7f54062ad60fa4ff1f19605021c0216b831a7fd40a7c30bfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36468077e6a76b7f54062ad60fa4ff1f19605021c0216b831a7fd40a7c30bfd9->enter($__internal_36468077e6a76b7f54062ad60fa4ff1f19605021c0216b831a7fd40a7c30bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b6e1bf564839137e98084940917936f2cfd21854a74ecabfa05734805bdaed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6e1bf564839137e98084940917936f2cfd21854a74ecabfa05734805bdaed1->enter($__internal_8b6e1bf564839137e98084940917936f2cfd21854a74ecabfa05734805bdaed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b6e1bf564839137e98084940917936f2cfd21854a74ecabfa05734805bdaed1->leave($__internal_8b6e1bf564839137e98084940917936f2cfd21854a74ecabfa05734805bdaed1_prof);

        
        $__internal_36468077e6a76b7f54062ad60fa4ff1f19605021c0216b831a7fd40a7c30bfd9->leave($__internal_36468077e6a76b7f54062ad60fa4ff1f19605021c0216b831a7fd40a7c30bfd9_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fda94e25d968c556919f34a9a3fc2baeddd3820421092767950b529b35ffcccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda94e25d968c556919f34a9a3fc2baeddd3820421092767950b529b35ffcccf->enter($__internal_fda94e25d968c556919f34a9a3fc2baeddd3820421092767950b529b35ffcccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f1578da4af1e63a56451db1eccb40540097eeaf2fd1926d078f1a2f9eaa51d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1578da4af1e63a56451db1eccb40540097eeaf2fd1926d078f1a2f9eaa51d6->enter($__internal_7f1578da4af1e63a56451db1eccb40540097eeaf2fd1926d078f1a2f9eaa51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f1578da4af1e63a56451db1eccb40540097eeaf2fd1926d078f1a2f9eaa51d6->leave($__internal_7f1578da4af1e63a56451db1eccb40540097eeaf2fd1926d078f1a2f9eaa51d6_prof);

        
        $__internal_fda94e25d968c556919f34a9a3fc2baeddd3820421092767950b529b35ffcccf->leave($__internal_fda94e25d968c556919f34a9a3fc2baeddd3820421092767950b529b35ffcccf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  100 => 34,  83 => 30,  65 => 29,  53 => 36,  50 => 35,  48 => 34,  41 => 31,  39 => 30,  35 => 29,  29 => 25,);
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
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>
  <body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "::base.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/app/Resources/views/base.html.twig");
    }
}
