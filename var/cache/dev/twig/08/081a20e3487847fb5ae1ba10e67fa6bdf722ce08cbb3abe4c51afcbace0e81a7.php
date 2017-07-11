<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_72fd49833c537459418532413276ef6a6dc228e9b1dd47c36dfe0d78f2e3b0c1 extends Twig_Template
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
        $__internal_7efdf004924155223a8a4709c164c64a4503955d0a64c28bc8fb6a13ee621be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efdf004924155223a8a4709c164c64a4503955d0a64c28bc8fb6a13ee621be9->enter($__internal_7efdf004924155223a8a4709c164c64a4503955d0a64c28bc8fb6a13ee621be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ca8520c56380e8ae0cc13ba021cccf70d4907f5f9fe90f670ee3dc7bfd7054c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8520c56380e8ae0cc13ba021cccf70d4907f5f9fe90f670ee3dc7bfd7054c4->enter($__internal_ca8520c56380e8ae0cc13ba021cccf70d4907f5f9fe90f670ee3dc7bfd7054c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_7efdf004924155223a8a4709c164c64a4503955d0a64c28bc8fb6a13ee621be9->leave($__internal_7efdf004924155223a8a4709c164c64a4503955d0a64c28bc8fb6a13ee621be9_prof);

        
        $__internal_ca8520c56380e8ae0cc13ba021cccf70d4907f5f9fe90f670ee3dc7bfd7054c4->leave($__internal_ca8520c56380e8ae0cc13ba021cccf70d4907f5f9fe90f670ee3dc7bfd7054c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
