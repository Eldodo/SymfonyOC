<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fa6056848138aeead5fff0a5aa5d68e6c2dd84bd00bf4b7f75ffcc782e427fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_17e983744c69580a05b0f842b784fa95d26a1ea4c01d8b93a69fbe50ef2120e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e983744c69580a05b0f842b784fa95d26a1ea4c01d8b93a69fbe50ef2120e6->enter($__internal_17e983744c69580a05b0f842b784fa95d26a1ea4c01d8b93a69fbe50ef2120e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3700893cf0306d91c077a1bcc5cf758634a32e19c5ec368e51053d07c95a85ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3700893cf0306d91c077a1bcc5cf758634a32e19c5ec368e51053d07c95a85ba->enter($__internal_3700893cf0306d91c077a1bcc5cf758634a32e19c5ec368e51053d07c95a85ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e983744c69580a05b0f842b784fa95d26a1ea4c01d8b93a69fbe50ef2120e6->leave($__internal_17e983744c69580a05b0f842b784fa95d26a1ea4c01d8b93a69fbe50ef2120e6_prof);

        
        $__internal_3700893cf0306d91c077a1bcc5cf758634a32e19c5ec368e51053d07c95a85ba->leave($__internal_3700893cf0306d91c077a1bcc5cf758634a32e19c5ec368e51053d07c95a85ba_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_406242720b1143697a01807a79f5398b5442674a40cc94be454b1c9a9b00dabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406242720b1143697a01807a79f5398b5442674a40cc94be454b1c9a9b00dabb->enter($__internal_406242720b1143697a01807a79f5398b5442674a40cc94be454b1c9a9b00dabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c85d346f0d3da8e5f656656878ff35286e5a3ea338d530bfa4c17bdcaa6b3ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85d346f0d3da8e5f656656878ff35286e5a3ea338d530bfa4c17bdcaa6b3ef7->enter($__internal_c85d346f0d3da8e5f656656878ff35286e5a3ea338d530bfa4c17bdcaa6b3ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c85d346f0d3da8e5f656656878ff35286e5a3ea338d530bfa4c17bdcaa6b3ef7->leave($__internal_c85d346f0d3da8e5f656656878ff35286e5a3ea338d530bfa4c17bdcaa6b3ef7_prof);

        
        $__internal_406242720b1143697a01807a79f5398b5442674a40cc94be454b1c9a9b00dabb->leave($__internal_406242720b1143697a01807a79f5398b5442674a40cc94be454b1c9a9b00dabb_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1f496618a8277f601bb0d0dcf1eda12cf00829fb4fe1a01616dcb6a8b0a4ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f496618a8277f601bb0d0dcf1eda12cf00829fb4fe1a01616dcb6a8b0a4ee0->enter($__internal_c1f496618a8277f601bb0d0dcf1eda12cf00829fb4fe1a01616dcb6a8b0a4ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d9bd2d017b2c2e56098f24b760b13866f7eb1e4ff79e542df980efc290b2bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9bd2d017b2c2e56098f24b760b13866f7eb1e4ff79e542df980efc290b2bbf->enter($__internal_7d9bd2d017b2c2e56098f24b760b13866f7eb1e4ff79e542df980efc290b2bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7d9bd2d017b2c2e56098f24b760b13866f7eb1e4ff79e542df980efc290b2bbf->leave($__internal_7d9bd2d017b2c2e56098f24b760b13866f7eb1e4ff79e542df980efc290b2bbf_prof);

        
        $__internal_c1f496618a8277f601bb0d0dcf1eda12cf00829fb4fe1a01616dcb6a8b0a4ee0->leave($__internal_c1f496618a8277f601bb0d0dcf1eda12cf00829fb4fe1a01616dcb6a8b0a4ee0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
