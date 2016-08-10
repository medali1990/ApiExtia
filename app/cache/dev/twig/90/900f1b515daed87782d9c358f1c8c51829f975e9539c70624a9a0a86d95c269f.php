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
        $__internal_8fd035cc43bded8fd54535ca829790d014b7d7c27d34acefca97ed3eb1ed59d8 = $this->env->getExtension("native_profiler");
        $__internal_8fd035cc43bded8fd54535ca829790d014b7d7c27d34acefca97ed3eb1ed59d8->enter($__internal_8fd035cc43bded8fd54535ca829790d014b7d7c27d34acefca97ed3eb1ed59d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8fd035cc43bded8fd54535ca829790d014b7d7c27d34acefca97ed3eb1ed59d8->leave($__internal_8fd035cc43bded8fd54535ca829790d014b7d7c27d34acefca97ed3eb1ed59d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14f096d69f85be8cf93160d976d5b283121fa219fc57d71800c5d6b0f64089d3 = $this->env->getExtension("native_profiler");
        $__internal_14f096d69f85be8cf93160d976d5b283121fa219fc57d71800c5d6b0f64089d3->enter($__internal_14f096d69f85be8cf93160d976d5b283121fa219fc57d71800c5d6b0f64089d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14f096d69f85be8cf93160d976d5b283121fa219fc57d71800c5d6b0f64089d3->leave($__internal_14f096d69f85be8cf93160d976d5b283121fa219fc57d71800c5d6b0f64089d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c546517b66b84835bf1043706ad83c73d679e3c67b92ee4b105ef64a9fae0943 = $this->env->getExtension("native_profiler");
        $__internal_c546517b66b84835bf1043706ad83c73d679e3c67b92ee4b105ef64a9fae0943->enter($__internal_c546517b66b84835bf1043706ad83c73d679e3c67b92ee4b105ef64a9fae0943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c546517b66b84835bf1043706ad83c73d679e3c67b92ee4b105ef64a9fae0943->leave($__internal_c546517b66b84835bf1043706ad83c73d679e3c67b92ee4b105ef64a9fae0943_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f71fdd49ab378051b837fc3cf8326597c1ee740e4f9b2f349c0567c78cd06c = $this->env->getExtension("native_profiler");
        $__internal_36f71fdd49ab378051b837fc3cf8326597c1ee740e4f9b2f349c0567c78cd06c->enter($__internal_36f71fdd49ab378051b837fc3cf8326597c1ee740e4f9b2f349c0567c78cd06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36f71fdd49ab378051b837fc3cf8326597c1ee740e4f9b2f349c0567c78cd06c->leave($__internal_36f71fdd49ab378051b837fc3cf8326597c1ee740e4f9b2f349c0567c78cd06c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e496120dec8d8a900f465e3ac4286fefcb825cf81b5cd7396968964be4f1a71 = $this->env->getExtension("native_profiler");
        $__internal_1e496120dec8d8a900f465e3ac4286fefcb825cf81b5cd7396968964be4f1a71->enter($__internal_1e496120dec8d8a900f465e3ac4286fefcb825cf81b5cd7396968964be4f1a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e496120dec8d8a900f465e3ac4286fefcb825cf81b5cd7396968964be4f1a71->leave($__internal_1e496120dec8d8a900f465e3ac4286fefcb825cf81b5cd7396968964be4f1a71_prof);

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
