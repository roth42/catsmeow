<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_5c2324a3bddce456e415f76196d2cbecb21b656a597b15b5fc58477e68015687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((($this->getAttribute($_collector_, "counterrors", array()) || $this->getAttribute($_collector_, "countdeprecations", array())) || $this->getAttribute($_collector_, "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors", array())) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute($_collector_, "countdeprecations", array())) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = (($this->getAttribute($_collector_, "counterrors", array()) + $this->getAttribute($_collector_, "countdeprecations", array())) + $this->getAttribute($_collector_, "countscreams", array()));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                if (isset($context["status_color"])) { $_status_color_ = $context["status_color"]; } else { $_status_color_ = null; }
                echo twig_escape_filter($this->env, $_status_color_, "html", null, true);
            }
            echo "\">";
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors", array())) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countdeprecations", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countscreams", array())) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countscreams", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/logger.html.twig", 37)->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 45
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((($this->getAttribute($_collector_, "counterrors", array()) || $this->getAttribute($_collector_, "countdeprecations", array())) || $this->getAttribute($_collector_, "countscreams", array()))) {
            // line 46
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = (($this->getAttribute($_collector_, "counterrors", array()) + $this->getAttribute($_collector_, "countdeprecations", array())) + $this->getAttribute($_collector_, "countscreams", array()));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($_request_, "query", array()), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "priorities", array()));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (( !$_priority_ && ($_value_ > 100))) {
                // line 70
                echo "                                ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["priority"] = $_value_;
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name", array()), "html", null, true);
            echo " (";
            if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_level_, "count", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "countdeprecations", array())) {
            // line 75
            echo "                            ";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            if ( !$_priority_) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((("-100" == $_priority_)) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs", array())) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context["log_loop_index"] = 0;
            // line 92
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs", array()));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 93
                echo "                ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context["is_deprecation"] = (($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) && ((twig_constant("E_DEPRECATED") == $this->getAttribute($this->getAttribute($_log_, "context", array()), "type", array())) || (twig_constant("E_USER_DEPRECATED") == $this->getAttribute($this->getAttribute($_log_, "context", array()), "type", array()))));
                // line 94
                echo "                ";
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (isset($context["is_deprecation"])) { $_is_deprecation_ = $context["is_deprecation"]; } else { $_is_deprecation_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (((($_priority_ == "-100")) ? ($_is_deprecation_) : (($this->getAttribute($_log_, "priority", array()) >= $_priority_)))) {
                    // line 95
                    echo "                    ";
                    if (isset($context["log_loop_index"])) { $_log_loop_index_ = $context["log_loop_index"]; } else { $_log_loop_index_ = null; }
                    $context["log_loop_index"] = ($_log_loop_index_ + 1);
                    // line 96
                    echo "                    <li class=\"";
                    if (isset($context["log_loop_index"])) { $_log_loop_index_ = $context["log_loop_index"]; } else { $_log_loop_index_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_log_loop_index_), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if ($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    } elseif (($this->getAttribute($_log_, "priority", array()) >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority", array()) >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                        ";
                    // line 97
                    if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (isset($context["is_deprecation"])) { $_is_deprecation_ = $context["is_deprecation"]; } else { $_is_deprecation_ = null; }
                    echo $_logger_->getdisplay_message($this->getAttribute($_loop_, "index", array()), $_log_, $_is_deprecation_);
                    echo "
                    </li>
                ";
                }
                // line 100
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 101
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </ul>
    ";
        } else {
            // line 105
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 112
    public function getdisplay_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "    ";
            if (isset($context["is_deprecation"])) { $_is_deprecation_ = $context["is_deprecation"]; } else { $_is_deprecation_ = null; }
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, (($_is_deprecation_) ? ("DEPRECATED") : ($this->getAttribute($_log_, "priorityName", array()))), "html", null, true);
            echo " - ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message", array()), "html", null, true);
            echo "

    ";
            // line 115
            if (isset($context["is_deprecation"])) { $_is_deprecation_ = $context["is_deprecation"]; } else { $_is_deprecation_ = null; }
            if ($_is_deprecation_) {
                // line 116
                echo "        ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context["stack"] = (($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 117
                echo "        ";
                if (isset($context["log_index"])) { $_log_index_ = $context["log_index"]; } else { $_log_index_ = null; }
                $context["id"] = ("sf-call-stack-" . $_log_index_);
                // line 118
                echo "
        ";
                // line 119
                if (isset($context["stack"])) { $_stack_ = $context["stack"]; } else { $_stack_ = null; }
                if ($_stack_) {
                    // line 120
                    echo "            <a href=\"#\" onclick=\"Sfjs.toggle('";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "', document.getElementById('";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-on'), document.getElementById('";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-off')); return false;\">
                <img class=\"toggle\" id=\"";
                    // line 121
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"";
                    // line 122
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        ";
                }
                // line 125
                echo "
        ";
                // line 126
                if (isset($context["stack"])) { $_stack_ = $context["stack"]; } else { $_stack_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($_stack_);
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                    if (($_index_ > 1)) {
                        // line 127
                        echo "            ";
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (($_index_ == 2)) {
                            // line 128
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                            echo twig_escape_filter($this->env, $_id_, "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 130
                        echo "            ";
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if ($this->getAttribute($_call_, "class", array(), "any", true, true)) {
                            // line 131
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($_call_, "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function", array())));
                            // line 132
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "function", array(), "any", true, true)) {
                            // line 133
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function", array()));
                            // line 134
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "file", array(), "any", true, true)) {
                            // line 135
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->getAttribute($_call_, "file", array());
                            // line 136
                            echo "            ";
                        } else {
                            // line 137
                            echo "                ";
                            $context["from"] = "-";
                            // line 138
                            echo "            ";
                        }
                        // line 139
                        echo "
            <li>Called from ";
                        // line 140
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if (isset($context["from"])) { $_from_ = $context["from"]; } else { $_from_ = null; }
                        echo ((($this->getAttribute($_call_, "file", array(), "any", true, true) && $this->getAttribute($_call_, "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($_call_, "file", array()), $this->getAttribute($_call_, "line", array()), $_from_)) : ($_from_));
                        echo "</li>

            ";
                        // line 142
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (isset($context["stack"])) { $_stack_ = $context["stack"]; } else { $_stack_ = null; }
                        if (($_index_ == (twig_length_filter($this->env, $_stack_) - 1))) {
                            // line 143
                            echo "                </ul>
            ";
                        }
                        // line 145
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "    ";
            } else {
                // line 147
                echo "        ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_log_, "context", array())))) {
                    // line 148
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 150
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_log_, "context", array()), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 153
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 153,  514 => 150,  510 => 148,  506 => 147,  503 => 146,  496 => 145,  492 => 143,  488 => 142,  481 => 140,  478 => 139,  475 => 138,  472 => 137,  469 => 136,  465 => 135,  462 => 134,  458 => 133,  455 => 132,  451 => 131,  447 => 130,  440 => 128,  436 => 127,  429 => 126,  426 => 125,  419 => 122,  414 => 121,  402 => 120,  399 => 119,  396 => 118,  392 => 117,  388 => 116,  385 => 115,  374 => 113,  360 => 112,  352 => 105,  348 => 103,  341 => 101,  328 => 100,  318 => 97,  304 => 96,  300 => 95,  294 => 94,  290 => 93,  270 => 92,  268 => 91,  265 => 90,  262 => 89,  251 => 80,  241 => 78,  238 => 77,  235 => 76,  231 => 75,  227 => 74,  207 => 72,  204 => 71,  200 => 70,  195 => 69,  189 => 68,  178 => 58,  175 => 57,  171 => 55,  168 => 54,  163 => 51,  156 => 48,  153 => 47,  149 => 46,  146 => 45,  141 => 42,  138 => 41,  133 => 38,  129 => 37,  126 => 36,  119 => 33,  115 => 31,  111 => 30,  104 => 27,  100 => 25,  96 => 24,  89 => 21,  85 => 19,  81 => 18,  78 => 17,  65 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as logger %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set icon %}*/
/*             <img width="15" height="28" alt="Logs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==" />*/
/*             {% if collector.counterrors %}*/
/*                 {% set status_color = "red" %}*/
/*             {% elseif collector.countdeprecations %}*/
/*                 {% set status_color = "yellow" %}*/
/*             {% endif %}*/
/*             {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*             <span class="sf-toolbar-status{% if status_color is defined %} sf-toolbar-status-{{ status_color }}{% endif %}">{{ error_count }}</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             {% if collector.counterrors %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Errors</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-red">{{ collector.counterrors }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countdeprecations %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Deprecated Calls</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-yellow">{{ collector.countdeprecations }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countscreams %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Silenced Errors</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status">{{ collector.countscreams }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endset %}*/
/*         {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC" alt="Logger"></span>*/
/*     <strong>Logs</strong>*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*         <span class="count">*/
/*             <span>{{ error_count }}</span>*/
/*         </span>*/
/*     {% endif %}*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Logs</h2>*/
/* */
/*     {% set priority = request.query.get('priority', 0) %}*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <th>Filter</th>*/
/*             <td>*/
/*                 <form id="priority-form" action="" method="get" style="display: inline">*/
/*                     <input type="hidden" name="panel" value="logger">*/
/*                     <label for="priority">Min. Priority</label>*/
/*                     <select id="priority" name="priority" onchange="document.getElementById('priority-form').submit(); ">*/
/*                         {# values < 0 are custom levels #}*/
/*                         {% for value, level in collector.priorities %}*/
/*                             {% if not priority and value > 100 %}*/
/*                                 {% set priority = value %}*/
/*                             {% endif %}*/
/*                             <option value="{{ value }}"{{ value == priority ? ' selected' : '' }}>{{ level.name }} ({{ level.count }})</option>*/
/*                         {% endfor %}*/
/*                         {% if collector.countdeprecations %}*/
/*                             {% if not priority %}*/
/*                                 {% set priority = "-100" %}*/
/*                             {% endif %}*/
/*                             <option value="-100"{{ "-100" == priority ? ' selected' : '' }}>DEPRECATION only ({{ collector.countdeprecations }})</option>*/
/*                         {% endif %}*/
/*                     </select>*/
/*                     <noscript>*/
/*                         <input type="submit" value="refresh">*/
/*                     </noscript>*/
/*                 </form>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% if collector.logs %}*/
/*         <ul class="alt">*/
/*             {% set log_loop_index = 0 %}*/
/*             {% for log in collector.logs %}*/
/*                 {% set is_deprecation = log.context.level is defined and log.context.type is defined and (constant('E_DEPRECATED') == log.context.type or constant('E_USER_DEPRECATED') == log.context.type) %}*/
/*                 {% if priority == '-100' ? is_deprecation : log.priority >= priority %}*/
/*                     {% set log_loop_index = log_loop_index + 1 %}*/
/*                     <li class="{{ cycle(['odd', 'even'], log_loop_index) }}{% if log.context.scream is defined %} scream{% elseif log.priority >= 400 %} error{% elseif log.priority >= 300 %} warning{% endif %}">*/
/*                         {{ logger.display_message(loop.index, log, is_deprecation) }}*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <li><em>No logs available for this priority.</em></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No logs available.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% macro display_message(log_index, log, is_deprecation) %}*/
/*     {{ is_deprecation ? 'DEPRECATED' : log.priorityName }} - {{ log.message }}*/
/* */
/*     {% if is_deprecation %}*/
/*         {% set stack = log.context.stack|default([]) %}*/
/*         {% set id = 'sf-call-stack-' ~ log_index %}*/
/* */
/*         {% if stack %}*/
/*             <a href="#" onclick="Sfjs.toggle('{{ id }}', document.getElementById('{{ id }}-on'), document.getElementById('{{ id }}-off')); return false;">*/
/*                 <img class="toggle" id="{{ id }}-off" alt="-" src="data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=" style="display:none">*/
/*                 <img class="toggle" id="{{ id }}-on" alt="+" src="data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7" style="display:inline">*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% for index, call in stack if index > 1 %}*/
/*             {% if index == 2 %}*/
/*                 <ul class="sf-call-stack" id="{{ id }}" style="display: none">*/
/*             {% endif %}*/
/*             {% if call.class is defined %}*/
/*                 {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}*/
/*             {% elseif call.function is defined %}*/
/*                 {% set from = call.function|abbr_method %}*/
/*             {% elseif call.file is defined %}*/
/*                 {% set from = call.file %}*/
/*             {% else %}*/
/*                 {% set from = '-' %}*/
/*             {% endif %}*/
/* */
/*             <li>Called from {{ call.file is defined and call.line is defined ? call.file|format_file(call.line, from) : from|raw }}</li>*/
/* */
/*             {% if index == stack|length - 1 %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% if log.context is defined and log.context is not empty %}*/
/*             <br />*/
/*             <small>*/
/*                 <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256) }}*/
/*             </small>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
