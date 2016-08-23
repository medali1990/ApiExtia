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
        $__internal_955bedb6c5f0f64415c1358eed09f19c579da165ca88c243c4fcba3dfc2daae1 = $this->env->getExtension("native_profiler");
        $__internal_955bedb6c5f0f64415c1358eed09f19c579da165ca88c243c4fcba3dfc2daae1->enter($__internal_955bedb6c5f0f64415c1358eed09f19c579da165ca88c243c4fcba3dfc2daae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955bedb6c5f0f64415c1358eed09f19c579da165ca88c243c4fcba3dfc2daae1->leave($__internal_955bedb6c5f0f64415c1358eed09f19c579da165ca88c243c4fcba3dfc2daae1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_684ee7356e8bd7f656aecf523702ff799cfb47e67945245685e8ff9d5d91414a = $this->env->getExtension("native_profiler");
        $__internal_684ee7356e8bd7f656aecf523702ff799cfb47e67945245685e8ff9d5d91414a->enter($__internal_684ee7356e8bd7f656aecf523702ff799cfb47e67945245685e8ff9d5d91414a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_684ee7356e8bd7f656aecf523702ff799cfb47e67945245685e8ff9d5d91414a->leave($__internal_684ee7356e8bd7f656aecf523702ff799cfb47e67945245685e8ff9d5d91414a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_698d6e0de967ab9942e42be7f0577e1879bb43e0e9a628daf75d7d72aaca7485 = $this->env->getExtension("native_profiler");
        $__internal_698d6e0de967ab9942e42be7f0577e1879bb43e0e9a628daf75d7d72aaca7485->enter($__internal_698d6e0de967ab9942e42be7f0577e1879bb43e0e9a628daf75d7d72aaca7485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_698d6e0de967ab9942e42be7f0577e1879bb43e0e9a628daf75d7d72aaca7485->leave($__internal_698d6e0de967ab9942e42be7f0577e1879bb43e0e9a628daf75d7d72aaca7485_prof);

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
