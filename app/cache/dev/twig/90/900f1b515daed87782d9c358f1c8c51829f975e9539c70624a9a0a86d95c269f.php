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
        $__internal_8783cd2dc7a469dffb70ad5bf5ccb29e67a4de8348be4349d470c5c7a20d5c0b = $this->env->getExtension("native_profiler");
        $__internal_8783cd2dc7a469dffb70ad5bf5ccb29e67a4de8348be4349d470c5c7a20d5c0b->enter($__internal_8783cd2dc7a469dffb70ad5bf5ccb29e67a4de8348be4349d470c5c7a20d5c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8783cd2dc7a469dffb70ad5bf5ccb29e67a4de8348be4349d470c5c7a20d5c0b->leave($__internal_8783cd2dc7a469dffb70ad5bf5ccb29e67a4de8348be4349d470c5c7a20d5c0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbda6ec70475240eab5d1894703706292c278baf0355611b854f750e72b9b12c = $this->env->getExtension("native_profiler");
        $__internal_dbda6ec70475240eab5d1894703706292c278baf0355611b854f750e72b9b12c->enter($__internal_dbda6ec70475240eab5d1894703706292c278baf0355611b854f750e72b9b12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dbda6ec70475240eab5d1894703706292c278baf0355611b854f750e72b9b12c->leave($__internal_dbda6ec70475240eab5d1894703706292c278baf0355611b854f750e72b9b12c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afe1a3a320c3dc1b28cec0a08fc49a3fef4d31ca5133124533356d2740b767cb = $this->env->getExtension("native_profiler");
        $__internal_afe1a3a320c3dc1b28cec0a08fc49a3fef4d31ca5133124533356d2740b767cb->enter($__internal_afe1a3a320c3dc1b28cec0a08fc49a3fef4d31ca5133124533356d2740b767cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afe1a3a320c3dc1b28cec0a08fc49a3fef4d31ca5133124533356d2740b767cb->leave($__internal_afe1a3a320c3dc1b28cec0a08fc49a3fef4d31ca5133124533356d2740b767cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fafbf40453eed210b179f1d0beb3b99963dc93626483f409fdeeafe96afb02c = $this->env->getExtension("native_profiler");
        $__internal_2fafbf40453eed210b179f1d0beb3b99963dc93626483f409fdeeafe96afb02c->enter($__internal_2fafbf40453eed210b179f1d0beb3b99963dc93626483f409fdeeafe96afb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fafbf40453eed210b179f1d0beb3b99963dc93626483f409fdeeafe96afb02c->leave($__internal_2fafbf40453eed210b179f1d0beb3b99963dc93626483f409fdeeafe96afb02c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c77bbeae54a4b96d5f22806c0dd8dc87c4321e6b69b87bededc53cd38489b270 = $this->env->getExtension("native_profiler");
        $__internal_c77bbeae54a4b96d5f22806c0dd8dc87c4321e6b69b87bededc53cd38489b270->enter($__internal_c77bbeae54a4b96d5f22806c0dd8dc87c4321e6b69b87bededc53cd38489b270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c77bbeae54a4b96d5f22806c0dd8dc87c4321e6b69b87bededc53cd38489b270->leave($__internal_c77bbeae54a4b96d5f22806c0dd8dc87c4321e6b69b87bededc53cd38489b270_prof);

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
