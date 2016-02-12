<?php

/* files/_files.twig */
class __TwigTemplate_10ccd0e8e122094301ed44ddd7961eac39674d886383b85e6071a06ea87f0f8a extends Twig_Template
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
        echo "<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
        echo "</th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.size");
        echo "</th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.modified");
        echo "</th>
            <th colspan=\"2\"></th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 12
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_context_, "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 13
            echo "            <tr>
                ";
            // line 15
            echo "                <td>
                    ";
            // line 16
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if (twig_in_filter($this->getAttribute($_file_, "type", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                // line 17
                echo "
                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        ";
                // line 20
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                if ($this->getAttribute($_file_, "readable", array())) {
                    // line 21
                    echo "                            <a href=\"";
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($_file_, "newpath", array()), 1000, 1000, "r"), "html", null, true);
                    echo "\"
                               class=\"magnific\"
                               title=\"Image: ";
                    // line 23
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_file_, "filename", array()), "html", null, true);
                    echo "\">
                                <b>";
                    // line 24
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 27
                    echo "                            <b>";
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 30
                echo "
                    ";
            } elseif (twig_in_filter($this->getAttribute($_file_, "type", array()), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "markdown", 5 => "json", 6 => "htm", 7 => "scss", 8 => "css", 9 => "less", 10 => "js", 11 => "yml"))) {
                // line 32
                echo "
                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        ";
                // line 35
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                if ($this->getAttribute($_file_, "readable", array())) {
                    // line 36
                    echo "                            <a href=\"";
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute($_context_, "namespace", array()), "file" => $this->getAttribute($_file_, "newpath", array()))), "html", null, true);
                    echo "\">
                                <b>";
                    // line 37
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 40
                    echo "                            <b>";
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo "</b>
                        ";
                }
                // line 42
                echo "
                        ";
                // line 43
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                if (( !$this->getAttribute($_file_, "readable", array()) ||  !$this->getAttribute($_file_, "writable", array()))) {
                    // line 44
                    echo "                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 46
                echo "
                    ";
            } else {
                // line 48
                echo "
                        <i class=\"fa fa-fw fa-link\"></i>

                        ";
                // line 51
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                if ($this->getAttribute($_file_, "readable", array())) {
                    // line 52
                    echo "                            <a href=\"";
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_file_, "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
                                <b>";
                    // line 53
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 56
                    echo "                            <b>";
                    if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_file_, "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                </td>
                ";
            // line 62
            echo "                <td style=\"min-width: 120px;\" class=\"hidden-xs hidden-sm\">
                    ";
            // line 63
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_file_, "filesize", array()), "html", null, true);
            echo ".
                    ";
            // line 64
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if ($this->getAttribute($_file_, "imagesize", array(), "any", true, true)) {
                // line 65
                echo "                       <br> ";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "imagesize", array()), "html", null, true);
                echo " px.
                    ";
            }
            // line 67
            echo "                </td>
                ";
            // line 69
            echo "                <td style=\"min-width: 140px;\" class=\"hidden-xs hidden-sm\">
                    <time class=\"moment\" datetime=\"";
            // line 70
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_file_, "modified", array()), "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_file_, "modified", array()), "html", null, true);
            echo "\">
                        ";
            // line 71
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_file_, "modified", array()), "html", null, true);
            echo "
                    </time>
                </td>
                ";
            // line 75
            echo "                <td class=\"listthumb\">
                    ";
            // line 76
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if ($this->getAttribute($_file_, "imagesize", array(), "any", true, true)) {
                // line 77
                echo "                        ";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                $context["thumb"] = $this->env->getExtension('Bolt')->showImage($this->getAttribute($_file_, "newpath", array()), 54, 40, "c");
                // line 78
                echo "                        <img ";
                if (isset($context["thumb"])) { $_thumb_ = $context["thumb"]; } else { $_thumb_ = null; }
                echo twig_slice($this->env, $_thumb_, 5, (twig_length_filter($this->env, $_thumb_) - 6));
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->trans("Thumbnail"), "html_attr");
                echo "\">
                    ";
            }
            // line 80
            echo "                </td>
                ";
            // line 82
            echo "                <td class=\"actions\" style=\"min-width: 16px;\">

                    <div class=\"btn-group\">

                        ";
            // line 86
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "stackbutton", array(0 => $_file_), "method"), "html", null, true);
            echo "

                        ";
            // line 88
            if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
            if (($this->getAttribute($_context_, "form", array()) != false)) {
                // line 89
                echo "                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 91
                echo $this->env->getExtension('Bolt')->trans("Options");
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"Bolt.files.renameFile('";
                // line 98
                if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_context_, "namespace", array()), "html", null, true);
                echo "', '";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "path", array()), "html", null, true);
                echo "', '";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "filename", array()), "html", null, true);
                echo "', this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 101
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo $this->env->getExtension('Bolt')->trans("Rename %foldername%", array("%foldername%" => $this->getAttribute($_file_, "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.deleteFile('";
                // line 105
                if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_context_, "namespace", array()), "html", null, true);
                echo "', '";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "newpath", array()), "html", null, true);
                echo "', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 107
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo $this->env->getExtension('Bolt')->trans("Delete %filename%", array("%filename%" => $this->getAttribute($_file_, "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.duplicateFile('";
                // line 111
                if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_context_, "namespace", array()), "html", null, true);
                echo "', '";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "newpath", array()), "html", null, true);
                echo "')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        ";
                // line 113
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo $this->env->getExtension('Bolt')->trans("Duplicate %filename%", array("%filename%" => $this->getAttribute($_file_, "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"nolink\">
                                        ";
                // line 119
                echo $this->env->getExtension('Bolt')->trans("Permissions");
                echo ":
                                        <strong><code>";
                // line 120
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_file_, "permissions", array()), "html", null, true);
                echo "</code></strong>
                                    </a>
                                </li>
                            </ul>
                        ";
            }
            // line 125
            echo "                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 130,  333 => 125,  324 => 120,  320 => 119,  310 => 113,  301 => 111,  293 => 107,  284 => 105,  276 => 101,  263 => 98,  253 => 91,  249 => 89,  246 => 88,  239 => 86,  233 => 82,  230 => 80,  221 => 78,  217 => 77,  214 => 76,  211 => 75,  204 => 71,  196 => 70,  193 => 69,  190 => 67,  183 => 65,  180 => 64,  175 => 63,  172 => 62,  169 => 60,  166 => 59,  158 => 56,  151 => 53,  145 => 52,  142 => 51,  137 => 48,  133 => 46,  129 => 44,  126 => 43,  123 => 42,  116 => 40,  109 => 37,  102 => 36,  99 => 35,  94 => 32,  90 => 30,  82 => 27,  75 => 24,  70 => 23,  63 => 21,  60 => 20,  55 => 17,  52 => 16,  49 => 15,  46 => 13,  41 => 12,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="dashboardlisting">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{{ __('page.ckeditor-browse-server.files') }}</th>*/
/*             <th class="hidden-xs hidden-sm">{{ __('page.ckeditor-browse-server.size') }}</th>*/
/*             <th class="hidden-xs hidden-sm">{{ __('page.ckeditor-browse-server.modified') }}</th>*/
/*             <th colspan="2"></th>*/
/*         </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/*         {% for file in context.files %}*/
/*             <tr>*/
/*                 {# Column: Filename #}*/
/*                 <td>*/
/*                     {% if file.type in ['jpeg', 'jpg', 'png', 'gif'] %}*/
/* */
/*                         <i class="fa fa-fw fa-file-image-o"></i>*/
/* */
/*                         {% if file.readable %}*/
/*                             <a href="{{ file.newpath|thumbnail(1000, 1000, 'r') }}"*/
/*                                class="magnific"*/
/*                                title="Image: {{ file.filename }}">*/
/*                                 <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <b>{{ file.filename|excerpt(80)|shy }} </b>*/
/*                             <i class="fa fa-lock"></i>*/
/*                         {% endif %}*/
/* */
/*                     {% elseif file.type in ['twig', 'txt', 'html', 'md', 'markdown', 'json', 'htm', 'scss', 'css', 'less', 'js', 'yml'] %}*/
/* */
/*                         <i class="fa fa-fw fa-file-code-o"></i>*/
/* */
/*                         {% if file.readable %}*/
/*                             <a href="{{ path('fileedit', {'namespace': context.namespace, 'file': file.newpath}) }}">*/
/*                                 <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                         {% endif %}*/
/* */
/*                         {% if not file.readable or not file.writable %}*/
/*                             <i class="fa fa-lock"></i>*/
/*                         {% endif %}*/
/* */
/*                     {% else %}*/
/* */
/*                         <i class="fa fa-fw fa-link"></i>*/
/* */
/*                         {% if file.readable %}*/
/*                             <a href="{{ file.url }}" target="_blank">*/
/*                                 <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <b>{{ file.filename|excerpt(80)|shy }} </b>*/
/*                             <i class="fa fa-lock"></i>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 {# Column: Filesize #}*/
/*                 <td style="min-width: 120px;" class="hidden-xs hidden-sm">*/
/*                     {{ file.filesize }}.*/
/*                     {% if file.imagesize is defined %}*/
/*                        <br> {{ file.imagesize }} px.*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 {# Column: Modified #}*/
/*                 <td style="min-width: 140px;" class="hidden-xs hidden-sm">*/
/*                     <time class="moment" datetime="{{ file.modified|date("c") }}" title="{{ file.modified }}">*/
/*                         {{ file.modified }}*/
/*                     </time>*/
/*                 </td>*/
/*                 {# Column: Thumbnail #}*/
/*                 <td class="listthumb">*/
/*                     {% if file.imagesize is defined %}*/
/*                         {% set thumb = file.newpath|showimage(54, 40, 'c') %}{# Hack to add alt attribute #}*/
/*                         <img {{ thumb|slice(5, thumb|length - 6)|raw }} alt="{{ __('Thumbnail')|e('html_attr') }}">*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 {# Column: Actions #}*/
/*                 <td class="actions" style="min-width: 16px;">*/
/* */
/*                     <div class="btn-group">*/
/* */
/*                         {{ macro.stackbutton(file) }}*/
/* */
/*                         {% if context.form != false %}*/
/*                             <a class="btn dropdown-toggle btn-default btn-sm hidden-xs" data-toggle="dropdown">*/
/*                                 <i class="fa fa-info-circle"></i>*/
/*                                 {{ __('Options') }}*/
/*                                 <span class="caret"></span>*/
/*                             </a>*/
/* */
/*                             <ul class="dropdown-menu pull-right hidden-xs">*/
/*                                 <li>*/
/*                                     <a href="#"*/
/*                                        data-action="Bolt.files.renameFile('{{ context.namespace }}', '{{ file.path }}', '{{ file.filename }}', this);">*/
/* */
/*                                         <i class="fa fa-keyboard-o"></i>*/
/*                                         {{ __('Rename %foldername%', {'%foldername%': file.filename}) }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" data-action="Bolt.files.deleteFile('{{ context.namespace }}', '{{ file.newpath }}', this);">*/
/*                                         <i class="fa fa-ban"></i>*/
/*                                         {{ __('Delete %filename%', {'%filename%': file.filename}) }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" data-action="Bolt.files.duplicateFile('{{ context.namespace }}', '{{ file.newpath }}')">*/
/*                                         <i class="fa fa-files-o"></i>*/
/*                                         {{ __('Duplicate %filename%', {'%filename%': file.filename }) }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a class="nolink">*/
/*                                         {{ __('Permissions') }}:*/
/*                                         <strong><code>{{ file.permissions }}</code></strong>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
