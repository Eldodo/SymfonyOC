<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_5f309b7abd17ae932f4e27939c1f7e95c48898300575b4cd976d89872ee05518 extends Twig_Template
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
        $__internal_641ae68d040700d24e90213e8863787c909b8f1de2baae1660febf20fb177a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641ae68d040700d24e90213e8863787c909b8f1de2baae1660febf20fb177a52->enter($__internal_641ae68d040700d24e90213e8863787c909b8f1de2baae1660febf20fb177a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_17f1b4c469a878023a999e3ef23dc10927f1f020360d126cff60de65ffcb5233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f1b4c469a878023a999e3ef23dc10927f1f020360d126cff60de65ffcb5233->enter($__internal_17f1b4c469a878023a999e3ef23dc10927f1f020360d126cff60de65ffcb5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641ae68d040700d24e90213e8863787c909b8f1de2baae1660febf20fb177a52->leave($__internal_641ae68d040700d24e90213e8863787c909b8f1de2baae1660febf20fb177a52_prof);

        
        $__internal_17f1b4c469a878023a999e3ef23dc10927f1f020360d126cff60de65ffcb5233->leave($__internal_17f1b4c469a878023a999e3ef23dc10927f1f020360d126cff60de65ffcb5233_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38f1fc20db85aa9548aebf3e3be8d086bf65e9b7e090e34d27e93e348b59de8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f1fc20db85aa9548aebf3e3be8d086bf65e9b7e090e34d27e93e348b59de8a->enter($__internal_38f1fc20db85aa9548aebf3e3be8d086bf65e9b7e090e34d27e93e348b59de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4b080f661d5b6a7323d424740c6d01bb0028c714b045c542795a26d73a5f737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b080f661d5b6a7323d424740c6d01bb0028c714b045c542795a26d73a5f737->enter($__internal_d4b080f661d5b6a7323d424740c6d01bb0028c714b045c542795a26d73a5f737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d4b080f661d5b6a7323d424740c6d01bb0028c714b045c542795a26d73a5f737->leave($__internal_d4b080f661d5b6a7323d424740c6d01bb0028c714b045c542795a26d73a5f737_prof);

        
        $__internal_38f1fc20db85aa9548aebf3e3be8d086bf65e9b7e090e34d27e93e348b59de8a->leave($__internal_38f1fc20db85aa9548aebf3e3be8d086bf65e9b7e090e34d27e93e348b59de8a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d23b70431aba1447255f301181ed51092c4d1554647172cc5d2f77a2071119aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23b70431aba1447255f301181ed51092c4d1554647172cc5d2f77a2071119aa->enter($__internal_d23b70431aba1447255f301181ed51092c4d1554647172cc5d2f77a2071119aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_054b26542cfad5c3fcd338d5bb529ce982f03e6f05a3e5dbce2caf8fc70c3077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054b26542cfad5c3fcd338d5bb529ce982f03e6f05a3e5dbce2caf8fc70c3077->enter($__internal_054b26542cfad5c3fcd338d5bb529ce982f03e6f05a3e5dbce2caf8fc70c3077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_054b26542cfad5c3fcd338d5bb529ce982f03e6f05a3e5dbce2caf8fc70c3077->leave($__internal_054b26542cfad5c3fcd338d5bb529ce982f03e6f05a3e5dbce2caf8fc70c3077_prof);

        
        $__internal_d23b70431aba1447255f301181ed51092c4d1554647172cc5d2f77a2071119aa->leave($__internal_d23b70431aba1447255f301181ed51092c4d1554647172cc5d2f77a2071119aa_prof);

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
