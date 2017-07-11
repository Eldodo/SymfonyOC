<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cc4566b22a94cdb61bcf886d5a9c1e4a9352ed39bf8fd66e89a9cab28636bc6e extends Twig_Template
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
        $__internal_25a7b300d9f66b3a9f5b75644aa4e43af66d13485601fbee1d91cc4d3a980658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a7b300d9f66b3a9f5b75644aa4e43af66d13485601fbee1d91cc4d3a980658->enter($__internal_25a7b300d9f66b3a9f5b75644aa4e43af66d13485601fbee1d91cc4d3a980658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_03f8866c1394cc137b980ab171297b283585202e79d2d8fcd6ba749b15b57ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f8866c1394cc137b980ab171297b283585202e79d2d8fcd6ba749b15b57ba0->enter($__internal_03f8866c1394cc137b980ab171297b283585202e79d2d8fcd6ba749b15b57ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_25a7b300d9f66b3a9f5b75644aa4e43af66d13485601fbee1d91cc4d3a980658->leave($__internal_25a7b300d9f66b3a9f5b75644aa4e43af66d13485601fbee1d91cc4d3a980658_prof);

        
        $__internal_03f8866c1394cc137b980ab171297b283585202e79d2d8fcd6ba749b15b57ba0->leave($__internal_03f8866c1394cc137b980ab171297b283585202e79d2d8fcd6ba749b15b57ba0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ada2b93db540e5c1027bf86605e984726d23ff6fac487e31ea12f4754797359e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada2b93db540e5c1027bf86605e984726d23ff6fac487e31ea12f4754797359e->enter($__internal_ada2b93db540e5c1027bf86605e984726d23ff6fac487e31ea12f4754797359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_182592d8cafe4aa35f124339793f5925176949d4cce95b6a366951a8b23a1e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182592d8cafe4aa35f124339793f5925176949d4cce95b6a366951a8b23a1e56->enter($__internal_182592d8cafe4aa35f124339793f5925176949d4cce95b6a366951a8b23a1e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_182592d8cafe4aa35f124339793f5925176949d4cce95b6a366951a8b23a1e56->leave($__internal_182592d8cafe4aa35f124339793f5925176949d4cce95b6a366951a8b23a1e56_prof);

        
        $__internal_ada2b93db540e5c1027bf86605e984726d23ff6fac487e31ea12f4754797359e->leave($__internal_ada2b93db540e5c1027bf86605e984726d23ff6fac487e31ea12f4754797359e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
