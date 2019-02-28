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
        $__internal_ca8a5db92db1b6b84a64ada29b8e1bdcece32c156b73fe6a78ca7ffc8dbc5db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8a5db92db1b6b84a64ada29b8e1bdcece32c156b73fe6a78ca7ffc8dbc5db7->enter($__internal_ca8a5db92db1b6b84a64ada29b8e1bdcece32c156b73fe6a78ca7ffc8dbc5db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        $__internal_6ebd5dc32b804ba24740cc6201d5ff53518878ee2c7e3db742f2742572455138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebd5dc32b804ba24740cc6201d5ff53518878ee2c7e3db742f2742572455138->enter($__internal_6ebd5dc32b804ba24740cc6201d5ff53518878ee2c7e3db742f2742572455138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_ca8a5db92db1b6b84a64ada29b8e1bdcece32c156b73fe6a78ca7ffc8dbc5db7->leave($__internal_ca8a5db92db1b6b84a64ada29b8e1bdcece32c156b73fe6a78ca7ffc8dbc5db7_prof);

        
        $__internal_6ebd5dc32b804ba24740cc6201d5ff53518878ee2c7e3db742f2742572455138->leave($__internal_6ebd5dc32b804ba24740cc6201d5ff53518878ee2c7e3db742f2742572455138_prof);

    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_853e56f75d3021b3522caedf706f34032d49ad8877abacbf774a31ba8e7b6b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853e56f75d3021b3522caedf706f34032d49ad8877abacbf774a31ba8e7b6b52->enter($__internal_853e56f75d3021b3522caedf706f34032d49ad8877abacbf774a31ba8e7b6b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_8d91121a2033419bf28e4552ce4ce61012d6f7e71737b255bbaa1e18c7ce477b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d91121a2033419bf28e4552ce4ce61012d6f7e71737b255bbaa1e18c7ce477b->enter($__internal_8d91121a2033419bf28e4552ce4ce61012d6f7e71737b255bbaa1e18c7ce477b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_8d91121a2033419bf28e4552ce4ce61012d6f7e71737b255bbaa1e18c7ce477b->leave($__internal_8d91121a2033419bf28e4552ce4ce61012d6f7e71737b255bbaa1e18c7ce477b_prof);

        
        $__internal_853e56f75d3021b3522caedf706f34032d49ad8877abacbf774a31ba8e7b6b52->leave($__internal_853e56f75d3021b3522caedf706f34032d49ad8877abacbf774a31ba8e7b6b52_prof);

    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9307764408a9602cbf409f2df2894e18933cb1692cd4b1e2466813fbf63a372c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9307764408a9602cbf409f2df2894e18933cb1692cd4b1e2466813fbf63a372c->enter($__internal_9307764408a9602cbf409f2df2894e18933cb1692cd4b1e2466813fbf63a372c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e749248b59cc26f22a816d066aab0e21a1d6eecceba3eb534d0b900ef343dcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e749248b59cc26f22a816d066aab0e21a1d6eecceba3eb534d0b900ef343dcda->enter($__internal_e749248b59cc26f22a816d066aab0e21a1d6eecceba3eb534d0b900ef343dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_e749248b59cc26f22a816d066aab0e21a1d6eecceba3eb534d0b900ef343dcda->leave($__internal_e749248b59cc26f22a816d066aab0e21a1d6eecceba3eb534d0b900ef343dcda_prof);

        
        $__internal_9307764408a9602cbf409f2df2894e18933cb1692cd4b1e2466813fbf63a372c->leave($__internal_9307764408a9602cbf409f2df2894e18933cb1692cd4b1e2466813fbf63a372c_prof);

    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ff52fa84d2a2ca6cf5e3e61d5f47bced61c1495d855a13c82877c91000726703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff52fa84d2a2ca6cf5e3e61d5f47bced61c1495d855a13c82877c91000726703->enter($__internal_ff52fa84d2a2ca6cf5e3e61d5f47bced61c1495d855a13c82877c91000726703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a2f9d43c13e86c65c0cd904edb7051b271f513da721bc617c1f55eb18c0049a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f9d43c13e86c65c0cd904edb7051b271f513da721bc617c1f55eb18c0049a3->enter($__internal_a2f9d43c13e86c65c0cd904edb7051b271f513da721bc617c1f55eb18c0049a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        echo "col-sm-2";
        
        $__internal_a2f9d43c13e86c65c0cd904edb7051b271f513da721bc617c1f55eb18c0049a3->leave($__internal_a2f9d43c13e86c65c0cd904edb7051b271f513da721bc617c1f55eb18c0049a3_prof);

        
        $__internal_ff52fa84d2a2ca6cf5e3e61d5f47bced61c1495d855a13c82877c91000726703->leave($__internal_ff52fa84d2a2ca6cf5e3e61d5f47bced61c1495d855a13c82877c91000726703_prof);

    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c9180a634177c2c704bb17580fad167e0fd6e51dd7752bb9148ba20de70ebe39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9180a634177c2c704bb17580fad167e0fd6e51dd7752bb9148ba20de70ebe39->enter($__internal_c9180a634177c2c704bb17580fad167e0fd6e51dd7752bb9148ba20de70ebe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5aa498fc247d9afa68f875667cf0979ff11a9f23315b4a78ab68add05fdb8187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa498fc247d9afa68f875667cf0979ff11a9f23315b4a78ab68add05fdb8187->enter($__internal_5aa498fc247d9afa68f875667cf0979ff11a9f23315b4a78ab68add05fdb8187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5aa498fc247d9afa68f875667cf0979ff11a9f23315b4a78ab68add05fdb8187->leave($__internal_5aa498fc247d9afa68f875667cf0979ff11a9f23315b4a78ab68add05fdb8187_prof);

        
        $__internal_c9180a634177c2c704bb17580fad167e0fd6e51dd7752bb9148ba20de70ebe39->leave($__internal_c9180a634177c2c704bb17580fad167e0fd6e51dd7752bb9148ba20de70ebe39_prof);

    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_386c8f01a50614f563fc487a265e2e3cc083b221d1dce41b443bf0906c188439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386c8f01a50614f563fc487a265e2e3cc083b221d1dce41b443bf0906c188439->enter($__internal_386c8f01a50614f563fc487a265e2e3cc083b221d1dce41b443bf0906c188439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_aa088f295af6fbd8e3b9b1d0a530cf7032da3deb780fcef851b8b206c4dcb8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa088f295af6fbd8e3b9b1d0a530cf7032da3deb780fcef851b8b206c4dcb8e8->enter($__internal_aa088f295af6fbd8e3b9b1d0a530cf7032da3deb780fcef851b8b206c4dcb8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_aa088f295af6fbd8e3b9b1d0a530cf7032da3deb780fcef851b8b206c4dcb8e8->leave($__internal_aa088f295af6fbd8e3b9b1d0a530cf7032da3deb780fcef851b8b206c4dcb8e8_prof);

        
        $__internal_386c8f01a50614f563fc487a265e2e3cc083b221d1dce41b443bf0906c188439->leave($__internal_386c8f01a50614f563fc487a265e2e3cc083b221d1dce41b443bf0906c188439_prof);

    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d66cb35ad3a87ab54f55d7a0c1537aa176b63c65fe78c0a715d438a697faef3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66cb35ad3a87ab54f55d7a0c1537aa176b63c65fe78c0a715d438a697faef3f->enter($__internal_d66cb35ad3a87ab54f55d7a0c1537aa176b63c65fe78c0a715d438a697faef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_95861f7d7d44a777361504461dc63b7afd24df71c6ebdbc4a5651d593c9ad0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95861f7d7d44a777361504461dc63b7afd24df71c6ebdbc4a5651d593c9ad0ea->enter($__internal_95861f7d7d44a777361504461dc63b7afd24df71c6ebdbc4a5651d593c9ad0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_95861f7d7d44a777361504461dc63b7afd24df71c6ebdbc4a5651d593c9ad0ea->leave($__internal_95861f7d7d44a777361504461dc63b7afd24df71c6ebdbc4a5651d593c9ad0ea_prof);

        
        $__internal_d66cb35ad3a87ab54f55d7a0c1537aa176b63c65fe78c0a715d438a697faef3f->leave($__internal_d66cb35ad3a87ab54f55d7a0c1537aa176b63c65fe78c0a715d438a697faef3f_prof);

    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_e343841ab799e3bdc32c1215a5feee285c5162b03e46de4a74423df7da650c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e343841ab799e3bdc32c1215a5feee285c5162b03e46de4a74423df7da650c19->enter($__internal_e343841ab799e3bdc32c1215a5feee285c5162b03e46de4a74423df7da650c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_0d54d0bafb5cd378b6d56d604bf93bb2ade5f705763f99b64a46af04d7474317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d54d0bafb5cd378b6d56d604bf93bb2ade5f705763f99b64a46af04d7474317->enter($__internal_0d54d0bafb5cd378b6d56d604bf93bb2ade5f705763f99b64a46af04d7474317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_0d54d0bafb5cd378b6d56d604bf93bb2ade5f705763f99b64a46af04d7474317->leave($__internal_0d54d0bafb5cd378b6d56d604bf93bb2ade5f705763f99b64a46af04d7474317_prof);

        
        $__internal_e343841ab799e3bdc32c1215a5feee285c5162b03e46de4a74423df7da650c19->leave($__internal_e343841ab799e3bdc32c1215a5feee285c5162b03e46de4a74423df7da650c19_prof);

    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b9f63c63f82b54bd77371069456b29401a9ab155775ad8d5cce302a64b7e3ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f63c63f82b54bd77371069456b29401a9ab155775ad8d5cce302a64b7e3ab6->enter($__internal_b9f63c63f82b54bd77371069456b29401a9ab155775ad8d5cce302a64b7e3ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_72c597f82b20e2716c8e8f0eb61f20d9e5b7a0a489eb54c1278c3b6c8a57744d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c597f82b20e2716c8e8f0eb61f20d9e5b7a0a489eb54c1278c3b6c8a57744d->enter($__internal_72c597f82b20e2716c8e8f0eb61f20d9e5b7a0a489eb54c1278c3b6c8a57744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_72c597f82b20e2716c8e8f0eb61f20d9e5b7a0a489eb54c1278c3b6c8a57744d->leave($__internal_72c597f82b20e2716c8e8f0eb61f20d9e5b7a0a489eb54c1278c3b6c8a57744d_prof);

        
        $__internal_b9f63c63f82b54bd77371069456b29401a9ab155775ad8d5cce302a64b7e3ab6->leave($__internal_b9f63c63f82b54bd77371069456b29401a9ab155775ad8d5cce302a64b7e3ab6_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_01bc06a8ec1b0bf3b0c1527910ddcbb71fc76e921411574d15463856fcd1485f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bc06a8ec1b0bf3b0c1527910ddcbb71fc76e921411574d15463856fcd1485f->enter($__internal_01bc06a8ec1b0bf3b0c1527910ddcbb71fc76e921411574d15463856fcd1485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6e88f60b4e83a323cfdc215f4078fd79da6b5621424bae5350a880ae9dc328b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e88f60b4e83a323cfdc215f4078fd79da6b5621424bae5350a880ae9dc328b6->enter($__internal_6e88f60b4e83a323cfdc215f4078fd79da6b5621424bae5350a880ae9dc328b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_6e88f60b4e83a323cfdc215f4078fd79da6b5621424bae5350a880ae9dc328b6->leave($__internal_6e88f60b4e83a323cfdc215f4078fd79da6b5621424bae5350a880ae9dc328b6_prof);

        
        $__internal_01bc06a8ec1b0bf3b0c1527910ddcbb71fc76e921411574d15463856fcd1485f->leave($__internal_01bc06a8ec1b0bf3b0c1527910ddcbb71fc76e921411574d15463856fcd1485f_prof);

    }

    // line 97
    public function block_form_row_class($context, array $blocks = array())
    {
        $__internal_5f3c5b59af48f8eff5a25d97d0d9753258caf77b1c0d2d6ffcf8dd564e9b8ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3c5b59af48f8eff5a25d97d0d9753258caf77b1c0d2d6ffcf8dd564e9b8ec8->enter($__internal_5f3c5b59af48f8eff5a25d97d0d9753258caf77b1c0d2d6ffcf8dd564e9b8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_19adc8ca3527e3defb04e8295b65de0ab123036ee79f72f8134e5d4a0ee0e3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19adc8ca3527e3defb04e8295b65de0ab123036ee79f72f8134e5d4a0ee0e3f4->enter($__internal_19adc8ca3527e3defb04e8295b65de0ab123036ee79f72f8134e5d4a0ee0e3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 98
        echo "form-group";
        
        $__internal_19adc8ca3527e3defb04e8295b65de0ab123036ee79f72f8134e5d4a0ee0e3f4->leave($__internal_19adc8ca3527e3defb04e8295b65de0ab123036ee79f72f8134e5d4a0ee0e3f4_prof);

        
        $__internal_5f3c5b59af48f8eff5a25d97d0d9753258caf77b1c0d2d6ffcf8dd564e9b8ec8->leave($__internal_5f3c5b59af48f8eff5a25d97d0d9753258caf77b1c0d2d6ffcf8dd564e9b8ec8_prof);

    }

    // line 101
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        $__internal_4db9cac56f19980551800a0b43cade721d2b363fac9ca68216fcdc9f36e6c320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db9cac56f19980551800a0b43cade721d2b363fac9ca68216fcdc9f36e6c320->enter($__internal_4db9cac56f19980551800a0b43cade721d2b363fac9ca68216fcdc9f36e6c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        $__internal_bb4cddda4af16a6dadec3b27211ec9b022c420b237c1188fbc2af5e3b654d513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4cddda4af16a6dadec3b27211ec9b022c420b237c1188fbc2af5e3b654d513->enter($__internal_bb4cddda4af16a6dadec3b27211ec9b022c420b237c1188fbc2af5e3b654d513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

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
        
        $__internal_bb4cddda4af16a6dadec3b27211ec9b022c420b237c1188fbc2af5e3b654d513->leave($__internal_bb4cddda4af16a6dadec3b27211ec9b022c420b237c1188fbc2af5e3b654d513_prof);

        
        $__internal_4db9cac56f19980551800a0b43cade721d2b363fac9ca68216fcdc9f36e6c320->leave($__internal_4db9cac56f19980551800a0b43cade721d2b363fac9ca68216fcdc9f36e6c320_prof);

    }

    // line 112
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        $__internal_77fa57ac3230f650a354f28630066b931e200d1d20a4d66be81342a2bac8ea1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fa57ac3230f650a354f28630066b931e200d1d20a4d66be81342a2bac8ea1e->enter($__internal_77fa57ac3230f650a354f28630066b931e200d1d20a4d66be81342a2bac8ea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_d89614e893212d7a4ba019ab3068e8096f06979b0ca1fcd13978d8983645d485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89614e893212d7a4ba019ab3068e8096f06979b0ca1fcd13978d8983645d485->enter($__internal_d89614e893212d7a4ba019ab3068e8096f06979b0ca1fcd13978d8983645d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

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
        
        $__internal_d89614e893212d7a4ba019ab3068e8096f06979b0ca1fcd13978d8983645d485->leave($__internal_d89614e893212d7a4ba019ab3068e8096f06979b0ca1fcd13978d8983645d485_prof);

        
        $__internal_77fa57ac3230f650a354f28630066b931e200d1d20a4d66be81342a2bac8ea1e->leave($__internal_77fa57ac3230f650a354f28630066b931e200d1d20a4d66be81342a2bac8ea1e_prof);

    }

    // line 121
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_8d977c3844503a1b0fc61757b429e9ea454c05b156f794e0a5f638bd9f2112b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d977c3844503a1b0fc61757b429e9ea454c05b156f794e0a5f638bd9f2112b3->enter($__internal_8d977c3844503a1b0fc61757b429e9ea454c05b156f794e0a5f638bd9f2112b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_b30103021344c817caafa4f7eb9f88f273ee7e2893c06fe91f9121e7db246784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30103021344c817caafa4f7eb9f88f273ee7e2893c06fe91f9121e7db246784->enter($__internal_b30103021344c817caafa4f7eb9f88f273ee7e2893c06fe91f9121e7db246784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 122
        echo "<div class=\"input-group\">";
        // line 123
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 124
        echo "</div>
";
        
        $__internal_b30103021344c817caafa4f7eb9f88f273ee7e2893c06fe91f9121e7db246784->leave($__internal_b30103021344c817caafa4f7eb9f88f273ee7e2893c06fe91f9121e7db246784_prof);

        
        $__internal_8d977c3844503a1b0fc61757b429e9ea454c05b156f794e0a5f638bd9f2112b3->leave($__internal_8d977c3844503a1b0fc61757b429e9ea454c05b156f794e0a5f638bd9f2112b3_prof);

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
