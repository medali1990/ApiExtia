<?php

/* ArticleBundle:Article:postArticle.html.twig */
class __TwigTemplate_d5545b59e836820956a80da70ce7b70e196a098633215643f857a808044a3bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:postArticle.html.twig", 1);
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
        $__internal_38a461df0a1a114e939ea6f6e11021bc781943fc367457752848d67381700cde = $this->env->getExtension("native_profiler");
        $__internal_38a461df0a1a114e939ea6f6e11021bc781943fc367457752848d67381700cde->enter($__internal_38a461df0a1a114e939ea6f6e11021bc781943fc367457752848d67381700cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a461df0a1a114e939ea6f6e11021bc781943fc367457752848d67381700cde->leave($__internal_38a461df0a1a114e939ea6f6e11021bc781943fc367457752848d67381700cde_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c9138f58abd15992c70142c6264b39d48b88a500d782a49455c863e0cdae92b = $this->env->getExtension("native_profiler");
        $__internal_1c9138f58abd15992c70142c6264b39d48b88a500d782a49455c863e0cdae92b->enter($__internal_1c9138f58abd15992c70142c6264b39d48b88a500d782a49455c863e0cdae92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_1c9138f58abd15992c70142c6264b39d48b88a500d782a49455c863e0cdae92b->leave($__internal_1c9138f58abd15992c70142c6264b39d48b88a500d782a49455c863e0cdae92b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f83a2788b983140a50d1ee72c64c0adca47f9d95841f43f60cd7eacd2642d67b = $this->env->getExtension("native_profiler");
        $__internal_f83a2788b983140a50d1ee72c64c0adca47f9d95841f43f60cd7eacd2642d67b->enter($__internal_f83a2788b983140a50d1ee72c64c0adca47f9d95841f43f60cd7eacd2642d67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_f83a2788b983140a50d1ee72c64c0adca47f9d95841f43f60cd7eacd2642d67b->leave($__internal_f83a2788b983140a50d1ee72c64c0adca47f9d95841f43f60cd7eacd2642d67b_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:postArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:postArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:postArticle page</h1>*/
/* {% endblock %}*/
/* */
