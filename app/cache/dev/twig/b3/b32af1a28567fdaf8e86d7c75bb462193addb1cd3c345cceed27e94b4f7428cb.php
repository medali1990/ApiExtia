<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7bc6845624c681b2097346f5a066a6f4850f8756851d7351397e9975940e0f79 extends Twig_Template
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
        $__internal_a67e255925b037fa7ca3e476d43fec0c8429183fbd0350ac48a612d8d5a5f841 = $this->env->getExtension("native_profiler");
        $__internal_a67e255925b037fa7ca3e476d43fec0c8429183fbd0350ac48a612d8d5a5f841->enter($__internal_a67e255925b037fa7ca3e476d43fec0c8429183fbd0350ac48a612d8d5a5f841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67e255925b037fa7ca3e476d43fec0c8429183fbd0350ac48a612d8d5a5f841->leave($__internal_a67e255925b037fa7ca3e476d43fec0c8429183fbd0350ac48a612d8d5a5f841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36c512ca8f0ebfb515fbc578f82ea49eef834078ed12634bd03f8416b926eca8 = $this->env->getExtension("native_profiler");
        $__internal_36c512ca8f0ebfb515fbc578f82ea49eef834078ed12634bd03f8416b926eca8->enter($__internal_36c512ca8f0ebfb515fbc578f82ea49eef834078ed12634bd03f8416b926eca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36c512ca8f0ebfb515fbc578f82ea49eef834078ed12634bd03f8416b926eca8->leave($__internal_36c512ca8f0ebfb515fbc578f82ea49eef834078ed12634bd03f8416b926eca8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_003574f2ffe6f24adc0f58695cd72d1638a3ef13f83b4f02a0a09676d7dd46fc = $this->env->getExtension("native_profiler");
        $__internal_003574f2ffe6f24adc0f58695cd72d1638a3ef13f83b4f02a0a09676d7dd46fc->enter($__internal_003574f2ffe6f24adc0f58695cd72d1638a3ef13f83b4f02a0a09676d7dd46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_003574f2ffe6f24adc0f58695cd72d1638a3ef13f83b4f02a0a09676d7dd46fc->leave($__internal_003574f2ffe6f24adc0f58695cd72d1638a3ef13f83b4f02a0a09676d7dd46fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5754d6887538798e431ef349ec52331fd1a4ea7a1db9058040efb212b00eb722 = $this->env->getExtension("native_profiler");
        $__internal_5754d6887538798e431ef349ec52331fd1a4ea7a1db9058040efb212b00eb722->enter($__internal_5754d6887538798e431ef349ec52331fd1a4ea7a1db9058040efb212b00eb722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5754d6887538798e431ef349ec52331fd1a4ea7a1db9058040efb212b00eb722->leave($__internal_5754d6887538798e431ef349ec52331fd1a4ea7a1db9058040efb212b00eb722_prof);

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
