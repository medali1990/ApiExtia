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
        $__internal_322dd378c1ad96a6beac8e1b6f148cd09842c27c2046ca6e8eceb8c763a071ae = $this->env->getExtension("native_profiler");
        $__internal_322dd378c1ad96a6beac8e1b6f148cd09842c27c2046ca6e8eceb8c763a071ae->enter($__internal_322dd378c1ad96a6beac8e1b6f148cd09842c27c2046ca6e8eceb8c763a071ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_322dd378c1ad96a6beac8e1b6f148cd09842c27c2046ca6e8eceb8c763a071ae->leave($__internal_322dd378c1ad96a6beac8e1b6f148cd09842c27c2046ca6e8eceb8c763a071ae_prof);

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
