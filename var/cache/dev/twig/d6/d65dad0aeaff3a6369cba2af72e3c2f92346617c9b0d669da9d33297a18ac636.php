<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_afcd855cf6907a24781f62c7ae14eb8a6e62094b155e63d3bc1b0680c66ebf19 extends Twig_Template
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
        $__internal_d6ce94c6a9194d699a217b1d8388e22a9e1aedad07b8b6f4845dba5a9686c8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce94c6a9194d699a217b1d8388e22a9e1aedad07b8b6f4845dba5a9686c8a2->enter($__internal_d6ce94c6a9194d699a217b1d8388e22a9e1aedad07b8b6f4845dba5a9686c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_653dbbb202db8db4c4f4e240b8f4e3aeb894ba41ce4bb7cd2c6a8339cf6a73fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653dbbb202db8db4c4f4e240b8f4e3aeb894ba41ce4bb7cd2c6a8339cf6a73fd->enter($__internal_653dbbb202db8db4c4f4e240b8f4e3aeb894ba41ce4bb7cd2c6a8339cf6a73fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d6ce94c6a9194d699a217b1d8388e22a9e1aedad07b8b6f4845dba5a9686c8a2->leave($__internal_d6ce94c6a9194d699a217b1d8388e22a9e1aedad07b8b6f4845dba5a9686c8a2_prof);

        
        $__internal_653dbbb202db8db4c4f4e240b8f4e3aeb894ba41ce4bb7cd2c6a8339cf6a73fd->leave($__internal_653dbbb202db8db4c4f4e240b8f4e3aeb894ba41ce4bb7cd2c6a8339cf6a73fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
