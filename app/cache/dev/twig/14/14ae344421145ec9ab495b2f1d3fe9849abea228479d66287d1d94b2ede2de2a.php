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
        $__internal_6faf693bf98da4e055c2783f7092257639286c8b734b6d65c6dc5703bf311db7 = $this->env->getExtension("native_profiler");
        $__internal_6faf693bf98da4e055c2783f7092257639286c8b734b6d65c6dc5703bf311db7->enter($__internal_6faf693bf98da4e055c2783f7092257639286c8b734b6d65c6dc5703bf311db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6faf693bf98da4e055c2783f7092257639286c8b734b6d65c6dc5703bf311db7->leave($__internal_6faf693bf98da4e055c2783f7092257639286c8b734b6d65c6dc5703bf311db7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bc9c45b6965604f5845da43d32cf8e31e47c13630d4a3b9966c428bb7f22969 = $this->env->getExtension("native_profiler");
        $__internal_3bc9c45b6965604f5845da43d32cf8e31e47c13630d4a3b9966c428bb7f22969->enter($__internal_3bc9c45b6965604f5845da43d32cf8e31e47c13630d4a3b9966c428bb7f22969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3bc9c45b6965604f5845da43d32cf8e31e47c13630d4a3b9966c428bb7f22969->leave($__internal_3bc9c45b6965604f5845da43d32cf8e31e47c13630d4a3b9966c428bb7f22969_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e61d18e7ff23e444d02f166e472b121e2106b0682509f0d04a897f8e1ab1427c = $this->env->getExtension("native_profiler");
        $__internal_e61d18e7ff23e444d02f166e472b121e2106b0682509f0d04a897f8e1ab1427c->enter($__internal_e61d18e7ff23e444d02f166e472b121e2106b0682509f0d04a897f8e1ab1427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e61d18e7ff23e444d02f166e472b121e2106b0682509f0d04a897f8e1ab1427c->leave($__internal_e61d18e7ff23e444d02f166e472b121e2106b0682509f0d04a897f8e1ab1427c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_895b352309b002d036eea4102d3aba9ca322b2f3db11fd355c5d2d0788376d7e = $this->env->getExtension("native_profiler");
        $__internal_895b352309b002d036eea4102d3aba9ca322b2f3db11fd355c5d2d0788376d7e->enter($__internal_895b352309b002d036eea4102d3aba9ca322b2f3db11fd355c5d2d0788376d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_895b352309b002d036eea4102d3aba9ca322b2f3db11fd355c5d2d0788376d7e->leave($__internal_895b352309b002d036eea4102d3aba9ca322b2f3db11fd355c5d2d0788376d7e_prof);

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
