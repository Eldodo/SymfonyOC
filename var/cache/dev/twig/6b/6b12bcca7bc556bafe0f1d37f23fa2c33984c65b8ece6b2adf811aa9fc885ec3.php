<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_2e505cdeb1894df8dc38c49c21b4b9220c6bcbdc8cd17e1f68d29aba50a53ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e505cdeb1894df8dc38c49c21b4b9220c6bcbdc8cd17e1f68d29aba50a53ccf->enter($__internal_2e505cdeb1894df8dc38c49c21b4b9220c6bcbdc8cd17e1f68d29aba50a53ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69dece622989e88e288c423f3054b14d30fad7debba9c1b06a1da4d412061d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dece622989e88e288c423f3054b14d30fad7debba9c1b06a1da4d412061d43->enter($__internal_69dece622989e88e288c423f3054b14d30fad7debba9c1b06a1da4d412061d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e505cdeb1894df8dc38c49c21b4b9220c6bcbdc8cd17e1f68d29aba50a53ccf->leave($__internal_2e505cdeb1894df8dc38c49c21b4b9220c6bcbdc8cd17e1f68d29aba50a53ccf_prof);

        
        $__internal_69dece622989e88e288c423f3054b14d30fad7debba9c1b06a1da4d412061d43->leave($__internal_69dece622989e88e288c423f3054b14d30fad7debba9c1b06a1da4d412061d43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa69b6755800e37c84480a33bfb556a51e0090994e27d16090b6b7bbe6bf4c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa69b6755800e37c84480a33bfb556a51e0090994e27d16090b6b7bbe6bf4c9b->enter($__internal_fa69b6755800e37c84480a33bfb556a51e0090994e27d16090b6b7bbe6bf4c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c13cc250943d9cc83cb037a6b270e751a1a9951f05e5c1c8e9b31db96b3007b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c13cc250943d9cc83cb037a6b270e751a1a9951f05e5c1c8e9b31db96b3007b->enter($__internal_7c13cc250943d9cc83cb037a6b270e751a1a9951f05e5c1c8e9b31db96b3007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c13cc250943d9cc83cb037a6b270e751a1a9951f05e5c1c8e9b31db96b3007b->leave($__internal_7c13cc250943d9cc83cb037a6b270e751a1a9951f05e5c1c8e9b31db96b3007b_prof);

        
        $__internal_fa69b6755800e37c84480a33bfb556a51e0090994e27d16090b6b7bbe6bf4c9b->leave($__internal_fa69b6755800e37c84480a33bfb556a51e0090994e27d16090b6b7bbe6bf4c9b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40c96a3eb0fd7f740130d97643c79401e3bd8dbf7ee64a20b67dee702bbef6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c96a3eb0fd7f740130d97643c79401e3bd8dbf7ee64a20b67dee702bbef6c4->enter($__internal_40c96a3eb0fd7f740130d97643c79401e3bd8dbf7ee64a20b67dee702bbef6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef9fe426f421daadb8c357d8e6fd0db5a7791839ef1953ee7448420715e19046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9fe426f421daadb8c357d8e6fd0db5a7791839ef1953ee7448420715e19046->enter($__internal_ef9fe426f421daadb8c357d8e6fd0db5a7791839ef1953ee7448420715e19046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef9fe426f421daadb8c357d8e6fd0db5a7791839ef1953ee7448420715e19046->leave($__internal_ef9fe426f421daadb8c357d8e6fd0db5a7791839ef1953ee7448420715e19046_prof);

        
        $__internal_40c96a3eb0fd7f740130d97643c79401e3bd8dbf7ee64a20b67dee702bbef6c4->leave($__internal_40c96a3eb0fd7f740130d97643c79401e3bd8dbf7ee64a20b67dee702bbef6c4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_434bfef1f780c7f183263bc35449c5ccb4320f4c146b7221b08b89dace24a3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434bfef1f780c7f183263bc35449c5ccb4320f4c146b7221b08b89dace24a3f1->enter($__internal_434bfef1f780c7f183263bc35449c5ccb4320f4c146b7221b08b89dace24a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c15d53abba844766c404b9f766c7c6cee63cdbe6a9be76ca2098bee214ca9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c15d53abba844766c404b9f766c7c6cee63cdbe6a9be76ca2098bee214ca9b2->enter($__internal_1c15d53abba844766c404b9f766c7c6cee63cdbe6a9be76ca2098bee214ca9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1c15d53abba844766c404b9f766c7c6cee63cdbe6a9be76ca2098bee214ca9b2->leave($__internal_1c15d53abba844766c404b9f766c7c6cee63cdbe6a9be76ca2098bee214ca9b2_prof);

        
        $__internal_434bfef1f780c7f183263bc35449c5ccb4320f4c146b7221b08b89dace24a3f1->leave($__internal_434bfef1f780c7f183263bc35449c5ccb4320f4c146b7221b08b89dace24a3f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
