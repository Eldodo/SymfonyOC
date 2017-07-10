<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7123cc090c6ce378397a9994e45051fda49b8646d2fb30697ce7be617ad5ae3b extends Twig_Template
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
        $__internal_bc16ed2d7775a8b1b38fb95ec44d1d6690db928898956eaece7777cbc63775c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc16ed2d7775a8b1b38fb95ec44d1d6690db928898956eaece7777cbc63775c0->enter($__internal_bc16ed2d7775a8b1b38fb95ec44d1d6690db928898956eaece7777cbc63775c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fe235c0fdbaf6df1c871a745890d812f4c3d1c0ed6811bc44d2944ced929445e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe235c0fdbaf6df1c871a745890d812f4c3d1c0ed6811bc44d2944ced929445e->enter($__internal_fe235c0fdbaf6df1c871a745890d812f4c3d1c0ed6811bc44d2944ced929445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bc16ed2d7775a8b1b38fb95ec44d1d6690db928898956eaece7777cbc63775c0->leave($__internal_bc16ed2d7775a8b1b38fb95ec44d1d6690db928898956eaece7777cbc63775c0_prof);

        
        $__internal_fe235c0fdbaf6df1c871a745890d812f4c3d1c0ed6811bc44d2944ced929445e->leave($__internal_fe235c0fdbaf6df1c871a745890d812f4c3d1c0ed6811bc44d2944ced929445e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
