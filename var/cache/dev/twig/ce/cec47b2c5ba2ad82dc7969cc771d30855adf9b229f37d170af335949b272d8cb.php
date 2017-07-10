<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_5e8e7b328efb630ab687ea2e98c5e89cdbf7fd2fbd45f491b7cfdb51b667adce extends Twig_Template
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
        $__internal_248a6983684fba740a29105bcb8743c208e89dce7be60af67e1e18ad693bb00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248a6983684fba740a29105bcb8743c208e89dce7be60af67e1e18ad693bb00e->enter($__internal_248a6983684fba740a29105bcb8743c208e89dce7be60af67e1e18ad693bb00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_6e925a0bc1e0ee364b1acd5a7050ecc9a6483c60d6c5a172fd254e8de353beaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e925a0bc1e0ee364b1acd5a7050ecc9a6483c60d6c5a172fd254e8de353beaa->enter($__internal_6e925a0bc1e0ee364b1acd5a7050ecc9a6483c60d6c5a172fd254e8de353beaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_248a6983684fba740a29105bcb8743c208e89dce7be60af67e1e18ad693bb00e->leave($__internal_248a6983684fba740a29105bcb8743c208e89dce7be60af67e1e18ad693bb00e_prof);

        
        $__internal_6e925a0bc1e0ee364b1acd5a7050ecc9a6483c60d6c5a172fd254e8de353beaa->leave($__internal_6e925a0bc1e0ee364b1acd5a7050ecc9a6483c60d6c5a172fd254e8de353beaa_prof);

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
