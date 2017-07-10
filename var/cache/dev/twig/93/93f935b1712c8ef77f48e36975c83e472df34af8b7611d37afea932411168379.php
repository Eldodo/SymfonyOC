<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bf7671074708d373bc64c55a6cea35982403190cfb3f1e23067bdff532e87cf4 extends Twig_Template
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
        $__internal_18a9779fb0563626903d8d404206e67cba33952fc6dd5a695e8db2dbe9e690ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a9779fb0563626903d8d404206e67cba33952fc6dd5a695e8db2dbe9e690ba->enter($__internal_18a9779fb0563626903d8d404206e67cba33952fc6dd5a695e8db2dbe9e690ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_903eb87931d755fddac2e157c7490c61536f634e08beb4d5a413cfd31dbe6c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903eb87931d755fddac2e157c7490c61536f634e08beb4d5a413cfd31dbe6c75->enter($__internal_903eb87931d755fddac2e157c7490c61536f634e08beb4d5a413cfd31dbe6c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a9779fb0563626903d8d404206e67cba33952fc6dd5a695e8db2dbe9e690ba->leave($__internal_18a9779fb0563626903d8d404206e67cba33952fc6dd5a695e8db2dbe9e690ba_prof);

        
        $__internal_903eb87931d755fddac2e157c7490c61536f634e08beb4d5a413cfd31dbe6c75->leave($__internal_903eb87931d755fddac2e157c7490c61536f634e08beb4d5a413cfd31dbe6c75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d5f2d886d17512f4020487fecec89835d6999ae4f8b505280e9ff1adb11378b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5f2d886d17512f4020487fecec89835d6999ae4f8b505280e9ff1adb11378b->enter($__internal_8d5f2d886d17512f4020487fecec89835d6999ae4f8b505280e9ff1adb11378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e486716a2e6b7e3aebbc3046802e239244412b0dc11f06dc78ddda1e19226356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e486716a2e6b7e3aebbc3046802e239244412b0dc11f06dc78ddda1e19226356->enter($__internal_e486716a2e6b7e3aebbc3046802e239244412b0dc11f06dc78ddda1e19226356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e486716a2e6b7e3aebbc3046802e239244412b0dc11f06dc78ddda1e19226356->leave($__internal_e486716a2e6b7e3aebbc3046802e239244412b0dc11f06dc78ddda1e19226356_prof);

        
        $__internal_8d5f2d886d17512f4020487fecec89835d6999ae4f8b505280e9ff1adb11378b->leave($__internal_8d5f2d886d17512f4020487fecec89835d6999ae4f8b505280e9ff1adb11378b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f961a356e79853553304d4ae593dd9c583365195647166795e78465de90f570f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f961a356e79853553304d4ae593dd9c583365195647166795e78465de90f570f->enter($__internal_f961a356e79853553304d4ae593dd9c583365195647166795e78465de90f570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1452fe28a15e565eafacf77bc9e83df949790de29beb5106a500031596ba19cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1452fe28a15e565eafacf77bc9e83df949790de29beb5106a500031596ba19cb->enter($__internal_1452fe28a15e565eafacf77bc9e83df949790de29beb5106a500031596ba19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1452fe28a15e565eafacf77bc9e83df949790de29beb5106a500031596ba19cb->leave($__internal_1452fe28a15e565eafacf77bc9e83df949790de29beb5106a500031596ba19cb_prof);

        
        $__internal_f961a356e79853553304d4ae593dd9c583365195647166795e78465de90f570f->leave($__internal_f961a356e79853553304d4ae593dd9c583365195647166795e78465de90f570f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8990c275e89f1051eca2080be5dddf209aa32fcb3c4b3ea93d0052b1047cadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8990c275e89f1051eca2080be5dddf209aa32fcb3c4b3ea93d0052b1047cadc->enter($__internal_e8990c275e89f1051eca2080be5dddf209aa32fcb3c4b3ea93d0052b1047cadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce292498b95a47be9c755a3e2987a8bf7c19393eaaa7299eb33604c6851dbc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce292498b95a47be9c755a3e2987a8bf7c19393eaaa7299eb33604c6851dbc9f->enter($__internal_ce292498b95a47be9c755a3e2987a8bf7c19393eaaa7299eb33604c6851dbc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ce292498b95a47be9c755a3e2987a8bf7c19393eaaa7299eb33604c6851dbc9f->leave($__internal_ce292498b95a47be9c755a3e2987a8bf7c19393eaaa7299eb33604c6851dbc9f_prof);

        
        $__internal_e8990c275e89f1051eca2080be5dddf209aa32fcb3c4b3ea93d0052b1047cadc->leave($__internal_e8990c275e89f1051eca2080be5dddf209aa32fcb3c4b3ea93d0052b1047cadc_prof);

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
