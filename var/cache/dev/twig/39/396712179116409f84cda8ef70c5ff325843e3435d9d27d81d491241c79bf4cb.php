<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_6641cc0d8ecfd107c926b77425674ebce5ffe5e511d5dc0da0bbbee4eeeb6ece extends Twig_Template
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
        $__internal_36d307f5260524ec334a095d3e5fd26f25dc616f3bbd57d64fc3e461ceafd753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d307f5260524ec334a095d3e5fd26f25dc616f3bbd57d64fc3e461ceafd753->enter($__internal_36d307f5260524ec334a095d3e5fd26f25dc616f3bbd57d64fc3e461ceafd753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_e356e9b6ef85f03150548f05cfa1bcaa6def99f5d50616f189d75dc60513b46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e356e9b6ef85f03150548f05cfa1bcaa6def99f5d50616f189d75dc60513b46f->enter($__internal_e356e9b6ef85f03150548f05cfa1bcaa6def99f5d50616f189d75dc60513b46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "    <li>
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
        
        $__internal_36d307f5260524ec334a095d3e5fd26f25dc616f3bbd57d64fc3e461ceafd753->leave($__internal_36d307f5260524ec334a095d3e5fd26f25dc616f3bbd57d64fc3e461ceafd753_prof);

        
        $__internal_e356e9b6ef85f03150548f05cfa1bcaa6def99f5d50616f189d75dc60513b46f->leave($__internal_e356e9b6ef85f03150548f05cfa1bcaa6def99f5d50616f189d75dc60513b46f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
