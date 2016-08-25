<?php

/* ArticleBundle:Article:deletArticle.html.twig */
class __TwigTemplate_c1d2a8fb6f4e48f856ad11e6069ea9dac0cfec1479b9174ebb77f8e7787f53c4 extends Twig_Template
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
        $__internal_1dd0a5cc32af165261954199b6b0b0d8440529042a1918ba7596a3f37d7c3b47 = $this->env->getExtension("native_profiler");
        $__internal_1dd0a5cc32af165261954199b6b0b0d8440529042a1918ba7596a3f37d7c3b47->enter($__internal_1dd0a5cc32af165261954199b6b0b0d8440529042a1918ba7596a3f37d7c3b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd0a5cc32af165261954199b6b0b0d8440529042a1918ba7596a3f37d7c3b47->leave($__internal_1dd0a5cc32af165261954199b6b0b0d8440529042a1918ba7596a3f37d7c3b47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2f23b69b1dc4d6c582deded533781745345d3daffb3163b49936ed842cdfc5b = $this->env->getExtension("native_profiler");
        $__internal_d2f23b69b1dc4d6c582deded533781745345d3daffb3163b49936ed842cdfc5b->enter($__internal_d2f23b69b1dc4d6c582deded533781745345d3daffb3163b49936ed842cdfc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_d2f23b69b1dc4d6c582deded533781745345d3daffb3163b49936ed842cdfc5b->leave($__internal_d2f23b69b1dc4d6c582deded533781745345d3daffb3163b49936ed842cdfc5b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dddc2dda88c3c9b0e7a626ff774f6818f9595b8b476a377e94b940f3fe84b527 = $this->env->getExtension("native_profiler");
        $__internal_dddc2dda88c3c9b0e7a626ff774f6818f9595b8b476a377e94b940f3fe84b527->enter($__internal_dddc2dda88c3c9b0e7a626ff774f6818f9595b8b476a377e94b940f3fe84b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_dddc2dda88c3c9b0e7a626ff774f6818f9595b8b476a377e94b940f3fe84b527->leave($__internal_dddc2dda88c3c9b0e7a626ff774f6818f9595b8b476a377e94b940f3fe84b527_prof);

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
