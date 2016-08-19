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
        $__internal_665a029a7140161e0896e720db52cf1554fb1134dbf8ca5cfa2385fd3b2d58a5 = $this->env->getExtension("native_profiler");
        $__internal_665a029a7140161e0896e720db52cf1554fb1134dbf8ca5cfa2385fd3b2d58a5->enter($__internal_665a029a7140161e0896e720db52cf1554fb1134dbf8ca5cfa2385fd3b2d58a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665a029a7140161e0896e720db52cf1554fb1134dbf8ca5cfa2385fd3b2d58a5->leave($__internal_665a029a7140161e0896e720db52cf1554fb1134dbf8ca5cfa2385fd3b2d58a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e640924d5c77e970af6c51f85b166f05889e8f2c868ab478680a4b4a95311375 = $this->env->getExtension("native_profiler");
        $__internal_e640924d5c77e970af6c51f85b166f05889e8f2c868ab478680a4b4a95311375->enter($__internal_e640924d5c77e970af6c51f85b166f05889e8f2c868ab478680a4b4a95311375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_e640924d5c77e970af6c51f85b166f05889e8f2c868ab478680a4b4a95311375->leave($__internal_e640924d5c77e970af6c51f85b166f05889e8f2c868ab478680a4b4a95311375_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8443187532b0a10a2cba89364bee52d7944431dda60d66167f41177e893910 = $this->env->getExtension("native_profiler");
        $__internal_fe8443187532b0a10a2cba89364bee52d7944431dda60d66167f41177e893910->enter($__internal_fe8443187532b0a10a2cba89364bee52d7944431dda60d66167f41177e893910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_fe8443187532b0a10a2cba89364bee52d7944431dda60d66167f41177e893910->leave($__internal_fe8443187532b0a10a2cba89364bee52d7944431dda60d66167f41177e893910_prof);

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
