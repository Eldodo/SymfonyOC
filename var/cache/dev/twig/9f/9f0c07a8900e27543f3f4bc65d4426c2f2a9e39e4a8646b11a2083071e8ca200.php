<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_8ce56eb54c8fe636c2cd9c47be99e558d181b027d0751f7c3fcae33d56bc4fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c773758124e0d8c6df94c76c2cdd807c3d048c94c90b287912b962bc990a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c773758124e0d8c6df94c76c2cdd807c3d048c94c90b287912b962bc990a33->enter($__internal_82c773758124e0d8c6df94c76c2cdd807c3d048c94c90b287912b962bc990a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_7e9fba17ba21e669271499e209f3928f4e14b6f92a5a35bcd09a087d937c1df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9fba17ba21e669271499e209f3928f4e14b6f92a5a35bcd09a087d937c1df1->enter($__internal_7e9fba17ba21e669271499e209f3928f4e14b6f92a5a35bcd09a087d937c1df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c773758124e0d8c6df94c76c2cdd807c3d048c94c90b287912b962bc990a33->leave($__internal_82c773758124e0d8c6df94c76c2cdd807c3d048c94c90b287912b962bc990a33_prof);

        
        $__internal_7e9fba17ba21e669271499e209f3928f4e14b6f92a5a35bcd09a087d937c1df1->leave($__internal_7e9fba17ba21e669271499e209f3928f4e14b6f92a5a35bcd09a087d937c1df1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aac804cfaad29eae90fb0af50a87bf9b4ef6a2f30454ab55e26ed376abe7f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aac804cfaad29eae90fb0af50a87bf9b4ef6a2f30454ab55e26ed376abe7f7d->enter($__internal_3aac804cfaad29eae90fb0af50a87bf9b4ef6a2f30454ab55e26ed376abe7f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d88653275407adda5506c468bc7e0e18c46d1b82e2705ff9d3a48c73bfa933ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88653275407adda5506c468bc7e0e18c46d1b82e2705ff9d3a48c73bfa933ff->enter($__internal_d88653275407adda5506c468bc7e0e18c46d1b82e2705ff9d3a48c73bfa933ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d88653275407adda5506c468bc7e0e18c46d1b82e2705ff9d3a48c73bfa933ff->leave($__internal_d88653275407adda5506c468bc7e0e18c46d1b82e2705ff9d3a48c73bfa933ff_prof);

        
        $__internal_3aac804cfaad29eae90fb0af50a87bf9b4ef6a2f30454ab55e26ed376abe7f7d->leave($__internal_3aac804cfaad29eae90fb0af50a87bf9b4ef6a2f30454ab55e26ed376abe7f7d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f652f0842ed816584420aa98301478d6cc19ac3aa0201949c722ae27a2f52923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f652f0842ed816584420aa98301478d6cc19ac3aa0201949c722ae27a2f52923->enter($__internal_f652f0842ed816584420aa98301478d6cc19ac3aa0201949c722ae27a2f52923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0278a22b8a1a6ae1e1c00968d56337c0c8ed1809056a78e23d4bd42ee83a8101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0278a22b8a1a6ae1e1c00968d56337c0c8ed1809056a78e23d4bd42ee83a8101->enter($__internal_0278a22b8a1a6ae1e1c00968d56337c0c8ed1809056a78e23d4bd42ee83a8101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_0278a22b8a1a6ae1e1c00968d56337c0c8ed1809056a78e23d4bd42ee83a8101->leave($__internal_0278a22b8a1a6ae1e1c00968d56337c0c8ed1809056a78e23d4bd42ee83a8101_prof);

        
        $__internal_f652f0842ed816584420aa98301478d6cc19ac3aa0201949c722ae27a2f52923->leave($__internal_f652f0842ed816584420aa98301478d6cc19ac3aa0201949c722ae27a2f52923_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3d6e8aefef6ddf3a97ad5266178b8d76ad09550fed6a40a44f5c631a5b14581d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6e8aefef6ddf3a97ad5266178b8d76ad09550fed6a40a44f5c631a5b14581d->enter($__internal_3d6e8aefef6ddf3a97ad5266178b8d76ad09550fed6a40a44f5c631a5b14581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a7c7fde22802d19c0fb1585ead72435fcd7ebc06ffdbd3610b2ecc38a853cd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c7fde22802d19c0fb1585ead72435fcd7ebc06ffdbd3610b2ecc38a853cd14->enter($__internal_a7c7fde22802d19c0fb1585ead72435fcd7ebc06ffdbd3610b2ecc38a853cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_a7c7fde22802d19c0fb1585ead72435fcd7ebc06ffdbd3610b2ecc38a853cd14->leave($__internal_a7c7fde22802d19c0fb1585ead72435fcd7ebc06ffdbd3610b2ecc38a853cd14_prof);

        
        $__internal_3d6e8aefef6ddf3a97ad5266178b8d76ad09550fed6a40a44f5c631a5b14581d->leave($__internal_3d6e8aefef6ddf3a97ad5266178b8d76ad09550fed6a40a44f5c631a5b14581d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
