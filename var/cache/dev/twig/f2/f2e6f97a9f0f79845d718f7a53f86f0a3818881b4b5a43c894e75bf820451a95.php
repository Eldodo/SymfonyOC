<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_37a7e1e35fe5ac3aaac3df9c6e87247d859be30fc0e83b43c310496fad8d7f45 extends Twig_Template
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
        $__internal_6debd87f49c8dd8db318b9e1dae8c88ec9306e3748200ea6cc2ef010d8a6a59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6debd87f49c8dd8db318b9e1dae8c88ec9306e3748200ea6cc2ef010d8a6a59d->enter($__internal_6debd87f49c8dd8db318b9e1dae8c88ec9306e3748200ea6cc2ef010d8a6a59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_149df2e0612715fa55c138c993b8e8ad6fdd6bba4de41060b6d77b317c9cceb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149df2e0612715fa55c138c993b8e8ad6fdd6bba4de41060b6d77b317c9cceb3->enter($__internal_149df2e0612715fa55c138c993b8e8ad6fdd6bba4de41060b6d77b317c9cceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6debd87f49c8dd8db318b9e1dae8c88ec9306e3748200ea6cc2ef010d8a6a59d->leave($__internal_6debd87f49c8dd8db318b9e1dae8c88ec9306e3748200ea6cc2ef010d8a6a59d_prof);

        
        $__internal_149df2e0612715fa55c138c993b8e8ad6fdd6bba4de41060b6d77b317c9cceb3->leave($__internal_149df2e0612715fa55c138c993b8e8ad6fdd6bba4de41060b6d77b317c9cceb3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c120dd5bcc700c81f6d51f6895eee6b6ee326e173702967403e2f00af2ef4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c120dd5bcc700c81f6d51f6895eee6b6ee326e173702967403e2f00af2ef4f->enter($__internal_01c120dd5bcc700c81f6d51f6895eee6b6ee326e173702967403e2f00af2ef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9fc788fcb8ae58940c5e780dee648b233bf2db35535f93fdd8b7db0292ebbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fc788fcb8ae58940c5e780dee648b233bf2db35535f93fdd8b7db0292ebbbb->enter($__internal_e9fc788fcb8ae58940c5e780dee648b233bf2db35535f93fdd8b7db0292ebbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e9fc788fcb8ae58940c5e780dee648b233bf2db35535f93fdd8b7db0292ebbbb->leave($__internal_e9fc788fcb8ae58940c5e780dee648b233bf2db35535f93fdd8b7db0292ebbbb_prof);

        
        $__internal_01c120dd5bcc700c81f6d51f6895eee6b6ee326e173702967403e2f00af2ef4f->leave($__internal_01c120dd5bcc700c81f6d51f6895eee6b6ee326e173702967403e2f00af2ef4f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_39f16e1f8e726203c626dfe2624159ab49f088a3bd7849b4597afc7d73f68880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f16e1f8e726203c626dfe2624159ab49f088a3bd7849b4597afc7d73f68880->enter($__internal_39f16e1f8e726203c626dfe2624159ab49f088a3bd7849b4597afc7d73f68880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cecfe3f423db303ee8b98fc9ccfc4d426298e0d7292173263686ec6f829107a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecfe3f423db303ee8b98fc9ccfc4d426298e0d7292173263686ec6f829107a4->enter($__internal_cecfe3f423db303ee8b98fc9ccfc4d426298e0d7292173263686ec6f829107a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cecfe3f423db303ee8b98fc9ccfc4d426298e0d7292173263686ec6f829107a4->leave($__internal_cecfe3f423db303ee8b98fc9ccfc4d426298e0d7292173263686ec6f829107a4_prof);

        
        $__internal_39f16e1f8e726203c626dfe2624159ab49f088a3bd7849b4597afc7d73f68880->leave($__internal_39f16e1f8e726203c626dfe2624159ab49f088a3bd7849b4597afc7d73f68880_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1c34f22be8ca778ac3215d882fa6c70c8ced7b48bff14f4d85ec1aed6f034244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c34f22be8ca778ac3215d882fa6c70c8ced7b48bff14f4d85ec1aed6f034244->enter($__internal_1c34f22be8ca778ac3215d882fa6c70c8ced7b48bff14f4d85ec1aed6f034244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_788d5b39811b0602ce4df226ec8fe8e4f7b273b655ff29ba08be3d8cb167eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788d5b39811b0602ce4df226ec8fe8e4f7b273b655ff29ba08be3d8cb167eb6f->enter($__internal_788d5b39811b0602ce4df226ec8fe8e4f7b273b655ff29ba08be3d8cb167eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_788d5b39811b0602ce4df226ec8fe8e4f7b273b655ff29ba08be3d8cb167eb6f->leave($__internal_788d5b39811b0602ce4df226ec8fe8e4f7b273b655ff29ba08be3d8cb167eb6f_prof);

        
        $__internal_1c34f22be8ca778ac3215d882fa6c70c8ced7b48bff14f4d85ec1aed6f034244->leave($__internal_1c34f22be8ca778ac3215d882fa6c70c8ced7b48bff14f4d85ec1aed6f034244_prof);

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

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
