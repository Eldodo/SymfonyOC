<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3ff9034d3b534617cfe7f6dc5afc1ebed1d42e8492434eed31d1ab5dd8bf4dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea468f0ee6318b46d2a9628103b7b44d4a9be9d5451bda799757e09e3967002a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea468f0ee6318b46d2a9628103b7b44d4a9be9d5451bda799757e09e3967002a->enter($__internal_ea468f0ee6318b46d2a9628103b7b44d4a9be9d5451bda799757e09e3967002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e30ee3efaf9845d20d402919b623658de3b1c8200a3acfd3362b47b804cfb9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30ee3efaf9845d20d402919b623658de3b1c8200a3acfd3362b47b804cfb9eb->enter($__internal_e30ee3efaf9845d20d402919b623658de3b1c8200a3acfd3362b47b804cfb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea468f0ee6318b46d2a9628103b7b44d4a9be9d5451bda799757e09e3967002a->leave($__internal_ea468f0ee6318b46d2a9628103b7b44d4a9be9d5451bda799757e09e3967002a_prof);

        
        $__internal_e30ee3efaf9845d20d402919b623658de3b1c8200a3acfd3362b47b804cfb9eb->leave($__internal_e30ee3efaf9845d20d402919b623658de3b1c8200a3acfd3362b47b804cfb9eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8d56b6dbf7fc54f25f2097648aa6c865b55a82054fff6671d0c5272ada5ff28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d56b6dbf7fc54f25f2097648aa6c865b55a82054fff6671d0c5272ada5ff28->enter($__internal_a8d56b6dbf7fc54f25f2097648aa6c865b55a82054fff6671d0c5272ada5ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd92cee229e68fbe1df836ec376125c1b215dbfb8daa7a8c234e8bd8db625631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd92cee229e68fbe1df836ec376125c1b215dbfb8daa7a8c234e8bd8db625631->enter($__internal_dd92cee229e68fbe1df836ec376125c1b215dbfb8daa7a8c234e8bd8db625631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_dd92cee229e68fbe1df836ec376125c1b215dbfb8daa7a8c234e8bd8db625631->leave($__internal_dd92cee229e68fbe1df836ec376125c1b215dbfb8daa7a8c234e8bd8db625631_prof);

        
        $__internal_a8d56b6dbf7fc54f25f2097648aa6c865b55a82054fff6671d0c5272ada5ff28->leave($__internal_a8d56b6dbf7fc54f25f2097648aa6c865b55a82054fff6671d0c5272ada5ff28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
