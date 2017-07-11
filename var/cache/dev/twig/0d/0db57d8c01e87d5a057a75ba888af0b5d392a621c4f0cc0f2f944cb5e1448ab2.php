<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c6bcb25bc64029199b697338b5611ac0863b002411388b69b61549bc56dcd9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1386e7f3b009edfeac006a6ab80154fe1b3f8b4b25af82870def64e5b134a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1386e7f3b009edfeac006a6ab80154fe1b3f8b4b25af82870def64e5b134a1->enter($__internal_ec1386e7f3b009edfeac006a6ab80154fe1b3f8b4b25af82870def64e5b134a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ac1d9dd7ea3637f2ab96d6f6c0296cb88692e50e7074d7a3b497d93df306e7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1d9dd7ea3637f2ab96d6f6c0296cb88692e50e7074d7a3b497d93df306e7e6->enter($__internal_ac1d9dd7ea3637f2ab96d6f6c0296cb88692e50e7074d7a3b497d93df306e7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec1386e7f3b009edfeac006a6ab80154fe1b3f8b4b25af82870def64e5b134a1->leave($__internal_ec1386e7f3b009edfeac006a6ab80154fe1b3f8b4b25af82870def64e5b134a1_prof);

        
        $__internal_ac1d9dd7ea3637f2ab96d6f6c0296cb88692e50e7074d7a3b497d93df306e7e6->leave($__internal_ac1d9dd7ea3637f2ab96d6f6c0296cb88692e50e7074d7a3b497d93df306e7e6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a13d7d078ed76b5d5e396f423f315f2a6036d462083655f5ee8c3c52167f02b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13d7d078ed76b5d5e396f423f315f2a6036d462083655f5ee8c3c52167f02b1->enter($__internal_a13d7d078ed76b5d5e396f423f315f2a6036d462083655f5ee8c3c52167f02b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a466ede46edca955dff7a89573f1d7697f36acf70c468e8128e507b148c5801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a466ede46edca955dff7a89573f1d7697f36acf70c468e8128e507b148c5801->enter($__internal_5a466ede46edca955dff7a89573f1d7697f36acf70c468e8128e507b148c5801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a466ede46edca955dff7a89573f1d7697f36acf70c468e8128e507b148c5801->leave($__internal_5a466ede46edca955dff7a89573f1d7697f36acf70c468e8128e507b148c5801_prof);

        
        $__internal_a13d7d078ed76b5d5e396f423f315f2a6036d462083655f5ee8c3c52167f02b1->leave($__internal_a13d7d078ed76b5d5e396f423f315f2a6036d462083655f5ee8c3c52167f02b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
