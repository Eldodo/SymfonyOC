<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fe7fe160a3bbbe56bd0e7f877579c8aca5f8796033a23b5bf7bb64c3f3971ee8 extends Twig_Template
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
        $__internal_813b3b10a1050f2a19a5ff7e3cd1f4c746bbb115b96210bbc1b10f488ea2be13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813b3b10a1050f2a19a5ff7e3cd1f4c746bbb115b96210bbc1b10f488ea2be13->enter($__internal_813b3b10a1050f2a19a5ff7e3cd1f4c746bbb115b96210bbc1b10f488ea2be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2bc7c0e2145158e416dbb7cc0c97787dd8b033cc7ca0bb30919f4014a37e84dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc7c0e2145158e416dbb7cc0c97787dd8b033cc7ca0bb30919f4014a37e84dd->enter($__internal_2bc7c0e2145158e416dbb7cc0c97787dd8b033cc7ca0bb30919f4014a37e84dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_813b3b10a1050f2a19a5ff7e3cd1f4c746bbb115b96210bbc1b10f488ea2be13->leave($__internal_813b3b10a1050f2a19a5ff7e3cd1f4c746bbb115b96210bbc1b10f488ea2be13_prof);

        
        $__internal_2bc7c0e2145158e416dbb7cc0c97787dd8b033cc7ca0bb30919f4014a37e84dd->leave($__internal_2bc7c0e2145158e416dbb7cc0c97787dd8b033cc7ca0bb30919f4014a37e84dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
