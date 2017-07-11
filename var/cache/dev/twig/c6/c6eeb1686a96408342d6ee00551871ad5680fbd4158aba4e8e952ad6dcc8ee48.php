<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_90784263706ccb0d5e5d97ab31ddaa0342fa64a83aa6f3878240b141aadd7566 extends Twig_Template
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
        $__internal_5700e8ae92b3f2e3e56a909ae4e39eb45e5fc97a84674b8acf4ab3429b80c431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5700e8ae92b3f2e3e56a909ae4e39eb45e5fc97a84674b8acf4ab3429b80c431->enter($__internal_5700e8ae92b3f2e3e56a909ae4e39eb45e5fc97a84674b8acf4ab3429b80c431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2a23c7084e11835a7775966966f8877f234d02cc75640e98b57c4ebe3878b63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a23c7084e11835a7775966966f8877f234d02cc75640e98b57c4ebe3878b63d->enter($__internal_2a23c7084e11835a7775966966f8877f234d02cc75640e98b57c4ebe3878b63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5700e8ae92b3f2e3e56a909ae4e39eb45e5fc97a84674b8acf4ab3429b80c431->leave($__internal_5700e8ae92b3f2e3e56a909ae4e39eb45e5fc97a84674b8acf4ab3429b80c431_prof);

        
        $__internal_2a23c7084e11835a7775966966f8877f234d02cc75640e98b57c4ebe3878b63d->leave($__internal_2a23c7084e11835a7775966966f8877f234d02cc75640e98b57c4ebe3878b63d_prof);

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
