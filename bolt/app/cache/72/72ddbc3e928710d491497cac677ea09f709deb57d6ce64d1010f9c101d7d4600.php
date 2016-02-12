<?php

/* _sub/_messages.twig */
class __TwigTemplate_19569ee2e3f595150cb92726202ca516bb3c9f8a61ce7d09c14aa43e16f25413 extends Twig_Template
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
        // line 8
        echo "
";
        // line 21
        echo "
";
        // line 22
        $context["self"] = $this;
        // line 23
        if (isset($context["wrapper"])) { $_wrapper_ = $context["wrapper"]; } else { $_wrapper_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (((array_key_exists("wrapper", $context) && $_wrapper_) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "keys", array(), "method")))) {
            // line 24
            echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
            // line 26
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getflashbag();
            echo "
        </div>
    </div>
";
        } else {
            // line 30
            echo "    ";
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getflashbag();
            echo "
";
        }
    }

    // line 1
    public function getflashbag()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "    ";
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getmessages("error", "danger");
            echo "
    ";
            // line 4
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getmessages("warning");
            echo "
    ";
            // line 5
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getmessages("success");
            echo "
    ";
            // line 6
            if (isset($context["self"])) { $_self_ = $context["self"]; } else { $_self_ = null; }
            echo $_self_->getmessages("info");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getmessages($__key__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    ";
            $context["shown"] = array();
            // line 11
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => $_key_), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "        ";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                if (isset($context["shown"])) { $_shown_ = $context["shown"]; } else { $_shown_ = null; }
                if (!twig_in_filter($_msg_, $_shown_)) {
                    // line 13
                    echo "            <div class=\"alert alert-";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, $_key_)) : ($_key_)), "html", null, true);
                    echo "\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 15
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    echo $this->env->getExtension('Bolt')->ymllink($_msg_);
                    echo "
            </div>
            ";
                    // line 17
                    if (isset($context["shown"])) { $_shown_ = $context["shown"]; } else { $_shown_ = null; }
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    $context["shown"] = twig_array_merge($_shown_, array(0 => $_msg_));
                    // line 18
                    echo "        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 19,  142 => 18,  138 => 17,  132 => 15,  124 => 13,  119 => 12,  112 => 11,  109 => 10,  96 => 9,  82 => 6,  77 => 5,  72 => 4,  66 => 3,  63 => 2,  52 => 1,  43 => 30,  35 => 26,  31 => 24,  27 => 23,  25 => 22,  22 => 21,  19 => 8,);
    }
}
/* {% macro flashbag() %}*/
/*     {% import _self as self %}*/
/*     {{ self.messages('error', 'danger') }}*/
/*     {{ self.messages('warning') }}*/
/*     {{ self.messages('success') }}*/
/*     {{ self.messages('info') }}*/
/* {% endmacro %}*/
/* */
/* {% macro messages(key, class) %}*/
/*     {% set shown = [] %}*/
/*     {% for msg in app.session.flashBag.get(key) %}*/
/*         {% if msg not in shown %}*/
/*             <div class="alert alert-{{ class|default(key) }}">*/
/*                 <button class="close" data-dismiss="alert">×</button>*/
/*                 {{ msg|ymllink }}*/
/*             </div>*/
/*             {% set shown = shown|merge([msg]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as self %}*/
/* {% if wrapper is defined and wrapper and app.session.flashBag.keys() is not empty %}*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {{ self.flashbag }}*/
/*         </div>*/
/*     </div>*/
/* {% else %}*/
/*     {{ self.flashbag }}*/
/* {% endif %}*/
/* */
