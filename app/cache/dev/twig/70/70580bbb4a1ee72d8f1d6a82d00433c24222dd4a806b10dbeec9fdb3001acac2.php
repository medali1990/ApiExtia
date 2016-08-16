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
        $__internal_8ef6c188054c4045faef153a0c86bc47418b925fccd3b1654c70a0bba9e8dc97 = $this->env->getExtension("native_profiler");
        $__internal_8ef6c188054c4045faef153a0c86bc47418b925fccd3b1654c70a0bba9e8dc97->enter($__internal_8ef6c188054c4045faef153a0c86bc47418b925fccd3b1654c70a0bba9e8dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef6c188054c4045faef153a0c86bc47418b925fccd3b1654c70a0bba9e8dc97->leave($__internal_8ef6c188054c4045faef153a0c86bc47418b925fccd3b1654c70a0bba9e8dc97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59431449b0b2337e8bc081565f5d30d75db8abefefcf402a48298d832e475a65 = $this->env->getExtension("native_profiler");
        $__internal_59431449b0b2337e8bc081565f5d30d75db8abefefcf402a48298d832e475a65->enter($__internal_59431449b0b2337e8bc081565f5d30d75db8abefefcf402a48298d832e475a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_59431449b0b2337e8bc081565f5d30d75db8abefefcf402a48298d832e475a65->leave($__internal_59431449b0b2337e8bc081565f5d30d75db8abefefcf402a48298d832e475a65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a95834667f950ae545680c2b394625ef08e2396e0afa70f7ee2c247fb35280 = $this->env->getExtension("native_profiler");
        $__internal_98a95834667f950ae545680c2b394625ef08e2396e0afa70f7ee2c247fb35280->enter($__internal_98a95834667f950ae545680c2b394625ef08e2396e0afa70f7ee2c247fb35280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_98a95834667f950ae545680c2b394625ef08e2396e0afa70f7ee2c247fb35280->leave($__internal_98a95834667f950ae545680c2b394625ef08e2396e0afa70f7ee2c247fb35280_prof);

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
