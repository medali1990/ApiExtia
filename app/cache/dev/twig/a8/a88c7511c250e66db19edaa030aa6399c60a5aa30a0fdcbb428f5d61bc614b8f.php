<?php

/* FrontOfficeBundle:FrontOffice:ViewArticle.html.twig */
class __TwigTemplate_fd29179339b750178379f17c30476640b4b3124234a8a1b619838bf9c6610497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article_body' => array($this, 'block_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::ArticleLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d6155f92ea4545b82295ed4943fed228af7b95a84a270c2af660136aea87ee = $this->env->getExtension("native_profiler");
        $__internal_a5d6155f92ea4545b82295ed4943fed228af7b95a84a270c2af660136aea87ee->enter($__internal_a5d6155f92ea4545b82295ed4943fed228af7b95a84a270c2af660136aea87ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d6155f92ea4545b82295ed4943fed228af7b95a84a270c2af660136aea87ee->leave($__internal_a5d6155f92ea4545b82295ed4943fed228af7b95a84a270c2af660136aea87ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f85074e820f6f317fc598f473749c99dce3eaa181f52262fc83b70ed850256f = $this->env->getExtension("native_profiler");
        $__internal_3f85074e820f6f317fc598f473749c99dce3eaa181f52262fc83b70ed850256f->enter($__internal_3f85074e820f6f317fc598f473749c99dce3eaa181f52262fc83b70ed850256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3f85074e820f6f317fc598f473749c99dce3eaa181f52262fc83b70ed850256f->leave($__internal_3f85074e820f6f317fc598f473749c99dce3eaa181f52262fc83b70ed850256f_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_99474d408db6513ef8efe1110e1a1a133b84978db4f1362c6f6af1c982ce96c6 = $this->env->getExtension("native_profiler");
        $__internal_99474d408db6513ef8efe1110e1a1a133b84978db4f1362c6f6af1c982ce96c6->enter($__internal_99474d408db6513ef8efe1110e1a1a133b84978db4f1362c6f6af1c982ce96c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_99474d408db6513ef8efe1110e1a1a133b84978db4f1362c6f6af1c982ce96c6->leave($__internal_99474d408db6513ef8efe1110e1a1a133b84978db4f1362c6f6af1c982ce96c6_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Details article-{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/*   <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>titre de l'article </h1>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
