<?php

/* _base/_page.twig */
class __TwigTemplate_db7ad8edc13a7c574f154775a757515b46621df57857ea1e4c19081584a6b683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["page_locale_long"] = $this->getAttribute($_app_, "locale", array());
        // line 15
        if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
        $context["page_locale_short"] = twig_slice($this->env, $_page_locale_long_, 0, 2);
        // line 16
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["page_timezone_offset"] = $this->getAttribute($_app_, "timezone_offset", array());
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 19
            echo "    ";
            $context["page_title"] = $this->renderBlock("page_title", $context, $blocks);
        } else {
            // line 21
            echo "    ";
            $context["page_title"] = (($this->renderBlock("page_title", $context, $blocks) . " » ") . $this->renderBlock("page_subtitle", $context, $blocks));
        }
        // line 23
        echo "
";
        // line 25
        $context["page_scripts_inc"] = array(0 => "view/js/lib.min.js");
        // line 28
        echo "
";
        // line 30
        $context["localepath"] = "view/js/locale/datepicker/";
        // line 31
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
        if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
        if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute($_paths_, "apppath", array()) . "/") . $_localepath_) . $_page_locale_long_) . ".min.js"))) {
            // line 32
            echo "    ";
            if (isset($context["page_scripts_inc"])) { $_page_scripts_inc_ = $context["page_scripts_inc"]; } else { $_page_scripts_inc_ = null; }
            if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
            if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
            $context["page_scripts_inc"] = twig_array_merge($_page_scripts_inc_, array(0 => (($_localepath_ . $_page_locale_long_) . ".min.js")));
        } elseif ((($_page_locale_short_ != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute($_paths_, "apppath", array()) . "/") . $_localepath_) . $_page_locale_short_) . ".min.js")))) {
            // line 34
            echo "    ";
            if (isset($context["page_scripts_inc"])) { $_page_scripts_inc_ = $context["page_scripts_inc"]; } else { $_page_scripts_inc_ = null; }
            if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
            if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
            $context["page_scripts_inc"] = twig_array_merge($_page_scripts_inc_, array(0 => (($_localepath_ . $_page_locale_short_) . ".min.js")));
        }
        // line 36
        echo "
";
        // line 38
        $context["localepath"] = "view/js/locale/moment/";
        // line 39
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
        if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
        if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute($_paths_, "apppath", array()) . "/") . $_localepath_) . $_page_locale_long_) . ".min.js"))) {
            // line 40
            echo "    ";
            if (isset($context["page_scripts_inc"])) { $_page_scripts_inc_ = $context["page_scripts_inc"]; } else { $_page_scripts_inc_ = null; }
            if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
            if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
            $context["page_scripts_inc"] = twig_array_merge($_page_scripts_inc_, array(0 => (($_localepath_ . $_page_locale_long_) . ".min.js")));
        } elseif ((($_page_locale_short_ != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute($_paths_, "apppath", array()) . "/") . $_localepath_) . $_page_locale_short_) . ".min.js")))) {
            // line 42
            echo "    ";
            if (isset($context["page_scripts_inc"])) { $_page_scripts_inc_ = $context["page_scripts_inc"]; } else { $_page_scripts_inc_ = null; }
            if (isset($context["localepath"])) { $_localepath_ = $context["localepath"]; } else { $_localepath_ = null; }
            if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
            $context["page_scripts_inc"] = twig_array_merge($_page_scripts_inc_, array(0 => (($_localepath_ . $_page_locale_short_) . ".min.js")));
        }
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 47
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 48
        if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
        echo twig_escape_filter($this->env, $_page_locale_short_, "html", null, true);
        echo "\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 54
        if (isset($context["page_title"])) { $_page_title_ = $context["page_title"]; } else { $_page_title_ = null; }
        echo trim(strip_tags($_page_title_));
        echo " – ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 56
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
        echo "view/css/lib.css\">

    <!--[if lt IE 9]>
        <link rel=\"stylesheet\" href=\"";
        // line 59
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
        echo "view/css/bolt-old-ie.css\" media=\"screen, projection\">
    <![endif]-->

    <!--[if gte IE 9]><!-->
        <link rel=\"stylesheet\" href=\"";
        // line 63
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
        echo "view/css/bolt.css\" media=\"screen, projection\">
    <!--<![endif]-->

    ";
        // line 66
        if (isset($context["page_scripts_inc"])) { $_page_scripts_inc_ = $context["page_scripts_inc"]; } else { $_page_scripts_inc_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_page_scripts_inc_);
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 67
            echo "<script src=\"";
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            if (isset($context["script"])) { $_script_ = $context["script"]; } else { $_script_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_paths_, "app", array()) . $_script_), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 70
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/favicon"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/favicon"), "method"), "html", null, true);
        } else {
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
            echo "view/img/favicon-bolt.ico";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 71
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon"), "method"), "html", null, true);
        } else {
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 72
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method"), "html", null, true);
        } else {
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-72x72.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 73
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method"), "html", null, true);
        } else {
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-114x114.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 74
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method")) {
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method"), "html", null, true);
        } else {
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
            echo "view/img/apple-touch-icon-144x144.png";
        }
        echo "\">

    ";
        // line 77
        echo "<!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body";
        // line 83
        if (isset($context["page_bodyclass"])) { $_page_bodyclass_ = $context["page_bodyclass"]; } else { $_page_bodyclass_ = null; }
        if ($_page_bodyclass_) {
            echo " class=\"";
            if (isset($context["page_bodyclass"])) { $_page_bodyclass_ = $context["page_bodyclass"]; } else { $_page_bodyclass_ = null; }
            echo twig_escape_filter($this->env, $_page_bodyclass_, "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 84
        $this->displayBlock('page_plain', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        if (isset($context["page_locale_short"])) { $_page_locale_short_ = $context["page_locale_short"]; } else { $_page_locale_short_ = null; }
        if (isset($context["page_locale_long"])) { $_page_locale_long_ = $context["page_locale_long"]; } else { $_page_locale_long_ = null; }
        if (isset($context["page_timezone_offset"])) { $_page_timezone_offset_ = $context["page_timezone_offset"]; } else { $_page_timezone_offset_ = null; }
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["bconfig"] = array("locale" => array("short" => $_page_locale_short_, "long" => $_page_locale_long_), "timezone" => array("offset" => $_page_timezone_offset_), "paths" => array("bolt" => $this->getAttribute($_paths_, "bolt", array()), "async" => $this->getAttribute($_paths_, "async", array()), "app" => $this->getAttribute($_paths_, "app", array()), "root" => $this->getAttribute($_paths_, "root", array()), "origin" => $this->getAttribute($_paths_, "rooturl", array())), "uploadConfig" => array("maxSize" => $this->getAttribute($this->getAttribute($_app_, "filepermissions", array(), "array"), "getMaxUploadSize", array(), "method"), "maxSizeNice" => $this->getAttribute($this->getAttribute($_app_, "filepermissions", array(), "array"), "getMaxUploadSizeNice", array(), "method")), "ckeditor" => array("images" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/images"), "method")), "styles" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/styles"), "method")), "tables" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/tables"), "method")), "anchor" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/anchor"), "method")), "fontcolor" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "align" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/align"), "method")), "subsuper" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/subsuper"), "method")), "embed" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/embed"), "method")), "blockquote" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/blockquote"), "method")), "ruler" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/ruler"), "method")), "strike" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/strike"), "method")), "underline" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/underline"), "method")), "codesnippet" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/codesnippet"), "method")), "specialchar" => (0 + $this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/specialchar"), "method")), "ck" => ((twig_test_iterable($this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/ck"), "method"))) ? ($this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/ck"), "method")) : (false)), "filebrowser" => ((twig_test_iterable($this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) ? ($this->getAttribute($_config_, "get", array(0 => "general/wysiwyg/filebrowser"), "method")) : (false))));
        // line 125
        echo "<script src=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app", array()), "html", null, true);
        echo "view/js/bolt.min.js\" data-config=\"";
        if (isset($context["bconfig"])) { $_bconfig_ = $context["bconfig"]; } else { $_bconfig_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($_bconfig_), "html", null, true);
        echo "\" data-jsdata=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_app_, "jsdata", array())), "html", null, true);
        echo "\"></script>

";
        // line 127
        $this->displayBlock('page_script', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/grunt/livereload"), "method")) {
            // line 132
            echo "    <script src=\"";
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "hosturl", array()), "html", null, true);
            echo ":";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "get", array(0 => "general/grunt/livereloadport"), "method"), "html", null, true);
            echo "/livereload.js\"></script>
";
        }
        // line 134
        echo "
</body>
</html>
";
    }

    // line 84
    public function block_page_plain($context, array $blocks = array())
    {
    }

    // line 127
    public function block_page_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 127,  300 => 84,  293 => 134,  283 => 132,  280 => 131,  277 => 129,  275 => 127,  262 => 125,  254 => 86,  251 => 85,  249 => 84,  239 => 83,  231 => 77,  218 => 74,  206 => 73,  194 => 72,  182 => 71,  170 => 70,  167 => 69,  156 => 67,  151 => 66,  144 => 63,  136 => 59,  129 => 56,  120 => 54,  110 => 48,  107 => 47,  103 => 44,  96 => 42,  89 => 40,  83 => 39,  81 => 38,  78 => 36,  71 => 34,  64 => 32,  58 => 31,  56 => 30,  53 => 28,  51 => 25,  48 => 23,  44 => 21,  40 => 19,  38 => 18,  35 => 17,  32 => 16,  29 => 15,  26 => 14,  23 => 13,  21 => 12,);
    }
}
/* {##*/
/*  # Standard HTML page template*/
/*  #*/
/*  # Dont't use, use "_page-<nav|no_nav|popup>.twig" instead!*/
/*  #*/
/*  # Blocks: page_nav:      Navigation path, like: "Dashboard", "Settings/Configuration", "Content/*", ...*/
/*  #         page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {%- spaceless %}*/
/* */
/* {% set page_locale_long = app.locale %}*/
/* {% set page_locale_short = page_locale_long|slice(0, 2) %}*/
/* {% set page_timezone_offset = app.timezone_offset %}*/
/* */
/* {% if block('page_subtitle') is empty %}*/
/*     {% set page_title = block('page_title') %}*/
/* {% else %}*/
/*     {% set page_title = block('page_title') ~ ' » ' ~ block('page_subtitle') %}*/
/* {% endif %}*/
/* */
/* {# TODO: Refactor this out. Too much business logic in the template. #}*/
/* {% set page_scripts_inc = [*/
/*     'view/js/lib.min.js'*/
/* ] %}*/
/* */
/* {# Add locale include for datepicker #}*/
/* {% set localepath = 'view/js/locale/datepicker/' %}*/
/* {% if file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {# Add locale include for moment #}*/
/* {% set localepath = 'view/js/locale/moment/' %}*/
/* {% if file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.apppath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {% endspaceless -%}*/
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ page_locale_short }}">*/
/* <head>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">*/
/* */
/*     <title>{{ page_title|striptags|trim|raw }} – {{ app.config.get('general/branding/name') }}</title>*/
/* */
/*     <link rel="stylesheet" href="{{ paths.app }}view/css/lib.css">*/
/* */
/*     <!--[if lt IE 9]>*/
/*         <link rel="stylesheet" href="{{ paths.app }}view/css/bolt-old-ie.css" media="screen, projection">*/
/*     <![endif]-->*/
/* */
/*     <!--[if gte IE 9]><!-->*/
/*         <link rel="stylesheet" href="{{ paths.app }}view/css/bolt.css" media="screen, projection">*/
/*     <!--<![endif]-->*/
/* */
/*     {% for script in page_scripts_inc -%}*/
/*         <script src="{{ paths.app ~ script }}"></script>*/
/*     {% endfor %}*/
/* */
/*     <link rel="shortcut icon" href="{% if app.config.get('general/branding/favicon') %}{{ app.config.get('general/branding/favicon') }}{% else %}{{ paths.app }}view/img/favicon-bolt.ico{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="57x57" href="{% if app.config.get('general/branding/apple-touch-icon') %}{{ app.config.get('general/branding/apple-touch-icon') }}{% else %}{{ paths.app }}view/img/apple-touch-icon.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="{% if app.config.get('general/branding/apple-touch-icon-72x72') %}{{ app.config.get('general/branding/apple-touch-icon-72x72') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-72x72.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="{% if app.config.get('general/branding/apple-touch-icon-114x114') %}{{ app.config.get('general/branding/apple-touch-icon-114x114') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-114x114.png{% endif %}">*/
/*     <link rel="apple-touch-icon" sizes="144x144" href="{% if app.config.get('general/branding/apple-touch-icon-144x144') %}{{ app.config.get('general/branding/apple-touch-icon-144x144') }}{% else %}{{ paths.app }}view/img/apple-touch-icon-144x144.png{% endif %}">*/
/* */
/*     {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -#}*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body{% if page_bodyclass %} class="{{ page_bodyclass }}"{% endif %}>*/
/*     {% block page_plain %}{% endblock page_plain %}*/
/* */
/* {% set bconfig = {*/
/*     locale: {*/
/*         short: page_locale_short,*/
/*         long: page_locale_long,*/
/*     },*/
/*     timezone: {*/
/*         offset: page_timezone_offset,*/
/*     },*/
/*     paths: {*/
/*         bolt:  paths.bolt,*/
/*         async: paths.async,*/
/*         app:   paths.app,*/
/*         root:  paths.root,*/
/*         origin: paths.rooturl*/
/*     },*/
/*     uploadConfig: {*/
/*         maxSize: app['filepermissions'].getMaxUploadSize(),*/
/*         maxSizeNice: app['filepermissions'].getMaxUploadSizeNice(),*/
/*     },*/
/*     ckeditor: {*/
/*         images:      0 + config.get('general/wysiwyg/images'),*/
/*         styles:      0 + config.get('general/wysiwyg/styles'),*/
/*         tables:      0 + config.get('general/wysiwyg/tables'),*/
/*         anchor:      0 + config.get('general/wysiwyg/anchor'),*/
/*         fontcolor:   0 + config.get('general/wysiwyg/fontcolor'),*/
/*         align:       0 + config.get('general/wysiwyg/align'),*/
/*         subsuper:    0 + config.get('general/wysiwyg/subsuper'),*/
/*         embed:       0 + config.get('general/wysiwyg/embed'),*/
/*         blockquote:  0 + config.get('general/wysiwyg/blockquote'),*/
/*         ruler:       0 + config.get('general/wysiwyg/ruler'),*/
/*         strike:      0 + config.get('general/wysiwyg/strike'),*/
/*         underline:   0 + config.get('general/wysiwyg/underline'),*/
/*         codesnippet: 0 + config.get('general/wysiwyg/codesnippet'),*/
/*         specialchar: 0 + config.get('general/wysiwyg/specialchar'),*/
/*         ck:          (config.get('general/wysiwyg/ck') is iterable) ? config.get('general/wysiwyg/ck') : false,*/
/*         filebrowser: (config.get('general/wysiwyg/filebrowser') is iterable)*/
/*                         ? config.get('general/wysiwyg/filebrowser') : false,*/
/*     },*/
/* } %}*/
/* <script src="{{ paths.app }}view/js/bolt.min.js" data-config="{{ bconfig|json_encode }}" data-jsdata="{{ app.jsdata|json_encode }}"></script>*/
/* */
/* {% block page_script %}*/
/* {% endblock page_script %}*/
/* */
/* {# Add the Grunt livereload script, if Grunt livereload is enabled in config.yml. #}*/
/* {% if app.config.get('general/grunt/livereload') %}*/
/*     <script src="{{ paths.hosturl }}:{{ app.config.get('general/grunt/livereloadport') }}/livereload.js"></script>*/
/* {% endif %}*/
/* */
/* </body>*/
/* </html>*/
/* */
