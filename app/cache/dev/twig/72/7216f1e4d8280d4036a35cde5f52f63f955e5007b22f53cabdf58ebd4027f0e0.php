<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b934f4a54ba0020b63659de1bb22db1212ad397f15270e668a6eb1a019102245 extends Twig_Template
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
        $__internal_f4edd0cdbe1006ea3717e177bc62b44bb2a7b60e2b253eccd89b3c563d3af87c = $this->env->getExtension("native_profiler");
        $__internal_f4edd0cdbe1006ea3717e177bc62b44bb2a7b60e2b253eccd89b3c563d3af87c->enter($__internal_f4edd0cdbe1006ea3717e177bc62b44bb2a7b60e2b253eccd89b3c563d3af87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f4edd0cdbe1006ea3717e177bc62b44bb2a7b60e2b253eccd89b3c563d3af87c->leave($__internal_f4edd0cdbe1006ea3717e177bc62b44bb2a7b60e2b253eccd89b3c563d3af87c_prof);

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
