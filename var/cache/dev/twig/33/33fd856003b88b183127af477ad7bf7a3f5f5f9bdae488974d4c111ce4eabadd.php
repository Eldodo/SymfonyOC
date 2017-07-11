<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6e97e1a1efa5c479872a56c482c9510c381a38039a4fd43a66f27e564807af7a extends Twig_Template
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
        $__internal_18b9bd2eca302336bce5b9666631620b7d928913d79dfb89ac3d5f020998ccca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b9bd2eca302336bce5b9666631620b7d928913d79dfb89ac3d5f020998ccca->enter($__internal_18b9bd2eca302336bce5b9666631620b7d928913d79dfb89ac3d5f020998ccca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9e944ddbe75adbe689cd8bdd7773b90c2d79e86b1e44e6cfc25178e87f9e2897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e944ddbe75adbe689cd8bdd7773b90c2d79e86b1e44e6cfc25178e87f9e2897->enter($__internal_9e944ddbe75adbe689cd8bdd7773b90c2d79e86b1e44e6cfc25178e87f9e2897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_18b9bd2eca302336bce5b9666631620b7d928913d79dfb89ac3d5f020998ccca->leave($__internal_18b9bd2eca302336bce5b9666631620b7d928913d79dfb89ac3d5f020998ccca_prof);

        
        $__internal_9e944ddbe75adbe689cd8bdd7773b90c2d79e86b1e44e6cfc25178e87f9e2897->leave($__internal_9e944ddbe75adbe689cd8bdd7773b90c2d79e86b1e44e6cfc25178e87f9e2897_prof);

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
