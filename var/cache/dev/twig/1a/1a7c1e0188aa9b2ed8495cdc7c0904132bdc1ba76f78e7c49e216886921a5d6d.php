<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_14078ac77447ef8c1183dc2470c26f802f8e3353eb77b32f590d6c4e623168df extends Twig_Template
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
        $__internal_10b8b7175c0fc5a73c03ded09ece1ff242e791b10aa9eb271f4ccd9d29704465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b8b7175c0fc5a73c03ded09ece1ff242e791b10aa9eb271f4ccd9d29704465->enter($__internal_10b8b7175c0fc5a73c03ded09ece1ff242e791b10aa9eb271f4ccd9d29704465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_635e5d89f42eb9a0c074bfd1e73d5b0f7ed06d30ceb2c34e794c69f0d73e5468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635e5d89f42eb9a0c074bfd1e73d5b0f7ed06d30ceb2c34e794c69f0d73e5468->enter($__internal_635e5d89f42eb9a0c074bfd1e73d5b0f7ed06d30ceb2c34e794c69f0d73e5468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_10b8b7175c0fc5a73c03ded09ece1ff242e791b10aa9eb271f4ccd9d29704465->leave($__internal_10b8b7175c0fc5a73c03ded09ece1ff242e791b10aa9eb271f4ccd9d29704465_prof);

        
        $__internal_635e5d89f42eb9a0c074bfd1e73d5b0f7ed06d30ceb2c34e794c69f0d73e5468->leave($__internal_635e5d89f42eb9a0c074bfd1e73d5b0f7ed06d30ceb2c34e794c69f0d73e5468_prof);

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
