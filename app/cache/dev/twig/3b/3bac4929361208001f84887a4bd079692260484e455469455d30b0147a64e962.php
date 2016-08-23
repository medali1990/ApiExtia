<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_281dcf3a4298106a31f20afffdc09933dd3f699f60f2ba40f91a9647709e7e77 extends Twig_Template
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
        $__internal_db938b63cd984718a295ebcd2de8bcbe18e7f23894f30dd7c82cf22160ab84e0 = $this->env->getExtension("native_profiler");
        $__internal_db938b63cd984718a295ebcd2de8bcbe18e7f23894f30dd7c82cf22160ab84e0->enter($__internal_db938b63cd984718a295ebcd2de8bcbe18e7f23894f30dd7c82cf22160ab84e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_db938b63cd984718a295ebcd2de8bcbe18e7f23894f30dd7c82cf22160ab84e0->leave($__internal_db938b63cd984718a295ebcd2de8bcbe18e7f23894f30dd7c82cf22160ab84e0_prof);

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
