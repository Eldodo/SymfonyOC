<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_087bfe8cb0aab2ac0eb77069cb02f64f467d14a7b40971dc0501a522e6481bec extends Twig_Template
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
        $__internal_60b2abc2e58c108f90ed156ddecba6eb741a78af070ddfa31e770946793b62e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b2abc2e58c108f90ed156ddecba6eb741a78af070ddfa31e770946793b62e4->enter($__internal_60b2abc2e58c108f90ed156ddecba6eb741a78af070ddfa31e770946793b62e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ad498268ff5a632e18ef661a8ee8ed6d1fb4a682233f2925b4f6c9671884cfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad498268ff5a632e18ef661a8ee8ed6d1fb4a682233f2925b4f6c9671884cfe3->enter($__internal_ad498268ff5a632e18ef661a8ee8ed6d1fb4a682233f2925b4f6c9671884cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_60b2abc2e58c108f90ed156ddecba6eb741a78af070ddfa31e770946793b62e4->leave($__internal_60b2abc2e58c108f90ed156ddecba6eb741a78af070ddfa31e770946793b62e4_prof);

        
        $__internal_ad498268ff5a632e18ef661a8ee8ed6d1fb4a682233f2925b4f6c9671884cfe3->leave($__internal_ad498268ff5a632e18ef661a8ee8ed6d1fb4a682233f2925b4f6c9671884cfe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
