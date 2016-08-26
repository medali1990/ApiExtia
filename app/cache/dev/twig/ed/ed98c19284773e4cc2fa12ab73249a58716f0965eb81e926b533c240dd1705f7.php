<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31fafdb18083113dc123e5ecab096bb8e5c10a05e3eb0bec089fe12c99ae1e34 extends Twig_Template
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
        $__internal_92a0cc975cd69bce9ca69ccb60f39dbb1cebe426d0f8889200348b9514836d81 = $this->env->getExtension("native_profiler");
        $__internal_92a0cc975cd69bce9ca69ccb60f39dbb1cebe426d0f8889200348b9514836d81->enter($__internal_92a0cc975cd69bce9ca69ccb60f39dbb1cebe426d0f8889200348b9514836d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_92a0cc975cd69bce9ca69ccb60f39dbb1cebe426d0f8889200348b9514836d81->leave($__internal_92a0cc975cd69bce9ca69ccb60f39dbb1cebe426d0f8889200348b9514836d81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
