<?php

/* nav/_secondary-extensions.twig */
class __TwigTemplate_17ce9c40a461014dc37c4ef0eea7a3838e722ca9d651344b8332f16a41826d40 extends Twig_Template
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
        $context["sub"] = array();
        // line 3
        echo "
";
        // line 4
        if ($this->env->getExtension('Bolt')->isAllowed("extensions||extensions:config")) {
            // line 5
            echo "
    ";
            // line 7
            echo "    ";
            if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
            $context["sub"] = twig_array_merge($_sub_, array(0 => array("icon" => "fa:cubes", "label" => $this->env->getExtension('Bolt')->trans("View/install Extensions"), "link" => $this->env->getExtension('routing')->getPath("extend", array()), "isallowed" => "extensions"), 1 => array("icon" => "fa:cog", "label" => $this->env->getExtension('Bolt')->trans("Configure Extensions"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "config", "path" => "extensions")), "isallowed" => "extensions:config")));
            // line 21
            echo "
    ";
            // line 23
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "extensions", array()), "getMenuoptions", array())) > 0)) {
                // line 24
                echo "        ";
                if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
                $context["sub"] = twig_array_merge($_sub_, array(0 => "-"));
                // line 25
                echo "    ";
            }
            // line 26
            echo "

";
        }
        // line 29
        echo "
";
        // line 31
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "extensions", array()), "getMenuoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 32
            echo "    ";
            if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            $context["sub"] = twig_array_merge($_sub_, array(0 => array("icon" => (($this->getAttribute($_extension_, "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_extension_, "icon", array()), "fa:briefcase")) : ("fa:briefcase")), "label" => $this->getAttribute($_extension_, "label", array()), "link" => $this->getAttribute($_extension_, "path", array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
        if (isset($context["page_nav"])) { $_page_nav_ = $context["page_nav"]; } else { $_page_nav_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "submenu", array(0 => "fa:cubes", 1 => $this->env->getExtension('Bolt')->trans("Extras"), 2 => $_sub_, 3 => ($_page_nav_ == "Settings/ExtendBolt")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 41,  69 => 40,  60 => 32,  55 => 31,  52 => 29,  47 => 26,  44 => 25,  40 => 24,  36 => 23,  33 => 21,  29 => 7,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
/* {# Empty array for submenu #}*/
/* {% set sub = [] %}*/
/* */
/* {% if isallowed('extensions||extensions:config') %}*/
/* */
/*     {# Add the "view" and "configure" options #}*/
/*     {% set sub = sub|merge([*/
/*         {*/
/*             icon: 'fa:cubes',*/
/*             label: __('View/install Extensions'),*/
/*             link: path('extend', {}),*/
/*             isallowed: 'extensions'*/
/*         },*/
/*         {*/
/*             icon: 'fa:cog',*/
/*             label: __('Configure Extensions'),*/
/*             link: path('files', {'namespace': 'config', 'path': 'extensions'}),*/
/*             isallowed: 'extensions:config'*/
/*         }*/
/*     ]) %}*/
/* */
/*     {# Add a divider, if there are any items to print. We don't want a divider with nothing below it #}*/
/*     {% if app.extensions.getMenuoptions|length > 0 %}*/
/*         {% set sub = sub|merge(['-']) %}*/
/*     {% endif %}*/
/* */
/* */
/* {% endif %}*/
/* */
/* {# Add the available extensions that have added a menu-item. #}*/
/* {% for extension in app.extensions.getMenuoptions %}*/
/*     {% set sub = sub|merge([*/
/*         {*/
/*             icon: extension.icon|default('fa:briefcase'),*/
/*             label: extension.label,*/
/*             link: extension.path*/
/*         }*/
/*     ]) %}*/
/* {% endfor %}*/
/* */
/* {{ nav.submenu('fa:cubes', __('Extras'), sub, (page_nav == 'Settings/ExtendBolt')) }}*/
/* */
