<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a43b1e1d79520b2d8dce5ac40d507c5d7c2b0412edb5744936fb2a9a6cd4630c extends Twig_Template
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
        $__internal_99cb7eeb77bf109dd906e3ea6c4ab7d064d19b6e7fb75b34896a9e9f363ed125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cb7eeb77bf109dd906e3ea6c4ab7d064d19b6e7fb75b34896a9e9f363ed125->enter($__internal_99cb7eeb77bf109dd906e3ea6c4ab7d064d19b6e7fb75b34896a9e9f363ed125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f068cf6059948d8116f2db0b684dcb3edaa832686e829ad8395db5bb4c77868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f068cf6059948d8116f2db0b684dcb3edaa832686e829ad8395db5bb4c77868e->enter($__internal_f068cf6059948d8116f2db0b684dcb3edaa832686e829ad8395db5bb4c77868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99cb7eeb77bf109dd906e3ea6c4ab7d064d19b6e7fb75b34896a9e9f363ed125->leave($__internal_99cb7eeb77bf109dd906e3ea6c4ab7d064d19b6e7fb75b34896a9e9f363ed125_prof);

        
        $__internal_f068cf6059948d8116f2db0b684dcb3edaa832686e829ad8395db5bb4c77868e->leave($__internal_f068cf6059948d8116f2db0b684dcb3edaa832686e829ad8395db5bb4c77868e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
