<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_86125ade15d56c74fc9824edb5fdb91469992029da704c89dac68e723b7d8dd2 extends Twig_Template
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
        $__internal_79b602cabb19c5dc07723df4c4fdfb17023c83c49ee3a02a4efc278d97d1bebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b602cabb19c5dc07723df4c4fdfb17023c83c49ee3a02a4efc278d97d1bebb->enter($__internal_79b602cabb19c5dc07723df4c4fdfb17023c83c49ee3a02a4efc278d97d1bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1955dc1ae5e6a6e772ec8f1199435b5014f1f0a027f9433055a3e717e45a38c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1955dc1ae5e6a6e772ec8f1199435b5014f1f0a027f9433055a3e717e45a38c9->enter($__internal_1955dc1ae5e6a6e772ec8f1199435b5014f1f0a027f9433055a3e717e45a38c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_79b602cabb19c5dc07723df4c4fdfb17023c83c49ee3a02a4efc278d97d1bebb->leave($__internal_79b602cabb19c5dc07723df4c4fdfb17023c83c49ee3a02a4efc278d97d1bebb_prof);

        
        $__internal_1955dc1ae5e6a6e772ec8f1199435b5014f1f0a027f9433055a3e717e45a38c9->leave($__internal_1955dc1ae5e6a6e772ec8f1199435b5014f1f0a027f9433055a3e717e45a38c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
