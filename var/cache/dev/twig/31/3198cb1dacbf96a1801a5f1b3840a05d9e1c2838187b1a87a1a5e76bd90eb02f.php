<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
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
        $__internal_20575007c366e58c4a93e483dbe4667b73e2e56a09d8723b7ea987102c38bef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20575007c366e58c4a93e483dbe4667b73e2e56a09d8723b7ea987102c38bef8->enter($__internal_20575007c366e58c4a93e483dbe4667b73e2e56a09d8723b7ea987102c38bef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_abcb16b83aac1fe0f0edca8e9e5a55c087678043dd82ac54ad2230d8310c3723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcb16b83aac1fe0f0edca8e9e5a55c087678043dd82ac54ad2230d8310c3723->enter($__internal_abcb16b83aac1fe0f0edca8e9e5a55c087678043dd82ac54ad2230d8310c3723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_20575007c366e58c4a93e483dbe4667b73e2e56a09d8723b7ea987102c38bef8->leave($__internal_20575007c366e58c4a93e483dbe4667b73e2e56a09d8723b7ea987102c38bef8_prof);

        
        $__internal_abcb16b83aac1fe0f0edca8e9e5a55c087678043dd82ac54ad2230d8310c3723->leave($__internal_abcb16b83aac1fe0f0edca8e9e5a55c087678043dd82ac54ad2230d8310c3723_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3239b482e3b20a8080cac4805bd8dbdf235efc2b417af41582419152a3ed1bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3239b482e3b20a8080cac4805bd8dbdf235efc2b417af41582419152a3ed1bda->enter($__internal_3239b482e3b20a8080cac4805bd8dbdf235efc2b417af41582419152a3ed1bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_044e11419b71c3c99035691212283d10c8997b67a008bc16dd9434d9d875ae0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044e11419b71c3c99035691212283d10c8997b67a008bc16dd9434d9d875ae0e->enter($__internal_044e11419b71c3c99035691212283d10c8997b67a008bc16dd9434d9d875ae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_044e11419b71c3c99035691212283d10c8997b67a008bc16dd9434d9d875ae0e->leave($__internal_044e11419b71c3c99035691212283d10c8997b67a008bc16dd9434d9d875ae0e_prof);

        
        $__internal_3239b482e3b20a8080cac4805bd8dbdf235efc2b417af41582419152a3ed1bda->leave($__internal_3239b482e3b20a8080cac4805bd8dbdf235efc2b417af41582419152a3ed1bda_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1ee2b382a660f9d625900e24ee6f4bf84977cb40bcadf609a75c7c51d83b317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee2b382a660f9d625900e24ee6f4bf84977cb40bcadf609a75c7c51d83b317->enter($__internal_b1ee2b382a660f9d625900e24ee6f4bf84977cb40bcadf609a75c7c51d83b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b22bdfbbf934595560c90f15058eb2e85f7030f3b7ac64b78998a4a5cfff575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b22bdfbbf934595560c90f15058eb2e85f7030f3b7ac64b78998a4a5cfff575->enter($__internal_5b22bdfbbf934595560c90f15058eb2e85f7030f3b7ac64b78998a4a5cfff575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b22bdfbbf934595560c90f15058eb2e85f7030f3b7ac64b78998a4a5cfff575->leave($__internal_5b22bdfbbf934595560c90f15058eb2e85f7030f3b7ac64b78998a4a5cfff575_prof);

        
        $__internal_b1ee2b382a660f9d625900e24ee6f4bf84977cb40bcadf609a75c7c51d83b317->leave($__internal_b1ee2b382a660f9d625900e24ee6f4bf84977cb40bcadf609a75c7c51d83b317_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5840127af2fa82747b5dd4b139f2260e0dc3238135ecc43e348b921cdc632773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5840127af2fa82747b5dd4b139f2260e0dc3238135ecc43e348b921cdc632773->enter($__internal_5840127af2fa82747b5dd4b139f2260e0dc3238135ecc43e348b921cdc632773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56cfd15883afac645ec62350cf094049b2214d161fbc4a01f31f9d010000866b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cfd15883afac645ec62350cf094049b2214d161fbc4a01f31f9d010000866b->enter($__internal_56cfd15883afac645ec62350cf094049b2214d161fbc4a01f31f9d010000866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56cfd15883afac645ec62350cf094049b2214d161fbc4a01f31f9d010000866b->leave($__internal_56cfd15883afac645ec62350cf094049b2214d161fbc4a01f31f9d010000866b_prof);

        
        $__internal_5840127af2fa82747b5dd4b139f2260e0dc3238135ecc43e348b921cdc632773->leave($__internal_5840127af2fa82747b5dd4b139f2260e0dc3238135ecc43e348b921cdc632773_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_093dd61fa0caca8c43d8fcc703ec1dd2f262cf980ef3ab38611a5d01c746c2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093dd61fa0caca8c43d8fcc703ec1dd2f262cf980ef3ab38611a5d01c746c2cf->enter($__internal_093dd61fa0caca8c43d8fcc703ec1dd2f262cf980ef3ab38611a5d01c746c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6b14265c4794dcb0760495afed074462e6ba46f869b84917f04f042fe0d4298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b14265c4794dcb0760495afed074462e6ba46f869b84917f04f042fe0d4298->enter($__internal_b6b14265c4794dcb0760495afed074462e6ba46f869b84917f04f042fe0d4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6b14265c4794dcb0760495afed074462e6ba46f869b84917f04f042fe0d4298->leave($__internal_b6b14265c4794dcb0760495afed074462e6ba46f869b84917f04f042fe0d4298_prof);

        
        $__internal_093dd61fa0caca8c43d8fcc703ec1dd2f262cf980ef3ab38611a5d01c746c2cf->leave($__internal_093dd61fa0caca8c43d8fcc703ec1dd2f262cf980ef3ab38611a5d01c746c2cf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
