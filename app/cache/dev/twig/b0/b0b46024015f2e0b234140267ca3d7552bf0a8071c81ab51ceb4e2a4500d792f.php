<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ee2c495bcbdcff73fda8c71576ca7a8e7d8fc0a71dcfa7e3f908d57d55a21cfb extends Twig_Template
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
        $__internal_6bd84c6f51b73bc8f34a4af3b63d842b8f02abaf79c006d4d69e68cb8d06ddee = $this->env->getExtension("native_profiler");
        $__internal_6bd84c6f51b73bc8f34a4af3b63d842b8f02abaf79c006d4d69e68cb8d06ddee->enter($__internal_6bd84c6f51b73bc8f34a4af3b63d842b8f02abaf79c006d4d69e68cb8d06ddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bd84c6f51b73bc8f34a4af3b63d842b8f02abaf79c006d4d69e68cb8d06ddee->leave($__internal_6bd84c6f51b73bc8f34a4af3b63d842b8f02abaf79c006d4d69e68cb8d06ddee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
