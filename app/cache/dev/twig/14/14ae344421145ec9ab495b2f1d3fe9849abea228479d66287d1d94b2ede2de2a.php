<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d64668eb422a34085f7104f35d007c5cbc174be25f9658b5be1b0cb6627dd0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9050b121b0790f179ccb67dd849fe08f07bb12ec33f05e818eefbe6e4e6c0f2d = $this->env->getExtension("native_profiler");
        $__internal_9050b121b0790f179ccb67dd849fe08f07bb12ec33f05e818eefbe6e4e6c0f2d->enter($__internal_9050b121b0790f179ccb67dd849fe08f07bb12ec33f05e818eefbe6e4e6c0f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9050b121b0790f179ccb67dd849fe08f07bb12ec33f05e818eefbe6e4e6c0f2d->leave($__internal_9050b121b0790f179ccb67dd849fe08f07bb12ec33f05e818eefbe6e4e6c0f2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c18862edae1f62685b09bfe90758b45a721138dcf6a62f822ca7d3abaa1090c = $this->env->getExtension("native_profiler");
        $__internal_2c18862edae1f62685b09bfe90758b45a721138dcf6a62f822ca7d3abaa1090c->enter($__internal_2c18862edae1f62685b09bfe90758b45a721138dcf6a62f822ca7d3abaa1090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2c18862edae1f62685b09bfe90758b45a721138dcf6a62f822ca7d3abaa1090c->leave($__internal_2c18862edae1f62685b09bfe90758b45a721138dcf6a62f822ca7d3abaa1090c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ad59a9229551c92f5e1555401111c59dc17fca4feeb8b5ca387b53e3bb086de = $this->env->getExtension("native_profiler");
        $__internal_2ad59a9229551c92f5e1555401111c59dc17fca4feeb8b5ca387b53e3bb086de->enter($__internal_2ad59a9229551c92f5e1555401111c59dc17fca4feeb8b5ca387b53e3bb086de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ad59a9229551c92f5e1555401111c59dc17fca4feeb8b5ca387b53e3bb086de->leave($__internal_2ad59a9229551c92f5e1555401111c59dc17fca4feeb8b5ca387b53e3bb086de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89f7e58f84d6806baf06a79b5b413310cb5ac550d7bef4832e61a3775e014559 = $this->env->getExtension("native_profiler");
        $__internal_89f7e58f84d6806baf06a79b5b413310cb5ac550d7bef4832e61a3775e014559->enter($__internal_89f7e58f84d6806baf06a79b5b413310cb5ac550d7bef4832e61a3775e014559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_89f7e58f84d6806baf06a79b5b413310cb5ac550d7bef4832e61a3775e014559->leave($__internal_89f7e58f84d6806baf06a79b5b413310cb5ac550d7bef4832e61a3775e014559_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
