<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_537dafe19aad3c085ee6e8de3defcf10426c3173281ebdaf33090df7fe45315b extends Twig_Template
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
        $__internal_0b4ebfd3a125da032f6a07598896ce08aad01a42c6cbc3460eea70d2def10ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4ebfd3a125da032f6a07598896ce08aad01a42c6cbc3460eea70d2def10ecc->enter($__internal_0b4ebfd3a125da032f6a07598896ce08aad01a42c6cbc3460eea70d2def10ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b5f91104cf9dfacd2a858e567ed007b7c9c9be393156d84cdd7bd8ba80ba95af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f91104cf9dfacd2a858e567ed007b7c9c9be393156d84cdd7bd8ba80ba95af->enter($__internal_b5f91104cf9dfacd2a858e567ed007b7c9c9be393156d84cdd7bd8ba80ba95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0b4ebfd3a125da032f6a07598896ce08aad01a42c6cbc3460eea70d2def10ecc->leave($__internal_0b4ebfd3a125da032f6a07598896ce08aad01a42c6cbc3460eea70d2def10ecc_prof);

        
        $__internal_b5f91104cf9dfacd2a858e567ed007b7c9c9be393156d84cdd7bd8ba80ba95af->leave($__internal_b5f91104cf9dfacd2a858e567ed007b7c9c9be393156d84cdd7bd8ba80ba95af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
