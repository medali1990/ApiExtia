<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_783a87695d52dcd64c201b0cc4a9a7915396d11bb39e6a218f2bcc441e16fe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticles.html.twig", 1);
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
        $__internal_53ae8b00670fc2067c9399f8b941c1f2c61068870311beffa46a4b84d6ec4b3b = $this->env->getExtension("native_profiler");
        $__internal_53ae8b00670fc2067c9399f8b941c1f2c61068870311beffa46a4b84d6ec4b3b->enter($__internal_53ae8b00670fc2067c9399f8b941c1f2c61068870311beffa46a4b84d6ec4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ae8b00670fc2067c9399f8b941c1f2c61068870311beffa46a4b84d6ec4b3b->leave($__internal_53ae8b00670fc2067c9399f8b941c1f2c61068870311beffa46a4b84d6ec4b3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dac9eb2d25fdf6c47bc5dc59fc51b5ffabe63f5c56cf1e9739b368fe273c3729 = $this->env->getExtension("native_profiler");
        $__internal_dac9eb2d25fdf6c47bc5dc59fc51b5ffabe63f5c56cf1e9739b368fe273c3729->enter($__internal_dac9eb2d25fdf6c47bc5dc59fc51b5ffabe63f5c56cf1e9739b368fe273c3729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_dac9eb2d25fdf6c47bc5dc59fc51b5ffabe63f5c56cf1e9739b368fe273c3729->leave($__internal_dac9eb2d25fdf6c47bc5dc59fc51b5ffabe63f5c56cf1e9739b368fe273c3729_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f777d0c2160c2f46c2306f6f1b6a175e1babfd848ff940b4a8c1237b048c0f18 = $this->env->getExtension("native_profiler");
        $__internal_f777d0c2160c2f46c2306f6f1b6a175e1babfd848ff940b4a8c1237b048c0f18->enter($__internal_f777d0c2160c2f46c2306f6f1b6a175e1babfd848ff940b4a8c1237b048c0f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_f777d0c2160c2f46c2306f6f1b6a175e1babfd848ff940b4a8c1237b048c0f18->leave($__internal_f777d0c2160c2f46c2306f6f1b6a175e1babfd848ff940b4a8c1237b048c0f18_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticles.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticles{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticles page</h1>*/
/* {% endblock %}*/
/* */
