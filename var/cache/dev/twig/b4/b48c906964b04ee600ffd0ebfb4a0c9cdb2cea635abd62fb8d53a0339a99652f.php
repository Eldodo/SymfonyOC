<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00f0f74f70f37ffe99edf32da5d30433001f890ec59660b91eb0d1b8a0006943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9454b65b77a29e46f7bf5db9e0cedcee822fbfd1274856952373809738678e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9454b65b77a29e46f7bf5db9e0cedcee822fbfd1274856952373809738678e09->enter($__internal_9454b65b77a29e46f7bf5db9e0cedcee822fbfd1274856952373809738678e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_22f38a9845b0f99a459b30e399967e8e58e7bdfe5a20960235960acf2dccda7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f38a9845b0f99a459b30e399967e8e58e7bdfe5a20960235960acf2dccda7d->enter($__internal_22f38a9845b0f99a459b30e399967e8e58e7bdfe5a20960235960acf2dccda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9454b65b77a29e46f7bf5db9e0cedcee822fbfd1274856952373809738678e09->leave($__internal_9454b65b77a29e46f7bf5db9e0cedcee822fbfd1274856952373809738678e09_prof);

        
        $__internal_22f38a9845b0f99a459b30e399967e8e58e7bdfe5a20960235960acf2dccda7d->leave($__internal_22f38a9845b0f99a459b30e399967e8e58e7bdfe5a20960235960acf2dccda7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c014ee5b7e4bcb71228d94048aa39489673481d8c0087b30900ee21bc33e246b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c014ee5b7e4bcb71228d94048aa39489673481d8c0087b30900ee21bc33e246b->enter($__internal_c014ee5b7e4bcb71228d94048aa39489673481d8c0087b30900ee21bc33e246b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99b7f68cce9d712bb00d19c38adcb8b37e2086d84eaee431edbd5a16f4e11b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b7f68cce9d712bb00d19c38adcb8b37e2086d84eaee431edbd5a16f4e11b9c->enter($__internal_99b7f68cce9d712bb00d19c38adcb8b37e2086d84eaee431edbd5a16f4e11b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99b7f68cce9d712bb00d19c38adcb8b37e2086d84eaee431edbd5a16f4e11b9c->leave($__internal_99b7f68cce9d712bb00d19c38adcb8b37e2086d84eaee431edbd5a16f4e11b9c_prof);

        
        $__internal_c014ee5b7e4bcb71228d94048aa39489673481d8c0087b30900ee21bc33e246b->leave($__internal_c014ee5b7e4bcb71228d94048aa39489673481d8c0087b30900ee21bc33e246b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_395c3c0fd1bee96f4705bdb08c2d7748c760d326967b4474deaed2465b28a232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395c3c0fd1bee96f4705bdb08c2d7748c760d326967b4474deaed2465b28a232->enter($__internal_395c3c0fd1bee96f4705bdb08c2d7748c760d326967b4474deaed2465b28a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fc11740916c7ad7598ed96712ced130f544f6d7b26d687ba80e2197d6eec4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc11740916c7ad7598ed96712ced130f544f6d7b26d687ba80e2197d6eec4d2->enter($__internal_8fc11740916c7ad7598ed96712ced130f544f6d7b26d687ba80e2197d6eec4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8fc11740916c7ad7598ed96712ced130f544f6d7b26d687ba80e2197d6eec4d2->leave($__internal_8fc11740916c7ad7598ed96712ced130f544f6d7b26d687ba80e2197d6eec4d2_prof);

        
        $__internal_395c3c0fd1bee96f4705bdb08c2d7748c760d326967b4474deaed2465b28a232->leave($__internal_395c3c0fd1bee96f4705bdb08c2d7748c760d326967b4474deaed2465b28a232_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
