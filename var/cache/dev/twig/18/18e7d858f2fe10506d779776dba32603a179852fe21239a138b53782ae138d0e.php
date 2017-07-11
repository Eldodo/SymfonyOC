<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3c60f0f22891c5014232a7dd3bb379c47bdedee943cbdab1a68525e80465aff9 extends Twig_Template
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
        $__internal_03bdd5af70b80a50a778f0fa107c426c916e0b3b5f767cfc79eeb1952b852f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bdd5af70b80a50a778f0fa107c426c916e0b3b5f767cfc79eeb1952b852f67->enter($__internal_03bdd5af70b80a50a778f0fa107c426c916e0b3b5f767cfc79eeb1952b852f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cbb6305f9aff1aeafb004e053d4b5babb737b8092cd3b72bd6e5a92df7f8e9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb6305f9aff1aeafb004e053d4b5babb737b8092cd3b72bd6e5a92df7f8e9cf->enter($__internal_cbb6305f9aff1aeafb004e053d4b5babb737b8092cd3b72bd6e5a92df7f8e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_03bdd5af70b80a50a778f0fa107c426c916e0b3b5f767cfc79eeb1952b852f67->leave($__internal_03bdd5af70b80a50a778f0fa107c426c916e0b3b5f767cfc79eeb1952b852f67_prof);

        
        $__internal_cbb6305f9aff1aeafb004e053d4b5babb737b8092cd3b72bd6e5a92df7f8e9cf->leave($__internal_cbb6305f9aff1aeafb004e053d4b5babb737b8092cd3b72bd6e5a92df7f8e9cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
