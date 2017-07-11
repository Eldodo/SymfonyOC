<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c840dc43023b4170bbdcb4d7e476e6b8f043e251a68c73881f59f929c8870486 extends Twig_Template
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
        $__internal_76062189afb7ec9d62066ed5adb663bfc58dab7c0996679500566b3e296d41cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76062189afb7ec9d62066ed5adb663bfc58dab7c0996679500566b3e296d41cf->enter($__internal_76062189afb7ec9d62066ed5adb663bfc58dab7c0996679500566b3e296d41cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3089ce66442d92488bb73eaf8b93f113d3fb2494928424390abf26267d444b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3089ce66442d92488bb73eaf8b93f113d3fb2494928424390abf26267d444b0a->enter($__internal_3089ce66442d92488bb73eaf8b93f113d3fb2494928424390abf26267d444b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_76062189afb7ec9d62066ed5adb663bfc58dab7c0996679500566b3e296d41cf->leave($__internal_76062189afb7ec9d62066ed5adb663bfc58dab7c0996679500566b3e296d41cf_prof);

        
        $__internal_3089ce66442d92488bb73eaf8b93f113d3fb2494928424390abf26267d444b0a->leave($__internal_3089ce66442d92488bb73eaf8b93f113d3fb2494928424390abf26267d444b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
