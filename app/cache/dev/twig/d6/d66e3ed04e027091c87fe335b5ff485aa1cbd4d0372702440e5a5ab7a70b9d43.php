<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_b63daf3af1813f823ed00cdd846cf386ca68c521b14a586ef81d62568689fe8f extends Twig_Template
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
        $__internal_0872656b7fd9d7bf0c86fa4f723c5291cea0967d40c11bc66fc9929538c414a7 = $this->env->getExtension("native_profiler");
        $__internal_0872656b7fd9d7bf0c86fa4f723c5291cea0967d40c11bc66fc9929538c414a7->enter($__internal_0872656b7fd9d7bf0c86fa4f723c5291cea0967d40c11bc66fc9929538c414a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_0872656b7fd9d7bf0c86fa4f723c5291cea0967d40c11bc66fc9929538c414a7->leave($__internal_0872656b7fd9d7bf0c86fa4f723c5291cea0967d40c11bc66fc9929538c414a7_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
