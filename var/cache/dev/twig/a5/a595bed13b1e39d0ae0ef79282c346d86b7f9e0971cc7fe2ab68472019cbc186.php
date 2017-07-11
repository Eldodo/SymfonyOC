<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_d8398d3a90a8e93ef12f89d2c97251a32521e10dcafc7de3abf6d7825cd229ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_abbfd8ddc038cbe893d9679552d37d625d9e47c2db97c0c5f5e2f51f4bafecf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbfd8ddc038cbe893d9679552d37d625d9e47c2db97c0c5f5e2f51f4bafecf1->enter($__internal_abbfd8ddc038cbe893d9679552d37d625d9e47c2db97c0c5f5e2f51f4bafecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_dc1371cce837836308d16373b463b734dde5cc4820d42eaf7f3f73bbbff7877b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1371cce837836308d16373b463b734dde5cc4820d42eaf7f3f73bbbff7877b->enter($__internal_dc1371cce837836308d16373b463b734dde5cc4820d42eaf7f3f73bbbff7877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbfd8ddc038cbe893d9679552d37d625d9e47c2db97c0c5f5e2f51f4bafecf1->leave($__internal_abbfd8ddc038cbe893d9679552d37d625d9e47c2db97c0c5f5e2f51f4bafecf1_prof);

        
        $__internal_dc1371cce837836308d16373b463b734dde5cc4820d42eaf7f3f73bbbff7877b->leave($__internal_dc1371cce837836308d16373b463b734dde5cc4820d42eaf7f3f73bbbff7877b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aed33e1f2b93fc320980b48ecafd40c53f4dd53c8c8d5a2a0e7414d74386d972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed33e1f2b93fc320980b48ecafd40c53f4dd53c8c8d5a2a0e7414d74386d972->enter($__internal_aed33e1f2b93fc320980b48ecafd40c53f4dd53c8c8d5a2a0e7414d74386d972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2c7d42a54c313228b8988a517a332dd4b307a0cfb7cd38830d527bfa3853127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c7d42a54c313228b8988a517a332dd4b307a0cfb7cd38830d527bfa3853127->enter($__internal_a2c7d42a54c313228b8988a517a332dd4b307a0cfb7cd38830d527bfa3853127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2c7d42a54c313228b8988a517a332dd4b307a0cfb7cd38830d527bfa3853127->leave($__internal_a2c7d42a54c313228b8988a517a332dd4b307a0cfb7cd38830d527bfa3853127_prof);

        
        $__internal_aed33e1f2b93fc320980b48ecafd40c53f4dd53c8c8d5a2a0e7414d74386d972->leave($__internal_aed33e1f2b93fc320980b48ecafd40c53f4dd53c8c8d5a2a0e7414d74386d972_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ae98b23678d34ad59c5b864b3b999f757c1370fad266f099b33f60136a14e1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae98b23678d34ad59c5b864b3b999f757c1370fad266f099b33f60136a14e1ed->enter($__internal_ae98b23678d34ad59c5b864b3b999f757c1370fad266f099b33f60136a14e1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c0c77f19475699526fc079181f84bc8f81022612f36b394105ce54abff1cfbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c77f19475699526fc079181f84bc8f81022612f36b394105ce54abff1cfbd3->enter($__internal_c0c77f19475699526fc079181f84bc8f81022612f36b394105ce54abff1cfbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_c0c77f19475699526fc079181f84bc8f81022612f36b394105ce54abff1cfbd3->leave($__internal_c0c77f19475699526fc079181f84bc8f81022612f36b394105ce54abff1cfbd3_prof);

        
        $__internal_ae98b23678d34ad59c5b864b3b999f757c1370fad266f099b33f60136a14e1ed->leave($__internal_ae98b23678d34ad59c5b864b3b999f757c1370fad266f099b33f60136a14e1ed_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
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
    <a href=\"{{ path('oc_platform_view', {'id': id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
