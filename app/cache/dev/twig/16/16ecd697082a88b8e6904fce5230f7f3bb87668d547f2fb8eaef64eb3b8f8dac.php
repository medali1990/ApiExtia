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
        $__internal_d244f182a03a835e320d46723e38be6fcc036bfdabfcfe0862114c8cc1e186ff = $this->env->getExtension("native_profiler");
        $__internal_d244f182a03a835e320d46723e38be6fcc036bfdabfcfe0862114c8cc1e186ff->enter($__internal_d244f182a03a835e320d46723e38be6fcc036bfdabfcfe0862114c8cc1e186ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d244f182a03a835e320d46723e38be6fcc036bfdabfcfe0862114c8cc1e186ff->leave($__internal_d244f182a03a835e320d46723e38be6fcc036bfdabfcfe0862114c8cc1e186ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b330c961cbe69b860d49a75b4770de8bf71b6642b81fe746f09b2763311261d3 = $this->env->getExtension("native_profiler");
        $__internal_b330c961cbe69b860d49a75b4770de8bf71b6642b81fe746f09b2763311261d3->enter($__internal_b330c961cbe69b860d49a75b4770de8bf71b6642b81fe746f09b2763311261d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b330c961cbe69b860d49a75b4770de8bf71b6642b81fe746f09b2763311261d3->leave($__internal_b330c961cbe69b860d49a75b4770de8bf71b6642b81fe746f09b2763311261d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff3a8557ea347cfcd22584e39f74a7e12c854eea850d7ad239af9b3bcf6a0ac4 = $this->env->getExtension("native_profiler");
        $__internal_ff3a8557ea347cfcd22584e39f74a7e12c854eea850d7ad239af9b3bcf6a0ac4->enter($__internal_ff3a8557ea347cfcd22584e39f74a7e12c854eea850d7ad239af9b3bcf6a0ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff3a8557ea347cfcd22584e39f74a7e12c854eea850d7ad239af9b3bcf6a0ac4->leave($__internal_ff3a8557ea347cfcd22584e39f74a7e12c854eea850d7ad239af9b3bcf6a0ac4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c2225489f5ca037488ef091070b2255846e4eba5bc5e485a2ecc6cd66664ec = $this->env->getExtension("native_profiler");
        $__internal_33c2225489f5ca037488ef091070b2255846e4eba5bc5e485a2ecc6cd66664ec->enter($__internal_33c2225489f5ca037488ef091070b2255846e4eba5bc5e485a2ecc6cd66664ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33c2225489f5ca037488ef091070b2255846e4eba5bc5e485a2ecc6cd66664ec->leave($__internal_33c2225489f5ca037488ef091070b2255846e4eba5bc5e485a2ecc6cd66664ec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2636b023f1a7ecf234c672628e6a759637976412291be6e7e518c0957131726 = $this->env->getExtension("native_profiler");
        $__internal_e2636b023f1a7ecf234c672628e6a759637976412291be6e7e518c0957131726->enter($__internal_e2636b023f1a7ecf234c672628e6a759637976412291be6e7e518c0957131726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2636b023f1a7ecf234c672628e6a759637976412291be6e7e518c0957131726->leave($__internal_e2636b023f1a7ecf234c672628e6a759637976412291be6e7e518c0957131726_prof);

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
