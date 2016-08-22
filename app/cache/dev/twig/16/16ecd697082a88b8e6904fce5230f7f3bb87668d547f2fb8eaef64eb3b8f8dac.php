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
        $__internal_f2165a618c5d9dfc785801f4194fa0b94e0635620d69541e04f95462610f3255 = $this->env->getExtension("native_profiler");
        $__internal_f2165a618c5d9dfc785801f4194fa0b94e0635620d69541e04f95462610f3255->enter($__internal_f2165a618c5d9dfc785801f4194fa0b94e0635620d69541e04f95462610f3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f2165a618c5d9dfc785801f4194fa0b94e0635620d69541e04f95462610f3255->leave($__internal_f2165a618c5d9dfc785801f4194fa0b94e0635620d69541e04f95462610f3255_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2a72ed389065267a4857d50e55c7a0570e8d78eaad255f319a64d56e779d077 = $this->env->getExtension("native_profiler");
        $__internal_e2a72ed389065267a4857d50e55c7a0570e8d78eaad255f319a64d56e779d077->enter($__internal_e2a72ed389065267a4857d50e55c7a0570e8d78eaad255f319a64d56e779d077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e2a72ed389065267a4857d50e55c7a0570e8d78eaad255f319a64d56e779d077->leave($__internal_e2a72ed389065267a4857d50e55c7a0570e8d78eaad255f319a64d56e779d077_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf6c1fe52df1bd41109874b8a2fcea24eb69a454e0c59383d6d7a3f1b63546ad = $this->env->getExtension("native_profiler");
        $__internal_cf6c1fe52df1bd41109874b8a2fcea24eb69a454e0c59383d6d7a3f1b63546ad->enter($__internal_cf6c1fe52df1bd41109874b8a2fcea24eb69a454e0c59383d6d7a3f1b63546ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf6c1fe52df1bd41109874b8a2fcea24eb69a454e0c59383d6d7a3f1b63546ad->leave($__internal_cf6c1fe52df1bd41109874b8a2fcea24eb69a454e0c59383d6d7a3f1b63546ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fefbed18cf15c8e5a64542c56e3049592f286e2b8952258a868c9f89a37eb62 = $this->env->getExtension("native_profiler");
        $__internal_0fefbed18cf15c8e5a64542c56e3049592f286e2b8952258a868c9f89a37eb62->enter($__internal_0fefbed18cf15c8e5a64542c56e3049592f286e2b8952258a868c9f89a37eb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fefbed18cf15c8e5a64542c56e3049592f286e2b8952258a868c9f89a37eb62->leave($__internal_0fefbed18cf15c8e5a64542c56e3049592f286e2b8952258a868c9f89a37eb62_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_870b4fb36b74fbf791a4faddc59145f2874a206b784d63f8e9db22b4b8f9eccc = $this->env->getExtension("native_profiler");
        $__internal_870b4fb36b74fbf791a4faddc59145f2874a206b784d63f8e9db22b4b8f9eccc->enter($__internal_870b4fb36b74fbf791a4faddc59145f2874a206b784d63f8e9db22b4b8f9eccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_870b4fb36b74fbf791a4faddc59145f2874a206b784d63f8e9db22b4b8f9eccc->leave($__internal_870b4fb36b74fbf791a4faddc59145f2874a206b784d63f8e9db22b4b8f9eccc_prof);

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
