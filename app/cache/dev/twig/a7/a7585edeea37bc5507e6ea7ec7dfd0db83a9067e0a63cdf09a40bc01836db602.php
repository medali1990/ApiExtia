<?php

/* ArticleBundle:Default:index.html.twig */
class __TwigTemplate_0b8b4c0ee7aa545a3d1e0a4b13c9477bd07ddb02ceac1013e42f36bc302a2fa0 extends Twig_Template
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
        $__internal_8fc52803aa862f33f4ec8c924871870b14b46c10b0715bfcab99dae6fa8bed81 = $this->env->getExtension("native_profiler");
        $__internal_8fc52803aa862f33f4ec8c924871870b14b46c10b0715bfcab99dae6fa8bed81->enter($__internal_8fc52803aa862f33f4ec8c924871870b14b46c10b0715bfcab99dae6fa8bed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_8fc52803aa862f33f4ec8c924871870b14b46c10b0715bfcab99dae6fa8bed81->leave($__internal_8fc52803aa862f33f4ec8c924871870b14b46c10b0715bfcab99dae6fa8bed81_prof);

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