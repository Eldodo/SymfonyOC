<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d9b96ce23200d12f0042b91405cfdfd46fb6c9050a3a9e9f4fd477334b604b86 extends Twig_Template
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
        $__internal_732bd3468e9edfe1c807f7b9a89fafefe730293c69a0a66cc75d38bb66d935af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732bd3468e9edfe1c807f7b9a89fafefe730293c69a0a66cc75d38bb66d935af->enter($__internal_732bd3468e9edfe1c807f7b9a89fafefe730293c69a0a66cc75d38bb66d935af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2eee7375950b09b7072cd31aecf427c43deadd6b76b1e32e8bf6260ce25d2d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eee7375950b09b7072cd31aecf427c43deadd6b76b1e32e8bf6260ce25d2d7f->enter($__internal_2eee7375950b09b7072cd31aecf427c43deadd6b76b1e32e8bf6260ce25d2d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_732bd3468e9edfe1c807f7b9a89fafefe730293c69a0a66cc75d38bb66d935af->leave($__internal_732bd3468e9edfe1c807f7b9a89fafefe730293c69a0a66cc75d38bb66d935af_prof);

        
        $__internal_2eee7375950b09b7072cd31aecf427c43deadd6b76b1e32e8bf6260ce25d2d7f->leave($__internal_2eee7375950b09b7072cd31aecf427c43deadd6b76b1e32e8bf6260ce25d2d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
