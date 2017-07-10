<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0401a279fd24945d9fc83bf665faf72fd4810d06350e6175af0bf61165834f89 extends Twig_Template
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
        $__internal_51f6f6388b6b6500f27e3a5d9603e5874e66cd1839021fe363dc148abd6f5bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f6f6388b6b6500f27e3a5d9603e5874e66cd1839021fe363dc148abd6f5bee->enter($__internal_51f6f6388b6b6500f27e3a5d9603e5874e66cd1839021fe363dc148abd6f5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ea3084bc1373991555f3fc608b939100e92b8804a0c687cc9df06d6dfd4d556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3084bc1373991555f3fc608b939100e92b8804a0c687cc9df06d6dfd4d556b->enter($__internal_ea3084bc1373991555f3fc608b939100e92b8804a0c687cc9df06d6dfd4d556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_51f6f6388b6b6500f27e3a5d9603e5874e66cd1839021fe363dc148abd6f5bee->leave($__internal_51f6f6388b6b6500f27e3a5d9603e5874e66cd1839021fe363dc148abd6f5bee_prof);

        
        $__internal_ea3084bc1373991555f3fc608b939100e92b8804a0c687cc9df06d6dfd4d556b->leave($__internal_ea3084bc1373991555f3fc608b939100e92b8804a0c687cc9df06d6dfd4d556b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
