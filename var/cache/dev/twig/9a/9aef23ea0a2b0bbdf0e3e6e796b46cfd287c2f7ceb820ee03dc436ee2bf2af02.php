<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_58c4679a7f5365ff9f08ac70de857d66386d26934acb20f6c0eaf5006a7a16c8 extends Twig_Template
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
        $__internal_c12bdc1c0c7f69ba9c4ae394cf07df620919eb281a6540b8ea32954f71b215f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12bdc1c0c7f69ba9c4ae394cf07df620919eb281a6540b8ea32954f71b215f7->enter($__internal_c12bdc1c0c7f69ba9c4ae394cf07df620919eb281a6540b8ea32954f71b215f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2947f9c7100ff42cafb727e005e5e73005f297fab179d9f65bd37d5f447c351d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2947f9c7100ff42cafb727e005e5e73005f297fab179d9f65bd37d5f447c351d->enter($__internal_2947f9c7100ff42cafb727e005e5e73005f297fab179d9f65bd37d5f447c351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c12bdc1c0c7f69ba9c4ae394cf07df620919eb281a6540b8ea32954f71b215f7->leave($__internal_c12bdc1c0c7f69ba9c4ae394cf07df620919eb281a6540b8ea32954f71b215f7_prof);

        
        $__internal_2947f9c7100ff42cafb727e005e5e73005f297fab179d9f65bd37d5f447c351d->leave($__internal_2947f9c7100ff42cafb727e005e5e73005f297fab179d9f65bd37d5f447c351d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
