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
        $__internal_723e96ca721439290f4d02dcd6952e994cbb58f3b05289ee824fa2f291450cd3 = $this->env->getExtension("native_profiler");
        $__internal_723e96ca721439290f4d02dcd6952e994cbb58f3b05289ee824fa2f291450cd3->enter($__internal_723e96ca721439290f4d02dcd6952e994cbb58f3b05289ee824fa2f291450cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723e96ca721439290f4d02dcd6952e994cbb58f3b05289ee824fa2f291450cd3->leave($__internal_723e96ca721439290f4d02dcd6952e994cbb58f3b05289ee824fa2f291450cd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4ba850690caf83dad40278580f30464c4869093352d5a4e5a64263f31bd8f78 = $this->env->getExtension("native_profiler");
        $__internal_c4ba850690caf83dad40278580f30464c4869093352d5a4e5a64263f31bd8f78->enter($__internal_c4ba850690caf83dad40278580f30464c4869093352d5a4e5a64263f31bd8f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c4ba850690caf83dad40278580f30464c4869093352d5a4e5a64263f31bd8f78->leave($__internal_c4ba850690caf83dad40278580f30464c4869093352d5a4e5a64263f31bd8f78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffbdc8b2bc27073798468a29047812381f294dff459455f1bfd7ac52c3e53f91 = $this->env->getExtension("native_profiler");
        $__internal_ffbdc8b2bc27073798468a29047812381f294dff459455f1bfd7ac52c3e53f91->enter($__internal_ffbdc8b2bc27073798468a29047812381f294dff459455f1bfd7ac52c3e53f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ffbdc8b2bc27073798468a29047812381f294dff459455f1bfd7ac52c3e53f91->leave($__internal_ffbdc8b2bc27073798468a29047812381f294dff459455f1bfd7ac52c3e53f91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25659f8db9db8746fa2c1cf6c1840af3693e8d3a0148034a94dcc107e7db712d = $this->env->getExtension("native_profiler");
        $__internal_25659f8db9db8746fa2c1cf6c1840af3693e8d3a0148034a94dcc107e7db712d->enter($__internal_25659f8db9db8746fa2c1cf6c1840af3693e8d3a0148034a94dcc107e7db712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_25659f8db9db8746fa2c1cf6c1840af3693e8d3a0148034a94dcc107e7db712d->leave($__internal_25659f8db9db8746fa2c1cf6c1840af3693e8d3a0148034a94dcc107e7db712d_prof);

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
