<?php

/* nav/_macros.twig */
class __TwigTemplate_29a7eb717a46e1d5930a2798eb669d5951c5c6e94b73eddba0ca11bc0281ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_b565f3d4d7bb93ddc43b4ce69aaa72319a001e2acfa9b9af9e2685db72ed33c0"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo $context["__internal_b565f3d4d7bb93ddc43b4ce69aaa72319a001e2acfa9b9af9e2685db72ed33c0"]->getlabel($_icon_, $_title_);
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_972dc923856500356f95cc57d5ec9e986105ca26d38cf177edeb35d6c6c90a89"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (isset($context["subitems"])) { $_subitems_ = $context["subitems"]; } else { $_subitems_ = null; }
            if (twig_test_empty($_subitems_)) {
                // line 27
                echo "        ";
                if (isset($context["popoveritems"])) { $_popoveritems_ = $context["popoveritems"]; } else { $_popoveritems_ = null; }
                $context["subitems"] = $_popoveritems_;
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            if (isset($context["subitems"])) { $_subitems_ = $context["subitems"]; } else { $_subitems_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_subitems_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((($_item_ != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($_item_, "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    if (isset($context["allowedamount"])) { $_allowedamount_ = $context["allowedamount"]; } else { $_allowedamount_ = null; }
                    $context["allowedamount"] = ($_allowedamount_ + 1);
                    // line 38
                    echo "            ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context["allowedsingle"] = $_item_;
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            if (isset($context["wide"])) { $_wide_ = $context["wide"]; } else { $_wide_ = null; }
            if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
            $context["class"] = trim(((($_wide_) ? (" menu-pop-wide") : ("")) . (($_active_) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if (isset($context["allowedany"])) { $_allowedany_ = $context["allowedany"]; } else { $_allowedany_ = null; }
            if ($_allowedany_) {
                // line 46
                echo "        <li";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo " class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if (isset($context["allowedamount"])) { $_allowedamount_ = $context["allowedamount"]; } else { $_allowedamount_ = null; }
                if (isset($context["force_submenu"])) { $_force_submenu_ = $context["force_submenu"]; } else { $_force_submenu_ = null; }
                if ((($_allowedamount_ == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter($_force_submenu_, false)) : (false)))) {
                    // line 48
                    echo "                ";
                    if (isset($context["allowedsingle"])) { $_allowedsingle_ = $context["allowedsingle"]; } else { $_allowedsingle_ = null; }
                    $context["item"] = $_allowedsingle_;
                    // line 49
                    echo "                <a href=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo $context["__internal_972dc923856500356f95cc57d5ec9e986105ca26d38cf177edeb35d6c6c90a89"]->geticon($this->getAttribute($_item_, "icon", array()), "icon");
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo (($this->getAttribute($_item_, "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if (isset($context["popoveritems"])) { $_popoveritems_ = $context["popoveritems"]; } else { $_popoveritems_ = null; }
                    if ($_popoveritems_) {
                        if (isset($context["popoveritems"])) { $_popoveritems_ = $context["popoveritems"]; } else { $_popoveritems_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_popoveritems_, 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo $context["__internal_972dc923856500356f95cc57d5ec9e986105ca26d38cf177edeb35d6c6c90a89"]->getlabel($_icon_, $_label_);
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    if (isset($context["popoveritems"])) { $_popoveritems_ = $context["popoveritems"]; } else { $_popoveritems_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($_popoveritems_);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (($_item_ == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($_item_, "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if (isset($context["divider"])) { $_divider_ = $context["divider"]; } else { $_divider_ = null; }
                            if ($_divider_) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo $context["__internal_972dc923856500356f95cc57d5ec9e986105ca26d38cf177edeb35d6c6c90a89"]->geticon($this->getAttribute($_item_, "icon", array()));
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo (($this->getAttribute($_item_, "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            $context["__internal_eda27fd92dc41589051ddb85bf88f969f5148ca021d9f7b6649ed790503fe736"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_eda27fd92dc41589051ddb85bf88f969f5148ca021d9f7b6649ed790503fe736"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_eda27fd92dc41589051ddb85bf88f969f5148ca021d9f7b6649ed790503fe736"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    ";
            $context["__internal_eca0ef19e1e0844c47d841e2dca804a474616bdf645b2387f63940dc7d5c04b6"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (isset($context["pathname"])) { $_pathname_ = $context["pathname"]; } else { $_pathname_ = null; }
            if (($_pathname_ == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
            if ($_active_) {
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                $context["class"] = ($_class_ . " active");
            }
            // line 105
            echo "    ";
            if (isset($context["divider"])) { $_divider_ = $context["divider"]; } else { $_divider_ = null; }
            if ($_divider_) {
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                $context["class"] = ($_class_ . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            if ($_class_) {
                echo " class=\"";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, trim($_class_), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            if (isset($context["pathname"])) { $_pathname_ = $context["pathname"]; } else { $_pathname_ = null; }
            echo $this->env->getExtension('routing')->getPath($_pathname_);
            echo "\">";
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $context["__internal_eca0ef19e1e0844c47d841e2dca804a474616bdf645b2387f63940dc7d5c04b6"]->getlabel($_icon_, $_label_);
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    ";
            $context["__internal_ec3b196bdbc881043a62907c43af714465dd203415a5efd0db0e5efaf09b4465"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            if (twig_test_empty($_icon_)) {
                // line 120
                echo "        <i class=\"icon\">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, twig_slice($this->env, $_label_, 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif (($_icon_ != "-")) {
                // line 122
                echo "        ";
                if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
                echo $context["__internal_ec3b196bdbc881043a62907c43af714465dd203415a5efd0db0e5efaf09b4465"]->geticon($_icon_, true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $_label_;
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "    ";
            if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter($_box_, false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            if ((twig_slice($this->env, $_icon_, 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
                echo twig_escape_filter($this->env, twig_slice($this->env, $_icon_, 3), "html", null, true);
                echo " ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
                echo twig_escape_filter($this->env, $_icon_, "html", null, true);
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 138,  491 => 137,  482 => 135,  478 => 134,  476 => 133,  472 => 132,  459 => 131,  444 => 124,  437 => 122,  430 => 120,  427 => 119,  424 => 118,  421 => 117,  408 => 116,  389 => 108,  379 => 107,  376 => 106,  369 => 105,  362 => 104,  356 => 103,  353 => 102,  350 => 101,  334 => 100,  319 => 91,  311 => 86,  306 => 83,  303 => 82,  292 => 81,  280 => 74,  276 => 72,  272 => 70,  266 => 69,  263 => 68,  261 => 67,  252 => 64,  247 => 63,  239 => 62,  236 => 61,  233 => 60,  229 => 59,  223 => 58,  221 => 57,  213 => 54,  202 => 53,  193 => 50,  187 => 49,  183 => 48,  179 => 47,  168 => 46,  164 => 45,  161 => 43,  157 => 42,  154 => 41,  148 => 40,  145 => 39,  141 => 38,  137 => 37,  134 => 36,  130 => 35,  124 => 34,  121 => 33,  118 => 32,  115 => 31,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  99 => 25,  97 => 24,  94 => 23,  76 => 22,  60 => 7,  57 => 6,  54 => 5,  41 => 4,  35 => 126,  31 => 111,  27 => 95,  23 => 76,  19 => 10,);
    }
}
/* {##*/
/*  # Sidebar-menu heading*/
/*  #}*/
/* {% macro heading(title, icon) %}*/
/*     {% from _self import label %}*/
/*     <li class="divider">*/
/*         <em>{{ label(icon, title) }}</em>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)*/
/*  #*/
/*  # @param string  icon*/
/*  # @param string  label (default: slug())*/
/*  # @param array   popoveritems*/
/*  # @param bool    active*/
/*  # @param bool    wide*/
/*  # @param array   subitems*/
/*  #}*/
/* {% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}*/
/* */
/*     {% from _self import label, icon %}*/
/* */
/*     {% if subitems is empty %}*/
/*         {% set subitems = popoveritems %}*/
/*     {% endif %}*/
/* */
/*     {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}*/
/*     {% set allowedany = false %}*/
/*     {% set allowedamount = 0 %}*/
/*     {% set allowedsingle = "" %}*/
/*     {% for item in subitems %}*/
/*         {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}*/
/*             {% set allowedany = true %}*/
/*             {% set allowedamount = allowedamount + 1 %}*/
/*             {% set allowedsingle = item %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}*/
/* */
/*     {# Show stuff! #}*/
/*     {% if allowedany %}*/
/*         <li{% if class %} class="{{ class }}"{% endif %}>*/
/*             {% if allowedamount == 1 and not force_submenu|default(false) %}*/
/*                 {% set item = allowedsingle %}*/
/*                 <a href="{{ item.link }}">*/
/*                     {{ icon(item.icon, "icon") }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a  href="{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}" class="menu-pop">*/
/*                     {{ label(icon, label) }}*/
/*                 </a>*/
/*                 <ul class="nav submenu">*/
/*                     {% set divider = false %}*/
/*                     {% for item in popoveritems %}*/
/*                         {% if item == '-' %}*/
/*                             {% set divider = true %}*/
/*                         {% elseif isallowed(item.isallowed|default('dashboard')) %}*/
/*                             <li{% if divider %} class="subdivider"{% endif %}>*/
/*                                 <a href="{{ item.link }}">*/
/*                                     {{ icon(item.icon) }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                                 </a>*/
/*                             </li>*/
/*                             {% set divider = false %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu collapse/expand*/
/*  #}*/
/* {% macro collapse() %}*/
/*     {% from _self import label %}*/
/* */
/*     <li class="nav-secondary-collapse">*/
/*         <a href="#">*/
/*             {{ label('fa:compress', __('Collapse sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/*     <li class="nav-secondary-expand">*/
/*         <a href="#">*/
/*             {{ label('fa:expand', __('Expand sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu link*/
/*  #}*/
/* {% macro link(icon, label, pathname, active, divider) %}*/
/*     {% from _self import label %}*/
/*     {% set class = '' %}*/
/*     {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}*/
/*     {% if active %}{% set class = class ~ ' active' %}{% endif %}*/
/*     {% if divider %}{% set class = class ~ ' divider' %}{% endif %}*/
/* */
/*     <li{% if class %} class="{{ class|trim }}" {% endif %}>*/
/*         <a href="{{ path(pathname) }}">{{ label(icon, label) }}</a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu label*/
/*  #}*/
/* {% macro label(icon, label) %}*/
/*     {% from _self import icon %}*/
/* */
/*     {% if icon is empty %}*/
/*         <i class="icon">{{ label|slice(0, 1) }}</i>*/
/*     {% elseif icon != '-' %}*/
/*         {{ icon(icon, true) }}*/
/*     {% endif %}*/
/*     {{ label|raw }}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Icon*/
/*  #}*/
/* {% macro icon(icon, box) %}*/
/*     {% set class = box|default(false) ? 'icon' : 'fa-fw' %}*/
/*     {# Font Awsome #}*/
/*     {% if icon|slice(0,3) == 'fa:' %}*/
/*         <i class="fa fa-{{ icon|slice(3) }} {{ class }}"></i>*/
/*     {# Defaults to (?) #}*/
/*     {% else %}*/
/*         <i class="fa fa-question-circle {{ class }}" title="{{ icon }}"></i>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
