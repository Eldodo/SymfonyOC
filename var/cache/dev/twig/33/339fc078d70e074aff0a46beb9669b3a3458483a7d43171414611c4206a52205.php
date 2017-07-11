<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_0db26403741ecf1d76d7e52a45af73ad60629de63ed19a65c3181cca4d66a996 extends Twig_Template
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
        $__internal_184e88be4b64b7f9a3059c37f732963a3e1b6b4c13c5f08bf258aa534d66a852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184e88be4b64b7f9a3059c37f732963a3e1b6b4c13c5f08bf258aa534d66a852->enter($__internal_184e88be4b64b7f9a3059c37f732963a3e1b6b4c13c5f08bf258aa534d66a852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_61ac7a871cb564083eef9042a671d8b8267f640cd3673969b06531b275244f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ac7a871cb564083eef9042a671d8b8267f640cd3673969b06531b275244f19->enter($__internal_61ac7a871cb564083eef9042a671d8b8267f640cd3673969b06531b275244f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_184e88be4b64b7f9a3059c37f732963a3e1b6b4c13c5f08bf258aa534d66a852->leave($__internal_184e88be4b64b7f9a3059c37f732963a3e1b6b4c13c5f08bf258aa534d66a852_prof);

        
        $__internal_61ac7a871cb564083eef9042a671d8b8267f640cd3673969b06531b275244f19->leave($__internal_61ac7a871cb564083eef9042a671d8b8267f640cd3673969b06531b275244f19_prof);

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
</div>", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
