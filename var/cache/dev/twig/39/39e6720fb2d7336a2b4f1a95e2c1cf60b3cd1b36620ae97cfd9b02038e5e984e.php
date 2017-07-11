<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5dc4fa9c0d9f981e7d355d75f82d9a8258f8735362b4f39c0cf722608947d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b8766a468e9e86fad030f2defbbeadda7e894426c6297339b3a05172f09666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b8766a468e9e86fad030f2defbbeadda7e894426c6297339b3a05172f09666->enter($__internal_14b8766a468e9e86fad030f2defbbeadda7e894426c6297339b3a05172f09666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b9afbe59de17a58084636b45555d9de3daad3057011ced13e099063fd7fc025e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9afbe59de17a58084636b45555d9de3daad3057011ced13e099063fd7fc025e->enter($__internal_b9afbe59de17a58084636b45555d9de3daad3057011ced13e099063fd7fc025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b8766a468e9e86fad030f2defbbeadda7e894426c6297339b3a05172f09666->leave($__internal_14b8766a468e9e86fad030f2defbbeadda7e894426c6297339b3a05172f09666_prof);

        
        $__internal_b9afbe59de17a58084636b45555d9de3daad3057011ced13e099063fd7fc025e->leave($__internal_b9afbe59de17a58084636b45555d9de3daad3057011ced13e099063fd7fc025e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daf2fa0669b80e887524624108ea2d40e758429921f70dc0cd5544cb2a0c525c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf2fa0669b80e887524624108ea2d40e758429921f70dc0cd5544cb2a0c525c->enter($__internal_daf2fa0669b80e887524624108ea2d40e758429921f70dc0cd5544cb2a0c525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bb889df75eb091ef2ecc49720ccae5df7e4deb945f05803ba6ece7265391f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb889df75eb091ef2ecc49720ccae5df7e4deb945f05803ba6ece7265391f40->enter($__internal_0bb889df75eb091ef2ecc49720ccae5df7e4deb945f05803ba6ece7265391f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bb889df75eb091ef2ecc49720ccae5df7e4deb945f05803ba6ece7265391f40->leave($__internal_0bb889df75eb091ef2ecc49720ccae5df7e4deb945f05803ba6ece7265391f40_prof);

        
        $__internal_daf2fa0669b80e887524624108ea2d40e758429921f70dc0cd5544cb2a0c525c->leave($__internal_daf2fa0669b80e887524624108ea2d40e758429921f70dc0cd5544cb2a0c525c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f28177318d870f386f24e25f0e172b5ea3cbd7590a128e3544b84d95809e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f28177318d870f386f24e25f0e172b5ea3cbd7590a128e3544b84d95809e4d->enter($__internal_b1f28177318d870f386f24e25f0e172b5ea3cbd7590a128e3544b84d95809e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53c88d3ae1d5d41678d1a6a8273d9ae25a05ff653e25b8b197f6886e3d7757e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c88d3ae1d5d41678d1a6a8273d9ae25a05ff653e25b8b197f6886e3d7757e3->enter($__internal_53c88d3ae1d5d41678d1a6a8273d9ae25a05ff653e25b8b197f6886e3d7757e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_53c88d3ae1d5d41678d1a6a8273d9ae25a05ff653e25b8b197f6886e3d7757e3->leave($__internal_53c88d3ae1d5d41678d1a6a8273d9ae25a05ff653e25b8b197f6886e3d7757e3_prof);

        
        $__internal_b1f28177318d870f386f24e25f0e172b5ea3cbd7590a128e3544b84d95809e4d->leave($__internal_b1f28177318d870f386f24e25f0e172b5ea3cbd7590a128e3544b84d95809e4d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
