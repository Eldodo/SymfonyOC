<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_35ec3d6bd732403edb6c896fe1c336deee3265e7159f645205466b9da453b702 extends Twig_Template
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
        $__internal_f8401a5b8d504f16d3d52823eca8bb6fbb43c63a7d6fd6ef6db706a3b01c5dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8401a5b8d504f16d3d52823eca8bb6fbb43c63a7d6fd6ef6db706a3b01c5dea->enter($__internal_f8401a5b8d504f16d3d52823eca8bb6fbb43c63a7d6fd6ef6db706a3b01c5dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b0502b08d4b8d3fab1b5735ff6a3b8bbb97b1b126db1e17088cc3bf217c84b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0502b08d4b8d3fab1b5735ff6a3b8bbb97b1b126db1e17088cc3bf217c84b62->enter($__internal_b0502b08d4b8d3fab1b5735ff6a3b8bbb97b1b126db1e17088cc3bf217c84b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f8401a5b8d504f16d3d52823eca8bb6fbb43c63a7d6fd6ef6db706a3b01c5dea->leave($__internal_f8401a5b8d504f16d3d52823eca8bb6fbb43c63a7d6fd6ef6db706a3b01c5dea_prof);

        
        $__internal_b0502b08d4b8d3fab1b5735ff6a3b8bbb97b1b126db1e17088cc3bf217c84b62->leave($__internal_b0502b08d4b8d3fab1b5735ff6a3b8bbb97b1b126db1e17088cc3bf217c84b62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
