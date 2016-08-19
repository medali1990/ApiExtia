<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_370ddaa4877bb0f26fd27588ff637135f018f3673145109bd114e36e2137261d extends Twig_Template
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
        $__internal_1f856a8d3684d9c21447dc38c7a8768d546e969b4bb5e6940ecaa71adf6d08b1 = $this->env->getExtension("native_profiler");
        $__internal_1f856a8d3684d9c21447dc38c7a8768d546e969b4bb5e6940ecaa71adf6d08b1->enter($__internal_1f856a8d3684d9c21447dc38c7a8768d546e969b4bb5e6940ecaa71adf6d08b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1f856a8d3684d9c21447dc38c7a8768d546e969b4bb5e6940ecaa71adf6d08b1->leave($__internal_1f856a8d3684d9c21447dc38c7a8768d546e969b4bb5e6940ecaa71adf6d08b1_prof);

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
