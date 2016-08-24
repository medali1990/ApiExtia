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
        $__internal_a3362ef5dcea449694263d1a5445c810511fa9b874c68ab7d9f198b09669def7 = $this->env->getExtension("native_profiler");
        $__internal_a3362ef5dcea449694263d1a5445c810511fa9b874c68ab7d9f198b09669def7->enter($__internal_a3362ef5dcea449694263d1a5445c810511fa9b874c68ab7d9f198b09669def7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a3362ef5dcea449694263d1a5445c810511fa9b874c68ab7d9f198b09669def7->leave($__internal_a3362ef5dcea449694263d1a5445c810511fa9b874c68ab7d9f198b09669def7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad34f5aeb336f62fe598eeb0cda128f342e94b7820cfce49f4296f39e8cdbbcd = $this->env->getExtension("native_profiler");
        $__internal_ad34f5aeb336f62fe598eeb0cda128f342e94b7820cfce49f4296f39e8cdbbcd->enter($__internal_ad34f5aeb336f62fe598eeb0cda128f342e94b7820cfce49f4296f39e8cdbbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad34f5aeb336f62fe598eeb0cda128f342e94b7820cfce49f4296f39e8cdbbcd->leave($__internal_ad34f5aeb336f62fe598eeb0cda128f342e94b7820cfce49f4296f39e8cdbbcd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b4bd5122da21f4e5ba1d5533cb47547dff37b1f17ee58f605b0e524e3537f89 = $this->env->getExtension("native_profiler");
        $__internal_2b4bd5122da21f4e5ba1d5533cb47547dff37b1f17ee58f605b0e524e3537f89->enter($__internal_2b4bd5122da21f4e5ba1d5533cb47547dff37b1f17ee58f605b0e524e3537f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b4bd5122da21f4e5ba1d5533cb47547dff37b1f17ee58f605b0e524e3537f89->leave($__internal_2b4bd5122da21f4e5ba1d5533cb47547dff37b1f17ee58f605b0e524e3537f89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ff4fb23a93218b2a599d0f0fb6947f3e15da78422bc3d3e763a94d039e1c788 = $this->env->getExtension("native_profiler");
        $__internal_6ff4fb23a93218b2a599d0f0fb6947f3e15da78422bc3d3e763a94d039e1c788->enter($__internal_6ff4fb23a93218b2a599d0f0fb6947f3e15da78422bc3d3e763a94d039e1c788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ff4fb23a93218b2a599d0f0fb6947f3e15da78422bc3d3e763a94d039e1c788->leave($__internal_6ff4fb23a93218b2a599d0f0fb6947f3e15da78422bc3d3e763a94d039e1c788_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de5c5681196f595e43a05f3ce2700fc7838694a6b2a8eb7773cced162454c5fa = $this->env->getExtension("native_profiler");
        $__internal_de5c5681196f595e43a05f3ce2700fc7838694a6b2a8eb7773cced162454c5fa->enter($__internal_de5c5681196f595e43a05f3ce2700fc7838694a6b2a8eb7773cced162454c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de5c5681196f595e43a05f3ce2700fc7838694a6b2a8eb7773cced162454c5fa->leave($__internal_de5c5681196f595e43a05f3ce2700fc7838694a6b2a8eb7773cced162454c5fa_prof);

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
