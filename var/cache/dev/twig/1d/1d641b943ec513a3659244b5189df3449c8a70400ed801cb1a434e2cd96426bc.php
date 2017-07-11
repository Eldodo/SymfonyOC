<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_765d92e4f2378ac8f160167b5c9d732c1ca1b0a150c1eee8d34d81d61385fd5c extends Twig_Template
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
        $__internal_f5093809cc33df618dddcc2a8536325a1a219c6ff64e70f7a1ddd1dc68cfc2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5093809cc33df618dddcc2a8536325a1a219c6ff64e70f7a1ddd1dc68cfc2f3->enter($__internal_f5093809cc33df618dddcc2a8536325a1a219c6ff64e70f7a1ddd1dc68cfc2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_17f00fb4ed8bee8c0e5ea4d4e4df1dcaddca95b9b7197612674c0a3ec0f184bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f00fb4ed8bee8c0e5ea4d4e4df1dcaddca95b9b7197612674c0a3ec0f184bc->enter($__internal_17f00fb4ed8bee8c0e5ea4d4e4df1dcaddca95b9b7197612674c0a3ec0f184bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f5093809cc33df618dddcc2a8536325a1a219c6ff64e70f7a1ddd1dc68cfc2f3->leave($__internal_f5093809cc33df618dddcc2a8536325a1a219c6ff64e70f7a1ddd1dc68cfc2f3_prof);

        
        $__internal_17f00fb4ed8bee8c0e5ea4d4e4df1dcaddca95b9b7197612674c0a3ec0f184bc->leave($__internal_17f00fb4ed8bee8c0e5ea4d4e4df1dcaddca95b9b7197612674c0a3ec0f184bc_prof);

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
