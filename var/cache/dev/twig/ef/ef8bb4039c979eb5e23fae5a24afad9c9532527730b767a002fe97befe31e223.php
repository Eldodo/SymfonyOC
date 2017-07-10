<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d3c3c330d5b3f1c98694b8737b1ae142600fa832521aa6953265dc33937df0e extends Twig_Template
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
        $__internal_f1f0c647307257971e7c90d51b9a374a07dea588d39ddd3b0cd46baaed8840b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f0c647307257971e7c90d51b9a374a07dea588d39ddd3b0cd46baaed8840b5->enter($__internal_f1f0c647307257971e7c90d51b9a374a07dea588d39ddd3b0cd46baaed8840b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_72fc6c50f923cc6b04026956709f88739061734c5aaaf3d412fa51ceebd5d11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fc6c50f923cc6b04026956709f88739061734c5aaaf3d412fa51ceebd5d11c->enter($__internal_72fc6c50f923cc6b04026956709f88739061734c5aaaf3d412fa51ceebd5d11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f0c647307257971e7c90d51b9a374a07dea588d39ddd3b0cd46baaed8840b5->leave($__internal_f1f0c647307257971e7c90d51b9a374a07dea588d39ddd3b0cd46baaed8840b5_prof);

        
        $__internal_72fc6c50f923cc6b04026956709f88739061734c5aaaf3d412fa51ceebd5d11c->leave($__internal_72fc6c50f923cc6b04026956709f88739061734c5aaaf3d412fa51ceebd5d11c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_35c2e0498d70e324c7191be51a75d2c563085d406196b8e2bd7d8f7330ad225a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c2e0498d70e324c7191be51a75d2c563085d406196b8e2bd7d8f7330ad225a->enter($__internal_35c2e0498d70e324c7191be51a75d2c563085d406196b8e2bd7d8f7330ad225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7ead4f5935955da97f4a6ac043df9c4e6a9174e3eefa0a3f38fb53899430d571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ead4f5935955da97f4a6ac043df9c4e6a9174e3eefa0a3f38fb53899430d571->enter($__internal_7ead4f5935955da97f4a6ac043df9c4e6a9174e3eefa0a3f38fb53899430d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7ead4f5935955da97f4a6ac043df9c4e6a9174e3eefa0a3f38fb53899430d571->leave($__internal_7ead4f5935955da97f4a6ac043df9c4e6a9174e3eefa0a3f38fb53899430d571_prof);

        
        $__internal_35c2e0498d70e324c7191be51a75d2c563085d406196b8e2bd7d8f7330ad225a->leave($__internal_35c2e0498d70e324c7191be51a75d2c563085d406196b8e2bd7d8f7330ad225a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0217d75004c4d0a6f6ba9c1a1348ad981680a7e7827490cd924f0b95a423da1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0217d75004c4d0a6f6ba9c1a1348ad981680a7e7827490cd924f0b95a423da1b->enter($__internal_0217d75004c4d0a6f6ba9c1a1348ad981680a7e7827490cd924f0b95a423da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98ee9f2c084713475a8827a86c0176d50c8852aad9e44a6a6cf3105e84b95252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ee9f2c084713475a8827a86c0176d50c8852aad9e44a6a6cf3105e84b95252->enter($__internal_98ee9f2c084713475a8827a86c0176d50c8852aad9e44a6a6cf3105e84b95252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_98ee9f2c084713475a8827a86c0176d50c8852aad9e44a6a6cf3105e84b95252->leave($__internal_98ee9f2c084713475a8827a86c0176d50c8852aad9e44a6a6cf3105e84b95252_prof);

        
        $__internal_0217d75004c4d0a6f6ba9c1a1348ad981680a7e7827490cd924f0b95a423da1b->leave($__internal_0217d75004c4d0a6f6ba9c1a1348ad981680a7e7827490cd924f0b95a423da1b_prof);

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
