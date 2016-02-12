<?php

/* files/_folders.twig */
class __TwigTemplate_4ebedef59d49e81de1dbe2ed2ee78a298710ca31eb7e883fdb37e7be12e3d7b9 extends Twig_Template
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
        echo $this->env->getExtension('Bolt')->trans("Folders");
        echo "</th>
            <th colspan=\"2\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Modified");
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 10
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_context_, "folders", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 11
            echo "            <tr>
                <td>
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>
                    <a href=\"";
            // line 14
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => $this->getAttribute($_folder_, "newpath", array()), "namespace" => $this->getAttribute($_context_, "namespace", array()))), "html", null, true);
            echo "\">
                        <b>";
            // line 15
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($_folder_, "foldername", array()), 60));
            echo "/</b>
                    </a>
                </td>
                <td>
                    <time class=\"moment\" datetime=\"";
            // line 19
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_folder_, "modified", array()), "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "modified", array()), "html", null, true);
            echo "\">
                        ";
            // line 20
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "modified", array()), "html", null, true);
            echo "
                    </time>
                </td>
                <td class=\"actions\">
                ";
            // line 24
            if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
            if (($this->getAttribute($_context_, "form", array()) != false)) {
                // line 25
                echo "                    <div class=\"btn-group\">
                    ";
                // line 26
                if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                if ($this->getAttribute($_folder_, "writable", array())) {
                    // line 27
                    echo "
                        <a class=\"btn dropdown-toggle btn-default btn-sm\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-info-circle\"></i>
                            ";
                    // line 30
                    echo $this->env->getExtension('Bolt')->trans("Options");
                    echo "
                            <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"#\"
                                   data-action=\"bolt.files.renameFolder('";
                    // line 37
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_context_, "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 38
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute($_context_, "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 39
                    if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "foldername", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-keyboard-o\"></i>
                                    ";
                    // line 43
                    if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                    echo $this->env->getExtension('Bolt')->trans("Rename %foldername%", array("%foldername%" => $this->getAttribute($_folder_, "foldername", array())));
                    echo "
                                </a>
                                <a href=\"#\"
                                   class=\"confirm\"
                                   data-action=\"bolt.files.deleteFolder('";
                    // line 47
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_context_, "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 48
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute($_context_, "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 49
                    if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "foldername", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-ban\"></i>
                                    ";
                    // line 53
                    if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                    echo $this->env->getExtension('Bolt')->trans("Delete %foldername%", array("%foldername%" => $this->getAttribute($_folder_, "foldername", array())));
                    echo "
                                </a>
                            </li>
                        </ul>
                    ";
                } else {
                    // line 58
                    echo "                        <a class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-exclamation-circle\"></i>
                            ";
                    // line 60
                    echo $this->env->getExtension('Bolt')->trans("Folder permissions insufficient");
                    echo "
                        </a>
                    ";
                }
                // line 63
                echo "                    </div>
                ";
            }
            // line 65
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files/_folders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 68,  167 => 65,  163 => 63,  157 => 60,  153 => 58,  144 => 53,  136 => 49,  131 => 48,  126 => 47,  118 => 43,  110 => 39,  105 => 38,  100 => 37,  90 => 30,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  68 => 20,  60 => 19,  52 => 15,  46 => 14,  41 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="dashboardlisting">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{{ __('Folders') }}</th>*/
/*             <th colspan="2">{{ __('Modified') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/*         {% for folder in context.folders %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <i class="fa fa-fw fa-folder-open-o"></i>*/
/*                     <a href="{{ path('files', {'path': folder.newpath, 'namespace': context.namespace}) }}">*/
/*                         <b>{{ folder.foldername|excerpt(60)|shy }}/</b>*/
/*                     </a>*/
/*                 </td>*/
/*                 <td>*/
/*                     <time class="moment" datetime="{{ folder.modified|date("c") }}" title="{{ folder.modified }}">*/
/*                         {{ folder.modified }}*/
/*                     </time>*/
/*                 </td>*/
/*                 <td class="actions">*/
/*                 {% if context.form != false %}*/
/*                     <div class="btn-group">*/
/*                     {% if folder.writable %}*/
/* */
/*                         <a class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown">*/
/*                             <i class="fa fa-info-circle"></i>*/
/*                             {{ __('Options') }}*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/* */
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li>*/
/*                                 <a href="#"*/
/*                                    data-action="bolt.files.renameFolder('{{ context.namespace }}',*/
/*                                                                     '{{ context.pathsegments|keys|last }}',*/
/*                                                                     '{{ folder.foldername }}',*/
/*                                                                     this);">*/
/* */
/*                                     <i class="fa fa-keyboard-o"></i>*/
/*                                     {{ __('Rename %foldername%', {'%foldername%': folder.foldername}) }}*/
/*                                 </a>*/
/*                                 <a href="#"*/
/*                                    class="confirm"*/
/*                                    data-action="bolt.files.deleteFolder('{{ context.namespace }}',*/
/*                                                                     '{{ context.pathsegments|keys|last }}',*/
/*                                                                     '{{ folder.foldername }}',*/
/*                                                                     this);">*/
/* */
/*                                     <i class="fa fa-ban"></i>*/
/*                                     {{ __('Delete %foldername%', {'%foldername%': folder.foldername}) }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% else %}*/
/*                         <a class="btn btn-default btn-sm">*/
/*                             <i class="fa fa-exclamation-circle"></i>*/
/*                             {{ __('Folder permissions insufficient') }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
