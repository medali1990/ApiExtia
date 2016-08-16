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
        $__internal_bfd98de5118dc6e0995e4a55a798e287d9eed8acd61f165059456a0a27ac23e9 = $this->env->getExtension("native_profiler");
        $__internal_bfd98de5118dc6e0995e4a55a798e287d9eed8acd61f165059456a0a27ac23e9->enter($__internal_bfd98de5118dc6e0995e4a55a798e287d9eed8acd61f165059456a0a27ac23e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:ViewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd98de5118dc6e0995e4a55a798e287d9eed8acd61f165059456a0a27ac23e9->leave($__internal_bfd98de5118dc6e0995e4a55a798e287d9eed8acd61f165059456a0a27ac23e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc60b1e6db3921c3f9289b6df5854a784311737a386ea926001248c09b50ac85 = $this->env->getExtension("native_profiler");
        $__internal_dc60b1e6db3921c3f9289b6df5854a784311737a386ea926001248c09b50ac85->enter($__internal_dc60b1e6db3921c3f9289b6df5854a784311737a386ea926001248c09b50ac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Details article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dc60b1e6db3921c3f9289b6df5854a784311737a386ea926001248c09b50ac85->leave($__internal_dc60b1e6db3921c3f9289b6df5854a784311737a386ea926001248c09b50ac85_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_194c0ef450b1856b832a90d01c7712b0da9d142231ebc72dc5fd64c915b8ff5d = $this->env->getExtension("native_profiler");
        $__internal_194c0ef450b1856b832a90d01c7712b0da9d142231ebc72dc5fd64c915b8ff5d->enter($__internal_194c0ef450b1856b832a90d01c7712b0da9d142231ebc72dc5fd64c915b8ff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
  <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>titre de l'article </h1>

        </div>
    </div>

";
        
        $__internal_194c0ef450b1856b832a90d01c7712b0da9d142231ebc72dc5fd64c915b8ff5d->leave($__internal_194c0ef450b1856b832a90d01c7712b0da9d142231ebc72dc5fd64c915b8ff5d_prof);

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
