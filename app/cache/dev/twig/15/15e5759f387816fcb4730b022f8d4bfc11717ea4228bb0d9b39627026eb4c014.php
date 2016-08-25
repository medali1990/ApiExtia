<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4f6d973cc98f457fb6d792d3105f9e24f8232e98a9ced81832d273751a236a67 extends Twig_Template
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
        $__internal_7127ec8802dbaffb7f51512e45e70706562aba97f3cdac6d691b23132936c898 = $this->env->getExtension("native_profiler");
        $__internal_7127ec8802dbaffb7f51512e45e70706562aba97f3cdac6d691b23132936c898->enter($__internal_7127ec8802dbaffb7f51512e45e70706562aba97f3cdac6d691b23132936c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7127ec8802dbaffb7f51512e45e70706562aba97f3cdac6d691b23132936c898->leave($__internal_7127ec8802dbaffb7f51512e45e70706562aba97f3cdac6d691b23132936c898_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
