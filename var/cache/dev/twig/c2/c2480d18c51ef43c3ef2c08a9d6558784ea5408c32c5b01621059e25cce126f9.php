<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_7c95baeaa60133c7d34de7c22807f2fe0425bfa77a8deda7c1bd31a602493001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be572e3ec73263bb191ff581bf9288dd7530c9b3c9b1949f919f7da6720f81d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be572e3ec73263bb191ff581bf9288dd7530c9b3c9b1949f919f7da6720f81d7->enter($__internal_be572e3ec73263bb191ff581bf9288dd7530c9b3c9b1949f919f7da6720f81d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_0551551dc099f3edc59f77476b6313cdb732fcf70251c3dab0a1a82a3f593d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0551551dc099f3edc59f77476b6313cdb732fcf70251c3dab0a1a82a3f593d39->enter($__internal_0551551dc099f3edc59f77476b6313cdb732fcf70251c3dab0a1a82a3f593d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_be572e3ec73263bb191ff581bf9288dd7530c9b3c9b1949f919f7da6720f81d7->leave($__internal_be572e3ec73263bb191ff581bf9288dd7530c9b3c9b1949f919f7da6720f81d7_prof);

        
        $__internal_0551551dc099f3edc59f77476b6313cdb732fcf70251c3dab0a1a82a3f593d39->leave($__internal_0551551dc099f3edc59f77476b6313cdb732fcf70251c3dab0a1a82a3f593d39_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
  Ici se trouvera le formulaire.
</div>", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
