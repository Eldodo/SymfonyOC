<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
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
        $__internal_59a5029bf8f4375f0d040ccbb63c3dd5990df6c8124077d993e18d4579eb8b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a5029bf8f4375f0d040ccbb63c3dd5990df6c8124077d993e18d4579eb8b09->enter($__internal_59a5029bf8f4375f0d040ccbb63c3dd5990df6c8124077d993e18d4579eb8b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38654a43a08b36b645ce40f1266631983f9c7ff19ca3e70b9734cff75831fdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38654a43a08b36b645ce40f1266631983f9c7ff19ca3e70b9734cff75831fdff->enter($__internal_38654a43a08b36b645ce40f1266631983f9c7ff19ca3e70b9734cff75831fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59a5029bf8f4375f0d040ccbb63c3dd5990df6c8124077d993e18d4579eb8b09->leave($__internal_59a5029bf8f4375f0d040ccbb63c3dd5990df6c8124077d993e18d4579eb8b09_prof);

        
        $__internal_38654a43a08b36b645ce40f1266631983f9c7ff19ca3e70b9734cff75831fdff->leave($__internal_38654a43a08b36b645ce40f1266631983f9c7ff19ca3e70b9734cff75831fdff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f9bf5c9251dc1d7e8c791cca84eba5303b8e13c8cb50b25ef2f99ea86f107fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9bf5c9251dc1d7e8c791cca84eba5303b8e13c8cb50b25ef2f99ea86f107fc->enter($__internal_0f9bf5c9251dc1d7e8c791cca84eba5303b8e13c8cb50b25ef2f99ea86f107fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_87b2e28ea8291aa9384ca9eea61d910f99b3c8fa0489544dc0dfc72b95cc69e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b2e28ea8291aa9384ca9eea61d910f99b3c8fa0489544dc0dfc72b95cc69e5->enter($__internal_87b2e28ea8291aa9384ca9eea61d910f99b3c8fa0489544dc0dfc72b95cc69e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87b2e28ea8291aa9384ca9eea61d910f99b3c8fa0489544dc0dfc72b95cc69e5->leave($__internal_87b2e28ea8291aa9384ca9eea61d910f99b3c8fa0489544dc0dfc72b95cc69e5_prof);

        
        $__internal_0f9bf5c9251dc1d7e8c791cca84eba5303b8e13c8cb50b25ef2f99ea86f107fc->leave($__internal_0f9bf5c9251dc1d7e8c791cca84eba5303b8e13c8cb50b25ef2f99ea86f107fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4cc1329b4b3dbe38fb8658e8cd4d1c38bd62953ddc95e2fa2981d7ac7168eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cc1329b4b3dbe38fb8658e8cd4d1c38bd62953ddc95e2fa2981d7ac7168eee->enter($__internal_a4cc1329b4b3dbe38fb8658e8cd4d1c38bd62953ddc95e2fa2981d7ac7168eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f658c90e310e8b5ed5edfef2f838e7c3f37b1178ca46926b803faeab26ef018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f658c90e310e8b5ed5edfef2f838e7c3f37b1178ca46926b803faeab26ef018->enter($__internal_0f658c90e310e8b5ed5edfef2f838e7c3f37b1178ca46926b803faeab26ef018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f658c90e310e8b5ed5edfef2f838e7c3f37b1178ca46926b803faeab26ef018->leave($__internal_0f658c90e310e8b5ed5edfef2f838e7c3f37b1178ca46926b803faeab26ef018_prof);

        
        $__internal_a4cc1329b4b3dbe38fb8658e8cd4d1c38bd62953ddc95e2fa2981d7ac7168eee->leave($__internal_a4cc1329b4b3dbe38fb8658e8cd4d1c38bd62953ddc95e2fa2981d7ac7168eee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ffd2e8e8abbf574a8870057d745823a75ddc1bb6ce6955c37e0d228bb84af73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffd2e8e8abbf574a8870057d745823a75ddc1bb6ce6955c37e0d228bb84af73->enter($__internal_0ffd2e8e8abbf574a8870057d745823a75ddc1bb6ce6955c37e0d228bb84af73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd426737edb16eb42f07403a37911d8cd3996c017c1d122e7ed1a3c31c989fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd426737edb16eb42f07403a37911d8cd3996c017c1d122e7ed1a3c31c989fcb->enter($__internal_cd426737edb16eb42f07403a37911d8cd3996c017c1d122e7ed1a3c31c989fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd426737edb16eb42f07403a37911d8cd3996c017c1d122e7ed1a3c31c989fcb->leave($__internal_cd426737edb16eb42f07403a37911d8cd3996c017c1d122e7ed1a3c31c989fcb_prof);

        
        $__internal_0ffd2e8e8abbf574a8870057d745823a75ddc1bb6ce6955c37e0d228bb84af73->leave($__internal_0ffd2e8e8abbf574a8870057d745823a75ddc1bb6ce6955c37e0d228bb84af73_prof);

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
