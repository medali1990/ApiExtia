<?php

/* ::base.html.twig */
class __TwigTemplate_7b24304a1f26dd3a3d471ec6c741a627e0dc320a619c11755c12ff2d61389f29 extends Twig_Template
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
        $__internal_390c2025cc39d94ec0a465ea3c21ad19dd221afe25f6107508e9a9653586bd93 = $this->env->getExtension("native_profiler");
        $__internal_390c2025cc39d94ec0a465ea3c21ad19dd221afe25f6107508e9a9653586bd93->enter($__internal_390c2025cc39d94ec0a465ea3c21ad19dd221afe25f6107508e9a9653586bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_390c2025cc39d94ec0a465ea3c21ad19dd221afe25f6107508e9a9653586bd93->leave($__internal_390c2025cc39d94ec0a465ea3c21ad19dd221afe25f6107508e9a9653586bd93_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd9a1163f7dff974ff180fe7b6c984d52ee54015835cc5da8d15d62cfeae4df = $this->env->getExtension("native_profiler");
        $__internal_7dd9a1163f7dff974ff180fe7b6c984d52ee54015835cc5da8d15d62cfeae4df->enter($__internal_7dd9a1163f7dff974ff180fe7b6c984d52ee54015835cc5da8d15d62cfeae4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7dd9a1163f7dff974ff180fe7b6c984d52ee54015835cc5da8d15d62cfeae4df->leave($__internal_7dd9a1163f7dff974ff180fe7b6c984d52ee54015835cc5da8d15d62cfeae4df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_322ac148975385bb576ca3bac7622a3db11a841e61252bb92ec80663e8f6a830 = $this->env->getExtension("native_profiler");
        $__internal_322ac148975385bb576ca3bac7622a3db11a841e61252bb92ec80663e8f6a830->enter($__internal_322ac148975385bb576ca3bac7622a3db11a841e61252bb92ec80663e8f6a830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_322ac148975385bb576ca3bac7622a3db11a841e61252bb92ec80663e8f6a830->leave($__internal_322ac148975385bb576ca3bac7622a3db11a841e61252bb92ec80663e8f6a830_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5491ee15411dcc1e07542d0fe6a8caaac8b344b7221ec7c535ad14bcd810441 = $this->env->getExtension("native_profiler");
        $__internal_c5491ee15411dcc1e07542d0fe6a8caaac8b344b7221ec7c535ad14bcd810441->enter($__internal_c5491ee15411dcc1e07542d0fe6a8caaac8b344b7221ec7c535ad14bcd810441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5491ee15411dcc1e07542d0fe6a8caaac8b344b7221ec7c535ad14bcd810441->leave($__internal_c5491ee15411dcc1e07542d0fe6a8caaac8b344b7221ec7c535ad14bcd810441_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_612fc29d0861be489bee2802ff76faafe861a962af108610232c7e9b4f04d7aa = $this->env->getExtension("native_profiler");
        $__internal_612fc29d0861be489bee2802ff76faafe861a962af108610232c7e9b4f04d7aa->enter($__internal_612fc29d0861be489bee2802ff76faafe861a962af108610232c7e9b4f04d7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_612fc29d0861be489bee2802ff76faafe861a962af108610232c7e9b4f04d7aa->leave($__internal_612fc29d0861be489bee2802ff76faafe861a962af108610232c7e9b4f04d7aa_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
