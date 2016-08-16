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
        $__internal_d9259991dafc5fadef13d1e39ce365be1299063f9d94817142d5137c59977f59 = $this->env->getExtension("native_profiler");
        $__internal_d9259991dafc5fadef13d1e39ce365be1299063f9d94817142d5137c59977f59->enter($__internal_d9259991dafc5fadef13d1e39ce365be1299063f9d94817142d5137c59977f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9259991dafc5fadef13d1e39ce365be1299063f9d94817142d5137c59977f59->leave($__internal_d9259991dafc5fadef13d1e39ce365be1299063f9d94817142d5137c59977f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f1ab734c1337f791aef79c2bb867b1f7edf22a26d7696db2dd13e6ad68b9601 = $this->env->getExtension("native_profiler");
        $__internal_2f1ab734c1337f791aef79c2bb867b1f7edf22a26d7696db2dd13e6ad68b9601->enter($__internal_2f1ab734c1337f791aef79c2bb867b1f7edf22a26d7696db2dd13e6ad68b9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f1ab734c1337f791aef79c2bb867b1f7edf22a26d7696db2dd13e6ad68b9601->leave($__internal_2f1ab734c1337f791aef79c2bb867b1f7edf22a26d7696db2dd13e6ad68b9601_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd4dd59ed36f691b74708dbf2d4953e7cecafa1be12816a62a96fdd22f8f61c8 = $this->env->getExtension("native_profiler");
        $__internal_fd4dd59ed36f691b74708dbf2d4953e7cecafa1be12816a62a96fdd22f8f61c8->enter($__internal_fd4dd59ed36f691b74708dbf2d4953e7cecafa1be12816a62a96fdd22f8f61c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd4dd59ed36f691b74708dbf2d4953e7cecafa1be12816a62a96fdd22f8f61c8->leave($__internal_fd4dd59ed36f691b74708dbf2d4953e7cecafa1be12816a62a96fdd22f8f61c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f856b8ec0e123b4c4210d0076da69b4fbc8bd81aed7264eb11cdc97c17fdfa3 = $this->env->getExtension("native_profiler");
        $__internal_2f856b8ec0e123b4c4210d0076da69b4fbc8bd81aed7264eb11cdc97c17fdfa3->enter($__internal_2f856b8ec0e123b4c4210d0076da69b4fbc8bd81aed7264eb11cdc97c17fdfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2f856b8ec0e123b4c4210d0076da69b4fbc8bd81aed7264eb11cdc97c17fdfa3->leave($__internal_2f856b8ec0e123b4c4210d0076da69b4fbc8bd81aed7264eb11cdc97c17fdfa3_prof);

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
