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
        $__internal_3afe1377b80bfaf675782a053ba012950e969a22a9ffabbf4598e58d30116d68 = $this->env->getExtension("native_profiler");
        $__internal_3afe1377b80bfaf675782a053ba012950e969a22a9ffabbf4598e58d30116d68->enter($__internal_3afe1377b80bfaf675782a053ba012950e969a22a9ffabbf4598e58d30116d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3afe1377b80bfaf675782a053ba012950e969a22a9ffabbf4598e58d30116d68->leave($__internal_3afe1377b80bfaf675782a053ba012950e969a22a9ffabbf4598e58d30116d68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd44e96eb51365c53c9c9191cd3c842a5468242a64ae33cff2b52aa8ce2439da = $this->env->getExtension("native_profiler");
        $__internal_dd44e96eb51365c53c9c9191cd3c842a5468242a64ae33cff2b52aa8ce2439da->enter($__internal_dd44e96eb51365c53c9c9191cd3c842a5468242a64ae33cff2b52aa8ce2439da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd44e96eb51365c53c9c9191cd3c842a5468242a64ae33cff2b52aa8ce2439da->leave($__internal_dd44e96eb51365c53c9c9191cd3c842a5468242a64ae33cff2b52aa8ce2439da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2735a0f1b40f6917444fb5cba3dae9b142842011672990eccdd391e586bf7f21 = $this->env->getExtension("native_profiler");
        $__internal_2735a0f1b40f6917444fb5cba3dae9b142842011672990eccdd391e586bf7f21->enter($__internal_2735a0f1b40f6917444fb5cba3dae9b142842011672990eccdd391e586bf7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2735a0f1b40f6917444fb5cba3dae9b142842011672990eccdd391e586bf7f21->leave($__internal_2735a0f1b40f6917444fb5cba3dae9b142842011672990eccdd391e586bf7f21_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d796bc6bf9053adbfbfd25d5913f2b0dc5c7742fba8813fa4972559674a27d = $this->env->getExtension("native_profiler");
        $__internal_d4d796bc6bf9053adbfbfd25d5913f2b0dc5c7742fba8813fa4972559674a27d->enter($__internal_d4d796bc6bf9053adbfbfd25d5913f2b0dc5c7742fba8813fa4972559674a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4d796bc6bf9053adbfbfd25d5913f2b0dc5c7742fba8813fa4972559674a27d->leave($__internal_d4d796bc6bf9053adbfbfd25d5913f2b0dc5c7742fba8813fa4972559674a27d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9cea378a16a3765647f13e6948f19c6aa7195ba1706065cbf8565b534bd8118 = $this->env->getExtension("native_profiler");
        $__internal_e9cea378a16a3765647f13e6948f19c6aa7195ba1706065cbf8565b534bd8118->enter($__internal_e9cea378a16a3765647f13e6948f19c6aa7195ba1706065cbf8565b534bd8118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9cea378a16a3765647f13e6948f19c6aa7195ba1706065cbf8565b534bd8118->leave($__internal_e9cea378a16a3765647f13e6948f19c6aa7195ba1706065cbf8565b534bd8118_prof);

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
