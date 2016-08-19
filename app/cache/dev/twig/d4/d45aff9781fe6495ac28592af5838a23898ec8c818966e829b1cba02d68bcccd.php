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
        $__internal_2a7cc4ff03023a8e977bc25428356f3445a615b936959790da63efd085c03912 = $this->env->getExtension("native_profiler");
        $__internal_2a7cc4ff03023a8e977bc25428356f3445a615b936959790da63efd085c03912->enter($__internal_2a7cc4ff03023a8e977bc25428356f3445a615b936959790da63efd085c03912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7cc4ff03023a8e977bc25428356f3445a615b936959790da63efd085c03912->leave($__internal_2a7cc4ff03023a8e977bc25428356f3445a615b936959790da63efd085c03912_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_207665acc0b3b5db444171ad05a76933c2b5fcaee837ad18b0d9b6e1c1466976 = $this->env->getExtension("native_profiler");
        $__internal_207665acc0b3b5db444171ad05a76933c2b5fcaee837ad18b0d9b6e1c1466976->enter($__internal_207665acc0b3b5db444171ad05a76933c2b5fcaee837ad18b0d9b6e1c1466976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_207665acc0b3b5db444171ad05a76933c2b5fcaee837ad18b0d9b6e1c1466976->leave($__internal_207665acc0b3b5db444171ad05a76933c2b5fcaee837ad18b0d9b6e1c1466976_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_952572ad1ed577ecf55183a5c2f0be53184e30cbf166a53d86d625badc2c50fc = $this->env->getExtension("native_profiler");
        $__internal_952572ad1ed577ecf55183a5c2f0be53184e30cbf166a53d86d625badc2c50fc->enter($__internal_952572ad1ed577ecf55183a5c2f0be53184e30cbf166a53d86d625badc2c50fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_952572ad1ed577ecf55183a5c2f0be53184e30cbf166a53d86d625badc2c50fc->leave($__internal_952572ad1ed577ecf55183a5c2f0be53184e30cbf166a53d86d625badc2c50fc_prof);

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
