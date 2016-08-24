<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_05f8eb3a11e9e7be5bfe895f020ba573962260b926aa2a0848823026b01f78b2 extends Twig_Template
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
        $__internal_5e1d43f7856e09dee6425dab889dee26971f4b4af00a2f2c452f7f3a80740b78 = $this->env->getExtension("native_profiler");
        $__internal_5e1d43f7856e09dee6425dab889dee26971f4b4af00a2f2c452f7f3a80740b78->enter($__internal_5e1d43f7856e09dee6425dab889dee26971f4b4af00a2f2c452f7f3a80740b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5e1d43f7856e09dee6425dab889dee26971f4b4af00a2f2c452f7f3a80740b78->leave($__internal_5e1d43f7856e09dee6425dab889dee26971f4b4af00a2f2c452f7f3a80740b78_prof);

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
