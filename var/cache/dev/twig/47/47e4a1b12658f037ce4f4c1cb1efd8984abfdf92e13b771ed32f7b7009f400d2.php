<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_99bce2bfd007c613e083694b9ccfe0285a4efc2dece9d917b7fd0b2ab2e372fa extends Twig_Template
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
        $__internal_b44cdb4c0949e3bb4f9bc226d2bc4de79777aa69b5ea9b1a0cff4ec050a49d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44cdb4c0949e3bb4f9bc226d2bc4de79777aa69b5ea9b1a0cff4ec050a49d0a->enter($__internal_b44cdb4c0949e3bb4f9bc226d2bc4de79777aa69b5ea9b1a0cff4ec050a49d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_44ec1c3489defceb7fad0ed0dfa42568942ce45455f751de09512640b4eeaa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec1c3489defceb7fad0ed0dfa42568942ce45455f751de09512640b4eeaa1e->enter($__internal_44ec1c3489defceb7fad0ed0dfa42568942ce45455f751de09512640b4eeaa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b44cdb4c0949e3bb4f9bc226d2bc4de79777aa69b5ea9b1a0cff4ec050a49d0a->leave($__internal_b44cdb4c0949e3bb4f9bc226d2bc4de79777aa69b5ea9b1a0cff4ec050a49d0a_prof);

        
        $__internal_44ec1c3489defceb7fad0ed0dfa42568942ce45455f751de09512640b4eeaa1e->leave($__internal_44ec1c3489defceb7fad0ed0dfa42568942ce45455f751de09512640b4eeaa1e_prof);

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
