<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_10f95c5595e64c6f16abaaac935c74871ea06c6c60ecf1a66552b1a2ad059887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f7d282eb8eace26cc855aa2a24530e1d2418286a8468f1e0aef655b0e3dbdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7d282eb8eace26cc855aa2a24530e1d2418286a8468f1e0aef655b0e3dbdad->enter($__internal_6f7d282eb8eace26cc855aa2a24530e1d2418286a8468f1e0aef655b0e3dbdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_edecfe23f65375a831f480a2ccec4f3ab60b1cf41d8134eebb07403ec7a665e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edecfe23f65375a831f480a2ccec4f3ab60b1cf41d8134eebb07403ec7a665e9->enter($__internal_edecfe23f65375a831f480a2ccec4f3ab60b1cf41d8134eebb07403ec7a665e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7d282eb8eace26cc855aa2a24530e1d2418286a8468f1e0aef655b0e3dbdad->leave($__internal_6f7d282eb8eace26cc855aa2a24530e1d2418286a8468f1e0aef655b0e3dbdad_prof);

        
        $__internal_edecfe23f65375a831f480a2ccec4f3ab60b1cf41d8134eebb07403ec7a665e9->leave($__internal_edecfe23f65375a831f480a2ccec4f3ab60b1cf41d8134eebb07403ec7a665e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6e6806a28c36936fbe1a326a7d4930f37a43a598eec5fd919653020c468cc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e6806a28c36936fbe1a326a7d4930f37a43a598eec5fd919653020c468cc87->enter($__internal_a6e6806a28c36936fbe1a326a7d4930f37a43a598eec5fd919653020c468cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e2879699d575c3a2007ffd317a6a30b736c41f947260bfc0775ba7aef1ef03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2879699d575c3a2007ffd317a6a30b736c41f947260bfc0775ba7aef1ef03f->enter($__internal_9e2879699d575c3a2007ffd317a6a30b736c41f947260bfc0775ba7aef1ef03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e2879699d575c3a2007ffd317a6a30b736c41f947260bfc0775ba7aef1ef03f->leave($__internal_9e2879699d575c3a2007ffd317a6a30b736c41f947260bfc0775ba7aef1ef03f_prof);

        
        $__internal_a6e6806a28c36936fbe1a326a7d4930f37a43a598eec5fd919653020c468cc87->leave($__internal_a6e6806a28c36936fbe1a326a7d4930f37a43a598eec5fd919653020c468cc87_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bea0384c3647897223a14015fa1d03fd1a198041691560b1e05444fc83d12780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea0384c3647897223a14015fa1d03fd1a198041691560b1e05444fc83d12780->enter($__internal_bea0384c3647897223a14015fa1d03fd1a198041691560b1e05444fc83d12780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad9a481f539a6fc22781c4668040f9b3b00dd6f135fc77e0312ef8da68091c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a481f539a6fc22781c4668040f9b3b00dd6f135fc77e0312ef8da68091c18->enter($__internal_ad9a481f539a6fc22781c4668040f9b3b00dd6f135fc77e0312ef8da68091c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ad9a481f539a6fc22781c4668040f9b3b00dd6f135fc77e0312ef8da68091c18->leave($__internal_ad9a481f539a6fc22781c4668040f9b3b00dd6f135fc77e0312ef8da68091c18_prof);

        
        $__internal_bea0384c3647897223a14015fa1d03fd1a198041691560b1e05444fc83d12780->leave($__internal_bea0384c3647897223a14015fa1d03fd1a198041691560b1e05444fc83d12780_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ba9f1ca72a03977579f38f28e66ce603bdf8cab26139df85bd27dce29966f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba9f1ca72a03977579f38f28e66ce603bdf8cab26139df85bd27dce29966f61->enter($__internal_9ba9f1ca72a03977579f38f28e66ce603bdf8cab26139df85bd27dce29966f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c1cfa6dd893034fb4e6eaac0cdd1896f88905cc47c53751df7a5a79063f6fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1cfa6dd893034fb4e6eaac0cdd1896f88905cc47c53751df7a5a79063f6fa4->enter($__internal_6c1cfa6dd893034fb4e6eaac0cdd1896f88905cc47c53751df7a5a79063f6fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6c1cfa6dd893034fb4e6eaac0cdd1896f88905cc47c53751df7a5a79063f6fa4->leave($__internal_6c1cfa6dd893034fb4e6eaac0cdd1896f88905cc47c53751df7a5a79063f6fa4_prof);

        
        $__internal_9ba9f1ca72a03977579f38f28e66ce603bdf8cab26139df85bd27dce29966f61->leave($__internal_9ba9f1ca72a03977579f38f28e66ce603bdf8cab26139df85bd27dce29966f61_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
