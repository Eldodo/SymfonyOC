<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_cf07f9a6f773d930a80e9fc492cb2be79f4ab8ce4101bf622287e69cdda6e791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e49f1c3b410aef571b3eec1666d13e8a4b282d411d6892fdb03ba63df7f38c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e49f1c3b410aef571b3eec1666d13e8a4b282d411d6892fdb03ba63df7f38c7->enter($__internal_2e49f1c3b410aef571b3eec1666d13e8a4b282d411d6892fdb03ba63df7f38c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_2832d135817b3f5d1572fd8918cbb345c83fa1dcf75d5c3d534db7808b4fd3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2832d135817b3f5d1572fd8918cbb345c83fa1dcf75d5c3d534db7808b4fd3a4->enter($__internal_2832d135817b3f5d1572fd8918cbb345c83fa1dcf75d5c3d534db7808b4fd3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e49f1c3b410aef571b3eec1666d13e8a4b282d411d6892fdb03ba63df7f38c7->leave($__internal_2e49f1c3b410aef571b3eec1666d13e8a4b282d411d6892fdb03ba63df7f38c7_prof);

        
        $__internal_2832d135817b3f5d1572fd8918cbb345c83fa1dcf75d5c3d534db7808b4fd3a4->leave($__internal_2832d135817b3f5d1572fd8918cbb345c83fa1dcf75d5c3d534db7808b4fd3a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c5a7f14a78dcdf08f790b2a59402f33ac410a30bcec60d42c7503bf80c4c582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5a7f14a78dcdf08f790b2a59402f33ac410a30bcec60d42c7503bf80c4c582->enter($__internal_5c5a7f14a78dcdf08f790b2a59402f33ac410a30bcec60d42c7503bf80c4c582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31750db6209cfebcf1b7d830aef8a769f6e75f9bb5a4c0188f016e90f37a4b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31750db6209cfebcf1b7d830aef8a769f6e75f9bb5a4c0188f016e90f37a4b79->enter($__internal_31750db6209cfebcf1b7d830aef8a769f6e75f9bb5a4c0188f016e90f37a4b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_31750db6209cfebcf1b7d830aef8a769f6e75f9bb5a4c0188f016e90f37a4b79->leave($__internal_31750db6209cfebcf1b7d830aef8a769f6e75f9bb5a4c0188f016e90f37a4b79_prof);

        
        $__internal_5c5a7f14a78dcdf08f790b2a59402f33ac410a30bcec60d42c7503bf80c4c582->leave($__internal_5c5a7f14a78dcdf08f790b2a59402f33ac410a30bcec60d42c7503bf80c4c582_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8d517e9336576dc5e12b61bd9b14286612f5c654072f42194713bd3d4feb6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d517e9336576dc5e12b61bd9b14286612f5c654072f42194713bd3d4feb6e1->enter($__internal_a8d517e9336576dc5e12b61bd9b14286612f5c654072f42194713bd3d4feb6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cff24a6fb13020551578cf3572bc963ff3b580c4a595823b1c1e5a2946ba2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cff24a6fb13020551578cf3572bc963ff3b580c4a595823b1c1e5a2946ba2c9->enter($__internal_7cff24a6fb13020551578cf3572bc963ff3b580c4a595823b1c1e5a2946ba2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_7cff24a6fb13020551578cf3572bc963ff3b580c4a595823b1c1e5a2946ba2c9->leave($__internal_7cff24a6fb13020551578cf3572bc963ff3b580c4a595823b1c1e5a2946ba2c9_prof);

        
        $__internal_a8d517e9336576dc5e12b61bd9b14286612f5c654072f42194713bd3d4feb6e1->leave($__internal_a8d517e9336576dc5e12b61bd9b14286612f5c654072f42194713bd3d4feb6e1_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c03cd4aca41bd9db21644ebcaefc407cb90c2414d43f47c33ab970cbac9984a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03cd4aca41bd9db21644ebcaefc407cb90c2414d43f47c33ab970cbac9984a8->enter($__internal_c03cd4aca41bd9db21644ebcaefc407cb90c2414d43f47c33ab970cbac9984a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_3abaffd3a271a07adff59fe150552b19ac7a925d3796e4831ecbb29da019a4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abaffd3a271a07adff59fe150552b19ac7a925d3796e4831ecbb29da019a4d7->enter($__internal_3abaffd3a271a07adff59fe150552b19ac7a925d3796e4831ecbb29da019a4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_3abaffd3a271a07adff59fe150552b19ac7a925d3796e4831ecbb29da019a4d7->leave($__internal_3abaffd3a271a07adff59fe150552b19ac7a925d3796e4831ecbb29da019a4d7_prof);

        
        $__internal_c03cd4aca41bd9db21644ebcaefc407cb90c2414d43f47c33ab970cbac9984a8->leave($__internal_c03cd4aca41bd9db21644ebcaefc407cb90c2414d43f47c33ab970cbac9984a8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
