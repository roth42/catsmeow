<?php

/* nav/_secondary-content.twig */
class __TwigTemplate_54cb4ad71674a1091ff2b0f9b920ee32f34f38791d13cf1cfde3fe61d252449c extends Twig_Template
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
        $context["definedSubs"] = array();
        // line 2
        echo "
";
        // line 3
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $_slug_))) {
                // line 5
                echo "        ";
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                $context["sub_view"] = array("icon" => (($this->getAttribute($_contenttype_, "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_contenttype_, "icon_many", array()), (($this->getAttribute($_contenttype_, "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($_contenttype_, "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.view", array("%contenttypes%" => $this->getAttribute($_contenttype_, "slug", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => $_slug_)));
                // line 10
                echo "        ";
                if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $_slug_)), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_slug_)), "isallowed" => (("contenttype:" . $_slug_) . ":create"));
                // line 16
                echo "        ";
                if (isset($context["sub_view"])) { $_sub_view_ = $context["sub_view"]; } else { $_sub_view_ = null; }
                if (isset($context["sub_new"])) { $_sub_new_ = $context["sub_new"]; } else { $_sub_new_ = null; }
                $context["sub"] = array(0 => $_sub_view_, 1 => $_sub_new_, 2 => "-");
                // line 17
                echo "
        ";
                // line 19
                echo "        ";
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                if (($this->getAttribute($_contenttype_, "show_in_menu", array()) == "true")) {
                    // line 20
                    echo "
            ";
                    // line 21
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['records'] =                     $template_storage->getContent($this->getContext($context, "slug"), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 22
                    echo "            ";
                    if (isset($context["records"])) { $_records_ = $context["records"]; } else { $_records_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($_records_);
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 23
                        echo "                ";
                        if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
                        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                        $context["sub"] = twig_array_merge($_sub_, array(0 => array("icon" => (($this->getAttribute($_contenttype_, "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_contenttype_, "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => trim(twig_replace_filter($this->getAttribute($_record_, "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_slug_, "id" => $this->getAttribute($_record_, "id", array()))))));
                        // line 30
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
            ";
                    // line 32
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    $context["label"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($_contenttype_, "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($_contenttype_, "name", array())));
                    // line 33
                    echo "            ";
                    if (isset($context["page_nav"])) { $_page_nav_ = $context["page_nav"]; } else { $_page_nav_ = null; }
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                    $context["active"] = (($_page_nav_ == "Content/*") && ((($this->getAttribute($this->getAttribute($_context_, "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_context_, "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $_slug_));
                    // line 34
                    echo "
            ";
                    // line 35
                    if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
                    if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "submenu", array(0 => (($this->getAttribute($_contenttype_, "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_contenttype_, "icon_many", array()), "")) : ("")), 1 => $_label_, 2 => $_sub_, 3 => $_active_, 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "
            ";
                    // line 40
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                    $context["sub_view"] = array("icon" => (($this->getAttribute($_contenttype_, "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_contenttype_, "icon_many", array()), (($this->getAttribute($_contenttype_, "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($_contenttype_, "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($_contenttype_, "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($_contenttype_, "name", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => $_slug_)));
                    // line 45
                    echo "
            ";
                    // line 46
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    $context["key"] = (($this->getAttribute($_contenttype_, "show_in_menu", array())) ? ($this->getAttribute($_contenttype_, "show_in_menu", array())) : ($this->env->getExtension('Bolt')->trans("Other content")));
                    // line 47
                    echo "            ";
                    if (isset($context["definedSubs"])) { $_definedSubs_ = $context["definedSubs"]; } else { $_definedSubs_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    if ($this->getAttribute($_definedSubs_, $_key_, array(), "array", true, true)) {
                        // line 48
                        echo "                ";
                        if (isset($context["definedSubs"])) { $_definedSubs_ = $context["definedSubs"]; } else { $_definedSubs_ = null; }
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($_definedSubs_);
                        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
                            // line 49
                            echo "                    ";
                            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                            if (isset($context["submenuName"])) { $_submenuName_ = $context["submenuName"]; } else { $_submenuName_ = null; }
                            if (($_key_ == $_submenuName_)) {
                                // line 50
                                echo "                        ";
                                if (isset($context["submenudef"])) { $_submenudef_ = $context["submenudef"]; } else { $_submenudef_ = null; }
                                if (isset($context["sub_view"])) { $_sub_view_ = $context["sub_view"]; } else { $_sub_view_ = null; }
                                $context["submenudef"] = twig_array_merge($_submenudef_, array(0 => $_sub_view_));
                                // line 51
                                echo "                        ";
                                if (isset($context["definedSubs"])) { $_definedSubs_ = $context["definedSubs"]; } else { $_definedSubs_ = null; }
                                if (isset($context["submenuName"])) { $_submenuName_ = $context["submenuName"]; } else { $_submenuName_ = null; }
                                if (isset($context["submenudef"])) { $_submenudef_ = $context["submenudef"]; } else { $_submenudef_ = null; }
                                $context["definedSubs"] = twig_array_merge($_definedSubs_, array($_submenuName_ => $_submenudef_));
                                // line 52
                                echo "                    ";
                            }
                            // line 53
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "            ";
                    } else {
                        // line 55
                        echo "                ";
                        if (isset($context["definedSubs"])) { $_definedSubs_ = $context["definedSubs"]; } else { $_definedSubs_ = null; }
                        if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                        if (isset($context["sub_view"])) { $_sub_view_ = $context["sub_view"]; } else { $_sub_view_ = null; }
                        $context["definedSubs"] = twig_array_merge($_definedSubs_, array($_key_ => array(0 => $_sub_view_)));
                        // line 56
                        echo "            ";
                    }
                    // line 57
                    echo "
        ";
                }
                // line 59
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 63
        if (isset($context["definedSubs"])) { $_definedSubs_ = $context["definedSubs"]; } else { $_definedSubs_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_definedSubs_);
        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
            // line 64
            echo "    ";
            // line 65
            echo "    ";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (isset($context["submenuName"])) { $_submenuName_ = $context["submenuName"]; } else { $_submenuName_ = null; }
            if (isset($context["submenudef"])) { $_submenudef_ = $context["submenudef"]; } else { $_submenudef_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "submenu", array(0 => "fa:th-list", 1 => $_submenuName_, 2 => $_submenudef_, 3 => false, 4 => false, 5 => false, 6 => true), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 65,  187 => 64,  182 => 63,  179 => 61,  172 => 59,  168 => 57,  165 => 56,  159 => 55,  156 => 54,  150 => 53,  147 => 52,  141 => 51,  136 => 50,  131 => 49,  125 => 48,  120 => 47,  117 => 46,  114 => 45,  110 => 40,  107 => 39,  104 => 38,  94 => 35,  91 => 34,  85 => 33,  82 => 32,  79 => 31,  73 => 30,  66 => 23,  60 => 22,  57 => 21,  54 => 20,  50 => 19,  47 => 17,  42 => 16,  38 => 10,  33 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set definedSubs = [] %}*/
/* */
/* {% for slug, contenttype in app.config.get('contenttypes')  %}*/
/*     {% if isallowed('contenttype:' ~ slug) %}*/
/*         {% set sub_view = {*/
/*             icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*             label: __('contenttypes.generic.view', {'%contenttypes%': contenttype.slug}),*/
/*             link: path('overview', {'contenttypeslug': slug})*/
/*         } %}*/
/*         {% set sub_new = {*/
/*             icon: 'fa:plus',*/
/*             label: __('contenttypes.generic.new', {'%contenttype%': slug}),*/
/*             link: path('editcontent', {'contenttypeslug': slug}),*/
/*             isallowed: 'contenttype:' ~ slug ~ ':create'*/
/*         } %}*/
/*         {% set sub = [sub_view, sub_new, '-'] %}*/
/* */
/*         {# Contenttypes, where show_in_menu is set true #}*/
/*         {% if contenttype.show_in_menu == "true" %}*/
/* */
/*             {% setcontent records = slug limit 4 nohydrate orderby '-datechanged' %}*/
/*             {% for record in records %}*/
/*                 {% set sub = sub|merge([*/
/*                     {*/
/*                         icon: contenttype.icon_one|default('fa:file-text-o'),*/
/*                         label: record.excerpt(80, true)|replace({"</b>": "&nbsp;</b>"})|trim,*/
/*                         link: path('editcontent', {'contenttypeslug': slug, 'id': record.id})*/
/*                     }*/
/*                 ]) %}*/
/*             {% endfor %}*/
/* */
/*             {% set label = __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}) %}*/
/*             {% set active = (page_nav == 'Content/*' and context.contenttype.slug|default == slug) %}*/
/* */
/*             {{ nav.submenu(contenttype.icon_many|default(''), label, sub, active, true) }}*/
/* */
/*         {# Contenttypes, where show_in_menu is set to a custom value or false #}*/
/*         {% else %}*/
/* */
/*             {% set sub_view = {*/
/*                 icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*                 label: __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}),*/
/*                 link: path('overview', {'contenttypeslug': slug})*/
/*             } %}*/
/* */
/*             {% set key = contenttype.show_in_menu ?: __('Other content') %}*/
/*             {% if definedSubs[key] is defined %}*/
/*                 {% for submenuName, submenudef in definedSubs %}*/
/*                     {% if key == submenuName %}*/
/*                         {% set submenudef = submenudef|merge([sub_view]) %}*/
/*                         {% set definedSubs = definedSubs|merge({(submenuName) : submenudef}) %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 {% set definedSubs = definedSubs|merge({(key) : [sub_view]}) %}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {# Display contenttypes, that have show_in_menu set to false or a custom value in submenus #}*/
/* {% for submenuName, submenudef in definedSubs %}*/
/*     {# Create the submenu and force it to be a submenu #}*/
/*     {{ nav.submenu('fa:th-list', submenuName, submenudef, false, false, false, true) }}*/
/* {% endfor %}*/
/* */
