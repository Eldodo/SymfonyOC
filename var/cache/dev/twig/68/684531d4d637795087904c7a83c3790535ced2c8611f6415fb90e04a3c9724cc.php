<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f135fcc9c859e593c2ad6b4f6ea9321094ebdd77ec5d005d4bc6f1212203f014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_dcf5ad9248e5102d2508a171f55e83ba50151432dbdc9d9ffecee1080b7361b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf5ad9248e5102d2508a171f55e83ba50151432dbdc9d9ffecee1080b7361b1->enter($__internal_dcf5ad9248e5102d2508a171f55e83ba50151432dbdc9d9ffecee1080b7361b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_46eb980b57029d638d1628d83bdcd95441dc8dc56c0901d9dddffbdf5210cfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46eb980b57029d638d1628d83bdcd95441dc8dc56c0901d9dddffbdf5210cfae->enter($__internal_46eb980b57029d638d1628d83bdcd95441dc8dc56c0901d9dddffbdf5210cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf5ad9248e5102d2508a171f55e83ba50151432dbdc9d9ffecee1080b7361b1->leave($__internal_dcf5ad9248e5102d2508a171f55e83ba50151432dbdc9d9ffecee1080b7361b1_prof);

        
        $__internal_46eb980b57029d638d1628d83bdcd95441dc8dc56c0901d9dddffbdf5210cfae->leave($__internal_46eb980b57029d638d1628d83bdcd95441dc8dc56c0901d9dddffbdf5210cfae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d47ed1cf60636043be27039b1666b923c4b12f8cdac7b83ce2837ad1a38b397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d47ed1cf60636043be27039b1666b923c4b12f8cdac7b83ce2837ad1a38b397->enter($__internal_8d47ed1cf60636043be27039b1666b923c4b12f8cdac7b83ce2837ad1a38b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6371fd92442d64aa7a9246c1a3b6d1a110815b2be7dd054b036dff1f20c6119a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6371fd92442d64aa7a9246c1a3b6d1a110815b2be7dd054b036dff1f20c6119a->enter($__internal_6371fd92442d64aa7a9246c1a3b6d1a110815b2be7dd054b036dff1f20c6119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6371fd92442d64aa7a9246c1a3b6d1a110815b2be7dd054b036dff1f20c6119a->leave($__internal_6371fd92442d64aa7a9246c1a3b6d1a110815b2be7dd054b036dff1f20c6119a_prof);

        
        $__internal_8d47ed1cf60636043be27039b1666b923c4b12f8cdac7b83ce2837ad1a38b397->leave($__internal_8d47ed1cf60636043be27039b1666b923c4b12f8cdac7b83ce2837ad1a38b397_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3788693c19a9868bc62e9e5ff51c69950a7037beffab3c199e8bd6e6c2764b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3788693c19a9868bc62e9e5ff51c69950a7037beffab3c199e8bd6e6c2764b38->enter($__internal_3788693c19a9868bc62e9e5ff51c69950a7037beffab3c199e8bd6e6c2764b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c85f5501664392424b27e1d500802c4e6a73ad753285419a65ab0844e8fee36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c85f5501664392424b27e1d500802c4e6a73ad753285419a65ab0844e8fee36->enter($__internal_2c85f5501664392424b27e1d500802c4e6a73ad753285419a65ab0844e8fee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c85f5501664392424b27e1d500802c4e6a73ad753285419a65ab0844e8fee36->leave($__internal_2c85f5501664392424b27e1d500802c4e6a73ad753285419a65ab0844e8fee36_prof);

        
        $__internal_3788693c19a9868bc62e9e5ff51c69950a7037beffab3c199e8bd6e6c2764b38->leave($__internal_3788693c19a9868bc62e9e5ff51c69950a7037beffab3c199e8bd6e6c2764b38_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
