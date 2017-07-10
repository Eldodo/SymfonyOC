<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3195415766074774f7ca941c79533b9d8657dea54372d970ba14e6d7238221fa extends Twig_Template
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
        $__internal_792b72ccf824073aa6e7d6d0b76e02beac4d7f688264097a542113177015412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792b72ccf824073aa6e7d6d0b76e02beac4d7f688264097a542113177015412d->enter($__internal_792b72ccf824073aa6e7d6d0b76e02beac4d7f688264097a542113177015412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8c4f232b84ab8fbb33cf6ef34c8d6836dd75d20d8405db788e02719fe58420a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4f232b84ab8fbb33cf6ef34c8d6836dd75d20d8405db788e02719fe58420a5->enter($__internal_8c4f232b84ab8fbb33cf6ef34c8d6836dd75d20d8405db788e02719fe58420a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_792b72ccf824073aa6e7d6d0b76e02beac4d7f688264097a542113177015412d->leave($__internal_792b72ccf824073aa6e7d6d0b76e02beac4d7f688264097a542113177015412d_prof);

        
        $__internal_8c4f232b84ab8fbb33cf6ef34c8d6836dd75d20d8405db788e02719fe58420a5->leave($__internal_8c4f232b84ab8fbb33cf6ef34c8d6836dd75d20d8405db788e02719fe58420a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
