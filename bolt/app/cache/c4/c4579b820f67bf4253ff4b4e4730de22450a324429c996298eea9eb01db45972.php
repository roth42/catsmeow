<?php

/* _macro/_panels.twig */
class __TwigTemplate_5454f373940d2dba132c7136bdf80fd774806058bd8ba4cc4b603d8560bfbb6a extends Twig_Template
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
        // line 14
        echo "

";
        // line 29
        echo "

";
    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ( !$this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (isset($context["ommit_empty"])) { $_ommit_empty_ = $context["ommit_empty"]; } else { $_ommit_empty_ = null; }
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter($_ommit_empty_, false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                    // line 10
                    echo "            ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("showstack", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter($_item_, 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            if (isset($context["content_id"])) { $_content_id_ = $context["content_id"]; } else { $_content_id_ = null; }
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter($_content_id_, false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                // line 24
                echo "        ";
                if (isset($context["contenttype_slug"])) { $_contenttype_slug_ = $context["contenttype_slug"]; } else { $_contenttype_slug_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $_contenttype_slug_)));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                if (isset($context["contenttype_slug"])) { $_contenttype_slug_ = $context["contenttype_slug"]; } else { $_contenttype_slug_ = null; }
                if (isset($context["content_id"])) { $_content_id_ = $context["content_id"]; } else { $_content_id_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $_contenttype_slug_, "contentid" => $_content_id_)));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                if (isset($context["contenttype_slug"])) { $_contenttype_slug_ = $context["contenttype_slug"]; } else { $_contenttype_slug_ = null; }
                if (isset($context["content_id"])) { $_content_id_ = $context["content_id"]; } else { $_content_id_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("changelogrecord", array("contenttype" => $_contenttype_slug_, "contentid" => $_content_id_)));
                echo "
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
        return "_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  123 => 38,  110 => 37,  93 => 26,  86 => 24,  82 => 23,  69 => 22,  57 => 12,  50 => 10,  46 => 9,  42 => 8,  29 => 7,  23 => 29,  19 => 14,);
    }
}
/* {##*/
/*  # Renders a stack panel*/
/*  #*/
/*  # @param int  items (default: 10)*/
/*  # @param bool ommit_empty (default: false)*/
/*  #}*/
/* {% macro stack(items, ommit_empty) %}*/
/*     {% if not app.config.get('general/backend/stack/disable', false) %}*/
/*         {% if not ommit_empty|default(false) or stackitems() is not empty %}*/
/*             {{ render(path('showstack', {'items': item|default(10)} )) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Renders a last modified panel*/
/*  #*/
/*  # @param string contenttype_slug*/
/*  # @param mixed  content_id (default: false)*/
/*  #}*/
/* {% macro lastmodified(contenttype_slug, content_id) %}*/
/*     {% if content_id|default(false) or stackitems() is not empty %}*/
/*         {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug})) }}*/
/*     {% else %}*/
/*         {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug, 'contentid': content_id})) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Renders a record changes panel*/
/*  #*/
/*  # @param string contenttype_slug*/
/*  # @param mixed  content_id (default: false)*/
/*  #}*/
/* {% macro changes(contenttype_slug, content_id) %}*/
/*     {% if app.config.get('general/changelog/enabled', true) %}*/
/*         {{ render(path('changelogrecord', {'contenttype': contenttype_slug, 'contentid': content_id})) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
