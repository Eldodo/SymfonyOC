<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c32cfcbd6d9e5fb7b55576d6b25cc06f539402c92902d9d35e80c76a25d0b2a4 extends Twig_Template
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
        $__internal_9215ff26988e9a8e0d8b059edd19ab977df9789f557efb92d89a268ae6cd8921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9215ff26988e9a8e0d8b059edd19ab977df9789f557efb92d89a268ae6cd8921->enter($__internal_9215ff26988e9a8e0d8b059edd19ab977df9789f557efb92d89a268ae6cd8921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_df39b817a233582712f8d93ab972b96e966cf7f5b577286dde4b2ebd23d708fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df39b817a233582712f8d93ab972b96e966cf7f5b577286dde4b2ebd23d708fa->enter($__internal_df39b817a233582712f8d93ab972b96e966cf7f5b577286dde4b2ebd23d708fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9215ff26988e9a8e0d8b059edd19ab977df9789f557efb92d89a268ae6cd8921->leave($__internal_9215ff26988e9a8e0d8b059edd19ab977df9789f557efb92d89a268ae6cd8921_prof);

        
        $__internal_df39b817a233582712f8d93ab972b96e966cf7f5b577286dde4b2ebd23d708fa->leave($__internal_df39b817a233582712f8d93ab972b96e966cf7f5b577286dde4b2ebd23d708fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
