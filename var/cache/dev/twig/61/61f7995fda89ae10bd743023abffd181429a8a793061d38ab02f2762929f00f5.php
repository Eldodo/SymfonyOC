<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9e82fc96aef4e6fa3c5347eef4aa12caf92be36eaff438db3f89e3c53fe321e7 extends Twig_Template
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
        $__internal_edecba0ec38c39494c13e90314169b6cff044d745369dbdd69108b6d765fe8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edecba0ec38c39494c13e90314169b6cff044d745369dbdd69108b6d765fe8ae->enter($__internal_edecba0ec38c39494c13e90314169b6cff044d745369dbdd69108b6d765fe8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d9f3f506b37620cd3e5ff28274934ad5a9e2a19a4dda4d0c005c9e86e889151b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f3f506b37620cd3e5ff28274934ad5a9e2a19a4dda4d0c005c9e86e889151b->enter($__internal_d9f3f506b37620cd3e5ff28274934ad5a9e2a19a4dda4d0c005c9e86e889151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_edecba0ec38c39494c13e90314169b6cff044d745369dbdd69108b6d765fe8ae->leave($__internal_edecba0ec38c39494c13e90314169b6cff044d745369dbdd69108b6d765fe8ae_prof);

        
        $__internal_d9f3f506b37620cd3e5ff28274934ad5a9e2a19a4dda4d0c005c9e86e889151b->leave($__internal_d9f3f506b37620cd3e5ff28274934ad5a9e2a19a4dda4d0c005c9e86e889151b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
