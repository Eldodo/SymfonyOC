<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_16edd5bbfcaeb8a760b63bb75f04137b24f51823974886429266f583794343e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_5d6fc627c2f67e5688ac5b01e625fad69829208b239767d40e9649b9abbdd5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6fc627c2f67e5688ac5b01e625fad69829208b239767d40e9649b9abbdd5d4->enter($__internal_5d6fc627c2f67e5688ac5b01e625fad69829208b239767d40e9649b9abbdd5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $__internal_5206b411965ded2ce090c72114f10bb7a0fc9a9c1ca9897e665be011d77153e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5206b411965ded2ce090c72114f10bb7a0fc9a9c1ca9897e665be011d77153e5->enter($__internal_5206b411965ded2ce090c72114f10bb7a0fc9a9c1ca9897e665be011d77153e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d6fc627c2f67e5688ac5b01e625fad69829208b239767d40e9649b9abbdd5d4->leave($__internal_5d6fc627c2f67e5688ac5b01e625fad69829208b239767d40e9649b9abbdd5d4_prof);

        
        $__internal_5206b411965ded2ce090c72114f10bb7a0fc9a9c1ca9897e665be011d77153e5->leave($__internal_5206b411965ded2ce090c72114f10bb7a0fc9a9c1ca9897e665be011d77153e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5d6004b787172a4ede68a31ca64f160bc1cc90bd40e9b1b016dff1a83679b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d6004b787172a4ede68a31ca64f160bc1cc90bd40e9b1b016dff1a83679b48->enter($__internal_e5d6004b787172a4ede68a31ca64f160bc1cc90bd40e9b1b016dff1a83679b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdb138f3f08f629342f11cc2226ac65c686d697408009c828b4f94150d9e0a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb138f3f08f629342f11cc2226ac65c686d697408009c828b4f94150d9e0a43->enter($__internal_fdb138f3f08f629342f11cc2226ac65c686d697408009c828b4f94150d9e0a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fdb138f3f08f629342f11cc2226ac65c686d697408009c828b4f94150d9e0a43->leave($__internal_fdb138f3f08f629342f11cc2226ac65c686d697408009c828b4f94150d9e0a43_prof);

        
        $__internal_e5d6004b787172a4ede68a31ca64f160bc1cc90bd40e9b1b016dff1a83679b48->leave($__internal_e5d6004b787172a4ede68a31ca64f160bc1cc90bd40e9b1b016dff1a83679b48_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b584d5ae0a0f307eaf4d2e271e84d074d11fbcf0db5fa2e137004f90c05ee15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b584d5ae0a0f307eaf4d2e271e84d074d11fbcf0db5fa2e137004f90c05ee15e->enter($__internal_b584d5ae0a0f307eaf4d2e271e84d074d11fbcf0db5fa2e137004f90c05ee15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_fee7f79dae26293a005e2d72154562b2a8860461de645bc49b777bcbc95c8c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee7f79dae26293a005e2d72154562b2a8860461de645bc49b777bcbc95c8c67->enter($__internal_fee7f79dae26293a005e2d72154562b2a8860461de645bc49b777bcbc95c8c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous pouvez ajouter une annonce. Merci d'y joindre une description d'au moins ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "html", null, true);
        echo " caractères.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_fee7f79dae26293a005e2d72154562b2a8860461de645bc49b777bcbc95c8c67->leave($__internal_fee7f79dae26293a005e2d72154562b2a8860461de645bc49b777bcbc95c8c67_prof);

        
        $__internal_b584d5ae0a0f307eaf4d2e271e84d074d11fbcf0db5fa2e137004f90c05ee15e->leave($__internal_b584d5ae0a0f307eaf4d2e271e84d074d11fbcf0db5fa2e137004f90c05ee15e_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  83 => 16,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous pouvez ajouter une annonce. Merci d'y joindre une description d'au moins {{min}} caractères.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "@OCPlatform/Advert/add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
