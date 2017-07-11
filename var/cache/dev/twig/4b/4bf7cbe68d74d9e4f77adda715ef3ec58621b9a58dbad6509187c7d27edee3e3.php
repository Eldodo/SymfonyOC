<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_85b555113ae4d252c00beaeaed9569c3879ec276ab2350707bfdd6f5a301d468 extends Twig_Template
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
        $__internal_54798a5e175da52dc70ef466d109b7192d85296c28296a02311dc28fc5c5750d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54798a5e175da52dc70ef466d109b7192d85296c28296a02311dc28fc5c5750d->enter($__internal_54798a5e175da52dc70ef466d109b7192d85296c28296a02311dc28fc5c5750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4fa7d73f6f3fa49c49518decf68a5601f07b83518253ec1d8db2e8aa4a89fe03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa7d73f6f3fa49c49518decf68a5601f07b83518253ec1d8db2e8aa4a89fe03->enter($__internal_4fa7d73f6f3fa49c49518decf68a5601f07b83518253ec1d8db2e8aa4a89fe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54798a5e175da52dc70ef466d109b7192d85296c28296a02311dc28fc5c5750d->leave($__internal_54798a5e175da52dc70ef466d109b7192d85296c28296a02311dc28fc5c5750d_prof);

        
        $__internal_4fa7d73f6f3fa49c49518decf68a5601f07b83518253ec1d8db2e8aa4a89fe03->leave($__internal_4fa7d73f6f3fa49c49518decf68a5601f07b83518253ec1d8db2e8aa4a89fe03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edf2bb1bff5a2b7f4b7744087f51b744c14bb9613065927492eefaa9a5741b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf2bb1bff5a2b7f4b7744087f51b744c14bb9613065927492eefaa9a5741b93->enter($__internal_edf2bb1bff5a2b7f4b7744087f51b744c14bb9613065927492eefaa9a5741b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c87ebf5876d2337666dbd1d8b39a7bb1d9e1b94d4d854279f6ed39ff263459a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87ebf5876d2337666dbd1d8b39a7bb1d9e1b94d4d854279f6ed39ff263459a7->enter($__internal_c87ebf5876d2337666dbd1d8b39a7bb1d9e1b94d4d854279f6ed39ff263459a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c87ebf5876d2337666dbd1d8b39a7bb1d9e1b94d4d854279f6ed39ff263459a7->leave($__internal_c87ebf5876d2337666dbd1d8b39a7bb1d9e1b94d4d854279f6ed39ff263459a7_prof);

        
        $__internal_edf2bb1bff5a2b7f4b7744087f51b744c14bb9613065927492eefaa9a5741b93->leave($__internal_edf2bb1bff5a2b7f4b7744087f51b744c14bb9613065927492eefaa9a5741b93_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_deb9da21a0dc40f4c81e4184be2e3d4babd95e4922d6d423264803ace837e629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb9da21a0dc40f4c81e4184be2e3d4babd95e4922d6d423264803ace837e629->enter($__internal_deb9da21a0dc40f4c81e4184be2e3d4babd95e4922d6d423264803ace837e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a2173816aa8f1a78ae7a1309aa069f5b5afc36f0a88f60f028b9326c85d98fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2173816aa8f1a78ae7a1309aa069f5b5afc36f0a88f60f028b9326c85d98fe->enter($__internal_1a2173816aa8f1a78ae7a1309aa069f5b5afc36f0a88f60f028b9326c85d98fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a2173816aa8f1a78ae7a1309aa069f5b5afc36f0a88f60f028b9326c85d98fe->leave($__internal_1a2173816aa8f1a78ae7a1309aa069f5b5afc36f0a88f60f028b9326c85d98fe_prof);

        
        $__internal_deb9da21a0dc40f4c81e4184be2e3d4babd95e4922d6d423264803ace837e629->leave($__internal_deb9da21a0dc40f4c81e4184be2e3d4babd95e4922d6d423264803ace837e629_prof);

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
