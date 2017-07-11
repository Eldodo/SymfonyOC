<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c0d02a7d69967e2e3366a7ebb84ff4c889dd0ded0eaf73db49ab057b1bfa5a22 extends Twig_Template
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
        $__internal_c48027cfac3a55d0aab66685e3b5656e24f5658d26380e65f3c33bafae211218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48027cfac3a55d0aab66685e3b5656e24f5658d26380e65f3c33bafae211218->enter($__internal_c48027cfac3a55d0aab66685e3b5656e24f5658d26380e65f3c33bafae211218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a7d97e3a4d479a7e1183f2efd0e1f0b422fc0a79829942d1ecc00e01f033e963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d97e3a4d479a7e1183f2efd0e1f0b422fc0a79829942d1ecc00e01f033e963->enter($__internal_a7d97e3a4d479a7e1183f2efd0e1f0b422fc0a79829942d1ecc00e01f033e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48027cfac3a55d0aab66685e3b5656e24f5658d26380e65f3c33bafae211218->leave($__internal_c48027cfac3a55d0aab66685e3b5656e24f5658d26380e65f3c33bafae211218_prof);

        
        $__internal_a7d97e3a4d479a7e1183f2efd0e1f0b422fc0a79829942d1ecc00e01f033e963->leave($__internal_a7d97e3a4d479a7e1183f2efd0e1f0b422fc0a79829942d1ecc00e01f033e963_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b6413890b7db0bc1997cd036b61496a5b707513465ee308b374bdda0357fc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6413890b7db0bc1997cd036b61496a5b707513465ee308b374bdda0357fc87->enter($__internal_3b6413890b7db0bc1997cd036b61496a5b707513465ee308b374bdda0357fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_677adff23f787a9fa2bad8df462ec67242936a7c73e67ff557afd387d8f26c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677adff23f787a9fa2bad8df462ec67242936a7c73e67ff557afd387d8f26c45->enter($__internal_677adff23f787a9fa2bad8df462ec67242936a7c73e67ff557afd387d8f26c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_677adff23f787a9fa2bad8df462ec67242936a7c73e67ff557afd387d8f26c45->leave($__internal_677adff23f787a9fa2bad8df462ec67242936a7c73e67ff557afd387d8f26c45_prof);

        
        $__internal_3b6413890b7db0bc1997cd036b61496a5b707513465ee308b374bdda0357fc87->leave($__internal_3b6413890b7db0bc1997cd036b61496a5b707513465ee308b374bdda0357fc87_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_09386d6f4c00920b51ad7158eb67742d449bcd72a16d2c4943d2d7be63fd1ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09386d6f4c00920b51ad7158eb67742d449bcd72a16d2c4943d2d7be63fd1ce3->enter($__internal_09386d6f4c00920b51ad7158eb67742d449bcd72a16d2c4943d2d7be63fd1ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffb9727e4207e1c5d9c9fcf45b95fab16b28a0c82cfb455e00ae9290ecb4bc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb9727e4207e1c5d9c9fcf45b95fab16b28a0c82cfb455e00ae9290ecb4bc0b->enter($__internal_ffb9727e4207e1c5d9c9fcf45b95fab16b28a0c82cfb455e00ae9290ecb4bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffb9727e4207e1c5d9c9fcf45b95fab16b28a0c82cfb455e00ae9290ecb4bc0b->leave($__internal_ffb9727e4207e1c5d9c9fcf45b95fab16b28a0c82cfb455e00ae9290ecb4bc0b_prof);

        
        $__internal_09386d6f4c00920b51ad7158eb67742d449bcd72a16d2c4943d2d7be63fd1ce3->leave($__internal_09386d6f4c00920b51ad7158eb67742d449bcd72a16d2c4943d2d7be63fd1ce3_prof);

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
