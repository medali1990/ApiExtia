<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_b63daf3af1813f823ed00cdd846cf386ca68c521b14a586ef81d62568689fe8f extends Twig_Template
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
        $__internal_2145cc3905697f3a43803b609f5fa9c32586d0068260527d2f08be26cc182480 = $this->env->getExtension("native_profiler");
        $__internal_2145cc3905697f3a43803b609f5fa9c32586d0068260527d2f08be26cc182480->enter($__internal_2145cc3905697f3a43803b609f5fa9c32586d0068260527d2f08be26cc182480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_2145cc3905697f3a43803b609f5fa9c32586d0068260527d2f08be26cc182480->leave($__internal_2145cc3905697f3a43803b609f5fa9c32586d0068260527d2f08be26cc182480_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
