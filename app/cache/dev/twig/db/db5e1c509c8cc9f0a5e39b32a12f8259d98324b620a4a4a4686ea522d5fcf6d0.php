<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cedd48784c5d5b52ff268a1bb8e82a79fd2d4c5d042411da1d1c8c5b2e96fc2d extends Twig_Template
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
        $__internal_389eba33c89b31e02c5ffd226afb1739ae6f41409b73244292074882d5db8243 = $this->env->getExtension("native_profiler");
        $__internal_389eba33c89b31e02c5ffd226afb1739ae6f41409b73244292074882d5db8243->enter($__internal_389eba33c89b31e02c5ffd226afb1739ae6f41409b73244292074882d5db8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_389eba33c89b31e02c5ffd226afb1739ae6f41409b73244292074882d5db8243->leave($__internal_389eba33c89b31e02c5ffd226afb1739ae6f41409b73244292074882d5db8243_prof);

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
