<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8c37657f0cb6e9e86578da9b539773576896016ed545a57263743211646ea8f8 extends Twig_Template
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
        $__internal_09aca0967e32e0ef6b40b9f5321f94d8b745bf6ced1d5db46b0f28211460e549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09aca0967e32e0ef6b40b9f5321f94d8b745bf6ced1d5db46b0f28211460e549->enter($__internal_09aca0967e32e0ef6b40b9f5321f94d8b745bf6ced1d5db46b0f28211460e549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_87492b4e6db5ccbf11defc7823d07e3bd02cf0f238fc232223babd03b9ebaf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87492b4e6db5ccbf11defc7823d07e3bd02cf0f238fc232223babd03b9ebaf04->enter($__internal_87492b4e6db5ccbf11defc7823d07e3bd02cf0f238fc232223babd03b9ebaf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_09aca0967e32e0ef6b40b9f5321f94d8b745bf6ced1d5db46b0f28211460e549->leave($__internal_09aca0967e32e0ef6b40b9f5321f94d8b745bf6ced1d5db46b0f28211460e549_prof);

        
        $__internal_87492b4e6db5ccbf11defc7823d07e3bd02cf0f238fc232223babd03b9ebaf04->leave($__internal_87492b4e6db5ccbf11defc7823d07e3bd02cf0f238fc232223babd03b9ebaf04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
