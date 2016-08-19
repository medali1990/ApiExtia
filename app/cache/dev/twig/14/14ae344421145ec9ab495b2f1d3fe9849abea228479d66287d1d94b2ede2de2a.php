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
        $__internal_bab220e0dfdfaf4870bf75ff49ce3ce3b31be6fa82ab65158ee48130b586a894 = $this->env->getExtension("native_profiler");
        $__internal_bab220e0dfdfaf4870bf75ff49ce3ce3b31be6fa82ab65158ee48130b586a894->enter($__internal_bab220e0dfdfaf4870bf75ff49ce3ce3b31be6fa82ab65158ee48130b586a894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bab220e0dfdfaf4870bf75ff49ce3ce3b31be6fa82ab65158ee48130b586a894->leave($__internal_bab220e0dfdfaf4870bf75ff49ce3ce3b31be6fa82ab65158ee48130b586a894_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_564d9596c86b2427bf82156072f18f34f1275c57ceaf456782a8c5e64419c159 = $this->env->getExtension("native_profiler");
        $__internal_564d9596c86b2427bf82156072f18f34f1275c57ceaf456782a8c5e64419c159->enter($__internal_564d9596c86b2427bf82156072f18f34f1275c57ceaf456782a8c5e64419c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_564d9596c86b2427bf82156072f18f34f1275c57ceaf456782a8c5e64419c159->leave($__internal_564d9596c86b2427bf82156072f18f34f1275c57ceaf456782a8c5e64419c159_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da03d254562f10232a6eaa22621c33fd5ef68fad0979cf20e0feab16b3bf2755 = $this->env->getExtension("native_profiler");
        $__internal_da03d254562f10232a6eaa22621c33fd5ef68fad0979cf20e0feab16b3bf2755->enter($__internal_da03d254562f10232a6eaa22621c33fd5ef68fad0979cf20e0feab16b3bf2755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da03d254562f10232a6eaa22621c33fd5ef68fad0979cf20e0feab16b3bf2755->leave($__internal_da03d254562f10232a6eaa22621c33fd5ef68fad0979cf20e0feab16b3bf2755_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a98e7cdd840c9613714d9d2e203710798105220a007a6ca528d88ceb14ffe13b = $this->env->getExtension("native_profiler");
        $__internal_a98e7cdd840c9613714d9d2e203710798105220a007a6ca528d88ceb14ffe13b->enter($__internal_a98e7cdd840c9613714d9d2e203710798105220a007a6ca528d88ceb14ffe13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a98e7cdd840c9613714d9d2e203710798105220a007a6ca528d88ceb14ffe13b->leave($__internal_a98e7cdd840c9613714d9d2e203710798105220a007a6ca528d88ceb14ffe13b_prof);

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
