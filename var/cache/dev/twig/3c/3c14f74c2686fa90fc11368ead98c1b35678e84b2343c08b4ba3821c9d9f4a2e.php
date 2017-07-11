<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d1d8f91420c8026cafd9ca6b6ab2d301633250852668b2ed97f8e70c4f553cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4a95741fdcc3c8b7622b86a6bb0fdbea2841bb17d1f53d9e3ba55b979a407cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a95741fdcc3c8b7622b86a6bb0fdbea2841bb17d1f53d9e3ba55b979a407cd->enter($__internal_f4a95741fdcc3c8b7622b86a6bb0fdbea2841bb17d1f53d9e3ba55b979a407cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_46e56a6b4d4098795f94edb6ae4fd26cb4d29cb11346a0e8a599da78150eb871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e56a6b4d4098795f94edb6ae4fd26cb4d29cb11346a0e8a599da78150eb871->enter($__internal_46e56a6b4d4098795f94edb6ae4fd26cb4d29cb11346a0e8a599da78150eb871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f4a95741fdcc3c8b7622b86a6bb0fdbea2841bb17d1f53d9e3ba55b979a407cd->leave($__internal_f4a95741fdcc3c8b7622b86a6bb0fdbea2841bb17d1f53d9e3ba55b979a407cd_prof);

        
        $__internal_46e56a6b4d4098795f94edb6ae4fd26cb4d29cb11346a0e8a599da78150eb871->leave($__internal_46e56a6b4d4098795f94edb6ae4fd26cb4d29cb11346a0e8a599da78150eb871_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
