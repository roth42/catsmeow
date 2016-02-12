<?php

/* files/_upload.twig */
class __TwigTemplate_eddd577bf1b1c712dfbdf9b5c32d96e070ae833f854e0a7c9f4fc3eaf8e5dbe0 extends Twig_Template
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
        echo "<form method=\"post\" id=\"filescreenuploader\" ";
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_context_, "form", array()), 'enctype');
        echo ">
    <fieldset>
        ";
        // line 3
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_context_, "form", array()), 'widget');
        echo "
        <div>
        <button type=\"submit\" class=\"btn btn-primary\" disabled>
            <i class=\"fa fa-fw fa-upload\"></i>
            <span>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("Upload file");
        echo "</span>
        </button>
        ";
        // line 9
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "typepopover", array(), "method"), "html", null, true);
        echo "
        </div>
    </fieldset>
</form>

<script>
    \$(function() {
        \$('input[type=file]').addClass('btn-secondary').bootstrapFileInput();

        \$('input:file').change(
            function(){
                if (\$(this).val()) {
                    \$('button:submit').removeAttr('disabled');
                }
            }
        );

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "files/_upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  26 => 3,  19 => 1,);
    }
}
/* <form method="post" id="filescreenuploader" {{ form_enctype(context.form) }}>*/
/*     <fieldset>*/
/*         {{ form_widget(context.form) }}*/
/*         <div>*/
/*         <button type="submit" class="btn btn-primary" disabled>*/
/*             <i class="fa fa-fw fa-upload"></i>*/
/*             <span>{{ __('Upload file') }}</span>*/
/*         </button>*/
/*         {{ macro.typepopover() }}*/
/*         </div>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <script>*/
/*     $(function() {*/
/*         $('input[type=file]').addClass('btn-secondary').bootstrapFileInput();*/
/* */
/*         $('input:file').change(*/
/*             function(){*/
/*                 if ($(this).val()) {*/
/*                     $('button:submit').removeAttr('disabled');*/
/*                 }*/
/*             }*/
/*         );*/
/* */
/*     });*/
/* */
/* </script>*/
/* */
