<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_6bc80665d3059bffefae3938d06b91f77ec6e132d56cb92e168975ea57516661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd474e28bce91cd54fa136a305a7c160309c0ee010077e6a3df8a2963edfb816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd474e28bce91cd54fa136a305a7c160309c0ee010077e6a3df8a2963edfb816->enter($__internal_dd474e28bce91cd54fa136a305a7c160309c0ee010077e6a3df8a2963edfb816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_d87ca17d5747e5f8c7b61acd9f06a0938fb07186cf27c6666dfef66f7e673f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87ca17d5747e5f8c7b61acd9f06a0938fb07186cf27c6666dfef66f7e673f41->enter($__internal_d87ca17d5747e5f8c7b61acd9f06a0938fb07186cf27c6666dfef66f7e673f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd474e28bce91cd54fa136a305a7c160309c0ee010077e6a3df8a2963edfb816->leave($__internal_dd474e28bce91cd54fa136a305a7c160309c0ee010077e6a3df8a2963edfb816_prof);

        
        $__internal_d87ca17d5747e5f8c7b61acd9f06a0938fb07186cf27c6666dfef66f7e673f41->leave($__internal_d87ca17d5747e5f8c7b61acd9f06a0938fb07186cf27c6666dfef66f7e673f41_prof);

    }

    // line 16
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_814e2bacadac5b7e2896eabd3133c3d1d9c5180ec5a6519909a6cc6e42aaae22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814e2bacadac5b7e2896eabd3133c3d1d9c5180ec5a6519909a6cc6e42aaae22->enter($__internal_814e2bacadac5b7e2896eabd3133c3d1d9c5180ec5a6519909a6cc6e42aaae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0738d8b8663acbe7229c0916d21247ae4f463698e71bc8f11215d397d204f62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0738d8b8663acbe7229c0916d21247ae4f463698e71bc8f11215d397d204f62c->enter($__internal_0738d8b8663acbe7229c0916d21247ae4f463698e71bc8f11215d397d204f62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 17
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) > 0);
        // line 18
        echo "
    ";
        // line 19
        $context["total_time"] = ((($context["has_time_events"] ?? $this->getContext($context, "has_time_events"))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 20
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array()))) : ("n/a"));
        // line 21
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? $this->getContext($context, "has_time_events")) && ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
    ";
        // line 29
        ob_start();
        // line 30
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 32
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 36
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? $this->getContext($context, "initialization_time")), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "
    ";
        // line 40
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_0738d8b8663acbe7229c0916d21247ae4f463698e71bc8f11215d397d204f62c->leave($__internal_0738d8b8663acbe7229c0916d21247ae4f463698e71bc8f11215d397d204f62c_prof);

        
        $__internal_814e2bacadac5b7e2896eabd3133c3d1d9c5180ec5a6519909a6cc6e42aaae22->leave($__internal_814e2bacadac5b7e2896eabd3133c3d1d9c5180ec5a6519909a6cc6e42aaae22_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eac9f699c44e9e872549bd9c64c2abfbda97c4f316dd5616e986fc165c1cf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eac9f699c44e9e872549bd9c64c2abfbda97c4f316dd5616e986fc165c1cf0c->enter($__internal_3eac9f699c44e9e872549bd9c64c2abfbda97c4f316dd5616e986fc165c1cf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5966c07f908ceef509cd3cd988b958754ebbc0c17e04ba2f7d1477cc11fad82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5966c07f908ceef509cd3cd988b958754ebbc0c17e04ba2f7d1477cc11fad82d->enter($__internal_5966c07f908ceef509cd3cd988b958754ebbc0c17e04ba2f7d1477cc11fad82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 45
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_5966c07f908ceef509cd3cd988b958754ebbc0c17e04ba2f7d1477cc11fad82d->leave($__internal_5966c07f908ceef509cd3cd988b958754ebbc0c17e04ba2f7d1477cc11fad82d_prof);

        
        $__internal_3eac9f699c44e9e872549bd9c64c2abfbda97c4f316dd5616e986fc165c1cf0c->leave($__internal_3eac9f699c44e9e872549bd9c64c2abfbda97c4f316dd5616e986fc165c1cf0c_prof);

    }

    // line 50
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca75ff082fd2a6c8eec10291e1230aca0b7701517bb23447d267b863b4d94646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca75ff082fd2a6c8eec10291e1230aca0b7701517bb23447d267b863b4d94646->enter($__internal_ca75ff082fd2a6c8eec10291e1230aca0b7701517bb23447d267b863b4d94646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38b4d9dbce4aa1f81cc30101c02d691b8d128902989009b203017b71d012d432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b4d9dbce4aa1f81cc30101c02d691b8d128902989009b203017b71d012d432->enter($__internal_38b4d9dbce4aa1f81cc30101c02d691b8d128902989009b203017b71d012d432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 51
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) > 0);
        // line 52
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 56
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array())) {
            // line 66
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        if ((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 73
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 77
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 80
            if (($context["has_time_events"] ?? $this->getContext($context, "has_time_events"))) {
                // line 81
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 82
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 83
                    echo "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                    // line 84
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "            ";
            } else {
                // line 86
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 87
                echo "            ";
            }
            // line 88
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 90
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 91
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 94
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 98
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) {
            // line 99
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 103
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_38b4d9dbce4aa1f81cc30101c02d691b8d128902989009b203017b71d012d432->leave($__internal_38b4d9dbce4aa1f81cc30101c02d691b8d128902989009b203017b71d012d432_prof);

        
        $__internal_ca75ff082fd2a6c8eec10291e1230aca0b7701517bb23447d267b863b4d94646->leave($__internal_ca75ff082fd2a6c8eec10291e1230aca0b7701517bb23447d267b863b4d94646_prof);

    }

    // line 107
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_a5a7dc8f7202d997dcac7e6af9fd117279dcb593bc08fbd812089187ef0fca80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a7dc8f7202d997dcac7e6af9fd117279dcb593bc08fbd812089187ef0fca80->enter($__internal_a5a7dc8f7202d997dcac7e6af9fd117279dcb593bc08fbd812089187ef0fca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_a5cbb1751367832bf207342ac5ceb00629a4b69b15f551a8748f9fcd13a61efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cbb1751367832bf207342ac5ceb00629a4b69b15f551a8748f9fcd13a61efb->enter($__internal_a5cbb1751367832bf207342ac5ceb00629a4b69b15f551a8748f9fcd13a61efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 108
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 115
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array())) {
            // line 116
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 117
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method")));
            echo "
            <small>
                ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 123
($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 124
            echo "        <h3>
            Main Request <small>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 128
        echo "
    ";
        // line 129
        echo $context["helper"]->getdisplay_timeline(("timeline_" . ($context["token"] ?? $this->getContext($context, "token"))), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), ($context["colors"] ?? $this->getContext($context, "colors")));
        echo "

    ";
        // line 131
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 132
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 134
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 138
                echo "            <h4>
                <a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 143
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), ($context["events"] ?? $this->getContext($context, "events")), ($context["colors"] ?? $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "    ";
        }
        // line 146
        echo "
    <script>";
        // line 147
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 189
        echo twig_jsonencode_filter(($context["colors"] ?? $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 462
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 464
        echo $context["helper"]->getdump_request_data(($context["token"] ?? $this->getContext($context, "token")), ($context["profile"] ?? $this->getContext($context, "profile")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 466
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 467
            echo "                ,
";
            // line 468
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
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
                // line 469
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
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
        }
        // line 472
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 504
        echo "</script>
";
        
        $__internal_a5cbb1751367832bf207342ac5ceb00629a4b69b15f551a8748f9fcd13a61efb->leave($__internal_a5cbb1751367832bf207342ac5ceb00629a4b69b15f551a8748f9fcd13a61efb_prof);

        
        $__internal_a5a7dc8f7202d997dcac7e6af9fd117279dcb593bc08fbd812089187ef0fca80->leave($__internal_a5a7dc8f7202d997dcac7e6af9fd117279dcb593bc08fbd812089187ef0fca80_prof);

    }

    // line 507
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6a73cf0aa8bf01dbcb5ad88e2f346d245550bd37cb64786242fb0f3ba4b807ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6a73cf0aa8bf01dbcb5ad88e2f346d245550bd37cb64786242fb0f3ba4b807ac->enter($__internal_6a73cf0aa8bf01dbcb5ad88e2f346d245550bd37cb64786242fb0f3ba4b807ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_faf94459333ff5261a2ae7a8df6c46b7ecea39e6803dda46d6e2bf08af50c158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_faf94459333ff5261a2ae7a8df6c46b7ecea39e6803dda46d6e2bf08af50c158->enter($__internal_faf94459333ff5261a2ae7a8df6c46b7ecea39e6803dda46d6e2bf08af50c158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 509
            $context["__internal_cb22d7c93bf2c6e5d5d2b552c4dbda2abda6ba6497d3d6bc042d08e1d0d03b52"] = $this;
            // line 510
            echo "                {
                    \"id\": \"";
            // line 511
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 512
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "origin", array()) - ($context["origin"] ?? $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 514
            echo $context["__internal_cb22d7c93bf2c6e5d5d2b552c4dbda2abda6ba6497d3d6bc042d08e1d0d03b52"]->getdump_events(($context["events"] ?? $this->getContext($context, "events")));
            echo "
                    ]
                }
";
            
            $__internal_faf94459333ff5261a2ae7a8df6c46b7ecea39e6803dda46d6e2bf08af50c158->leave($__internal_faf94459333ff5261a2ae7a8df6c46b7ecea39e6803dda46d6e2bf08af50c158_prof);

            
            $__internal_6a73cf0aa8bf01dbcb5ad88e2f346d245550bd37cb64786242fb0f3ba4b807ac->leave($__internal_6a73cf0aa8bf01dbcb5ad88e2f346d245550bd37cb64786242fb0f3ba4b807ac_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 520
    public function getdump_events($__events__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c235a48dc186decac243c5830ad7b48bd9ba757527efaeb40613e22c10e1d788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c235a48dc186decac243c5830ad7b48bd9ba757527efaeb40613e22c10e1d788->enter($__internal_c235a48dc186decac243c5830ad7b48bd9ba757527efaeb40613e22c10e1d788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_2e5573bd74b262f5f9415b9e969743a3b2f74a4ecc3e8eccfca584aa2de5e84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2e5573bd74b262f5f9415b9e969743a3b2f74a4ecc3e8eccfca584aa2de5e84c->enter($__internal_2e5573bd74b262f5f9415b9e969743a3b2f74a4ecc3e8eccfca584aa2de5e84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 522
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
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
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 523
                if (("__section__" != $context["name"])) {
                    // line 524
                    echo "                        {
                            \"name\": \"";
                    // line 525
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 526
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 527
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 528
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 529
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 530
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 531
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 533
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 534
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 536
                    echo "]
                        }";
                    // line 537
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_2e5573bd74b262f5f9415b9e969743a3b2f74a4ecc3e8eccfca584aa2de5e84c->leave($__internal_2e5573bd74b262f5f9415b9e969743a3b2f74a4ecc3e8eccfca584aa2de5e84c_prof);

            
            $__internal_c235a48dc186decac243c5830ad7b48bd9ba757527efaeb40613e22c10e1d788->leave($__internal_c235a48dc186decac243c5830ad7b48bd9ba757527efaeb40613e22c10e1d788_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 543
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9f7fab0133aede98d6829be8849a3fa2a947a94e239c0ce5a7591c875bc2e35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9f7fab0133aede98d6829be8849a3fa2a947a94e239c0ce5a7591c875bc2e35a->enter($__internal_9f7fab0133aede98d6829be8849a3fa2a947a94e239c0ce5a7591c875bc2e35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_db21aa2505a73d0773e35dd56bb20f7c198e06b5c6308c62f14b1c19ddf6068d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_db21aa2505a73d0773e35dd56bb20f7c198e06b5c6308c62f14b1c19ddf6068d->enter($__internal_db21aa2505a73d0773e35dd56bb20f7c198e06b5c6308c62f14b1c19ddf6068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 544
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 546
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 547
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 550
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
            $__internal_db21aa2505a73d0773e35dd56bb20f7c198e06b5c6308c62f14b1c19ddf6068d->leave($__internal_db21aa2505a73d0773e35dd56bb20f7c198e06b5c6308c62f14b1c19ddf6068d_prof);

            
            $__internal_9f7fab0133aede98d6829be8849a3fa2a947a94e239c0ce5a7591c875bc2e35a->leave($__internal_9f7fab0133aede98d6829be8849a3fa2a947a94e239c0ce5a7591c875bc2e35a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 550,  1049 => 549,  1038 => 547,  1034 => 546,  1030 => 544,  1010 => 543,  974 => 537,  971 => 536,  952 => 534,  935 => 533,  931 => 531,  927 => 530,  923 => 529,  919 => 528,  915 => 527,  911 => 526,  907 => 525,  904 => 524,  902 => 523,  885 => 522,  867 => 520,  842 => 514,  837 => 512,  833 => 511,  830 => 510,  828 => 509,  807 => 507,  796 => 504,  762 => 472,  744 => 469,  727 => 468,  724 => 467,  722 => 466,  717 => 464,  712 => 462,  436 => 189,  392 => 147,  389 => 146,  386 => 145,  378 => 143,  372 => 140,  366 => 139,  363 => 138,  360 => 137,  356 => 136,  351 => 134,  347 => 132,  345 => 131,  340 => 129,  337 => 128,  331 => 125,  328 => 124,  326 => 123,  320 => 120,  316 => 119,  311 => 117,  308 => 116,  306 => 115,  297 => 108,  288 => 107,  274 => 103,  268 => 99,  266 => 98,  260 => 94,  254 => 91,  250 => 90,  246 => 88,  243 => 87,  240 => 86,  237 => 85,  231 => 84,  228 => 83,  223 => 82,  220 => 81,  218 => 80,  212 => 77,  208 => 76,  203 => 73,  201 => 72,  198 => 71,  191 => 67,  188 => 66,  186 => 65,  179 => 61,  171 => 56,  165 => 52,  162 => 51,  153 => 50,  139 => 45,  136 => 44,  127 => 43,  115 => 40,  112 => 39,  106 => 36,  99 => 32,  95 => 30,  93 => 29,  90 => 28,  84 => 25,  79 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  66 => 19,  63 => 18,  60 => 17,  51 => 16,  41 => 1,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% if colors is not defined %}
    {% set colors = {
        'default':                '#999',
        'section':                '#444',
        'event_listener':         '#00B8F5',
        'template':               '#66CC00',
        'doctrine':               '#FF6633',
    } %}
{% endif %}


{% block toolbar %}
    {% set has_time_events = collector.events|length > 0 %}

    {% set total_time = has_time_events ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = has_time_events and collector.duration > 1000 ? 'yellow' : '' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set has_time_events = collector.events|length > 0 %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% if has_time_events %}
                {% set subrequests_time = 0 %}
                {% for child in profile.children %}
                    {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
                {% endfor %}
            {% else %}
                {% set subrequests_time = 'n/a' %}
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3 class=\"dump-inline\">
            Sub-Request {{ profiler_dump(profile.getcollector('request').requestattributes.get('_controller')) }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}
        {% endfor %}
    {% endif %}

    <script>{% autoescape 'js' %}//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = {{ colors|json_encode|raw }},
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": {{ \"%F\"|format(collector.events.__section__.endtime) }},
            \"requests\": [
{{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}

{% if profile.children|length %}
                ,
{% for child in profile.children %}
{{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}
{% endfor %}
{% endif %}
            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>{% endautoescape %}</script>
{% endblock %}

{% macro dump_request_data(token, profile, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
                {
                    \"id\": \"{{ token }}\",
                    \"left\": {{ \"%F\"|format(events.__section__.origin - origin) }},
                    \"events\": [
{{ dump_events(events) }}
                    ]
                }
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
                        {
                            \"name\": \"{{ name }}\",
                            \"category\": \"{{ event.category }}\",
                            \"origin\": {{ \"%F\"|format(event.origin) }},
                            \"starttime\": {{ \"%F\"|format(event.starttime) }},
                            \"endtime\": {{ \"%F\"|format(event.endtime) }},
                            \"duration\": {{ \"%F\"|format(event.duration) }},
                            \"memory\": {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
                            \"periods\": [
                                {%- for period in event.periods -%}
                                    {\"start\": {{ \"%F\"|format(period.starttime) }}, \"end\": {{ \"%F\"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}
                                {%- endfor -%}
                            ]
                        }{{ loop.last ? '' : ',' }}
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(id, events, colors) %}
    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            {% for category, color in colors %}
                <span data-color=\"{{ color }}\">{{ category }}</span>
            {% endfor %}
        </div>
        <canvas width=\"680\" height=\"\" id=\"{{ id }}\" class=\"timeline\"></canvas>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/time.html.twig");
    }
}
