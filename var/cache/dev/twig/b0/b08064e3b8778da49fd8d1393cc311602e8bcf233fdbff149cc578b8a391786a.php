<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2130d7a48b98f4ab83e379d0ad02df62bf1d02d77c7e109c5a8731137c695cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2130d7a48b98f4ab83e379d0ad02df62bf1d02d77c7e109c5a8731137c695cd8->enter($__internal_2130d7a48b98f4ab83e379d0ad02df62bf1d02d77c7e109c5a8731137c695cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0c3c21e6fa3c4fbaf480c730f8f50a947b1eb4fcf80aa70ae3a5b762505d44c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3c21e6fa3c4fbaf480c730f8f50a947b1eb4fcf80aa70ae3a5b762505d44c2->enter($__internal_0c3c21e6fa3c4fbaf480c730f8f50a947b1eb4fcf80aa70ae3a5b762505d44c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2130d7a48b98f4ab83e379d0ad02df62bf1d02d77c7e109c5a8731137c695cd8->leave($__internal_2130d7a48b98f4ab83e379d0ad02df62bf1d02d77c7e109c5a8731137c695cd8_prof);

        
        $__internal_0c3c21e6fa3c4fbaf480c730f8f50a947b1eb4fcf80aa70ae3a5b762505d44c2->leave($__internal_0c3c21e6fa3c4fbaf480c730f8f50a947b1eb4fcf80aa70ae3a5b762505d44c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4337db51f6d3f3d7c51ac25ebfd3679e0b314ce24c9d17cf0d644792b964f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4337db51f6d3f3d7c51ac25ebfd3679e0b314ce24c9d17cf0d644792b964f446->enter($__internal_4337db51f6d3f3d7c51ac25ebfd3679e0b314ce24c9d17cf0d644792b964f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb11811a79c30095a9face7bbc6d6f16eeb110f82086c16d39a35eab9c6f90eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb11811a79c30095a9face7bbc6d6f16eeb110f82086c16d39a35eab9c6f90eb->enter($__internal_eb11811a79c30095a9face7bbc6d6f16eeb110f82086c16d39a35eab9c6f90eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb11811a79c30095a9face7bbc6d6f16eeb110f82086c16d39a35eab9c6f90eb->leave($__internal_eb11811a79c30095a9face7bbc6d6f16eeb110f82086c16d39a35eab9c6f90eb_prof);

        
        $__internal_4337db51f6d3f3d7c51ac25ebfd3679e0b314ce24c9d17cf0d644792b964f446->leave($__internal_4337db51f6d3f3d7c51ac25ebfd3679e0b314ce24c9d17cf0d644792b964f446_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d7e8f54eef181a66a0e2ff22d5271b44dead1414ed7ebfe12a4efd729f10a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7e8f54eef181a66a0e2ff22d5271b44dead1414ed7ebfe12a4efd729f10a20->enter($__internal_9d7e8f54eef181a66a0e2ff22d5271b44dead1414ed7ebfe12a4efd729f10a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f881f5002d059e21183d3a51c0c32e0de73849f7a6673cbd1f544c0007310ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f881f5002d059e21183d3a51c0c32e0de73849f7a6673cbd1f544c0007310ad7->enter($__internal_f881f5002d059e21183d3a51c0c32e0de73849f7a6673cbd1f544c0007310ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f881f5002d059e21183d3a51c0c32e0de73849f7a6673cbd1f544c0007310ad7->leave($__internal_f881f5002d059e21183d3a51c0c32e0de73849f7a6673cbd1f544c0007310ad7_prof);

        
        $__internal_9d7e8f54eef181a66a0e2ff22d5271b44dead1414ed7ebfe12a4efd729f10a20->leave($__internal_9d7e8f54eef181a66a0e2ff22d5271b44dead1414ed7ebfe12a4efd729f10a20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d3f445ae888dd42bf872d1d1734b1b4e9f30b5614663a3507538be7cff53e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3f445ae888dd42bf872d1d1734b1b4e9f30b5614663a3507538be7cff53e84->enter($__internal_2d3f445ae888dd42bf872d1d1734b1b4e9f30b5614663a3507538be7cff53e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5413ca212907db6ef3e9b8ecc015a3d0769ab83364fa0610356c8b934455e1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5413ca212907db6ef3e9b8ecc015a3d0769ab83364fa0610356c8b934455e1a9->enter($__internal_5413ca212907db6ef3e9b8ecc015a3d0769ab83364fa0610356c8b934455e1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5413ca212907db6ef3e9b8ecc015a3d0769ab83364fa0610356c8b934455e1a9->leave($__internal_5413ca212907db6ef3e9b8ecc015a3d0769ab83364fa0610356c8b934455e1a9_prof);

        
        $__internal_2d3f445ae888dd42bf872d1d1734b1b4e9f30b5614663a3507538be7cff53e84->leave($__internal_2d3f445ae888dd42bf872d1d1734b1b4e9f30b5614663a3507538be7cff53e84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
