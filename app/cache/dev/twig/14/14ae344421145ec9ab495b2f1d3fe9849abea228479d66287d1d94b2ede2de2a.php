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
        $__internal_d7dd5c3cb77d38c26ec13c2410d65ca7a7c83c0705cd40d792ef9fe234be96ad = $this->env->getExtension("native_profiler");
        $__internal_d7dd5c3cb77d38c26ec13c2410d65ca7a7c83c0705cd40d792ef9fe234be96ad->enter($__internal_d7dd5c3cb77d38c26ec13c2410d65ca7a7c83c0705cd40d792ef9fe234be96ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7dd5c3cb77d38c26ec13c2410d65ca7a7c83c0705cd40d792ef9fe234be96ad->leave($__internal_d7dd5c3cb77d38c26ec13c2410d65ca7a7c83c0705cd40d792ef9fe234be96ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_785e32bd868ed337ae9bbb7713712625e390776ddb2fb4f47466e4071b326057 = $this->env->getExtension("native_profiler");
        $__internal_785e32bd868ed337ae9bbb7713712625e390776ddb2fb4f47466e4071b326057->enter($__internal_785e32bd868ed337ae9bbb7713712625e390776ddb2fb4f47466e4071b326057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_785e32bd868ed337ae9bbb7713712625e390776ddb2fb4f47466e4071b326057->leave($__internal_785e32bd868ed337ae9bbb7713712625e390776ddb2fb4f47466e4071b326057_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98d81c0f292bbb2dd439ffd03d345fdce09a716a291f65b6c2ade80e3e487a8f = $this->env->getExtension("native_profiler");
        $__internal_98d81c0f292bbb2dd439ffd03d345fdce09a716a291f65b6c2ade80e3e487a8f->enter($__internal_98d81c0f292bbb2dd439ffd03d345fdce09a716a291f65b6c2ade80e3e487a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_98d81c0f292bbb2dd439ffd03d345fdce09a716a291f65b6c2ade80e3e487a8f->leave($__internal_98d81c0f292bbb2dd439ffd03d345fdce09a716a291f65b6c2ade80e3e487a8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aa47de23ef314c17b25230d305ccf1dbfb17ce5a3f22d596457c389ad81a6d8 = $this->env->getExtension("native_profiler");
        $__internal_0aa47de23ef314c17b25230d305ccf1dbfb17ce5a3f22d596457c389ad81a6d8->enter($__internal_0aa47de23ef314c17b25230d305ccf1dbfb17ce5a3f22d596457c389ad81a6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0aa47de23ef314c17b25230d305ccf1dbfb17ce5a3f22d596457c389ad81a6d8->leave($__internal_0aa47de23ef314c17b25230d305ccf1dbfb17ce5a3f22d596457c389ad81a6d8_prof);

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
