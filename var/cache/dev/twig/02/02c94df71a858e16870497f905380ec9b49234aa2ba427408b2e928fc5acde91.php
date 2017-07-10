<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5b2ea2165e89c6ec6d223e5e32f77ba38d1dbd45bfe56bdb226addca88053ecb extends Twig_Template
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
        $__internal_5597486c856898bf6e2166a984915104b0af96eb7904f131bd66968ee497074f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5597486c856898bf6e2166a984915104b0af96eb7904f131bd66968ee497074f->enter($__internal_5597486c856898bf6e2166a984915104b0af96eb7904f131bd66968ee497074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ef947101740a806f762a8d476a4fb36d73e05de2449272aa137ed997e6571bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef947101740a806f762a8d476a4fb36d73e05de2449272aa137ed997e6571bf3->enter($__internal_ef947101740a806f762a8d476a4fb36d73e05de2449272aa137ed997e6571bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5597486c856898bf6e2166a984915104b0af96eb7904f131bd66968ee497074f->leave($__internal_5597486c856898bf6e2166a984915104b0af96eb7904f131bd66968ee497074f_prof);

        
        $__internal_ef947101740a806f762a8d476a4fb36d73e05de2449272aa137ed997e6571bf3->leave($__internal_ef947101740a806f762a8d476a4fb36d73e05de2449272aa137ed997e6571bf3_prof);

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
