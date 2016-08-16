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
        $__internal_060d64becfcfadbefd34e509cb7a266d6c43bfd33c5f3ff5aaae2946d2817aa1 = $this->env->getExtension("native_profiler");
        $__internal_060d64becfcfadbefd34e509cb7a266d6c43bfd33c5f3ff5aaae2946d2817aa1->enter($__internal_060d64becfcfadbefd34e509cb7a266d6c43bfd33c5f3ff5aaae2946d2817aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_060d64becfcfadbefd34e509cb7a266d6c43bfd33c5f3ff5aaae2946d2817aa1->leave($__internal_060d64becfcfadbefd34e509cb7a266d6c43bfd33c5f3ff5aaae2946d2817aa1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27ea106ce6d2776ade2cf1b9d13e6fc84cadbf47f20ef76c7bb51a4337b234ff = $this->env->getExtension("native_profiler");
        $__internal_27ea106ce6d2776ade2cf1b9d13e6fc84cadbf47f20ef76c7bb51a4337b234ff->enter($__internal_27ea106ce6d2776ade2cf1b9d13e6fc84cadbf47f20ef76c7bb51a4337b234ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_27ea106ce6d2776ade2cf1b9d13e6fc84cadbf47f20ef76c7bb51a4337b234ff->leave($__internal_27ea106ce6d2776ade2cf1b9d13e6fc84cadbf47f20ef76c7bb51a4337b234ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba3617b87793bfa510ea344ac294205bf209cb0b04308ef1addeb634e3b096cf = $this->env->getExtension("native_profiler");
        $__internal_ba3617b87793bfa510ea344ac294205bf209cb0b04308ef1addeb634e3b096cf->enter($__internal_ba3617b87793bfa510ea344ac294205bf209cb0b04308ef1addeb634e3b096cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba3617b87793bfa510ea344ac294205bf209cb0b04308ef1addeb634e3b096cf->leave($__internal_ba3617b87793bfa510ea344ac294205bf209cb0b04308ef1addeb634e3b096cf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffd8fa07443f8e707c68cb709b6f9e2c5f4afbf6b14f1368e2cf5dc6fabac3c2 = $this->env->getExtension("native_profiler");
        $__internal_ffd8fa07443f8e707c68cb709b6f9e2c5f4afbf6b14f1368e2cf5dc6fabac3c2->enter($__internal_ffd8fa07443f8e707c68cb709b6f9e2c5f4afbf6b14f1368e2cf5dc6fabac3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffd8fa07443f8e707c68cb709b6f9e2c5f4afbf6b14f1368e2cf5dc6fabac3c2->leave($__internal_ffd8fa07443f8e707c68cb709b6f9e2c5f4afbf6b14f1368e2cf5dc6fabac3c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec8fc2411bb665daa0396cb0eb26bdb11a473927608cbe54a4249981ab49cc7e = $this->env->getExtension("native_profiler");
        $__internal_ec8fc2411bb665daa0396cb0eb26bdb11a473927608cbe54a4249981ab49cc7e->enter($__internal_ec8fc2411bb665daa0396cb0eb26bdb11a473927608cbe54a4249981ab49cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec8fc2411bb665daa0396cb0eb26bdb11a473927608cbe54a4249981ab49cc7e->leave($__internal_ec8fc2411bb665daa0396cb0eb26bdb11a473927608cbe54a4249981ab49cc7e_prof);

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
