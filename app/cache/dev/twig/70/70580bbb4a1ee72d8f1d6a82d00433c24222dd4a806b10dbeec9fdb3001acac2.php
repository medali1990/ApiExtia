<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_4fc59290d65551a1189cefd22e794543bf2f8fcab90e339638e9fb3fd16e41e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:deletArticle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc9b4d456796c96c0618283dc27487bcb7ab097592b553398330ff60989d7ba = $this->env->getExtension("native_profiler");
        $__internal_2bc9b4d456796c96c0618283dc27487bcb7ab097592b553398330ff60989d7ba->enter($__internal_2bc9b4d456796c96c0618283dc27487bcb7ab097592b553398330ff60989d7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc9b4d456796c96c0618283dc27487bcb7ab097592b553398330ff60989d7ba->leave($__internal_2bc9b4d456796c96c0618283dc27487bcb7ab097592b553398330ff60989d7ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05174e06756f4a9b3c117a6782e9edb477bc5ff76761a6ed49a6115ec0dedc91 = $this->env->getExtension("native_profiler");
        $__internal_05174e06756f4a9b3c117a6782e9edb477bc5ff76761a6ed49a6115ec0dedc91->enter($__internal_05174e06756f4a9b3c117a6782e9edb477bc5ff76761a6ed49a6115ec0dedc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_05174e06756f4a9b3c117a6782e9edb477bc5ff76761a6ed49a6115ec0dedc91->leave($__internal_05174e06756f4a9b3c117a6782e9edb477bc5ff76761a6ed49a6115ec0dedc91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd33f9e0a03f0ca24234906a7862705b7206152ee588facb547432490465af67 = $this->env->getExtension("native_profiler");
        $__internal_dd33f9e0a03f0ca24234906a7862705b7206152ee588facb547432490465af67->enter($__internal_dd33f9e0a03f0ca24234906a7862705b7206152ee588facb547432490465af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_dd33f9e0a03f0ca24234906a7862705b7206152ee588facb547432490465af67->leave($__internal_dd33f9e0a03f0ca24234906a7862705b7206152ee588facb547432490465af67_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:deletArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ArticleBundle:Article:deletArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:deletArticle page</h1>*/
/* {% endblock %}*/
/* */
