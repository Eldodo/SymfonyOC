<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_18cb62751a647ab21cf36348c09ff029a1cce9ef2c8cb082dc2cf1827cd8bd6f extends Twig_Template
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
        $__internal_e883654e721bebb6df6f276e4fe9d4b6170510d16d431a333024b85b73f3c5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e883654e721bebb6df6f276e4fe9d4b6170510d16d431a333024b85b73f3c5d6->enter($__internal_e883654e721bebb6df6f276e4fe9d4b6170510d16d431a333024b85b73f3c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_64ce42be481b220e4f257f4a4def2da9fb92a0cb1e5afb6b877862507f3c5ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ce42be481b220e4f257f4a4def2da9fb92a0cb1e5afb6b877862507f3c5ce8->enter($__internal_64ce42be481b220e4f257f4a4def2da9fb92a0cb1e5afb6b877862507f3c5ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e883654e721bebb6df6f276e4fe9d4b6170510d16d431a333024b85b73f3c5d6->leave($__internal_e883654e721bebb6df6f276e4fe9d4b6170510d16d431a333024b85b73f3c5d6_prof);

        
        $__internal_64ce42be481b220e4f257f4a4def2da9fb92a0cb1e5afb6b877862507f3c5ce8->leave($__internal_64ce42be481b220e4f257f4a4def2da9fb92a0cb1e5afb6b877862507f3c5ce8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
