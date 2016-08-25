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
        $__internal_c1a7ac9a9127b1a4d7bc57278909e1c46a13c15ab225d5920506dc3a4984a128 = $this->env->getExtension("native_profiler");
        $__internal_c1a7ac9a9127b1a4d7bc57278909e1c46a13c15ab225d5920506dc3a4984a128->enter($__internal_c1a7ac9a9127b1a4d7bc57278909e1c46a13c15ab225d5920506dc3a4984a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_c1a7ac9a9127b1a4d7bc57278909e1c46a13c15ab225d5920506dc3a4984a128->leave($__internal_c1a7ac9a9127b1a4d7bc57278909e1c46a13c15ab225d5920506dc3a4984a128_prof);

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
