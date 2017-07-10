<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_59b195687fbb6d5c0b89a3a56b8156ebb321b3f6445f70223726cd6d13fd32f1 extends Twig_Template
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
        $__internal_055aba00e28cf7865cae1de7ea8dbe393769bd7fa07e4ef838c93ea9a29feb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055aba00e28cf7865cae1de7ea8dbe393769bd7fa07e4ef838c93ea9a29feb8e->enter($__internal_055aba00e28cf7865cae1de7ea8dbe393769bd7fa07e4ef838c93ea9a29feb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_8da59463165c955eeba492d11aca04a79acb6e3344d1fa6373aace54c8c2e738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da59463165c955eeba492d11aca04a79acb6e3344d1fa6373aace54c8c2e738->enter($__internal_8da59463165c955eeba492d11aca04a79acb6e3344d1fa6373aace54c8c2e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_055aba00e28cf7865cae1de7ea8dbe393769bd7fa07e4ef838c93ea9a29feb8e->leave($__internal_055aba00e28cf7865cae1de7ea8dbe393769bd7fa07e4ef838c93ea9a29feb8e_prof);

        
        $__internal_8da59463165c955eeba492d11aca04a79acb6e3344d1fa6373aace54c8c2e738->leave($__internal_8da59463165c955eeba492d11aca04a79acb6e3344d1fa6373aace54c8c2e738_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_844f83ad593a958509eadb0745ad6590fafbec86fbca204afc0a95d796075e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844f83ad593a958509eadb0745ad6590fafbec86fbca204afc0a95d796075e97->enter($__internal_844f83ad593a958509eadb0745ad6590fafbec86fbca204afc0a95d796075e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ed39f14c320f99191d2f227864392f6565a84af946da8b4d086976411b4e091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed39f14c320f99191d2f227864392f6565a84af946da8b4d086976411b4e091->enter($__internal_0ed39f14c320f99191d2f227864392f6565a84af946da8b4d086976411b4e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ed39f14c320f99191d2f227864392f6565a84af946da8b4d086976411b4e091->leave($__internal_0ed39f14c320f99191d2f227864392f6565a84af946da8b4d086976411b4e091_prof);

        
        $__internal_844f83ad593a958509eadb0745ad6590fafbec86fbca204afc0a95d796075e97->leave($__internal_844f83ad593a958509eadb0745ad6590fafbec86fbca204afc0a95d796075e97_prof);

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
