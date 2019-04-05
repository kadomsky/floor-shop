<?php

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_f19519cf5a7d6851b8a0828f00088d6070380fb0f3438a041be551111d69bb4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'date_range_widget' => array($this, 'block_date_range_widget'),
                'search_and_reset_widget' => array($this, 'block_search_and_reset_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'material_choice_table_widget' => array($this, 'block_material_choice_table_widget'),
                'material_multiple_choice_table_widget' => array($this, 'block_material_multiple_choice_table_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8055270de6cef620fae41b03d1882fab79cf1ee3a2c60aba1a2d852ec8f005d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8055270de6cef620fae41b03d1882fab79cf1ee3a2c60aba1a2d852ec8f005d->enter($__internal_b8055270de6cef620fae41b03d1882fab79cf1ee3a2c60aba1a2d852ec8f005d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig"));

        $__internal_376a212d82a02d8a17cbf5b503aa7f9cc95ba6e1abe5ac484c000e2f7d9e155d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376a212d82a02d8a17cbf5b503aa7f9cc95ba6e1abe5ac484c000e2f7d9e155d->enter($__internal_376a212d82a02d8a17cbf5b503aa7f9cc95ba6e1abe5ac484c000e2f7d9e155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 311
        echo "
";
        // line 312
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 379
        echo "
";
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('form_label', $context, $blocks);
        // line 386
        echo "
";
        // line 387
        $this->displayBlock('choice_label', $context, $blocks);
        // line 392
        echo "
";
        // line 393
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('radio_label', $context, $blocks);
        // line 400
        echo "
";
        // line 401
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 430
        echo "
";
        // line 432
        echo "
";
        // line 433
        $this->displayBlock('form_row', $context, $blocks);
        // line 440
        echo "
";
        // line 441
        $this->displayBlock('button_row', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('choice_row', $context, $blocks);
        // line 451
        echo "
";
        // line 452
        $this->displayBlock('date_row', $context, $blocks);
        // line 456
        echo "
";
        // line 457
        $this->displayBlock('time_row', $context, $blocks);
        // line 461
        echo "
";
        // line 462
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('radio_row', $context, $blocks);
        // line 480
        echo "
";
        // line 482
        echo "
";
        // line 483
        $this->displayBlock('form_errors', $context, $blocks);
        // line 512
        echo "

";
        // line 515
        echo "
";
        // line 516
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 546
        echo "
";
        // line 547
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        
        $__internal_b8055270de6cef620fae41b03d1882fab79cf1ee3a2c60aba1a2d852ec8f005d->leave($__internal_b8055270de6cef620fae41b03d1882fab79cf1ee3a2c60aba1a2d852ec8f005d_prof);

        
        $__internal_376a212d82a02d8a17cbf5b503aa7f9cc95ba6e1abe5ac484c000e2f7d9e155d->leave($__internal_376a212d82a02d8a17cbf5b503aa7f9cc95ba6e1abe5ac484c000e2f7d9e155d_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_356fc7cc13bbdac626896cb7bae0116ce2aa660868c3979fa5684a5a2ec179ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356fc7cc13bbdac626896cb7bae0116ce2aa660868c3979fa5684a5a2ec179ac->enter($__internal_356fc7cc13bbdac626896cb7bae0116ce2aa660868c3979fa5684a5a2ec179ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_05edaa45da74b65e5481ebb4564b999d975094e510afa9e30cda49d84d0977b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05edaa45da74b65e5481ebb4564b999d975094e510afa9e30cda49d84d0977b3->enter($__internal_05edaa45da74b65e5481ebb4564b999d975094e510afa9e30cda49d84d0977b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_05edaa45da74b65e5481ebb4564b999d975094e510afa9e30cda49d84d0977b3->leave($__internal_05edaa45da74b65e5481ebb4564b999d975094e510afa9e30cda49d84d0977b3_prof);

        
        $__internal_356fc7cc13bbdac626896cb7bae0116ce2aa660868c3979fa5684a5a2ec179ac->leave($__internal_356fc7cc13bbdac626896cb7bae0116ce2aa660868c3979fa5684a5a2ec179ac_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ef855b1cfc0d336111968d58bbd4439e48e8913de23415402239742af285f398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef855b1cfc0d336111968d58bbd4439e48e8913de23415402239742af285f398->enter($__internal_ef855b1cfc0d336111968d58bbd4439e48e8913de23415402239742af285f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5f3008d2330587992492f712d45cbf9162c10eaeba6108873d6ba85084b6c055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3008d2330587992492f712d45cbf9162c10eaeba6108873d6ba85084b6c055->enter($__internal_5f3008d2330587992492f712d45cbf9162c10eaeba6108873d6ba85084b6c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5f3008d2330587992492f712d45cbf9162c10eaeba6108873d6ba85084b6c055->leave($__internal_5f3008d2330587992492f712d45cbf9162c10eaeba6108873d6ba85084b6c055_prof);

        
        $__internal_ef855b1cfc0d336111968d58bbd4439e48e8913de23415402239742af285f398->leave($__internal_ef855b1cfc0d336111968d58bbd4439e48e8913de23415402239742af285f398_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_12061e47cec75b0e571a2b869bfe7f1887e4a120e373716868c5a72eee43fe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12061e47cec75b0e571a2b869bfe7f1887e4a120e373716868c5a72eee43fe02->enter($__internal_12061e47cec75b0e571a2b869bfe7f1887e4a120e373716868c5a72eee43fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_20de32cfc9ec0bed8d312108579fd8b7d7eb44c9b8a3b64e06e6d4fd0b69b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20de32cfc9ec0bed8d312108579fd8b7d7eb44c9b8a3b64e06e6d4fd0b69b09f->enter($__internal_20de32cfc9ec0bed8d312108579fd8b7d7eb44c9b8a3b64e06e6d4fd0b69b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_20de32cfc9ec0bed8d312108579fd8b7d7eb44c9b8a3b64e06e6d4fd0b69b09f->leave($__internal_20de32cfc9ec0bed8d312108579fd8b7d7eb44c9b8a3b64e06e6d4fd0b69b09f_prof);

        
        $__internal_12061e47cec75b0e571a2b869bfe7f1887e4a120e373716868c5a72eee43fe02->leave($__internal_12061e47cec75b0e571a2b869bfe7f1887e4a120e373716868c5a72eee43fe02_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_dcd12ec43ad3b56c14f179859456d8b5a28551b1a3a6f9c658ceba036ca5e503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd12ec43ad3b56c14f179859456d8b5a28551b1a3a6f9c658ceba036ca5e503->enter($__internal_dcd12ec43ad3b56c14f179859456d8b5a28551b1a3a6f9c658ceba036ca5e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_02070066b27fe022dd62027620eb5f0182235531d85e9c7461eec502887b5d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02070066b27fe022dd62027620eb5f0182235531d85e9c7461eec502887b5d5b->enter($__internal_02070066b27fe022dd62027620eb5f0182235531d85e9c7461eec502887b5d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 61
        echo "    </div>";
        
        $__internal_02070066b27fe022dd62027620eb5f0182235531d85e9c7461eec502887b5d5b->leave($__internal_02070066b27fe022dd62027620eb5f0182235531d85e9c7461eec502887b5d5b_prof);

        
        $__internal_dcd12ec43ad3b56c14f179859456d8b5a28551b1a3a6f9c658ceba036ca5e503->leave($__internal_dcd12ec43ad3b56c14f179859456d8b5a28551b1a3a6f9c658ceba036ca5e503_prof);

    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3ff90830559147dd12203c3273861958175496ef3de2da37e800827226fefc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff90830559147dd12203c3273861958175496ef3de2da37e800827226fefc01->enter($__internal_3ff90830559147dd12203c3273861958175496ef3de2da37e800827226fefc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_375b70554a5ea6bd20f4512d9ed56894e6b035d4efb15606cee68433f0b1f0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375b70554a5ea6bd20f4512d9ed56894e6b035d4efb15606cee68433f0b1f0f8->enter($__internal_375b70554a5ea6bd20f4512d9ed56894e6b035d4efb15606cee68433f0b1f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_375b70554a5ea6bd20f4512d9ed56894e6b035d4efb15606cee68433f0b1f0f8->leave($__internal_375b70554a5ea6bd20f4512d9ed56894e6b035d4efb15606cee68433f0b1f0f8_prof);

        
        $__internal_3ff90830559147dd12203c3273861958175496ef3de2da37e800827226fefc01->leave($__internal_3ff90830559147dd12203c3273861958175496ef3de2da37e800827226fefc01_prof);

    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0ba0fcfa69bb4f28dd213a2600b03cb7dc35af8697f251a27bdfeaeb78d584d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba0fcfa69bb4f28dd213a2600b03cb7dc35af8697f251a27bdfeaeb78d584d0->enter($__internal_0ba0fcfa69bb4f28dd213a2600b03cb7dc35af8697f251a27bdfeaeb78d584d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5b1e7d4f4cabd831e56e89759b46bcc1529650f4d1f1b3628a88ea4dae94d514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1e7d4f4cabd831e56e89759b46bcc1529650f4d1f1b3628a88ea4dae94d514->enter($__internal_5b1e7d4f4cabd831e56e89759b46bcc1529650f4d1f1b3628a88ea4dae94d514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 74
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
        
        $__internal_5b1e7d4f4cabd831e56e89759b46bcc1529650f4d1f1b3628a88ea4dae94d514->leave($__internal_5b1e7d4f4cabd831e56e89759b46bcc1529650f4d1f1b3628a88ea4dae94d514_prof);

        
        $__internal_0ba0fcfa69bb4f28dd213a2600b03cb7dc35af8697f251a27bdfeaeb78d584d0->leave($__internal_0ba0fcfa69bb4f28dd213a2600b03cb7dc35af8697f251a27bdfeaeb78d584d0_prof);

    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_74ce389577bd6962126ff3a05838b563552fc8f571cb2670004814e00d67700e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ce389577bd6962126ff3a05838b563552fc8f571cb2670004814e00d67700e->enter($__internal_74ce389577bd6962126ff3a05838b563552fc8f571cb2670004814e00d67700e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c49cb8a8bea691fc3d58825cad4a692a27ed794f30aa3e254ec4d655012f5397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49cb8a8bea691fc3d58825cad4a692a27ed794f30aa3e254ec4d655012f5397->enter($__internal_c49cb8a8bea691fc3d58825cad4a692a27ed794f30aa3e254ec4d655012f5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 88
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 93
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 100
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 101
                echo "</div>";
            }
        }
        
        $__internal_c49cb8a8bea691fc3d58825cad4a692a27ed794f30aa3e254ec4d655012f5397->leave($__internal_c49cb8a8bea691fc3d58825cad4a692a27ed794f30aa3e254ec4d655012f5397_prof);

        
        $__internal_74ce389577bd6962126ff3a05838b563552fc8f571cb2670004814e00d67700e->leave($__internal_74ce389577bd6962126ff3a05838b563552fc8f571cb2670004814e00d67700e_prof);

    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f5ae1df11df47801447cfb91532c1367a64891b3f35304a4e62103af75863159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ae1df11df47801447cfb91532c1367a64891b3f35304a4e62103af75863159->enter($__internal_f5ae1df11df47801447cfb91532c1367a64891b3f35304a4e62103af75863159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_34c3154b978efcaced574cd65abaab600f89cf95b135e96a6009eb1ad91eee53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c3154b978efcaced574cd65abaab600f89cf95b135e96a6009eb1ad91eee53->enter($__internal_34c3154b978efcaced574cd65abaab600f89cf95b135e96a6009eb1ad91eee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 107
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 112
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 115
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 116
                echo "</div>";
            }
        }
        
        $__internal_34c3154b978efcaced574cd65abaab600f89cf95b135e96a6009eb1ad91eee53->leave($__internal_34c3154b978efcaced574cd65abaab600f89cf95b135e96a6009eb1ad91eee53_prof);

        
        $__internal_f5ae1df11df47801447cfb91532c1367a64891b3f35304a4e62103af75863159->leave($__internal_f5ae1df11df47801447cfb91532c1367a64891b3f35304a4e62103af75863159_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4e8be6575de9ab14ef3cb463333d323d0331d364f522a0e4aececc5f7a4169c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8be6575de9ab14ef3cb463333d323d0331d364f522a0e4aececc5f7a4169c5->enter($__internal_4e8be6575de9ab14ef3cb463333d323d0331d364f522a0e4aececc5f7a4169c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9a0931885a250e2e9f4cbed34ab29bfb96c2ddea905d4371a24e02a2330691a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0931885a250e2e9f4cbed34ab29bfb96c2ddea905d4371a24e02a2330691a4->enter($__internal_9a0931885a250e2e9f4cbed34ab29bfb96c2ddea905d4371a24e02a2330691a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9a0931885a250e2e9f4cbed34ab29bfb96c2ddea905d4371a24e02a2330691a4->leave($__internal_9a0931885a250e2e9f4cbed34ab29bfb96c2ddea905d4371a24e02a2330691a4_prof);

        
        $__internal_4e8be6575de9ab14ef3cb463333d323d0331d364f522a0e4aececc5f7a4169c5->leave($__internal_4e8be6575de9ab14ef3cb463333d323d0331d364f522a0e4aececc5f7a4169c5_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2860ecf1e3c214220aa8b6bbca9f958c483ed34c7eeb8c46e30e139c4a52fa84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2860ecf1e3c214220aa8b6bbca9f958c483ed34c7eeb8c46e30e139c4a52fa84->enter($__internal_2860ecf1e3c214220aa8b6bbca9f958c483ed34c7eeb8c46e30e139c4a52fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f4a9207453d0089a0e3d05b6135249863ada1f5035c124ad230b09241833a4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a9207453d0089a0e3d05b6135249863ada1f5035c124ad230b09241833a4e5->enter($__internal_f4a9207453d0089a0e3d05b6135249863ada1f5035c124ad230b09241833a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
        
        $__internal_f4a9207453d0089a0e3d05b6135249863ada1f5035c124ad230b09241833a4e5->leave($__internal_f4a9207453d0089a0e3d05b6135249863ada1f5035c124ad230b09241833a4e5_prof);

        
        $__internal_2860ecf1e3c214220aa8b6bbca9f958c483ed34c7eeb8c46e30e139c4a52fa84->leave($__internal_2860ecf1e3c214220aa8b6bbca9f958c483ed34c7eeb8c46e30e139c4a52fa84_prof);

    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_791962d0d795f7e0fc6c90a37f7ff3f4efb4e22c399da22588fd676374feb1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791962d0d795f7e0fc6c90a37f7ff3f4efb4e22c399da22588fd676374feb1f0->enter($__internal_791962d0d795f7e0fc6c90a37f7ff3f4efb4e22c399da22588fd676374feb1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5df266e8e51dc7dcf86365a9615b71adf328baba94ce0dd543cf95b64cf1ca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df266e8e51dc7dcf86365a9615b71adf328baba94ce0dd543cf95b64cf1ca63->enter($__internal_5df266e8e51dc7dcf86365a9615b71adf328baba94ce0dd543cf95b64cf1ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 149
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
        
        $__internal_5df266e8e51dc7dcf86365a9615b71adf328baba94ce0dd543cf95b64cf1ca63->leave($__internal_5df266e8e51dc7dcf86365a9615b71adf328baba94ce0dd543cf95b64cf1ca63_prof);

        
        $__internal_791962d0d795f7e0fc6c90a37f7ff3f4efb4e22c399da22588fd676374feb1f0->leave($__internal_791962d0d795f7e0fc6c90a37f7ff3f4efb4e22c399da22588fd676374feb1f0_prof);

    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_99287cfda5e8688c5984f571adbd2042dc28984e0c75be4a725c3dba4f5688f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99287cfda5e8688c5984f571adbd2042dc28984e0c75be4a725c3dba4f5688f9->enter($__internal_99287cfda5e8688c5984f571adbd2042dc28984e0c75be4a725c3dba4f5688f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e97bdb4a9d88b1ff9e2647c45ab2c14e33b19d83cce20b2b5192b4bebb8fe420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97bdb4a9d88b1ff9e2647c45ab2c14e33b19d83cce20b2b5192b4bebb8fe420->enter($__internal_e97bdb4a9d88b1ff9e2647c45ab2c14e33b19d83cce20b2b5192b4bebb8fe420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 160
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
        
        $__internal_e97bdb4a9d88b1ff9e2647c45ab2c14e33b19d83cce20b2b5192b4bebb8fe420->leave($__internal_e97bdb4a9d88b1ff9e2647c45ab2c14e33b19d83cce20b2b5192b4bebb8fe420_prof);

        
        $__internal_99287cfda5e8688c5984f571adbd2042dc28984e0c75be4a725c3dba4f5688f9->leave($__internal_99287cfda5e8688c5984f571adbd2042dc28984e0c75be4a725c3dba4f5688f9_prof);

    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_7e2e477a9390223e4f08d54c95e1174fd9924e15b7598aacbbfb622e1432834b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2e477a9390223e4f08d54c95e1174fd9924e15b7598aacbbfb622e1432834b->enter($__internal_7e2e477a9390223e4f08d54c95e1174fd9924e15b7598aacbbfb622e1432834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_298165cc5ae975ed6076dcc2ab838ac254815c90c13ce1fb69d4c9e5c3d7ecfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298165cc5ae975ed6076dcc2ab838ac254815c90c13ce1fb69d4c9e5c3d7ecfd->enter($__internal_298165cc5ae975ed6076dcc2ab838ac254815c90c13ce1fb69d4c9e5c3d7ecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 171
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
        
        $__internal_298165cc5ae975ed6076dcc2ab838ac254815c90c13ce1fb69d4c9e5c3d7ecfd->leave($__internal_298165cc5ae975ed6076dcc2ab838ac254815c90c13ce1fb69d4c9e5c3d7ecfd_prof);

        
        $__internal_7e2e477a9390223e4f08d54c95e1174fd9924e15b7598aacbbfb622e1432834b->leave($__internal_7e2e477a9390223e4f08d54c95e1174fd9924e15b7598aacbbfb622e1432834b_prof);

    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_1ff05db0c178825619c9650644e53e9bd3927921eaf5a950acc518a28bb2bf74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff05db0c178825619c9650644e53e9bd3927921eaf5a950acc518a28bb2bf74->enter($__internal_1ff05db0c178825619c9650644e53e9bd3927921eaf5a950acc518a28bb2bf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_7ebc32a3ccb535be32a37bfb3c692df48f51b6e147e2e5439b2310f6ea30dd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebc32a3ccb535be32a37bfb3c692df48f51b6e147e2e5439b2310f6ea30dd25->enter($__internal_7ebc32a3ccb535be32a37bfb3c692df48f51b6e147e2e5439b2310f6ea30dd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 182
        echo "<li>
        ";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 193
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "
                    ";
            // line 203
            if (array_key_exists("defaultCategory", $context)) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                echo "                    ";
                $context["child"] = $context["item"];
                // line 213
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "</ul>
        ";
        }
        // line 217
        echo "    </li>";
        
        $__internal_7ebc32a3ccb535be32a37bfb3c692df48f51b6e147e2e5439b2310f6ea30dd25->leave($__internal_7ebc32a3ccb535be32a37bfb3c692df48f51b6e147e2e5439b2310f6ea30dd25_prof);

        
        $__internal_1ff05db0c178825619c9650644e53e9bd3927921eaf5a950acc518a28bb2bf74->leave($__internal_1ff05db0c178825619c9650644e53e9bd3927921eaf5a950acc518a28bb2bf74_prof);

    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_4cfbc4896b3dc1b466afd10ac4fa7a5efcf0c4161bb080db9a1a5ae0c1b0562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfbc4896b3dc1b466afd10ac4fa7a5efcf0c4161bb080db9a1a5ae0c1b0562a->enter($__internal_4cfbc4896b3dc1b466afd10ac4fa7a5efcf0c4161bb080db9a1a5ae0c1b0562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_1c7abe08d32174e24a773302e8baf4a5a6d93bd75085d51e3be4340aa12d7ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7abe08d32174e24a773302e8baf4a5a6d93bd75085d51e3be4340aa12d7ffc->enter($__internal_1c7abe08d32174e24a773302e8baf4a5a6d93bd75085d51e3be4340aa12d7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 221
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 223
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>
        ";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
";
        
        $__internal_1c7abe08d32174e24a773302e8baf4a5a6d93bd75085d51e3be4340aa12d7ffc->leave($__internal_1c7abe08d32174e24a773302e8baf4a5a6d93bd75085d51e3be4340aa12d7ffc_prof);

        
        $__internal_4cfbc4896b3dc1b466afd10ac4fa7a5efcf0c4161bb080db9a1a5ae0c1b0562a->leave($__internal_4cfbc4896b3dc1b466afd10ac4fa7a5efcf0c4161bb080db9a1a5ae0c1b0562a_prof);

    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_b1b2d83283f08bedcc02e970a19346daafc4478b7bf796b12f1d5a7c5f21d929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b2d83283f08bedcc02e970a19346daafc4478b7bf796b12f1d5a7c5f21d929->enter($__internal_b1b2d83283f08bedcc02e970a19346daafc4478b7bf796b12f1d5a7c5f21d929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_454a49b14308c79ed59f85648006bd9660a2ab3286a0d6b0d20042d3ec46993c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454a49b14308c79ed59f85648006bd9660a2ab3286a0d6b0d20042d3ec46993c->enter($__internal_454a49b14308c79ed59f85648006bd9660a2ab3286a0d6b0d20042d3ec46993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 247
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_454a49b14308c79ed59f85648006bd9660a2ab3286a0d6b0d20042d3ec46993c->leave($__internal_454a49b14308c79ed59f85648006bd9660a2ab3286a0d6b0d20042d3ec46993c_prof);

        
        $__internal_b1b2d83283f08bedcc02e970a19346daafc4478b7bf796b12f1d5a7c5f21d929->leave($__internal_b1b2d83283f08bedcc02e970a19346daafc4478b7bf796b12f1d5a7c5f21d929_prof);

    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        $__internal_63574fe243abc733e42e1baab004b7a965200df7d491b8f5be959dbb256800bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63574fe243abc733e42e1baab004b7a965200df7d491b8f5be959dbb256800bc->enter($__internal_63574fe243abc733e42e1baab004b7a965200df7d491b8f5be959dbb256800bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_c3f0c29242d0934b8956ae88d5e2a01221cec96ec3321dd037e034b26bbbb558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f0c29242d0934b8956ae88d5e2a01221cec96ec3321dd037e034b26bbbb558->enter($__internal_c3f0c29242d0934b8956ae88d5e2a01221cec96ec3321dd037e034b26bbbb558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? $this->getContext($context, "classes")) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 259
            echo "
            ";
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? $this->getContext($context, "default_locale")), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                echo "                ";
                $context["classes"] = (($context["classes"] ?? $this->getContext($context, "classes")) . " d-none");
                // line 262
                echo "            ";
            }
            // line 263
            echo "
            ";
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 265
            echo "
            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? $this->getContext($context, "classes"))))));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "
        ";
        // line 269
        if ( !($context["hide_locales"] ?? $this->getContext($context, "hide_locales"))) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? $this->getContext($context, "locales")));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>
        ";
        }
        // line 288
        echo "    </div>";
        
        $__internal_c3f0c29242d0934b8956ae88d5e2a01221cec96ec3321dd037e034b26bbbb558->leave($__internal_c3f0c29242d0934b8956ae88d5e2a01221cec96ec3321dd037e034b26bbbb558_prof);

        
        $__internal_63574fe243abc733e42e1baab004b7a965200df7d491b8f5be959dbb256800bc->leave($__internal_63574fe243abc733e42e1baab004b7a965200df7d491b8f5be959dbb256800bc_prof);

    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_dc1fca5e045c697eb335161ed3ab101d74fd5a5989a8be7f4d39ecd31b9ea1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1fca5e045c697eb335161ed3ab101d74fd5a5989a8be7f4d39ecd31b9ea1a7->enter($__internal_dc1fca5e045c697eb335161ed3ab101d74fd5a5989a8be7f4d39ecd31b9ea1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_fe246ba34304cf5fb17de4ac12449e524d7e13a84bc54574e34d2c38c7e049fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe246ba34304cf5fb17de4ac12449e524d7e13a84bc54574e34d2c38c7e049fe->enter($__internal_fe246ba34304cf5fb17de4ac12449e524d7e13a84bc54574e34d2c38c7e049fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fe246ba34304cf5fb17de4ac12449e524d7e13a84bc54574e34d2c38c7e049fe->leave($__internal_fe246ba34304cf5fb17de4ac12449e524d7e13a84bc54574e34d2c38c7e049fe_prof);

        
        $__internal_dc1fca5e045c697eb335161ed3ab101d74fd5a5989a8be7f4d39ecd31b9ea1a7->leave($__internal_dc1fca5e045c697eb335161ed3ab101d74fd5a5989a8be7f4d39ecd31b9ea1a7_prof);

    }

    // line 305
    public function block_date_range_widget($context, array $blocks = array())
    {
        $__internal_991e99761e4add1c769fcdeebda1b70c37d99e88f1ff173234939240efd1b8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991e99761e4add1c769fcdeebda1b70c37d99e88f1ff173234939240efd1b8c2->enter($__internal_991e99761e4add1c769fcdeebda1b70c37d99e88f1ff173234939240efd1b8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_d97b918249391f24b8abf2bbc411f74d6ef40622b8d4d5ab880b0dcdc4e26aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97b918249391f24b8abf2bbc411f74d6ef40622b8d4d5ab880b0dcdc4e26aea->enter($__internal_d97b918249391f24b8abf2bbc411f74d6ef40622b8d4d5ab880b0dcdc4e26aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 306
        echo "  ";
        ob_start();
        // line 307
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'widget');
        echo "
    ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "to", array()), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d97b918249391f24b8abf2bbc411f74d6ef40622b8d4d5ab880b0dcdc4e26aea->leave($__internal_d97b918249391f24b8abf2bbc411f74d6ef40622b8d4d5ab880b0dcdc4e26aea_prof);

        
        $__internal_991e99761e4add1c769fcdeebda1b70c37d99e88f1ff173234939240efd1b8c2->leave($__internal_991e99761e4add1c769fcdeebda1b70c37d99e88f1ff173234939240efd1b8c2_prof);

    }

    // line 312
    public function block_search_and_reset_widget($context, array $blocks = array())
    {
        $__internal_47ca67261e8d06243cc99cc2b722cbf099902ba8bd4269bfcf208c071e765d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ca67261e8d06243cc99cc2b722cbf099902ba8bd4269bfcf208c071e765d37->enter($__internal_47ca67261e8d06243cc99cc2b722cbf099902ba8bd4269bfcf208c071e765d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_0abe01b3af467547ab0daa4c486ced935ad4f21aefbbb71c10f5c0cc8f531e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abe01b3af467547ab0daa4c486ced935ad4f21aefbbb71c10f5c0cc8f531e7a->enter($__internal_0abe01b3af467547ab0daa4c486ced935ad4f21aefbbb71c10f5c0cc8f531e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 313
        echo "    ";
        ob_start();
        // line 314
        echo "        <button type=\"submit\"
                class=\"btn btn-primary d-block\"
                title=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "\"
                name=\"";
        // line 317
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "
        </button>

        ";
        // line 323
        if (($context["show_reset_button"] ?? $this->getContext($context, "show_reset_button"))) {
            // line 324
            echo "            <button type=\"reset\"
                    name=\"";
            // line 325
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block\"
                    data-url=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-url", array(), "array"), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-redirect", array(), "array"), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Global"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 334
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0abe01b3af467547ab0daa4c486ced935ad4f21aefbbb71c10f5c0cc8f531e7a->leave($__internal_0abe01b3af467547ab0daa4c486ced935ad4f21aefbbb71c10f5c0cc8f531e7a_prof);

        
        $__internal_47ca67261e8d06243cc99cc2b722cbf099902ba8bd4269bfcf208c071e765d37->leave($__internal_47ca67261e8d06243cc99cc2b722cbf099902ba8bd4269bfcf208c071e765d37_prof);

    }

    // line 337
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_2fdefd875f77ffcb23a6012204905dadc2232d456f96d134c705c99ae4f2ff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdefd875f77ffcb23a6012204905dadc2232d456f96d134c705c99ae4f2ff42->enter($__internal_2fdefd875f77ffcb23a6012204905dadc2232d456f96d134c705c99ae4f2ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_5458c5d332652fd94b6004f095ceeca12aaf29b30d3a266108f751b479f2254a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458c5d332652fd94b6004f095ceeca12aaf29b30d3a266108f751b479f2254a->enter($__internal_5458c5d332652fd94b6004f095ceeca12aaf29b30d3a266108f751b479f2254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 338
        echo "    ";
        ob_start();
        // line 339
        echo "    <span class=\"ps-switch\">
        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 341
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? $this->getContext($context, "id")) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 342
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 343
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))), "html", null, true);
            echo "</label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5458c5d332652fd94b6004f095ceeca12aaf29b30d3a266108f751b479f2254a->leave($__internal_5458c5d332652fd94b6004f095ceeca12aaf29b30d3a266108f751b479f2254a_prof);

        
        $__internal_2fdefd875f77ffcb23a6012204905dadc2232d456f96d134c705c99ae4f2ff42->leave($__internal_2fdefd875f77ffcb23a6012204905dadc2232d456f96d134c705c99ae4f2ff42_prof);

    }

    // line 350
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_858382d59c9a08d772e864b9f0e16f54d5e0a1e2e77b7cfc46150d89842bf09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858382d59c9a08d772e864b9f0e16f54d5e0a1e2e77b7cfc46150d89842bf09c->enter($__internal_858382d59c9a08d772e864b9f0e16f54d5e0a1e2e77b7cfc46150d89842bf09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_b037ed43673abe07bceb8e528bbdaee58e64a9bb5dde548a4355672d5f2ae947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b037ed43673abe07bceb8e528bbdaee58e64a9bb5dde548a4355672d5f2ae947->enter($__internal_b037ed43673abe07bceb8e528bbdaee58e64a9bb5dde548a4355672d5f2ae947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 351
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 355
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 367
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_b037ed43673abe07bceb8e528bbdaee58e64a9bb5dde548a4355672d5f2ae947->leave($__internal_b037ed43673abe07bceb8e528bbdaee58e64a9bb5dde548a4355672d5f2ae947_prof);

        
        $__internal_858382d59c9a08d772e864b9f0e16f54d5e0a1e2e77b7cfc46150d89842bf09c->leave($__internal_858382d59c9a08d772e864b9f0e16f54d5e0a1e2e77b7cfc46150d89842bf09c_prof);

    }

    // line 382
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_779a3fe6766d89af4c55325039a84a92b0d2a2642b0ee2136c6d48abfee523e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779a3fe6766d89af4c55325039a84a92b0d2a2642b0ee2136c6d48abfee523e3->enter($__internal_779a3fe6766d89af4c55325039a84a92b0d2a2642b0ee2136c6d48abfee523e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a4e3a48f8611abf7c24f4dca04e078a9515deaafdbfc8e240d3045aae0bb998a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e3a48f8611abf7c24f4dca04e078a9515deaafdbfc8e240d3045aae0bb998a->enter($__internal_a4e3a48f8611abf7c24f4dca04e078a9515deaafdbfc8e240d3045aae0bb998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 383
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 384
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a4e3a48f8611abf7c24f4dca04e078a9515deaafdbfc8e240d3045aae0bb998a->leave($__internal_a4e3a48f8611abf7c24f4dca04e078a9515deaafdbfc8e240d3045aae0bb998a_prof);

        
        $__internal_779a3fe6766d89af4c55325039a84a92b0d2a2642b0ee2136c6d48abfee523e3->leave($__internal_779a3fe6766d89af4c55325039a84a92b0d2a2642b0ee2136c6d48abfee523e3_prof);

    }

    // line 387
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1e4bf7f26618c74ee08c6a7a4693125b69cd8c50b722396a1575686c191419fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4bf7f26618c74ee08c6a7a4693125b69cd8c50b722396a1575686c191419fb->enter($__internal_1e4bf7f26618c74ee08c6a7a4693125b69cd8c50b722396a1575686c191419fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_99cc6ab871394a48ceb1621229a88f2e13179110d574cc8443d0b915601d4972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cc6ab871394a48ceb1621229a88f2e13179110d574cc8443d0b915601d4972->enter($__internal_99cc6ab871394a48ceb1621229a88f2e13179110d574cc8443d0b915601d4972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 389
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 390
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_99cc6ab871394a48ceb1621229a88f2e13179110d574cc8443d0b915601d4972->leave($__internal_99cc6ab871394a48ceb1621229a88f2e13179110d574cc8443d0b915601d4972_prof);

        
        $__internal_1e4bf7f26618c74ee08c6a7a4693125b69cd8c50b722396a1575686c191419fb->leave($__internal_1e4bf7f26618c74ee08c6a7a4693125b69cd8c50b722396a1575686c191419fb_prof);

    }

    // line 393
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_042060d8ed5aaf13a7e895d62ee1f0f97ae91556044abe4913ca9e642364fa50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042060d8ed5aaf13a7e895d62ee1f0f97ae91556044abe4913ca9e642364fa50->enter($__internal_042060d8ed5aaf13a7e895d62ee1f0f97ae91556044abe4913ca9e642364fa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7288c0adb5666889734ef3968751747eeb20ab715ba14c068975cf6be4296e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7288c0adb5666889734ef3968751747eeb20ab715ba14c068975cf6be4296e9b->enter($__internal_7288c0adb5666889734ef3968751747eeb20ab715ba14c068975cf6be4296e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 394
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7288c0adb5666889734ef3968751747eeb20ab715ba14c068975cf6be4296e9b->leave($__internal_7288c0adb5666889734ef3968751747eeb20ab715ba14c068975cf6be4296e9b_prof);

        
        $__internal_042060d8ed5aaf13a7e895d62ee1f0f97ae91556044abe4913ca9e642364fa50->leave($__internal_042060d8ed5aaf13a7e895d62ee1f0f97ae91556044abe4913ca9e642364fa50_prof);

    }

    // line 397
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_accac9b0957fd437fc2cca093d29941990b0bad7d8fc626de970d568fdad07db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accac9b0957fd437fc2cca093d29941990b0bad7d8fc626de970d568fdad07db->enter($__internal_accac9b0957fd437fc2cca093d29941990b0bad7d8fc626de970d568fdad07db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_798686f70a78fa19342fd6279ed5332c9736d3e3da50d66e8e00a6001dddad50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798686f70a78fa19342fd6279ed5332c9736d3e3da50d66e8e00a6001dddad50->enter($__internal_798686f70a78fa19342fd6279ed5332c9736d3e3da50d66e8e00a6001dddad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 398
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_798686f70a78fa19342fd6279ed5332c9736d3e3da50d66e8e00a6001dddad50->leave($__internal_798686f70a78fa19342fd6279ed5332c9736d3e3da50d66e8e00a6001dddad50_prof);

        
        $__internal_accac9b0957fd437fc2cca093d29941990b0bad7d8fc626de970d568fdad07db->leave($__internal_accac9b0957fd437fc2cca093d29941990b0bad7d8fc626de970d568fdad07db_prof);

    }

    // line 401
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bbf2cda04236b1fc8b6fb06d5803babe833d42ce7cefbb2dfe2318c390027950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf2cda04236b1fc8b6fb06d5803babe833d42ce7cefbb2dfe2318c390027950->enter($__internal_bbf2cda04236b1fc8b6fb06d5803babe833d42ce7cefbb2dfe2318c390027950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4f5d5b698cbc520cf40c02de58a9ba6b1894a3313f0e48f8b7a2a54703fe1786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5d5b698cbc520cf40c02de58a9ba6b1894a3313f0e48f8b7a2a54703fe1786->enter($__internal_4f5d5b698cbc520cf40c02de58a9ba6b1894a3313f0e48f8b7a2a54703fe1786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 402
        echo "    ";
        // line 403
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 404
            echo "      ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 405
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 406
                echo "      ";
            }
            // line 407
            echo "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 408
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 409
                echo "      ";
            }
            // line 410
            echo "      ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 411
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 412
                echo "      ";
            }
            // line 413
            echo "
      ";
            // line 414
            if (array_key_exists("material_design", $context)) {
                // line 415
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 417
                echo ($context["widget"] ?? $this->getContext($context, "widget"));
                // line 418
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 419
                echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
                // line 420
                echo "</label>
        </div>
      ";
            } else {
                // line 423
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 424
                echo ($context["widget"] ?? $this->getContext($context, "widget"));
                // line 425
                echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
                // line 426
                echo "</label>
      ";
            }
            // line 428
            echo "    ";
        }
        
        $__internal_4f5d5b698cbc520cf40c02de58a9ba6b1894a3313f0e48f8b7a2a54703fe1786->leave($__internal_4f5d5b698cbc520cf40c02de58a9ba6b1894a3313f0e48f8b7a2a54703fe1786_prof);

        
        $__internal_bbf2cda04236b1fc8b6fb06d5803babe833d42ce7cefbb2dfe2318c390027950->leave($__internal_bbf2cda04236b1fc8b6fb06d5803babe833d42ce7cefbb2dfe2318c390027950_prof);

    }

    // line 433
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_809a7eae7104a52ae8ad873e864e0702416d4dd5391a92c8e99e7ae85cf0e1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809a7eae7104a52ae8ad873e864e0702416d4dd5391a92c8e99e7ae85cf0e1d0->enter($__internal_809a7eae7104a52ae8ad873e864e0702416d4dd5391a92c8e99e7ae85cf0e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3589b2170c32a201750e11d756ba1612c98e0d2545523ab190e9f5b00b21aed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3589b2170c32a201750e11d756ba1612c98e0d2545523ab190e9f5b00b21aed7->enter($__internal_3589b2170c32a201750e11d756ba1612c98e0d2545523ab190e9f5b00b21aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 434
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 438
        echo "</div>";
        
        $__internal_3589b2170c32a201750e11d756ba1612c98e0d2545523ab190e9f5b00b21aed7->leave($__internal_3589b2170c32a201750e11d756ba1612c98e0d2545523ab190e9f5b00b21aed7_prof);

        
        $__internal_809a7eae7104a52ae8ad873e864e0702416d4dd5391a92c8e99e7ae85cf0e1d0->leave($__internal_809a7eae7104a52ae8ad873e864e0702416d4dd5391a92c8e99e7ae85cf0e1d0_prof);

    }

    // line 441
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8f7d4e6dbce7e37dacf9d0138c535bd5bebf0895f7fc7ec7a0929a77b74e475b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7d4e6dbce7e37dacf9d0138c535bd5bebf0895f7fc7ec7a0929a77b74e475b->enter($__internal_8f7d4e6dbce7e37dacf9d0138c535bd5bebf0895f7fc7ec7a0929a77b74e475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_df758b664d76b2583720ab2d801b57ea098a50403d51dc51e611b73d8cee41a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df758b664d76b2583720ab2d801b57ea098a50403d51dc51e611b73d8cee41a3->enter($__internal_df758b664d76b2583720ab2d801b57ea098a50403d51dc51e611b73d8cee41a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 442
        echo "<div class=\"form-group\">";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 444
        echo "</div>";
        
        $__internal_df758b664d76b2583720ab2d801b57ea098a50403d51dc51e611b73d8cee41a3->leave($__internal_df758b664d76b2583720ab2d801b57ea098a50403d51dc51e611b73d8cee41a3_prof);

        
        $__internal_8f7d4e6dbce7e37dacf9d0138c535bd5bebf0895f7fc7ec7a0929a77b74e475b->leave($__internal_8f7d4e6dbce7e37dacf9d0138c535bd5bebf0895f7fc7ec7a0929a77b74e475b_prof);

    }

    // line 447
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3f90a28f6f6a8324743f8c2e2891c8d6e58882b49128136d6d29a635640afb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f90a28f6f6a8324743f8c2e2891c8d6e58882b49128136d6d29a635640afb95->enter($__internal_3f90a28f6f6a8324743f8c2e2891c8d6e58882b49128136d6d29a635640afb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_39caf1d3d4c01dff32604dc861d2e4061230d7c0eb56b522a3794a3d9b01e8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39caf1d3d4c01dff32604dc861d2e4061230d7c0eb56b522a3794a3d9b01e8b3->enter($__internal_39caf1d3d4c01dff32604dc861d2e4061230d7c0eb56b522a3794a3d9b01e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 448
        $context["force_error"] = true;
        // line 449
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_39caf1d3d4c01dff32604dc861d2e4061230d7c0eb56b522a3794a3d9b01e8b3->leave($__internal_39caf1d3d4c01dff32604dc861d2e4061230d7c0eb56b522a3794a3d9b01e8b3_prof);

        
        $__internal_3f90a28f6f6a8324743f8c2e2891c8d6e58882b49128136d6d29a635640afb95->leave($__internal_3f90a28f6f6a8324743f8c2e2891c8d6e58882b49128136d6d29a635640afb95_prof);

    }

    // line 452
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_72bdee87b6bfbc8b9c40187ca3c871763762ca09f8679d0f52700b48377b8a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bdee87b6bfbc8b9c40187ca3c871763762ca09f8679d0f52700b48377b8a1b->enter($__internal_72bdee87b6bfbc8b9c40187ca3c871763762ca09f8679d0f52700b48377b8a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_44351b46bbd77dfe9c02935de6843a06c9ecd645d1f5422adc22a79450c980a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44351b46bbd77dfe9c02935de6843a06c9ecd645d1f5422adc22a79450c980a2->enter($__internal_44351b46bbd77dfe9c02935de6843a06c9ecd645d1f5422adc22a79450c980a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 453
        $context["force_error"] = true;
        // line 454
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_44351b46bbd77dfe9c02935de6843a06c9ecd645d1f5422adc22a79450c980a2->leave($__internal_44351b46bbd77dfe9c02935de6843a06c9ecd645d1f5422adc22a79450c980a2_prof);

        
        $__internal_72bdee87b6bfbc8b9c40187ca3c871763762ca09f8679d0f52700b48377b8a1b->leave($__internal_72bdee87b6bfbc8b9c40187ca3c871763762ca09f8679d0f52700b48377b8a1b_prof);

    }

    // line 457
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_559da5311ecf83b8e8bdac207ca7df76fd5b18aa776a3588b31738c947ff35aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559da5311ecf83b8e8bdac207ca7df76fd5b18aa776a3588b31738c947ff35aa->enter($__internal_559da5311ecf83b8e8bdac207ca7df76fd5b18aa776a3588b31738c947ff35aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7852e6f18b2af02247d9bdc651dc0460b7dbf61c1eeef0d001cc420a727906d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7852e6f18b2af02247d9bdc651dc0460b7dbf61c1eeef0d001cc420a727906d6->enter($__internal_7852e6f18b2af02247d9bdc651dc0460b7dbf61c1eeef0d001cc420a727906d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 458
        $context["force_error"] = true;
        // line 459
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7852e6f18b2af02247d9bdc651dc0460b7dbf61c1eeef0d001cc420a727906d6->leave($__internal_7852e6f18b2af02247d9bdc651dc0460b7dbf61c1eeef0d001cc420a727906d6_prof);

        
        $__internal_559da5311ecf83b8e8bdac207ca7df76fd5b18aa776a3588b31738c947ff35aa->leave($__internal_559da5311ecf83b8e8bdac207ca7df76fd5b18aa776a3588b31738c947ff35aa_prof);

    }

    // line 462
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d42fa228ef98e0f7a9737322b39197122c41767db834f3546a24a362604da7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42fa228ef98e0f7a9737322b39197122c41767db834f3546a24a362604da7ae->enter($__internal_d42fa228ef98e0f7a9737322b39197122c41767db834f3546a24a362604da7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8b3ef537bc14727b0ad3d03eca0711183621b2c3afbe5d4dd92502fa952060ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3ef537bc14727b0ad3d03eca0711183621b2c3afbe5d4dd92502fa952060ad->enter($__internal_8b3ef537bc14727b0ad3d03eca0711183621b2c3afbe5d4dd92502fa952060ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 463
        $context["force_error"] = true;
        // line 464
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b3ef537bc14727b0ad3d03eca0711183621b2c3afbe5d4dd92502fa952060ad->leave($__internal_8b3ef537bc14727b0ad3d03eca0711183621b2c3afbe5d4dd92502fa952060ad_prof);

        
        $__internal_d42fa228ef98e0f7a9737322b39197122c41767db834f3546a24a362604da7ae->leave($__internal_d42fa228ef98e0f7a9737322b39197122c41767db834f3546a24a362604da7ae_prof);

    }

    // line 467
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4a1fcbfd11f98b18d7b78c12215f561f81f439c1c946543c001deff7cd5ac95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1fcbfd11f98b18d7b78c12215f561f81f439c1c946543c001deff7cd5ac95d->enter($__internal_4a1fcbfd11f98b18d7b78c12215f561f81f439c1c946543c001deff7cd5ac95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4c8dc9f0c3021cadcf2db334bdc5b9354a97c4726e76c06449577917c8a2315b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8dc9f0c3021cadcf2db334bdc5b9354a97c4726e76c06449577917c8a2315b->enter($__internal_4c8dc9f0c3021cadcf2db334bdc5b9354a97c4726e76c06449577917c8a2315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 468
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 470
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 471
        echo "</div>";
        
        $__internal_4c8dc9f0c3021cadcf2db334bdc5b9354a97c4726e76c06449577917c8a2315b->leave($__internal_4c8dc9f0c3021cadcf2db334bdc5b9354a97c4726e76c06449577917c8a2315b_prof);

        
        $__internal_4a1fcbfd11f98b18d7b78c12215f561f81f439c1c946543c001deff7cd5ac95d->leave($__internal_4a1fcbfd11f98b18d7b78c12215f561f81f439c1c946543c001deff7cd5ac95d_prof);

    }

    // line 474
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5a315f42868c6eb92ff11608f6c3945c02bd2df9799eac205f3e4ea8e099b88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a315f42868c6eb92ff11608f6c3945c02bd2df9799eac205f3e4ea8e099b88b->enter($__internal_5a315f42868c6eb92ff11608f6c3945c02bd2df9799eac205f3e4ea8e099b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5672835bfec9bd8c4e6ddfd02617befdabfc3fdd6b3aab19840cdbba1c1f77ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5672835bfec9bd8c4e6ddfd02617befdabfc3fdd6b3aab19840cdbba1c1f77ae->enter($__internal_5672835bfec9bd8c4e6ddfd02617befdabfc3fdd6b3aab19840cdbba1c1f77ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 475
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 478
        echo "</div>";
        
        $__internal_5672835bfec9bd8c4e6ddfd02617befdabfc3fdd6b3aab19840cdbba1c1f77ae->leave($__internal_5672835bfec9bd8c4e6ddfd02617befdabfc3fdd6b3aab19840cdbba1c1f77ae_prof);

        
        $__internal_5a315f42868c6eb92ff11608f6c3945c02bd2df9799eac205f3e4ea8e099b88b->leave($__internal_5a315f42868c6eb92ff11608f6c3945c02bd2df9799eac205f3e4ea8e099b88b_prof);

    }

    // line 483
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3e532dd60f61df0de072407ce16c9936bda0fbbf271f64b3deeb403fca7aa951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e532dd60f61df0de072407ce16c9936bda0fbbf271f64b3deeb403fca7aa951->enter($__internal_3e532dd60f61df0de072407ce16c9936bda0fbbf271f64b3deeb403fca7aa951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2c47932c25a5d470c14b87cb5ce790153bb2619cef739417a8168041cbf22041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c47932c25a5d470c14b87cb5ce790153bb2619cef739417a8168041cbf22041->enter($__internal_2c47932c25a5d470c14b87cb5ce790153bb2619cef739417a8168041cbf22041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 484
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 485
            echo "<div class=\"alert alert-danger\">";
            // line 486
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                // line 487
                echo "<ul class=\"alert-text\">";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 489
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 490
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 491
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 492
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 493
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                echo "</ul>";
            } else {
                // line 498
                echo "<div class=\"alert-text\">";
                // line 499
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 500
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 501
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 502
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 503
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 504
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 507
                echo "</div>";
            }
            // line 509
            echo "</div>";
        }
        
        $__internal_2c47932c25a5d470c14b87cb5ce790153bb2619cef739417a8168041cbf22041->leave($__internal_2c47932c25a5d470c14b87cb5ce790153bb2619cef739417a8168041cbf22041_prof);

        
        $__internal_3e532dd60f61df0de072407ce16c9936bda0fbbf271f64b3deeb403fca7aa951->leave($__internal_3e532dd60f61df0de072407ce16c9936bda0fbbf271f64b3deeb403fca7aa951_prof);

    }

    // line 516
    public function block_material_choice_table_widget($context, array $blocks = array())
    {
        $__internal_d0f291031b163bbd6ba8260a14cbd88e101d891d2fb756df58a774fe0607fae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f291031b163bbd6ba8260a14cbd88e101d891d2fb756df58a774fe0607fae8->enter($__internal_d0f291031b163bbd6ba8260a14cbd88e101d891d2fb756df58a774fe0607fae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_ab9bbd86b60f04ccbd86abf967aae281e2362b7dcf650e1d67737c0e36a4dd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9bbd86b60f04ccbd86abf967aae281e2362b7dcf650e1d67737c0e36a4dd83->enter($__internal_ab9bbd86b60f04ccbd86abf967aae281e2362b7dcf650e1d67737c0e36a4dd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 517
        echo "  ";
        ob_start();
        // line 518
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 535
            echo "          <tr>
            <td>
              ";
            // line 537
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("material_design" => true));
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ab9bbd86b60f04ccbd86abf967aae281e2362b7dcf650e1d67737c0e36a4dd83->leave($__internal_ab9bbd86b60f04ccbd86abf967aae281e2362b7dcf650e1d67737c0e36a4dd83_prof);

        
        $__internal_d0f291031b163bbd6ba8260a14cbd88e101d891d2fb756df58a774fe0607fae8->leave($__internal_d0f291031b163bbd6ba8260a14cbd88e101d891d2fb756df58a774fe0607fae8_prof);

    }

    // line 547
    public function block_material_multiple_choice_table_widget($context, array $blocks = array())
    {
        $__internal_93c8f58c57cee73374d19139aad5e08a44e2f4fcf82f1bc0929ee5c72375927d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c8f58c57cee73374d19139aad5e08a44e2f4fcf82f1bc0929ee5c72375927d->enter($__internal_93c8f58c57cee73374d19139aad5e08a44e2f4fcf82f1bc0929ee5c72375927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_fa71d6727cf18fee05448e57e83323ea7fcc641996462005e170430964c198b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa71d6727cf18fee05448e57e83323ea7fcc641996462005e170430964c198b3->enter($__internal_fa71d6727cf18fee05448e57e83323ea7fcc641996462005e170430964c198b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 548
        echo "  ";
        ob_start();
        // line 549
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 553
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</th>
            ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 555
            echo "              <th class=\"text-center\">
                ";
            // line 556
            if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                // line 557
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 559
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 562
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 565
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
                echo "
                ";
            }
            // line 567
            echo "              </th>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 573
            echo "          <tr>
            <td>
              ";
            // line 575
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 577
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 578
                echo "              <td class=\"text-center\">
                ";
                // line 579
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], array(), "array", false, true), $context["child_choice_name"], array(), "array", true, true)) {
                    // line 580
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? $this->getContext($context, "child_choice_entry_index_mapping")), $context["choice_value"], array(), "array"), $context["child_choice_name"], array(), "array");
                    // line 581
                    echo "
                  ";
                    // line 582
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                        // line 583
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? $this->getContext($context, "entry_index")), array(), "array"), 'widget', array("material_design" => true));
                        echo "
                  ";
                    } else {
                        // line 585
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? $this->getContext($context, "entry_index")), array(), "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 587
                    echo "                ";
                } else {
                    // line 588
                    echo "                  --
                ";
                }
                // line 590
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fa71d6727cf18fee05448e57e83323ea7fcc641996462005e170430964c198b3->leave($__internal_fa71d6727cf18fee05448e57e83323ea7fcc641996462005e170430964c198b3_prof);

        
        $__internal_93c8f58c57cee73374d19139aad5e08a44e2f4fcf82f1bc0929ee5c72375927d->leave($__internal_93c8f58c57cee73374d19139aad5e08a44e2f4fcf82f1bc0929ee5c72375927d_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2140 => 594,  2133 => 592,  2126 => 590,  2122 => 588,  2119 => 587,  2113 => 585,  2107 => 583,  2105 => 582,  2102 => 581,  2099 => 580,  2097 => 579,  2094 => 578,  2090 => 577,  2085 => 575,  2081 => 573,  2077 => 572,  2072 => 569,  2057 => 567,  2051 => 565,  2045 => 562,  2039 => 559,  2035 => 557,  2033 => 556,  2030 => 555,  2013 => 554,  2009 => 553,  2003 => 549,  2000 => 548,  1991 => 547,  1977 => 541,  1967 => 537,  1963 => 535,  1959 => 534,  1949 => 527,  1938 => 518,  1935 => 517,  1926 => 516,  1915 => 509,  1912 => 507,  1905 => 504,  1903 => 503,  1902 => 502,  1901 => 501,  1899 => 500,  1895 => 499,  1893 => 498,  1890 => 496,  1883 => 493,  1881 => 492,  1880 => 491,  1879 => 490,  1877 => 489,  1873 => 488,  1871 => 487,  1869 => 486,  1867 => 485,  1865 => 484,  1856 => 483,  1846 => 478,  1844 => 477,  1842 => 476,  1836 => 475,  1827 => 474,  1817 => 471,  1815 => 470,  1813 => 469,  1807 => 468,  1798 => 467,  1788 => 464,  1786 => 463,  1777 => 462,  1767 => 459,  1765 => 458,  1756 => 457,  1746 => 454,  1744 => 453,  1735 => 452,  1725 => 449,  1723 => 448,  1714 => 447,  1704 => 444,  1702 => 443,  1700 => 442,  1691 => 441,  1681 => 438,  1679 => 437,  1677 => 436,  1675 => 435,  1669 => 434,  1660 => 433,  1649 => 428,  1645 => 426,  1643 => 425,  1641 => 424,  1626 => 423,  1621 => 420,  1619 => 419,  1617 => 418,  1615 => 417,  1601 => 416,  1598 => 415,  1596 => 414,  1593 => 413,  1590 => 412,  1587 => 411,  1584 => 410,  1581 => 409,  1578 => 408,  1575 => 407,  1572 => 406,  1569 => 405,  1566 => 404,  1563 => 403,  1561 => 402,  1552 => 401,  1542 => 398,  1533 => 397,  1523 => 394,  1514 => 393,  1504 => 390,  1502 => 389,  1493 => 387,  1483 => 384,  1481 => 383,  1472 => 382,  1457 => 373,  1440 => 370,  1436 => 369,  1432 => 368,  1429 => 367,  1412 => 366,  1406 => 362,  1402 => 361,  1398 => 360,  1390 => 355,  1384 => 352,  1379 => 351,  1370 => 350,  1357 => 345,  1339 => 343,  1321 => 342,  1318 => 341,  1301 => 340,  1298 => 339,  1295 => 338,  1286 => 337,  1275 => 334,  1269 => 331,  1263 => 328,  1259 => 327,  1254 => 325,  1251 => 324,  1249 => 323,  1243 => 320,  1237 => 317,  1233 => 316,  1229 => 314,  1226 => 313,  1217 => 312,  1204 => 308,  1199 => 307,  1196 => 306,  1187 => 305,  1162 => 295,  1159 => 294,  1156 => 293,  1153 => 292,  1144 => 291,  1134 => 288,  1129 => 285,  1118 => 283,  1114 => 282,  1110 => 281,  1104 => 278,  1099 => 276,  1091 => 270,  1089 => 269,  1086 => 268,  1078 => 266,  1075 => 265,  1073 => 264,  1070 => 263,  1067 => 262,  1064 => 261,  1062 => 260,  1059 => 259,  1056 => 258,  1053 => 257,  1049 => 256,  1044 => 254,  1035 => 253,  1025 => 250,  1022 => 248,  1020 => 247,  1011 => 246,  999 => 242,  990 => 239,  986 => 238,  967 => 237,  963 => 236,  959 => 234,  955 => 232,  945 => 228,  937 => 227,  934 => 226,  930 => 225,  927 => 224,  925 => 223,  921 => 222,  916 => 221,  907 => 220,  897 => 217,  893 => 215,  876 => 213,  873 => 212,  856 => 211,  853 => 210,  850 => 209,  846 => 206,  840 => 204,  838 => 203,  834 => 202,  826 => 201,  822 => 199,  818 => 196,  812 => 194,  809 => 193,  804 => 191,  799 => 189,  797 => 188,  789 => 187,  785 => 185,  782 => 184,  780 => 183,  777 => 182,  768 => 181,  757 => 177,  740 => 175,  723 => 174,  720 => 173,  714 => 171,  705 => 170,  694 => 166,  692 => 165,  690 => 164,  687 => 162,  685 => 161,  683 => 160,  674 => 159,  663 => 155,  661 => 154,  659 => 153,  656 => 151,  654 => 150,  652 => 149,  643 => 148,  632 => 144,  626 => 141,  625 => 140,  624 => 139,  620 => 138,  616 => 137,  613 => 135,  607 => 132,  606 => 131,  605 => 130,  601 => 129,  599 => 128,  597 => 127,  588 => 126,  578 => 123,  576 => 122,  567 => 121,  555 => 116,  552 => 115,  544 => 114,  539 => 112,  537 => 111,  535 => 110,  532 => 108,  530 => 107,  521 => 106,  509 => 101,  507 => 100,  505 => 98,  504 => 97,  503 => 96,  502 => 95,  497 => 93,  495 => 92,  493 => 91,  490 => 89,  488 => 88,  479 => 87,  468 => 83,  466 => 82,  464 => 81,  462 => 80,  460 => 79,  456 => 78,  454 => 77,  451 => 75,  449 => 74,  440 => 73,  427 => 67,  425 => 66,  423 => 65,  414 => 64,  404 => 61,  398 => 58,  395 => 57,  393 => 56,  391 => 55,  385 => 52,  382 => 51,  379 => 50,  377 => 49,  374 => 48,  365 => 47,  355 => 44,  353 => 43,  344 => 42,  334 => 39,  332 => 38,  323 => 37,  313 => 34,  310 => 32,  308 => 31,  299 => 30,  289 => 547,  286 => 546,  284 => 516,  281 => 515,  277 => 512,  275 => 483,  272 => 482,  269 => 480,  267 => 474,  264 => 473,  262 => 467,  259 => 466,  257 => 462,  254 => 461,  252 => 457,  249 => 456,  247 => 452,  244 => 451,  242 => 447,  239 => 446,  237 => 441,  234 => 440,  232 => 433,  229 => 432,  226 => 430,  224 => 401,  221 => 400,  219 => 397,  216 => 396,  214 => 393,  211 => 392,  209 => 387,  206 => 386,  204 => 382,  201 => 381,  198 => 379,  196 => 350,  193 => 349,  191 => 337,  188 => 336,  186 => 312,  183 => 311,  181 => 305,  178 => 304,  176 => 291,  173 => 290,  171 => 253,  168 => 252,  166 => 246,  163 => 245,  161 => 220,  158 => 219,  156 => 181,  153 => 180,  151 => 170,  148 => 169,  146 => 159,  143 => 158,  141 => 148,  138 => 147,  136 => 126,  133 => 125,  131 => 121,  128 => 120,  126 => 106,  123 => 105,  121 => 87,  118 => 86,  116 => 73,  113 => 72,  111 => 64,  108 => 63,  106 => 47,  103 => 46,  101 => 42,  98 => 41,  96 => 37,  93 => 36,  91 => 30,  88 => 29,  85 => 27,  21 => 26,  14 => 25,);
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
{% use '@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <div class=\"input-group-append\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-pills\">
            {% for translationsFields in form %}
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields tab-content\">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
    {{ form_errors(form) }}
    <div class=\"input-group locale-input-group js-locale-input-group\">
        {% for translateField in form %}
            {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
            {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

            {% if default_locale.id_lang != translateField.vars.name %}
                {% set classes = classes ~ ' d-none' %}
            {% endif %}

            {% set attr = translateField.vars.attr %}

            {{ form_widget(translateField, {attr: {'class': classes|trim}}) }}
        {% endfor %}

        {% if not hide_locales %}
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"{{ form.vars.id }}\"
            >
                {{ form.vars.default_locale.iso_code }}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
                {% for locale in locales %}
                    <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{%- endblock translate_text_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% spaceless %}
    {{ form_widget(form.from) }}
    {{ form_widget(form.to) }}
  {% endspaceless %}
{% endblock date_range_widget %}

{% block search_and_reset_widget %}
    {% spaceless %}
        <button type=\"submit\"
                class=\"btn btn-primary d-block\"
                title=\"{{ 'Search'|trans({}, 'Admin.Global') }}\"
                name=\"{{ full_name }}[search]\"
        >
          <i class=\"material-icons\">search</i>
          {{ 'Search'|trans({}, 'Admin.Global') }}
        </button>

        {% if show_reset_button %}
            <button type=\"reset\"
                    name=\"{{ full_name }}[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block\"
                    data-url=\"{{ form.vars.attr['data-url'] }}\"
                    data-redirect=\"{{ form.vars.attr['data-redirect'] }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ 'Reset'|trans({}, 'Admin.Global') }}
            </button>
        {% endif %}
    {% endspaceless %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
    {% spaceless %}
    <span class=\"ps-switch\">
        {% for choice in choices %}
            {% set inputId = id ~'_' ~ choice.value %}
            <input id=\"{{inputId}}\" {{ block('attributes') }} name=\"{{ full_name }}\" value=\"{{ choice.value }}\" {%- if choice is selectedchoice(value) -%}checked=\"\" {%- endif -%} {%- if disabled -%}disabled=\"\" {%- endif -%} type=\"radio\">
            <label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
    {% endspaceless %}
{% endblock switch_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
      {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
      {% endif %}
      {% if parent_label_class is defined %}
          {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
      {% endif %}
      {% if label is not same as(false) and label is empty %}
          {% set label = name|humanize %}
      {% endif %}

      {% if material_design is defined %}
        <div class=\"md-checkbox md-checkbox-inline\">
          <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
          {{- widget|raw -}}
          <i class=\"md-checkbox-control\"></i>
          {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
          </label>
        </div>
      {% else %}
      <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
      </label>
      {% endif %}
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}


{# Material design widgets #}

{% block material_choice_table_widget %}
  {% spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>
                  {{ 'Select all'|trans({}, 'Admin.Actions') }}
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {'material_design': true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endspaceless %}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% spaceless %}
    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ label }}</th>
            {% for child_choice in form %}
              <th class=\"text-center\">
                {% if child_choice.vars.multiple %}
                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"{{ loop.index + 1 }}\"
                     data-column-checked=\"false\"
                  >
                    {{ child_choice.vars.label }}
                  </a>
                {% else %}
                  {{ child_choice.vars.label }}
                {% endif %}
              </th>
            {% endfor %}
          </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {'material_design': true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endspaceless %}
{% endblock material_multiple_choice_table_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
