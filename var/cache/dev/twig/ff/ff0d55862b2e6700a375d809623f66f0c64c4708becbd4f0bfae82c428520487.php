<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_252c3e7cebfa80f9930b602bdeb2cc73e89dc78b9fba045000b279ecbedd7957 extends Twig_Template
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
        $__internal_af979e1e0c857e87147ae6990568006616bbb55cc09249166aaffd544852c1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af979e1e0c857e87147ae6990568006616bbb55cc09249166aaffd544852c1d2->enter($__internal_af979e1e0c857e87147ae6990568006616bbb55cc09249166aaffd544852c1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_32fb1521afeabf21129d3dbf259f71ac769f5ac680ca3ee38ee17000036703f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fb1521afeabf21129d3dbf259f71ac769f5ac680ca3ee38ee17000036703f3->enter($__internal_32fb1521afeabf21129d3dbf259f71ac769f5ac680ca3ee38ee17000036703f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af979e1e0c857e87147ae6990568006616bbb55cc09249166aaffd544852c1d2->leave($__internal_af979e1e0c857e87147ae6990568006616bbb55cc09249166aaffd544852c1d2_prof);

        
        $__internal_32fb1521afeabf21129d3dbf259f71ac769f5ac680ca3ee38ee17000036703f3->leave($__internal_32fb1521afeabf21129d3dbf259f71ac769f5ac680ca3ee38ee17000036703f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47485c3887d16017bd1b2bbe0b520c8d5fcfce5029c4e8564900bc1d0ccf09d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47485c3887d16017bd1b2bbe0b520c8d5fcfce5029c4e8564900bc1d0ccf09d4->enter($__internal_47485c3887d16017bd1b2bbe0b520c8d5fcfce5029c4e8564900bc1d0ccf09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13322c83e96779c6446ae9642a2f5a00d1669483f1340f26236d425378d2f551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13322c83e96779c6446ae9642a2f5a00d1669483f1340f26236d425378d2f551->enter($__internal_13322c83e96779c6446ae9642a2f5a00d1669483f1340f26236d425378d2f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_13322c83e96779c6446ae9642a2f5a00d1669483f1340f26236d425378d2f551->leave($__internal_13322c83e96779c6446ae9642a2f5a00d1669483f1340f26236d425378d2f551_prof);

        
        $__internal_47485c3887d16017bd1b2bbe0b520c8d5fcfce5029c4e8564900bc1d0ccf09d4->leave($__internal_47485c3887d16017bd1b2bbe0b520c8d5fcfce5029c4e8564900bc1d0ccf09d4_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_495b47d10458c80b57ba5ed38e43d3d269f22d272530cc8b2f23a85d4c206fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495b47d10458c80b57ba5ed38e43d3d269f22d272530cc8b2f23a85d4c206fa3->enter($__internal_495b47d10458c80b57ba5ed38e43d3d269f22d272530cc8b2f23a85d4c206fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c8bde514951df412a290ea0007da6f27aeedbbb1785fb82f67c895140e352d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bde514951df412a290ea0007da6f27aeedbbb1785fb82f67c895140e352d69->enter($__internal_c8bde514951df412a290ea0007da6f27aeedbbb1785fb82f67c895140e352d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "

";
        // line 13
        echo "
<div class =\"clearfix\">
";
        // line 15
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 16
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" class=\"pull-left\">
";
        }
        // line 18
        echo "
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
</div>
  <div class=\"well\">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_c8bde514951df412a290ea0007da6f27aeedbbb1785fb82f67c895140e352d69->leave($__internal_c8bde514951df412a290ea0007da6f27aeedbbb1785fb82f67c895140e352d69_prof);

        
        $__internal_495b47d10458c80b57ba5ed38e43d3d269f22d272530cc8b2f23a85d4c206fa3->leave($__internal_495b47d10458c80b57ba5ed38e43d3d269f22d272530cc8b2f23a85d4c206fa3_prof);

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
        return array (  126 => 35,  119 => 31,  112 => 27,  105 => 23,  97 => 20,  93 => 19,  90 => 18,  82 => 16,  80 => 15,  76 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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


{# On vérifie qu'une image soit bien associée à l'annonce #}

<div class =\"clearfix\">
{% if advert.image is not null %}
  <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\" class=\"pull-left\">
{% endif %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>
</div>
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

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
