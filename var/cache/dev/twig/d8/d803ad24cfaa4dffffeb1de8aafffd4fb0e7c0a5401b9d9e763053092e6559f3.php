<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_48d6fcfb5619ce8ba5c6b5865aa9314e070904e0335cae6a6b5233d7a3ced4ca extends Twig_Template
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
        $__internal_416fb35da651a221232f0541439a25de5ce5480e98861b7e86575cb24417a559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416fb35da651a221232f0541439a25de5ce5480e98861b7e86575cb24417a559->enter($__internal_416fb35da651a221232f0541439a25de5ce5480e98861b7e86575cb24417a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_52b4ba7c336193b23d57865b7356f95f6a1537cb27d6ce5f04cfcd19aa2faa4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b4ba7c336193b23d57865b7356f95f6a1537cb27d6ce5f04cfcd19aa2faa4d->enter($__internal_52b4ba7c336193b23d57865b7356f95f6a1537cb27d6ce5f04cfcd19aa2faa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_416fb35da651a221232f0541439a25de5ce5480e98861b7e86575cb24417a559->leave($__internal_416fb35da651a221232f0541439a25de5ce5480e98861b7e86575cb24417a559_prof);

        
        $__internal_52b4ba7c336193b23d57865b7356f95f6a1537cb27d6ce5f04cfcd19aa2faa4d->leave($__internal_52b4ba7c336193b23d57865b7356f95f6a1537cb27d6ce5f04cfcd19aa2faa4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
