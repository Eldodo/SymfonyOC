<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6dc804a407f5f31da199d7e77e047a59af06bb530116ff445fea5665f6fe827 extends Twig_Template
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
        $__internal_c14471e048295b787897d90f2b7fe905cd80ccd546ba91252804a3d2745457a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14471e048295b787897d90f2b7fe905cd80ccd546ba91252804a3d2745457a0->enter($__internal_c14471e048295b787897d90f2b7fe905cd80ccd546ba91252804a3d2745457a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_75c25d7b13647aedfa56ee425233c748fc6a9f1178ae0edf70ed04088f744540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c25d7b13647aedfa56ee425233c748fc6a9f1178ae0edf70ed04088f744540->enter($__internal_75c25d7b13647aedfa56ee425233c748fc6a9f1178ae0edf70ed04088f744540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c14471e048295b787897d90f2b7fe905cd80ccd546ba91252804a3d2745457a0->leave($__internal_c14471e048295b787897d90f2b7fe905cd80ccd546ba91252804a3d2745457a0_prof);

        
        $__internal_75c25d7b13647aedfa56ee425233c748fc6a9f1178ae0edf70ed04088f744540->leave($__internal_75c25d7b13647aedfa56ee425233c748fc6a9f1178ae0edf70ed04088f744540_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
