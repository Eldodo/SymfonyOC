<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_faaa3555ecaf67f6dd1294fc0d8a1e433c6bbed3e258bbb9cb32923a44c170c9 extends Twig_Template
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
        $__internal_5f1880f75d1472063ae99ae4a941aee246a7cdbbf02b2c13357102a9e07c9bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1880f75d1472063ae99ae4a941aee246a7cdbbf02b2c13357102a9e07c9bd6->enter($__internal_5f1880f75d1472063ae99ae4a941aee246a7cdbbf02b2c13357102a9e07c9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5706b862ec2cfbb2194350faef14c1c92886d5136360dafd25de1d0443665f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5706b862ec2cfbb2194350faef14c1c92886d5136360dafd25de1d0443665f91->enter($__internal_5706b862ec2cfbb2194350faef14c1c92886d5136360dafd25de1d0443665f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5f1880f75d1472063ae99ae4a941aee246a7cdbbf02b2c13357102a9e07c9bd6->leave($__internal_5f1880f75d1472063ae99ae4a941aee246a7cdbbf02b2c13357102a9e07c9bd6_prof);

        
        $__internal_5706b862ec2cfbb2194350faef14c1c92886d5136360dafd25de1d0443665f91->leave($__internal_5706b862ec2cfbb2194350faef14c1c92886d5136360dafd25de1d0443665f91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
