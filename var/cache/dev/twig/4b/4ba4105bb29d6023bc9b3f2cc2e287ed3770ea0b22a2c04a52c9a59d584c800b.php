<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0cfa98972b8d7a715fbc4bf274eeeb182a2b3b48e09817ff4b1cfa5daca1b6e0 extends Twig_Template
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
        $__internal_2bdd95aa075b010729bed2f810e2d221ff3c72e2e9685e37e9b1cd2b5655334a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdd95aa075b010729bed2f810e2d221ff3c72e2e9685e37e9b1cd2b5655334a->enter($__internal_2bdd95aa075b010729bed2f810e2d221ff3c72e2e9685e37e9b1cd2b5655334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e534901b60f7fab2392f28fb96ecaf2ee2415212dba229f3448eec6fb34521c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e534901b60f7fab2392f28fb96ecaf2ee2415212dba229f3448eec6fb34521c1->enter($__internal_e534901b60f7fab2392f28fb96ecaf2ee2415212dba229f3448eec6fb34521c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2bdd95aa075b010729bed2f810e2d221ff3c72e2e9685e37e9b1cd2b5655334a->leave($__internal_2bdd95aa075b010729bed2f810e2d221ff3c72e2e9685e37e9b1cd2b5655334a_prof);

        
        $__internal_e534901b60f7fab2392f28fb96ecaf2ee2415212dba229f3448eec6fb34521c1->leave($__internal_e534901b60f7fab2392f28fb96ecaf2ee2415212dba229f3448eec6fb34521c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
