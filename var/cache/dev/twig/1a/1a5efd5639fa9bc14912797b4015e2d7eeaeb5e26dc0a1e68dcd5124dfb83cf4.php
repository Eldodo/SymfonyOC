<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_42b242e64ca85e830393a8cb59b29dc060699f5b68fa1e61b95ce086abc6c4ab extends Twig_Template
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
        $__internal_2f94285b7407d9a63e75ac24707d9f903ce750e0fb6e46c126c2a924ece55097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f94285b7407d9a63e75ac24707d9f903ce750e0fb6e46c126c2a924ece55097->enter($__internal_2f94285b7407d9a63e75ac24707d9f903ce750e0fb6e46c126c2a924ece55097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_71849fc48991951601f3ac4f92aec1ecb328f0b6d93f839fff45510b10690166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71849fc48991951601f3ac4f92aec1ecb328f0b6d93f839fff45510b10690166->enter($__internal_71849fc48991951601f3ac4f92aec1ecb328f0b6d93f839fff45510b10690166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2f94285b7407d9a63e75ac24707d9f903ce750e0fb6e46c126c2a924ece55097->leave($__internal_2f94285b7407d9a63e75ac24707d9f903ce750e0fb6e46c126c2a924ece55097_prof);

        
        $__internal_71849fc48991951601f3ac4f92aec1ecb328f0b6d93f839fff45510b10690166->leave($__internal_71849fc48991951601f3ac4f92aec1ecb328f0b6d93f839fff45510b10690166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
