<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc985dafdb840713711c11b12f4a068e0a977cfc4c609fa2625b0926b11f3e8e extends Twig_Template
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
        $__internal_e2c6a278bcaa64781500b4f3ea68f8c110c3e45ff7725995cd96bdb7a094ab15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c6a278bcaa64781500b4f3ea68f8c110c3e45ff7725995cd96bdb7a094ab15->enter($__internal_e2c6a278bcaa64781500b4f3ea68f8c110c3e45ff7725995cd96bdb7a094ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_94722bd072c686cd7e23431b76d74782b44e30245c66890ca18c9f0f032a2621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94722bd072c686cd7e23431b76d74782b44e30245c66890ca18c9f0f032a2621->enter($__internal_94722bd072c686cd7e23431b76d74782b44e30245c66890ca18c9f0f032a2621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e2c6a278bcaa64781500b4f3ea68f8c110c3e45ff7725995cd96bdb7a094ab15->leave($__internal_e2c6a278bcaa64781500b4f3ea68f8c110c3e45ff7725995cd96bdb7a094ab15_prof);

        
        $__internal_94722bd072c686cd7e23431b76d74782b44e30245c66890ca18c9f0f032a2621->leave($__internal_94722bd072c686cd7e23431b76d74782b44e30245c66890ca18c9f0f032a2621_prof);

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
