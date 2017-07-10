<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e4d89314752a173849abb5847f691a366e893444c7161b3f1b6c502680dd908 extends Twig_Template
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
        $__internal_818329dabf718229d32d75c7b760e0c3376ff4f9de4e75f8bb116927121fb2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818329dabf718229d32d75c7b760e0c3376ff4f9de4e75f8bb116927121fb2ee->enter($__internal_818329dabf718229d32d75c7b760e0c3376ff4f9de4e75f8bb116927121fb2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3c09fc6fcbc0182b82551cb6009c0c926bb1997a7d68091fe4d6c6fe5444b8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c09fc6fcbc0182b82551cb6009c0c926bb1997a7d68091fe4d6c6fe5444b8f8->enter($__internal_3c09fc6fcbc0182b82551cb6009c0c926bb1997a7d68091fe4d6c6fe5444b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_818329dabf718229d32d75c7b760e0c3376ff4f9de4e75f8bb116927121fb2ee->leave($__internal_818329dabf718229d32d75c7b760e0c3376ff4f9de4e75f8bb116927121fb2ee_prof);

        
        $__internal_3c09fc6fcbc0182b82551cb6009c0c926bb1997a7d68091fe4d6c6fe5444b8f8->leave($__internal_3c09fc6fcbc0182b82551cb6009c0c926bb1997a7d68091fe4d6c6fe5444b8f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
