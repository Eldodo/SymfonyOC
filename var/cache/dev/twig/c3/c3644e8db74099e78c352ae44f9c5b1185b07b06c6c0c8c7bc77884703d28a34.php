<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b59dc6c72091c9c852636259a4a7e537fd79d7b5f22ac2166e2ba6acd0f2df3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9ada782f5ffe334efcb0d1891b777d9d944c71d95ec8fcda3aa30d82c736b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ada782f5ffe334efcb0d1891b777d9d944c71d95ec8fcda3aa30d82c736b5c->enter($__internal_e9ada782f5ffe334efcb0d1891b777d9d944c71d95ec8fcda3aa30d82c736b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_49be01220492dfe357d665e527377396652c499ce09d7828b15431dee3d63e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49be01220492dfe357d665e527377396652c499ce09d7828b15431dee3d63e3c->enter($__internal_49be01220492dfe357d665e527377396652c499ce09d7828b15431dee3d63e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ada782f5ffe334efcb0d1891b777d9d944c71d95ec8fcda3aa30d82c736b5c->leave($__internal_e9ada782f5ffe334efcb0d1891b777d9d944c71d95ec8fcda3aa30d82c736b5c_prof);

        
        $__internal_49be01220492dfe357d665e527377396652c499ce09d7828b15431dee3d63e3c->leave($__internal_49be01220492dfe357d665e527377396652c499ce09d7828b15431dee3d63e3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df936cbbc652f6917f5386e1f8d5c1a94e8730fe66bd0fb24c04579627c2e763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df936cbbc652f6917f5386e1f8d5c1a94e8730fe66bd0fb24c04579627c2e763->enter($__internal_df936cbbc652f6917f5386e1f8d5c1a94e8730fe66bd0fb24c04579627c2e763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8308be1f3a53e5a32df962ddff66c5290127ef6af2bbad813045873696d1a652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8308be1f3a53e5a32df962ddff66c5290127ef6af2bbad813045873696d1a652->enter($__internal_8308be1f3a53e5a32df962ddff66c5290127ef6af2bbad813045873696d1a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8308be1f3a53e5a32df962ddff66c5290127ef6af2bbad813045873696d1a652->leave($__internal_8308be1f3a53e5a32df962ddff66c5290127ef6af2bbad813045873696d1a652_prof);

        
        $__internal_df936cbbc652f6917f5386e1f8d5c1a94e8730fe66bd0fb24c04579627c2e763->leave($__internal_df936cbbc652f6917f5386e1f8d5c1a94e8730fe66bd0fb24c04579627c2e763_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_553490b8bbc2ec90bc4ddfe546cf23da7a2f5627e269bd809bb3805603bf0fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553490b8bbc2ec90bc4ddfe546cf23da7a2f5627e269bd809bb3805603bf0fd7->enter($__internal_553490b8bbc2ec90bc4ddfe546cf23da7a2f5627e269bd809bb3805603bf0fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_095730d3c4b034b8682863f7577f0a22cfde77dfa5a4455ac42050760e5a77b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095730d3c4b034b8682863f7577f0a22cfde77dfa5a4455ac42050760e5a77b1->enter($__internal_095730d3c4b034b8682863f7577f0a22cfde77dfa5a4455ac42050760e5a77b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_095730d3c4b034b8682863f7577f0a22cfde77dfa5a4455ac42050760e5a77b1->leave($__internal_095730d3c4b034b8682863f7577f0a22cfde77dfa5a4455ac42050760e5a77b1_prof);

        
        $__internal_553490b8bbc2ec90bc4ddfe546cf23da7a2f5627e269bd809bb3805603bf0fd7->leave($__internal_553490b8bbc2ec90bc4ddfe546cf23da7a2f5627e269bd809bb3805603bf0fd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
