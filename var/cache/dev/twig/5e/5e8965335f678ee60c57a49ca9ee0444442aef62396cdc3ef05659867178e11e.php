<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e056758bbf498e36dc394e54ea3c1c9621998f54a210fc676ea4fce2635ce03 extends Twig_Template
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
        $__internal_23c643a2df2ffa28177f2d6d66e798cf06ad8a472f163d7ca7afbff2c4a88dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c643a2df2ffa28177f2d6d66e798cf06ad8a472f163d7ca7afbff2c4a88dab->enter($__internal_23c643a2df2ffa28177f2d6d66e798cf06ad8a472f163d7ca7afbff2c4a88dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1d9669afe12b3beafa0a12ce861a4f2a9e3a231963004a74bdffeb3702c1804e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9669afe12b3beafa0a12ce861a4f2a9e3a231963004a74bdffeb3702c1804e->enter($__internal_1d9669afe12b3beafa0a12ce861a4f2a9e3a231963004a74bdffeb3702c1804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_23c643a2df2ffa28177f2d6d66e798cf06ad8a472f163d7ca7afbff2c4a88dab->leave($__internal_23c643a2df2ffa28177f2d6d66e798cf06ad8a472f163d7ca7afbff2c4a88dab_prof);

        
        $__internal_1d9669afe12b3beafa0a12ce861a4f2a9e3a231963004a74bdffeb3702c1804e->leave($__internal_1d9669afe12b3beafa0a12ce861a4f2a9e3a231963004a74bdffeb3702c1804e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
