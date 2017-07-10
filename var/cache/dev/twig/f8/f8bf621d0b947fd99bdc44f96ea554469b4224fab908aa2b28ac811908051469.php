<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7a6961870f6169fbcf2537da657022208443860fb56a3d37286b328109763aac extends Twig_Template
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
        $__internal_7da9bde84c6b4e3fdaf9043e0bdb9aa07968bca56c4195fa6913b0ce7a26cdab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da9bde84c6b4e3fdaf9043e0bdb9aa07968bca56c4195fa6913b0ce7a26cdab->enter($__internal_7da9bde84c6b4e3fdaf9043e0bdb9aa07968bca56c4195fa6913b0ce7a26cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b3907d0a40a4d1a8d260063dcf6073c298733ad583232c6e862ee1e80c718a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3907d0a40a4d1a8d260063dcf6073c298733ad583232c6e862ee1e80c718a69->enter($__internal_b3907d0a40a4d1a8d260063dcf6073c298733ad583232c6e862ee1e80c718a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7da9bde84c6b4e3fdaf9043e0bdb9aa07968bca56c4195fa6913b0ce7a26cdab->leave($__internal_7da9bde84c6b4e3fdaf9043e0bdb9aa07968bca56c4195fa6913b0ce7a26cdab_prof);

        
        $__internal_b3907d0a40a4d1a8d260063dcf6073c298733ad583232c6e862ee1e80c718a69->leave($__internal_b3907d0a40a4d1a8d260063dcf6073c298733ad583232c6e862ee1e80c718a69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
