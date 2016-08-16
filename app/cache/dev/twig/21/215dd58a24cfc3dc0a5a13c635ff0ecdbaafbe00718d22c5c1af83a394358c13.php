<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e106d93a9d8cf16874f8789b2a5a855dc4126e3292be4f527dfd3829c527d83a extends Twig_Template
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
        $__internal_164a0b4992d88d68fd9fcfd329e964aa23be513b06871166a517073eea41519a = $this->env->getExtension("native_profiler");
        $__internal_164a0b4992d88d68fd9fcfd329e964aa23be513b06871166a517073eea41519a->enter($__internal_164a0b4992d88d68fd9fcfd329e964aa23be513b06871166a517073eea41519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_164a0b4992d88d68fd9fcfd329e964aa23be513b06871166a517073eea41519a->leave($__internal_164a0b4992d88d68fd9fcfd329e964aa23be513b06871166a517073eea41519a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
