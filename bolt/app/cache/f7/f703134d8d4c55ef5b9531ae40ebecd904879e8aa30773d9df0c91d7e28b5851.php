<?php

/* nav/_primary.twig */
class __TwigTemplate_247f673639bdd81148d3ace55a0cce316225fab91259519350d2479d7548de63 extends Twig_Template
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
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
        ";
        // line 7
        echo "        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_app_, "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method"), "Bolt")) : ("Bolt")), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"navbar-site hidden-xs\"><span>";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/sitename"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        } else {
            echo "Site";
        }
        echo "</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        ";
        // line 17
        echo "        <form class=\"navbar-form hidden-xs\" role=\"search\">
            <div class=\"form-group has-feedback\">
                <input type=\"text\" class=\"form-control semitransparent omnisearch\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("Find");
        echo "…\">
                <span class=\"form-control-feedback semitransparent\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"";
        // line 26
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            ";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("View site");
        echo "
        </a>
    </li>

    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            ";
        // line 35
        echo $this->env->getExtension('Bolt')->trans("Close editor");
        echo "
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-fw fa-user\"></i> <span>";
        // line 41
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute($_user_, "displayname", array()), 16);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("Profile");
        echo "</a>
            </li>
            <li>
                <form action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> ";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("Logout");
        echo "</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "nav/_primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  109 => 48,  101 => 45,  93 => 41,  84 => 35,  74 => 28,  68 => 26,  58 => 19,  54 => 17,  36 => 9,  29 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="navbar-header">*/
/*     <button type="button" class="navbar-toggle" data-xaction="bolt.sidebar.toggle()">*/
/*         <i class="fa fa-fw fa-bars"></i> MENU*/
/*     </button>*/
/*     <a class="navbar-brand" href="{{ path('dashboard') }}">*/
/*         {# <img src="{{ paths.app }}view/img/bolt-icon.svg"> #}*/
/*         {{ app.config.get('general/branding/name')|default('Bolt') }}*/
/*     </a>*/
/*     <a href="{{ path('dashboard') }}" class="navbar-site hidden-xs"><span>{% if app.config.get('general/sitename') %}{{ app.config.get('general/sitename') }}{% else %}Site{% endif %}</span></a>*/
/* </div>*/
/* */
/* */
/* <ul class="nav navbar-top-links navbar-right">*/
/* */
/*     <li>*/
/*         {# one omnisearch here, for "small and up", the other in the side-navbar #}*/
/*         <form class="navbar-form hidden-xs" role="search">*/
/*             <div class="form-group has-feedback">*/
/*                 <input type="text" class="form-control semitransparent omnisearch" placeholder="{{ __('Find') }}…">*/
/*                 <span class="form-control-feedback semitransparent"><i class="fa fa-search"></i></span>*/
/*             </div>*/
/*         </form>*/
/*     </li>*/
/* */
/*     <li>*/
/*         <a href="{{ paths.root }}" target="_blank" class="hidden-xs">*/
/*             <i class="fa fa-fw fa-external-link-square"></i>*/
/*             {{ __('View site') }}*/
/*         </a>*/
/*     </li>*/
/* */
/*     <li class="close-live-editor">*/
/*         <a>*/
/*             <i class="fa fa-fw fa-times-circle-o"></i>*/
/*             {{ __('Close editor') }}*/
/*         </a>*/
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*             <i class="fa fa-fw fa-user"></i> <span>{{ user.displayname|trimtext(16) }}</span> <i class="fa fa-caret-down"></i>*/
/*         </a>*/
/*         <ul class="dropdown-menu dropdown-user" role="menu" >*/
/*             <li>*/
/*                 <a href="{{ path('profile') }}" role="menuitem" tabindex="-1"><i class="fa fa-fw fa-gear"></i> {{ __('Profile') }}</a>*/
/*             </li>*/
/*             <li>*/
/*                 <form action="{{ path('logout') }}" method="POST">*/
/*                     <button class="btn btn-link btn-block" type="submit">*/
/*                         <span class="pull-left"><i class="fa fa-fw fa-sign-out" style="margin-left: 4px;"></i> {{ __('Logout') }}</span>*/
/*                     </button>*/
/*                 </form>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
