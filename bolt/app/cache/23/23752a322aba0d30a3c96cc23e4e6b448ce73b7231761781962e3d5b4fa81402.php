<?php

/* dashboard/_quicklinks-buttons.twig */
class __TwigTemplate_ac79dbba138535a4e61f49ac34de7f1d85ae429116b47dfb7ccfe48f15ffa9c2 extends Twig_Template
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
        echo "<div class=\"btn-group\">
    ";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "        ";
            if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
            if (($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $_contenttypeslug_) . ":create")) && $this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $_contenttypeslug_) . ":view")))) {
                // line 4
                echo "            <a class=\"btn btn-default\" href=\"";
                if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_contenttypeslug_)), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i> ";
                // line 5
                if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $_contenttypeslug_));
                echo "
            </a>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_quicklinks-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  37 => 5,  31 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/*     {% for contenttypeslug, contenttype in app.config.get('contenttypes') %}*/
/*         {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}*/
/*             <a class="btn btn-default" href="{{ path('editcontent', {'contenttypeslug': contenttypeslug}) }}">*/
/*                 <i class="fa fa-plus"></i> {{ __('contenttypes.generic.new', {'%contenttype%': contenttypeslug}) }}*/
/*             </a>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </div>*/
/* */
