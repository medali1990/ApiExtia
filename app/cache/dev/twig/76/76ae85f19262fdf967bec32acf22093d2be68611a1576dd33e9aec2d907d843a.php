<?php

/* ArticleBundle:Default:index.html.twig */
class __TwigTemplate_570ba11a82557ff630a7f06981cb66227b5e02556c2f0a47c7eaaec0b2cd9f85 extends Twig_Template
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
        $__internal_360c8ddb60289cf743f9d8b9331b4f83dba338c1ec6b1e6e77badc9a5b224f3c = $this->env->getExtension("native_profiler");
        $__internal_360c8ddb60289cf743f9d8b9331b4f83dba338c1ec6b1e6e77badc9a5b224f3c->enter($__internal_360c8ddb60289cf743f9d8b9331b4f83dba338c1ec6b1e6e77badc9a5b224f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_360c8ddb60289cf743f9d8b9331b4f83dba338c1ec6b1e6e77badc9a5b224f3c->leave($__internal_360c8ddb60289cf743f9d8b9331b4f83dba338c1ec6b1e6e77badc9a5b224f3c_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Default:index.html.twig";
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
