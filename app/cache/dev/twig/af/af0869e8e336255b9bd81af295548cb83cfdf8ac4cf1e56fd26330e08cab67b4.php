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
        $__internal_05be75200e5830acf0c9068e0409d4f80b1c1e4501b5506f4fbf72294dbb9c17 = $this->env->getExtension("native_profiler");
        $__internal_05be75200e5830acf0c9068e0409d4f80b1c1e4501b5506f4fbf72294dbb9c17->enter($__internal_05be75200e5830acf0c9068e0409d4f80b1c1e4501b5506f4fbf72294dbb9c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05be75200e5830acf0c9068e0409d4f80b1c1e4501b5506f4fbf72294dbb9c17->leave($__internal_05be75200e5830acf0c9068e0409d4f80b1c1e4501b5506f4fbf72294dbb9c17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a90fa9221bfddb007c7f2818201c2102df3d48b96b32fd62e7f3246e6dadf37f = $this->env->getExtension("native_profiler");
        $__internal_a90fa9221bfddb007c7f2818201c2102df3d48b96b32fd62e7f3246e6dadf37f->enter($__internal_a90fa9221bfddb007c7f2818201c2102df3d48b96b32fd62e7f3246e6dadf37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a90fa9221bfddb007c7f2818201c2102df3d48b96b32fd62e7f3246e6dadf37f->leave($__internal_a90fa9221bfddb007c7f2818201c2102df3d48b96b32fd62e7f3246e6dadf37f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba631b6e65c9f5c5236c7741cd2d8893cb812600579b73bfdc92fd92a6903ae3 = $this->env->getExtension("native_profiler");
        $__internal_ba631b6e65c9f5c5236c7741cd2d8893cb812600579b73bfdc92fd92a6903ae3->enter($__internal_ba631b6e65c9f5c5236c7741cd2d8893cb812600579b73bfdc92fd92a6903ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba631b6e65c9f5c5236c7741cd2d8893cb812600579b73bfdc92fd92a6903ae3->leave($__internal_ba631b6e65c9f5c5236c7741cd2d8893cb812600579b73bfdc92fd92a6903ae3_prof);

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
