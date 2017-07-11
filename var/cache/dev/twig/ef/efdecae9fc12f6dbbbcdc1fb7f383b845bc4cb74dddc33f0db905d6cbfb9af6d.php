<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c1bb13abe6f590a619e4fc33cde89c0c9f141f5f6d149046d048fdb470c4a47b extends Twig_Template
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
        $__internal_924656ec9d746420468d03dcd61b891939515f4d7ccd669f3452ca5f78b2f2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924656ec9d746420468d03dcd61b891939515f4d7ccd669f3452ca5f78b2f2c4->enter($__internal_924656ec9d746420468d03dcd61b891939515f4d7ccd669f3452ca5f78b2f2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_16e7de1f49d54782bebb1e3ce7120d06be1ed018df3e4745232267478ee8a9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e7de1f49d54782bebb1e3ce7120d06be1ed018df3e4745232267478ee8a9ba->enter($__internal_16e7de1f49d54782bebb1e3ce7120d06be1ed018df3e4745232267478ee8a9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_924656ec9d746420468d03dcd61b891939515f4d7ccd669f3452ca5f78b2f2c4->leave($__internal_924656ec9d746420468d03dcd61b891939515f4d7ccd669f3452ca5f78b2f2c4_prof);

        
        $__internal_16e7de1f49d54782bebb1e3ce7120d06be1ed018df3e4745232267478ee8a9ba->leave($__internal_16e7de1f49d54782bebb1e3ce7120d06be1ed018df3e4745232267478ee8a9ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
