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
        $__internal_e7302e6e7837870d90552e533e93f5314c3f1f703818a4434cf2b1a329bf0cc0 = $this->env->getExtension("native_profiler");
        $__internal_e7302e6e7837870d90552e533e93f5314c3f1f703818a4434cf2b1a329bf0cc0->enter($__internal_e7302e6e7837870d90552e533e93f5314c3f1f703818a4434cf2b1a329bf0cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e7302e6e7837870d90552e533e93f5314c3f1f703818a4434cf2b1a329bf0cc0->leave($__internal_e7302e6e7837870d90552e533e93f5314c3f1f703818a4434cf2b1a329bf0cc0_prof);

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
