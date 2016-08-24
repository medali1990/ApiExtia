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
        $__internal_38cb757043f854bf43d3ddea95677ad26894c3321ddd480dca0c261a053e75a4 = $this->env->getExtension("native_profiler");
        $__internal_38cb757043f854bf43d3ddea95677ad26894c3321ddd480dca0c261a053e75a4->enter($__internal_38cb757043f854bf43d3ddea95677ad26894c3321ddd480dca0c261a053e75a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_38cb757043f854bf43d3ddea95677ad26894c3321ddd480dca0c261a053e75a4->leave($__internal_38cb757043f854bf43d3ddea95677ad26894c3321ddd480dca0c261a053e75a4_prof);

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
