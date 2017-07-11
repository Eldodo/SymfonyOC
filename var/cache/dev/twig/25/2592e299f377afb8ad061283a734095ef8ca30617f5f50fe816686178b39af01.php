<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_0a94cf72aa308d85a07bf3ba4da8ea0d2d784ebc90795f2ed92ab7bfdbcec41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_24e1870247a94378513a7f25f8e1c711b02aa35d2f55ae4e0e850ef9b7b72b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e1870247a94378513a7f25f8e1c711b02aa35d2f55ae4e0e850ef9b7b72b7e->enter($__internal_24e1870247a94378513a7f25f8e1c711b02aa35d2f55ae4e0e850ef9b7b72b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_3cc1dcbf3f5e4a4e8b251af5766963f0c273b88f420554ca59916192056b97d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc1dcbf3f5e4a4e8b251af5766963f0c273b88f420554ca59916192056b97d0->enter($__internal_3cc1dcbf3f5e4a4e8b251af5766963f0c273b88f420554ca59916192056b97d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e1870247a94378513a7f25f8e1c711b02aa35d2f55ae4e0e850ef9b7b72b7e->leave($__internal_24e1870247a94378513a7f25f8e1c711b02aa35d2f55ae4e0e850ef9b7b72b7e_prof);

        
        $__internal_3cc1dcbf3f5e4a4e8b251af5766963f0c273b88f420554ca59916192056b97d0->leave($__internal_3cc1dcbf3f5e4a4e8b251af5766963f0c273b88f420554ca59916192056b97d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43833274701e74a7a10c5e283b0da95faa9606adb50906cfc5806d09966498a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43833274701e74a7a10c5e283b0da95faa9606adb50906cfc5806d09966498a7->enter($__internal_43833274701e74a7a10c5e283b0da95faa9606adb50906cfc5806d09966498a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af5498eedecc9fbafd99835c232022f66eaa6609fcd51636554aabbde4ac75fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5498eedecc9fbafd99835c232022f66eaa6609fcd51636554aabbde4ac75fc->enter($__internal_af5498eedecc9fbafd99835c232022f66eaa6609fcd51636554aabbde4ac75fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af5498eedecc9fbafd99835c232022f66eaa6609fcd51636554aabbde4ac75fc->leave($__internal_af5498eedecc9fbafd99835c232022f66eaa6609fcd51636554aabbde4ac75fc_prof);

        
        $__internal_43833274701e74a7a10c5e283b0da95faa9606adb50906cfc5806d09966498a7->leave($__internal_43833274701e74a7a10c5e283b0da95faa9606adb50906cfc5806d09966498a7_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f50551e1880dd652f93daa214417ed758490f8d4bec65ad98beda48534afd016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50551e1880dd652f93daa214417ed758490f8d4bec65ad98beda48534afd016->enter($__internal_f50551e1880dd652f93daa214417ed758490f8d4bec65ad98beda48534afd016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4c38788a0a1762d1c31c81eb1d4bc62697d2aff00cd0afc8eac11c974a56cdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c38788a0a1762d1c31c81eb1d4bc62697d2aff00cd0afc8eac11c974a56cdcf->enter($__internal_4c38788a0a1762d1c31c81eb1d4bc62697d2aff00cd0afc8eac11c974a56cdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_4c38788a0a1762d1c31c81eb1d4bc62697d2aff00cd0afc8eac11c974a56cdcf->leave($__internal_4c38788a0a1762d1c31c81eb1d4bc62697d2aff00cd0afc8eac11c974a56cdcf_prof);

        
        $__internal_f50551e1880dd652f93daa214417ed758490f8d4bec65ad98beda48534afd016->leave($__internal_f50551e1880dd652f93daa214417ed758490f8d4bec65ad98beda48534afd016_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
