<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_3ca975b46a053a6d1c2df58c1630340e56907e9f47d6acab5de7f8863a461c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_446ac9179a03f3aa360d09276dad217ab0b4c71c219050b788a76b4af747de76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446ac9179a03f3aa360d09276dad217ab0b4c71c219050b788a76b4af747de76->enter($__internal_446ac9179a03f3aa360d09276dad217ab0b4c71c219050b788a76b4af747de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_fd7e763cd03eb593d759ba7bacfabb1e559734bc3cbc66758590b50edabeaaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7e763cd03eb593d759ba7bacfabb1e559734bc3cbc66758590b50edabeaaef->enter($__internal_fd7e763cd03eb593d759ba7bacfabb1e559734bc3cbc66758590b50edabeaaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446ac9179a03f3aa360d09276dad217ab0b4c71c219050b788a76b4af747de76->leave($__internal_446ac9179a03f3aa360d09276dad217ab0b4c71c219050b788a76b4af747de76_prof);

        
        $__internal_fd7e763cd03eb593d759ba7bacfabb1e559734bc3cbc66758590b50edabeaaef->leave($__internal_fd7e763cd03eb593d759ba7bacfabb1e559734bc3cbc66758590b50edabeaaef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90cec8fd86114d1db4299bcb4a25d9b5dfa54e0ae51d0055c49855daf33231a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cec8fd86114d1db4299bcb4a25d9b5dfa54e0ae51d0055c49855daf33231a2->enter($__internal_90cec8fd86114d1db4299bcb4a25d9b5dfa54e0ae51d0055c49855daf33231a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da469f94b8b5ebb41cc9ad410b7439003acc8f5df79464fd8702b9eb805562cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da469f94b8b5ebb41cc9ad410b7439003acc8f5df79464fd8702b9eb805562cd->enter($__internal_da469f94b8b5ebb41cc9ad410b7439003acc8f5df79464fd8702b9eb805562cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_da469f94b8b5ebb41cc9ad410b7439003acc8f5df79464fd8702b9eb805562cd->leave($__internal_da469f94b8b5ebb41cc9ad410b7439003acc8f5df79464fd8702b9eb805562cd_prof);

        
        $__internal_90cec8fd86114d1db4299bcb4a25d9b5dfa54e0ae51d0055c49855daf33231a2->leave($__internal_90cec8fd86114d1db4299bcb4a25d9b5dfa54e0ae51d0055c49855daf33231a2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0d597dd89386cfb03cfdf0e0e05356ee9e4d86a1834441a510b3de0ae3a03999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d597dd89386cfb03cfdf0e0e05356ee9e4d86a1834441a510b3de0ae3a03999->enter($__internal_0d597dd89386cfb03cfdf0e0e05356ee9e4d86a1834441a510b3de0ae3a03999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_9803fbdf0025784dcbb015267ce1da02f90d2901cdfe53ffa98c623023d0759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9803fbdf0025784dcbb015267ce1da02f90d2901cdfe53ffa98c623023d0759a->enter($__internal_9803fbdf0025784dcbb015267ce1da02f90d2901cdfe53ffa98c623023d0759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_9803fbdf0025784dcbb015267ce1da02f90d2901cdfe53ffa98c623023d0759a->leave($__internal_9803fbdf0025784dcbb015267ce1da02f90d2901cdfe53ffa98c623023d0759a_prof);

        
        $__internal_0d597dd89386cfb03cfdf0e0e05356ee9e4d86a1834441a510b3de0ae3a03999->leave($__internal_0d597dd89386cfb03cfdf0e0e05356ee9e4d86a1834441a510b3de0ae3a03999_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  101 => 23,  94 => 19,  87 => 15,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
