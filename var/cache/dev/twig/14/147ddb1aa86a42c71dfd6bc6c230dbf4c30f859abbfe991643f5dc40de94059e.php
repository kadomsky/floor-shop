<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_30058259b260863762de189c23cc951e1440924d30eac3c00293b4858ca3a202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'form_row_class' => array($this, 'block_form_row_class'),
                'text_with_unit_widget' => array($this, 'block_text_with_unit_widget'),
                'ip_address_text_widget' => array($this, 'block_ip_address_text_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0d052088ad3e9431911ffd3aa9c1172e82b6e2496a8415d38fb95811eca8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0d052088ad3e9431911ffd3aa9c1172e82b6e2496a8415d38fb95811eca8cf->enter($__internal_5e0d052088ad3e9431911ffd3aa9c1172e82b6e2496a8415d38fb95811eca8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        $__internal_9aeb23990266ffe0092184c83b95951f5679ec9ee9b1cad6fca18e5c7533773d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aeb23990266ffe0092184c83b95951f5679ec9ee9b1cad6fca18e5c7533773d->enter($__internal_9aeb23990266ffe0092184c83b95951f5679ec9ee9b1cad6fca18e5c7533773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('switch_widget', $context, $blocks);
        
        $__internal_5e0d052088ad3e9431911ffd3aa9c1172e82b6e2496a8415d38fb95811eca8cf->leave($__internal_5e0d052088ad3e9431911ffd3aa9c1172e82b6e2496a8415d38fb95811eca8cf_prof);

        
        $__internal_9aeb23990266ffe0092184c83b95951f5679ec9ee9b1cad6fca18e5c7533773d->leave($__internal_9aeb23990266ffe0092184c83b95951f5679ec9ee9b1cad6fca18e5c7533773d_prof);

    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a7167273269a8349c99e7307bfbefbd8d57b6257af76540fc9a80713f621c5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7167273269a8349c99e7307bfbefbd8d57b6257af76540fc9a80713f621c5af->enter($__internal_a7167273269a8349c99e7307bfbefbd8d57b6257af76540fc9a80713f621c5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_73ad0578712ba8b532fae85baaeb6ac4e7f8c9d89616fa6f3d2910810ec5151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ad0578712ba8b532fae85baaeb6ac4e7f8c9d89616fa6f3d2910810ec5151e->enter($__internal_73ad0578712ba8b532fae85baaeb6ac4e7f8c9d89616fa6f3d2910810ec5151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_73ad0578712ba8b532fae85baaeb6ac4e7f8c9d89616fa6f3d2910810ec5151e->leave($__internal_73ad0578712ba8b532fae85baaeb6ac4e7f8c9d89616fa6f3d2910810ec5151e_prof);

        
        $__internal_a7167273269a8349c99e7307bfbefbd8d57b6257af76540fc9a80713f621c5af->leave($__internal_a7167273269a8349c99e7307bfbefbd8d57b6257af76540fc9a80713f621c5af_prof);

    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8e6644145de27721ff574478f8b053f907d947317183007ef919a972d1dfb17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6644145de27721ff574478f8b053f907d947317183007ef919a972d1dfb17c->enter($__internal_8e6644145de27721ff574478f8b053f907d947317183007ef919a972d1dfb17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_17d6babefcbb7e6a27909cfa102d5fcbef0d3c06c4767633fe1fa066c6fa3696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d6babefcbb7e6a27909cfa102d5fcbef0d3c06c4767633fe1fa066c6fa3696->enter($__internal_17d6babefcbb7e6a27909cfa102d5fcbef0d3c06c4767633fe1fa066c6fa3696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 34
        ob_start();
        // line 35
        echo "        ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_17d6babefcbb7e6a27909cfa102d5fcbef0d3c06c4767633fe1fa066c6fa3696->leave($__internal_17d6babefcbb7e6a27909cfa102d5fcbef0d3c06c4767633fe1fa066c6fa3696_prof);

        
        $__internal_8e6644145de27721ff574478f8b053f907d947317183007ef919a972d1dfb17c->leave($__internal_8e6644145de27721ff574478f8b053f907d947317183007ef919a972d1dfb17c_prof);

    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cf3ebc85dede631509433e261dd5b3f2ef66b29c0a07c58b3a5b917d93ed90ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3ebc85dede631509433e261dd5b3f2ef66b29c0a07c58b3a5b917d93ed90ee->enter($__internal_cf3ebc85dede631509433e261dd5b3f2ef66b29c0a07c58b3a5b917d93ed90ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_59331da72e99a91b6212d5306c485ecd748b83143db6b0fb2840457fb62d86ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59331da72e99a91b6212d5306c485ecd748b83143db6b0fb2840457fb62d86ce->enter($__internal_59331da72e99a91b6212d5306c485ecd748b83143db6b0fb2840457fb62d86ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        echo "col-sm-2";
        
        $__internal_59331da72e99a91b6212d5306c485ecd748b83143db6b0fb2840457fb62d86ce->leave($__internal_59331da72e99a91b6212d5306c485ecd748b83143db6b0fb2840457fb62d86ce_prof);

        
        $__internal_cf3ebc85dede631509433e261dd5b3f2ef66b29c0a07c58b3a5b917d93ed90ee->leave($__internal_cf3ebc85dede631509433e261dd5b3f2ef66b29c0a07c58b3a5b917d93ed90ee_prof);

    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d41a7bf2ea4dc72c1491815c8d18801d501a4e33bbb8fe9eebe23b54e4486dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41a7bf2ea4dc72c1491815c8d18801d501a4e33bbb8fe9eebe23b54e4486dca->enter($__internal_d41a7bf2ea4dc72c1491815c8d18801d501a4e33bbb8fe9eebe23b54e4486dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_93dbdf416d467400d9944b1b368dd967b483aed1070b8d68344d7aed372d3375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dbdf416d467400d9944b1b368dd967b483aed1070b8d68344d7aed372d3375->enter($__internal_93dbdf416d467400d9944b1b368dd967b483aed1070b8d68344d7aed372d3375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        echo " ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_93dbdf416d467400d9944b1b368dd967b483aed1070b8d68344d7aed372d3375->leave($__internal_93dbdf416d467400d9944b1b368dd967b483aed1070b8d68344d7aed372d3375_prof);

        
        $__internal_d41a7bf2ea4dc72c1491815c8d18801d501a4e33bbb8fe9eebe23b54e4486dca->leave($__internal_d41a7bf2ea4dc72c1491815c8d18801d501a4e33bbb8fe9eebe23b54e4486dca_prof);

    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3ae6194915deecc79064ca894ad15add14d627ec75cc3da39fffc3a181e4989c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae6194915deecc79064ca894ad15add14d627ec75cc3da39fffc3a181e4989c->enter($__internal_3ae6194915deecc79064ca894ad15add14d627ec75cc3da39fffc3a181e4989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9fd993a6ef0a5020dc7b5743b086b89ce92f233323d3cc300e19e904e943076e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd993a6ef0a5020dc7b5743b086b89ce92f233323d3cc300e19e904e943076e->enter($__internal_9fd993a6ef0a5020dc7b5743b086b89ce92f233323d3cc300e19e904e943076e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9fd993a6ef0a5020dc7b5743b086b89ce92f233323d3cc300e19e904e943076e->leave($__internal_9fd993a6ef0a5020dc7b5743b086b89ce92f233323d3cc300e19e904e943076e_prof);

        
        $__internal_3ae6194915deecc79064ca894ad15add14d627ec75cc3da39fffc3a181e4989c->leave($__internal_3ae6194915deecc79064ca894ad15add14d627ec75cc3da39fffc3a181e4989c_prof);

    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5462a2f833196f217970772539b6221b6a6a26ecb516a7deb17ce2502eada66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5462a2f833196f217970772539b6221b6a6a26ecb516a7deb17ce2502eada66d->enter($__internal_5462a2f833196f217970772539b6221b6a6a26ecb516a7deb17ce2502eada66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_262c7f97daeeaf737d364e11bdfb1ab5ec6187d555aed857c4e9e0160c83d707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262c7f97daeeaf737d364e11bdfb1ab5ec6187d555aed857c4e9e0160c83d707->enter($__internal_262c7f97daeeaf737d364e11bdfb1ab5ec6187d555aed857c4e9e0160c83d707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_262c7f97daeeaf737d364e11bdfb1ab5ec6187d555aed857c4e9e0160c83d707->leave($__internal_262c7f97daeeaf737d364e11bdfb1ab5ec6187d555aed857c4e9e0160c83d707_prof);

        
        $__internal_5462a2f833196f217970772539b6221b6a6a26ecb516a7deb17ce2502eada66d->leave($__internal_5462a2f833196f217970772539b6221b6a6a26ecb516a7deb17ce2502eada66d_prof);

    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_7646bd850ded2621fb9fd27d4628d1585155f962c85116fecec07f6e9383a715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7646bd850ded2621fb9fd27d4628d1585155f962c85116fecec07f6e9383a715->enter($__internal_7646bd850ded2621fb9fd27d4628d1585155f962c85116fecec07f6e9383a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_2b4b65d3ede803d7b4c56239d706a83be302d1fd8f5ae0f3f51ba61af9f25af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4b65d3ede803d7b4c56239d706a83be302d1fd8f5ae0f3f51ba61af9f25af0->enter($__internal_2b4b65d3ede803d7b4c56239d706a83be302d1fd8f5ae0f3f51ba61af9f25af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2b4b65d3ede803d7b4c56239d706a83be302d1fd8f5ae0f3f51ba61af9f25af0->leave($__internal_2b4b65d3ede803d7b4c56239d706a83be302d1fd8f5ae0f3f51ba61af9f25af0_prof);

        
        $__internal_7646bd850ded2621fb9fd27d4628d1585155f962c85116fecec07f6e9383a715->leave($__internal_7646bd850ded2621fb9fd27d4628d1585155f962c85116fecec07f6e9383a715_prof);

    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f7cb3270264e0be7c7c2ad5872239f738551de4df1b0869a3e36818669f6bc54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cb3270264e0be7c7c2ad5872239f738551de4df1b0869a3e36818669f6bc54->enter($__internal_f7cb3270264e0be7c7c2ad5872239f738551de4df1b0869a3e36818669f6bc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f729740eb40781a46ecbbf10a7689a89603fa63bb846669918b7ba2cb7c4d54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f729740eb40781a46ecbbf10a7689a89603fa63bb846669918b7ba2cb7c4d54a->enter($__internal_f729740eb40781a46ecbbf10a7689a89603fa63bb846669918b7ba2cb7c4d54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f729740eb40781a46ecbbf10a7689a89603fa63bb846669918b7ba2cb7c4d54a->leave($__internal_f729740eb40781a46ecbbf10a7689a89603fa63bb846669918b7ba2cb7c4d54a_prof);

        
        $__internal_f7cb3270264e0be7c7c2ad5872239f738551de4df1b0869a3e36818669f6bc54->leave($__internal_f7cb3270264e0be7c7c2ad5872239f738551de4df1b0869a3e36818669f6bc54_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9a3239fbb51319fe1b3d8a6ba6ca98144351de41c4ff05b0d198987afd177466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3239fbb51319fe1b3d8a6ba6ca98144351de41c4ff05b0d198987afd177466->enter($__internal_9a3239fbb51319fe1b3d8a6ba6ca98144351de41c4ff05b0d198987afd177466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_908b450568b9057f1ab2f4c8c11fc12ac70c456a848ff852ffba985dafaa3146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908b450568b9057f1ab2f4c8c11fc12ac70c456a848ff852ffba985dafaa3146->enter($__internal_908b450568b9057f1ab2f4c8c11fc12ac70c456a848ff852ffba985dafaa3146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_908b450568b9057f1ab2f4c8c11fc12ac70c456a848ff852ffba985dafaa3146->leave($__internal_908b450568b9057f1ab2f4c8c11fc12ac70c456a848ff852ffba985dafaa3146_prof);

        
        $__internal_9a3239fbb51319fe1b3d8a6ba6ca98144351de41c4ff05b0d198987afd177466->leave($__internal_9a3239fbb51319fe1b3d8a6ba6ca98144351de41c4ff05b0d198987afd177466_prof);

    }

    // line 97
    public function block_form_row_class($context, array $blocks = array())
    {
        $__internal_918d9df2232261b6b23d0ad753987eef0f701bb2e7cd73e0d26373be049fcd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918d9df2232261b6b23d0ad753987eef0f701bb2e7cd73e0d26373be049fcd51->enter($__internal_918d9df2232261b6b23d0ad753987eef0f701bb2e7cd73e0d26373be049fcd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_f86983f73573e543722649ff6d48fe03528a12c2d4b75994e0029326b431d71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86983f73573e543722649ff6d48fe03528a12c2d4b75994e0029326b431d71c->enter($__internal_f86983f73573e543722649ff6d48fe03528a12c2d4b75994e0029326b431d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 98
        echo "form-group";
        
        $__internal_f86983f73573e543722649ff6d48fe03528a12c2d4b75994e0029326b431d71c->leave($__internal_f86983f73573e543722649ff6d48fe03528a12c2d4b75994e0029326b431d71c_prof);

        
        $__internal_918d9df2232261b6b23d0ad753987eef0f701bb2e7cd73e0d26373be049fcd51->leave($__internal_918d9df2232261b6b23d0ad753987eef0f701bb2e7cd73e0d26373be049fcd51_prof);

    }

    // line 101
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        $__internal_1bfba8313897856a9a6781e6e19b2648f94935155fa525d88e0fc49e5f0acddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfba8313897856a9a6781e6e19b2648f94935155fa525d88e0fc49e5f0acddb->enter($__internal_1bfba8313897856a9a6781e6e19b2648f94935155fa525d88e0fc49e5f0acddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        $__internal_5d2b6d0c4c1490afd4df1f2d6f8bdbe5bd655b828d59a751f1d00cfd6369c3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2b6d0c4c1490afd4df1f2d6f8bdbe5bd655b828d59a751f1d00cfd6369c3ae->enter($__internal_5d2b6d0c4c1490afd4df1f2d6f8bdbe5bd655b828d59a751f1d00cfd6369c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        // line 102
        echo "<div class=\"input-group\">";
        // line 103
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 104
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "unit", array(), "any", true, true)) {
            // line 105
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "unit", array()), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 109
        echo "</div>
";
        
        $__internal_5d2b6d0c4c1490afd4df1f2d6f8bdbe5bd655b828d59a751f1d00cfd6369c3ae->leave($__internal_5d2b6d0c4c1490afd4df1f2d6f8bdbe5bd655b828d59a751f1d00cfd6369c3ae_prof);

        
        $__internal_1bfba8313897856a9a6781e6e19b2648f94935155fa525d88e0fc49e5f0acddb->leave($__internal_1bfba8313897856a9a6781e6e19b2648f94935155fa525d88e0fc49e5f0acddb_prof);

    }

    // line 112
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        $__internal_eccdbd354bcdb83fa66651b385ce87f44cb7294dfc29826eaec9339fc20d9bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccdbd354bcdb83fa66651b385ce87f44cb7294dfc29826eaec9339fc20d9bc5->enter($__internal_eccdbd354bcdb83fa66651b385ce87f44cb7294dfc29826eaec9339fc20d9bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_a6e1cca97ac639ff6d8b1c519bc089ed703c5a0857d76f7795343fcf37494fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e1cca97ac639ff6d8b1c519bc089ed703c5a0857d76f7795343fcf37494fb4->enter($__internal_a6e1cca97ac639ff6d8b1c519bc089ed703c5a0857d76f7795343fcf37494fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 113
        echo "<div class=\"input-group\">";
        // line 114
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 115
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? $this->getContext($context, "currentIp")), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", array(), "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_a6e1cca97ac639ff6d8b1c519bc089ed703c5a0857d76f7795343fcf37494fb4->leave($__internal_a6e1cca97ac639ff6d8b1c519bc089ed703c5a0857d76f7795343fcf37494fb4_prof);

        
        $__internal_eccdbd354bcdb83fa66651b385ce87f44cb7294dfc29826eaec9339fc20d9bc5->leave($__internal_eccdbd354bcdb83fa66651b385ce87f44cb7294dfc29826eaec9339fc20d9bc5_prof);

    }

    // line 121
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_022dbcde91a9f5fdbfd938b77b383cb8c25ba54a21e73f209e018f322ecd11d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022dbcde91a9f5fdbfd938b77b383cb8c25ba54a21e73f209e018f322ecd11d0->enter($__internal_022dbcde91a9f5fdbfd938b77b383cb8c25ba54a21e73f209e018f322ecd11d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_c148c60d993addb15fff6077d53aa2b0d0eb4ccde0fd5f81943445d53e173585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c148c60d993addb15fff6077d53aa2b0d0eb4ccde0fd5f81943445d53e173585->enter($__internal_c148c60d993addb15fff6077d53aa2b0d0eb4ccde0fd5f81943445d53e173585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 122
        echo "<div class=\"input-group\">";
        // line 123
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 124
        echo "</div>
";
        
        $__internal_c148c60d993addb15fff6077d53aa2b0d0eb4ccde0fd5f81943445d53e173585->leave($__internal_c148c60d993addb15fff6077d53aa2b0d0eb4ccde0fd5f81943445d53e173585_prof);

        
        $__internal_022dbcde91a9f5fdbfd938b77b383cb8c25ba54a21e73f209e018f322ecd11d0->leave($__internal_022dbcde91a9f5fdbfd938b77b383cb8c25ba54a21e73f209e018f322ecd11d0_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  488 => 124,  486 => 123,  484 => 122,  475 => 121,  461 => 116,  456 => 115,  454 => 114,  452 => 113,  443 => 112,  432 => 109,  426 => 106,  423 => 105,  421 => 104,  419 => 103,  417 => 102,  408 => 101,  398 => 98,  389 => 97,  379 => 94,  370 => 93,  355 => 87,  351 => 86,  347 => 85,  344 => 84,  342 => 83,  333 => 82,  318 => 76,  314 => 75,  310 => 74,  306 => 73,  299 => 72,  297 => 71,  288 => 70,  278 => 67,  269 => 66,  259 => 63,  250 => 62,  235 => 56,  231 => 55,  227 => 54,  223 => 53,  214 => 52,  212 => 51,  203 => 50,  193 => 45,  184 => 44,  173 => 41,  170 => 39,  167 => 38,  161 => 36,  158 => 35,  156 => 34,  147 => 33,  137 => 28,  135 => 27,  126 => 26,  116 => 121,  113 => 120,  111 => 112,  108 => 111,  106 => 101,  103 => 100,  101 => 97,  98 => 96,  96 => 93,  93 => 92,  91 => 82,  88 => 81,  86 => 70,  83 => 69,  81 => 66,  78 => 65,  76 => 62,  73 => 61,  71 => 50,  68 => 49,  65 => 47,  63 => 44,  60 => 43,  58 => 33,  55 => 32,  52 => 30,  50 => 26,  14 => 25,);
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
{% use '@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig' %}
{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {% spaceless %}
        {% if label is same as(false) %}
            <div class=\"{{ block('form_label_class') }}\"></div>
        {% else %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
            {{- parent() -}}
        {% endif %}
    {% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
    col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {% spaceless %}
        <div class=\"{{ block('form_row_class') }} {% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{ form_label(form) }}
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
    {% spaceless %}
        <div class=\"form-group{% if not valid %} has-error{% endif %}\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
    {% spaceless %}
        <div class=\"form-group\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
            </div>
        </div>
    {% endspaceless %}
{% endblock submit_row %}

{% block form_group_class -%}
    col-sm-10
{%- endblock form_group_class %}

{% block form_row_class -%}
    form-group
{%- endblock form_row_class %}

{% block text_with_unit_widget %}
<div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    {% if form.vars.unit is defined %}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">{{ form.vars.unit }}</span>
        </div>
    {% endif %}
</div>
{% endblock text_with_unit_widget %}

{% block ip_address_text_widget %}
<div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
        <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
</div>
{% endblock ip_address_text_widget %}

{% block switch_widget %}
<div class=\"input-group\">
    {{- parent() -}}
</div>
{% endblock switch_widget %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
