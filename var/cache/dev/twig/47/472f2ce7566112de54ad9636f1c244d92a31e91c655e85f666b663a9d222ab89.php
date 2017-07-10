<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_746609e004475ea74f7e5cce98cc1765317ebb8a48a7de6abe4135ac02f75101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_51212a4d1fe66b9bb17205ac6190f0e5469a59b84a6ae92eca87961cf22e4d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51212a4d1fe66b9bb17205ac6190f0e5469a59b84a6ae92eca87961cf22e4d36->enter($__internal_51212a4d1fe66b9bb17205ac6190f0e5469a59b84a6ae92eca87961cf22e4d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_ed30b61490c4c132ff3e660366c8aa418ed4e7205e1ba667402eb126861e87ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed30b61490c4c132ff3e660366c8aa418ed4e7205e1ba667402eb126861e87ce->enter($__internal_ed30b61490c4c132ff3e660366c8aa418ed4e7205e1ba667402eb126861e87ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51212a4d1fe66b9bb17205ac6190f0e5469a59b84a6ae92eca87961cf22e4d36->leave($__internal_51212a4d1fe66b9bb17205ac6190f0e5469a59b84a6ae92eca87961cf22e4d36_prof);

        
        $__internal_ed30b61490c4c132ff3e660366c8aa418ed4e7205e1ba667402eb126861e87ce->leave($__internal_ed30b61490c4c132ff3e660366c8aa418ed4e7205e1ba667402eb126861e87ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_113b5e74cb39efe78c61bf8c7084812f51446b81bff2c75ce534b0dbcf30fea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113b5e74cb39efe78c61bf8c7084812f51446b81bff2c75ce534b0dbcf30fea4->enter($__internal_113b5e74cb39efe78c61bf8c7084812f51446b81bff2c75ce534b0dbcf30fea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4811c21c1e47678290b8de6c55d63bc42e2612ecf4c4b756b49700a01135d631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4811c21c1e47678290b8de6c55d63bc42e2612ecf4c4b756b49700a01135d631->enter($__internal_4811c21c1e47678290b8de6c55d63bc42e2612ecf4c4b756b49700a01135d631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4811c21c1e47678290b8de6c55d63bc42e2612ecf4c4b756b49700a01135d631->leave($__internal_4811c21c1e47678290b8de6c55d63bc42e2612ecf4c4b756b49700a01135d631_prof);

        
        $__internal_113b5e74cb39efe78c61bf8c7084812f51446b81bff2c75ce534b0dbcf30fea4->leave($__internal_113b5e74cb39efe78c61bf8c7084812f51446b81bff2c75ce534b0dbcf30fea4_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cd581fabdb473107252adc618af35d0c5f71dd487cee12ff5dec33ce7f61f6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd581fabdb473107252adc618af35d0c5f71dd487cee12ff5dec33ce7f61f6cc->enter($__internal_cd581fabdb473107252adc618af35d0c5f71dd487cee12ff5dec33ce7f61f6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b3edfe14b0071b4aa3cdab717be24e790d586a8ce295f16fa8ce63e8f175e641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3edfe14b0071b4aa3cdab717be24e790d586a8ce295f16fa8ce63e8f175e641->enter($__internal_b3edfe14b0071b4aa3cdab717be24e790d586a8ce295f16fa8ce63e8f175e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_b3edfe14b0071b4aa3cdab717be24e790d586a8ce295f16fa8ce63e8f175e641->leave($__internal_b3edfe14b0071b4aa3cdab717be24e790d586a8ce295f16fa8ce63e8f175e641_prof);

        
        $__internal_cd581fabdb473107252adc618af35d0c5f71dd487cee12ff5dec33ce7f61f6cc->leave($__internal_cd581fabdb473107252adc618af35d0c5f71dd487cee12ff5dec33ce7f61f6cc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
