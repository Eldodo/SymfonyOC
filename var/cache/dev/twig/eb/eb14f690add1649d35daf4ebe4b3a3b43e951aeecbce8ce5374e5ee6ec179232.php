<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8abf24a7fd9465cf4596135d5b010e59c3764277ca4bd022e48a982905834aec extends Twig_Template
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
        $__internal_65ebfb189aa49a8632081f45a94aa1c38dc7b7b7856fd1fde362de7991b426df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ebfb189aa49a8632081f45a94aa1c38dc7b7b7856fd1fde362de7991b426df->enter($__internal_65ebfb189aa49a8632081f45a94aa1c38dc7b7b7856fd1fde362de7991b426df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ecd1adcf0fb00ec9bab1385cfc433e468413e93ad44e829c661ca40a989308be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd1adcf0fb00ec9bab1385cfc433e468413e93ad44e829c661ca40a989308be->enter($__internal_ecd1adcf0fb00ec9bab1385cfc433e468413e93ad44e829c661ca40a989308be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65ebfb189aa49a8632081f45a94aa1c38dc7b7b7856fd1fde362de7991b426df->leave($__internal_65ebfb189aa49a8632081f45a94aa1c38dc7b7b7856fd1fde362de7991b426df_prof);

        
        $__internal_ecd1adcf0fb00ec9bab1385cfc433e468413e93ad44e829c661ca40a989308be->leave($__internal_ecd1adcf0fb00ec9bab1385cfc433e468413e93ad44e829c661ca40a989308be_prof);

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
