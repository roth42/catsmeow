<?php

/* nav/_secondary.twig */
class __TwigTemplate_1d401b106fb2da7ceffbf4ce6a3dbab6421c166542d53fa643e5048c6cd002ef extends Twig_Template
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
        $context["nav"] = $this->loadTemplate("nav/_macros.twig", "nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ( !(null === $this->getAttribute($this->getAttribute($_app_, "session", array()), "get", array(0 => "user"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            $this->loadTemplate("nav/_secondary-search.twig", "nav/_secondary.twig", 7)->display($context);
            // line 8
            echo "        
        ";
            // line 10
            echo "        ";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (isset($context["page_nav"])) { $_page_nav_ = $context["page_nav"]; } else { $_page_nav_ = null; }
            echo $_nav_->getlink("fa:dashboard", $this->env->getExtension('Bolt')->trans("Dashboard"), "dashboard", ($_page_nav_ == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            echo $_nav_->getheading($this->env->getExtension('Bolt')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            $this->loadTemplate("nav/_secondary-content.twig", "nav/_secondary.twig", 19)->display($context);
            // line 20
            echo "
        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-configuration.twig", "nav/_secondary.twig", 23)->display($context);
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-filemanagement.twig", "nav/_secondary.twig", 24)->display($context);
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                $this->loadTemplate("nav/_secondary-translations.twig", "nav/_secondary.twig", 25)->display($context);
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (($this->getAttribute($this->getAttribute($_app_, "extensions", array()), "hasMenuoptions", array()) || $this->env->getExtension('Bolt')->isAllowed("extensions||extensions:config"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    $this->loadTemplate("nav/_secondary-extensions.twig", "nav/_secondary.twig", 28)->display($context);
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if (isset($context["nav_config"])) { $_nav_config_ = $context["nav_config"]; } else { $_nav_config_ = null; }
                if (isset($context["nav_files"])) { $_nav_files_ = $context["nav_files"]; } else { $_nav_files_ = null; }
                if (isset($context["nav_trans"])) { $_nav_trans_ = $context["nav_trans"]; } else { $_nav_trans_ = null; }
                if (isset($context["nav_extend"])) { $_nav_extend_ = $context["nav_extend"]; } else { $_nav_extend_ = null; }
                if ((((trim($_nav_config_) || trim($_nav_files_)) || trim($_nav_trans_)) || trim($_nav_extend_))) {
                    // line 34
                    echo "                ";
                    if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                    echo $_nav_->getheading($this->env->getExtension('Bolt')->trans("Settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    if (isset($context["nav_config"])) { $_nav_config_ = $context["nav_config"]; } else { $_nav_config_ = null; }
                    echo twig_escape_filter($this->env, $_nav_config_, "html", null, true);
                    echo "
                ";
                    // line 37
                    if (isset($context["nav_files"])) { $_nav_files_ = $context["nav_files"]; } else { $_nav_files_ = null; }
                    echo twig_escape_filter($this->env, $_nav_files_, "html", null, true);
                    echo "
                ";
                    // line 38
                    if (isset($context["nav_trans"])) { $_nav_trans_ = $context["nav_trans"]; } else { $_nav_trans_ = null; }
                    echo twig_escape_filter($this->env, $_nav_trans_, "html", null, true);
                    echo "
                ";
                    // line 39
                    if (isset($context["nav_extend"])) { $_nav_extend_ = $context["nav_extend"]; } else { $_nav_extend_ = null; }
                    echo twig_escape_filter($this->env, $_nav_extend_, "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            echo $_nav_->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  176 => 56,  173 => 55,  164 => 51,  161 => 50,  158 => 48,  151 => 45,  147 => 43,  143 => 41,  137 => 39,  132 => 38,  127 => 37,  122 => 36,  115 => 34,  109 => 33,  106 => 32,  103 => 31,  100 => 30,  97 => 29,  92 => 28,  88 => 27,  86 => 26,  81 => 25,  76 => 24,  71 => 23,  68 => 22,  65 => 20,  63 => 19,  57 => 18,  48 => 14,  45 => 13,  37 => 10,  34 => 8,  31 => 7,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'nav/_macros.twig' as nav %}*/
/* */
/* <ul class="nav">*/
/*     {% if app.session.get('user') is not null %}*/
/* */
/*         {# Omnisearch: one here for "extra small", the other in the header-navbar #}*/
/*         {% include 'nav/_secondary-search.twig' %}*/
/*         */
/*         {# Dashboard #}*/
/*         {{ nav.link('fa:dashboard', __('Dashboard'), 'dashboard', (page_nav == 'Dashboard')) }}*/
/* */
/*         {# View site #}*/
/*         <li class="visible-xs">*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="icon fa fa-external-link-square"></i> {{ __('View site') }}</a>*/
/*         </li>*/
/* */
/*         {# Contenttypes #}*/
/*         {{ nav.heading(__('Content'), 'fa:file-text') }}*/
/*         {% include 'nav/_secondary-content.twig' %}*/
/* */
/*         {# Settings #}*/
/*         {% if isallowed('settings') %}*/
/*             {% set nav_config %}{% include 'nav/_secondary-configuration.twig' %}{% endset %}*/
/*             {% set nav_files %}{% include 'nav/_secondary-filemanagement.twig' %}{% endset %}*/
/*             {% set nav_trans %}{% include 'nav/_secondary-translations.twig' %}{% endset %}*/
/*             {# Link to Extend Bolt #}*/
/*             {% if app.extensions.hasMenuoptions or isallowed('extensions||extensions:config') %}*/
/*                 {% set nav_extend %}{% include 'nav/_secondary-extensions.twig' %}{% endset %}*/
/*             {% else %}*/
/*                 {% set nav_extend = '' %}*/
/*             {% endif %}*/
/* */
/*             {% if nav_config|trim or nav_files|trim or nav_trans|trim or nav_extend|trim %}*/
/*                 {{ nav.heading(__('Settings'), 'fa:wrench') }}*/
/* */
/*                 {{ nav_config }}*/
/*                 {{ nav_files }}*/
/*                 {{ nav_trans }}*/
/*                 {{ nav_extend }}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         {{ nav.collapse() }}*/
/* */
/*     {% else %}*/
/* */
/*         {# View site #}*/
/*         <li>*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="fa fa-external-link-square"></i> {{ __('View site') }}</a>*/
/*         </li>*/
/* */
/*         {# Login #}*/
/*         <li>*/
/*             <a href="{{ path('login') }}"><i class="fa fa-signin"></i> {{ __('Login') }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
