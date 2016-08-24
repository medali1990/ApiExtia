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
        $__internal_347721e468e8dd70ce57a859ca36900692d3408c1006d9a2892c3f39b1ee42e7 = $this->env->getExtension("native_profiler");
        $__internal_347721e468e8dd70ce57a859ca36900692d3408c1006d9a2892c3f39b1ee42e7->enter($__internal_347721e468e8dd70ce57a859ca36900692d3408c1006d9a2892c3f39b1ee42e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_347721e468e8dd70ce57a859ca36900692d3408c1006d9a2892c3f39b1ee42e7->leave($__internal_347721e468e8dd70ce57a859ca36900692d3408c1006d9a2892c3f39b1ee42e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50c1a199df964a61669bd44990abe4e3f41f452ae24e677df377da4589de8ac7 = $this->env->getExtension("native_profiler");
        $__internal_50c1a199df964a61669bd44990abe4e3f41f452ae24e677df377da4589de8ac7->enter($__internal_50c1a199df964a61669bd44990abe4e3f41f452ae24e677df377da4589de8ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50c1a199df964a61669bd44990abe4e3f41f452ae24e677df377da4589de8ac7->leave($__internal_50c1a199df964a61669bd44990abe4e3f41f452ae24e677df377da4589de8ac7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e4ca6abbdc96c3a7c867e084a1a4685bf47d3ae2ae0f58ade82a92ce583e4e4 = $this->env->getExtension("native_profiler");
        $__internal_4e4ca6abbdc96c3a7c867e084a1a4685bf47d3ae2ae0f58ade82a92ce583e4e4->enter($__internal_4e4ca6abbdc96c3a7c867e084a1a4685bf47d3ae2ae0f58ade82a92ce583e4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e4ca6abbdc96c3a7c867e084a1a4685bf47d3ae2ae0f58ade82a92ce583e4e4->leave($__internal_4e4ca6abbdc96c3a7c867e084a1a4685bf47d3ae2ae0f58ade82a92ce583e4e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0cfca712c724431adee62caed3e09d58f0edc42d4478d3459da0d032e27299b = $this->env->getExtension("native_profiler");
        $__internal_b0cfca712c724431adee62caed3e09d58f0edc42d4478d3459da0d032e27299b->enter($__internal_b0cfca712c724431adee62caed3e09d58f0edc42d4478d3459da0d032e27299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0cfca712c724431adee62caed3e09d58f0edc42d4478d3459da0d032e27299b->leave($__internal_b0cfca712c724431adee62caed3e09d58f0edc42d4478d3459da0d032e27299b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eee0929cd8ddf6f2fdef002cee96f86b35324b5cf2f2ef9a1456fa8b764ef275 = $this->env->getExtension("native_profiler");
        $__internal_eee0929cd8ddf6f2fdef002cee96f86b35324b5cf2f2ef9a1456fa8b764ef275->enter($__internal_eee0929cd8ddf6f2fdef002cee96f86b35324b5cf2f2ef9a1456fa8b764ef275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eee0929cd8ddf6f2fdef002cee96f86b35324b5cf2f2ef9a1456fa8b764ef275->leave($__internal_eee0929cd8ddf6f2fdef002cee96f86b35324b5cf2f2ef9a1456fa8b764ef275_prof);

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
