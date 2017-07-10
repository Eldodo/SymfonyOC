<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_13f23646833ee0fd37748bf6bda7679a1a20c44b03ea9c9b6d84b6242da095c1 extends Twig_Template
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
        $__internal_0f29ddcc0f4f37429edb41aa8f5e59d524b29ab07bf7945a9503518f6816ecfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f29ddcc0f4f37429edb41aa8f5e59d524b29ab07bf7945a9503518f6816ecfa->enter($__internal_0f29ddcc0f4f37429edb41aa8f5e59d524b29ab07bf7945a9503518f6816ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7e065cfd460f4ab8de3c4dba31ee3f3641168a03c0c1722a0060b9a0c9823899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e065cfd460f4ab8de3c4dba31ee3f3641168a03c0c1722a0060b9a0c9823899->enter($__internal_7e065cfd460f4ab8de3c4dba31ee3f3641168a03c0c1722a0060b9a0c9823899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0f29ddcc0f4f37429edb41aa8f5e59d524b29ab07bf7945a9503518f6816ecfa->leave($__internal_0f29ddcc0f4f37429edb41aa8f5e59d524b29ab07bf7945a9503518f6816ecfa_prof);

        
        $__internal_7e065cfd460f4ab8de3c4dba31ee3f3641168a03c0c1722a0060b9a0c9823899->leave($__internal_7e065cfd460f4ab8de3c4dba31ee3f3641168a03c0c1722a0060b9a0c9823899_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
