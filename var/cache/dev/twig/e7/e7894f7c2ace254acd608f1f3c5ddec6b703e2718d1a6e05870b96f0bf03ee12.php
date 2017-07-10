<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d5b2570a7c154ac9b1bc38922697865f096fc5a99053fc27ed17a107e40f91ed extends Twig_Template
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
        $__internal_dc31c7f4a5d2b23874a61c5b95521d45d9c4263742cdbdf027c11c8c9b6dbc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc31c7f4a5d2b23874a61c5b95521d45d9c4263742cdbdf027c11c8c9b6dbc88->enter($__internal_dc31c7f4a5d2b23874a61c5b95521d45d9c4263742cdbdf027c11c8c9b6dbc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_7f629991a5fa3932f697f3b87bc98b79654f5f8aa9fae12e591a107574c52565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f629991a5fa3932f697f3b87bc98b79654f5f8aa9fae12e591a107574c52565->enter($__internal_7f629991a5fa3932f697f3b87bc98b79654f5f8aa9fae12e591a107574c52565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc31c7f4a5d2b23874a61c5b95521d45d9c4263742cdbdf027c11c8c9b6dbc88->leave($__internal_dc31c7f4a5d2b23874a61c5b95521d45d9c4263742cdbdf027c11c8c9b6dbc88_prof);

        
        $__internal_7f629991a5fa3932f697f3b87bc98b79654f5f8aa9fae12e591a107574c52565->leave($__internal_7f629991a5fa3932f697f3b87bc98b79654f5f8aa9fae12e591a107574c52565_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_960cbc02ded287fff83c2f478064d3247f37b9088a81b0fe21de7d671555aade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960cbc02ded287fff83c2f478064d3247f37b9088a81b0fe21de7d671555aade->enter($__internal_960cbc02ded287fff83c2f478064d3247f37b9088a81b0fe21de7d671555aade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c804800b4ba99966a199d7a7df2e777dec5cc9d3dddd42b3559663462150e85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c804800b4ba99966a199d7a7df2e777dec5cc9d3dddd42b3559663462150e85f->enter($__internal_c804800b4ba99966a199d7a7df2e777dec5cc9d3dddd42b3559663462150e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c804800b4ba99966a199d7a7df2e777dec5cc9d3dddd42b3559663462150e85f->leave($__internal_c804800b4ba99966a199d7a7df2e777dec5cc9d3dddd42b3559663462150e85f_prof);

        
        $__internal_960cbc02ded287fff83c2f478064d3247f37b9088a81b0fe21de7d671555aade->leave($__internal_960cbc02ded287fff83c2f478064d3247f37b9088a81b0fe21de7d671555aade_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_635ad42081e612e635a790d0ab9ba24d0b349a6ce831b8de9e6b3422014c10f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635ad42081e612e635a790d0ab9ba24d0b349a6ce831b8de9e6b3422014c10f8->enter($__internal_635ad42081e612e635a790d0ab9ba24d0b349a6ce831b8de9e6b3422014c10f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6c432ad47778892118cb66d400585fbb375e7cafec657e3151a3c1455bfcd79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c432ad47778892118cb66d400585fbb375e7cafec657e3151a3c1455bfcd79e->enter($__internal_6c432ad47778892118cb66d400585fbb375e7cafec657e3151a3c1455bfcd79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_6c432ad47778892118cb66d400585fbb375e7cafec657e3151a3c1455bfcd79e->leave($__internal_6c432ad47778892118cb66d400585fbb375e7cafec657e3151a3c1455bfcd79e_prof);

        
        $__internal_635ad42081e612e635a790d0ab9ba24d0b349a6ce831b8de9e6b3422014c10f8->leave($__internal_635ad42081e612e635a790d0ab9ba24d0b349a6ce831b8de9e6b3422014c10f8_prof);

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

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
