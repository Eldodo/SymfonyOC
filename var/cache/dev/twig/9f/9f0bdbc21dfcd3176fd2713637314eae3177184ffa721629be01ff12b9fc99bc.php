<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_035d5de76bad5154611344b9ac0306e9d8411a66319f11808d0e93e055efb968 extends Twig_Template
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
        $__internal_342f26a2b2539bed19edc48877b0d6235b7ea671d613311c845ddc4100897cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342f26a2b2539bed19edc48877b0d6235b7ea671d613311c845ddc4100897cbc->enter($__internal_342f26a2b2539bed19edc48877b0d6235b7ea671d613311c845ddc4100897cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5c2650b9e524682d807f42ea696a40df000edf11d02be3b426add87ddf354d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2650b9e524682d807f42ea696a40df000edf11d02be3b426add87ddf354d2b->enter($__internal_5c2650b9e524682d807f42ea696a40df000edf11d02be3b426add87ddf354d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_342f26a2b2539bed19edc48877b0d6235b7ea671d613311c845ddc4100897cbc->leave($__internal_342f26a2b2539bed19edc48877b0d6235b7ea671d613311c845ddc4100897cbc_prof);

        
        $__internal_5c2650b9e524682d807f42ea696a40df000edf11d02be3b426add87ddf354d2b->leave($__internal_5c2650b9e524682d807f42ea696a40df000edf11d02be3b426add87ddf354d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
