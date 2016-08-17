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
        $__internal_12c60baac416432e8fbbd9ea292487663f56b468643586e60be546d910287272 = $this->env->getExtension("native_profiler");
        $__internal_12c60baac416432e8fbbd9ea292487663f56b468643586e60be546d910287272->enter($__internal_12c60baac416432e8fbbd9ea292487663f56b468643586e60be546d910287272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c60baac416432e8fbbd9ea292487663f56b468643586e60be546d910287272->leave($__internal_12c60baac416432e8fbbd9ea292487663f56b468643586e60be546d910287272_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_218ae34bf05d0c3d9f008a6e0657d7aab024a478224b39e514283c6487e65e63 = $this->env->getExtension("native_profiler");
        $__internal_218ae34bf05d0c3d9f008a6e0657d7aab024a478224b39e514283c6487e65e63->enter($__internal_218ae34bf05d0c3d9f008a6e0657d7aab024a478224b39e514283c6487e65e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_218ae34bf05d0c3d9f008a6e0657d7aab024a478224b39e514283c6487e65e63->leave($__internal_218ae34bf05d0c3d9f008a6e0657d7aab024a478224b39e514283c6487e65e63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e81ec208ee659b6bb73e657022f8d78313b75b075f9d8fda06ca68615024c9 = $this->env->getExtension("native_profiler");
        $__internal_f8e81ec208ee659b6bb73e657022f8d78313b75b075f9d8fda06ca68615024c9->enter($__internal_f8e81ec208ee659b6bb73e657022f8d78313b75b075f9d8fda06ca68615024c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_f8e81ec208ee659b6bb73e657022f8d78313b75b075f9d8fda06ca68615024c9->leave($__internal_f8e81ec208ee659b6bb73e657022f8d78313b75b075f9d8fda06ca68615024c9_prof);

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
