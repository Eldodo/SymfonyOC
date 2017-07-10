<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dcf1a5437117ce41a357013b25ff33ab71d8fe5351a3af5a2898ae37a6995555 extends Twig_Template
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
        $__internal_dba053915a64a75a74828feb8aad721c51058ebfd78b3922c88b0ddc8f1032d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba053915a64a75a74828feb8aad721c51058ebfd78b3922c88b0ddc8f1032d4->enter($__internal_dba053915a64a75a74828feb8aad721c51058ebfd78b3922c88b0ddc8f1032d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e3a4b1045390670ace1b74a6ecc55f5735669f6b5c9770cc42ce814ccb3f32b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a4b1045390670ace1b74a6ecc55f5735669f6b5c9770cc42ce814ccb3f32b9->enter($__internal_e3a4b1045390670ace1b74a6ecc55f5735669f6b5c9770cc42ce814ccb3f32b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dba053915a64a75a74828feb8aad721c51058ebfd78b3922c88b0ddc8f1032d4->leave($__internal_dba053915a64a75a74828feb8aad721c51058ebfd78b3922c88b0ddc8f1032d4_prof);

        
        $__internal_e3a4b1045390670ace1b74a6ecc55f5735669f6b5c9770cc42ce814ccb3f32b9->leave($__internal_e3a4b1045390670ace1b74a6ecc55f5735669f6b5c9770cc42ce814ccb3f32b9_prof);

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
