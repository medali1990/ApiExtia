<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_86a87944c2d9fd9c0a7d025a9a4fbc9a3bfec14e48ff07e4adb276a7da21c055 extends Twig_Template
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
        $__internal_cca43fbbfba84f4f3458ec53980e891d81ede0ffaee1fe56cae430c8a5d062e7 = $this->env->getExtension("native_profiler");
        $__internal_cca43fbbfba84f4f3458ec53980e891d81ede0ffaee1fe56cae430c8a5d062e7->enter($__internal_cca43fbbfba84f4f3458ec53980e891d81ede0ffaee1fe56cae430c8a5d062e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cca43fbbfba84f4f3458ec53980e891d81ede0ffaee1fe56cae430c8a5d062e7->leave($__internal_cca43fbbfba84f4f3458ec53980e891d81ede0ffaee1fe56cae430c8a5d062e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
