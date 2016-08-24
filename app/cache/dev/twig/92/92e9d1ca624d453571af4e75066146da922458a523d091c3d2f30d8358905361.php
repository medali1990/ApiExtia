<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7955440eef55f46bbbbaef6c495016a5bf20a84e65b895b4ab073d61761b9a20 extends Twig_Template
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
        $__internal_b9f58766ea708871c11b452d5c78c30d7b07b6789d107d4ab331441c940b211d = $this->env->getExtension("native_profiler");
        $__internal_b9f58766ea708871c11b452d5c78c30d7b07b6789d107d4ab331441c940b211d->enter($__internal_b9f58766ea708871c11b452d5c78c30d7b07b6789d107d4ab331441c940b211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b9f58766ea708871c11b452d5c78c30d7b07b6789d107d4ab331441c940b211d->leave($__internal_b9f58766ea708871c11b452d5c78c30d7b07b6789d107d4ab331441c940b211d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
