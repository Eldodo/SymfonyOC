<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_97674c6eb3a7abebb2ef37537a80b969dc723155782fb231c99aab07d391aa4c extends Twig_Template
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
        $__internal_b074124fd2ba60e5edc7461fe8bab8c28120ee942d1111bfed9eebeae93083f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b074124fd2ba60e5edc7461fe8bab8c28120ee942d1111bfed9eebeae93083f0->enter($__internal_b074124fd2ba60e5edc7461fe8bab8c28120ee942d1111bfed9eebeae93083f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_20bfb273b063f2c82e9ffe37da6a7d77616347320e8d735485e1491a1ed3995a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bfb273b063f2c82e9ffe37da6a7d77616347320e8d735485e1491a1ed3995a->enter($__internal_20bfb273b063f2c82e9ffe37da6a7d77616347320e8d735485e1491a1ed3995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b074124fd2ba60e5edc7461fe8bab8c28120ee942d1111bfed9eebeae93083f0->leave($__internal_b074124fd2ba60e5edc7461fe8bab8c28120ee942d1111bfed9eebeae93083f0_prof);

        
        $__internal_20bfb273b063f2c82e9ffe37da6a7d77616347320e8d735485e1491a1ed3995a->leave($__internal_20bfb273b063f2c82e9ffe37da6a7d77616347320e8d735485e1491a1ed3995a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae3267646e026e11049bf92baf967a025f07c0e56420c78b7ffb8defd90206c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3267646e026e11049bf92baf967a025f07c0e56420c78b7ffb8defd90206c2->enter($__internal_ae3267646e026e11049bf92baf967a025f07c0e56420c78b7ffb8defd90206c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3c03fc7a389dee493dece2e3031c966834b9dda3900bb69f710f7419c71c319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c03fc7a389dee493dece2e3031c966834b9dda3900bb69f710f7419c71c319->enter($__internal_c3c03fc7a389dee493dece2e3031c966834b9dda3900bb69f710f7419c71c319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c3c03fc7a389dee493dece2e3031c966834b9dda3900bb69f710f7419c71c319->leave($__internal_c3c03fc7a389dee493dece2e3031c966834b9dda3900bb69f710f7419c71c319_prof);

        
        $__internal_ae3267646e026e11049bf92baf967a025f07c0e56420c78b7ffb8defd90206c2->leave($__internal_ae3267646e026e11049bf92baf967a025f07c0e56420c78b7ffb8defd90206c2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6d006c464ccea19e4b5459e2d5001f8205a57b31652d98ae242f8e43f6c9e9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d006c464ccea19e4b5459e2d5001f8205a57b31652d98ae242f8e43f6c9e9b4->enter($__internal_6d006c464ccea19e4b5459e2d5001f8205a57b31652d98ae242f8e43f6c9e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_9dcf7e1e22152c455d4a66e86696b72073e7b1166a303e125d306b636bead547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcf7e1e22152c455d4a66e86696b72073e7b1166a303e125d306b636bead547->enter($__internal_9dcf7e1e22152c455d4a66e86696b72073e7b1166a303e125d306b636bead547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_9dcf7e1e22152c455d4a66e86696b72073e7b1166a303e125d306b636bead547->leave($__internal_9dcf7e1e22152c455d4a66e86696b72073e7b1166a303e125d306b636bead547_prof);

        
        $__internal_6d006c464ccea19e4b5459e2d5001f8205a57b31652d98ae242f8e43f6c9e9b4->leave($__internal_6d006c464ccea19e4b5459e2d5001f8205a57b31652d98ae242f8e43f6c9e9b4_prof);

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
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
