<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d203453b5adb32e15cb07be2bd4dfdd5f32595680749d72d52af32f8d7673393 extends Twig_Template
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
        $__internal_df93dcfa29fb1ad796cd6e0a1eea483cff2a2b3f4be8538bf2ac5f6253784c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df93dcfa29fb1ad796cd6e0a1eea483cff2a2b3f4be8538bf2ac5f6253784c9e->enter($__internal_df93dcfa29fb1ad796cd6e0a1eea483cff2a2b3f4be8538bf2ac5f6253784c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_21cf281894f1b865467a55c0dfca986bcf1658218a238e57a262ceb88d93c30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cf281894f1b865467a55c0dfca986bcf1658218a238e57a262ceb88d93c30e->enter($__internal_21cf281894f1b865467a55c0dfca986bcf1658218a238e57a262ceb88d93c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_df93dcfa29fb1ad796cd6e0a1eea483cff2a2b3f4be8538bf2ac5f6253784c9e->leave($__internal_df93dcfa29fb1ad796cd6e0a1eea483cff2a2b3f4be8538bf2ac5f6253784c9e_prof);

        
        $__internal_21cf281894f1b865467a55c0dfca986bcf1658218a238e57a262ceb88d93c30e->leave($__internal_21cf281894f1b865467a55c0dfca986bcf1658218a238e57a262ceb88d93c30e_prof);

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
