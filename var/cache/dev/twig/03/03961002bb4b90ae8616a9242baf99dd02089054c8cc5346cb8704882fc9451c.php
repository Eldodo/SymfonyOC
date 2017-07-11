<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1761c6332f72f565103e18d5c150091532ed6585b7e1f579c0af27fdb290b664 extends Twig_Template
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
        $__internal_3a749a14e7e523c8bc03d7c240c7812a0a70fa2c3282a609434a3ad52633660f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a749a14e7e523c8bc03d7c240c7812a0a70fa2c3282a609434a3ad52633660f->enter($__internal_3a749a14e7e523c8bc03d7c240c7812a0a70fa2c3282a609434a3ad52633660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7b8710a18e593185aff92f71948bb5be40ed50f45abffbd20ba6ad61db5b4f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8710a18e593185aff92f71948bb5be40ed50f45abffbd20ba6ad61db5b4f7c->enter($__internal_7b8710a18e593185aff92f71948bb5be40ed50f45abffbd20ba6ad61db5b4f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3a749a14e7e523c8bc03d7c240c7812a0a70fa2c3282a609434a3ad52633660f->leave($__internal_3a749a14e7e523c8bc03d7c240c7812a0a70fa2c3282a609434a3ad52633660f_prof);

        
        $__internal_7b8710a18e593185aff92f71948bb5be40ed50f45abffbd20ba6ad61db5b4f7c->leave($__internal_7b8710a18e593185aff92f71948bb5be40ed50f45abffbd20ba6ad61db5b4f7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
