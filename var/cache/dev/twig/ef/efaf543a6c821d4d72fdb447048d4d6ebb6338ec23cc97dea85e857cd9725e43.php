<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_35c315a7fe70822b9ac9fc30197f5dadd28a745917234858869690570edb585c extends Twig_Template
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
        $__internal_fbe623892ff56377d61597b9531635b24b93b0c6bbf8e38a319b4f84b811bc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe623892ff56377d61597b9531635b24b93b0c6bbf8e38a319b4f84b811bc28->enter($__internal_fbe623892ff56377d61597b9531635b24b93b0c6bbf8e38a319b4f84b811bc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_42fd9ff6ead3ede6759f7de05807de9a407876864d1e61f973ab36451d1bc57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fd9ff6ead3ede6759f7de05807de9a407876864d1e61f973ab36451d1bc57a->enter($__internal_42fd9ff6ead3ede6759f7de05807de9a407876864d1e61f973ab36451d1bc57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe623892ff56377d61597b9531635b24b93b0c6bbf8e38a319b4f84b811bc28->leave($__internal_fbe623892ff56377d61597b9531635b24b93b0c6bbf8e38a319b4f84b811bc28_prof);

        
        $__internal_42fd9ff6ead3ede6759f7de05807de9a407876864d1e61f973ab36451d1bc57a->leave($__internal_42fd9ff6ead3ede6759f7de05807de9a407876864d1e61f973ab36451d1bc57a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_113c776b5c4b751294d90245c6d79511b174278bfa8527b3d4b0b4644ab85d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113c776b5c4b751294d90245c6d79511b174278bfa8527b3d4b0b4644ab85d70->enter($__internal_113c776b5c4b751294d90245c6d79511b174278bfa8527b3d4b0b4644ab85d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b506380fdfbfd444bef68a430e2d83bc9a42d36b961e8626ea3a150ac568acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b506380fdfbfd444bef68a430e2d83bc9a42d36b961e8626ea3a150ac568acb->enter($__internal_2b506380fdfbfd444bef68a430e2d83bc9a42d36b961e8626ea3a150ac568acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b506380fdfbfd444bef68a430e2d83bc9a42d36b961e8626ea3a150ac568acb->leave($__internal_2b506380fdfbfd444bef68a430e2d83bc9a42d36b961e8626ea3a150ac568acb_prof);

        
        $__internal_113c776b5c4b751294d90245c6d79511b174278bfa8527b3d4b0b4644ab85d70->leave($__internal_113c776b5c4b751294d90245c6d79511b174278bfa8527b3d4b0b4644ab85d70_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_415f36ffca41cff07c774799dd5678759ad8e69600b8eefa24098d00f86f2bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415f36ffca41cff07c774799dd5678759ad8e69600b8eefa24098d00f86f2bc0->enter($__internal_415f36ffca41cff07c774799dd5678759ad8e69600b8eefa24098d00f86f2bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27c3a25c731ef9d7585b1873b6e36bc7730869e63bb5acf4914a8609e73a0df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c3a25c731ef9d7585b1873b6e36bc7730869e63bb5acf4914a8609e73a0df3->enter($__internal_27c3a25c731ef9d7585b1873b6e36bc7730869e63bb5acf4914a8609e73a0df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27c3a25c731ef9d7585b1873b6e36bc7730869e63bb5acf4914a8609e73a0df3->leave($__internal_27c3a25c731ef9d7585b1873b6e36bc7730869e63bb5acf4914a8609e73a0df3_prof);

        
        $__internal_415f36ffca41cff07c774799dd5678759ad8e69600b8eefa24098d00f86f2bc0->leave($__internal_415f36ffca41cff07c774799dd5678759ad8e69600b8eefa24098d00f86f2bc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81496a7c7fcecb7fa0392408389800338a7c922c6651df6d918732a9d9fba689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81496a7c7fcecb7fa0392408389800338a7c922c6651df6d918732a9d9fba689->enter($__internal_81496a7c7fcecb7fa0392408389800338a7c922c6651df6d918732a9d9fba689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4314c3ef4da2c3fe8ae43484b9b11d4d0236b2c50b1b7d97ae137b6f70714040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4314c3ef4da2c3fe8ae43484b9b11d4d0236b2c50b1b7d97ae137b6f70714040->enter($__internal_4314c3ef4da2c3fe8ae43484b9b11d4d0236b2c50b1b7d97ae137b6f70714040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4314c3ef4da2c3fe8ae43484b9b11d4d0236b2c50b1b7d97ae137b6f70714040->leave($__internal_4314c3ef4da2c3fe8ae43484b9b11d4d0236b2c50b1b7d97ae137b6f70714040_prof);

        
        $__internal_81496a7c7fcecb7fa0392408389800338a7c922c6651df6d918732a9d9fba689->leave($__internal_81496a7c7fcecb7fa0392408389800338a7c922c6651df6d918732a9d9fba689_prof);

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
