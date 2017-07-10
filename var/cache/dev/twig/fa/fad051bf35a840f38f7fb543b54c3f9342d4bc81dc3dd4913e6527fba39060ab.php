<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7b1d132fc9e84d51b2002d48d0347b95dad91c790ac18776d29caa598a2c4bb2 extends Twig_Template
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
        $__internal_3c527a6171e03ef7d336c0eaf2cc4419bc5dd2544b2f53318ad1765363d96d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c527a6171e03ef7d336c0eaf2cc4419bc5dd2544b2f53318ad1765363d96d28->enter($__internal_3c527a6171e03ef7d336c0eaf2cc4419bc5dd2544b2f53318ad1765363d96d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2ef94b2a823af9ba1fd38ff3b73d8625795f8fc0a897bd4aa0e8590c74df61a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef94b2a823af9ba1fd38ff3b73d8625795f8fc0a897bd4aa0e8590c74df61a3->enter($__internal_2ef94b2a823af9ba1fd38ff3b73d8625795f8fc0a897bd4aa0e8590c74df61a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3c527a6171e03ef7d336c0eaf2cc4419bc5dd2544b2f53318ad1765363d96d28->leave($__internal_3c527a6171e03ef7d336c0eaf2cc4419bc5dd2544b2f53318ad1765363d96d28_prof);

        
        $__internal_2ef94b2a823af9ba1fd38ff3b73d8625795f8fc0a897bd4aa0e8590c74df61a3->leave($__internal_2ef94b2a823af9ba1fd38ff3b73d8625795f8fc0a897bd4aa0e8590c74df61a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
