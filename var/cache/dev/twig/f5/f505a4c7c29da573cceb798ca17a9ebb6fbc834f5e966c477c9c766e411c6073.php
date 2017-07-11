<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0bb07ad31854661362a1ae856741bbc7061c2d26b7bdebb7cfee771331f6bdbd extends Twig_Template
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
        $__internal_68f9c0a8119d8dcc40db93c15fcbe40142378672abb58a45193b2de5442da261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f9c0a8119d8dcc40db93c15fcbe40142378672abb58a45193b2de5442da261->enter($__internal_68f9c0a8119d8dcc40db93c15fcbe40142378672abb58a45193b2de5442da261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9f6163b4312102395e21cd010361f0de8139ef037a61042967bab3cf9bb64d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6163b4312102395e21cd010361f0de8139ef037a61042967bab3cf9bb64d67->enter($__internal_9f6163b4312102395e21cd010361f0de8139ef037a61042967bab3cf9bb64d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_68f9c0a8119d8dcc40db93c15fcbe40142378672abb58a45193b2de5442da261->leave($__internal_68f9c0a8119d8dcc40db93c15fcbe40142378672abb58a45193b2de5442da261_prof);

        
        $__internal_9f6163b4312102395e21cd010361f0de8139ef037a61042967bab3cf9bb64d67->leave($__internal_9f6163b4312102395e21cd010361f0de8139ef037a61042967bab3cf9bb64d67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
