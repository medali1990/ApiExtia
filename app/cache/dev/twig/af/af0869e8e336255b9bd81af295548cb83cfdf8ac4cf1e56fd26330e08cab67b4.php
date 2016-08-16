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
        $__internal_2f2eb669601ec800dfceee4994bae499cd2bcd403a8272af6e2ba37d4c5c4335 = $this->env->getExtension("native_profiler");
        $__internal_2f2eb669601ec800dfceee4994bae499cd2bcd403a8272af6e2ba37d4c5c4335->enter($__internal_2f2eb669601ec800dfceee4994bae499cd2bcd403a8272af6e2ba37d4c5c4335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2eb669601ec800dfceee4994bae499cd2bcd403a8272af6e2ba37d4c5c4335->leave($__internal_2f2eb669601ec800dfceee4994bae499cd2bcd403a8272af6e2ba37d4c5c4335_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d1776b28c2e7ee0c9a157f063e01cdd50f9fef3e65717201de079d6c37b307c = $this->env->getExtension("native_profiler");
        $__internal_9d1776b28c2e7ee0c9a157f063e01cdd50f9fef3e65717201de079d6c37b307c->enter($__internal_9d1776b28c2e7ee0c9a157f063e01cdd50f9fef3e65717201de079d6c37b307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d1776b28c2e7ee0c9a157f063e01cdd50f9fef3e65717201de079d6c37b307c->leave($__internal_9d1776b28c2e7ee0c9a157f063e01cdd50f9fef3e65717201de079d6c37b307c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_731fa1e320e7288111ff8df9233a8eb0d28ca9533602983540f0b2cb1dade017 = $this->env->getExtension("native_profiler");
        $__internal_731fa1e320e7288111ff8df9233a8eb0d28ca9533602983540f0b2cb1dade017->enter($__internal_731fa1e320e7288111ff8df9233a8eb0d28ca9533602983540f0b2cb1dade017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_731fa1e320e7288111ff8df9233a8eb0d28ca9533602983540f0b2cb1dade017->leave($__internal_731fa1e320e7288111ff8df9233a8eb0d28ca9533602983540f0b2cb1dade017_prof);

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
