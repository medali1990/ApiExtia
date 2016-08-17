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
        $__internal_8e9958ce68c0ce658b9cbf10b577545cb11c37821ff974e9ff6c268c65c8a031 = $this->env->getExtension("native_profiler");
        $__internal_8e9958ce68c0ce658b9cbf10b577545cb11c37821ff974e9ff6c268c65c8a031->enter($__internal_8e9958ce68c0ce658b9cbf10b577545cb11c37821ff974e9ff6c268c65c8a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e9958ce68c0ce658b9cbf10b577545cb11c37821ff974e9ff6c268c65c8a031->leave($__internal_8e9958ce68c0ce658b9cbf10b577545cb11c37821ff974e9ff6c268c65c8a031_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b1a5c71a81d572bc3b98340e56828290b7c42a28c4b0aafdcaa07ead08f1ab0 = $this->env->getExtension("native_profiler");
        $__internal_7b1a5c71a81d572bc3b98340e56828290b7c42a28c4b0aafdcaa07ead08f1ab0->enter($__internal_7b1a5c71a81d572bc3b98340e56828290b7c42a28c4b0aafdcaa07ead08f1ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7b1a5c71a81d572bc3b98340e56828290b7c42a28c4b0aafdcaa07ead08f1ab0->leave($__internal_7b1a5c71a81d572bc3b98340e56828290b7c42a28c4b0aafdcaa07ead08f1ab0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf89bb3b66fa83c6f30a242b06686291bf66fe4f980f3fd31675649874617685 = $this->env->getExtension("native_profiler");
        $__internal_cf89bb3b66fa83c6f30a242b06686291bf66fe4f980f3fd31675649874617685->enter($__internal_cf89bb3b66fa83c6f30a242b06686291bf66fe4f980f3fd31675649874617685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf89bb3b66fa83c6f30a242b06686291bf66fe4f980f3fd31675649874617685->leave($__internal_cf89bb3b66fa83c6f30a242b06686291bf66fe4f980f3fd31675649874617685_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_516c118647ff7064ec95f0f03eba6f5144dba6a5ff542263df4f1558199680b3 = $this->env->getExtension("native_profiler");
        $__internal_516c118647ff7064ec95f0f03eba6f5144dba6a5ff542263df4f1558199680b3->enter($__internal_516c118647ff7064ec95f0f03eba6f5144dba6a5ff542263df4f1558199680b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_516c118647ff7064ec95f0f03eba6f5144dba6a5ff542263df4f1558199680b3->leave($__internal_516c118647ff7064ec95f0f03eba6f5144dba6a5ff542263df4f1558199680b3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eed85e3d925d117e3009281845c170ad515c136915114ecb7aff01bfc4122f81 = $this->env->getExtension("native_profiler");
        $__internal_eed85e3d925d117e3009281845c170ad515c136915114ecb7aff01bfc4122f81->enter($__internal_eed85e3d925d117e3009281845c170ad515c136915114ecb7aff01bfc4122f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eed85e3d925d117e3009281845c170ad515c136915114ecb7aff01bfc4122f81->leave($__internal_eed85e3d925d117e3009281845c170ad515c136915114ecb7aff01bfc4122f81_prof);

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
