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
        $__internal_c43719f990458afd9a1ef15533cb3c32ee12272d903d7847bba41dc936d42d25 = $this->env->getExtension("native_profiler");
        $__internal_c43719f990458afd9a1ef15533cb3c32ee12272d903d7847bba41dc936d42d25->enter($__internal_c43719f990458afd9a1ef15533cb3c32ee12272d903d7847bba41dc936d42d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43719f990458afd9a1ef15533cb3c32ee12272d903d7847bba41dc936d42d25->leave($__internal_c43719f990458afd9a1ef15533cb3c32ee12272d903d7847bba41dc936d42d25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0ee1cb78baab87ef6ab42d81ad39be99eeae70e62094b9959a3079677c0f762 = $this->env->getExtension("native_profiler");
        $__internal_d0ee1cb78baab87ef6ab42d81ad39be99eeae70e62094b9959a3079677c0f762->enter($__internal_d0ee1cb78baab87ef6ab42d81ad39be99eeae70e62094b9959a3079677c0f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0ee1cb78baab87ef6ab42d81ad39be99eeae70e62094b9959a3079677c0f762->leave($__internal_d0ee1cb78baab87ef6ab42d81ad39be99eeae70e62094b9959a3079677c0f762_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4257c729724f442de8e8ba029b8e5b8f36a96cd48c4e4a4282e2386680fe85d = $this->env->getExtension("native_profiler");
        $__internal_e4257c729724f442de8e8ba029b8e5b8f36a96cd48c4e4a4282e2386680fe85d->enter($__internal_e4257c729724f442de8e8ba029b8e5b8f36a96cd48c4e4a4282e2386680fe85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e4257c729724f442de8e8ba029b8e5b8f36a96cd48c4e4a4282e2386680fe85d->leave($__internal_e4257c729724f442de8e8ba029b8e5b8f36a96cd48c4e4a4282e2386680fe85d_prof);

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
