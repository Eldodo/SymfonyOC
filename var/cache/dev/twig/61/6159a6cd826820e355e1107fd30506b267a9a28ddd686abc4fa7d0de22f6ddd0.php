<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fe46c1e560d0d55d855c04188c532c2999d5e88fbc094a7837df0a195fbf60a2 extends Twig_Template
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
        $__internal_53a03df171c00cbe7220cbb49d7c67179f2848b6488e561263289520667a118e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a03df171c00cbe7220cbb49d7c67179f2848b6488e561263289520667a118e->enter($__internal_53a03df171c00cbe7220cbb49d7c67179f2848b6488e561263289520667a118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5c356e30596a042e8cb1c3c46a1bcacc1ff70c9bba5d8b31923d81ddf96e9adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c356e30596a042e8cb1c3c46a1bcacc1ff70c9bba5d8b31923d81ddf96e9adc->enter($__internal_5c356e30596a042e8cb1c3c46a1bcacc1ff70c9bba5d8b31923d81ddf96e9adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_53a03df171c00cbe7220cbb49d7c67179f2848b6488e561263289520667a118e->leave($__internal_53a03df171c00cbe7220cbb49d7c67179f2848b6488e561263289520667a118e_prof);

        
        $__internal_5c356e30596a042e8cb1c3c46a1bcacc1ff70c9bba5d8b31923d81ddf96e9adc->leave($__internal_5c356e30596a042e8cb1c3c46a1bcacc1ff70c9bba5d8b31923d81ddf96e9adc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
