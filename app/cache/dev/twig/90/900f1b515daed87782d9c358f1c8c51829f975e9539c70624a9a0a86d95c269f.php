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
        $__internal_bb6a9d6150f3e1d78eca2600d6083688694b059bdc3ded3afb174794ea420a5a = $this->env->getExtension("native_profiler");
        $__internal_bb6a9d6150f3e1d78eca2600d6083688694b059bdc3ded3afb174794ea420a5a->enter($__internal_bb6a9d6150f3e1d78eca2600d6083688694b059bdc3ded3afb174794ea420a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bb6a9d6150f3e1d78eca2600d6083688694b059bdc3ded3afb174794ea420a5a->leave($__internal_bb6a9d6150f3e1d78eca2600d6083688694b059bdc3ded3afb174794ea420a5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db1341dffdd8d1f2f58aeea59b7be8e2b788067dc88eb6d250efd3c31b44f966 = $this->env->getExtension("native_profiler");
        $__internal_db1341dffdd8d1f2f58aeea59b7be8e2b788067dc88eb6d250efd3c31b44f966->enter($__internal_db1341dffdd8d1f2f58aeea59b7be8e2b788067dc88eb6d250efd3c31b44f966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_db1341dffdd8d1f2f58aeea59b7be8e2b788067dc88eb6d250efd3c31b44f966->leave($__internal_db1341dffdd8d1f2f58aeea59b7be8e2b788067dc88eb6d250efd3c31b44f966_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd13281354af866c6c279fc046e53560a09115a017d04e8ea9989f1a0ad6c4ec = $this->env->getExtension("native_profiler");
        $__internal_cd13281354af866c6c279fc046e53560a09115a017d04e8ea9989f1a0ad6c4ec->enter($__internal_cd13281354af866c6c279fc046e53560a09115a017d04e8ea9989f1a0ad6c4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd13281354af866c6c279fc046e53560a09115a017d04e8ea9989f1a0ad6c4ec->leave($__internal_cd13281354af866c6c279fc046e53560a09115a017d04e8ea9989f1a0ad6c4ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cd09463db75e10115db2f0072e044cd1eddfe305ba87cbfd76afa6fd7c70b22 = $this->env->getExtension("native_profiler");
        $__internal_1cd09463db75e10115db2f0072e044cd1eddfe305ba87cbfd76afa6fd7c70b22->enter($__internal_1cd09463db75e10115db2f0072e044cd1eddfe305ba87cbfd76afa6fd7c70b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1cd09463db75e10115db2f0072e044cd1eddfe305ba87cbfd76afa6fd7c70b22->leave($__internal_1cd09463db75e10115db2f0072e044cd1eddfe305ba87cbfd76afa6fd7c70b22_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97602ed0bd4da0c4c3b0f1456ae91b86acb1da85ccaa97627eaa309b612bb8a0 = $this->env->getExtension("native_profiler");
        $__internal_97602ed0bd4da0c4c3b0f1456ae91b86acb1da85ccaa97627eaa309b612bb8a0->enter($__internal_97602ed0bd4da0c4c3b0f1456ae91b86acb1da85ccaa97627eaa309b612bb8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97602ed0bd4da0c4c3b0f1456ae91b86acb1da85ccaa97627eaa309b612bb8a0->leave($__internal_97602ed0bd4da0c4c3b0f1456ae91b86acb1da85ccaa97627eaa309b612bb8a0_prof);

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
