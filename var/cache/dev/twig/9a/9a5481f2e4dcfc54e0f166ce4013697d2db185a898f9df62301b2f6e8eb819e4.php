<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_1d1f1e13cfecd4a39a240bb35d3cb8846deb28579e89d4826e04f8c92db52600 extends Twig_Template
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
        $__internal_78bef7564886119ac3aa9c60e700776f6aa0a88aea155b1a96edd2c10d0220a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bef7564886119ac3aa9c60e700776f6aa0a88aea155b1a96edd2c10d0220a3->enter($__internal_78bef7564886119ac3aa9c60e700776f6aa0a88aea155b1a96edd2c10d0220a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_b11a7ccdcfeefa893f4f5e8bf89a14801597c297abd474a958d09dc67ecf7096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11a7ccdcfeefa893f4f5e8bf89a14801597c297abd474a958d09dc67ecf7096->enter($__internal_b11a7ccdcfeefa893f4f5e8bf89a14801597c297abd474a958d09dc67ecf7096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bef7564886119ac3aa9c60e700776f6aa0a88aea155b1a96edd2c10d0220a3->leave($__internal_78bef7564886119ac3aa9c60e700776f6aa0a88aea155b1a96edd2c10d0220a3_prof);

        
        $__internal_b11a7ccdcfeefa893f4f5e8bf89a14801597c297abd474a958d09dc67ecf7096->leave($__internal_b11a7ccdcfeefa893f4f5e8bf89a14801597c297abd474a958d09dc67ecf7096_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_557c34a1f84c2321c49a88b70074501d2b7c729bb0436f4bc1ba94d11e47963a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557c34a1f84c2321c49a88b70074501d2b7c729bb0436f4bc1ba94d11e47963a->enter($__internal_557c34a1f84c2321c49a88b70074501d2b7c729bb0436f4bc1ba94d11e47963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68862e3188d5a1b6cd3f52b77a321ae91b68ded78f8a0c0491a10e7a97ff5593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68862e3188d5a1b6cd3f52b77a321ae91b68ded78f8a0c0491a10e7a97ff5593->enter($__internal_68862e3188d5a1b6cd3f52b77a321ae91b68ded78f8a0c0491a10e7a97ff5593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68862e3188d5a1b6cd3f52b77a321ae91b68ded78f8a0c0491a10e7a97ff5593->leave($__internal_68862e3188d5a1b6cd3f52b77a321ae91b68ded78f8a0c0491a10e7a97ff5593_prof);

        
        $__internal_557c34a1f84c2321c49a88b70074501d2b7c729bb0436f4bc1ba94d11e47963a->leave($__internal_557c34a1f84c2321c49a88b70074501d2b7c729bb0436f4bc1ba94d11e47963a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7d443e3ca83af27ceefd34da63190bc6717de1c397b782fbf40f6f6274539888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d443e3ca83af27ceefd34da63190bc6717de1c397b782fbf40f6f6274539888->enter($__internal_7d443e3ca83af27ceefd34da63190bc6717de1c397b782fbf40f6f6274539888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_7f9074306f9307a5e4826a2591609c2751865136afe1fd305b26e2748e0b20fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9074306f9307a5e4826a2591609c2751865136afe1fd305b26e2748e0b20fa->enter($__internal_7f9074306f9307a5e4826a2591609c2751865136afe1fd305b26e2748e0b20fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_7f9074306f9307a5e4826a2591609c2751865136afe1fd305b26e2748e0b20fa->leave($__internal_7f9074306f9307a5e4826a2591609c2751865136afe1fd305b26e2748e0b20fa_prof);

        
        $__internal_7d443e3ca83af27ceefd34da63190bc6717de1c397b782fbf40f6f6274539888->leave($__internal_7d443e3ca83af27ceefd34da63190bc6717de1c397b782fbf40f6f6274539888_prof);

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

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
