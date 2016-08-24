<?php

/* ::base.html.twig */
class __TwigTemplate_e022681e0e9f5f6dd8f45eede5f555db6c30f206491134ad72ee831a4263a7e0 extends Twig_Template
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
        $__internal_24d06497d7342e46647928de69607ee88b464bce9c832b834a016efbd1105bb8 = $this->env->getExtension("native_profiler");
        $__internal_24d06497d7342e46647928de69607ee88b464bce9c832b834a016efbd1105bb8->enter($__internal_24d06497d7342e46647928de69607ee88b464bce9c832b834a016efbd1105bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_24d06497d7342e46647928de69607ee88b464bce9c832b834a016efbd1105bb8->leave($__internal_24d06497d7342e46647928de69607ee88b464bce9c832b834a016efbd1105bb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b78fd5c69aa160f22847221c994e6e12062aa4497f516f33cf5b2a932daff1 = $this->env->getExtension("native_profiler");
        $__internal_66b78fd5c69aa160f22847221c994e6e12062aa4497f516f33cf5b2a932daff1->enter($__internal_66b78fd5c69aa160f22847221c994e6e12062aa4497f516f33cf5b2a932daff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66b78fd5c69aa160f22847221c994e6e12062aa4497f516f33cf5b2a932daff1->leave($__internal_66b78fd5c69aa160f22847221c994e6e12062aa4497f516f33cf5b2a932daff1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38483c16c9406c5e29b849dadd7c575d25d3f3bff100caea39995797a23a357d = $this->env->getExtension("native_profiler");
        $__internal_38483c16c9406c5e29b849dadd7c575d25d3f3bff100caea39995797a23a357d->enter($__internal_38483c16c9406c5e29b849dadd7c575d25d3f3bff100caea39995797a23a357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38483c16c9406c5e29b849dadd7c575d25d3f3bff100caea39995797a23a357d->leave($__internal_38483c16c9406c5e29b849dadd7c575d25d3f3bff100caea39995797a23a357d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae0b76ef697ae3de28364ae681563ca045ec62ed2d5f048810649345ce6168d = $this->env->getExtension("native_profiler");
        $__internal_1ae0b76ef697ae3de28364ae681563ca045ec62ed2d5f048810649345ce6168d->enter($__internal_1ae0b76ef697ae3de28364ae681563ca045ec62ed2d5f048810649345ce6168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ae0b76ef697ae3de28364ae681563ca045ec62ed2d5f048810649345ce6168d->leave($__internal_1ae0b76ef697ae3de28364ae681563ca045ec62ed2d5f048810649345ce6168d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f42c5f7290c3c81726ab87e83698ce315c854612b2b6c371a58e85c39968551e = $this->env->getExtension("native_profiler");
        $__internal_f42c5f7290c3c81726ab87e83698ce315c854612b2b6c371a58e85c39968551e->enter($__internal_f42c5f7290c3c81726ab87e83698ce315c854612b2b6c371a58e85c39968551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f42c5f7290c3c81726ab87e83698ce315c854612b2b6c371a58e85c39968551e->leave($__internal_f42c5f7290c3c81726ab87e83698ce315c854612b2b6c371a58e85c39968551e_prof);

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
