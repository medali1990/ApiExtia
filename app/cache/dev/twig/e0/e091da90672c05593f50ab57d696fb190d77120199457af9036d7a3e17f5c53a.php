<?php

/* ::base.html.twig */
class __TwigTemplate_e022681e0e9f5f6dd8f45eede5f555db6c30f206491134ad72ee831a4263a7e0 extends Twig_Template
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
        $__internal_9a7eb7f7f573b19acd0b158b94e4b93d450934eeff9fbef7d54d54667974f527 = $this->env->getExtension("native_profiler");
        $__internal_9a7eb7f7f573b19acd0b158b94e4b93d450934eeff9fbef7d54d54667974f527->enter($__internal_9a7eb7f7f573b19acd0b158b94e4b93d450934eeff9fbef7d54d54667974f527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9a7eb7f7f573b19acd0b158b94e4b93d450934eeff9fbef7d54d54667974f527->leave($__internal_9a7eb7f7f573b19acd0b158b94e4b93d450934eeff9fbef7d54d54667974f527_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d571b730b8e19140e293541da31231a70e2a2d9e16165e66de1e1b4efa5c269 = $this->env->getExtension("native_profiler");
        $__internal_3d571b730b8e19140e293541da31231a70e2a2d9e16165e66de1e1b4efa5c269->enter($__internal_3d571b730b8e19140e293541da31231a70e2a2d9e16165e66de1e1b4efa5c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d571b730b8e19140e293541da31231a70e2a2d9e16165e66de1e1b4efa5c269->leave($__internal_3d571b730b8e19140e293541da31231a70e2a2d9e16165e66de1e1b4efa5c269_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a659d5160c9541cfe1b268636cf6b59b74214d976f9d41e4a49c47a3aa89aa4f = $this->env->getExtension("native_profiler");
        $__internal_a659d5160c9541cfe1b268636cf6b59b74214d976f9d41e4a49c47a3aa89aa4f->enter($__internal_a659d5160c9541cfe1b268636cf6b59b74214d976f9d41e4a49c47a3aa89aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a659d5160c9541cfe1b268636cf6b59b74214d976f9d41e4a49c47a3aa89aa4f->leave($__internal_a659d5160c9541cfe1b268636cf6b59b74214d976f9d41e4a49c47a3aa89aa4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e67491bf1e7cf921e7482c12755a84140979e0a2f1a941edd9a8d2fa1e20e72 = $this->env->getExtension("native_profiler");
        $__internal_9e67491bf1e7cf921e7482c12755a84140979e0a2f1a941edd9a8d2fa1e20e72->enter($__internal_9e67491bf1e7cf921e7482c12755a84140979e0a2f1a941edd9a8d2fa1e20e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e67491bf1e7cf921e7482c12755a84140979e0a2f1a941edd9a8d2fa1e20e72->leave($__internal_9e67491bf1e7cf921e7482c12755a84140979e0a2f1a941edd9a8d2fa1e20e72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d7b5e19465bcb065cea02a7ac21b94744d9fe41ae81da653ce9fa15ba8d5427 = $this->env->getExtension("native_profiler");
        $__internal_6d7b5e19465bcb065cea02a7ac21b94744d9fe41ae81da653ce9fa15ba8d5427->enter($__internal_6d7b5e19465bcb065cea02a7ac21b94744d9fe41ae81da653ce9fa15ba8d5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d7b5e19465bcb065cea02a7ac21b94744d9fe41ae81da653ce9fa15ba8d5427->leave($__internal_6d7b5e19465bcb065cea02a7ac21b94744d9fe41ae81da653ce9fa15ba8d5427_prof);

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
