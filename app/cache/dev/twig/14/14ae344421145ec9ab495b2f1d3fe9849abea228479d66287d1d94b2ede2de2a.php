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
        $__internal_d4fca948447b2ef8caf7ab2b6a921cfd44f82c81fab777bf7d622f122622935c = $this->env->getExtension("native_profiler");
        $__internal_d4fca948447b2ef8caf7ab2b6a921cfd44f82c81fab777bf7d622f122622935c->enter($__internal_d4fca948447b2ef8caf7ab2b6a921cfd44f82c81fab777bf7d622f122622935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fca948447b2ef8caf7ab2b6a921cfd44f82c81fab777bf7d622f122622935c->leave($__internal_d4fca948447b2ef8caf7ab2b6a921cfd44f82c81fab777bf7d622f122622935c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8028ccd0db6bb9cab185a4103a4a107a4469cbfce1e5477fd44eb158047c69eb = $this->env->getExtension("native_profiler");
        $__internal_8028ccd0db6bb9cab185a4103a4a107a4469cbfce1e5477fd44eb158047c69eb->enter($__internal_8028ccd0db6bb9cab185a4103a4a107a4469cbfce1e5477fd44eb158047c69eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8028ccd0db6bb9cab185a4103a4a107a4469cbfce1e5477fd44eb158047c69eb->leave($__internal_8028ccd0db6bb9cab185a4103a4a107a4469cbfce1e5477fd44eb158047c69eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdeb9083c7f03d135872192c2c7cbfa630a0c69912b7f391b0dbf38578d3c3cc = $this->env->getExtension("native_profiler");
        $__internal_bdeb9083c7f03d135872192c2c7cbfa630a0c69912b7f391b0dbf38578d3c3cc->enter($__internal_bdeb9083c7f03d135872192c2c7cbfa630a0c69912b7f391b0dbf38578d3c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bdeb9083c7f03d135872192c2c7cbfa630a0c69912b7f391b0dbf38578d3c3cc->leave($__internal_bdeb9083c7f03d135872192c2c7cbfa630a0c69912b7f391b0dbf38578d3c3cc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_16ec7c0316230e35591ae668973b2dca98cffceed059f3d57c21d0c03a9f5fcb = $this->env->getExtension("native_profiler");
        $__internal_16ec7c0316230e35591ae668973b2dca98cffceed059f3d57c21d0c03a9f5fcb->enter($__internal_16ec7c0316230e35591ae668973b2dca98cffceed059f3d57c21d0c03a9f5fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_16ec7c0316230e35591ae668973b2dca98cffceed059f3d57c21d0c03a9f5fcb->leave($__internal_16ec7c0316230e35591ae668973b2dca98cffceed059f3d57c21d0c03a9f5fcb_prof);

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
