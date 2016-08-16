<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_06d8862067035aba99526a51413bbf9036d6ac10baec2f281a11c72f7a9d6a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2d11a9d7a0cecc421bae3ffbfb28de5557cc9cfefe25b3ee77a369c8525f1c = $this->env->getExtension("native_profiler");
        $__internal_8d2d11a9d7a0cecc421bae3ffbfb28de5557cc9cfefe25b3ee77a369c8525f1c->enter($__internal_8d2d11a9d7a0cecc421bae3ffbfb28de5557cc9cfefe25b3ee77a369c8525f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2d11a9d7a0cecc421bae3ffbfb28de5557cc9cfefe25b3ee77a369c8525f1c->leave($__internal_8d2d11a9d7a0cecc421bae3ffbfb28de5557cc9cfefe25b3ee77a369c8525f1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5c1505bebec583893a81525576f86e4cde2858af800551595942841feafdb54 = $this->env->getExtension("native_profiler");
        $__internal_c5c1505bebec583893a81525576f86e4cde2858af800551595942841feafdb54->enter($__internal_c5c1505bebec583893a81525576f86e4cde2858af800551595942841feafdb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c5c1505bebec583893a81525576f86e4cde2858af800551595942841feafdb54->leave($__internal_c5c1505bebec583893a81525576f86e4cde2858af800551595942841feafdb54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41129e932f273b994dd4ef35fd7314a6c7a32be896b7f5bd182fcfbcd56f2cd7 = $this->env->getExtension("native_profiler");
        $__internal_41129e932f273b994dd4ef35fd7314a6c7a32be896b7f5bd182fcfbcd56f2cd7->enter($__internal_41129e932f273b994dd4ef35fd7314a6c7a32be896b7f5bd182fcfbcd56f2cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_41129e932f273b994dd4ef35fd7314a6c7a32be896b7f5bd182fcfbcd56f2cd7->leave($__internal_41129e932f273b994dd4ef35fd7314a6c7a32be896b7f5bd182fcfbcd56f2cd7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cb8e44b7b719db05853253a38b91719502900e1b823cf0389b912e316fc535f = $this->env->getExtension("native_profiler");
        $__internal_2cb8e44b7b719db05853253a38b91719502900e1b823cf0389b912e316fc535f->enter($__internal_2cb8e44b7b719db05853253a38b91719502900e1b823cf0389b912e316fc535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_2cb8e44b7b719db05853253a38b91719502900e1b823cf0389b912e316fc535f->leave($__internal_2cb8e44b7b719db05853253a38b91719502900e1b823cf0389b912e316fc535f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a39a60389e305a6ba5b29d6b940151448e58f9c2c518523b086eeeec9f6e6d4e = $this->env->getExtension("native_profiler");
        $__internal_a39a60389e305a6ba5b29d6b940151448e58f9c2c518523b086eeeec9f6e6d4e->enter($__internal_a39a60389e305a6ba5b29d6b940151448e58f9c2c518523b086eeeec9f6e6d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a39a60389e305a6ba5b29d6b940151448e58f9c2c518523b086eeeec9f6e6d4e->leave($__internal_a39a60389e305a6ba5b29d6b940151448e58f9c2c518523b086eeeec9f6e6d4e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
