<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_298099f2a6a23a708603ea8659d2eeab437efdd8c90fd17f899b84254ff8f550 extends Twig_Template
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
        $__internal_f40127e8dbfe44a82dfae0b0d253e0775345e2b2f2a095f2b5d7f9ca1f695ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40127e8dbfe44a82dfae0b0d253e0775345e2b2f2a095f2b5d7f9ca1f695ea6->enter($__internal_f40127e8dbfe44a82dfae0b0d253e0775345e2b2f2a095f2b5d7f9ca1f695ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_adde67498f1f86d83890dea1d166406abc01076aaa98e63e4796fc1ea02a297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adde67498f1f86d83890dea1d166406abc01076aaa98e63e4796fc1ea02a297f->enter($__internal_adde67498f1f86d83890dea1d166406abc01076aaa98e63e4796fc1ea02a297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f40127e8dbfe44a82dfae0b0d253e0775345e2b2f2a095f2b5d7f9ca1f695ea6->leave($__internal_f40127e8dbfe44a82dfae0b0d253e0775345e2b2f2a095f2b5d7f9ca1f695ea6_prof);

        
        $__internal_adde67498f1f86d83890dea1d166406abc01076aaa98e63e4796fc1ea02a297f->leave($__internal_adde67498f1f86d83890dea1d166406abc01076aaa98e63e4796fc1ea02a297f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
