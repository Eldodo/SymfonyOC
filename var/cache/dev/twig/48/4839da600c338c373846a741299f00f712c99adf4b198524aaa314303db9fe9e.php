<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_580342ba5d8e36206cfb8dfd9a291e3ec13c68540f404a883ff71e893e36f332 extends Twig_Template
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
        $__internal_81246fc375048e53c859fb02c237d1ab39d85f127a88a738b08ed2b7a11a9d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81246fc375048e53c859fb02c237d1ab39d85f127a88a738b08ed2b7a11a9d31->enter($__internal_81246fc375048e53c859fb02c237d1ab39d85f127a88a738b08ed2b7a11a9d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_91b97dcac5aea5530f0d69d8438d08ee00767dddd793bdbeb8016bd1cd3e233a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b97dcac5aea5530f0d69d8438d08ee00767dddd793bdbeb8016bd1cd3e233a->enter($__internal_91b97dcac5aea5530f0d69d8438d08ee00767dddd793bdbeb8016bd1cd3e233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_81246fc375048e53c859fb02c237d1ab39d85f127a88a738b08ed2b7a11a9d31->leave($__internal_81246fc375048e53c859fb02c237d1ab39d85f127a88a738b08ed2b7a11a9d31_prof);

        
        $__internal_91b97dcac5aea5530f0d69d8438d08ee00767dddd793bdbeb8016bd1cd3e233a->leave($__internal_91b97dcac5aea5530f0d69d8438d08ee00767dddd793bdbeb8016bd1cd3e233a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
