<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_28b68d99d7b21fa81c8dfffcc170db1832250f1fe75792b54c460e3e8840b646 extends Twig_Template
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
        $__internal_7994310ba45dada7c9ea25f48f461703b244b833a658482af642a7c949529121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7994310ba45dada7c9ea25f48f461703b244b833a658482af642a7c949529121->enter($__internal_7994310ba45dada7c9ea25f48f461703b244b833a658482af642a7c949529121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_724034a3a8f15570b153164478d897776a2740d7984d5520af3050969cf7eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724034a3a8f15570b153164478d897776a2740d7984d5520af3050969cf7eced->enter($__internal_724034a3a8f15570b153164478d897776a2740d7984d5520af3050969cf7eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7994310ba45dada7c9ea25f48f461703b244b833a658482af642a7c949529121->leave($__internal_7994310ba45dada7c9ea25f48f461703b244b833a658482af642a7c949529121_prof);

        
        $__internal_724034a3a8f15570b153164478d897776a2740d7984d5520af3050969cf7eced->leave($__internal_724034a3a8f15570b153164478d897776a2740d7984d5520af3050969cf7eced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
