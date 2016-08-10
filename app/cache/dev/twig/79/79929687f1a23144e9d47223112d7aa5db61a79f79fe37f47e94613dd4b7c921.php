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
        $__internal_87e45fb76b46e04ebfaee0251cb2b3317f2d91930e20ecbb862315a1f077966b = $this->env->getExtension("native_profiler");
        $__internal_87e45fb76b46e04ebfaee0251cb2b3317f2d91930e20ecbb862315a1f077966b->enter($__internal_87e45fb76b46e04ebfaee0251cb2b3317f2d91930e20ecbb862315a1f077966b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_87e45fb76b46e04ebfaee0251cb2b3317f2d91930e20ecbb862315a1f077966b->leave($__internal_87e45fb76b46e04ebfaee0251cb2b3317f2d91930e20ecbb862315a1f077966b_prof);

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
