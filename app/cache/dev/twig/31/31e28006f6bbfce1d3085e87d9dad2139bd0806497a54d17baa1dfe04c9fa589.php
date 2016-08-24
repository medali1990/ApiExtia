<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8724488bd716ef3dfe36feb690c914b9490134e569fa74ef5db10fc182dd2bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4f72d1a4ecd013b705f52e037c926a48e4b9bf10c6d87609f2cbd794ad0809 = $this->env->getExtension("native_profiler");
        $__internal_9b4f72d1a4ecd013b705f52e037c926a48e4b9bf10c6d87609f2cbd794ad0809->enter($__internal_9b4f72d1a4ecd013b705f52e037c926a48e4b9bf10c6d87609f2cbd794ad0809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4f72d1a4ecd013b705f52e037c926a48e4b9bf10c6d87609f2cbd794ad0809->leave($__internal_9b4f72d1a4ecd013b705f52e037c926a48e4b9bf10c6d87609f2cbd794ad0809_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e61c1b1285b0554b429d09cf861610ae82e5b7f57695931035e7fad79bded270 = $this->env->getExtension("native_profiler");
        $__internal_e61c1b1285b0554b429d09cf861610ae82e5b7f57695931035e7fad79bded270->enter($__internal_e61c1b1285b0554b429d09cf861610ae82e5b7f57695931035e7fad79bded270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e61c1b1285b0554b429d09cf861610ae82e5b7f57695931035e7fad79bded270->leave($__internal_e61c1b1285b0554b429d09cf861610ae82e5b7f57695931035e7fad79bded270_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd1821c955a8abd8deb55f165378cd8c72667178bd11a3e767a170a98d30c747 = $this->env->getExtension("native_profiler");
        $__internal_fd1821c955a8abd8deb55f165378cd8c72667178bd11a3e767a170a98d30c747->enter($__internal_fd1821c955a8abd8deb55f165378cd8c72667178bd11a3e767a170a98d30c747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fd1821c955a8abd8deb55f165378cd8c72667178bd11a3e767a170a98d30c747->leave($__internal_fd1821c955a8abd8deb55f165378cd8c72667178bd11a3e767a170a98d30c747_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
