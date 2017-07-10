<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c5fe969f5e45bbd220df8f3e0b44720bc6b0d0179abc98928f0fa91e757b480a extends Twig_Template
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
        $__internal_acdb8bc8689cefebe7f5d6a286693cdbfc499afba1e4d0a53ce4f3c67c06e660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdb8bc8689cefebe7f5d6a286693cdbfc499afba1e4d0a53ce4f3c67c06e660->enter($__internal_acdb8bc8689cefebe7f5d6a286693cdbfc499afba1e4d0a53ce4f3c67c06e660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_7070c287fdc34b66164250afedb21c1d9e8215e2259b56594afc12a1c631388a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7070c287fdc34b66164250afedb21c1d9e8215e2259b56594afc12a1c631388a->enter($__internal_7070c287fdc34b66164250afedb21c1d9e8215e2259b56594afc12a1c631388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_acdb8bc8689cefebe7f5d6a286693cdbfc499afba1e4d0a53ce4f3c67c06e660->leave($__internal_acdb8bc8689cefebe7f5d6a286693cdbfc499afba1e4d0a53ce4f3c67c06e660_prof);

        
        $__internal_7070c287fdc34b66164250afedb21c1d9e8215e2259b56594afc12a1c631388a->leave($__internal_7070c287fdc34b66164250afedb21c1d9e8215e2259b56594afc12a1c631388a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
