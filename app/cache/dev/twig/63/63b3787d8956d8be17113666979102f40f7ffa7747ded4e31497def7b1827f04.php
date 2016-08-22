<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_370ddaa4877bb0f26fd27588ff637135f018f3673145109bd114e36e2137261d extends Twig_Template
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
        $__internal_68e563b581014a6728503f7a562bb82058af692808a3a37fd726d77de8b57e6a = $this->env->getExtension("native_profiler");
        $__internal_68e563b581014a6728503f7a562bb82058af692808a3a37fd726d77de8b57e6a->enter($__internal_68e563b581014a6728503f7a562bb82058af692808a3a37fd726d77de8b57e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_68e563b581014a6728503f7a562bb82058af692808a3a37fd726d77de8b57e6a->leave($__internal_68e563b581014a6728503f7a562bb82058af692808a3a37fd726d77de8b57e6a_prof);

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
