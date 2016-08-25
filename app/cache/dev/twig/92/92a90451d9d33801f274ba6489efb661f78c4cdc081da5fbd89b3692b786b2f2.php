<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_55e4cf7e32f523de7d91224a68ef7e80bf90cddaf0ee476039532e713e0f206d extends Twig_Template
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
        $__internal_1fb999635c1e4a9f3d42a9fd34861db8c143e6c500f7452a4e5ac079fe9ee3f4 = $this->env->getExtension("native_profiler");
        $__internal_1fb999635c1e4a9f3d42a9fd34861db8c143e6c500f7452a4e5ac079fe9ee3f4->enter($__internal_1fb999635c1e4a9f3d42a9fd34861db8c143e6c500f7452a4e5ac079fe9ee3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_1fb999635c1e4a9f3d42a9fd34861db8c143e6c500f7452a4e5ac079fe9ee3f4->leave($__internal_1fb999635c1e4a9f3d42a9fd34861db8c143e6c500f7452a4e5ac079fe9ee3f4_prof);

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
