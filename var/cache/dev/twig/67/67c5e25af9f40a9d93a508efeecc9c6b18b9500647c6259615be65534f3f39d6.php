<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e10bb384cc4056d8eb35a78d38fcf7ff4b83a8173ada47aacc0b7a10b0e7ff5a extends Twig_Template
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
        $__internal_64b5a3d48064ffe3ee5df13a495568e201f788cb31b2c99554cb4f69048ee4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b5a3d48064ffe3ee5df13a495568e201f788cb31b2c99554cb4f69048ee4be->enter($__internal_64b5a3d48064ffe3ee5df13a495568e201f788cb31b2c99554cb4f69048ee4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_231dec78a5b3e2e1e0c65f9fa8f9abbf42bcfe020513a460eefa474c6b51e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231dec78a5b3e2e1e0c65f9fa8f9abbf42bcfe020513a460eefa474c6b51e8ab->enter($__internal_231dec78a5b3e2e1e0c65f9fa8f9abbf42bcfe020513a460eefa474c6b51e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_64b5a3d48064ffe3ee5df13a495568e201f788cb31b2c99554cb4f69048ee4be->leave($__internal_64b5a3d48064ffe3ee5df13a495568e201f788cb31b2c99554cb4f69048ee4be_prof);

        
        $__internal_231dec78a5b3e2e1e0c65f9fa8f9abbf42bcfe020513a460eefa474c6b51e8ab->leave($__internal_231dec78a5b3e2e1e0c65f9fa8f9abbf42bcfe020513a460eefa474c6b51e8ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
