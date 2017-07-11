<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f42cf7b9155ccdb717fa27b41492c764fd40582c8244ab2e480d73845dac9d04 extends Twig_Template
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
        $__internal_c727ca0bd14c9caf1dce8f0b5884b8c13d1d5a75c9e3eb642b83b95d9d9f9306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c727ca0bd14c9caf1dce8f0b5884b8c13d1d5a75c9e3eb642b83b95d9d9f9306->enter($__internal_c727ca0bd14c9caf1dce8f0b5884b8c13d1d5a75c9e3eb642b83b95d9d9f9306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1cb393e196f42fb6275e8af8bd7a12a39b666ff9dc8c2d95f270d00102e47ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb393e196f42fb6275e8af8bd7a12a39b666ff9dc8c2d95f270d00102e47ac9->enter($__internal_1cb393e196f42fb6275e8af8bd7a12a39b666ff9dc8c2d95f270d00102e47ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c727ca0bd14c9caf1dce8f0b5884b8c13d1d5a75c9e3eb642b83b95d9d9f9306->leave($__internal_c727ca0bd14c9caf1dce8f0b5884b8c13d1d5a75c9e3eb642b83b95d9d9f9306_prof);

        
        $__internal_1cb393e196f42fb6275e8af8bd7a12a39b666ff9dc8c2d95f270d00102e47ac9->leave($__internal_1cb393e196f42fb6275e8af8bd7a12a39b666ff9dc8c2d95f270d00102e47ac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
