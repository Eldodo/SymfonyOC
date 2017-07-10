<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_519d16016b52120d9660fad5c4edb589f096e2b6d8fda7771de3504c861244cf extends Twig_Template
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
        $__internal_fbb131d1889a4a15f8dda7ace37b9e30ce39f1ca2442e1761fe791f137c02407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb131d1889a4a15f8dda7ace37b9e30ce39f1ca2442e1761fe791f137c02407->enter($__internal_fbb131d1889a4a15f8dda7ace37b9e30ce39f1ca2442e1761fe791f137c02407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_971837ac1730e06c1ae66d7bb76fcefad7bee0ddab8648482a15dd8e541aad4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971837ac1730e06c1ae66d7bb76fcefad7bee0ddab8648482a15dd8e541aad4b->enter($__internal_971837ac1730e06c1ae66d7bb76fcefad7bee0ddab8648482a15dd8e541aad4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_fbb131d1889a4a15f8dda7ace37b9e30ce39f1ca2442e1761fe791f137c02407->leave($__internal_fbb131d1889a4a15f8dda7ace37b9e30ce39f1ca2442e1761fe791f137c02407_prof);

        
        $__internal_971837ac1730e06c1ae66d7bb76fcefad7bee0ddab8648482a15dd8e541aad4b->leave($__internal_971837ac1730e06c1ae66d7bb76fcefad7bee0ddab8648482a15dd8e541aad4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
