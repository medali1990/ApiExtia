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
        $__internal_538b8d607f8ce32b06f60a06ba696427351cf2cdae6dab8f6512a77d3392022c = $this->env->getExtension("native_profiler");
        $__internal_538b8d607f8ce32b06f60a06ba696427351cf2cdae6dab8f6512a77d3392022c->enter($__internal_538b8d607f8ce32b06f60a06ba696427351cf2cdae6dab8f6512a77d3392022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_538b8d607f8ce32b06f60a06ba696427351cf2cdae6dab8f6512a77d3392022c->leave($__internal_538b8d607f8ce32b06f60a06ba696427351cf2cdae6dab8f6512a77d3392022c_prof);

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
