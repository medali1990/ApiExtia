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
        $__internal_be9735b6a86f77c137b107b29db99e842a52d61eb8761e87426afd1f18ec8b71 = $this->env->getExtension("native_profiler");
        $__internal_be9735b6a86f77c137b107b29db99e842a52d61eb8761e87426afd1f18ec8b71->enter($__internal_be9735b6a86f77c137b107b29db99e842a52d61eb8761e87426afd1f18ec8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9735b6a86f77c137b107b29db99e842a52d61eb8761e87426afd1f18ec8b71->leave($__internal_be9735b6a86f77c137b107b29db99e842a52d61eb8761e87426afd1f18ec8b71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ead22a43bdeb67462a3caebf3fb05db741be422eb1ead6a83cca228da8bca07 = $this->env->getExtension("native_profiler");
        $__internal_4ead22a43bdeb67462a3caebf3fb05db741be422eb1ead6a83cca228da8bca07->enter($__internal_4ead22a43bdeb67462a3caebf3fb05db741be422eb1ead6a83cca228da8bca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ead22a43bdeb67462a3caebf3fb05db741be422eb1ead6a83cca228da8bca07->leave($__internal_4ead22a43bdeb67462a3caebf3fb05db741be422eb1ead6a83cca228da8bca07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9db37cb178aad98535a9f48501e5236091adad1ae9c5c35ee6c995cbb35099a6 = $this->env->getExtension("native_profiler");
        $__internal_9db37cb178aad98535a9f48501e5236091adad1ae9c5c35ee6c995cbb35099a6->enter($__internal_9db37cb178aad98535a9f48501e5236091adad1ae9c5c35ee6c995cbb35099a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9db37cb178aad98535a9f48501e5236091adad1ae9c5c35ee6c995cbb35099a6->leave($__internal_9db37cb178aad98535a9f48501e5236091adad1ae9c5c35ee6c995cbb35099a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc29e5f8acdf68dff84ed563082c1214fcf4bcbf878f3a522a4c2e19768bb676 = $this->env->getExtension("native_profiler");
        $__internal_fc29e5f8acdf68dff84ed563082c1214fcf4bcbf878f3a522a4c2e19768bb676->enter($__internal_fc29e5f8acdf68dff84ed563082c1214fcf4bcbf878f3a522a4c2e19768bb676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fc29e5f8acdf68dff84ed563082c1214fcf4bcbf878f3a522a4c2e19768bb676->leave($__internal_fc29e5f8acdf68dff84ed563082c1214fcf4bcbf878f3a522a4c2e19768bb676_prof);

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
