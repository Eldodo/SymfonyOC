<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_1b69796a2551393f58a7f7c1e2363494fd5830a7f56df6f7c56c09201fcf0c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df2467954dfd76e83c05f603134c87404181008ea701da306b66551bc74604d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2467954dfd76e83c05f603134c87404181008ea701da306b66551bc74604d9->enter($__internal_df2467954dfd76e83c05f603134c87404181008ea701da306b66551bc74604d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $__internal_db5dbf69d4bc51841da12be16b1aaec359799e2da0791a4ef40e62b6ed8cd0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5dbf69d4bc51841da12be16b1aaec359799e2da0791a4ef40e62b6ed8cd0a3->enter($__internal_db5dbf69d4bc51841da12be16b1aaec359799e2da0791a4ef40e62b6ed8cd0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2467954dfd76e83c05f603134c87404181008ea701da306b66551bc74604d9->leave($__internal_df2467954dfd76e83c05f603134c87404181008ea701da306b66551bc74604d9_prof);

        
        $__internal_db5dbf69d4bc51841da12be16b1aaec359799e2da0791a4ef40e62b6ed8cd0a3->leave($__internal_db5dbf69d4bc51841da12be16b1aaec359799e2da0791a4ef40e62b6ed8cd0a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f503fc0f848e631c74a04796414e2d7571b015f03551c8f23706c02bb4614137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f503fc0f848e631c74a04796414e2d7571b015f03551c8f23706c02bb4614137->enter($__internal_f503fc0f848e631c74a04796414e2d7571b015f03551c8f23706c02bb4614137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_401372a8c0741bda14d69d6d91cf10cad0e37d890ee28e7d7cf5d9d7fbf627c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401372a8c0741bda14d69d6d91cf10cad0e37d890ee28e7d7cf5d9d7fbf627c0->enter($__internal_401372a8c0741bda14d69d6d91cf10cad0e37d890ee28e7d7cf5d9d7fbf627c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_401372a8c0741bda14d69d6d91cf10cad0e37d890ee28e7d7cf5d9d7fbf627c0->leave($__internal_401372a8c0741bda14d69d6d91cf10cad0e37d890ee28e7d7cf5d9d7fbf627c0_prof);

        
        $__internal_f503fc0f848e631c74a04796414e2d7571b015f03551c8f23706c02bb4614137->leave($__internal_f503fc0f848e631c74a04796414e2d7571b015f03551c8f23706c02bb4614137_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9b97ddb1d7af3c74c3961ceba77c17be3985aa003c2cf023f709cf4be65377bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b97ddb1d7af3c74c3961ceba77c17be3985aa003c2cf023f709cf4be65377bb->enter($__internal_9b97ddb1d7af3c74c3961ceba77c17be3985aa003c2cf023f709cf4be65377bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0d21fc7f161fc3b535b2c3db58392b42501087d99f633455c2906faa96d2a5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d21fc7f161fc3b535b2c3db58392b42501087d99f633455c2906faa96d2a5b6->enter($__internal_0d21fc7f161fc3b535b2c3db58392b42501087d99f633455c2906faa96d2a5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_0d21fc7f161fc3b535b2c3db58392b42501087d99f633455c2906faa96d2a5b6->leave($__internal_0d21fc7f161fc3b535b2c3db58392b42501087d99f633455c2906faa96d2a5b6_prof);

        
        $__internal_9b97ddb1d7af3c74c3961ceba77c17be3985aa003c2cf023f709cf4be65377bb->leave($__internal_9b97ddb1d7af3c74c3961ceba77c17be3985aa003c2cf023f709cf4be65377bb_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "@OCPlatform/Advert/edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
