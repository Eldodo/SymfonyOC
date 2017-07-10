<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1aadbcff202752c66319e5d55c70818dfbcd856abef7eade6bd45bb75ba0e77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_2038c27530ebf15ed6a4f8a54d14f298763dbb9f8b1d88cde6fefc3ccfffc03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2038c27530ebf15ed6a4f8a54d14f298763dbb9f8b1d88cde6fefc3ccfffc03c->enter($__internal_2038c27530ebf15ed6a4f8a54d14f298763dbb9f8b1d88cde6fefc3ccfffc03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a640ca86d32452e6730e5ba7fb460b56290095025b6addb6ff9eba1e32fd0b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a640ca86d32452e6730e5ba7fb460b56290095025b6addb6ff9eba1e32fd0b4b->enter($__internal_a640ca86d32452e6730e5ba7fb460b56290095025b6addb6ff9eba1e32fd0b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2038c27530ebf15ed6a4f8a54d14f298763dbb9f8b1d88cde6fefc3ccfffc03c->leave($__internal_2038c27530ebf15ed6a4f8a54d14f298763dbb9f8b1d88cde6fefc3ccfffc03c_prof);

        
        $__internal_a640ca86d32452e6730e5ba7fb460b56290095025b6addb6ff9eba1e32fd0b4b->leave($__internal_a640ca86d32452e6730e5ba7fb460b56290095025b6addb6ff9eba1e32fd0b4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b674a4fa9ecbe58c02c5a0ce664daf8fe882c81fdc69a54f1b144c77c0c53669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b674a4fa9ecbe58c02c5a0ce664daf8fe882c81fdc69a54f1b144c77c0c53669->enter($__internal_b674a4fa9ecbe58c02c5a0ce664daf8fe882c81fdc69a54f1b144c77c0c53669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_924772384628bd6241b09ca7d5c0a3f3521e48d3798abc63a254fc97f2bd3aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924772384628bd6241b09ca7d5c0a3f3521e48d3798abc63a254fc97f2bd3aea->enter($__internal_924772384628bd6241b09ca7d5c0a3f3521e48d3798abc63a254fc97f2bd3aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_924772384628bd6241b09ca7d5c0a3f3521e48d3798abc63a254fc97f2bd3aea->leave($__internal_924772384628bd6241b09ca7d5c0a3f3521e48d3798abc63a254fc97f2bd3aea_prof);

        
        $__internal_b674a4fa9ecbe58c02c5a0ce664daf8fe882c81fdc69a54f1b144c77c0c53669->leave($__internal_b674a4fa9ecbe58c02c5a0ce664daf8fe882c81fdc69a54f1b144c77c0c53669_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb07ebf242aa33a035328252ab1dc516f40a798bfb63d0116eb223cf7fe2a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb07ebf242aa33a035328252ab1dc516f40a798bfb63d0116eb223cf7fe2a09->enter($__internal_3eb07ebf242aa33a035328252ab1dc516f40a798bfb63d0116eb223cf7fe2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee12e1a0283a2b4217c20fd833969aafa2756e2319592bcd5a6b9d3d2ce324e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee12e1a0283a2b4217c20fd833969aafa2756e2319592bcd5a6b9d3d2ce324e1->enter($__internal_ee12e1a0283a2b4217c20fd833969aafa2756e2319592bcd5a6b9d3d2ce324e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee12e1a0283a2b4217c20fd833969aafa2756e2319592bcd5a6b9d3d2ce324e1->leave($__internal_ee12e1a0283a2b4217c20fd833969aafa2756e2319592bcd5a6b9d3d2ce324e1_prof);

        
        $__internal_3eb07ebf242aa33a035328252ab1dc516f40a798bfb63d0116eb223cf7fe2a09->leave($__internal_3eb07ebf242aa33a035328252ab1dc516f40a798bfb63d0116eb223cf7fe2a09_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
