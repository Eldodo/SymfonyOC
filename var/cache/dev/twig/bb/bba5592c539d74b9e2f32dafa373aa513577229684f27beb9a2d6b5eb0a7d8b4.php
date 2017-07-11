<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_472b00460ec97d26e855e0f559bbd8c03f97d0288ba99d9dea8817ea652bcb2a extends Twig_Template
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
        $__internal_1d1ccfe49d373a6979f17bc600e6f5a8de10f744f68335a5cfc0c3ae3aeba708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1ccfe49d373a6979f17bc600e6f5a8de10f744f68335a5cfc0c3ae3aeba708->enter($__internal_1d1ccfe49d373a6979f17bc600e6f5a8de10f744f68335a5cfc0c3ae3aeba708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_24b700e6a2202b61b4d968d6cc3e54ed44a7080ab1deb22202216fe738d82654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b700e6a2202b61b4d968d6cc3e54ed44a7080ab1deb22202216fe738d82654->enter($__internal_24b700e6a2202b61b4d968d6cc3e54ed44a7080ab1deb22202216fe738d82654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1d1ccfe49d373a6979f17bc600e6f5a8de10f744f68335a5cfc0c3ae3aeba708->leave($__internal_1d1ccfe49d373a6979f17bc600e6f5a8de10f744f68335a5cfc0c3ae3aeba708_prof);

        
        $__internal_24b700e6a2202b61b4d968d6cc3e54ed44a7080ab1deb22202216fe738d82654->leave($__internal_24b700e6a2202b61b4d968d6cc3e54ed44a7080ab1deb22202216fe738d82654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
