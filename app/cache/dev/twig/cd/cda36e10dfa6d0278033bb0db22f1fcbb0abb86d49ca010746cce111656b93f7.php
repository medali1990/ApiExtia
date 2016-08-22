<?php

/* ArticleBundle:Article:getArticle.html.twig */
class __TwigTemplate_bca9d4b44dabb63d12a449e0c33f9f6f630e26d119f53c8ef98078300401837f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ArticleBundle:Article:getArticle.html.twig", 1);
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
        $__internal_5a3c229efa18eb735510a7a96fdc7dd5c5cee315d76b59f6d5a499a8da73b83c = $this->env->getExtension("native_profiler");
        $__internal_5a3c229efa18eb735510a7a96fdc7dd5c5cee315d76b59f6d5a499a8da73b83c->enter($__internal_5a3c229efa18eb735510a7a96fdc7dd5c5cee315d76b59f6d5a499a8da73b83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:getArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3c229efa18eb735510a7a96fdc7dd5c5cee315d76b59f6d5a499a8da73b83c->leave($__internal_5a3c229efa18eb735510a7a96fdc7dd5c5cee315d76b59f6d5a499a8da73b83c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be01f817168a687c6d405a0e7f3f0b0d8955a366c4645f4e3b72d006848d8be1 = $this->env->getExtension("native_profiler");
        $__internal_be01f817168a687c6d405a0e7f3f0b0d8955a366c4645f4e3b72d006848d8be1->enter($__internal_be01f817168a687c6d405a0e7f3f0b0d8955a366c4645f4e3b72d006848d8be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:getArticle";
        
        $__internal_be01f817168a687c6d405a0e7f3f0b0d8955a366c4645f4e3b72d006848d8be1->leave($__internal_be01f817168a687c6d405a0e7f3f0b0d8955a366c4645f4e3b72d006848d8be1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e34f9d102abd13d343fac168a155a5a8b5f513a1038fea9f6b5a42f8bc41b83 = $this->env->getExtension("native_profiler");
        $__internal_4e34f9d102abd13d343fac168a155a5a8b5f513a1038fea9f6b5a42f8bc41b83->enter($__internal_4e34f9d102abd13d343fac168a155a5a8b5f513a1038fea9f6b5a42f8bc41b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:getArticle page</h1>
";
        
        $__internal_4e34f9d102abd13d343fac168a155a5a8b5f513a1038fea9f6b5a42f8bc41b83->leave($__internal_4e34f9d102abd13d343fac168a155a5a8b5f513a1038fea9f6b5a42f8bc41b83_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:getArticle.html.twig";
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
/* {% block title %}ArticleBundle:Article:getArticle{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Article:getArticle page</h1>*/
/* {% endblock %}*/
/* */
