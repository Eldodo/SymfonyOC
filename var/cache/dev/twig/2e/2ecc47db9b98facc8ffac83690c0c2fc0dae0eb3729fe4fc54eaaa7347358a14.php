<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_a8c2efc381ffc701e0a07b5dcc8db3c446f944c174229b25468dd224d9f64151 extends Twig_Template
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
        $__internal_be3ad105cb346879a53fda72f3b7403f445e6c984292b97d13776315365802d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3ad105cb346879a53fda72f3b7403f445e6c984292b97d13776315365802d2->enter($__internal_be3ad105cb346879a53fda72f3b7403f445e6c984292b97d13776315365802d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_a5c4fe5f092664b45cf719bfa656926e6d86a8ccec89674e2bd843f0eb4e78c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c4fe5f092664b45cf719bfa656926e6d86a8ccec89674e2bd843f0eb4e78c9->enter($__internal_a5c4fe5f092664b45cf719bfa656926e6d86a8ccec89674e2bd843f0eb4e78c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_be3ad105cb346879a53fda72f3b7403f445e6c984292b97d13776315365802d2->leave($__internal_be3ad105cb346879a53fda72f3b7403f445e6c984292b97d13776315365802d2_prof);

        
        $__internal_a5c4fe5f092664b45cf719bfa656926e6d86a8ccec89674e2bd843f0eb4e78c9->leave($__internal_a5c4fe5f092664b45cf719bfa656926e6d86a8ccec89674e2bd843f0eb4e78c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
