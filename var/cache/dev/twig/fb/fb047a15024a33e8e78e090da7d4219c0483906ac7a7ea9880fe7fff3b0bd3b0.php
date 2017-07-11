<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_50eaacc150bdbd80aaae7c4fdba9b8d5af2c937d0439b90a2b79815b32cd0773 extends Twig_Template
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
        $__internal_db1926437438b3417c31202c850b3a18a48d895e46a7dfe4cfcda253175861bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1926437438b3417c31202c850b3a18a48d895e46a7dfe4cfcda253175861bb->enter($__internal_db1926437438b3417c31202c850b3a18a48d895e46a7dfe4cfcda253175861bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_ed9ba8ff7f04f45a5072bf4bba2f6bace77be02bde5e246e328046c382651ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9ba8ff7f04f45a5072bf4bba2f6bace77be02bde5e246e328046c382651ffa->enter($__internal_ed9ba8ff7f04f45a5072bf4bba2f6bace77be02bde5e246e328046c382651ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1926437438b3417c31202c850b3a18a48d895e46a7dfe4cfcda253175861bb->leave($__internal_db1926437438b3417c31202c850b3a18a48d895e46a7dfe4cfcda253175861bb_prof);

        
        $__internal_ed9ba8ff7f04f45a5072bf4bba2f6bace77be02bde5e246e328046c382651ffa->leave($__internal_ed9ba8ff7f04f45a5072bf4bba2f6bace77be02bde5e246e328046c382651ffa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d98f46822e182deba8f5d198b24d371b5a3851502f523da5ed5791e1d6a52a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98f46822e182deba8f5d198b24d371b5a3851502f523da5ed5791e1d6a52a51->enter($__internal_d98f46822e182deba8f5d198b24d371b5a3851502f523da5ed5791e1d6a52a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1350621752686e8dbd39a16536f9de40dc3b1fa8c2926ac95291e52f3b417df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1350621752686e8dbd39a16536f9de40dc3b1fa8c2926ac95291e52f3b417df->enter($__internal_f1350621752686e8dbd39a16536f9de40dc3b1fa8c2926ac95291e52f3b417df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1350621752686e8dbd39a16536f9de40dc3b1fa8c2926ac95291e52f3b417df->leave($__internal_f1350621752686e8dbd39a16536f9de40dc3b1fa8c2926ac95291e52f3b417df_prof);

        
        $__internal_d98f46822e182deba8f5d198b24d371b5a3851502f523da5ed5791e1d6a52a51->leave($__internal_d98f46822e182deba8f5d198b24d371b5a3851502f523da5ed5791e1d6a52a51_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cd5c0fc93caf195247b677bac89eaddfa5e9185faeaafb79061240f730d41d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5c0fc93caf195247b677bac89eaddfa5e9185faeaafb79061240f730d41d23->enter($__internal_cd5c0fc93caf195247b677bac89eaddfa5e9185faeaafb79061240f730d41d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e3fea594b8ab5d41c7ad78df433fd4bd604aaa17b09254c60aac6c7a10c57638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fea594b8ab5d41c7ad78df433fd4bd604aaa17b09254c60aac6c7a10c57638->enter($__internal_e3fea594b8ab5d41c7ad78df433fd4bd604aaa17b09254c60aac6c7a10c57638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
    ";
        // line 25
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 26
            echo "      <p>
        Cette annonce est parue dans les catégories suivantes :
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </p>
    ";
        }
        // line 33
        echo "  <p>
    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_e3fea594b8ab5d41c7ad78df433fd4bd604aaa17b09254c60aac6c7a10c57638->leave($__internal_e3fea594b8ab5d41c7ad78df433fd4bd604aaa17b09254c60aac6c7a10c57638_prof);

        
        $__internal_cd5c0fc93caf195247b677bac89eaddfa5e9185faeaafb79061240f730d41d23->leave($__internal_cd5c0fc93caf195247b677bac89eaddfa5e9185faeaafb79061240f730d41d23_prof);

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
        return array (  174 => 42,  167 => 38,  160 => 34,  157 => 33,  153 => 31,  139 => 30,  133 => 29,  116 => 28,  112 => 26,  110 => 25,  105 => 23,  97 => 20,  93 => 19,  90 => 18,  82 => 16,  80 => 15,  76 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
    {% if not advert.categories.empty %}
      <p>
        Cette annonce est parue dans les catégories suivantes :
          {% for category in advert.categories %}
              {{ category.name }}{% if not loop.last %}, {% endif %}
          {% endfor %}
      </p>
    {% endif %}
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
