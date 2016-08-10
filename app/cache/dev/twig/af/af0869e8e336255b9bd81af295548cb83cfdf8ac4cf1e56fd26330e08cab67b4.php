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
        $__internal_ad6b86a3c14bd93d1d18c2074b28935381ba2c1329eeeb661f7db6ff3ef3c017 = $this->env->getExtension("native_profiler");
        $__internal_ad6b86a3c14bd93d1d18c2074b28935381ba2c1329eeeb661f7db6ff3ef3c017->enter($__internal_ad6b86a3c14bd93d1d18c2074b28935381ba2c1329eeeb661f7db6ff3ef3c017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6b86a3c14bd93d1d18c2074b28935381ba2c1329eeeb661f7db6ff3ef3c017->leave($__internal_ad6b86a3c14bd93d1d18c2074b28935381ba2c1329eeeb661f7db6ff3ef3c017_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4313f6541b801661dfc9d215fed94b0011e89bcdf13dba2ead0efcfb9d22a21b = $this->env->getExtension("native_profiler");
        $__internal_4313f6541b801661dfc9d215fed94b0011e89bcdf13dba2ead0efcfb9d22a21b->enter($__internal_4313f6541b801661dfc9d215fed94b0011e89bcdf13dba2ead0efcfb9d22a21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4313f6541b801661dfc9d215fed94b0011e89bcdf13dba2ead0efcfb9d22a21b->leave($__internal_4313f6541b801661dfc9d215fed94b0011e89bcdf13dba2ead0efcfb9d22a21b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9455d4a748a45a55b04b7d4393690ecd4d6aee5e385a757f73998ee93c1bd292 = $this->env->getExtension("native_profiler");
        $__internal_9455d4a748a45a55b04b7d4393690ecd4d6aee5e385a757f73998ee93c1bd292->enter($__internal_9455d4a748a45a55b04b7d4393690ecd4d6aee5e385a757f73998ee93c1bd292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9455d4a748a45a55b04b7d4393690ecd4d6aee5e385a757f73998ee93c1bd292->leave($__internal_9455d4a748a45a55b04b7d4393690ecd4d6aee5e385a757f73998ee93c1bd292_prof);

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
