<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fda4e9ea93f9274252214e7d4258eb8ad784d74345c492365dfa2716f6fc8259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5d624c822462192c6737b5f4a5d0925ffad3a35af069f1127a1e271960fc73a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d624c822462192c6737b5f4a5d0925ffad3a35af069f1127a1e271960fc73a9->enter($__internal_5d624c822462192c6737b5f4a5d0925ffad3a35af069f1127a1e271960fc73a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_77b8d6b1aadc7c45350340fec47e6a7e2f97c31646bea6d70dac324f3f7f8015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b8d6b1aadc7c45350340fec47e6a7e2f97c31646bea6d70dac324f3f7f8015->enter($__internal_77b8d6b1aadc7c45350340fec47e6a7e2f97c31646bea6d70dac324f3f7f8015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d624c822462192c6737b5f4a5d0925ffad3a35af069f1127a1e271960fc73a9->leave($__internal_5d624c822462192c6737b5f4a5d0925ffad3a35af069f1127a1e271960fc73a9_prof);

        
        $__internal_77b8d6b1aadc7c45350340fec47e6a7e2f97c31646bea6d70dac324f3f7f8015->leave($__internal_77b8d6b1aadc7c45350340fec47e6a7e2f97c31646bea6d70dac324f3f7f8015_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b5839f9f3f9316a5d13e71623815257dc4698818cdcb3d6030ecfb2ce4aad4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5839f9f3f9316a5d13e71623815257dc4698818cdcb3d6030ecfb2ce4aad4c->enter($__internal_8b5839f9f3f9316a5d13e71623815257dc4698818cdcb3d6030ecfb2ce4aad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_61af1ce4ceb16fd9331ed480d66f9029c9825842ac627c6694709466fe0bdcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61af1ce4ceb16fd9331ed480d66f9029c9825842ac627c6694709466fe0bdcff->enter($__internal_61af1ce4ceb16fd9331ed480d66f9029c9825842ac627c6694709466fe0bdcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61af1ce4ceb16fd9331ed480d66f9029c9825842ac627c6694709466fe0bdcff->leave($__internal_61af1ce4ceb16fd9331ed480d66f9029c9825842ac627c6694709466fe0bdcff_prof);

        
        $__internal_8b5839f9f3f9316a5d13e71623815257dc4698818cdcb3d6030ecfb2ce4aad4c->leave($__internal_8b5839f9f3f9316a5d13e71623815257dc4698818cdcb3d6030ecfb2ce4aad4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66853913db6c2607fb0e783333b611ba78f44a09aa9a96e7296b572aa43b739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66853913db6c2607fb0e783333b611ba78f44a09aa9a96e7296b572aa43b739c->enter($__internal_66853913db6c2607fb0e783333b611ba78f44a09aa9a96e7296b572aa43b739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d7bad3f259b2e0a337ebebd8563ce872e555bc095da2fdb13014e2ccef4bd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7bad3f259b2e0a337ebebd8563ce872e555bc095da2fdb13014e2ccef4bd83->enter($__internal_6d7bad3f259b2e0a337ebebd8563ce872e555bc095da2fdb13014e2ccef4bd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d7bad3f259b2e0a337ebebd8563ce872e555bc095da2fdb13014e2ccef4bd83->leave($__internal_6d7bad3f259b2e0a337ebebd8563ce872e555bc095da2fdb13014e2ccef4bd83_prof);

        
        $__internal_66853913db6c2607fb0e783333b611ba78f44a09aa9a96e7296b572aa43b739c->leave($__internal_66853913db6c2607fb0e783333b611ba78f44a09aa9a96e7296b572aa43b739c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7084236094b45f7d202ecafdad7f98146104aacd5c579da684e2de07611d45b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7084236094b45f7d202ecafdad7f98146104aacd5c579da684e2de07611d45b5->enter($__internal_7084236094b45f7d202ecafdad7f98146104aacd5c579da684e2de07611d45b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a27cd657c2cbd08e5a2dda2a3592fdf2e7355e1cfec51dec626e977227b6fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a27cd657c2cbd08e5a2dda2a3592fdf2e7355e1cfec51dec626e977227b6fdd->enter($__internal_3a27cd657c2cbd08e5a2dda2a3592fdf2e7355e1cfec51dec626e977227b6fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a27cd657c2cbd08e5a2dda2a3592fdf2e7355e1cfec51dec626e977227b6fdd->leave($__internal_3a27cd657c2cbd08e5a2dda2a3592fdf2e7355e1cfec51dec626e977227b6fdd_prof);

        
        $__internal_7084236094b45f7d202ecafdad7f98146104aacd5c579da684e2de07611d45b5->leave($__internal_7084236094b45f7d202ecafdad7f98146104aacd5c579da684e2de07611d45b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
