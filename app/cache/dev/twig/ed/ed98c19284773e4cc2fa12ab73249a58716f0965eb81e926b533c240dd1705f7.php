<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31fafdb18083113dc123e5ecab096bb8e5c10a05e3eb0bec089fe12c99ae1e34 extends Twig_Template
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
        $__internal_429c22f992f966086e144f30bfdaf032d8d067e1aa7d1532f7f6653b2afea95b = $this->env->getExtension("native_profiler");
        $__internal_429c22f992f966086e144f30bfdaf032d8d067e1aa7d1532f7f6653b2afea95b->enter($__internal_429c22f992f966086e144f30bfdaf032d8d067e1aa7d1532f7f6653b2afea95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_429c22f992f966086e144f30bfdaf032d8d067e1aa7d1532f7f6653b2afea95b->leave($__internal_429c22f992f966086e144f30bfdaf032d8d067e1aa7d1532f7f6653b2afea95b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
