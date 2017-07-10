<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_657c5fffd2b9b00181fb80b862d675320ae4f0ba7d76cccdfcb7394196dce994 extends Twig_Template
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
        $__internal_6e215b63024ff05aa2476440fdd5333fe3df55dcbed3e4c84a73aaa7716ad0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e215b63024ff05aa2476440fdd5333fe3df55dcbed3e4c84a73aaa7716ad0d4->enter($__internal_6e215b63024ff05aa2476440fdd5333fe3df55dcbed3e4c84a73aaa7716ad0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c22cc71ac21753d42f1e5d82e2e924aa9831c09798db6c5b7ab0f4c2e48da446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22cc71ac21753d42f1e5d82e2e924aa9831c09798db6c5b7ab0f4c2e48da446->enter($__internal_c22cc71ac21753d42f1e5d82e2e924aa9831c09798db6c5b7ab0f4c2e48da446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6e215b63024ff05aa2476440fdd5333fe3df55dcbed3e4c84a73aaa7716ad0d4->leave($__internal_6e215b63024ff05aa2476440fdd5333fe3df55dcbed3e4c84a73aaa7716ad0d4_prof);

        
        $__internal_c22cc71ac21753d42f1e5d82e2e924aa9831c09798db6c5b7ab0f4c2e48da446->leave($__internal_c22cc71ac21753d42f1e5d82e2e924aa9831c09798db6c5b7ab0f4c2e48da446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
