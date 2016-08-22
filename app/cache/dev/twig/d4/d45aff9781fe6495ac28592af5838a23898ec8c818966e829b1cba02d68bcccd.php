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
        $__internal_fb9cce731a3165e550a6ac5331bd7cc5a2b93664bff2856cc35c76b4f23fdbbd = $this->env->getExtension("native_profiler");
        $__internal_fb9cce731a3165e550a6ac5331bd7cc5a2b93664bff2856cc35c76b4f23fdbbd->enter($__internal_fb9cce731a3165e550a6ac5331bd7cc5a2b93664bff2856cc35c76b4f23fdbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9cce731a3165e550a6ac5331bd7cc5a2b93664bff2856cc35c76b4f23fdbbd->leave($__internal_fb9cce731a3165e550a6ac5331bd7cc5a2b93664bff2856cc35c76b4f23fdbbd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e8cb07abee90865a863ade0f0629966fa702337e289236beee6f5bf08421485 = $this->env->getExtension("native_profiler");
        $__internal_5e8cb07abee90865a863ade0f0629966fa702337e289236beee6f5bf08421485->enter($__internal_5e8cb07abee90865a863ade0f0629966fa702337e289236beee6f5bf08421485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_5e8cb07abee90865a863ade0f0629966fa702337e289236beee6f5bf08421485->leave($__internal_5e8cb07abee90865a863ade0f0629966fa702337e289236beee6f5bf08421485_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_282c7190b49017a7088bb3dcecd0eec6d725190f63ccbdd745fb92ae61c70eef = $this->env->getExtension("native_profiler");
        $__internal_282c7190b49017a7088bb3dcecd0eec6d725190f63ccbdd745fb92ae61c70eef->enter($__internal_282c7190b49017a7088bb3dcecd0eec6d725190f63ccbdd745fb92ae61c70eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_282c7190b49017a7088bb3dcecd0eec6d725190f63ccbdd745fb92ae61c70eef->leave($__internal_282c7190b49017a7088bb3dcecd0eec6d725190f63ccbdd745fb92ae61c70eef_prof);

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
