<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a9e8a6fe1fc414605fbf7450d50137f404a5e94623a51e58e9d7c0e79af2451c extends Twig_Template
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
        $__internal_301e64befa4c77713022e305143760af43618813240fc0a4936ff494969c9042 = $this->env->getExtension("native_profiler");
        $__internal_301e64befa4c77713022e305143760af43618813240fc0a4936ff494969c9042->enter($__internal_301e64befa4c77713022e305143760af43618813240fc0a4936ff494969c9042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_301e64befa4c77713022e305143760af43618813240fc0a4936ff494969c9042->leave($__internal_301e64befa4c77713022e305143760af43618813240fc0a4936ff494969c9042_prof);

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
