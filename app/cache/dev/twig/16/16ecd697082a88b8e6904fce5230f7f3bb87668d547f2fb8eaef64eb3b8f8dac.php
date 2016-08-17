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
        $__internal_5e21ba0c0be2224dd28f1692a65ccf665dd2085950d3f3ecae7b345c51c35d50 = $this->env->getExtension("native_profiler");
        $__internal_5e21ba0c0be2224dd28f1692a65ccf665dd2085950d3f3ecae7b345c51c35d50->enter($__internal_5e21ba0c0be2224dd28f1692a65ccf665dd2085950d3f3ecae7b345c51c35d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5e21ba0c0be2224dd28f1692a65ccf665dd2085950d3f3ecae7b345c51c35d50->leave($__internal_5e21ba0c0be2224dd28f1692a65ccf665dd2085950d3f3ecae7b345c51c35d50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96ad92607597da05d767dfa730948ffbadc21ff5af0e864d00024428c7edcab4 = $this->env->getExtension("native_profiler");
        $__internal_96ad92607597da05d767dfa730948ffbadc21ff5af0e864d00024428c7edcab4->enter($__internal_96ad92607597da05d767dfa730948ffbadc21ff5af0e864d00024428c7edcab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_96ad92607597da05d767dfa730948ffbadc21ff5af0e864d00024428c7edcab4->leave($__internal_96ad92607597da05d767dfa730948ffbadc21ff5af0e864d00024428c7edcab4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17244f1b735f554a164fba73226bb265929aad90c18af172f0ca143a3afa1566 = $this->env->getExtension("native_profiler");
        $__internal_17244f1b735f554a164fba73226bb265929aad90c18af172f0ca143a3afa1566->enter($__internal_17244f1b735f554a164fba73226bb265929aad90c18af172f0ca143a3afa1566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17244f1b735f554a164fba73226bb265929aad90c18af172f0ca143a3afa1566->leave($__internal_17244f1b735f554a164fba73226bb265929aad90c18af172f0ca143a3afa1566_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf5a787735341bf1d2a019303a9df8b9c1a50dd2e2ddba57e064ccfcef37d36 = $this->env->getExtension("native_profiler");
        $__internal_2cf5a787735341bf1d2a019303a9df8b9c1a50dd2e2ddba57e064ccfcef37d36->enter($__internal_2cf5a787735341bf1d2a019303a9df8b9c1a50dd2e2ddba57e064ccfcef37d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cf5a787735341bf1d2a019303a9df8b9c1a50dd2e2ddba57e064ccfcef37d36->leave($__internal_2cf5a787735341bf1d2a019303a9df8b9c1a50dd2e2ddba57e064ccfcef37d36_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3647d456332d4f6aa74d4144e8f6af80d58a6d08b028c5253c1c2eba138c9673 = $this->env->getExtension("native_profiler");
        $__internal_3647d456332d4f6aa74d4144e8f6af80d58a6d08b028c5253c1c2eba138c9673->enter($__internal_3647d456332d4f6aa74d4144e8f6af80d58a6d08b028c5253c1c2eba138c9673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3647d456332d4f6aa74d4144e8f6af80d58a6d08b028c5253c1c2eba138c9673->leave($__internal_3647d456332d4f6aa74d4144e8f6af80d58a6d08b028c5253c1c2eba138c9673_prof);

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
