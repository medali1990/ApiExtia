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
        $__internal_c0c95c90b34d99621f28044909f53615b6f1cc935b6bbb733a9b5f78b09a5963 = $this->env->getExtension("native_profiler");
        $__internal_c0c95c90b34d99621f28044909f53615b6f1cc935b6bbb733a9b5f78b09a5963->enter($__internal_c0c95c90b34d99621f28044909f53615b6f1cc935b6bbb733a9b5f78b09a5963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c0c95c90b34d99621f28044909f53615b6f1cc935b6bbb733a9b5f78b09a5963->leave($__internal_c0c95c90b34d99621f28044909f53615b6f1cc935b6bbb733a9b5f78b09a5963_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_965455cf15016c46a81afa79110338100ccb293f9483e872cf3545603c9605ea = $this->env->getExtension("native_profiler");
        $__internal_965455cf15016c46a81afa79110338100ccb293f9483e872cf3545603c9605ea->enter($__internal_965455cf15016c46a81afa79110338100ccb293f9483e872cf3545603c9605ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_965455cf15016c46a81afa79110338100ccb293f9483e872cf3545603c9605ea->leave($__internal_965455cf15016c46a81afa79110338100ccb293f9483e872cf3545603c9605ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db48be17d380aa2e73a1efa40be4f9048fcc593d26befd09c503db7128a562e6 = $this->env->getExtension("native_profiler");
        $__internal_db48be17d380aa2e73a1efa40be4f9048fcc593d26befd09c503db7128a562e6->enter($__internal_db48be17d380aa2e73a1efa40be4f9048fcc593d26befd09c503db7128a562e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db48be17d380aa2e73a1efa40be4f9048fcc593d26befd09c503db7128a562e6->leave($__internal_db48be17d380aa2e73a1efa40be4f9048fcc593d26befd09c503db7128a562e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7691cad065082dac70bb634238aa579932e21bd092b20179c4f2a56d6fa44164 = $this->env->getExtension("native_profiler");
        $__internal_7691cad065082dac70bb634238aa579932e21bd092b20179c4f2a56d6fa44164->enter($__internal_7691cad065082dac70bb634238aa579932e21bd092b20179c4f2a56d6fa44164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7691cad065082dac70bb634238aa579932e21bd092b20179c4f2a56d6fa44164->leave($__internal_7691cad065082dac70bb634238aa579932e21bd092b20179c4f2a56d6fa44164_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_597fedcef16a408305438d865f03631f8fd35163f84993b54137483043e9db2b = $this->env->getExtension("native_profiler");
        $__internal_597fedcef16a408305438d865f03631f8fd35163f84993b54137483043e9db2b->enter($__internal_597fedcef16a408305438d865f03631f8fd35163f84993b54137483043e9db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_597fedcef16a408305438d865f03631f8fd35163f84993b54137483043e9db2b->leave($__internal_597fedcef16a408305438d865f03631f8fd35163f84993b54137483043e9db2b_prof);

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
