<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_835aa7781f143c4cf76b7b4d5c27b3560962aa0096c95beca06bb0c44d9ba785 extends Twig_Template
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
        $__internal_7af13b616bee54c3c7c240c9b4c50b4f37f797ee5adc53f8ecf8ba9cabc4d820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af13b616bee54c3c7c240c9b4c50b4f37f797ee5adc53f8ecf8ba9cabc4d820->enter($__internal_7af13b616bee54c3c7c240c9b4c50b4f37f797ee5adc53f8ecf8ba9cabc4d820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5d271f83b96b69a0ac9e4b7ea6d601e151076786f0efe49c87b40742d316731c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d271f83b96b69a0ac9e4b7ea6d601e151076786f0efe49c87b40742d316731c->enter($__internal_5d271f83b96b69a0ac9e4b7ea6d601e151076786f0efe49c87b40742d316731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7af13b616bee54c3c7c240c9b4c50b4f37f797ee5adc53f8ecf8ba9cabc4d820->leave($__internal_7af13b616bee54c3c7c240c9b4c50b4f37f797ee5adc53f8ecf8ba9cabc4d820_prof);

        
        $__internal_5d271f83b96b69a0ac9e4b7ea6d601e151076786f0efe49c87b40742d316731c->leave($__internal_5d271f83b96b69a0ac9e4b7ea6d601e151076786f0efe49c87b40742d316731c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
