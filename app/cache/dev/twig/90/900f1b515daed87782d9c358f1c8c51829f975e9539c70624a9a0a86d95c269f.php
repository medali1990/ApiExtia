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
        $__internal_e5c9f724dc3b59189c551f1a8d9ddb14cb05c116c1629806adb8de98a46c04ad = $this->env->getExtension("native_profiler");
        $__internal_e5c9f724dc3b59189c551f1a8d9ddb14cb05c116c1629806adb8de98a46c04ad->enter($__internal_e5c9f724dc3b59189c551f1a8d9ddb14cb05c116c1629806adb8de98a46c04ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e5c9f724dc3b59189c551f1a8d9ddb14cb05c116c1629806adb8de98a46c04ad->leave($__internal_e5c9f724dc3b59189c551f1a8d9ddb14cb05c116c1629806adb8de98a46c04ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87bcb19f9bef317f019f65d2248b11c8d79b424e8a3b633731cd0209aee0ab04 = $this->env->getExtension("native_profiler");
        $__internal_87bcb19f9bef317f019f65d2248b11c8d79b424e8a3b633731cd0209aee0ab04->enter($__internal_87bcb19f9bef317f019f65d2248b11c8d79b424e8a3b633731cd0209aee0ab04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87bcb19f9bef317f019f65d2248b11c8d79b424e8a3b633731cd0209aee0ab04->leave($__internal_87bcb19f9bef317f019f65d2248b11c8d79b424e8a3b633731cd0209aee0ab04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72c33ecf91005823cf18015b171ddb53e7d26a9a54bb87534359b99dc4bcf7a2 = $this->env->getExtension("native_profiler");
        $__internal_72c33ecf91005823cf18015b171ddb53e7d26a9a54bb87534359b99dc4bcf7a2->enter($__internal_72c33ecf91005823cf18015b171ddb53e7d26a9a54bb87534359b99dc4bcf7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_72c33ecf91005823cf18015b171ddb53e7d26a9a54bb87534359b99dc4bcf7a2->leave($__internal_72c33ecf91005823cf18015b171ddb53e7d26a9a54bb87534359b99dc4bcf7a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79ae46ae5162218d35dd4bc58d57930cb92be6d99fb4f58ac1836f3e6cb8c146 = $this->env->getExtension("native_profiler");
        $__internal_79ae46ae5162218d35dd4bc58d57930cb92be6d99fb4f58ac1836f3e6cb8c146->enter($__internal_79ae46ae5162218d35dd4bc58d57930cb92be6d99fb4f58ac1836f3e6cb8c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79ae46ae5162218d35dd4bc58d57930cb92be6d99fb4f58ac1836f3e6cb8c146->leave($__internal_79ae46ae5162218d35dd4bc58d57930cb92be6d99fb4f58ac1836f3e6cb8c146_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed7d51db6295ee678772b41de21050223eae167330ba8bd29f3647d0de93d8b3 = $this->env->getExtension("native_profiler");
        $__internal_ed7d51db6295ee678772b41de21050223eae167330ba8bd29f3647d0de93d8b3->enter($__internal_ed7d51db6295ee678772b41de21050223eae167330ba8bd29f3647d0de93d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed7d51db6295ee678772b41de21050223eae167330ba8bd29f3647d0de93d8b3->leave($__internal_ed7d51db6295ee678772b41de21050223eae167330ba8bd29f3647d0de93d8b3_prof);

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
