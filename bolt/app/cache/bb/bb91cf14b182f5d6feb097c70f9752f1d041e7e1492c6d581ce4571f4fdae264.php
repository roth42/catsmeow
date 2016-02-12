<?php

/* @BoltProfiler/toolbar/twig.html.twig */
class __TwigTemplate_b7ce08da9374e49954a04babf1b5e752e20f3d173013b714a757d3d6ce1a9dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@BoltProfiler/toolbar/twig.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "displayInWdt", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span> Twig</span>
            <span class=\"sf-toolbar-status\">";
            // line 8
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_collector_, "templates", array())), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "
            ";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ( !twig_test_empty($this->getAttribute($_collector_, "chosentemplate", array()))) {
                // line 13
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Primary template:</b>
                    <span>";
                // line 15
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "chosentemplate", array()), "html", null, true);
                echo "
                        ";
                // line 16
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if ( !twig_test_empty($this->getAttribute($_collector_, "templateerror", array()))) {
                    // line 17
                    echo "                            ";
                    if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "templateerror", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 19
                echo "                    </span>
                </div>
            ";
            }
            // line 22
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Used templates:</b>
                    <span>
                        ";
            // line 26
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "templates", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 27
                echo "                            ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index", array()), "html", null, true);
                echo ". ";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                echo twig_escape_filter($this->env, $_template_, "html", null, true);
                echo "<br>
                        ";
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
                // line 29
                echo "                            None. (probably cached page)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </span>
            </div>

            ";
            // line 71
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 73
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BoltProfiler/toolbar/twig.html.twig", 73)->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 74
            echo "    ";
        }
    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        // line 78
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 84
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_collector_, "extensions", array())), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 89
    public function block_panel($context, array $blocks = array())
    {
        // line 90
        echo "    <h2>Twig Templates</h2>
    <table>
        <tr>
            <th>Template</th>
            <th>Parameters</th>
        </tr>
        ";
        // line 96
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "templates", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 97
            echo "        <tr>
            <th>
                ";
            // line 99
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if ($this->getAttribute($_template_, "path", array(), "any", true, true)) {
                // line 100
                echo "                    <a href=\"";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('code')->getFileLink($this->getAttribute($_template_, "path", array()), 1), "html", null, true);
                echo "\">
                        ";
                // line 101
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_template_, "name", array()), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 104
                echo "                    ";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                echo twig_escape_filter($this->env, $_template_, "html", null, true);
                echo "
                ";
            }
            // line 106
            echo "            </th>
            <td>
                ";
            // line 108
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if ($this->getAttribute($_template_, "parameters", array(), "any", true, true)) {
                // line 109
                echo "                    ";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_template_, "parameters", array()));
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
                foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                    // line 110
                    echo "                        ";
                    if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                    if (($this->getAttribute($_metadata_, "type", array()) == "boolean")) {
                        // line 111
                        echo "                            ";
                        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                        $context["value"] = (($this->getAttribute($_metadata_, "value", array())) ? ("true") : ("false"));
                        // line 112
                        echo "                        ";
                    } elseif (($this->getAttribute($_metadata_, "type", array()) == "string")) {
                        // line 113
                        echo "                            ";
                        $context["maxStrLength"] = 40;
                        // line 114
                        echo "                            ";
                        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                        $context["value"] = $this->getAttribute($_metadata_, "value", array());
                        // line 115
                        echo "                            ";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (isset($context["maxStrLength"])) { $_maxStrLength_ = $context["maxStrLength"]; } else { $_maxStrLength_ = null; }
                        if ((twig_length_filter($this->env, $_value_) > $_maxStrLength_)) {
                            // line 116
                            echo "                                ";
                            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                            if (isset($context["maxStrLength"])) { $_maxStrLength_ = $context["maxStrLength"]; } else { $_maxStrLength_ = null; }
                            $context["value"] = (twig_slice($this->env, $_value_, 0, $_maxStrLength_) . "…");
                            // line 117
                            echo "                            ";
                        }
                        // line 118
                        echo "                            ";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        $context["value"] = (("\"" . $_value_) . "\"");
                        // line 119
                        echo "                        ";
                    } else {
                        // line 120
                        echo "                            ";
                        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                        $context["value"] = $this->getAttribute($_metadata_, "value", array());
                        // line 121
                        echo "                        ";
                    }
                    // line 122
                    echo "                        <code>
                            ";
                    // line 123
                    if (isset($context["parameter"])) { $_parameter_ = $context["parameter"]; } else { $_parameter_ = null; }
                    echo twig_escape_filter($this->env, $_parameter_, "html", null, true);
                    echo ": <em style=\"color: #aaa\">";
                    if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_metadata_, "type", array()), "html", null, true);
                    echo "</em>
                            <span style=\"color: #009E00\">";
                    // line 124
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</span>
                        </code>
                        ";
                    // line 126
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ( !$this->getAttribute($_loop_, "last", array())) {
                        echo "<br />";
                    }
                    // line 127
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                ";
            }
            // line 129
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </table>
    <br />
    <h2>Twig Extensions</h2>
    <table>
        <tr>
            <th>Extension</th>
            <th>Class</th>
        </tr>
        ";
        // line 140
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "extensions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 141
            echo "            <tr>
                <th>";
            // line 142
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "name", array()), "html", null, true);
            echo "</th>
                <td><code>";
            // line 143
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "class", array()), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "    </table>

    <h2>Twig Tests available</h2>
    <table>
        <tr>
            <th>Test</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 155
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "tests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 156
            echo "            <tr>
                <th>";
            // line 157
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_test_, "name", array()), "html", null, true);
            echo "</th>
                <td><code>";
            // line 158
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_test_, "call", array()), "html", null, true);
            echo "</code></td>
                <td>";
            // line 159
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_test_, "extension", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "    </table>

    <h2>Twig Filters available</h2>
    <table>
        <tr>
            <th>Filter</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 171
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "filters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 172
            echo "            <tr>
                <th>";
            // line 173
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "name", array()), "html", null, true);
            echo "</th>
                <td><code>";
            // line 174
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "call", array()), "html", null, true);
            echo "</code></td>
                <td>";
            // line 175
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "extension", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "    </table>

    <h2>Twig Functions available</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 187
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "functions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 188
            echo "            <tr>
                <th>";
            // line 189
            if (isset($context["function"])) { $_function_ = $context["function"]; } else { $_function_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_function_, "name", array()), "html", null, true);
            echo "</th>
                <td><code>";
            // line 190
            if (isset($context["function"])) { $_function_ = $context["function"]; } else { $_function_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_function_, "call", array()), "html", null, true);
            echo "</code></td>
                <td>";
            // line 191
            if (isset($context["function"])) { $_function_ = $context["function"]; } else { $_function_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_function_, "extension", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 194,  473 => 191,  468 => 190,  463 => 189,  460 => 188,  455 => 187,  444 => 178,  434 => 175,  429 => 174,  424 => 173,  421 => 172,  416 => 171,  405 => 162,  395 => 159,  390 => 158,  385 => 157,  382 => 156,  377 => 155,  366 => 146,  356 => 143,  351 => 142,  348 => 141,  343 => 140,  333 => 132,  325 => 129,  322 => 128,  308 => 127,  303 => 126,  297 => 124,  289 => 123,  286 => 122,  283 => 121,  279 => 120,  276 => 119,  272 => 118,  269 => 117,  264 => 116,  259 => 115,  255 => 114,  252 => 113,  249 => 112,  245 => 111,  241 => 110,  222 => 109,  219 => 108,  215 => 106,  208 => 104,  201 => 101,  195 => 100,  192 => 99,  188 => 97,  183 => 96,  175 => 90,  172 => 89,  163 => 84,  155 => 78,  152 => 77,  147 => 74,  143 => 73,  139 => 71,  134 => 31,  127 => 29,  107 => 27,  88 => 26,  82 => 22,  77 => 19,  70 => 17,  67 => 16,  62 => 15,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  43 => 8,  39 => 6,  36 => 5,  32 => 4,  29 => 3,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.displayInWdt %}*/
/*         {% set icon %}*/
/*             <img height="28" alt="Twig" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC"/>*/
/*             <span> Twig</span>*/
/*             <span class="sf-toolbar-status">{{ collector.templates|length }}</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/* */
/*             {% if collector.chosentemplate is not empty %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Primary template:</b>*/
/*                     <span>{{ collector.chosentemplate }}*/
/*                         {% if collector.templateerror is not empty %}*/
/*                             {{ collector.templateerror }}*/
/*                         {% endif %}*/
/*                     </span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Used templates:</b>*/
/*                     <span>*/
/*                         {% for template in collector.templates %}*/
/*                             {{loop.index }}. {{template}}<br>*/
/*                         {% else %}*/
/*                             None. (probably cached page)*/
/*                         {% endfor %}*/
/*                     </span>*/
/*             </div>*/
/* */
/*             {# Bob notes: This isn't really that interesting here, is it? :-)*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Template{{ 1 == collector.templates|length ? ':' : 's'}}</b>*/
/*                 <span>*/
/*                     {% if 1 == collector.templates|length %}*/
/*                         {% set template = collector.templates|first %}*/
/*                         {% if template.path %}*/
/*                             <a class="sf-toolbar-info-method" href="{{ template.path|file_link(1) }}">*/
/*                                 {{ template.name }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             {{ template.name }}*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {{ collector.templates|length }}*/
/*                     {% endif %}*/
/*                 </span>*/
/*             </div>*/
/* */
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Extensions</b>*/
/*                 <span>{{ collector.extensions|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Tests</b>*/
/*                 <span>{{ collector.tests|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Filters</b>*/
/*                 <span>{{ collector.filters|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Functions</b>*/
/*                 <span>{{ collector.functions|length }}</span>*/
/*             </div>*/
/*             #}*/
/* */
/*         {% endset %}*/
/*         {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">*/
/*             <img width=30 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC" />*/
/*         </span>*/
/*         <strong>Twig</strong>*/
/*         <span class="count">*/
/*             <span>{{ collector.extensions|length }}</span>*/
/*         </span>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Twig Templates</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Template</th>*/
/*             <th>Parameters</th>*/
/*         </tr>*/
/*         {% for template in collector.templates %}*/
/*         <tr>*/
/*             <th>*/
/*                 {% if template.path is defined %}*/
/*                     <a href="{{ template.path|file_link(1) }}">*/
/*                         {{ template.name }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     {{ template }}*/
/*                 {% endif %}*/
/*             </th>*/
/*             <td>*/
/*                 {% if template.parameters is defined %}*/
/*                     {% for parameter, metadata in template.parameters %}*/
/*                         {% if metadata.type == 'boolean' %}*/
/*                             {% set value = metadata.value ? 'true' : 'false' %}*/
/*                         {% elseif metadata.type == 'string' %}*/
/*                             {% set maxStrLength = 40 %}*/
/*                             {% set value = metadata.value %}*/
/*                             {% if value|length > maxStrLength %}*/
/*                                 {% set value = value|slice(0, maxStrLength) ~ '…' %}*/
/*                             {% endif %}*/
/*                             {% set value = '"' ~ value ~ '"' %}*/
/*                         {% else %}*/
/*                             {% set value = metadata.value %}*/
/*                         {% endif %}*/
/*                         <code>*/
/*                             {{ parameter }}: <em style="color: #aaa">{{ metadata.type }}</em>*/
/*                             <span style="color: #009E00">{{ value }}</span>*/
/*                         </code>*/
/*                         {% if not loop.last %}<br />{% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <br />*/
/*     <h2>Twig Extensions</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Extension</th>*/
/*             <th>Class</th>*/
/*         </tr>*/
/*         {% for extension in collector.extensions %}*/
/*             <tr>*/
/*                 <th>{{ extension.name }}</th>*/
/*                 <td><code>{{ extension.class }}</code></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     <h2>Twig Tests available</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Test</th>*/
/*             <th>Call</th>*/
/*             <th>Extension</th>*/
/*         </tr>*/
/*         {% for test in collector.tests %}*/
/*             <tr>*/
/*                 <th>{{ test.name }}</th>*/
/*                 <td><code>{{ test.call }}</code></td>*/
/*                 <td>{{ test.extension }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     <h2>Twig Filters available</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Filter</th>*/
/*             <th>Call</th>*/
/*             <th>Extension</th>*/
/*         </tr>*/
/*         {% for filter in collector.filters %}*/
/*             <tr>*/
/*                 <th>{{ filter.name }}</th>*/
/*                 <td><code>{{ filter.call }}</code></td>*/
/*                 <td>{{ filter.extension }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     <h2>Twig Functions available</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Function</th>*/
/*             <th>Call</th>*/
/*             <th>Extension</th>*/
/*         </tr>*/
/*         {% for function in collector.functions %}*/
/*             <tr>*/
/*                 <th>{{ function.name }}</th>*/
/*                 <td><code>{{ function.call }}</code></td>*/
/*                 <td>{{ function.extension }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
