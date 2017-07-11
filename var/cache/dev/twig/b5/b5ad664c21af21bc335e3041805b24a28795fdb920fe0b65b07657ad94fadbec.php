<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20ec72c20e22018c92b4e6421bfb94ba17b75681a627b008b254483f5d18155d extends Twig_Template
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
        $__internal_26bcea17ed239a8bb16e2e6d2c887e9d681ac4d41ccc8b8a46602321be6f76f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bcea17ed239a8bb16e2e6d2c887e9d681ac4d41ccc8b8a46602321be6f76f8->enter($__internal_26bcea17ed239a8bb16e2e6d2c887e9d681ac4d41ccc8b8a46602321be6f76f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_86fba14bc16441454b6d45168681b3861f1ac42dbe9b6371f6bc2db02064bb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fba14bc16441454b6d45168681b3861f1ac42dbe9b6371f6bc2db02064bb91->enter($__internal_86fba14bc16441454b6d45168681b3861f1ac42dbe9b6371f6bc2db02064bb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_26bcea17ed239a8bb16e2e6d2c887e9d681ac4d41ccc8b8a46602321be6f76f8->leave($__internal_26bcea17ed239a8bb16e2e6d2c887e9d681ac4d41ccc8b8a46602321be6f76f8_prof);

        
        $__internal_86fba14bc16441454b6d45168681b3861f1ac42dbe9b6371f6bc2db02064bb91->leave($__internal_86fba14bc16441454b6d45168681b3861f1ac42dbe9b6371f6bc2db02064bb91_prof);

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
