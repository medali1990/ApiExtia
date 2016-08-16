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
        $__internal_8cf12a9909994265307e2f4be8a0259f0d76dd77b4b721f155910e9c0a5cdd0b = $this->env->getExtension("native_profiler");
        $__internal_8cf12a9909994265307e2f4be8a0259f0d76dd77b4b721f155910e9c0a5cdd0b->enter($__internal_8cf12a9909994265307e2f4be8a0259f0d76dd77b4b721f155910e9c0a5cdd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cf12a9909994265307e2f4be8a0259f0d76dd77b4b721f155910e9c0a5cdd0b->leave($__internal_8cf12a9909994265307e2f4be8a0259f0d76dd77b4b721f155910e9c0a5cdd0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be7093dec87d5da339ea1c20f5ad2ffcc199c1a7912e0b6a608251a95a087bc0 = $this->env->getExtension("native_profiler");
        $__internal_be7093dec87d5da339ea1c20f5ad2ffcc199c1a7912e0b6a608251a95a087bc0->enter($__internal_be7093dec87d5da339ea1c20f5ad2ffcc199c1a7912e0b6a608251a95a087bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_be7093dec87d5da339ea1c20f5ad2ffcc199c1a7912e0b6a608251a95a087bc0->leave($__internal_be7093dec87d5da339ea1c20f5ad2ffcc199c1a7912e0b6a608251a95a087bc0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e41d484b62b3ceca7bcc1281429fe6ab79e60808ed039a32e1f624212e650bbd = $this->env->getExtension("native_profiler");
        $__internal_e41d484b62b3ceca7bcc1281429fe6ab79e60808ed039a32e1f624212e650bbd->enter($__internal_e41d484b62b3ceca7bcc1281429fe6ab79e60808ed039a32e1f624212e650bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e41d484b62b3ceca7bcc1281429fe6ab79e60808ed039a32e1f624212e650bbd->leave($__internal_e41d484b62b3ceca7bcc1281429fe6ab79e60808ed039a32e1f624212e650bbd_prof);

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
