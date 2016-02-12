<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_0eed53c41eea64305891412870630f90a6fadf777ee847edf1d951b89e4e7b00 extends Twig_Template
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
        // line 1
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if ($_link_) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $_token_, "panel" => $_name_)), "html", null, true);
            echo "\">";
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            echo twig_escape_filter($this->env, $_icon_, "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($_icon_, "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($_text_, "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 7,  37 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* {% if link %}*/
/*     {% set icon %}*/
/*         <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">{{ icon }}</a>*/
/*     {% endset %}*/
/* {% endif %}*/
/* <div class="sf-toolbar-block">*/
/*      <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*      <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
