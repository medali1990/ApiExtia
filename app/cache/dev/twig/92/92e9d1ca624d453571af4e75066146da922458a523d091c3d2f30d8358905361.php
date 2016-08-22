<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7955440eef55f46bbbbaef6c495016a5bf20a84e65b895b4ab073d61761b9a20 extends Twig_Template
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
        $__internal_5396a06884c9a17668f1396a967ae730bfd4d413713e552e38d2ddc81023cb32 = $this->env->getExtension("native_profiler");
        $__internal_5396a06884c9a17668f1396a967ae730bfd4d413713e552e38d2ddc81023cb32->enter($__internal_5396a06884c9a17668f1396a967ae730bfd4d413713e552e38d2ddc81023cb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5396a06884c9a17668f1396a967ae730bfd4d413713e552e38d2ddc81023cb32->leave($__internal_5396a06884c9a17668f1396a967ae730bfd4d413713e552e38d2ddc81023cb32_prof);

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
