<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_61edff4b185871dea180386ecd1668aac0a97a093fc2780362471e4655216f4c extends Twig_Template
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
        $__internal_95c5afd596830a55bc76758a79f46cbccb8c2c73a86468c9dd83460cdd142f1f = $this->env->getExtension("native_profiler");
        $__internal_95c5afd596830a55bc76758a79f46cbccb8c2c73a86468c9dd83460cdd142f1f->enter($__internal_95c5afd596830a55bc76758a79f46cbccb8c2c73a86468c9dd83460cdd142f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c5afd596830a55bc76758a79f46cbccb8c2c73a86468c9dd83460cdd142f1f->leave($__internal_95c5afd596830a55bc76758a79f46cbccb8c2c73a86468c9dd83460cdd142f1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e635858adedaf3c4074508c0b5723e18080c38a635b704450db557fe3324b96a = $this->env->getExtension("native_profiler");
        $__internal_e635858adedaf3c4074508c0b5723e18080c38a635b704450db557fe3324b96a->enter($__internal_e635858adedaf3c4074508c0b5723e18080c38a635b704450db557fe3324b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e635858adedaf3c4074508c0b5723e18080c38a635b704450db557fe3324b96a->leave($__internal_e635858adedaf3c4074508c0b5723e18080c38a635b704450db557fe3324b96a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f53a7d76bdcd4fdaf3920b5d5a20a74d55098877a9ff9b6ab69e786e845e10c = $this->env->getExtension("native_profiler");
        $__internal_6f53a7d76bdcd4fdaf3920b5d5a20a74d55098877a9ff9b6ab69e786e845e10c->enter($__internal_6f53a7d76bdcd4fdaf3920b5d5a20a74d55098877a9ff9b6ab69e786e845e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f53a7d76bdcd4fdaf3920b5d5a20a74d55098877a9ff9b6ab69e786e845e10c->leave($__internal_6f53a7d76bdcd4fdaf3920b5d5a20a74d55098877a9ff9b6ab69e786e845e10c_prof);

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
