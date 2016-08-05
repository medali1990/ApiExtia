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
        $__internal_fa848285de1b393f74201228a4ce815c98ed016157a4c06a7005a3d57602b8d6 = $this->env->getExtension("native_profiler");
        $__internal_fa848285de1b393f74201228a4ce815c98ed016157a4c06a7005a3d57602b8d6->enter($__internal_fa848285de1b393f74201228a4ce815c98ed016157a4c06a7005a3d57602b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fa848285de1b393f74201228a4ce815c98ed016157a4c06a7005a3d57602b8d6->leave($__internal_fa848285de1b393f74201228a4ce815c98ed016157a4c06a7005a3d57602b8d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de39c2cfb8b1e1af0f33009e19c5d45c5d8dd088799b1256cdd62a90f5f30ce1 = $this->env->getExtension("native_profiler");
        $__internal_de39c2cfb8b1e1af0f33009e19c5d45c5d8dd088799b1256cdd62a90f5f30ce1->enter($__internal_de39c2cfb8b1e1af0f33009e19c5d45c5d8dd088799b1256cdd62a90f5f30ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_de39c2cfb8b1e1af0f33009e19c5d45c5d8dd088799b1256cdd62a90f5f30ce1->leave($__internal_de39c2cfb8b1e1af0f33009e19c5d45c5d8dd088799b1256cdd62a90f5f30ce1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_daff6eda27761b546d94fc3ee2e0be7014a071c3e83df8e6de9abb69cee588b4 = $this->env->getExtension("native_profiler");
        $__internal_daff6eda27761b546d94fc3ee2e0be7014a071c3e83df8e6de9abb69cee588b4->enter($__internal_daff6eda27761b546d94fc3ee2e0be7014a071c3e83df8e6de9abb69cee588b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_daff6eda27761b546d94fc3ee2e0be7014a071c3e83df8e6de9abb69cee588b4->leave($__internal_daff6eda27761b546d94fc3ee2e0be7014a071c3e83df8e6de9abb69cee588b4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c817d9d4c531802b28d0625af44496813f75a94ff6b56c8054d63781cfa291b = $this->env->getExtension("native_profiler");
        $__internal_4c817d9d4c531802b28d0625af44496813f75a94ff6b56c8054d63781cfa291b->enter($__internal_4c817d9d4c531802b28d0625af44496813f75a94ff6b56c8054d63781cfa291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c817d9d4c531802b28d0625af44496813f75a94ff6b56c8054d63781cfa291b->leave($__internal_4c817d9d4c531802b28d0625af44496813f75a94ff6b56c8054d63781cfa291b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bf4ef760f613b76027548d40fa2d005ccf6b0df4b48f9caebf81109f9222488 = $this->env->getExtension("native_profiler");
        $__internal_8bf4ef760f613b76027548d40fa2d005ccf6b0df4b48f9caebf81109f9222488->enter($__internal_8bf4ef760f613b76027548d40fa2d005ccf6b0df4b48f9caebf81109f9222488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bf4ef760f613b76027548d40fa2d005ccf6b0df4b48f9caebf81109f9222488->leave($__internal_8bf4ef760f613b76027548d40fa2d005ccf6b0df4b48f9caebf81109f9222488_prof);

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
