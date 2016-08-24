<?php

/* ::FrontOfficeLayout.html.twig */
class __TwigTemplate_c4d6d82f32c7e394e3551a9a5d14f8051be70510b4ce29a31e686ab76037c1ea extends Twig_Template
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
        $__internal_5b7aa421e7716568fbad2496934d18dc84b29ada13e8e24e1a0afa3a5432d797 = $this->env->getExtension("native_profiler");
        $__internal_5b7aa421e7716568fbad2496934d18dc84b29ada13e8e24e1a0afa3a5432d797->enter($__internal_5b7aa421e7716568fbad2496934d18dc84b29ada13e8e24e1a0afa3a5432d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::FrontOfficeLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
  \t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  \t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  \t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<body>
  <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\">ProjectExtia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("Liste_Articles");
        echo "\">Liste Articles</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Ajout_article");
        echo "\">Creation d'article</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</body>
</html>";
        
        $__internal_5b7aa421e7716568fbad2496934d18dc84b29ada13e8e24e1a0afa3a5432d797->leave($__internal_5b7aa421e7716568fbad2496934d18dc84b29ada13e8e24e1a0afa3a5432d797_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca4e9d016f9ec05dab7cec476725f0fefa46945b95036995b35055041ff9f508 = $this->env->getExtension("native_profiler");
        $__internal_ca4e9d016f9ec05dab7cec476725f0fefa46945b95036995b35055041ff9f508->enter($__internal_ca4e9d016f9ec05dab7cec476725f0fefa46945b95036995b35055041ff9f508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ExtiaProject";
        
        $__internal_ca4e9d016f9ec05dab7cec476725f0fefa46945b95036995b35055041ff9f508->leave($__internal_ca4e9d016f9ec05dab7cec476725f0fefa46945b95036995b35055041ff9f508_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78885100409c8638dd6492fa8d8494e464417e55eeb8197f999d60f08b60c1ee = $this->env->getExtension("native_profiler");
        $__internal_78885100409c8638dd6492fa8d8494e464417e55eeb8197f999d60f08b60c1ee->enter($__internal_78885100409c8638dd6492fa8d8494e464417e55eeb8197f999d60f08b60c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
  ";
        
        $__internal_78885100409c8638dd6492fa8d8494e464417e55eeb8197f999d60f08b60c1ee->leave($__internal_78885100409c8638dd6492fa8d8494e464417e55eeb8197f999d60f08b60c1ee_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_650cb8849eaf55a6575dacf3b0cbe694595f82255581ec4f48c79c5170a2c08a = $this->env->getExtension("native_profiler");
        $__internal_650cb8849eaf55a6575dacf3b0cbe694595f82255581ec4f48c79c5170a2c08a->enter($__internal_650cb8849eaf55a6575dacf3b0cbe694595f82255581ec4f48c79c5170a2c08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_650cb8849eaf55a6575dacf3b0cbe694595f82255581ec4f48c79c5170a2c08a->leave($__internal_650cb8849eaf55a6575dacf3b0cbe694595f82255581ec4f48c79c5170a2c08a_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc5d89612ecc461fe31295cd31d6599a8eacdc8dfbe8b6d07064ee9915f276ea = $this->env->getExtension("native_profiler");
        $__internal_dc5d89612ecc461fe31295cd31d6599a8eacdc8dfbe8b6d07064ee9915f276ea->enter($__internal_dc5d89612ecc461fe31295cd31d6599a8eacdc8dfbe8b6d07064ee9915f276ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <!-- jQuery Version 1.11.1 -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/frontoffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    
  ";
        
        $__internal_dc5d89612ecc461fe31295cd31d6599a8eacdc8dfbe8b6d07064ee9915f276ea->leave($__internal_dc5d89612ecc461fe31295cd31d6599a8eacdc8dfbe8b6d07064ee9915f276ea_prof);

    }

    public function getTemplateName()
    {
        return "::FrontOfficeLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  157 => 60,  152 => 57,  150 => 56,  144 => 55,  133 => 52,  116 => 13,  114 => 12,  108 => 11,  96 => 9,  88 => 67,  86 => 55,  83 => 54,  81 => 52,  70 => 44,  64 => 41,  43 => 22,  41 => 11,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/*   	<meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   	<title>{% block title %}ExtiaProject{% endblock %}</title>*/
/* */
/*   	{% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link href="{{ asset('/bundles/frontoffice/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     <style>*/
/*     body {*/
/*         padding-top: 70px;*/
/*         /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. *//* */
/*     }*/
/*     </style>*/
/*   {% endblock %}*/
/* </head>*/
/* <body>*/
/*   <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand">ProjectExtia</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{ path('Liste_Articles') }}">Liste Articles</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('Ajout_article') }}">Creation d'article</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     <!-- jQuery Version 1.11.1 -->*/
/*     <script src="{{ asset('/bundles/frontoffice/js/jquery.js') }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ asset('/bundles/frontoffice/js/bootstrap.min.js') }}"></script>*/
/* */
/*     */
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
