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
        $__internal_1617fe3b2766e91ebf926fa76059a88367e9c54ddcfbad3d5a2d9813448defe6 = $this->env->getExtension("native_profiler");
        $__internal_1617fe3b2766e91ebf926fa76059a88367e9c54ddcfbad3d5a2d9813448defe6->enter($__internal_1617fe3b2766e91ebf926fa76059a88367e9c54ddcfbad3d5a2d9813448defe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1617fe3b2766e91ebf926fa76059a88367e9c54ddcfbad3d5a2d9813448defe6->leave($__internal_1617fe3b2766e91ebf926fa76059a88367e9c54ddcfbad3d5a2d9813448defe6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e436af22f9b89b95287651133497ecd1969a3b85fe1f06ebc6b2ec91d687b33 = $this->env->getExtension("native_profiler");
        $__internal_3e436af22f9b89b95287651133497ecd1969a3b85fe1f06ebc6b2ec91d687b33->enter($__internal_3e436af22f9b89b95287651133497ecd1969a3b85fe1f06ebc6b2ec91d687b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e436af22f9b89b95287651133497ecd1969a3b85fe1f06ebc6b2ec91d687b33->leave($__internal_3e436af22f9b89b95287651133497ecd1969a3b85fe1f06ebc6b2ec91d687b33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d34a3f206fa26397a14d7db3e04e451769856258d54c10cccb2b947d71aa52 = $this->env->getExtension("native_profiler");
        $__internal_a1d34a3f206fa26397a14d7db3e04e451769856258d54c10cccb2b947d71aa52->enter($__internal_a1d34a3f206fa26397a14d7db3e04e451769856258d54c10cccb2b947d71aa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1d34a3f206fa26397a14d7db3e04e451769856258d54c10cccb2b947d71aa52->leave($__internal_a1d34a3f206fa26397a14d7db3e04e451769856258d54c10cccb2b947d71aa52_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9c5ca692d11204724d325323475b17a5e7a2f20fab628cec03f9956d0f0de8 = $this->env->getExtension("native_profiler");
        $__internal_5e9c5ca692d11204724d325323475b17a5e7a2f20fab628cec03f9956d0f0de8->enter($__internal_5e9c5ca692d11204724d325323475b17a5e7a2f20fab628cec03f9956d0f0de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5e9c5ca692d11204724d325323475b17a5e7a2f20fab628cec03f9956d0f0de8->leave($__internal_5e9c5ca692d11204724d325323475b17a5e7a2f20fab628cec03f9956d0f0de8_prof);

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
