<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c8f5ecbb3453e06af94a2a97c9afa392d92898c5c320562408f98efe65b884c1 extends Twig_Template
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
        $__internal_3aef5040d621c77ebc0c97a2d4048fdbf23f538ebb281b9e09e5d88c27443585 = $this->env->getExtension("native_profiler");
        $__internal_3aef5040d621c77ebc0c97a2d4048fdbf23f538ebb281b9e09e5d88c27443585->enter($__internal_3aef5040d621c77ebc0c97a2d4048fdbf23f538ebb281b9e09e5d88c27443585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3aef5040d621c77ebc0c97a2d4048fdbf23f538ebb281b9e09e5d88c27443585->leave($__internal_3aef5040d621c77ebc0c97a2d4048fdbf23f538ebb281b9e09e5d88c27443585_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
