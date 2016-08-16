<?php

/* FrontOfficeBundle:FrontOffice:NewArticle.html.twig */
class __TwigTemplate_5b146713fa4a16f35a91dfa5c6edbb5c65c1ce2c2051dbb4ebc2131e7ba37ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::ArticleLayout.html.twig", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig", 1);
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
        $__internal_ee3cabc26f2926143dd437f301bdf3704967b0aee561da6ca5ca470310b5295f = $this->env->getExtension("native_profiler");
        $__internal_ee3cabc26f2926143dd437f301bdf3704967b0aee561da6ca5ca470310b5295f->enter($__internal_ee3cabc26f2926143dd437f301bdf3704967b0aee561da6ca5ca470310b5295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:FrontOffice:NewArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3cabc26f2926143dd437f301bdf3704967b0aee561da6ca5ca470310b5295f->leave($__internal_ee3cabc26f2926143dd437f301bdf3704967b0aee561da6ca5ca470310b5295f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92689c63b4314b1525cb1cf15c433d63a497a397164f701a9e271bae86b57238 = $this->env->getExtension("native_profiler");
        $__internal_92689c63b4314b1525cb1cf15c433d63a497a397164f701a9e271bae86b57238->enter($__internal_92689c63b4314b1525cb1cf15c433d63a497a397164f701a9e271bae86b57238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Creation article-";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_92689c63b4314b1525cb1cf15c433d63a497a397164f701a9e271bae86b57238->leave($__internal_92689c63b4314b1525cb1cf15c433d63a497a397164f701a9e271bae86b57238_prof);

    }

    // line 7
    public function block_article_body($context, array $blocks = array())
    {
        $__internal_44f45b313aa707015823e8c1d77aa936c1bf32817e22fbb868200fcbaada3f59 = $this->env->getExtension("native_profiler");
        $__internal_44f45b313aa707015823e8c1d77aa936c1bf32817e22fbb868200fcbaada3f59->enter($__internal_44f45b313aa707015823e8c1d77aa936c1bf32817e22fbb868200fcbaada3f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_body"));

        // line 8
        echo "
\t<div class=\"row\">
        <div class=\"col-lg-12 text-center\">
           <h1>Creer un article</h1>

\t\t\t<div class=\"well\">
\t\t\t  <!--";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "-->
\t\t\t  ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t  <!--";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "-->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "titre "));
        echo "
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t\t\t\t  <div class=\"col-sm-4\">\t
\t\t\t\t\t\t  \t
\t\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "leading"));
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'errors');
        echo "
\t\t\t\t\t\t  <div class=\"col-sm-4\">\t
\t\t\t\t\t\t  \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laeding", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Description"));
        echo "
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
\t\t\t\t\t\t  <div class=\"col-sm-4\">\t
\t\t\t\t\t\t  \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'errors');
        echo "
\t\t\t\t\t\t  <div class=\"col-sm-4\">\t
\t\t\t\t\t\t  \t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdBy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "\t
\t\t\t  <div class=\"alert alert-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>\t \t  
\t\t\t  ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "\t  
\t\t\t</div>

        </div>
    </div>
  

";
        
        $__internal_44f45b313aa707015823e8c1d77aa936c1bf32817e22fbb868200fcbaada3f59->leave($__internal_44f45b313aa707015823e8c1d77aa936c1bf32817e22fbb868200fcbaada3f59_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:FrontOffice:NewArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  146 => 47,  142 => 46,  136 => 43,  131 => 41,  127 => 40,  120 => 36,  115 => 34,  111 => 33,  104 => 29,  99 => 27,  95 => 26,  86 => 20,  82 => 19,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::ArticleLayout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Creation article-{{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block article_body %}*/
/* */
/* 	<div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*            <h1>Creer un article</h1>*/
/* */
/* 			<div class="well">*/
/* 			  <!--{{ form(form) }}-->*/
/* 			  {{ form_start(form) }}*/
/* 			  <!--{{ form_errors(form) }}-->*/
/* 				  <div class="form-group">*/
/* 					{{ form_label(form.title, "titre ",{'label_attr':{'class':'col-sm-3 control-label'}} ) }}*/
/* 					{{ form_widget(form.title, {'attr':{'class':'form-control'}}) }}*/
/* 					{{ form_errors(form.title) }}*/
/* 						  <div class="col-sm-4">	*/
/* 						  	*/
/* 						  </div>*/
/* 				  </div>*/
/* 				  <div class="form-group">*/
/* 					{{ form_label(form.laeding, "leading",{'label_attr':{'class':'col-sm-3 control-label'}} ) }}*/
/* 					{{ form_errors(form.laeding) }}*/
/* 						  <div class="col-sm-4">	*/
/* 						  	{{ form_widget(form.laeding, {'attr':{'class':'form-control'}}) }}*/
/* 						  </div>*/
/* 				  </div>*/
/* 				  <div class="form-group">*/
/* 					{{ form_label(form.body, "Description",{'label_attr':{'class':'col-sm-3 control-label'}} ) }}*/
/* 					{{ form_errors(form.body) }}*/
/* 						  <div class="col-sm-4">	*/
/* 						  	{{ form_widget(form.body, {'attr':{'class':'form-control'}}) }}*/
/* 						  </div>*/
/* 				  </div>*/
/* 				  <div class="form-group">*/
/* 					{{ form_label(form.createdBy, "Auteur",{'label_attr':{'class':'col-sm-3 control-label'}} ) }}*/
/* 					{{ form_errors(form.createdBy) }}*/
/* 						  <div class="col-sm-4">	*/
/* 						  	{{ form_widget(form.createdBy, {'attr':{'class':'form-control'}}) }}*/
/* 						  </div>*/
/* 				  </div>*/
/* 				  {{ form_widget(form.save, {'attr':{'class':'btn btn-primary'}}) }}	*/
/* 			  <div class="alert alert-danger">{{ form_rest(form) }}</div>	 	  */
/* 			  {{ form_end(form) }}	  */
/* 			</div>*/
/* */
/*         </div>*/
/*     </div>*/
/*   */
/* */
/* {% endblock %}*/
