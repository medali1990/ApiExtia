<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc52a199d2c35ba836047dd192630ff1bd3b2fe335ad1bdb989f803329fd9414 extends Twig_Template
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
        $__internal_242417f0cf4a2922e61a2274e15c053362c048fa770a7a2c159e548c22035fd4 = $this->env->getExtension("native_profiler");
        $__internal_242417f0cf4a2922e61a2274e15c053362c048fa770a7a2c159e548c22035fd4->enter($__internal_242417f0cf4a2922e61a2274e15c053362c048fa770a7a2c159e548c22035fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_242417f0cf4a2922e61a2274e15c053362c048fa770a7a2c159e548c22035fd4->leave($__internal_242417f0cf4a2922e61a2274e15c053362c048fa770a7a2c159e548c22035fd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
