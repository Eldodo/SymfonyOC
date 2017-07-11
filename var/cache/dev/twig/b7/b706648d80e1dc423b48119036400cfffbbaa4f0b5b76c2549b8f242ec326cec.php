<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_67f1a80dcd22a9c5a3b1e727e18659ceb16ff2d03f369079be7ad57887e7b122 extends Twig_Template
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
        $__internal_d29adf79945023e183b52da119f4c6b01ebc6bb85f8dbfaa55bcf3ca3bd8e288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29adf79945023e183b52da119f4c6b01ebc6bb85f8dbfaa55bcf3ca3bd8e288->enter($__internal_d29adf79945023e183b52da119f4c6b01ebc6bb85f8dbfaa55bcf3ca3bd8e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b31ca6380fecc0c6485e065e9810fe8344efa5de0698edc148ba88c62734f273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31ca6380fecc0c6485e065e9810fe8344efa5de0698edc148ba88c62734f273->enter($__internal_b31ca6380fecc0c6485e065e9810fe8344efa5de0698edc148ba88c62734f273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d29adf79945023e183b52da119f4c6b01ebc6bb85f8dbfaa55bcf3ca3bd8e288->leave($__internal_d29adf79945023e183b52da119f4c6b01ebc6bb85f8dbfaa55bcf3ca3bd8e288_prof);

        
        $__internal_b31ca6380fecc0c6485e065e9810fe8344efa5de0698edc148ba88c62734f273->leave($__internal_b31ca6380fecc0c6485e065e9810fe8344efa5de0698edc148ba88c62734f273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
