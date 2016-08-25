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
        $__internal_734bb93659b2996d83119647cfb4095856bd269c9e8118c51ad1bcf353b6a3b0 = $this->env->getExtension("native_profiler");
        $__internal_734bb93659b2996d83119647cfb4095856bd269c9e8118c51ad1bcf353b6a3b0->enter($__internal_734bb93659b2996d83119647cfb4095856bd269c9e8118c51ad1bcf353b6a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_734bb93659b2996d83119647cfb4095856bd269c9e8118c51ad1bcf353b6a3b0->leave($__internal_734bb93659b2996d83119647cfb4095856bd269c9e8118c51ad1bcf353b6a3b0_prof);

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
