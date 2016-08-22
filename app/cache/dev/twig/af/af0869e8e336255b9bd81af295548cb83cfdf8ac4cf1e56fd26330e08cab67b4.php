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
        $__internal_5c1cf80a4818ca999989d2e62b0ca51039968d5b377981ba8c23af034d5e6148 = $this->env->getExtension("native_profiler");
        $__internal_5c1cf80a4818ca999989d2e62b0ca51039968d5b377981ba8c23af034d5e6148->enter($__internal_5c1cf80a4818ca999989d2e62b0ca51039968d5b377981ba8c23af034d5e6148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1cf80a4818ca999989d2e62b0ca51039968d5b377981ba8c23af034d5e6148->leave($__internal_5c1cf80a4818ca999989d2e62b0ca51039968d5b377981ba8c23af034d5e6148_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38a1616b55f29cd0e65f604b2c02014a7a04e2e951f388e820d17bf383b930e5 = $this->env->getExtension("native_profiler");
        $__internal_38a1616b55f29cd0e65f604b2c02014a7a04e2e951f388e820d17bf383b930e5->enter($__internal_38a1616b55f29cd0e65f604b2c02014a7a04e2e951f388e820d17bf383b930e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_38a1616b55f29cd0e65f604b2c02014a7a04e2e951f388e820d17bf383b930e5->leave($__internal_38a1616b55f29cd0e65f604b2c02014a7a04e2e951f388e820d17bf383b930e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0c2e53ea4277f9c326f4676e1386077aed9ede6814db069cc8e2d577adc4cd = $this->env->getExtension("native_profiler");
        $__internal_0a0c2e53ea4277f9c326f4676e1386077aed9ede6814db069cc8e2d577adc4cd->enter($__internal_0a0c2e53ea4277f9c326f4676e1386077aed9ede6814db069cc8e2d577adc4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a0c2e53ea4277f9c326f4676e1386077aed9ede6814db069cc8e2d577adc4cd->leave($__internal_0a0c2e53ea4277f9c326f4676e1386077aed9ede6814db069cc8e2d577adc4cd_prof);

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
