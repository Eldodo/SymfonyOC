<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c26308d70f3e2fc16626de031067fc9595247e7c42a673b9a37a2016c6468425 extends Twig_Template
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
        $__internal_5302fefaf92401cfebf965f6e0d313635576433664ae335bd90c3a41f727b865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5302fefaf92401cfebf965f6e0d313635576433664ae335bd90c3a41f727b865->enter($__internal_5302fefaf92401cfebf965f6e0d313635576433664ae335bd90c3a41f727b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1c81ba2943a8c25ca7cf86e4b926a9d3706d4286df135c077c87d57546f12db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c81ba2943a8c25ca7cf86e4b926a9d3706d4286df135c077c87d57546f12db9->enter($__internal_1c81ba2943a8c25ca7cf86e4b926a9d3706d4286df135c077c87d57546f12db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5302fefaf92401cfebf965f6e0d313635576433664ae335bd90c3a41f727b865->leave($__internal_5302fefaf92401cfebf965f6e0d313635576433664ae335bd90c3a41f727b865_prof);

        
        $__internal_1c81ba2943a8c25ca7cf86e4b926a9d3706d4286df135c077c87d57546f12db9->leave($__internal_1c81ba2943a8c25ca7cf86e4b926a9d3706d4286df135c077c87d57546f12db9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
