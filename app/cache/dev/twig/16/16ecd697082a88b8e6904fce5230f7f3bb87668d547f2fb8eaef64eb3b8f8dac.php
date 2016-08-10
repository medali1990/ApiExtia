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
        $__internal_62735ded72b6a178312c83ea0fb9676e3c755fce1c5b1932057908dd9084a053 = $this->env->getExtension("native_profiler");
        $__internal_62735ded72b6a178312c83ea0fb9676e3c755fce1c5b1932057908dd9084a053->enter($__internal_62735ded72b6a178312c83ea0fb9676e3c755fce1c5b1932057908dd9084a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_62735ded72b6a178312c83ea0fb9676e3c755fce1c5b1932057908dd9084a053->leave($__internal_62735ded72b6a178312c83ea0fb9676e3c755fce1c5b1932057908dd9084a053_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b019a4fe3dcf82a4affe7d2cb38d4228effb009edb6780d61fe1f9d8faa30b6 = $this->env->getExtension("native_profiler");
        $__internal_9b019a4fe3dcf82a4affe7d2cb38d4228effb009edb6780d61fe1f9d8faa30b6->enter($__internal_9b019a4fe3dcf82a4affe7d2cb38d4228effb009edb6780d61fe1f9d8faa30b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b019a4fe3dcf82a4affe7d2cb38d4228effb009edb6780d61fe1f9d8faa30b6->leave($__internal_9b019a4fe3dcf82a4affe7d2cb38d4228effb009edb6780d61fe1f9d8faa30b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97b67a893154b3ea778043412e7682149304e352db5283966fde798bd58d70e5 = $this->env->getExtension("native_profiler");
        $__internal_97b67a893154b3ea778043412e7682149304e352db5283966fde798bd58d70e5->enter($__internal_97b67a893154b3ea778043412e7682149304e352db5283966fde798bd58d70e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97b67a893154b3ea778043412e7682149304e352db5283966fde798bd58d70e5->leave($__internal_97b67a893154b3ea778043412e7682149304e352db5283966fde798bd58d70e5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_abd5651eab47d749408c1604f2d661d3e995bcd3b58d81212ab5723e2abbc152 = $this->env->getExtension("native_profiler");
        $__internal_abd5651eab47d749408c1604f2d661d3e995bcd3b58d81212ab5723e2abbc152->enter($__internal_abd5651eab47d749408c1604f2d661d3e995bcd3b58d81212ab5723e2abbc152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abd5651eab47d749408c1604f2d661d3e995bcd3b58d81212ab5723e2abbc152->leave($__internal_abd5651eab47d749408c1604f2d661d3e995bcd3b58d81212ab5723e2abbc152_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b84355878421107bc885a34c131ad2ea22e4ac1366cb7cdfa2e62657941b5a7 = $this->env->getExtension("native_profiler");
        $__internal_4b84355878421107bc885a34c131ad2ea22e4ac1366cb7cdfa2e62657941b5a7->enter($__internal_4b84355878421107bc885a34c131ad2ea22e4ac1366cb7cdfa2e62657941b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b84355878421107bc885a34c131ad2ea22e4ac1366cb7cdfa2e62657941b5a7->leave($__internal_4b84355878421107bc885a34c131ad2ea22e4ac1366cb7cdfa2e62657941b5a7_prof);

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
