<?php

/* ArticleBundle:Article:getArticles.html.twig */
class __TwigTemplate_752925e87dff9f0cb98d2106e584a827072eb5962db2c4523f1d03d21e14d45f extends Twig_Template
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
        $__internal_d5ee9a27872b3f68b357b58dec30a3c4a6384ae631ace1baf7eea73037e0b7c8 = $this->env->getExtension("native_profiler");
        $__internal_d5ee9a27872b3f68b357b58dec30a3c4a6384ae631ace1baf7eea73037e0b7c8->enter($__internal_d5ee9a27872b3f68b357b58dec30a3c4a6384ae631ace1baf7eea73037e0b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5ee9a27872b3f68b357b58dec30a3c4a6384ae631ace1baf7eea73037e0b7c8->leave($__internal_d5ee9a27872b3f68b357b58dec30a3c4a6384ae631ace1baf7eea73037e0b7c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fd198a5d86b8bf23c15b4b8ed2c5ad9526853ec602e7df4381ad5bebef92ab8 = $this->env->getExtension("native_profiler");
        $__internal_1fd198a5d86b8bf23c15b4b8ed2c5ad9526853ec602e7df4381ad5bebef92ab8->enter($__internal_1fd198a5d86b8bf23c15b4b8ed2c5ad9526853ec602e7df4381ad5bebef92ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticles";
        
        $__internal_1fd198a5d86b8bf23c15b4b8ed2c5ad9526853ec602e7df4381ad5bebef92ab8->leave($__internal_1fd198a5d86b8bf23c15b4b8ed2c5ad9526853ec602e7df4381ad5bebef92ab8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6d8b78ff9fcd7b820ca7bf82d2de68d0cf60b69c81c5c1d0837e44d5d5b6c6 = $this->env->getExtension("native_profiler");
        $__internal_1a6d8b78ff9fcd7b820ca7bf82d2de68d0cf60b69c81c5c1d0837e44d5d5b6c6->enter($__internal_1a6d8b78ff9fcd7b820ca7bf82d2de68d0cf60b69c81c5c1d0837e44d5d5b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticles page</h1>
";
        
        $__internal_1a6d8b78ff9fcd7b820ca7bf82d2de68d0cf60b69c81c5c1d0837e44d5d5b6c6->leave($__internal_1a6d8b78ff9fcd7b820ca7bf82d2de68d0cf60b69c81c5c1d0837e44d5d5b6c6_prof);

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
