<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_f8eec5f5fd7893156ac256c570a14a27c00ed62fdc7e8fa8e63b439e78694109 extends Twig_Template
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
        $__internal_dd14e201b07b11869b37cc06754d619ff76e68b00dad56763c11d95e594d5f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd14e201b07b11869b37cc06754d619ff76e68b00dad56763c11d95e594d5f80->enter($__internal_dd14e201b07b11869b37cc06754d619ff76e68b00dad56763c11d95e594d5f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_3b059dd882e2be02f46a877d79bf0c16bf9a116247d13170493bef0bfe887752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b059dd882e2be02f46a877d79bf0c16bf9a116247d13170493bef0bfe887752->enter($__internal_3b059dd882e2be02f46a877d79bf0c16bf9a116247d13170493bef0bfe887752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd14e201b07b11869b37cc06754d619ff76e68b00dad56763c11d95e594d5f80->leave($__internal_dd14e201b07b11869b37cc06754d619ff76e68b00dad56763c11d95e594d5f80_prof);

        
        $__internal_3b059dd882e2be02f46a877d79bf0c16bf9a116247d13170493bef0bfe887752->leave($__internal_3b059dd882e2be02f46a877d79bf0c16bf9a116247d13170493bef0bfe887752_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_019d83aa3f09c982c54009a02c9fb877c709764a79f0571e42edf64d70cf6659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019d83aa3f09c982c54009a02c9fb877c709764a79f0571e42edf64d70cf6659->enter($__internal_019d83aa3f09c982c54009a02c9fb877c709764a79f0571e42edf64d70cf6659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fc9fdd85e97867c0dd5227d22dc304e9cf9de4db702ac10b68dd7beaa765c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc9fdd85e97867c0dd5227d22dc304e9cf9de4db702ac10b68dd7beaa765c47->enter($__internal_8fc9fdd85e97867c0dd5227d22dc304e9cf9de4db702ac10b68dd7beaa765c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8fc9fdd85e97867c0dd5227d22dc304e9cf9de4db702ac10b68dd7beaa765c47->leave($__internal_8fc9fdd85e97867c0dd5227d22dc304e9cf9de4db702ac10b68dd7beaa765c47_prof);

        
        $__internal_019d83aa3f09c982c54009a02c9fb877c709764a79f0571e42edf64d70cf6659->leave($__internal_019d83aa3f09c982c54009a02c9fb877c709764a79f0571e42edf64d70cf6659_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3dd5d981b86b22c32815fe890e005a553e32fa7cd9a6217502d5d58c47ae7bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd5d981b86b22c32815fe890e005a553e32fa7cd9a6217502d5d58c47ae7bc8->enter($__internal_3dd5d981b86b22c32815fe890e005a553e32fa7cd9a6217502d5d58c47ae7bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_80390bd8a850136687577607fc13c6278028901fa7ff1dbcd13e490d4417dd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80390bd8a850136687577607fc13c6278028901fa7ff1dbcd13e490d4417dd78->enter($__internal_80390bd8a850136687577607fc13c6278028901fa7ff1dbcd13e490d4417dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_80390bd8a850136687577607fc13c6278028901fa7ff1dbcd13e490d4417dd78->leave($__internal_80390bd8a850136687577607fc13c6278028901fa7ff1dbcd13e490d4417dd78_prof);

        
        $__internal_3dd5d981b86b22c32815fe890e005a553e32fa7cd9a6217502d5d58c47ae7bc8->leave($__internal_3dd5d981b86b22c32815fe890e005a553e32fa7cd9a6217502d5d58c47ae7bc8_prof);

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

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
