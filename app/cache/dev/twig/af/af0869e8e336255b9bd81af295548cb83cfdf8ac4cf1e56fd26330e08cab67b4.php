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
        $__internal_41ae8f8173b520a26d1a7787045e52b385ae3f8861ad51e2051c7c597dfcd9d5 = $this->env->getExtension("native_profiler");
        $__internal_41ae8f8173b520a26d1a7787045e52b385ae3f8861ad51e2051c7c597dfcd9d5->enter($__internal_41ae8f8173b520a26d1a7787045e52b385ae3f8861ad51e2051c7c597dfcd9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ae8f8173b520a26d1a7787045e52b385ae3f8861ad51e2051c7c597dfcd9d5->leave($__internal_41ae8f8173b520a26d1a7787045e52b385ae3f8861ad51e2051c7c597dfcd9d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d05e6950a096e493c5476472ce687799a68202922c1681d03f6f192c896ffc2 = $this->env->getExtension("native_profiler");
        $__internal_8d05e6950a096e493c5476472ce687799a68202922c1681d03f6f192c896ffc2->enter($__internal_8d05e6950a096e493c5476472ce687799a68202922c1681d03f6f192c896ffc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d05e6950a096e493c5476472ce687799a68202922c1681d03f6f192c896ffc2->leave($__internal_8d05e6950a096e493c5476472ce687799a68202922c1681d03f6f192c896ffc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f79b9ef66784f86bdb3a78d6d42429365cd8b76f02f04d87e6358833160d8acd = $this->env->getExtension("native_profiler");
        $__internal_f79b9ef66784f86bdb3a78d6d42429365cd8b76f02f04d87e6358833160d8acd->enter($__internal_f79b9ef66784f86bdb3a78d6d42429365cd8b76f02f04d87e6358833160d8acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f79b9ef66784f86bdb3a78d6d42429365cd8b76f02f04d87e6358833160d8acd->leave($__internal_f79b9ef66784f86bdb3a78d6d42429365cd8b76f02f04d87e6358833160d8acd_prof);

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
