<?php

/* ::FrontOfficeLayout.html.twig */
class __TwigTemplate_5ed136459f97e7ccef43f4cbff98e0f65b6697f682e8e777f253ddd50e42757b extends Twig_Template
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
        $__internal_21b4f5203208284b8e43d1755feca25afe8b746df3997867c8482c5b35c6f7d4 = $this->env->getExtension("native_profiler");
        $__internal_21b4f5203208284b8e43d1755feca25afe8b746df3997867c8482c5b35c6f7d4->enter($__internal_21b4f5203208284b8e43d1755feca25afe8b746df3997867c8482c5b35c6f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::FrontOfficeLayout.html.twig"));

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
        // line 65
        echo "</body>
</html>";
        
        $__internal_21b4f5203208284b8e43d1755feca25afe8b746df3997867c8482c5b35c6f7d4->leave($__internal_21b4f5203208284b8e43d1755feca25afe8b746df3997867c8482c5b35c6f7d4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e4e510064ce7bdf1cac9de0ffbfd115353210be620893cc035cec125a50f1a8 = $this->env->getExtension("native_profiler");
        $__internal_5e4e510064ce7bdf1cac9de0ffbfd115353210be620893cc035cec125a50f1a8->enter($__internal_5e4e510064ce7bdf1cac9de0ffbfd115353210be620893cc035cec125a50f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ExtiaProject";
        
        $__internal_5e4e510064ce7bdf1cac9de0ffbfd115353210be620893cc035cec125a50f1a8->leave($__internal_5e4e510064ce7bdf1cac9de0ffbfd115353210be620893cc035cec125a50f1a8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36b963be53ea6d51a562ac90f415533b62c74d578d913c8ea107026ddfceda2a = $this->env->getExtension("native_profiler");
        $__internal_36b963be53ea6d51a562ac90f415533b62c74d578d913c8ea107026ddfceda2a->enter($__internal_36b963be53ea6d51a562ac90f415533b62c74d578d913c8ea107026ddfceda2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_36b963be53ea6d51a562ac90f415533b62c74d578d913c8ea107026ddfceda2a->leave($__internal_36b963be53ea6d51a562ac90f415533b62c74d578d913c8ea107026ddfceda2a_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c99c30922b1537fcabea2b0b32708c605010a9f84c43a698997b2e35850319f2 = $this->env->getExtension("native_profiler");
        $__internal_c99c30922b1537fcabea2b0b32708c605010a9f84c43a698997b2e35850319f2->enter($__internal_c99c30922b1537fcabea2b0b32708c605010a9f84c43a698997b2e35850319f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c99c30922b1537fcabea2b0b32708c605010a9f84c43a698997b2e35850319f2->leave($__internal_c99c30922b1537fcabea2b0b32708c605010a9f84c43a698997b2e35850319f2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a12ed6389dc1fbd3266e8b3fad9dfe186faa3b12d1623a93a2f563cf511b52fe = $this->env->getExtension("native_profiler");
        $__internal_a12ed6389dc1fbd3266e8b3fad9dfe186faa3b12d1623a93a2f563cf511b52fe->enter($__internal_a12ed6389dc1fbd3266e8b3fad9dfe186faa3b12d1623a93a2f563cf511b52fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a12ed6389dc1fbd3266e8b3fad9dfe186faa3b12d1623a93a2f563cf511b52fe->leave($__internal_a12ed6389dc1fbd3266e8b3fad9dfe186faa3b12d1623a93a2f563cf511b52fe_prof);

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
        return array (  163 => 63,  157 => 60,  152 => 57,  150 => 56,  144 => 55,  133 => 52,  116 => 13,  114 => 12,  108 => 11,  96 => 9,  88 => 65,  86 => 55,  83 => 54,  81 => 52,  70 => 44,  64 => 41,  43 => 22,  41 => 11,  36 => 9,  26 => 1,);
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
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
