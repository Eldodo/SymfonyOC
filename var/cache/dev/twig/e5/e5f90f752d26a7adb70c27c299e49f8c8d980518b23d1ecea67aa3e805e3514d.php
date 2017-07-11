<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41528b0a910c67afbc829d8c99cafeedc5539d49b4d56fa069c84ab9f6226e9b extends Twig_Template
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
        $__internal_b8410c483514cab71dbdc4f80940b838a4f7a5efd15f401491fa15df1e6a9ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8410c483514cab71dbdc4f80940b838a4f7a5efd15f401491fa15df1e6a9ef6->enter($__internal_b8410c483514cab71dbdc4f80940b838a4f7a5efd15f401491fa15df1e6a9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_25e571793b1f681d36782b3be4d75485312e9eafe0bbc11d6a09cee336c7257f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e571793b1f681d36782b3be4d75485312e9eafe0bbc11d6a09cee336c7257f->enter($__internal_25e571793b1f681d36782b3be4d75485312e9eafe0bbc11d6a09cee336c7257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b8410c483514cab71dbdc4f80940b838a4f7a5efd15f401491fa15df1e6a9ef6->leave($__internal_b8410c483514cab71dbdc4f80940b838a4f7a5efd15f401491fa15df1e6a9ef6_prof);

        
        $__internal_25e571793b1f681d36782b3be4d75485312e9eafe0bbc11d6a09cee336c7257f->leave($__internal_25e571793b1f681d36782b3be4d75485312e9eafe0bbc11d6a09cee336c7257f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
