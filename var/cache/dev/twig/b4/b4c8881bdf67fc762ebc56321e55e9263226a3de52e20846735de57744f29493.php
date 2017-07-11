<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45491dec442d3cd38ca54e618116e4503bda3b7204917248377e2fbfc0a7dea8 extends Twig_Template
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
        $__internal_c45fa4c4182f566d7e4413b0407ed285b3c2e8769f78905bddb6cdbcfaa97fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45fa4c4182f566d7e4413b0407ed285b3c2e8769f78905bddb6cdbcfaa97fc4->enter($__internal_c45fa4c4182f566d7e4413b0407ed285b3c2e8769f78905bddb6cdbcfaa97fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4a107ab75d6e228d8a373545b8fad939b6de31d3d7a63beb594f6a2b7e20e1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a107ab75d6e228d8a373545b8fad939b6de31d3d7a63beb594f6a2b7e20e1a3->enter($__internal_4a107ab75d6e228d8a373545b8fad939b6de31d3d7a63beb594f6a2b7e20e1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c45fa4c4182f566d7e4413b0407ed285b3c2e8769f78905bddb6cdbcfaa97fc4->leave($__internal_c45fa4c4182f566d7e4413b0407ed285b3c2e8769f78905bddb6cdbcfaa97fc4_prof);

        
        $__internal_4a107ab75d6e228d8a373545b8fad939b6de31d3d7a63beb594f6a2b7e20e1a3->leave($__internal_4a107ab75d6e228d8a373545b8fad939b6de31d3d7a63beb594f6a2b7e20e1a3_prof);

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
