<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef1eab20373bc4335e8e7e0d725fb63206f6cf7b351e7b56416436a02b151b56 extends Twig_Template
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
        $__internal_1545ca4e75d9e45f63db6361b3d3fcb2e01e9ce62a6faa19ad969b021db10cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1545ca4e75d9e45f63db6361b3d3fcb2e01e9ce62a6faa19ad969b021db10cc5->enter($__internal_1545ca4e75d9e45f63db6361b3d3fcb2e01e9ce62a6faa19ad969b021db10cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8c5da10f1e1a47c3a162150bff2a75204b1dd66ed2053ca2678820ec462dc919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5da10f1e1a47c3a162150bff2a75204b1dd66ed2053ca2678820ec462dc919->enter($__internal_8c5da10f1e1a47c3a162150bff2a75204b1dd66ed2053ca2678820ec462dc919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1545ca4e75d9e45f63db6361b3d3fcb2e01e9ce62a6faa19ad969b021db10cc5->leave($__internal_1545ca4e75d9e45f63db6361b3d3fcb2e01e9ce62a6faa19ad969b021db10cc5_prof);

        
        $__internal_8c5da10f1e1a47c3a162150bff2a75204b1dd66ed2053ca2678820ec462dc919->leave($__internal_8c5da10f1e1a47c3a162150bff2a75204b1dd66ed2053ca2678820ec462dc919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
