<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_69d351f20ffd94816e2e88a71f4252fcd05557b24f387403955b8741e2c3bdaf extends Twig_Template
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
        $__internal_093359abf03877ae5b75b411c7546793f1405d15b9dae1a62652bd4e9dcee60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093359abf03877ae5b75b411c7546793f1405d15b9dae1a62652bd4e9dcee60c->enter($__internal_093359abf03877ae5b75b411c7546793f1405d15b9dae1a62652bd4e9dcee60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b1d712cb915788456ad5b188dd4cf47adc049894b29e1056356689291cddda5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d712cb915788456ad5b188dd4cf47adc049894b29e1056356689291cddda5d->enter($__internal_b1d712cb915788456ad5b188dd4cf47adc049894b29e1056356689291cddda5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_093359abf03877ae5b75b411c7546793f1405d15b9dae1a62652bd4e9dcee60c->leave($__internal_093359abf03877ae5b75b411c7546793f1405d15b9dae1a62652bd4e9dcee60c_prof);

        
        $__internal_b1d712cb915788456ad5b188dd4cf47adc049894b29e1056356689291cddda5d->leave($__internal_b1d712cb915788456ad5b188dd4cf47adc049894b29e1056356689291cddda5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
