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
        $__internal_e99c973f4ace98d3ff757c5b1370d907a0d7cd536ba0a7bc33377dffc9c96415 = $this->env->getExtension("native_profiler");
        $__internal_e99c973f4ace98d3ff757c5b1370d907a0d7cd536ba0a7bc33377dffc9c96415->enter($__internal_e99c973f4ace98d3ff757c5b1370d907a0d7cd536ba0a7bc33377dffc9c96415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99c973f4ace98d3ff757c5b1370d907a0d7cd536ba0a7bc33377dffc9c96415->leave($__internal_e99c973f4ace98d3ff757c5b1370d907a0d7cd536ba0a7bc33377dffc9c96415_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d223dc213d130e41195f8350393ca9742473e5c96b8354c76d26c41254bb1c3 = $this->env->getExtension("native_profiler");
        $__internal_8d223dc213d130e41195f8350393ca9742473e5c96b8354c76d26c41254bb1c3->enter($__internal_8d223dc213d130e41195f8350393ca9742473e5c96b8354c76d26c41254bb1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d223dc213d130e41195f8350393ca9742473e5c96b8354c76d26c41254bb1c3->leave($__internal_8d223dc213d130e41195f8350393ca9742473e5c96b8354c76d26c41254bb1c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ec52238de40a539ced03d8df3902a2613dddbe46793a37bdcc1e9616ec5f413 = $this->env->getExtension("native_profiler");
        $__internal_7ec52238de40a539ced03d8df3902a2613dddbe46793a37bdcc1e9616ec5f413->enter($__internal_7ec52238de40a539ced03d8df3902a2613dddbe46793a37bdcc1e9616ec5f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ec52238de40a539ced03d8df3902a2613dddbe46793a37bdcc1e9616ec5f413->leave($__internal_7ec52238de40a539ced03d8df3902a2613dddbe46793a37bdcc1e9616ec5f413_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a5b1061c4fe95150d0262712aecf8d50bdde2abd6d41d377f03ec6d3e9d3d9e = $this->env->getExtension("native_profiler");
        $__internal_4a5b1061c4fe95150d0262712aecf8d50bdde2abd6d41d377f03ec6d3e9d3d9e->enter($__internal_4a5b1061c4fe95150d0262712aecf8d50bdde2abd6d41d377f03ec6d3e9d3d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4a5b1061c4fe95150d0262712aecf8d50bdde2abd6d41d377f03ec6d3e9d3d9e->leave($__internal_4a5b1061c4fe95150d0262712aecf8d50bdde2abd6d41d377f03ec6d3e9d3d9e_prof);

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
