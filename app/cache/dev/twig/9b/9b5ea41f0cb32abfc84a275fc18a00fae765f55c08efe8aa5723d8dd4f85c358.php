<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_aa3320d9de6e4de212843b35308a2d38b544ee04ecc746fab0a51f20ced16f23 extends Twig_Template
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
        $__internal_d2aab374d8de469ec95747bd38119f468385d474c22d681e2c702719c434f3b5 = $this->env->getExtension("native_profiler");
        $__internal_d2aab374d8de469ec95747bd38119f468385d474c22d681e2c702719c434f3b5->enter($__internal_d2aab374d8de469ec95747bd38119f468385d474c22d681e2c702719c434f3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d2aab374d8de469ec95747bd38119f468385d474c22d681e2c702719c434f3b5->leave($__internal_d2aab374d8de469ec95747bd38119f468385d474c22d681e2c702719c434f3b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */