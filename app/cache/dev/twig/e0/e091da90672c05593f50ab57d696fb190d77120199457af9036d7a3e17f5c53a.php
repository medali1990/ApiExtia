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
        $__internal_4b49143d2c460caa355de6f435e8d636d4a6826b88d7af26727f9322e521dc79 = $this->env->getExtension("native_profiler");
        $__internal_4b49143d2c460caa355de6f435e8d636d4a6826b88d7af26727f9322e521dc79->enter($__internal_4b49143d2c460caa355de6f435e8d636d4a6826b88d7af26727f9322e521dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4b49143d2c460caa355de6f435e8d636d4a6826b88d7af26727f9322e521dc79->leave($__internal_4b49143d2c460caa355de6f435e8d636d4a6826b88d7af26727f9322e521dc79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68b0c66e14e4053245b7cf2cb02aa4eb8fdb199ea24318424db42e1802e30543 = $this->env->getExtension("native_profiler");
        $__internal_68b0c66e14e4053245b7cf2cb02aa4eb8fdb199ea24318424db42e1802e30543->enter($__internal_68b0c66e14e4053245b7cf2cb02aa4eb8fdb199ea24318424db42e1802e30543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68b0c66e14e4053245b7cf2cb02aa4eb8fdb199ea24318424db42e1802e30543->leave($__internal_68b0c66e14e4053245b7cf2cb02aa4eb8fdb199ea24318424db42e1802e30543_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b89ba585eddbde005cb3c7a404565f00520b9b547976d0e1ed1b8480d8d913c = $this->env->getExtension("native_profiler");
        $__internal_7b89ba585eddbde005cb3c7a404565f00520b9b547976d0e1ed1b8480d8d913c->enter($__internal_7b89ba585eddbde005cb3c7a404565f00520b9b547976d0e1ed1b8480d8d913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b89ba585eddbde005cb3c7a404565f00520b9b547976d0e1ed1b8480d8d913c->leave($__internal_7b89ba585eddbde005cb3c7a404565f00520b9b547976d0e1ed1b8480d8d913c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c96821941b4d0af9aa2359e8dccddab82ab06b73b9c1cf68780faca7bd7e12d3 = $this->env->getExtension("native_profiler");
        $__internal_c96821941b4d0af9aa2359e8dccddab82ab06b73b9c1cf68780faca7bd7e12d3->enter($__internal_c96821941b4d0af9aa2359e8dccddab82ab06b73b9c1cf68780faca7bd7e12d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c96821941b4d0af9aa2359e8dccddab82ab06b73b9c1cf68780faca7bd7e12d3->leave($__internal_c96821941b4d0af9aa2359e8dccddab82ab06b73b9c1cf68780faca7bd7e12d3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbf29a6db6ec1db2493d4353abda76ac07744a58cf02d85e10d635316f394b82 = $this->env->getExtension("native_profiler");
        $__internal_fbf29a6db6ec1db2493d4353abda76ac07744a58cf02d85e10d635316f394b82->enter($__internal_fbf29a6db6ec1db2493d4353abda76ac07744a58cf02d85e10d635316f394b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbf29a6db6ec1db2493d4353abda76ac07744a58cf02d85e10d635316f394b82->leave($__internal_fbf29a6db6ec1db2493d4353abda76ac07744a58cf02d85e10d635316f394b82_prof);

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
