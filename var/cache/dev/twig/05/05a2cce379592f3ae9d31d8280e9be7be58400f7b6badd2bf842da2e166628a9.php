<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_336451892812f6966f1656279381796f952d5020be531b89f225e395f0118f91 extends Twig_Template
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
        $__internal_0800f94db0fd872ab7e132be458cd30a919d88b587fb8fc0a5ac8f440d79a732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0800f94db0fd872ab7e132be458cd30a919d88b587fb8fc0a5ac8f440d79a732->enter($__internal_0800f94db0fd872ab7e132be458cd30a919d88b587fb8fc0a5ac8f440d79a732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_34c24ba48fc94d0d21268a2b12b366cc7c21ec5d98e69e3e2cc61d5321da5969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c24ba48fc94d0d21268a2b12b366cc7c21ec5d98e69e3e2cc61d5321da5969->enter($__internal_34c24ba48fc94d0d21268a2b12b366cc7c21ec5d98e69e3e2cc61d5321da5969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0800f94db0fd872ab7e132be458cd30a919d88b587fb8fc0a5ac8f440d79a732->leave($__internal_0800f94db0fd872ab7e132be458cd30a919d88b587fb8fc0a5ac8f440d79a732_prof);

        
        $__internal_34c24ba48fc94d0d21268a2b12b366cc7c21ec5d98e69e3e2cc61d5321da5969->leave($__internal_34c24ba48fc94d0d21268a2b12b366cc7c21ec5d98e69e3e2cc61d5321da5969_prof);

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
