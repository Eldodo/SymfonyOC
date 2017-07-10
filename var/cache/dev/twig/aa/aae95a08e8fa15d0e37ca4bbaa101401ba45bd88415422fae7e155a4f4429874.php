<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_604a9872c0bf5aa6873d038b21f631a1a312f27908d561fe25030d1c1ef60740 extends Twig_Template
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
        $__internal_d2ddbe30492abda5b2a5c5fef83b3503278327450d38cd99232b3ac3a0c30059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ddbe30492abda5b2a5c5fef83b3503278327450d38cd99232b3ac3a0c30059->enter($__internal_d2ddbe30492abda5b2a5c5fef83b3503278327450d38cd99232b3ac3a0c30059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7fc8580eedbefb1d8b9fc7b45a024de990037c7212f527716692c5dc7a1ec3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc8580eedbefb1d8b9fc7b45a024de990037c7212f527716692c5dc7a1ec3e4->enter($__internal_7fc8580eedbefb1d8b9fc7b45a024de990037c7212f527716692c5dc7a1ec3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d2ddbe30492abda5b2a5c5fef83b3503278327450d38cd99232b3ac3a0c30059->leave($__internal_d2ddbe30492abda5b2a5c5fef83b3503278327450d38cd99232b3ac3a0c30059_prof);

        
        $__internal_7fc8580eedbefb1d8b9fc7b45a024de990037c7212f527716692c5dc7a1ec3e4->leave($__internal_7fc8580eedbefb1d8b9fc7b45a024de990037c7212f527716692c5dc7a1ec3e4_prof);

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
