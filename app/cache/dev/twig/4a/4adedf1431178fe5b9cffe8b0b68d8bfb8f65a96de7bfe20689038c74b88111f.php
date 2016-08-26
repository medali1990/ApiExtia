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
        $__internal_5e877206095a407944e467a53add90e43fc70821e70fe5803f0d76dfd234fcfb = $this->env->getExtension("native_profiler");
        $__internal_5e877206095a407944e467a53add90e43fc70821e70fe5803f0d76dfd234fcfb->enter($__internal_5e877206095a407944e467a53add90e43fc70821e70fe5803f0d76dfd234fcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:deletArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e877206095a407944e467a53add90e43fc70821e70fe5803f0d76dfd234fcfb->leave($__internal_5e877206095a407944e467a53add90e43fc70821e70fe5803f0d76dfd234fcfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddf6198a8cb74809a7d6b72606ad4fd449921e133dbee72a3c73891fe98d9d3f = $this->env->getExtension("native_profiler");
        $__internal_ddf6198a8cb74809a7d6b72606ad4fd449921e133dbee72a3c73891fe98d9d3f->enter($__internal_ddf6198a8cb74809a7d6b72606ad4fd449921e133dbee72a3c73891fe98d9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:deletArticle";
        
        $__internal_ddf6198a8cb74809a7d6b72606ad4fd449921e133dbee72a3c73891fe98d9d3f->leave($__internal_ddf6198a8cb74809a7d6b72606ad4fd449921e133dbee72a3c73891fe98d9d3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b341cf8b57e816a7db5143f5388efda2cae14b95556ea76f9b171372ac4ce31e = $this->env->getExtension("native_profiler");
        $__internal_b341cf8b57e816a7db5143f5388efda2cae14b95556ea76f9b171372ac4ce31e->enter($__internal_b341cf8b57e816a7db5143f5388efda2cae14b95556ea76f9b171372ac4ce31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:deletArticle page</h1>
";
        
        $__internal_b341cf8b57e816a7db5143f5388efda2cae14b95556ea76f9b171372ac4ce31e->leave($__internal_b341cf8b57e816a7db5143f5388efda2cae14b95556ea76f9b171372ac4ce31e_prof);

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
