<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_788503598b325b0fe2db2d8fd4714b14560fef35ee8d1454c80d66842efb3ce5 extends Twig_Template
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
        $__internal_0a3bd5376f989e3545f898ebbf6cb0561878f530b02ab47aa0b5fa6344179070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3bd5376f989e3545f898ebbf6cb0561878f530b02ab47aa0b5fa6344179070->enter($__internal_0a3bd5376f989e3545f898ebbf6cb0561878f530b02ab47aa0b5fa6344179070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8c2c4a4efefce20208629c6183a32f9f1b76509cb4aadc7952b11a16dad071a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c4a4efefce20208629c6183a32f9f1b76509cb4aadc7952b11a16dad071a4->enter($__internal_8c2c4a4efefce20208629c6183a32f9f1b76509cb4aadc7952b11a16dad071a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0a3bd5376f989e3545f898ebbf6cb0561878f530b02ab47aa0b5fa6344179070->leave($__internal_0a3bd5376f989e3545f898ebbf6cb0561878f530b02ab47aa0b5fa6344179070_prof);

        
        $__internal_8c2c4a4efefce20208629c6183a32f9f1b76509cb4aadc7952b11a16dad071a4->leave($__internal_8c2c4a4efefce20208629c6183a32f9f1b76509cb4aadc7952b11a16dad071a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
