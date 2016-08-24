<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2e951ac2d2d2c71289f69e8c4dad5a1b6503c1e95632c83bc73df5ed74778911 extends Twig_Template
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
        $__internal_e5fa568780e52baf106996e09962b4f4f02f2ee1360b7202ef8a3ca773232028 = $this->env->getExtension("native_profiler");
        $__internal_e5fa568780e52baf106996e09962b4f4f02f2ee1360b7202ef8a3ca773232028->enter($__internal_e5fa568780e52baf106996e09962b4f4f02f2ee1360b7202ef8a3ca773232028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e5fa568780e52baf106996e09962b4f4f02f2ee1360b7202ef8a3ca773232028->leave($__internal_e5fa568780e52baf106996e09962b4f4f02f2ee1360b7202ef8a3ca773232028_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
