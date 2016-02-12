<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_69770f651fa42fbdd63e76307586ff9a90019e69676d1561b4a7a765d04fd5af extends Twig_Template
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
        echo "<div id=\"sfwdt";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->loadTemplate("@WebProfiler/Profiler/base_js.html.twig", "@WebProfiler/Profiler/toolbar_js.html.twig", 2)->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("top" == $_position_)) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "',
            '";
        // line 15
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $_token_)), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "').style.display = 'none';
                }

                Sfjs.renderAjaxRequests();

                /* Handle toolbar-info position */
                var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');
                for (var i = 0; i < toolbarBlocks.length; i += 1) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '-1px';
                        }
                    };
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 61
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $_token_)), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  93 => 30,  88 => 29,  83 => 28,  77 => 26,  72 => 25,  67 => 24,  54 => 15,  49 => 14,  45 => 12,  34 => 6,  31 => 5,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* <div id="sfwdt{{ token }}" class="sf-toolbar" style="display: none"></div>*/
/* {% include '@WebProfiler/Profiler/base_js.html.twig' %}*/
/* <script>/*<![CDATA[*//* */
/*     (function () {*/
/*         {% if 'top' == position %}*/
/*             var sfwdt = document.getElementById('sfwdt{{ token }}');*/
/*             document.body.insertBefore(*/
/*                 document.body.removeChild(sfwdt),*/
/*                 document.body.firstChild*/
/*             );*/
/*         {% endif %}*/
/* */
/*         Sfjs.load(*/
/*             'sfwdt{{ token }}',*/
/*             '{{ path("_wdt", { "token": token }) }}',*/
/*             function(xhr, el) {*/
/*                 el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';*/
/* */
/*                 if (el.style.display == 'none') {*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (Sfjs.getPreference('toolbar/displayState') == 'none') {*/
/*                     document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';*/
/*                     document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';*/
/*                     document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';*/
/*                 } else {*/
/*                     document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';*/
/*                     document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';*/
/*                     document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';*/
/*                 }*/
/* */
/*                 Sfjs.renderAjaxRequests();*/
/* */
/*                 /* Handle toolbar-info position *//* */
/*                 var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');*/
/*                 for (var i = 0; i < toolbarBlocks.length; i += 1) {*/
/*                     toolbarBlocks[i].onmouseover = function () {*/
/*                         var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];*/
/*                         var pageWidth = document.body.clientWidth;*/
/*                         var elementWidth = toolbarInfo.offsetWidth;*/
/*                         var leftValue = (elementWidth + this.offsetLeft) - pageWidth;*/
/*                         var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;*/
/* */
/*                         /* Reset right and left value, useful on window resize *//* */
/*                         toolbarInfo.style.right = '';*/
/*                         toolbarInfo.style.left = '';*/
/* */
/*                         if (leftValue > 0 && rightValue > 0) {*/
/*                             toolbarInfo.style.right = (rightValue * -1) + 'px';*/
/*                         } else if (leftValue < 0) {*/
/*                             toolbarInfo.style.left = 0;*/
/*                         } else {*/
/*                             toolbarInfo.style.right = '-1px';*/
/*                         }*/
/*                     };*/
/*                 }*/
/*             },*/
/*             function(xhr) {*/
/*                 if (xhr.status !== 0) {*/
/*                     confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\n\nDo you want to open the profiler?') && (window.location = '{{ path("_profiler", { "token": token }) }}');*/
/*                 }*/
/*             },*/
/*             {'maxTries': 5}*/
/*         );*/
/*     })();*/
/* /*]]>*//* </script>*/
/* */
