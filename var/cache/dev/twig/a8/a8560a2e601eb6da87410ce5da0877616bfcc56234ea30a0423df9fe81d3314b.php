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

/* @Product/ProductPage/Forms/form_combination.html.twig */
class __TwigTemplate_c9509248305f01247799f9138fa9a63fb0d9e8b3dd1898744226bd0589ddad97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        // line 25
        echo "<tr class=\"combination loaded\" id=\"attribute_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "name", []), "html", null, true);
        echo "</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
        // line 32
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_price", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <span data-price=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "
    </td>
    ";
        // line 40
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 41
            echo "      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_quantity", []), "html", null, true);
            echo "\" class=\"form-control text-sm-right\">
          </div>
      </td>
    ";
        }
        // line 47
        echo "
    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                ";
        // line 55
        echo "                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prev. combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</a>
                <a class=\"next btn-sensitive\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
                <h2 class=\"title pt-2\">
                  ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination details", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " -
                  ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "name", []), "html", null, true);
        echo "
                </h2>
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_default", []), 'widget');
        echo "
                <div class=\"row\">
                  ";
        // line 68
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 69
            echo "                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), "vars", []), "label", []), "html", null, true);
            echo "
                          </label>
                          ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), 'errors');
            echo "
                          ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), 'widget');
            echo "
                      </fieldset>
                    </div>
                  ";
        }
        // line 79
        echo "                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                          ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), 'errors');
        echo "
                          ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), "vars", []), "label", []), "html", null, true);
        echo "
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                          </label>
                          ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), 'errors');
        echo "
                          ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                          ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), 'errors');
        echo "
                          ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                      ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), 'errors');
        echo "
                      ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), 'errors');
        echo "
                      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", []), 'errors');
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", []), 'widget');
        echo "
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price and impact", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), 'errors');
        echo "
                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price? Is it cheaper or more expensive than the default retail price?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), 'errors');
        echo "
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), 'errors');
        echo "
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <small class=\"form-control-label vcenter\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price (tax excl.) will be", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 ";
        // line 168
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), 'errors');
        echo "
                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price per unit?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), 'errors');
        echo "
                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "</span>
                                </div>
                                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), 'errors');
        echo "
                                ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), 'widget');
        echo "
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific references", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), 'errors');
        echo "
                            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), 'errors');
        echo "
                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), 'errors');
        echo "
                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Images", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), "vars", []), "label", []), "html", null, true);
        echo "</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), 'errors');
        echo "
                            ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 247
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsCombinationBottom", ["id_product" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product", []), "id_product_attribute" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", [])]);
        echo "
                    </div>
                </div>

                ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_product_attribute", []), 'widget');
        echo "
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", ["idProduct" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product", [])]), "html", null, true);
        echo "\" class=\"btn tooltip-link btn-sm delete\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      ";
        // line 259
        $context["checked"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_default", []) == 1)) ? ("checked") : (""));
        // line 260
        echo "      <input class=\"attribute-default\" type=\"radio\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 260,  547 => 259,  539 => 256,  531 => 251,  524 => 247,  514 => 240,  510 => 239,  504 => 236,  495 => 230,  487 => 225,  483 => 224,  479 => 223,  471 => 218,  467 => 217,  462 => 215,  457 => 213,  448 => 207,  444 => 206,  440 => 205,  432 => 200,  423 => 194,  419 => 193,  414 => 191,  408 => 188,  400 => 183,  396 => 182,  391 => 180,  386 => 178,  377 => 172,  373 => 171,  369 => 170,  362 => 168,  347 => 164,  340 => 160,  336 => 159,  332 => 158,  324 => 153,  320 => 152,  315 => 150,  310 => 148,  301 => 142,  297 => 141,  293 => 140,  285 => 135,  276 => 129,  272 => 128,  268 => 127,  258 => 120,  254 => 119,  250 => 118,  242 => 113,  238 => 112,  234 => 111,  226 => 106,  218 => 101,  214 => 100,  210 => 99,  202 => 94,  198 => 93,  193 => 91,  188 => 89,  179 => 83,  175 => 82,  171 => 81,  167 => 79,  160 => 75,  156 => 74,  151 => 72,  146 => 69,  144 => 68,  139 => 66,  134 => 64,  130 => 63,  124 => 60,  117 => 56,  112 => 55,  105 => 52,  100 => 50,  95 => 47,  88 => 43,  84 => 41,  82 => 40,  71 => 38,  64 => 34,  59 => 32,  52 => 28,  45 => 26,  36 => 25,);
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
<tr class=\"combination loaded\" id=\"attribute_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>{{ form.vars.value.name }}</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ default_currency }}</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"{{ form.vars.value.attribute_price }}\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <span data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency }}
    </td>
    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"{{ form.vars.value.attribute_quantity }}\" class=\"form-control text-sm-right\">
          </div>
      </td>
    {% endif %}

    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_{{ form.vars.value.id_product_attribute }}\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                {# \"Prev.\" is short for \"Previous\" #}
                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> {{ 'Prev. combination'|trans({}, 'Admin.Catalog.Feature') }}</a>
                <a class=\"next btn-sensitive\">{{ 'Next combination'|trans({}, 'Admin.Catalog.Feature') }} <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> {{ 'Back to product'|trans({}, 'Admin.Catalog.Feature') }}</button>
                </div>
                <h2 class=\"title pt-2\">
                  {{ \"Combination details\"|trans({}, 'Admin.Catalog.Feature') }} -
                  {{ form.vars.value.name }}
                </h2>
                {{ form_widget(form.attribute_default) }}
                <div class=\"row\">
                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_quantity.vars.label }}
                          </label>
                          {{ form_errors(form.attribute_quantity) }}
                          {{ form_widget(form.attribute_quantity) }}
                      </fieldset>
                    </div>
                  {% endif %}
                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.available_date_attribute.vars.label }}</label>
                          {{ form_errors(form.available_date_attribute) }}
                          {{ form_widget(form.available_date_attribute) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_minimal_quantity.vars.label }}
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                          </label>
                          {{ form_errors(form.attribute_minimal_quantity) }}
                          {{ form_widget(form.attribute_minimal_quantity) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.attribute_reference.vars.label }}</label>
                          {{ form_errors(form.attribute_reference) }}
                          {{ form_widget(form.attribute_reference) }}
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_location.vars.label }}</label>
                      {{ form_errors(form.attribute_location) }}
                      {{ form_widget(form.attribute_location) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_low_stock_threshold.vars.label }}</label>
                      {{ form_errors(form.attribute_low_stock_threshold) }}
                      {{ form_widget(form.attribute_low_stock_threshold) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        {{ form_errors(form.attribute_low_stock_alert) }}
                        {{ form_widget(form.attribute_low_stock_alert) }}
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Price and impact\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_wholesale_price.vars.label }}</label>
                            {{ form_errors(form.attribute_wholesale_price) }}
                            {{ form_widget(form.attribute_wholesale_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_price.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price? Is it cheaper or more expensive than the default retail price?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_price) }}
                            {{ form_widget(form.attribute_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_priceTI.vars.label }}</label>
                            {{ form_errors(form.attribute_priceTI) }}
                            {{ form_widget(form.attribute_priceTI) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <small class=\"form-control-label vcenter\">{{ \"Final retail price (tax excl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency }}</small>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_ecotax.vars.label }}</label>
                            {{ form_errors(form.attribute_ecotax) }}
                            {{ form_widget(form.attribute_ecotax) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_unity.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price per unit?\"|trans({}, 'Admin.Catalog.Feature') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_unity) }}
                            {{ form_widget(form.attribute_unity) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_weight.vars.label }}</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">{{ 'PS_WEIGHT_UNIT'|configuration }}</span>
                                </div>
                                {{ form_errors(form.attribute_weight) }}
                                {{ form_widget(form.attribute_weight) }}
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Specific references\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_isbn.vars.label }}</label>
                            {{ form_errors(form.attribute_isbn) }}
                            {{ form_widget(form.attribute_isbn) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_ean13.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_ean13) }}
                            {{ form_widget(form.attribute_ean13) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_upc.vars.label }}</label>
                            {{ form_errors(form.attribute_upc) }}
                            {{ form_widget(form.attribute_upc) }}
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Images\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">{{ form.id_image_attr.vars.label }}</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            {{ form_errors(form.id_image_attr) }}
                            {{ form_widget(form.id_image_attr) }}
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {{ renderhook('displayAdminProductsCombinationBottom', { 'id_product': form.vars.value.id_product, 'id_product_attribute': form.vars.value.id_product_attribute }) }}
                    </div>
                </div>

                {{ form_widget(form.id_product_attribute) }}
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"{{ path('admin_delete_attribute', {'idProduct': form.vars.value.id_product}) }}\" class=\"btn tooltip-link btn-sm delete\" data=\"{{ form.vars.value.id_product_attribute }}\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      {% set checked = form.vars.value.attribute_default == 1 ? 'checked' : '' %}
      <input class=\"attribute-default\" type=\"radio\" {{ checked }} data-id=\"{{ form.vars.value.id_product_attribute }}\">
    </td>
</tr>
", "@Product/ProductPage/Forms/form_combination.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig");
    }
}
