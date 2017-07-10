<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_12fdd4c9b3a9cdf5a05eb719944fbacef76a4d3f7e2592c025dda7a70dda8bac extends Twig_Template
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
        $__internal_72ea5335feaa4c87b15eb0c81ea8c1d4ecacf695fbbb24f5e208a3e3a0fb33a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ea5335feaa4c87b15eb0c81ea8c1d4ecacf695fbbb24f5e208a3e3a0fb33a8->enter($__internal_72ea5335feaa4c87b15eb0c81ea8c1d4ecacf695fbbb24f5e208a3e3a0fb33a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_04524c383fdc08169e05f58f576d2c4ed5e3fb1e3af5be71396669a92bec1324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04524c383fdc08169e05f58f576d2c4ed5e3fb1e3af5be71396669a92bec1324->enter($__internal_04524c383fdc08169e05f58f576d2c4ed5e3fb1e3af5be71396669a92bec1324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_72ea5335feaa4c87b15eb0c81ea8c1d4ecacf695fbbb24f5e208a3e3a0fb33a8->leave($__internal_72ea5335feaa4c87b15eb0c81ea8c1d4ecacf695fbbb24f5e208a3e3a0fb33a8_prof);

        
        $__internal_04524c383fdc08169e05f58f576d2c4ed5e3fb1e3af5be71396669a92bec1324->leave($__internal_04524c383fdc08169e05f58f576d2c4ed5e3fb1e3af5be71396669a92bec1324_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
