<?php

/* @PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig */
class __TwigTemplate_a38b56b0fa31d00dc76a3d3aff2868dbcefb741e88e2f40f3f1dca1ec6d13015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_product_collection_widget' => array($this, 'block_typeahead_product_collection_widget'),
            'typeahead_product_pack_collection_widget' => array($this, 'block_typeahead_product_pack_collection_widget'),
            'typeahead_customer_collection_widget' => array($this, 'block_typeahead_customer_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab5204718e0fa259fcbf256fc1a9b204af07d2f2244e215a86c6b03e8668de07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5204718e0fa259fcbf256fc1a9b204af07d2f2244e215a86c6b03e8668de07->enter($__internal_ab5204718e0fa259fcbf256fc1a9b204af07d2f2244e215a86c6b03e8668de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig"));

        $__internal_2b9e63717d5676c8f78e3b423746e8c312cfa4b485039de2d1391a0224d83a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9e63717d5676c8f78e3b423746e8c312cfa4b485039de2d1391a0224d83a39->enter($__internal_2b9e63717d5676c8f78e3b423746e8c312cfa4b485039de2d1391a0224d83a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig"));

        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
        
        $__internal_ab5204718e0fa259fcbf256fc1a9b204af07d2f2244e215a86c6b03e8668de07->leave($__internal_ab5204718e0fa259fcbf256fc1a9b204af07d2f2244e215a86c6b03e8668de07_prof);

        
        $__internal_2b9e63717d5676c8f78e3b423746e8c312cfa4b485039de2d1391a0224d83a39->leave($__internal_2b9e63717d5676c8f78e3b423746e8c312cfa4b485039de2d1391a0224d83a39_prof);

    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        $__internal_ea5f3e6bbdb340f7163015e88bd2413f8b3e032c491bf0de433818dce2517284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5f3e6bbdb340f7163015e88bd2413f8b3e032c491bf0de433818dce2517284->enter($__internal_ea5f3e6bbdb340f7163015e88bd2413f8b3e032c491bf0de433818dce2517284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        $__internal_4063d67fcd5a742f68d761dce940ae8cf00ab645bcde7fe31a7b841d41b697eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4063d67fcd5a742f68d761dce940ae8cf00ab645bcde7fe31a7b841d41b697eb->enter($__internal_4063d67fcd5a742f68d761dce940ae8cf00ab645bcde7fe31a7b841d41b697eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>
        <small class=\"form-text text-muted text-right typeahead-hint\">
        </small>
        <ul id=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 43
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 50
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            ";
        }
        // line 56
        echo "        </ul>

        <div class=\"invisible\" id=\"tplcollection-";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 59
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
        
        $__internal_4063d67fcd5a742f68d761dce940ae8cf00ab645bcde7fe31a7b841d41b697eb->leave($__internal_4063d67fcd5a742f68d761dce940ae8cf00ab645bcde7fe31a7b841d41b697eb_prof);

        
        $__internal_ea5f3e6bbdb340f7163015e88bd2413f8b3e032c491bf0de433818dce2517284->leave($__internal_ea5f3e6bbdb340f7163015e88bd2413f8b3e032c491bf0de433818dce2517284_prof);

    }

    // line 69
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        $__internal_01b62b74d66615119b517920cfc09b9b21b1306006b3c201ca845b92ce8b7301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b62b74d66615119b517920cfc09b9b21b1306006b3c201ca845b92ce8b7301->enter($__internal_01b62b74d66615119b517920cfc09b9b21b1306006b3c201ca845b92ce8b7301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        $__internal_c4c52d12911d4db3a8bc24740b7de998e8144d2a9346890f2f1f452255afe1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c52d12911d4db3a8bc24740b7de998e8144d2a9346890f2f1f452255afe1b4->enter($__internal_c4c52d12911d4db3a8bc24740b7de998e8144d2a9346890f2f1f452255afe1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        // line 70
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 72
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 73
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" /> ";
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "        ";
        }
        // line 83
        echo "    </ul>

    <h2>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 136
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 156
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 159
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 193
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                    source: this['";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
        
        $__internal_c4c52d12911d4db3a8bc24740b7de998e8144d2a9346890f2f1f452255afe1b4->leave($__internal_c4c52d12911d4db3a8bc24740b7de998e8144d2a9346890f2f1f452255afe1b4_prof);

        
        $__internal_01b62b74d66615119b517920cfc09b9b21b1306006b3c201ca845b92ce8b7301->leave($__internal_01b62b74d66615119b517920cfc09b9b21b1306006b3c201ca845b92ce8b7301_prof);

    }

    // line 214
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        $__internal_c1fe052feea2db195a90889e703b2db216553b15f842e5f46b4ffec66d5ea6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fe052feea2db195a90889e703b2db216553b15f842e5f46b4ffec66d5ea6f2->enter($__internal_c1fe052feea2db195a90889e703b2db216553b15f842e5f46b4ffec66d5ea6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        $__internal_eceb2577a45cab952749a39458870659a4d55e0b7a984444eb99c3623c1081ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eceb2577a45cab952749a39458870659a4d55e0b7a984444eb99c3623c1081ff->enter($__internal_eceb2577a45cab952749a39458870659a4d55e0b7a984444eb99c3623c1081ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        // line 215
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\">
      ";
        // line 218
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 219
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 220
                echo "            <li class=\"media\">
                <div class=\"media-body\">
                  ";
                // line 222
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()));
                echo "
                </div>
                <input type=\"hidden\" name=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "      ";
        }
        // line 228
        echo "    </ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.closest('li').remove();
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 250
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 253
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 273
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                source: this['";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 278
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 284
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 288
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 294
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
        
        $__internal_eceb2577a45cab952749a39458870659a4d55e0b7a984444eb99c3623c1081ff->leave($__internal_eceb2577a45cab952749a39458870659a4d55e0b7a984444eb99c3623c1081ff_prof);

        
        $__internal_c1fe052feea2db195a90889e703b2db216553b15f842e5f46b4ffec66d5ea6f2->leave($__internal_c1fe052feea2db195a90889e703b2db216553b15f842e5f46b4ffec66d5ea6f2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  637 => 298,  633 => 297,  628 => 295,  620 => 294,  611 => 288,  600 => 284,  591 => 278,  584 => 274,  580 => 273,  570 => 266,  554 => 253,  548 => 250,  541 => 246,  524 => 232,  518 => 228,  515 => 227,  504 => 224,  499 => 222,  495 => 220,  490 => 219,  488 => 218,  484 => 217,  476 => 216,  471 => 215,  462 => 214,  446 => 207,  430 => 194,  426 => 193,  417 => 187,  398 => 171,  383 => 159,  377 => 156,  370 => 152,  363 => 148,  356 => 144,  351 => 142,  347 => 141,  340 => 137,  332 => 136,  322 => 129,  316 => 126,  307 => 120,  296 => 112,  284 => 103,  279 => 101,  271 => 96,  257 => 89,  250 => 85,  246 => 83,  243 => 82,  227 => 78,  217 => 77,  211 => 76,  203 => 74,  198 => 73,  196 => 72,  192 => 71,  185 => 70,  176 => 69,  162 => 64,  158 => 63,  151 => 59,  147 => 58,  143 => 56,  140 => 55,  129 => 52,  124 => 50,  118 => 47,  114 => 45,  109 => 44,  107 => 43,  103 => 42,  92 => 38,  86 => 35,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 26,  48 => 25,  38 => 214,  35 => 213,  33 => 69,  30 => 68,  28 => 25,);
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
{% block typeahead_product_collection_widget %}
    <div
      class=\"autocomplete-search\"
      data-formid=\"{{ form.vars.id }}\"
      data-fullname=\"{{ form.vars.full_name }}\"
      data-mappingvalue=\"{{ mapping_value }}\"
      data-mappingname=\"{{ mapping_name }}\"
      data-remoteurl=\"{{ remote_url|raw }}\"
      data-limit=\"{{ limit }}\"
    >
        {{ form_errors(form) }}

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control search typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\">
        </div>
        <small class=\"form-text text-muted text-right typeahead-hint\">
        </small>
        <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            {% if collection is defined and collection|length > 0 %}
                {% for item in collection %}
                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"{{ item.image }}\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        {{ template_collection|format(item.name)|raw }}
                      </div>
                      <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
                    </li>
                {% endfor %}
            {% endif %}
        </ul>

        <div class=\"invisible\" id=\"tplcollection-{{ form.vars.id }}\">
          {{ template_collection|raw }}
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#{{ form.vars.id }}').on('focusout', function resetSearchBar() {
        \$('#{{ form.vars.id }}').typeahead('val', '');
      });
    </script>
{% endblock %}

{% block typeahead_product_pack_collection_widget %}
    <h2 class=\"title-products {{ collection is defined and collection|length > 0 ? '' : 'hide' }}\">{{ 'List of products for this pack'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list pack nostyle row\">
        {% if collection is defined and collection|length > 0 %}
            {% for item in collection %}
                <li data-product=\"{{ item.id }}-{{ item.id_product_attribute }}\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"{{ item.image }}\" /> {{ template_collection|format(item.name, item.ref, item.quantity)|raw }}
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                    </div>
                </li>
            {% endfor %}
        {% endif %}
    </ul>

    <h2>{{ form.vars.label }}</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead search {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"{{ form.vars.id }}-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"{{ form.vars.id }}-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    {{ \"Add\"|trans({}, \"Admin.Actions\") }}
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_{{ form.vars.id }} h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#{{ form.vars.id }}-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#{{ form.vars.id }}-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', data.{{ mapping_name }}, data.ref, number);
                        html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#{{ form.vars.id }}-data').append(html);
                        \$('#js_{{ form.vars.id }} h4.title-products').removeClass('hide');

                        \$('#{{ form.vars.id }}').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#{{ form.vars.id }}-curPackItemQty').val(1);
                });

                //define source
                this['{{ form.vars.id }}_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.{{ mapping_value }};
                    },
                    remote: {
                        url: '{{ remote_url|raw }}',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#{{ form.vars.id }}-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#{{ form.vars.id }}').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '{{ mapping_name }}',
                    source: this['{{ form.vars.id }}_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#{{ form.vars.id }}-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
{% endblock %}

{% block typeahead_customer_collection_widget %}
    {{ form_errors(form) }}
    <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list product-list nostyle col-sm-12\">
      {% if collection is defined and collection|length > 0 %}
        {% for item in collection %}
            <li class=\"media\">
                <div class=\"media-body\">
                  {{ template_collection|format(item.name)|raw }}
                </div>
                <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
            </li>
        {% endfor %}
      {% endif %}
    </ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.closest('li').remove();
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['{{ form.vars.id }}_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.{{ mapping_value }};
                },
                remote: {
                    url: '{{ remote_url|raw }}',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#{{ form.vars.id }}').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '{{ mapping_name }}',
                source: this['{{ form.vars.id }}_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.{{ mapping_name }} +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if({{ limit }} != 0 && \$('#{{ form.vars.id }}-data li').length >= {{ limit }}){
                    return;
                }

                var value = suggestion.{{ mapping_value }};
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', suggestion.{{ mapping_name }});
                html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#{{ form.vars.id }}-data').show();
                \$('#{{ form.vars.id }}-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
