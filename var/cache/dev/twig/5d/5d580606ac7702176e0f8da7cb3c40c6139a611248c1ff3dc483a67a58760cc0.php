<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_381891c981c9ce4cdeb2e68fb9bbd8652f3dad17e7d594e7f4c812f2aa2ef5c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94cada518b0dd84f185877fe55efd92ff4a6d32ecf59c81cf277210bd545c99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cada518b0dd84f185877fe55efd92ff4a6d32ecf59c81cf277210bd545c99f->enter($__internal_94cada518b0dd84f185877fe55efd92ff4a6d32ecf59c81cf277210bd545c99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9097e0cf93e1871952507ec0b753c3f0eb66a85715ba73f6850e4920843b7d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9097e0cf93e1871952507ec0b753c3f0eb66a85715ba73f6850e4920843b7d34->enter($__internal_9097e0cf93e1871952507ec0b753c3f0eb66a85715ba73f6850e4920843b7d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94cada518b0dd84f185877fe55efd92ff4a6d32ecf59c81cf277210bd545c99f->leave($__internal_94cada518b0dd84f185877fe55efd92ff4a6d32ecf59c81cf277210bd545c99f_prof);

        
        $__internal_9097e0cf93e1871952507ec0b753c3f0eb66a85715ba73f6850e4920843b7d34->leave($__internal_9097e0cf93e1871952507ec0b753c3f0eb66a85715ba73f6850e4920843b7d34_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c686a6b5ce98f1a01a2e07a7e1048ef84ed23b5cdac2be39f0af80d8185dd849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c686a6b5ce98f1a01a2e07a7e1048ef84ed23b5cdac2be39f0af80d8185dd849->enter($__internal_c686a6b5ce98f1a01a2e07a7e1048ef84ed23b5cdac2be39f0af80d8185dd849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f07b89cf70f84b7564f73ea6e752f1dea08e8be9815046587621fcaf9a1aabe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07b89cf70f84b7564f73ea6e752f1dea08e8be9815046587621fcaf9a1aabe1->enter($__internal_f07b89cf70f84b7564f73ea6e752f1dea08e8be9815046587621fcaf9a1aabe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f07b89cf70f84b7564f73ea6e752f1dea08e8be9815046587621fcaf9a1aabe1->leave($__internal_f07b89cf70f84b7564f73ea6e752f1dea08e8be9815046587621fcaf9a1aabe1_prof);

        
        $__internal_c686a6b5ce98f1a01a2e07a7e1048ef84ed23b5cdac2be39f0af80d8185dd849->leave($__internal_c686a6b5ce98f1a01a2e07a7e1048ef84ed23b5cdac2be39f0af80d8185dd849_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3743eeefc7ba9a51345c1227f8201e9b353fe12f1b03d4053e268e482e4ba4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3743eeefc7ba9a51345c1227f8201e9b353fe12f1b03d4053e268e482e4ba4e2->enter($__internal_3743eeefc7ba9a51345c1227f8201e9b353fe12f1b03d4053e268e482e4ba4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67c6932fedee77fba09f7d244c576cf0583be534a7733f04f3ad0513c9ae9d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c6932fedee77fba09f7d244c576cf0583be534a7733f04f3ad0513c9ae9d6d->enter($__internal_67c6932fedee77fba09f7d244c576cf0583be534a7733f04f3ad0513c9ae9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_67c6932fedee77fba09f7d244c576cf0583be534a7733f04f3ad0513c9ae9d6d->leave($__internal_67c6932fedee77fba09f7d244c576cf0583be534a7733f04f3ad0513c9ae9d6d_prof);

        
        $__internal_3743eeefc7ba9a51345c1227f8201e9b353fe12f1b03d4053e268e482e4ba4e2->leave($__internal_3743eeefc7ba9a51345c1227f8201e9b353fe12f1b03d4053e268e482e4ba4e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
