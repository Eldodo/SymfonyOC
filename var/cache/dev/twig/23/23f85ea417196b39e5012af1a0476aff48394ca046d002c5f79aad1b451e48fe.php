<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dadd127a96dd7a91ffcb3f0cf440aed53fa5c882e505095f72312c599bbbf48d extends Twig_Template
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
        $__internal_d0b1f1bd8c6adc1b6c293ca465015b422500d3a9fd12e1ca5d7e751c77bf5135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b1f1bd8c6adc1b6c293ca465015b422500d3a9fd12e1ca5d7e751c77bf5135->enter($__internal_d0b1f1bd8c6adc1b6c293ca465015b422500d3a9fd12e1ca5d7e751c77bf5135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bd5b16dc3b2f42e1e7e78f693871486e077c715015e4fb9f6e1e796a2ab79c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5b16dc3b2f42e1e7e78f693871486e077c715015e4fb9f6e1e796a2ab79c1d->enter($__internal_bd5b16dc3b2f42e1e7e78f693871486e077c715015e4fb9f6e1e796a2ab79c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d0b1f1bd8c6adc1b6c293ca465015b422500d3a9fd12e1ca5d7e751c77bf5135->leave($__internal_d0b1f1bd8c6adc1b6c293ca465015b422500d3a9fd12e1ca5d7e751c77bf5135_prof);

        
        $__internal_bd5b16dc3b2f42e1e7e78f693871486e077c715015e4fb9f6e1e796a2ab79c1d->leave($__internal_bd5b16dc3b2f42e1e7e78f693871486e077c715015e4fb9f6e1e796a2ab79c1d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bac728091cecbf3d38dcb363c8e3001d5d0b18cdddc2dd65d950074619c3a26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac728091cecbf3d38dcb363c8e3001d5d0b18cdddc2dd65d950074619c3a26a->enter($__internal_bac728091cecbf3d38dcb363c8e3001d5d0b18cdddc2dd65d950074619c3a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ad3654ebab5363a0f7ca3b3694b46aa3a6438c292d690002726345c6ad79134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad3654ebab5363a0f7ca3b3694b46aa3a6438c292d690002726345c6ad79134->enter($__internal_1ad3654ebab5363a0f7ca3b3694b46aa3a6438c292d690002726345c6ad79134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1ad3654ebab5363a0f7ca3b3694b46aa3a6438c292d690002726345c6ad79134->leave($__internal_1ad3654ebab5363a0f7ca3b3694b46aa3a6438c292d690002726345c6ad79134_prof);

        
        $__internal_bac728091cecbf3d38dcb363c8e3001d5d0b18cdddc2dd65d950074619c3a26a->leave($__internal_bac728091cecbf3d38dcb363c8e3001d5d0b18cdddc2dd65d950074619c3a26a_prof);

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
