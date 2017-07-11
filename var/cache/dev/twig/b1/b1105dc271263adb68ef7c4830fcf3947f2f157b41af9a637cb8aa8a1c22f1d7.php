<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_544eceb123f90ab3edc622926914de35dee6fef7a019f24b2b99c393bf87f121 extends Twig_Template
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
        $__internal_f5bd9c9f17dcfe88f7849c25e8c8439845cf44168e950e9e86e1f57602459907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5bd9c9f17dcfe88f7849c25e8c8439845cf44168e950e9e86e1f57602459907->enter($__internal_f5bd9c9f17dcfe88f7849c25e8c8439845cf44168e950e9e86e1f57602459907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b6b8bf3d7cc9204fa01905af93684e18b5c563398eb4de11e594505073e0ccb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b8bf3d7cc9204fa01905af93684e18b5c563398eb4de11e594505073e0ccb4->enter($__internal_b6b8bf3d7cc9204fa01905af93684e18b5c563398eb4de11e594505073e0ccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f5bd9c9f17dcfe88f7849c25e8c8439845cf44168e950e9e86e1f57602459907->leave($__internal_f5bd9c9f17dcfe88f7849c25e8c8439845cf44168e950e9e86e1f57602459907_prof);

        
        $__internal_b6b8bf3d7cc9204fa01905af93684e18b5c563398eb4de11e594505073e0ccb4->leave($__internal_b6b8bf3d7cc9204fa01905af93684e18b5c563398eb4de11e594505073e0ccb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
