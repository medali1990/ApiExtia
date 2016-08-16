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
        $__internal_9da98bc61ef14cb7048151a81ac8e4e41fd98752d71b01eee25bde1a3972ce92 = $this->env->getExtension("native_profiler");
        $__internal_9da98bc61ef14cb7048151a81ac8e4e41fd98752d71b01eee25bde1a3972ce92->enter($__internal_9da98bc61ef14cb7048151a81ac8e4e41fd98752d71b01eee25bde1a3972ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da98bc61ef14cb7048151a81ac8e4e41fd98752d71b01eee25bde1a3972ce92->leave($__internal_9da98bc61ef14cb7048151a81ac8e4e41fd98752d71b01eee25bde1a3972ce92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a23a39dd3cbd2fa104187c03c85b0ff791e6155440c3825652befe7c6e377178 = $this->env->getExtension("native_profiler");
        $__internal_a23a39dd3cbd2fa104187c03c85b0ff791e6155440c3825652befe7c6e377178->enter($__internal_a23a39dd3cbd2fa104187c03c85b0ff791e6155440c3825652befe7c6e377178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a23a39dd3cbd2fa104187c03c85b0ff791e6155440c3825652befe7c6e377178->leave($__internal_a23a39dd3cbd2fa104187c03c85b0ff791e6155440c3825652befe7c6e377178_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8932c1f172f71b1cf1b8936e3e5550dd1bdf37f4b8e62686dff1dd0ad13f03f = $this->env->getExtension("native_profiler");
        $__internal_d8932c1f172f71b1cf1b8936e3e5550dd1bdf37f4b8e62686dff1dd0ad13f03f->enter($__internal_d8932c1f172f71b1cf1b8936e3e5550dd1bdf37f4b8e62686dff1dd0ad13f03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8932c1f172f71b1cf1b8936e3e5550dd1bdf37f4b8e62686dff1dd0ad13f03f->leave($__internal_d8932c1f172f71b1cf1b8936e3e5550dd1bdf37f4b8e62686dff1dd0ad13f03f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7c45458999f9ca797cbd140b968656c0816a9a42ec2824991f633b7c36aa0f7 = $this->env->getExtension("native_profiler");
        $__internal_c7c45458999f9ca797cbd140b968656c0816a9a42ec2824991f633b7c36aa0f7->enter($__internal_c7c45458999f9ca797cbd140b968656c0816a9a42ec2824991f633b7c36aa0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c7c45458999f9ca797cbd140b968656c0816a9a42ec2824991f633b7c36aa0f7->leave($__internal_c7c45458999f9ca797cbd140b968656c0816a9a42ec2824991f633b7c36aa0f7_prof);

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
