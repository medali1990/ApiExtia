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
        $__internal_aacebd8aaa2a561114c2dbd05a7144ee752e27e6a05b44601c02a2a21efdd8de = $this->env->getExtension("native_profiler");
        $__internal_aacebd8aaa2a561114c2dbd05a7144ee752e27e6a05b44601c02a2a21efdd8de->enter($__internal_aacebd8aaa2a561114c2dbd05a7144ee752e27e6a05b44601c02a2a21efdd8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aacebd8aaa2a561114c2dbd05a7144ee752e27e6a05b44601c02a2a21efdd8de->leave($__internal_aacebd8aaa2a561114c2dbd05a7144ee752e27e6a05b44601c02a2a21efdd8de_prof);

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
