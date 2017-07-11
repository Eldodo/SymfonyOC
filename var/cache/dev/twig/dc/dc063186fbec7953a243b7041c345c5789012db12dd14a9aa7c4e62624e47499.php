<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_45b33dfe01eb19332e88ed5fbfb3c7741313c13cc35bf6df0c62877e6ed675fc extends Twig_Template
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
        $__internal_ded57f92273bf0334729156f62fb8034d427400f80dae6e9b28c88344cba5b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded57f92273bf0334729156f62fb8034d427400f80dae6e9b28c88344cba5b59->enter($__internal_ded57f92273bf0334729156f62fb8034d427400f80dae6e9b28c88344cba5b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1240775e0288a086d3da2cd4ebe23c31f6dfe43af13c5c08bee2a15e1fb7d63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1240775e0288a086d3da2cd4ebe23c31f6dfe43af13c5c08bee2a15e1fb7d63d->enter($__internal_1240775e0288a086d3da2cd4ebe23c31f6dfe43af13c5c08bee2a15e1fb7d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ded57f92273bf0334729156f62fb8034d427400f80dae6e9b28c88344cba5b59->leave($__internal_ded57f92273bf0334729156f62fb8034d427400f80dae6e9b28c88344cba5b59_prof);

        
        $__internal_1240775e0288a086d3da2cd4ebe23c31f6dfe43af13c5c08bee2a15e1fb7d63d->leave($__internal_1240775e0288a086d3da2cd4ebe23c31f6dfe43af13c5c08bee2a15e1fb7d63d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
