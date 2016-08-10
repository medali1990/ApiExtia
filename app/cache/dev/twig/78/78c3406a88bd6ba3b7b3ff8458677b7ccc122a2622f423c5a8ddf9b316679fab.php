<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8f13b6a3ac9641a0cd6ac35cebb847a455c531323a694b168ddc1e869deb4325 extends Twig_Template
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
        $__internal_582bac67c2b89646f5b8076d91c3733541d8744eccbfc51d12da1f4c51d3f9f4 = $this->env->getExtension("native_profiler");
        $__internal_582bac67c2b89646f5b8076d91c3733541d8744eccbfc51d12da1f4c51d3f9f4->enter($__internal_582bac67c2b89646f5b8076d91c3733541d8744eccbfc51d12da1f4c51d3f9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_582bac67c2b89646f5b8076d91c3733541d8744eccbfc51d12da1f4c51d3f9f4->leave($__internal_582bac67c2b89646f5b8076d91c3733541d8744eccbfc51d12da1f4c51d3f9f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
