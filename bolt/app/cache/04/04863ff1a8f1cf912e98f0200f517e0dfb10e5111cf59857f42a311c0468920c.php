<?php

/* _macro/_files_path.twig */
class __TwigTemplate_f38204b72518a9723d91286788810735cb55b1b5cf5b8186cd70374af5f589f7 extends Twig_Template
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
    }

    // line 1
    public function getfiles_path($__pathsegments__ = null, $__namespace__ = null, $__pathoptions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pathsegments" => $__pathsegments__,
            "namespace" => $__namespace__,
            "pathoptions" => $__pathoptions__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (isset($context["pathoptions"])) { $_pathoptions_ = $context["pathoptions"]; } else { $_pathoptions_ = null; }
            $context["namespace_path"] = $this->env->getExtension('routing')->getPath("files", $_pathoptions_);
            // line 3
            echo "    <p>
        ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("Path:");
            echo "
        <a href=\"";
            // line 5
            if (isset($context["namespace_path"])) { $_namespace_path_ = $context["namespace_path"]; } else { $_namespace_path_ = null; }
            echo twig_escape_filter($this->env, $_namespace_path_, "html", null, true);
            echo "\">";
            if (isset($context["namespace"])) { $_namespace_ = $context["namespace"]; } else { $_namespace_ = null; }
            echo twig_escape_filter($this->env, $_namespace_, "html", null, true);
            echo "</a>

        ";
            // line 7
            if (isset($context["pathsegments"])) { $_pathsegments_ = $context["pathsegments"]; } else { $_pathsegments_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_pathsegments_);
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            /
            ";
                // line 9
                if (isset($context["pathoptions"])) { $_pathoptions_ = $context["pathoptions"]; } else { $_pathoptions_ = null; }
                if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                if (isset($context["namespace"])) { $_namespace_ = $context["namespace"]; } else { $_namespace_ = null; }
                $context["pathoptions"] = twig_array_merge($_pathoptions_, array("path" => $_path_, "namespace" => $_namespace_));
                // line 10
                echo "            <a href=\"";
                if (isset($context["pathoptions"])) { $_pathoptions_ = $context["pathoptions"]; } else { $_pathoptions_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", $_pathoptions_), "html", null, true);
                echo "\">";
                if (isset($context["segment"])) { $_segment_ = $context["segment"]; } else { $_segment_ = null; }
                echo twig_escape_filter($this->env, $_segment_, "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </p>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  68 => 10,  63 => 9,  60 => 8,  55 => 7,  46 => 5,  42 => 4,  39 => 3,  35 => 2,  21 => 1,);
    }
}
/* {% macro files_path(pathsegments, namespace, pathoptions) %}*/
/*     {% set namespace_path = path('files', pathoptions) %}*/
/*     <p>*/
/*         {{ __('Path:') }}*/
/*         <a href="{{ namespace_path }}">{{ namespace }}</a>*/
/* */
/*         {% for path, segment in pathsegments %}*/
/*             /*/
/*             {% set pathoptions = pathoptions|merge({'path': path, 'namespace': namespace}) %}*/
/*             <a href="{{ path('files', pathoptions) }}">{{ segment }}</a>*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endmacro %}*/
/* */
