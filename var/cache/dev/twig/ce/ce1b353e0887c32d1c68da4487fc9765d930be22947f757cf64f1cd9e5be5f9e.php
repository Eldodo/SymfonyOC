<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c23d05f837059f824ecce0e062ccba97781d166ebf8c415ddcdd12ca00dbad2e extends Twig_Template
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
        $__internal_6d53033bee6b04ccbdebb7fb2a7a6de81e26aeabf698d1305d157d368aea47e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d53033bee6b04ccbdebb7fb2a7a6de81e26aeabf698d1305d157d368aea47e0->enter($__internal_6d53033bee6b04ccbdebb7fb2a7a6de81e26aeabf698d1305d157d368aea47e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d2f3c7916ca52389515a558bcd49fa7734c47ab93727d49f4d1b0a2948de8306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f3c7916ca52389515a558bcd49fa7734c47ab93727d49f4d1b0a2948de8306->enter($__internal_d2f3c7916ca52389515a558bcd49fa7734c47ab93727d49f4d1b0a2948de8306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6d53033bee6b04ccbdebb7fb2a7a6de81e26aeabf698d1305d157d368aea47e0->leave($__internal_6d53033bee6b04ccbdebb7fb2a7a6de81e26aeabf698d1305d157d368aea47e0_prof);

        
        $__internal_d2f3c7916ca52389515a558bcd49fa7734c47ab93727d49f4d1b0a2948de8306->leave($__internal_d2f3c7916ca52389515a558bcd49fa7734c47ab93727d49f4d1b0a2948de8306_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
