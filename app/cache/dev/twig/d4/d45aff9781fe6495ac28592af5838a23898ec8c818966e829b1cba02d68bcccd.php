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
        $__internal_91a5366c1312840ceddb1f53efb3da3f66a43193b69a3332b2dfab143d4840f2 = $this->env->getExtension("native_profiler");
        $__internal_91a5366c1312840ceddb1f53efb3da3f66a43193b69a3332b2dfab143d4840f2->enter($__internal_91a5366c1312840ceddb1f53efb3da3f66a43193b69a3332b2dfab143d4840f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:postArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a5366c1312840ceddb1f53efb3da3f66a43193b69a3332b2dfab143d4840f2->leave($__internal_91a5366c1312840ceddb1f53efb3da3f66a43193b69a3332b2dfab143d4840f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7cdd305fdebc738ef804d0320a6ecc653ba31912a1d5a5249aaadd840356363 = $this->env->getExtension("native_profiler");
        $__internal_f7cdd305fdebc738ef804d0320a6ecc653ba31912a1d5a5249aaadd840356363->enter($__internal_f7cdd305fdebc738ef804d0320a6ecc653ba31912a1d5a5249aaadd840356363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ArticleBundle:Article:postArticle";
        
        $__internal_f7cdd305fdebc738ef804d0320a6ecc653ba31912a1d5a5249aaadd840356363->leave($__internal_f7cdd305fdebc738ef804d0320a6ecc653ba31912a1d5a5249aaadd840356363_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_010fe7b4c67db108a13d182c3d5f3dbfecadbb4e8e244d24d4b14a250104f55d = $this->env->getExtension("native_profiler");
        $__internal_010fe7b4c67db108a13d182c3d5f3dbfecadbb4e8e244d24d4b14a250104f55d->enter($__internal_010fe7b4c67db108a13d182c3d5f3dbfecadbb4e8e244d24d4b14a250104f55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Article:postArticle page</h1>
";
        
        $__internal_010fe7b4c67db108a13d182c3d5f3dbfecadbb4e8e244d24d4b14a250104f55d->leave($__internal_010fe7b4c67db108a13d182c3d5f3dbfecadbb4e8e244d24d4b14a250104f55d_prof);

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
