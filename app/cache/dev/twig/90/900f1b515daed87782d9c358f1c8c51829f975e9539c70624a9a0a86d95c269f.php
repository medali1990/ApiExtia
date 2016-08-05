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
        $__internal_800ba460d91f7271b577a34412bc5cbf0d5b54c4105800d51621b1049d6acf24 = $this->env->getExtension("native_profiler");
        $__internal_800ba460d91f7271b577a34412bc5cbf0d5b54c4105800d51621b1049d6acf24->enter($__internal_800ba460d91f7271b577a34412bc5cbf0d5b54c4105800d51621b1049d6acf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_800ba460d91f7271b577a34412bc5cbf0d5b54c4105800d51621b1049d6acf24->leave($__internal_800ba460d91f7271b577a34412bc5cbf0d5b54c4105800d51621b1049d6acf24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_408769b288c0fcc48d86ef1a218a6ab615f14660b534f2075b60d1718e1ddf5a = $this->env->getExtension("native_profiler");
        $__internal_408769b288c0fcc48d86ef1a218a6ab615f14660b534f2075b60d1718e1ddf5a->enter($__internal_408769b288c0fcc48d86ef1a218a6ab615f14660b534f2075b60d1718e1ddf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_408769b288c0fcc48d86ef1a218a6ab615f14660b534f2075b60d1718e1ddf5a->leave($__internal_408769b288c0fcc48d86ef1a218a6ab615f14660b534f2075b60d1718e1ddf5a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98e7df5d75a7cfb9519b6357210a1146a462a523af48dbcf2761d5015529e34d = $this->env->getExtension("native_profiler");
        $__internal_98e7df5d75a7cfb9519b6357210a1146a462a523af48dbcf2761d5015529e34d->enter($__internal_98e7df5d75a7cfb9519b6357210a1146a462a523af48dbcf2761d5015529e34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98e7df5d75a7cfb9519b6357210a1146a462a523af48dbcf2761d5015529e34d->leave($__internal_98e7df5d75a7cfb9519b6357210a1146a462a523af48dbcf2761d5015529e34d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7d2e95013540f9c78af34efa05a4458121655ee7200efc7499d7bb12c86d55 = $this->env->getExtension("native_profiler");
        $__internal_9a7d2e95013540f9c78af34efa05a4458121655ee7200efc7499d7bb12c86d55->enter($__internal_9a7d2e95013540f9c78af34efa05a4458121655ee7200efc7499d7bb12c86d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a7d2e95013540f9c78af34efa05a4458121655ee7200efc7499d7bb12c86d55->leave($__internal_9a7d2e95013540f9c78af34efa05a4458121655ee7200efc7499d7bb12c86d55_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d2bf93dbc89637fb3c583d02ac890cfe7691154e0ac657f746b46bde9e395ad = $this->env->getExtension("native_profiler");
        $__internal_9d2bf93dbc89637fb3c583d02ac890cfe7691154e0ac657f746b46bde9e395ad->enter($__internal_9d2bf93dbc89637fb3c583d02ac890cfe7691154e0ac657f746b46bde9e395ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d2bf93dbc89637fb3c583d02ac890cfe7691154e0ac657f746b46bde9e395ad->leave($__internal_9d2bf93dbc89637fb3c583d02ac890cfe7691154e0ac657f746b46bde9e395ad_prof);

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
