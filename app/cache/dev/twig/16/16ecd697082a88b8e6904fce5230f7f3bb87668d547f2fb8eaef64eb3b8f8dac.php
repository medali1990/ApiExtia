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
        $__internal_856d1c013c50d5c635631be3749e65ca710381e049143fcee1ddf0a159ddba45 = $this->env->getExtension("native_profiler");
        $__internal_856d1c013c50d5c635631be3749e65ca710381e049143fcee1ddf0a159ddba45->enter($__internal_856d1c013c50d5c635631be3749e65ca710381e049143fcee1ddf0a159ddba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_856d1c013c50d5c635631be3749e65ca710381e049143fcee1ddf0a159ddba45->leave($__internal_856d1c013c50d5c635631be3749e65ca710381e049143fcee1ddf0a159ddba45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c6accd28e178fb4f4ee4c9b17737cff29afca75e61eb85348722a4cced6555b = $this->env->getExtension("native_profiler");
        $__internal_2c6accd28e178fb4f4ee4c9b17737cff29afca75e61eb85348722a4cced6555b->enter($__internal_2c6accd28e178fb4f4ee4c9b17737cff29afca75e61eb85348722a4cced6555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c6accd28e178fb4f4ee4c9b17737cff29afca75e61eb85348722a4cced6555b->leave($__internal_2c6accd28e178fb4f4ee4c9b17737cff29afca75e61eb85348722a4cced6555b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83bb323de709e6718a9383ca19af61df17916a412d3a4cc7230cdf1d5817c8ef = $this->env->getExtension("native_profiler");
        $__internal_83bb323de709e6718a9383ca19af61df17916a412d3a4cc7230cdf1d5817c8ef->enter($__internal_83bb323de709e6718a9383ca19af61df17916a412d3a4cc7230cdf1d5817c8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83bb323de709e6718a9383ca19af61df17916a412d3a4cc7230cdf1d5817c8ef->leave($__internal_83bb323de709e6718a9383ca19af61df17916a412d3a4cc7230cdf1d5817c8ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0764fbd570fedbaf02f8215fdd9cc33053c1f5c53eca44a17d5a18b790380c92 = $this->env->getExtension("native_profiler");
        $__internal_0764fbd570fedbaf02f8215fdd9cc33053c1f5c53eca44a17d5a18b790380c92->enter($__internal_0764fbd570fedbaf02f8215fdd9cc33053c1f5c53eca44a17d5a18b790380c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0764fbd570fedbaf02f8215fdd9cc33053c1f5c53eca44a17d5a18b790380c92->leave($__internal_0764fbd570fedbaf02f8215fdd9cc33053c1f5c53eca44a17d5a18b790380c92_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1face1a882420b3bb23cb65a7fcf57bf14180b12af9ccbb2faf3de68d4dd8dc = $this->env->getExtension("native_profiler");
        $__internal_c1face1a882420b3bb23cb65a7fcf57bf14180b12af9ccbb2faf3de68d4dd8dc->enter($__internal_c1face1a882420b3bb23cb65a7fcf57bf14180b12af9ccbb2faf3de68d4dd8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1face1a882420b3bb23cb65a7fcf57bf14180b12af9ccbb2faf3de68d4dd8dc->leave($__internal_c1face1a882420b3bb23cb65a7fcf57bf14180b12af9ccbb2faf3de68d4dd8dc_prof);

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
