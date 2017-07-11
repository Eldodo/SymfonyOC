<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09f66bc8c257df05b28b019110722ba1ae4f2ea88a4583245711d52719488c38 extends Twig_Template
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
        $__internal_cd35875e373814f8279a69276e4afb2b66c69d745097c607837f56bab7cd5ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd35875e373814f8279a69276e4afb2b66c69d745097c607837f56bab7cd5ebf->enter($__internal_cd35875e373814f8279a69276e4afb2b66c69d745097c607837f56bab7cd5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fad43f4856cc0f678b584f3f51bc2901a9808ae6e1462403d3c70b3ad04ce008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad43f4856cc0f678b584f3f51bc2901a9808ae6e1462403d3c70b3ad04ce008->enter($__internal_fad43f4856cc0f678b584f3f51bc2901a9808ae6e1462403d3c70b3ad04ce008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cd35875e373814f8279a69276e4afb2b66c69d745097c607837f56bab7cd5ebf->leave($__internal_cd35875e373814f8279a69276e4afb2b66c69d745097c607837f56bab7cd5ebf_prof);

        
        $__internal_fad43f4856cc0f678b584f3f51bc2901a9808ae6e1462403d3c70b3ad04ce008->leave($__internal_fad43f4856cc0f678b584f3f51bc2901a9808ae6e1462403d3c70b3ad04ce008_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
