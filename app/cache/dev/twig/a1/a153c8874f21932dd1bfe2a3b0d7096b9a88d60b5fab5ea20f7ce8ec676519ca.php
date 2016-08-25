<?php

/* base.html.twig */
class __TwigTemplate_6701761fb7cf8bb148ad46dec89b57cf1d990bd771e636cbadd246a184a495b7 extends Twig_Template
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
        $__internal_9d8268417fb82a1afdb7e3205293c26c90c029777d6cb282c52fb7b99eec75f3 = $this->env->getExtension("native_profiler");
        $__internal_9d8268417fb82a1afdb7e3205293c26c90c029777d6cb282c52fb7b99eec75f3->enter($__internal_9d8268417fb82a1afdb7e3205293c26c90c029777d6cb282c52fb7b99eec75f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9d8268417fb82a1afdb7e3205293c26c90c029777d6cb282c52fb7b99eec75f3->leave($__internal_9d8268417fb82a1afdb7e3205293c26c90c029777d6cb282c52fb7b99eec75f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e2f484e8f26b08f6a0ade3cb17374c8e95399ddda91e2bd7f5f24bf90004fa = $this->env->getExtension("native_profiler");
        $__internal_48e2f484e8f26b08f6a0ade3cb17374c8e95399ddda91e2bd7f5f24bf90004fa->enter($__internal_48e2f484e8f26b08f6a0ade3cb17374c8e95399ddda91e2bd7f5f24bf90004fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48e2f484e8f26b08f6a0ade3cb17374c8e95399ddda91e2bd7f5f24bf90004fa->leave($__internal_48e2f484e8f26b08f6a0ade3cb17374c8e95399ddda91e2bd7f5f24bf90004fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b308cfeab8549d19c66789f99e7dd6c3eb973b8eb275cb90ed86fda8a443be9 = $this->env->getExtension("native_profiler");
        $__internal_9b308cfeab8549d19c66789f99e7dd6c3eb973b8eb275cb90ed86fda8a443be9->enter($__internal_9b308cfeab8549d19c66789f99e7dd6c3eb973b8eb275cb90ed86fda8a443be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b308cfeab8549d19c66789f99e7dd6c3eb973b8eb275cb90ed86fda8a443be9->leave($__internal_9b308cfeab8549d19c66789f99e7dd6c3eb973b8eb275cb90ed86fda8a443be9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83afb8f25848247b93ad5fe6f876974b070c236a150d262da2894ef5c2c9e9c2 = $this->env->getExtension("native_profiler");
        $__internal_83afb8f25848247b93ad5fe6f876974b070c236a150d262da2894ef5c2c9e9c2->enter($__internal_83afb8f25848247b93ad5fe6f876974b070c236a150d262da2894ef5c2c9e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83afb8f25848247b93ad5fe6f876974b070c236a150d262da2894ef5c2c9e9c2->leave($__internal_83afb8f25848247b93ad5fe6f876974b070c236a150d262da2894ef5c2c9e9c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c1eb462d0797a5ffebb5e0a86bcc273eed11dc29a18e239c0a3cf699f9cc946 = $this->env->getExtension("native_profiler");
        $__internal_8c1eb462d0797a5ffebb5e0a86bcc273eed11dc29a18e239c0a3cf699f9cc946->enter($__internal_8c1eb462d0797a5ffebb5e0a86bcc273eed11dc29a18e239c0a3cf699f9cc946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c1eb462d0797a5ffebb5e0a86bcc273eed11dc29a18e239c0a3cf699f9cc946->leave($__internal_8c1eb462d0797a5ffebb5e0a86bcc273eed11dc29a18e239c0a3cf699f9cc946_prof);

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
