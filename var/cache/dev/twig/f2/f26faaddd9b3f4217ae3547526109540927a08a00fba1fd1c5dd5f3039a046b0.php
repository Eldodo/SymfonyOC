<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_de76f79cc2566a82f4647cdf97a9c0d3a6ba27d3a55859cf630af51b91ed16cd extends Twig_Template
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
        $__internal_24883f61f67464bda2556e916c3147a223d3715b16257d7871198402752d84bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24883f61f67464bda2556e916c3147a223d3715b16257d7871198402752d84bc->enter($__internal_24883f61f67464bda2556e916c3147a223d3715b16257d7871198402752d84bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_e74fea0ce715a8a299aabe5bf0dea1dff3a150f9d31eba6c3754286d408c275a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74fea0ce715a8a299aabe5bf0dea1dff3a150f9d31eba6c3754286d408c275a->enter($__internal_e74fea0ce715a8a299aabe5bf0dea1dff3a150f9d31eba6c3754286d408c275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24883f61f67464bda2556e916c3147a223d3715b16257d7871198402752d84bc->leave($__internal_24883f61f67464bda2556e916c3147a223d3715b16257d7871198402752d84bc_prof);

        
        $__internal_e74fea0ce715a8a299aabe5bf0dea1dff3a150f9d31eba6c3754286d408c275a->leave($__internal_e74fea0ce715a8a299aabe5bf0dea1dff3a150f9d31eba6c3754286d408c275a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f334157e4ee8da8fac2f775d385aa486497abd1ec236214b64c0ecbdcf18d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f334157e4ee8da8fac2f775d385aa486497abd1ec236214b64c0ecbdcf18d4c->enter($__internal_0f334157e4ee8da8fac2f775d385aa486497abd1ec236214b64c0ecbdcf18d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76888c94212e49f7446681bfdda9d9562a0f79266fb9f6e6e372edd84f770882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76888c94212e49f7446681bfdda9d9562a0f79266fb9f6e6e372edd84f770882->enter($__internal_76888c94212e49f7446681bfdda9d9562a0f79266fb9f6e6e372edd84f770882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_76888c94212e49f7446681bfdda9d9562a0f79266fb9f6e6e372edd84f770882->leave($__internal_76888c94212e49f7446681bfdda9d9562a0f79266fb9f6e6e372edd84f770882_prof);

        
        $__internal_0f334157e4ee8da8fac2f775d385aa486497abd1ec236214b64c0ecbdcf18d4c->leave($__internal_0f334157e4ee8da8fac2f775d385aa486497abd1ec236214b64c0ecbdcf18d4c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_844bb7e1f44f7baa33499aa9f876b8dec71be21d5965aee9b5a7ba50e767c9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844bb7e1f44f7baa33499aa9f876b8dec71be21d5965aee9b5a7ba50e767c9d4->enter($__internal_844bb7e1f44f7baa33499aa9f876b8dec71be21d5965aee9b5a7ba50e767c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c642aa34e38585f8d1b36a38f7f045ae8bb312c6df84fe47df5562f4c69aadca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c642aa34e38585f8d1b36a38f7f045ae8bb312c6df84fe47df5562f4c69aadca->enter($__internal_c642aa34e38585f8d1b36a38f7f045ae8bb312c6df84fe47df5562f4c69aadca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c642aa34e38585f8d1b36a38f7f045ae8bb312c6df84fe47df5562f4c69aadca->leave($__internal_c642aa34e38585f8d1b36a38f7f045ae8bb312c6df84fe47df5562f4c69aadca_prof);

        
        $__internal_844bb7e1f44f7baa33499aa9f876b8dec71be21d5965aee9b5a7ba50e767c9d4->leave($__internal_844bb7e1f44f7baa33499aa9f876b8dec71be21d5965aee9b5a7ba50e767c9d4_prof);

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

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
