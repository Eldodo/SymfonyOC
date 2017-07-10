<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0aea75d665dc1a0c1ead1d62b1b2ae9fb9d0962565c9b2752540b9172abeb48b extends Twig_Template
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
        $__internal_97bdf03c0177e3900b6676a6af81b6f34d7e175ce5f8f6be94ddda8c4f96ffb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bdf03c0177e3900b6676a6af81b6f34d7e175ce5f8f6be94ddda8c4f96ffb1->enter($__internal_97bdf03c0177e3900b6676a6af81b6f34d7e175ce5f8f6be94ddda8c4f96ffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1fd244ba4f955829be0b28272313056c7f1ca3a90405f2be1e65f06bdfbcbae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd244ba4f955829be0b28272313056c7f1ca3a90405f2be1e65f06bdfbcbae1->enter($__internal_1fd244ba4f955829be0b28272313056c7f1ca3a90405f2be1e65f06bdfbcbae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_97bdf03c0177e3900b6676a6af81b6f34d7e175ce5f8f6be94ddda8c4f96ffb1->leave($__internal_97bdf03c0177e3900b6676a6af81b6f34d7e175ce5f8f6be94ddda8c4f96ffb1_prof);

        
        $__internal_1fd244ba4f955829be0b28272313056c7f1ca3a90405f2be1e65f06bdfbcbae1->leave($__internal_1fd244ba4f955829be0b28272313056c7f1ca3a90405f2be1e65f06bdfbcbae1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
