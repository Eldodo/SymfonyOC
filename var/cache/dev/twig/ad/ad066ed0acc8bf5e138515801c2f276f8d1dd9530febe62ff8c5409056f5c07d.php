<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_8f9fddc4b5df74e4c314aad9934ecdcd5c15ac54ccaf249c58a2fa09e388c280 extends Twig_Template
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
        $__internal_d430825e52c36dbaa7601eb314b3d44728209b5d3e83dd3939585b6b0ea17d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d430825e52c36dbaa7601eb314b3d44728209b5d3e83dd3939585b6b0ea17d8a->enter($__internal_d430825e52c36dbaa7601eb314b3d44728209b5d3e83dd3939585b6b0ea17d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_e25d7e8fd06578e2384333b0ddeea103079345bce0eb511e55eebbc63be5715f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25d7e8fd06578e2384333b0ddeea103079345bce0eb511e55eebbc63be5715f->enter($__internal_e25d7e8fd06578e2384333b0ddeea103079345bce0eb511e55eebbc63be5715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_d430825e52c36dbaa7601eb314b3d44728209b5d3e83dd3939585b6b0ea17d8a->leave($__internal_d430825e52c36dbaa7601eb314b3d44728209b5d3e83dd3939585b6b0ea17d8a_prof);

        
        $__internal_e25d7e8fd06578e2384333b0ddeea103079345bce0eb511e55eebbc63be5715f->leave($__internal_e25d7e8fd06578e2384333b0ddeea103079345bce0eb511e55eebbc63be5715f_prof);

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
