<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_edee899ba766ac0bcf4c17663927f079fc5557821e31acd8d4ffd7160582500d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e6c4dd1272f17824f2eac4b48e31e8988c2f53c7573fa16df93bf4a0e3b848c = $this->env->getExtension("native_profiler");
        $__internal_1e6c4dd1272f17824f2eac4b48e31e8988c2f53c7573fa16df93bf4a0e3b848c->enter($__internal_1e6c4dd1272f17824f2eac4b48e31e8988c2f53c7573fa16df93bf4a0e3b848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_item.html.twig"));

        // line 1
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_1e6c4dd1272f17824f2eac4b48e31e8988c2f53c7573fa16df93bf4a0e3b848c->leave($__internal_1e6c4dd1272f17824f2eac4b48e31e8988c2f53c7573fa16df93bf4a0e3b848c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if link is not defined or link %}*/
/*     {% set icon %}*/
/*         <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">{{ icon }}</a>*/
/*     {% endset %}*/
/* {% endif %}*/
/* <div class="sf-toolbar-block">*/
/*      <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*      <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
