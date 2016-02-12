<?php

/* _macro/_macro.twig */
class __TwigTemplate_761dab76d2cf1734974e0e2ff83a02b61f38d4ee5c0d80541b62c1cb5b66c741 extends Twig_Template
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
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 23
        echo "
";
        // line 28
        echo "
";
        // line 55
        echo "
";
        // line 69
        echo "
";
        // line 81
        echo "
";
        // line 100
        echo "

";
        // line 108
        echo "
";
        // line 118
        echo "
";
        // line 181
        echo "
";
        // line 192
        echo "
 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string key Id of the input element
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 #}
";
    }

    // line 3
    public function getuserlink($__user__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            // line 5
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname", array()), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            if (isset($context["content_id"])) { $_content_id_ = $context["content_id"]; } else { $_content_id_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($_contenttype_, "slug", array()), "id" => $_content_id_)), "html", null, true);
            echo "\">";
            // line 11
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo _twig_default_filter($this->env->getExtension('Bolt')->trim($_title_, 70), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"));
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($__contenttype__ = null, $__content__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "    ";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            $context["title"] = $this->getAttribute($_content_, "getTitle", array(), "method");
            // line 18
            echo "    ";
            if (isset($context["crosslinks"])) { $_crosslinks_ = $context["crosslinks"]; } else { $_crosslinks_ = null; }
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $_crosslinks_->getcontentlink_by_id($_contenttype_, $_title_, $this->getAttribute($_content_, "id", array()));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getdatetime($__d__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $__d__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_d_, "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
            echo twig_escape_filter($this->env, $_d_, "html", null, true);
            echo "\">";
            if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
            echo twig_escape_filter($this->env, $_d_, "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getrequiredattr($__field__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "required", array(), "any", true, true) && $this->getAttribute($_field_, "required", array()))) {
                echo "required=\"required\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getattr($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "    ";
            ob_start();
            // line 32
            echo "        ";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 33
                echo "            ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($_attrname_ == "value")) {
                    // line 34
                    echo "                value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty($_value_)) {
                    // line 36
                    echo "                ";
                    if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                    if (twig_in_filter($_attrname_, array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 37
                        echo "                    ";
                        if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                        echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                        echo "=\"";
                        if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                        echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                        echo "\"
                ";
                    } elseif (($_attrname_ == "name_id")) {
                        // line 39
                        echo "                    name=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\" id=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\"
                ";
                    } elseif (($_attrname_ == "class")) {
                        // line 41
                        echo "                    class=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, trim($_value_), "html", null, true);
                        echo "\"
                ";
                    } elseif (($_attrname_ == "style")) {
                        // line 43
                        echo "                    style=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, trim($_value_), "html", null, true);
                        echo "\"
                ";
                    } elseif (($_attrname_ == "checked")) {
                        // line 45
                        echo "                    ";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (($_value_ != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 46
                        echo "                ";
                    } elseif (($_attrname_ == "_bind")) {
                        // line 47
                        echo "                    data-bind=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($_value_, 0, array(), "array")), (($this->getAttribute($_value_, 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_value_, 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 49
                        echo "                    ";
                        if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                        echo twig_escape_filter($this->env, twig_replace_filter($_attrname_, array("_" => "-")), "html", null, true);
                        echo "=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\"
                ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getinfopop($__label__ = null, $__infoid__ = null, $__afterlabel__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "infoid" => $__infoid__,
            "afterlabel" => $__afterlabel__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    ";
            ob_start();
            // line 59
            echo "        ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            if (array_key_exists("afterlabel", $context)) {
                echo " ";
                if (isset($context["afterlabel"])) { $_afterlabel_ = $context["afterlabel"]; } else { $_afterlabel_ = null; }
                echo $_afterlabel_;
            }
            // line 60
            echo "        <span class=\"label info-pop\"
              data-content=\"";
            // line 61
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["infoid"])) { $_infoid_ = $context["infoid"]; } else { $_infoid_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "translator", array()), "trans", array(0 => $_infoid_, 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\"
              data-html=\"true\"
              data-title=\"";
            // line 63
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_), "html", null, true);
            echo "\"
              >
            ";
            // line 65
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "
        </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getlabel($__key__ = null, $__field__ = null, $__class__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "field" => $__field__,
            "class" => $__class__,
            "for" => $__for__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            ob_start();
            // line 73
            echo "        <label
            ";
            // line 74
            echo " ";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            if ($_for_) {
                echo "for=\"";
                if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
                echo twig_escape_filter($this->env, $_for_, "html", null, true);
                echo "\"";
            }
            // line 75
            echo "            ";
            echo " class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "control-label")) : ("control-label")), "html", null, true);
            echo "\"
        >
            ";
            // line 77
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_field_, "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_field_, "label", array()), $this->env->getExtension('Bolt')->ucfirst($_key_))) : ($this->env->getExtension('Bolt')->ucfirst($_key_))), "html", null, true);
            echo "
        </label>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 83
            echo "<form action=\"";
            if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => $_action_, "contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype", array()), "slug", array()), "id" => $this->getAttribute($_content_, "id", array()))), "html", null, true);
            echo "\"
      method=\"POST\">
    ";
            // line 85
            $this->loadTemplate("_sub/_csrf_token.twig", "_macro/_macro.twig", 85)->display($context);
            // line 86
            echo "    <button type=\"submit\"
        ";
            // line 87
            if (isset($context["confirmation_text"])) { $_confirmation_text_ = $context["confirmation_text"]; } else { $_confirmation_text_ = null; }
            if ($_confirmation_text_) {
                // line 88
                echo "            class=\"btn btn-link btn-block confirm\" data-confirm=\"";
                if (isset($context["confirmation_text"])) { $_confirmation_text_ = $context["confirmation_text"]; } else { $_confirmation_text_ = null; }
                echo twig_escape_filter($this->env, $_confirmation_text_, "html", null, true);
                echo "\"
        ";
            } else {
                // line 90
                echo "            class=\"btn btn-link btn-block\"
        ";
            }
            // line 92
            echo "    >
        <span class=\"pull-left\">
            <i class=\"fa ";
            // line 94
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            echo twig_escape_filter($this->env, $_icon_, "html", null, true);
            echo "\"></i>
            ";
            // line 95
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo $this->env->getExtension('Bolt')->trans($_text_);
            echo "
        </span>
    </button>
</form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function gettypepopover($__types__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "    ";
            if (isset($context["types"])) { $_types_ = $context["types"]; } else { $_types_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter($_types_, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 104
            echo "    ";
            if (isset($context["types"])) { $_types_ = $context["types"]; } else { $_types_ = null; }
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter($_types_, "</code>, <code>")) . "</code>.");
            // line 105
            echo "    <span class=\"label info-pop\" data-title=\"\"
          data-html=\"true\" data-content=\"";
            // line 106
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Types");
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getstackbutton($__file__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if (( !$this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") &&  !$this->env->getExtension('Bolt')->stacked($this->getAttribute($_file_, "newpath", array())))) {
                // line 111
                echo "        <a href=\"#\" class=\"btn btn-default btn-sm\" data-action=\"Bolt.stack.addToStack('";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "newpath", array()), "html", null, true);
                echo "', this);\">
            <i class=\"fa fa-paperclip\"></i>
            <span class=\"visible-sm-inline visible-xs-inline\">";
                // line 113
                echo $this->env->getExtension('Bolt')->trans("Stack");
                echo "</span>
            <span class=\"hidden-sm hidden-xs\">";
                // line 114
                echo $this->env->getExtension('Bolt')->trans("Place on stack");
                echo "</span>
        </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getinput_datetime($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["__internal_8918c386bfb3b0f3d75f2bb51527e82d190de56938910abd18939eeb239db0e0"] = $this;
            // line 135
            echo "
    ";
            // line 136
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            $context["class"] = (twig_replace_filter((($this->getAttribute($_opt_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 137
            echo "
    ";
            // line 138
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            $context["attr_data"] = array("id" => $this->getAttribute($_opt_, "id", array()), "name" => (($this->getAttribute($_opt_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "name", array()), $this->getAttribute($_opt_, "id", array()))) : ($this->getAttribute($_opt_, "id", array()))), "value" => $this->getAttribute($_opt_, "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute($_opt_, "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "notice", array()), "")) : ("")));
            // line 146
            echo "
    ";
            // line 147
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            $context["attr_date"] = array("type" => "text", "disabled" => (($this->getAttribute($_opt_, "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "disabled", array()), false)) : (false)), "required" => (($this->getAttribute($_opt_, "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "required", array()), false)) : (false)), "class" => trim(($_class_ . " datepicker")), "data_errortext" => (($this->getAttribute($_opt_, "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute($_opt_, "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute($_opt_, "options", array()))) : ("")));
            // line 155
            echo "
    ";
            // line 156
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            $context["attr_time"] = array("type" => "text", "disabled" => (($this->getAttribute($_opt_, "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "disabled", array()), false)) : (false)), "required" => (($this->getAttribute($_opt_, "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_opt_, "required", array()), false)) : (false)), "class" => trim(($_class_ . " timepicker")), "title" => $this->env->getExtension('Bolt')->trans("Time in 24h/12h format"), "style" => "margin-right: 6px;");
            // line 164
            echo "
    <input";
            // line 165
            if (isset($context["attr_data"])) { $_attr_data_ = $context["attr_data"]; } else { $_attr_data_ = null; }
            echo $context["__internal_8918c386bfb3b0f3d75f2bb51527e82d190de56938910abd18939eeb239db0e0"]->getattr($_attr_data_);
            echo ">
    <div class=\"input-group\">
        <span class=\"input-group-btn\">
            <button class=\"btn btn-tertiary\" type=\"button\">
                <i class=\"fa fa-calendar\"></i>
            </button>
        </span>
        <input";
            // line 172
            if (isset($context["attr_date"])) { $_attr_date_ = $context["attr_date"]; } else { $_attr_date_ = null; }
            echo $context["__internal_8918c386bfb3b0f3d75f2bb51527e82d190de56938910abd18939eeb239db0e0"]->getattr($_attr_date_);
            echo ">
        ";
            // line 173
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (( !$this->getAttribute($_opt_, "has_time", array(), "any", true, true) || ($this->getAttribute($_opt_, "has_time", array()) != false))) {
                // line 174
                echo "            <input";
                if (isset($context["attr_time"])) { $_attr_time_ = $context["attr_time"]; } else { $_attr_time_ = null; }
                echo $context["__internal_8918c386bfb3b0f3d75f2bb51527e82d190de56938910abd18939eeb239db0e0"]->getattr($_attr_time_);
                echo ">
        ";
            }
            // line 176
            echo "        <button class=\"btn btn-default btn-xs\" type=\"button\" style=\"margin: 4px 0 0 0;\">
            <i class=\"fa fa-close\"></i>
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 187
    public function gettimemoment($__datetime__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "    ";
            ob_start();
            // line 189
            echo "        <time class=\"moment\" datetime=\"";
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_datetime_, "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            echo twig_escape_filter($this->env, $_datetime_, "html", null, true);
            echo "\">";
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            echo twig_escape_filter($this->env, $_datetime_, "html", null, true);
            echo "</time>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function getupload_buttons($__type__ = null, $__key__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "key" => $__key__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 201
            echo "    ";
            $context["__internal_9e94c3d4b89ef857629ff7b1bd8183f19d8f08ac21717ece613abb01b425a05b"] = $this;
            // line 202
            echo "
    ";
            // line 203
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            $context["items"] = $this->env->getExtension('Bolt')->stackItems(7, ((($_type_ == "image")) ? ("image") : ("other,document")));
            // line 204
            echo "    ";
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            if (isset($context["uploadpath"])) { $_uploadpath_ = $context["uploadpath"]; } else { $_uploadpath_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            $context["href"] = (((($this->getAttribute($_paths_, "async", array()) . "browse/files") . (($_uploadpath_) ? (("/" . $_uploadpath_)) : (""))) . "?key=") . $_key_);
            // line 205
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 209
            echo "        ";
            if (isset($context["canUpload"])) { $_canUpload_ = $context["canUpload"]; } else { $_canUpload_ = null; }
            if ($_canUpload_) {
                // line 210
                echo "            <span type=\"button\" class=\"btn btn-secondary fileinput-button\">
            \t<i class=\"fa fa-upload\"></i>
            \t<span>";
                // line 212
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo ((($_type_ == "image")) ? ($this->env->getExtension('Bolt')->trans("Upload image")) : ($this->env->getExtension('Bolt')->trans("Upload file")));
                echo "</span>
            \t<input";
                // line 213
                if (isset($context["attr_upload"])) { $_attr_upload_ = $context["attr_upload"]; } else { $_attr_upload_ = null; }
                echo $context["__internal_9e94c3d4b89ef857629ff7b1bd8183f19d8f08ac21717ece613abb01b425a05b"]->getattr($_attr_upload_);
                echo ">
        \t</span>
        ";
            } else {
                // line 216
                echo "            <button type=\"button\" class=\"btn\" disabled=\"disabled\">
                ";
                // line 217
                echo $this->env->getExtension('Bolt')->trans("Upload not allowed");
                echo "
                ";
                // line 219
                echo "                ";
                if (isset($context["attr_upload"])) { $_attr_upload_ = $context["attr_upload"]; } else { $_attr_upload_ = null; }
                $context["attr_upload"] = twig_array_merge($_attr_upload_, array("type" => "hidden"));
                // line 220
                echo "                <input";
                if (isset($context["attr_upload"])) { $_attr_upload_ = $context["attr_upload"]; } else { $_attr_upload_ = null; }
                echo $context["__internal_9e94c3d4b89ef857629ff7b1bd8183f19d8f08ac21717ece613abb01b425a05b"]->getattr($_attr_upload_);
                echo ">
            </button>
        ";
            }
            // line 223
            echo "
        ";
            // line 225
            echo "        <button type=\"button\" class=\"btn btn-tertiary\" data-target=\"#selectModal-";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "\" href=\"";
            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
            echo twig_escape_filter($this->env, $_href_, "html", null, true);
            echo "\" data-toggle=\"modal\">
            <i class=\"fa fa-download\"></i>
            ";
            // line 227
            echo $this->env->getExtension('Bolt')->trans("field.general.select-from-server");
            echo "
        </button>

        ";
            // line 231
            echo "        ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            if (( !$this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && $_items_)) {
                // line 232
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 235
                echo $this->env->getExtension('Bolt')->trans("field.general.select-from-stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu\" id=\"stack-";
                // line 239
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
                    ";
                // line 240
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($_items_);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 241
                    echo "                        ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context["info"] = ($this->getAttribute($_item_, "filesize", array()) . (((($this->getAttribute($_item_, "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($_item_, "imagesize", array())) . " px")) : ("")));
                    // line 242
                    echo "                        <li>
                            <a href=\"#\" data-action=\"Bolt.stack.selectFromPulldown('";
                    // line 243
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "', '";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "filepath", array()), "html", null, true);
                    echo "');\">
                                ";
                    // line 244
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "basename", array()), "html", null, true);
                    echo " <small>(";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $_info_, "html", null, true);
                    echo ")</small>
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "                </ul>
            </div>
        ";
            }
            // line 251
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  897 => 251,  892 => 248,  878 => 244,  870 => 243,  867 => 242,  863 => 241,  858 => 240,  853 => 239,  846 => 235,  841 => 232,  836 => 231,  830 => 227,  820 => 225,  817 => 223,  809 => 220,  805 => 219,  801 => 217,  798 => 216,  791 => 213,  786 => 212,  782 => 210,  778 => 209,  773 => 205,  767 => 204,  764 => 203,  761 => 202,  758 => 201,  742 => 200,  720 => 189,  717 => 188,  705 => 187,  690 => 176,  683 => 174,  680 => 173,  675 => 172,  664 => 165,  661 => 164,  657 => 156,  654 => 155,  650 => 147,  647 => 146,  644 => 138,  641 => 137,  638 => 136,  635 => 135,  632 => 134,  620 => 133,  605 => 114,  601 => 113,  594 => 111,  589 => 110,  577 => 109,  561 => 106,  558 => 105,  554 => 104,  549 => 103,  537 => 102,  520 => 95,  515 => 94,  511 => 92,  507 => 90,  500 => 88,  497 => 87,  494 => 86,  492 => 85,  484 => 83,  468 => 82,  451 => 77,  443 => 75,  434 => 74,  431 => 73,  428 => 72,  413 => 71,  398 => 65,  392 => 63,  385 => 61,  382 => 60,  373 => 59,  370 => 58,  356 => 57,  344 => 53,  338 => 52,  335 => 51,  325 => 49,  318 => 47,  315 => 46,  309 => 45,  302 => 43,  295 => 41,  285 => 39,  275 => 37,  271 => 36,  264 => 34,  259 => 33,  253 => 32,  250 => 31,  238 => 30,  223 => 26,  211 => 25,  180 => 22,  162 => 18,  158 => 17,  155 => 16,  142 => 15,  129 => 12,  126 => 11,  120 => 10,  105 => 9,  92 => 6,  89 => 5,  84 => 4,  71 => 3,  59 => 192,  56 => 181,  53 => 118,  50 => 108,  46 => 100,  43 => 81,  40 => 69,  37 => 55,  34 => 28,  31 => 23,  28 => 20,  25 => 14,  22 => 8,  19 => 2,);
    }
}
/* {# A little collection of links for various backend entities #}*/
/* */
/* {% macro userlink(user) %}{% spaceless %}*/
/* <a href="{{ path('useredit', {'id': user.id}) }}">*/
/*     {{- user.displayname -}}*/
/* </a>*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro contentlink_by_id(contenttype, title, content_id) %}{% spaceless %}*/
/* <a href="{{ path('editcontent', {'contenttypeslug': contenttype.slug, 'id': content_id}) }}">*/
/*     {{- title|trimtext(70)|default("<em>(" ~ __("no title …") ~ ")</em>")|raw -}}*/
/* </a>*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro contentlink(contenttype, content) %}*/
/*     {% import _self as crosslinks %}*/
/*     {% set title = content.getTitle() %}*/
/*     {{ crosslinks.contentlink_by_id(contenttype, title, content.id) }}*/
/* {% endmacro %}*/
/* */
/* {# output a 'relative' datetime #}*/
/* {% macro datetime(d) %}<time class="moment" datetime="{{ d|date("c") }}" title="{{ d }}">{{ d }}</time>{% endmacro %}*/
/* */
/* {# output the required="required" attribute for field in the form. #}*/
/* {% macro requiredattr(field) %}*/
/*     {% if field.required is defined and field.required %}required="required"{% endif %}*/
/* {% endmacro %}*/
/* */
/* {# outputs tag attributes #}*/
/* {% macro attr(attributes) %}*/
/*     {% spaceless %}*/
/*         {% for attrname, value in attributes %}*/
/*             {% if attrname == 'value' %}*/
/*                 value="{{ value }}"*/
/*             {% elseif value is not empty %}*/
/*                 {% if attrname in ['required', 'disabled', 'selected', 'autofocus', 'multiple', 'readonly'] %}*/
/*                     {{ attrname }}="{{ attrname }}"*/
/*                 {% elseif attrname == 'name_id' %}*/
/*                     name="{{ value }}" id="{{ value }}"*/
/*                 {% elseif attrname == 'class' %}*/
/*                     class="{{ value|trim }}"*/
/*                 {% elseif attrname == 'style' %}*/
/*                     style="{{ value|trim }}"*/
/*                 {% elseif attrname == 'checked' %}*/
/*                     {% if value != false %}checked="checked"{% endif %}*/
/*                 {% elseif attrname == '_bind' %}*/
/*                     data-bind="{{ {bind: value[0]}|merge(value[1]|default({}))|json_encode }}"*/
/*                 {% else %}*/
/*                     {{ attrname|replace({'_': '-'}) }}="{{ value }}"*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {# Info popup #}*/
/* {% macro infopop(label, infoid, afterlabel) %}*/
/*     {% spaceless %}*/
/*         {{ label }}{% if afterlabel is defined %} {{ afterlabel|raw }}{% endif %}*/
/*         <span class="label info-pop"*/
/*               data-content="{{ app.translator.trans(infoid, {}, 'infos') }}"*/
/*               data-html="true"*/
/*               data-title="{{ label|trans }}"*/
/*               >*/
/*             {{ __('Info') }}*/
/*         </span>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {# label for forms when editing content #}*/
/* {% macro label(key, field, class, for) %}*/
/*     {% spaceless %}*/
/*         <label*/
/*             {# for   #} {% if for %}for="{{ for }}"{% endif %}*/
/*             {# class #} class="{{ class|default('control-label') }}"*/
/*         >*/
/*             {{ field.label|default(key|ucfirst) }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro actionform(content, action, icon, text, confirmation_text) %}*/
/* <form action="{{ path('contentaction', {'action': action, 'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}"*/
/*       method="POST">*/
/*     {% include('_sub/_csrf_token.twig') %}*/
/*     <button type="submit"*/
/*         {% if confirmation_text %}*/
/*             class="btn btn-link btn-block confirm" data-confirm="{{ confirmation_text }}"*/
/*         {% else %}*/
/*             class="btn btn-link btn-block"*/
/*         {% endif %}*/
/*     >*/
/*         <span class="pull-left">*/
/*             <i class="fa {{ icon }}"></i>*/
/*             {{ __(text) }}*/
/*         </span>*/
/*     </button>*/
/* </form>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro typepopover(types) %}*/
/*     {% set types = types|default(app.config.get('general/accept_file_types')) %}*/
/*     {% set text = __("field.general.allowed-filetypes") ~ "<code>" ~ types|join("</code>, <code>") ~ "</code>." %}*/
/*     <span class="label info-pop" data-title=""*/
/*           data-html="true" data-content="{{ text }}">{{ __('Types') }}</span>*/
/* {% endmacro %}*/
/* */
/* {% macro stackbutton(file) %}*/
/*     {% if not app.config.get('general/backend/stack/disable', false) and not stacked(file.newpath) %}*/
/*         <a href="#" class="btn btn-default btn-sm" data-action="Bolt.stack.addToStack('{{ file.newpath }}', this);">*/
/*             <i class="fa fa-paperclip"></i>*/
/*             <span class="visible-sm-inline visible-xs-inline">{{ __('Stack') }}</span>*/
/*             <span class="hidden-sm hidden-xs">{{ __('Place on stack') }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Renders a datetime/date input component*/
/*  #*/
/*  # Required options:*/
/*  #    id:                 id of that group*/
/*  # Optional options:*/
/*  #    disabled  [false]:  disabled input*/
/*  #    required  [false]:  make input required*/
/*  #    class     []:       class added to date/time input*/
/*  #    errortext []:       error text*/
/*  #    options   []:       options passed to datepicker*/
/*  #*/
/*  # @param array opt Options defining the component*/
/*  #}*/
/* {% macro input_datetime(opt) %}*/
/*     {% from _self import attr %}*/
/* */
/*     {% set class = opt.class|default('')|replace({'form-control': ''}) ~ ' form-control' %}*/
/* */
/*     {% set attr_data = {*/
/*         id:          opt.id,*/
/*         name:        opt.name|default(opt.id),*/
/*         value:       opt.value,*/
/*         type:        'hidden',*/
/*         class:       'datetime',*/
/*         data_notice: opt.notice|default('')*/
/*     } %}*/
/* */
/*     {% set attr_date = {*/
/*         type:                'text',*/
/*         disabled:            opt.disabled|default(false),*/
/*         required:            opt.required|default(false),*/
/*         class:               (class ~ ' datepicker')|trim,*/
/*         data_errortext:      opt.errortext|default(''),*/
/*         data_field_options:  opt.options|default(false) ? opt.options|json_encode : ''*/
/*     } %}*/
/* */
/*     {% set attr_time = {*/
/*         type:      'text',*/
/*         disabled:  opt.disabled|default(false),*/
/*         required:  opt.required|default(false),*/
/*         class:     (class ~ ' timepicker')|trim,*/
/*         title:     __('Time in 24h/12h format'),*/
/*         style:     'margin-right: 6px;'*/
/*     } %}*/
/* */
/*     <input{{ attr(attr_data) }}>*/
/*     <div class="input-group">*/
/*         <span class="input-group-btn">*/
/*             <button class="btn btn-tertiary" type="button">*/
/*                 <i class="fa fa-calendar"></i>*/
/*             </button>*/
/*         </span>*/
/*         <input{{ attr(attr_date) }}>*/
/*         {% if opt.has_time is not defined or opt.has_time != false %}*/
/*             <input{{ attr(attr_time) }}>*/
/*         {% endif %}*/
/*         <button class="btn btn-default btn-xs" type="button" style="margin: 4px 0 0 0;">*/
/*             <i class="fa fa-close"></i>*/
/*         </button>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Renders a datetime/date input component*/
/*  #*/
/*  # @param string datetime ISO-datetime to display*/
/*  #}*/
/* {% macro timemoment(datetime) %}*/
/*     {% spaceless %}*/
/*         <time class="moment" datetime="{{ datetime|date("c") }}" title="{{ datetime }}">{{ datetime }}</time>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/*  # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]*/
/*  #*/
/*  # @param string type Either 'image' or 'other,document'*/
/*  # @param string key Id of the input element*/
/*  # @param string attr_upload Attributes for the file upload button*/
/*  # @param string uploadpath Relative upload path*/
/*  #}*/
/* {% macro upload_buttons(type, key, attr_upload, uploadpath, canUpload) %}*/
/*     {% from _self import attr %}*/
/* */
/*     {% set items = stackitems(7, (type == 'image') ?  'image' : 'other,document') %}*/
/*     {% set href = paths.async ~ 'browse/files' ~ (uploadpath ? '/' ~ uploadpath : '' ) ~ '?key=' ~ key %}*/
/* */
/*     <div class="button-wrap fileselectbuttongroup">*/
/* */
/*         {# Button: Upload #}*/
/*         {% if canUpload %}*/
/*             <span type="button" class="btn btn-secondary fileinput-button">*/
/*             	<i class="fa fa-upload"></i>*/
/*             	<span>{{ (type == 'image') ? __('Upload image') : __('Upload file') }}</span>*/
/*             	<input{{ attr(attr_upload) }}>*/
/*         	</span>*/
/*         {% else %}*/
/*             <button type="button" class="btn" disabled="disabled">*/
/*                 {{ __('Upload not allowed') }}*/
/*                 {# creating a dummy stub, instead of the uploader. Needed (currently) to attach events to #}*/
/*                 {% set attr_upload = attr_upload|merge({'type' : 'hidden'}) %}*/
/*                 <input{{ attr(attr_upload) }}>*/
/*             </button>*/
/*         {% endif %}*/
/* */
/*         {# Button: Select from Server #}*/
/*         <button type="button" class="btn btn-tertiary" data-target="#selectModal-{{ key }}" href="{{ href }}" data-toggle="modal">*/
/*             <i class="fa fa-download"></i>*/
/*             {{ __('field.general.select-from-server') }}*/
/*         </button>*/
/* */
/*         {# Button: Select from Stack #}*/
/*         {% if not app.config.get('general/backend/stack/disable', false) and items %}*/
/*             <div class="btn-group">*/
/*                 <button type="button" class="btn btn-tertiary dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-paperclip"></i>*/
/*                     {{ __('field.general.select-from-stack') }}*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/* */
/*                 <ul class="dropdown-menu" id="stack-{{ key }}">*/
/*                     {% for item in items %}*/
/*                         {% set info = item.filesize ~ (item.imagesize|default() ? ', ' ~ item.imagesize ~ ' px' : '') %}*/
/*                         <li>*/
/*                             <a href="#" data-action="Bolt.stack.selectFromPulldown('{{ key }}', '{{ item.filepath }}');">*/
/*                                 {{ item.basename }} <small>({{ info }})</small>*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* {% endmacro %}*/
/* */
