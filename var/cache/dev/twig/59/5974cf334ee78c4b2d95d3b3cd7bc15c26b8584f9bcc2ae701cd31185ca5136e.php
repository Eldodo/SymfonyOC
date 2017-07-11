<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac5c5f9a2c861cb4e42a636ed7601ce50de34b49475c11c75b928532eced4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac5c5f9a2c861cb4e42a636ed7601ce50de34b49475c11c75b928532eced4ca->enter($__internal_eac5c5f9a2c861cb4e42a636ed7601ce50de34b49475c11c75b928532eced4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_383ca0ae6c1a99c801ece07846b48fad7b8941c39ce0c7efa9edf78746265406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383ca0ae6c1a99c801ece07846b48fad7b8941c39ce0c7efa9edf78746265406->enter($__internal_383ca0ae6c1a99c801ece07846b48fad7b8941c39ce0c7efa9edf78746265406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_eac5c5f9a2c861cb4e42a636ed7601ce50de34b49475c11c75b928532eced4ca->leave($__internal_eac5c5f9a2c861cb4e42a636ed7601ce50de34b49475c11c75b928532eced4ca_prof);

        
        $__internal_383ca0ae6c1a99c801ece07846b48fad7b8941c39ce0c7efa9edf78746265406->leave($__internal_383ca0ae6c1a99c801ece07846b48fad7b8941c39ce0c7efa9edf78746265406_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae27b978ea1519d36fdb484909c512776b5c435d519a20b1cef55e2fe9829d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae27b978ea1519d36fdb484909c512776b5c435d519a20b1cef55e2fe9829d8e->enter($__internal_ae27b978ea1519d36fdb484909c512776b5c435d519a20b1cef55e2fe9829d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09a2e54e2d36bc9fff81dbdfea4de26607dcb1321d86d314010c22ae744a5b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a2e54e2d36bc9fff81dbdfea4de26607dcb1321d86d314010c22ae744a5b69->enter($__internal_09a2e54e2d36bc9fff81dbdfea4de26607dcb1321d86d314010c22ae744a5b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_09a2e54e2d36bc9fff81dbdfea4de26607dcb1321d86d314010c22ae744a5b69->leave($__internal_09a2e54e2d36bc9fff81dbdfea4de26607dcb1321d86d314010c22ae744a5b69_prof);

        
        $__internal_ae27b978ea1519d36fdb484909c512776b5c435d519a20b1cef55e2fe9829d8e->leave($__internal_ae27b978ea1519d36fdb484909c512776b5c435d519a20b1cef55e2fe9829d8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa200a1e04f4440d715836fd7fee73c6dd1c0779ee6ba32577a2cf9ccd8d3d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa200a1e04f4440d715836fd7fee73c6dd1c0779ee6ba32577a2cf9ccd8d3d1a->enter($__internal_fa200a1e04f4440d715836fd7fee73c6dd1c0779ee6ba32577a2cf9ccd8d3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f60bf4ea780886aa0a11207cc062b2bde134d2d4e93b40346250cdbba9ad67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f60bf4ea780886aa0a11207cc062b2bde134d2d4e93b40346250cdbba9ad67a->enter($__internal_7f60bf4ea780886aa0a11207cc062b2bde134d2d4e93b40346250cdbba9ad67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f60bf4ea780886aa0a11207cc062b2bde134d2d4e93b40346250cdbba9ad67a->leave($__internal_7f60bf4ea780886aa0a11207cc062b2bde134d2d4e93b40346250cdbba9ad67a_prof);

        
        $__internal_fa200a1e04f4440d715836fd7fee73c6dd1c0779ee6ba32577a2cf9ccd8d3d1a->leave($__internal_fa200a1e04f4440d715836fd7fee73c6dd1c0779ee6ba32577a2cf9ccd8d3d1a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca56fa24b0d78b42234954286d9b8108d821ea469d4b558821eb48c9fc17dd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca56fa24b0d78b42234954286d9b8108d821ea469d4b558821eb48c9fc17dd1d->enter($__internal_ca56fa24b0d78b42234954286d9b8108d821ea469d4b558821eb48c9fc17dd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca8048dd7f923ec7a7d99ca1fcfd28febbaae43e8e68c1c26311894e01f8f305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8048dd7f923ec7a7d99ca1fcfd28febbaae43e8e68c1c26311894e01f8f305->enter($__internal_ca8048dd7f923ec7a7d99ca1fcfd28febbaae43e8e68c1c26311894e01f8f305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca8048dd7f923ec7a7d99ca1fcfd28febbaae43e8e68c1c26311894e01f8f305->leave($__internal_ca8048dd7f923ec7a7d99ca1fcfd28febbaae43e8e68c1c26311894e01f8f305_prof);

        
        $__internal_ca56fa24b0d78b42234954286d9b8108d821ea469d4b558821eb48c9fc17dd1d->leave($__internal_ca56fa24b0d78b42234954286d9b8108d821ea469d4b558821eb48c9fc17dd1d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f8547afa0f8649d9f1ffcd3eae4e388e20afa48c0794340d8acb0df5df75d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8547afa0f8649d9f1ffcd3eae4e388e20afa48c0794340d8acb0df5df75d2e->enter($__internal_4f8547afa0f8649d9f1ffcd3eae4e388e20afa48c0794340d8acb0df5df75d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_956d67f9b3b138fef9f6f0a4faabb9528e1e7f92edd9d11054f416a3396cd014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956d67f9b3b138fef9f6f0a4faabb9528e1e7f92edd9d11054f416a3396cd014->enter($__internal_956d67f9b3b138fef9f6f0a4faabb9528e1e7f92edd9d11054f416a3396cd014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_956d67f9b3b138fef9f6f0a4faabb9528e1e7f92edd9d11054f416a3396cd014->leave($__internal_956d67f9b3b138fef9f6f0a4faabb9528e1e7f92edd9d11054f416a3396cd014_prof);

        
        $__internal_4f8547afa0f8649d9f1ffcd3eae4e388e20afa48c0794340d8acb0df5df75d2e->leave($__internal_4f8547afa0f8649d9f1ffcd3eae4e388e20afa48c0794340d8acb0df5df75d2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
