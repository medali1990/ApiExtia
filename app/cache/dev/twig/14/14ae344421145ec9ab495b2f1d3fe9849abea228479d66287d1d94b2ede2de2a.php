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
        $__internal_4f2ff5847d0fc128f41b2dd7715c723da28e07158af3eb1144dcd2303036c0e2 = $this->env->getExtension("native_profiler");
        $__internal_4f2ff5847d0fc128f41b2dd7715c723da28e07158af3eb1144dcd2303036c0e2->enter($__internal_4f2ff5847d0fc128f41b2dd7715c723da28e07158af3eb1144dcd2303036c0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2ff5847d0fc128f41b2dd7715c723da28e07158af3eb1144dcd2303036c0e2->leave($__internal_4f2ff5847d0fc128f41b2dd7715c723da28e07158af3eb1144dcd2303036c0e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9e3589a62ec448e4f1cf2b97270dd3db1b558ff9e989e7a4f70c28f608b0196 = $this->env->getExtension("native_profiler");
        $__internal_c9e3589a62ec448e4f1cf2b97270dd3db1b558ff9e989e7a4f70c28f608b0196->enter($__internal_c9e3589a62ec448e4f1cf2b97270dd3db1b558ff9e989e7a4f70c28f608b0196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9e3589a62ec448e4f1cf2b97270dd3db1b558ff9e989e7a4f70c28f608b0196->leave($__internal_c9e3589a62ec448e4f1cf2b97270dd3db1b558ff9e989e7a4f70c28f608b0196_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c721bb98b2b9b6ef4329eb2ee541289363275d40b970c75b4f59248707efc495 = $this->env->getExtension("native_profiler");
        $__internal_c721bb98b2b9b6ef4329eb2ee541289363275d40b970c75b4f59248707efc495->enter($__internal_c721bb98b2b9b6ef4329eb2ee541289363275d40b970c75b4f59248707efc495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c721bb98b2b9b6ef4329eb2ee541289363275d40b970c75b4f59248707efc495->leave($__internal_c721bb98b2b9b6ef4329eb2ee541289363275d40b970c75b4f59248707efc495_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7227ab0ab0b8b60ea7b03a26d0aaba677884c3c92bc8bada1bd0c81c1806cdcd = $this->env->getExtension("native_profiler");
        $__internal_7227ab0ab0b8b60ea7b03a26d0aaba677884c3c92bc8bada1bd0c81c1806cdcd->enter($__internal_7227ab0ab0b8b60ea7b03a26d0aaba677884c3c92bc8bada1bd0c81c1806cdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7227ab0ab0b8b60ea7b03a26d0aaba677884c3c92bc8bada1bd0c81c1806cdcd->leave($__internal_7227ab0ab0b8b60ea7b03a26d0aaba677884c3c92bc8bada1bd0c81c1806cdcd_prof);

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
