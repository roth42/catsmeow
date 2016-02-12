<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_5e2f6d387d79f0d8586e5e088f5dac648a9b106bf1076cf8bf4e6f8e4fee7342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($this->getAttribute($_collector_, "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute($_collector_, "controller", array()), "file", array()), $this->getAttribute($this->getAttribute($_collector_, "controller", array()), "line", array()));
            // line 7
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($this->getAttribute($_collector_, "controller", array()), "method", array())) {
                // line 8
                echo "                <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute($_collector_, "controller", array()), "class", array()));
                echo "</span>
                <span class=\"sf-toolbar-info-method\"";
                // line 9
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo " onclick=\"window.location='";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_link_, "js"), "html", null, true);
                    echo "';window.event.stopPropagation();return false;\"";
                }
                echo ">
                    ";
                // line 10
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "controller", array()), "method", array()), "html", null, true);
                echo "
                </span>
            ";
            } else {
                // line 13
                echo "                <span class=\"sf-toolbar-info-class\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo " onclick=\"window.location='";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_link_, "js"), "html", null, true);
                    echo "';window.event.stopPropagation();return false;\"";
                }
                echo ">";
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute($_collector_, "controller", array()), "class", array()));
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            <span class=\"sf-toolbar-info-class\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "controller", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_status_code_color"] = (((400 > $this->getAttribute($_collector_, "statuscode", array()))) ? ((((200 == $this->getAttribute($_collector_, "statuscode", array()))) ? ("green") : ("yellow"))) : ("red"));
        // line 20
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_route"] = (($this->getAttribute($_collector_, "route", array())) ? ($this->getAttribute($_collector_, "route", array())) : ("NONE"));
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 23
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\" title=\"";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statustext", array()), "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode", array()), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 24
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 25
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        ob_start();
        // line 29
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 31
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode", array()), "html", null, true);
        echo "</span> ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statustext", array()), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 35
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 39
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 43
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/request.html.twig", 47)->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 50
    public function block_menu($context, array $blocks = array())
    {
        // line 51
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 57
    public function block_panel($context, array $blocks = array())
    {
        // line 58
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 60
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestquery", array()), "all", array()))) {
            // line 61
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 61)->display(array("bag" => $this->getAttribute($_collector_, "requestquery", array())));
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 67
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 70
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestrequest", array()), "all", array()))) {
            // line 71
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 71)->display(array("bag" => $this->getAttribute($_collector_, "requestrequest", array())));
            // line 72
            echo "    ";
        } else {
            // line 73
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 77
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 80
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestattributes", array()), "all", array()))) {
            // line 81
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 81)->display(array("bag" => $this->getAttribute($_collector_, "requestattributes", array())));
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 87
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 90
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestcookies", array()), "all", array()))) {
            // line 91
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 91)->display(array("bag" => $this->getAttribute($_collector_, "requestcookies", array())));
            // line 92
            echo "    ";
        } else {
            // line 93
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 97
        echo "
    <h2>Request Headers</h2>

    ";
        // line 100
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 100)->display(array("bag" => $this->getAttribute($_collector_, "requestheaders", array())));
        // line 101
        echo "
    <h2>Request Content</h2>

    ";
        // line 104
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "content", array()) == false)) {
            // line 105
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute($_collector_, "content", array())) {
            // line 107
            echo "        <pre>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "content", array()), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 109
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 111
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 114
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 114)->display(array("bag" => $this->getAttribute($_collector_, "requestserver", array())));
        // line 115
        echo "
    <h2>Response Headers</h2>

    ";
        // line 118
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 118)->display(array("bag" => $this->getAttribute($_collector_, "responseheaders", array())));
        // line 119
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 122
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata", array()))) {
            // line 123
            echo "    ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 123)->display(array("data" => $this->getAttribute($_collector_, "sessionmetadata", array())));
            // line 124
            echo "    ";
        } else {
            // line 125
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 129
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 132
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionattributes", array()))) {
            // line 133
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 133)->display(array("data" => $this->getAttribute($_collector_, "sessionattributes", array())));
            // line 134
            echo "    ";
        } else {
            // line 135
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 139
        echo "
    <h2>Flashes</h2>

    ";
        // line 142
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "flashes", array()))) {
            // line 143
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 143)->display(array("data" => $this->getAttribute($_collector_, "flashes", array())));
            // line 144
            echo "    ";
        } else {
            // line 145
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 149
        echo "
    ";
        // line 150
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent", array())) {
            // line 151
            echo "        <h2><a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent", array()), "token", array()))), "html", null, true);
            echo "\">Parent request: ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_profile_, "parent", array()), "token", array()), "html", null, true);
            echo "</a></h2>

        ";
            // line 153
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 153)->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($_profile_, "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
            // line 154
            echo "    ";
        }
        // line 155
        echo "
    ";
        // line 156
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children", array()))) {
            // line 157
            echo "        <h2>Sub requests</h2>

        ";
            // line 159
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 160
                echo "            <h3><a href=\"";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token", array()))), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_child_, "token", array()), "html", null, true);
                echo "</a></h3>
            ";
                // line 161
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 161)->display(array("bag" => $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
                // line 162
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "    ";
        }
        // line 164
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 164,  457 => 163,  451 => 162,  448 => 161,  439 => 160,  434 => 159,  430 => 157,  427 => 156,  424 => 155,  421 => 154,  418 => 153,  408 => 151,  405 => 150,  402 => 149,  396 => 145,  393 => 144,  389 => 143,  386 => 142,  381 => 139,  375 => 135,  372 => 134,  368 => 133,  365 => 132,  360 => 129,  354 => 125,  351 => 124,  347 => 123,  344 => 122,  339 => 119,  336 => 118,  331 => 115,  328 => 114,  323 => 111,  319 => 109,  312 => 107,  308 => 105,  305 => 104,  300 => 101,  297 => 100,  292 => 97,  286 => 93,  283 => 92,  279 => 91,  276 => 90,  271 => 87,  265 => 83,  262 => 82,  258 => 81,  255 => 80,  250 => 77,  244 => 73,  241 => 72,  237 => 71,  234 => 70,  229 => 67,  223 => 63,  220 => 62,  216 => 61,  213 => 60,  209 => 58,  206 => 57,  198 => 51,  195 => 50,  189 => 47,  186 => 46,  175 => 43,  167 => 39,  159 => 35,  145 => 31,  141 => 29,  138 => 28,  135 => 27,  129 => 25,  124 => 24,  113 => 23,  110 => 22,  107 => 21,  103 => 20,  99 => 19,  96 => 18,  89 => 16,  86 => 15,  71 => 13,  64 => 10,  54 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set request_handler %}*/
/*         {% if collector.controller.class is defined %}*/
/*             {% set link = collector.controller.file|file_link(collector.controller.line) %}*/
/*             {% if collector.controller.method %}*/
/*                 <span class="sf-toolbar-info-class sf-toolbar-info-with-next-pointer">{{ collector.controller.class|abbr_class }}</span>*/
/*                 <span class="sf-toolbar-info-method"{% if link %} onclick="window.location='{{link|e('js')}}';window.event.stopPropagation();return false;"{% endif %}>*/
/*                     {{ collector.controller.method }}*/
/*                 </span>*/
/*             {% else %}*/
/*                 <span class="sf-toolbar-info-class"{% if link %} onclick="window.location='{{link|e('js')}}';window.event.stopPropagation();return false;"{% endif %}>{{ collector.controller.class|abbr_class }}</span>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <span class="sf-toolbar-info-class">{{ collector.controller }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/*     {% set request_status_code_color = (400 > collector.statuscode) ? ((200 == collector.statuscode) ? 'green' : 'yellow') : 'red'%}*/
/*     {% set request_route = collector.route ? collector.route : 'NONE' %}*/
/*     {% set icon %}*/
/*         <img width="28" height="28" alt="Request" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==" />*/
/*         <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}" title="{{ collector.statustext }}">{{ collector.statuscode }}</span>*/
/*         <span class="sf-toolbar-status sf-toolbar-info-piece-additional">{{ request_handler }}</span>*/
/*         <span class="sf-toolbar-info-piece-additional-detail">on <i>{{ request_route }}</i></span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         {% spaceless %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Status</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}">{{ collector.statuscode }}</span> {{ collector.statustext }}*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Controller</b>*/
/*                 {{ request_handler }}*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Route name</b>*/
/*                 <span>{{ request_route }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Has session</b>*/
/*                 <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>*/
/*             </div>*/
/*         {% endspaceless %}*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==" alt="Request"></span>*/
/*     <strong>Request</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Request GET Parameters</h2>*/
/* */
/*     {% if collector.requestquery.all|length %}*/
/*         {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestquery } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No GET parameters</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Request POST Parameters</h2>*/
/* */
/*     {% if collector.requestrequest.all|length %}*/
/*         {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestrequest } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No POST parameters</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Request Attributes</h2>*/
/* */
/*     {% if collector.requestattributes.all|length %}*/
/*         {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestattributes } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No attributes</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Request Cookies</h2>*/
/* */
/*     {% if collector.requestcookies.all|length %}*/
/*         {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestcookies } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No cookies</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Request Headers</h2>*/
/* */
/*     {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestheaders } only %}*/
/* */
/*     <h2>Request Content</h2>*/
/* */
/*     {% if collector.content == false %}*/
/*         <p><em>Request content not available (it was retrieved as a resource).</em></p>*/
/*     {% elseif collector.content %}*/
/*         <pre>{{ collector.content }}</pre>*/
/*     {% else %}*/
/*         <p><em>No content</em></p>*/
/*     {% endif %}*/
/* */
/*     <h2>Request Server Parameters</h2>*/
/* */
/*     {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestserver } only %}*/
/* */
/*     <h2>Response Headers</h2>*/
/* */
/*     {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.responseheaders } only %}*/
/* */
/*     <h2>Session Metadata</h2>*/
/* */
/*     {% if collector.sessionmetadata|length %}*/
/*     {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionmetadata } only %}*/
/*     {% else %}*/
/*     <p>*/
/*         <em>No session metadata</em>*/
/*     </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Session Attributes</h2>*/
/* */
/*     {% if collector.sessionattributes|length %}*/
/*         {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionattributes } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No session attributes</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Flashes</h2>*/
/* */
/*     {% if collector.flashes|length %}*/
/*         {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.flashes } only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No flashes</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     {% if profile.parent %}*/
/*         <h2><a href="{{ path('_profiler', { 'token': profile.parent.token }) }}">Parent request: {{ profile.parent.token }}</a></h2>*/
/* */
/*         {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': profile.parent.getcollector('request').requestattributes } only %}*/
/*     {% endif %}*/
/* */
/*     {% if profile.children|length %}*/
/*         <h2>Sub requests</h2>*/
/* */
/*         {% for child in profile.children %}*/
/*             <h3><a href="{{ path('_profiler', { 'token': child.token }) }}">{{ child.token }}</a></h3>*/
/*             {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': child.getcollector('request').requestattributes } only %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
