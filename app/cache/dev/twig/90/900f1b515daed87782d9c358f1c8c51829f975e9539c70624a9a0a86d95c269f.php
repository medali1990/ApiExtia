<?php

/* base.html.twig */
class __TwigTemplate_1f8d0bbdf6b7193aa7bb741a56d73c624e9a9bdeff4687297871b8e57c15da09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38796630099d4551cf7853494667dd0db96f182629d035376b85cd60e6005a4 = $this->env->getExtension("native_profiler");
        $__internal_a38796630099d4551cf7853494667dd0db96f182629d035376b85cd60e6005a4->enter($__internal_a38796630099d4551cf7853494667dd0db96f182629d035376b85cd60e6005a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a38796630099d4551cf7853494667dd0db96f182629d035376b85cd60e6005a4->leave($__internal_a38796630099d4551cf7853494667dd0db96f182629d035376b85cd60e6005a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3190caa039f0c3d61fe09ff839797040c934fdb3db0bfd3cecd7b4c526ba8858 = $this->env->getExtension("native_profiler");
        $__internal_3190caa039f0c3d61fe09ff839797040c934fdb3db0bfd3cecd7b4c526ba8858->enter($__internal_3190caa039f0c3d61fe09ff839797040c934fdb3db0bfd3cecd7b4c526ba8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3190caa039f0c3d61fe09ff839797040c934fdb3db0bfd3cecd7b4c526ba8858->leave($__internal_3190caa039f0c3d61fe09ff839797040c934fdb3db0bfd3cecd7b4c526ba8858_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d2ab54f1e40893e4a32da7cc75a0afd779762c26f0f8477352cedf15191b070 = $this->env->getExtension("native_profiler");
        $__internal_9d2ab54f1e40893e4a32da7cc75a0afd779762c26f0f8477352cedf15191b070->enter($__internal_9d2ab54f1e40893e4a32da7cc75a0afd779762c26f0f8477352cedf15191b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d2ab54f1e40893e4a32da7cc75a0afd779762c26f0f8477352cedf15191b070->leave($__internal_9d2ab54f1e40893e4a32da7cc75a0afd779762c26f0f8477352cedf15191b070_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e056470d985502efde22ad36d71270ff18196cea21a23cddcb5dedbae34d5f9 = $this->env->getExtension("native_profiler");
        $__internal_0e056470d985502efde22ad36d71270ff18196cea21a23cddcb5dedbae34d5f9->enter($__internal_0e056470d985502efde22ad36d71270ff18196cea21a23cddcb5dedbae34d5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e056470d985502efde22ad36d71270ff18196cea21a23cddcb5dedbae34d5f9->leave($__internal_0e056470d985502efde22ad36d71270ff18196cea21a23cddcb5dedbae34d5f9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dac09c8ad3d10dad01e71ff0b0bc25c23876e852edbe783fece16dac83a1f59 = $this->env->getExtension("native_profiler");
        $__internal_7dac09c8ad3d10dad01e71ff0b0bc25c23876e852edbe783fece16dac83a1f59->enter($__internal_7dac09c8ad3d10dad01e71ff0b0bc25c23876e852edbe783fece16dac83a1f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7dac09c8ad3d10dad01e71ff0b0bc25c23876e852edbe783fece16dac83a1f59->leave($__internal_7dac09c8ad3d10dad01e71ff0b0bc25c23876e852edbe783fece16dac83a1f59_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
