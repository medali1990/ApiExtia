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
        $__internal_88a3d92266c01f06423a2a2d595bdb6fa0a51a4c741aa66cf6a2896e81d5a9ad = $this->env->getExtension("native_profiler");
        $__internal_88a3d92266c01f06423a2a2d595bdb6fa0a51a4c741aa66cf6a2896e81d5a9ad->enter($__internal_88a3d92266c01f06423a2a2d595bdb6fa0a51a4c741aa66cf6a2896e81d5a9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_88a3d92266c01f06423a2a2d595bdb6fa0a51a4c741aa66cf6a2896e81d5a9ad->leave($__internal_88a3d92266c01f06423a2a2d595bdb6fa0a51a4c741aa66cf6a2896e81d5a9ad_prof);

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
