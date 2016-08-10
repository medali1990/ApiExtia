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
        $__internal_240e98330b57a02dddadfd727253a8491e5089ae468ab2ae08c8bbc312af7254 = $this->env->getExtension("native_profiler");
        $__internal_240e98330b57a02dddadfd727253a8491e5089ae468ab2ae08c8bbc312af7254->enter($__internal_240e98330b57a02dddadfd727253a8491e5089ae468ab2ae08c8bbc312af7254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_240e98330b57a02dddadfd727253a8491e5089ae468ab2ae08c8bbc312af7254->leave($__internal_240e98330b57a02dddadfd727253a8491e5089ae468ab2ae08c8bbc312af7254_prof);

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
