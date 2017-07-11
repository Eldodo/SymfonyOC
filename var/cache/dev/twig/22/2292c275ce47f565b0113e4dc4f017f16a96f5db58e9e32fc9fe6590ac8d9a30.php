<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_92b5add0d24ca0ad8c7a5440a2fd9b588025f39b146480613a48550b9ca2694d extends Twig_Template
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
        $__internal_a7b1f26e837f1d8886d73112262bb18ad6e687ec378c40eee6aafbbbbdb53961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b1f26e837f1d8886d73112262bb18ad6e687ec378c40eee6aafbbbbdb53961->enter($__internal_a7b1f26e837f1d8886d73112262bb18ad6e687ec378c40eee6aafbbbbdb53961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c769778586cf510a1997bd0e1da080e2d92de6b244216db4d1a0babd686ce8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c769778586cf510a1997bd0e1da080e2d92de6b244216db4d1a0babd686ce8ec->enter($__internal_c769778586cf510a1997bd0e1da080e2d92de6b244216db4d1a0babd686ce8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a7b1f26e837f1d8886d73112262bb18ad6e687ec378c40eee6aafbbbbdb53961->leave($__internal_a7b1f26e837f1d8886d73112262bb18ad6e687ec378c40eee6aafbbbbdb53961_prof);

        
        $__internal_c769778586cf510a1997bd0e1da080e2d92de6b244216db4d1a0babd686ce8ec->leave($__internal_c769778586cf510a1997bd0e1da080e2d92de6b244216db4d1a0babd686ce8ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
