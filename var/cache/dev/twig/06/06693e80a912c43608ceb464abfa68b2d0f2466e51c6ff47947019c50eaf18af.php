<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4ae58e4abb7b221792705807f15a587ffc7a2d44293b47ceaad29949820ddf6b extends Twig_Template
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
        $__internal_1611f88bb2e4285571f3bc7f6af156dc6b005d29dd3075f21a5fc62e2737bbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1611f88bb2e4285571f3bc7f6af156dc6b005d29dd3075f21a5fc62e2737bbe5->enter($__internal_1611f88bb2e4285571f3bc7f6af156dc6b005d29dd3075f21a5fc62e2737bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_20aa54aba1d1efa6fd82b33f9a59aaf22a6970a00af825f96b6d41e029825afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aa54aba1d1efa6fd82b33f9a59aaf22a6970a00af825f96b6d41e029825afc->enter($__internal_20aa54aba1d1efa6fd82b33f9a59aaf22a6970a00af825f96b6d41e029825afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_1611f88bb2e4285571f3bc7f6af156dc6b005d29dd3075f21a5fc62e2737bbe5->leave($__internal_1611f88bb2e4285571f3bc7f6af156dc6b005d29dd3075f21a5fc62e2737bbe5_prof);

        
        $__internal_20aa54aba1d1efa6fd82b33f9a59aaf22a6970a00af825f96b6d41e029825afc->leave($__internal_20aa54aba1d1efa6fd82b33f9a59aaf22a6970a00af825f96b6d41e029825afc_prof);

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
