<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2a0436dd2a9f53c23f00170b2c5da711c543b368dd900f9f1d6defcf1f6bdf85 extends Twig_Template
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
        $__internal_3661e069bc30c1b3eee1b07f811282e1d2d31f6a277995ac0d34e55f0d4ac1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3661e069bc30c1b3eee1b07f811282e1d2d31f6a277995ac0d34e55f0d4ac1a2->enter($__internal_3661e069bc30c1b3eee1b07f811282e1d2d31f6a277995ac0d34e55f0d4ac1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5bdda4ecb8a7e7d0bdc25c93969921e21f57fbe70fb6212f9fe7385e8e1cbb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdda4ecb8a7e7d0bdc25c93969921e21f57fbe70fb6212f9fe7385e8e1cbb86->enter($__internal_5bdda4ecb8a7e7d0bdc25c93969921e21f57fbe70fb6212f9fe7385e8e1cbb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3661e069bc30c1b3eee1b07f811282e1d2d31f6a277995ac0d34e55f0d4ac1a2->leave($__internal_3661e069bc30c1b3eee1b07f811282e1d2d31f6a277995ac0d34e55f0d4ac1a2_prof);

        
        $__internal_5bdda4ecb8a7e7d0bdc25c93969921e21f57fbe70fb6212f9fe7385e8e1cbb86->leave($__internal_5bdda4ecb8a7e7d0bdc25c93969921e21f57fbe70fb6212f9fe7385e8e1cbb86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
