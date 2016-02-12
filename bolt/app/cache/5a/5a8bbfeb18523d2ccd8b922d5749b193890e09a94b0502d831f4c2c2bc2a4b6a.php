<?php

/* nav/_secondary-filemanagement.twig */
class __TwigTemplate_2281debe20b20b386a89249801047d8481396de0b9aca72c03c71d9001574a91 extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:folder-open-o", "label" => $this->env->getExtension('Bolt')->trans("Uploaded files"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "files", "path" => "")), "isallowed" => "files:uploads"), 1 => array("icon" => "fa:desktop", "label" => $this->env->getExtension('Bolt')->trans("View/edit Templates"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "theme", "path" => "")), "isallowed" => "files:theme"));
        // line 14
        echo "
";
        // line 15
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (isset($context["sub"])) { $_sub_ = $context["sub"]; } else { $_sub_ = null; }
        if (isset($context["page_nav"])) { $_page_nav_ = $context["page_nav"]; } else { $_page_nav_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt')->trans("File Management"), 2 => $_sub_, 3 => ($_page_nav_ == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  21 => 14,  19 => 1,);
    }
}
/* {% set sub = [*/
/*     {*/
/*         icon: 'fa:folder-open-o',*/
/*         label: __('Uploaded files'),*/
/*         link: path('files', {'namespace': 'files', 'path': ''}),*/
/*         isallowed: 'files:uploads'*/
/*     }, {*/
/*         icon: 'fa:desktop',*/
/*         label: __('View/edit Templates'),*/
/*         link: path('files', {'namespace': 'theme', 'path': ''}),*/
/*         isallowed: 'files:theme'*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:folder-open', __('File Management'), sub, (page_nav == 'Settings/FileManagement')) }}*/
/* */
