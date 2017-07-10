<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8097782c0fea47233ef0bb4b6f0ddcb554ca104f05ba986f2db9d81820bbb2fc extends Twig_Template
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
        $__internal_6b61deefa72d6a0ff6723cc4cdf411e2cc4cc0f5f6eece33ea673a959dfe13d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b61deefa72d6a0ff6723cc4cdf411e2cc4cc0f5f6eece33ea673a959dfe13d4->enter($__internal_6b61deefa72d6a0ff6723cc4cdf411e2cc4cc0f5f6eece33ea673a959dfe13d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9b895b01142074b03d1ca173a95718ca0ddaea76841abdbdb9f84df9b7fbd732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b895b01142074b03d1ca173a95718ca0ddaea76841abdbdb9f84df9b7fbd732->enter($__internal_9b895b01142074b03d1ca173a95718ca0ddaea76841abdbdb9f84df9b7fbd732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6b61deefa72d6a0ff6723cc4cdf411e2cc4cc0f5f6eece33ea673a959dfe13d4->leave($__internal_6b61deefa72d6a0ff6723cc4cdf411e2cc4cc0f5f6eece33ea673a959dfe13d4_prof);

        
        $__internal_9b895b01142074b03d1ca173a95718ca0ddaea76841abdbdb9f84df9b7fbd732->leave($__internal_9b895b01142074b03d1ca173a95718ca0ddaea76841abdbdb9f84df9b7fbd732_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
