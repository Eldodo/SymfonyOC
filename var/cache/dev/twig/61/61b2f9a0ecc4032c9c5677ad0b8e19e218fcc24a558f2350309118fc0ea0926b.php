<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_662ccc4402379a5f7725f414b5710f752ca7815183e5b9a22be92efd408ac4db extends Twig_Template
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
        $__internal_2baf70803ba94ed5e7693ee7ed473e763ae6a71880761bdc374c55b220338837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baf70803ba94ed5e7693ee7ed473e763ae6a71880761bdc374c55b220338837->enter($__internal_2baf70803ba94ed5e7693ee7ed473e763ae6a71880761bdc374c55b220338837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6d8e40e21237a750e296af63c3f02bb268cb569d65d3b1e81abc1e9d447de483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8e40e21237a750e296af63c3f02bb268cb569d65d3b1e81abc1e9d447de483->enter($__internal_6d8e40e21237a750e296af63c3f02bb268cb569d65d3b1e81abc1e9d447de483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2baf70803ba94ed5e7693ee7ed473e763ae6a71880761bdc374c55b220338837->leave($__internal_2baf70803ba94ed5e7693ee7ed473e763ae6a71880761bdc374c55b220338837_prof);

        
        $__internal_6d8e40e21237a750e296af63c3f02bb268cb569d65d3b1e81abc1e9d447de483->leave($__internal_6d8e40e21237a750e296af63c3f02bb268cb569d65d3b1e81abc1e9d447de483_prof);

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
