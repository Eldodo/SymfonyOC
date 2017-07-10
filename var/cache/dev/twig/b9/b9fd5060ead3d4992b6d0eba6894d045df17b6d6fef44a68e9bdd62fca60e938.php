<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f4745c1714d5cfd72c08b9e6624032ae6f9bbf0aa8baed3941b80db0bc0a4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_2f4ec6805844006f81566677ac99a921b99499e621014b26a17c0a90901f519a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4ec6805844006f81566677ac99a921b99499e621014b26a17c0a90901f519a->enter($__internal_2f4ec6805844006f81566677ac99a921b99499e621014b26a17c0a90901f519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_147d1a355ce15729ed4fa8d2e4b654ac74f7c10a227531f16493701215ab6252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147d1a355ce15729ed4fa8d2e4b654ac74f7c10a227531f16493701215ab6252->enter($__internal_147d1a355ce15729ed4fa8d2e4b654ac74f7c10a227531f16493701215ab6252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f4ec6805844006f81566677ac99a921b99499e621014b26a17c0a90901f519a->leave($__internal_2f4ec6805844006f81566677ac99a921b99499e621014b26a17c0a90901f519a_prof);

        
        $__internal_147d1a355ce15729ed4fa8d2e4b654ac74f7c10a227531f16493701215ab6252->leave($__internal_147d1a355ce15729ed4fa8d2e4b654ac74f7c10a227531f16493701215ab6252_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6391d2994880e41a4226a657d0362add23d396207f8fa6569ef9b0bff05218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6391d2994880e41a4226a657d0362add23d396207f8fa6569ef9b0bff05218->enter($__internal_2d6391d2994880e41a4226a657d0362add23d396207f8fa6569ef9b0bff05218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7dd4ef585be6627b865bac39348123f9e6eba0c5283e862364b502574532707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd4ef585be6627b865bac39348123f9e6eba0c5283e862364b502574532707d->enter($__internal_7dd4ef585be6627b865bac39348123f9e6eba0c5283e862364b502574532707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7dd4ef585be6627b865bac39348123f9e6eba0c5283e862364b502574532707d->leave($__internal_7dd4ef585be6627b865bac39348123f9e6eba0c5283e862364b502574532707d_prof);

        
        $__internal_2d6391d2994880e41a4226a657d0362add23d396207f8fa6569ef9b0bff05218->leave($__internal_2d6391d2994880e41a4226a657d0362add23d396207f8fa6569ef9b0bff05218_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e79a075d6e49f33b0995d8f2d8ab5acd2fcd31958b5104a342249f55428f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e79a075d6e49f33b0995d8f2d8ab5acd2fcd31958b5104a342249f55428f21->enter($__internal_40e79a075d6e49f33b0995d8f2d8ab5acd2fcd31958b5104a342249f55428f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bde40e0d7610fe8dd406820de1b28e7bdba1abe295f10634018811cbfe5b393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bde40e0d7610fe8dd406820de1b28e7bdba1abe295f10634018811cbfe5b393->enter($__internal_2bde40e0d7610fe8dd406820de1b28e7bdba1abe295f10634018811cbfe5b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bde40e0d7610fe8dd406820de1b28e7bdba1abe295f10634018811cbfe5b393->leave($__internal_2bde40e0d7610fe8dd406820de1b28e7bdba1abe295f10634018811cbfe5b393_prof);

        
        $__internal_40e79a075d6e49f33b0995d8f2d8ab5acd2fcd31958b5104a342249f55428f21->leave($__internal_40e79a075d6e49f33b0995d8f2d8ab5acd2fcd31958b5104a342249f55428f21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
