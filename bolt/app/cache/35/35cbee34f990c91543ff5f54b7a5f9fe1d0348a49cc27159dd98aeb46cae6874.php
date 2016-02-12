<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_951788645172b79d2d0b8e536e8f5c2a007cc5947a8ce9934111e07a336c9483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
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
        // line 3
        $context["__internal_09ea65381a434ae9e4c3fcefde61b07c9e50e8da7e64b92739eb174330496141"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "calledlisteners", array()))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "calledlisteners", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "event", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo $context["__internal_09ea65381a434ae9e4c3fcefde61b07c9e50e8da7e64b92739eb174330496141"]->getdisplay_listener($_listener_);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "notcalledlisteners", array())) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["listeners"] = $this->getAttribute($_collector_, "notcalledlisteners", array());
            // line 48
            echo "            ";
            if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($_listeners_)));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_listeners_, $_listener_, array(), "array"), "event", array()), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $context["__internal_09ea65381a434ae9e4c3fcefde61b07c9e50e8da7e64b92739eb174330496141"]->getdisplay_listener($this->getAttribute($_listeners_, $_listener_, array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
    }

    // line 69
    public function getdisplay_listener($__listener__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $__listener__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            if (($this->getAttribute($_listener_, "type", array()) == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif (($this->getAttribute($_listener_, "type", array()) == "Function")) {
                // line 73
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file", array()), $this->getAttribute($_listener_, "line", array()));
                // line 74
                echo "        ";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function", array()), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function", array()), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif (($this->getAttribute($_listener_, "type", array()) == "Method")) {
                // line 76
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file", array()), $this->getAttribute($_listener_, "line", array()));
                // line 77
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_listener_, "class", array()));
                echo "::";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method", array()), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method", array()), "html", null, true);
                }
                // line 78
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
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 78,  211 => 77,  207 => 76,  204 => 75,  189 => 74,  185 => 73,  181 => 71,  177 => 70,  165 => 69,  150 => 56,  146 => 54,  135 => 51,  129 => 50,  126 => 49,  120 => 48,  117 => 47,  110 => 42,  107 => 41,  101 => 37,  91 => 34,  86 => 33,  83 => 32,  78 => 31,  69 => 24,  66 => 23,  57 => 16,  51 => 14,  47 => 13,  44 => 12,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% from _self import display_listener %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==" alt="Events"></span>*/
/*     <strong>Events</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.calledlisteners|length %}*/
/*         {{ block('panelContent') }}*/
/*     {% else %}*/
/*         <h2>Events</h2>*/
/*         <p>*/
/*             <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panelContent %}*/
/*     <h2>Called Listeners</h2>*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <th>Event name</th>*/
/*             <th>Listener</th>*/
/*         </tr>*/
/*         {% for listener in collector.calledlisteners %}*/
/*             <tr>*/
/*                 <td><code>{{ listener.event }}</code></td>*/
/*                 <td><code>{{ display_listener(listener) }}</code></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     <h2>Not Called Listeners</h2>*/
/* */
/*     {% if collector.notcalledlisteners %}*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Event name</th>*/
/*                 <th>Listener</th>*/
/*             </tr>*/
/*             {% set listeners = collector.notcalledlisteners %}*/
/*             {% for listener in listeners|keys|sort %}*/
/*                 <tr>*/
/*                     <td><code>{{ listeners[listener].event }}</code></td>*/
/*                     <td><code>{{ display_listener(listeners[listener]) }}</code></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% else %}*/
/*         <p>*/
/*             <strong>No uncalled listeners</strong>.*/
/*         </p>*/
/*         <p>*/
/* */
/*             All listeners were called for this request or an error occurred*/
/*             when trying to collect uncalled listeners (in which case check the*/
/*             logs to get more information).*/
/* */
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% macro display_listener(listener) %}*/
/*     {% if listener.type == "Closure" %}*/
/*         Closure*/
/*     {% elseif listener.type == "Function" %}*/
/*         {% set link = listener.file|file_link(listener.line) %}*/
/*         {% if link %}<a href="{{ link }}">{{ listener.function }}</a>{% else %}{{ listener.function }}{% endif %}*/
/*     {% elseif listener.type == "Method" %}*/
/*         {% set link = listener.file|file_link(listener.line) %}*/
/*         {{ listener.class|abbr_class }}::{% if link %}<a href="{{ link }}">{{ listener.method }}</a>{% else %}{{ listener.method }}{% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
