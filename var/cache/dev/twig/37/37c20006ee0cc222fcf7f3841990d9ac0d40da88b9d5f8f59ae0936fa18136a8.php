<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_e452ee201cbc8ca62b518f5b29f4de95f8595bb1481690cbe8bd18490422ed73 extends Twig_Template
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
        $__internal_b2026f67ba5cbfb484b081e7e4a06d44285040d3597d8fbf64cff63a92272d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2026f67ba5cbfb484b081e7e4a06d44285040d3597d8fbf64cff63a92272d28->enter($__internal_b2026f67ba5cbfb484b081e7e4a06d44285040d3597d8fbf64cff63a92272d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_fee8a9eb10f3453e85f91f6a41c75e5c797a6f400d35e2078de4214b155216bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee8a9eb10f3453e85f91f6a41c75e5c797a6f400d35e2078de4214b155216bd->enter($__internal_fee8a9eb10f3453e85f91f6a41c75e5c797a6f400d35e2078de4214b155216bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2026f67ba5cbfb484b081e7e4a06d44285040d3597d8fbf64cff63a92272d28->leave($__internal_b2026f67ba5cbfb484b081e7e4a06d44285040d3597d8fbf64cff63a92272d28_prof);

        
        $__internal_fee8a9eb10f3453e85f91f6a41c75e5c797a6f400d35e2078de4214b155216bd->leave($__internal_fee8a9eb10f3453e85f91f6a41c75e5c797a6f400d35e2078de4214b155216bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc4b19dd5a0ae828af5e302f05cbdbdfa2612031ad72d46ad0d07e06a826e081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4b19dd5a0ae828af5e302f05cbdbdfa2612031ad72d46ad0d07e06a826e081->enter($__internal_dc4b19dd5a0ae828af5e302f05cbdbdfa2612031ad72d46ad0d07e06a826e081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73ce39e186b933beabb2b1ee8698b7510fa68683e00a8540c19454708ff6c963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ce39e186b933beabb2b1ee8698b7510fa68683e00a8540c19454708ff6c963->enter($__internal_73ce39e186b933beabb2b1ee8698b7510fa68683e00a8540c19454708ff6c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_73ce39e186b933beabb2b1ee8698b7510fa68683e00a8540c19454708ff6c963->leave($__internal_73ce39e186b933beabb2b1ee8698b7510fa68683e00a8540c19454708ff6c963_prof);

        
        $__internal_dc4b19dd5a0ae828af5e302f05cbdbdfa2612031ad72d46ad0d07e06a826e081->leave($__internal_dc4b19dd5a0ae828af5e302f05cbdbdfa2612031ad72d46ad0d07e06a826e081_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8bc869d477b9030e377f0b3fbff6cb36fff88b0a56f02c0c04571a64f36010a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc869d477b9030e377f0b3fbff6cb36fff88b0a56f02c0c04571a64f36010a2->enter($__internal_8bc869d477b9030e377f0b3fbff6cb36fff88b0a56f02c0c04571a64f36010a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f306de45e44695d67125c441a73966d82faaf105892b761f8ed4441fb2f1e3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f306de45e44695d67125c441a73966d82faaf105892b761f8ed4441fb2f1e3a4->enter($__internal_f306de45e44695d67125c441a73966d82faaf105892b761f8ed4441fb2f1e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_f306de45e44695d67125c441a73966d82faaf105892b761f8ed4441fb2f1e3a4->leave($__internal_f306de45e44695d67125c441a73966d82faaf105892b761f8ed4441fb2f1e3a4_prof);

        
        $__internal_8bc869d477b9030e377f0b3fbff6cb36fff88b0a56f02c0c04571a64f36010a2->leave($__internal_8bc869d477b9030e377f0b3fbff6cb36fff88b0a56f02c0c04571a64f36010a2_prof);

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

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
