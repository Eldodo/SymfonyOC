<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f91fbb8aaac3002b64d563a9116cc2b5dc907d03c2cc7ebd064d633d3bfe12ff extends Twig_Template
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
        $__internal_ef57ff4c1b9346e85d4f24552d5a8c70988aa71cbe456c74e696d0599789675a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef57ff4c1b9346e85d4f24552d5a8c70988aa71cbe456c74e696d0599789675a->enter($__internal_ef57ff4c1b9346e85d4f24552d5a8c70988aa71cbe456c74e696d0599789675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_064499f0f2963b7f9231284690b0cd873eae55e07c52fe13519391b3ceed3489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064499f0f2963b7f9231284690b0cd873eae55e07c52fe13519391b3ceed3489->enter($__internal_064499f0f2963b7f9231284690b0cd873eae55e07c52fe13519391b3ceed3489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ef57ff4c1b9346e85d4f24552d5a8c70988aa71cbe456c74e696d0599789675a->leave($__internal_ef57ff4c1b9346e85d4f24552d5a8c70988aa71cbe456c74e696d0599789675a_prof);

        
        $__internal_064499f0f2963b7f9231284690b0cd873eae55e07c52fe13519391b3ceed3489->leave($__internal_064499f0f2963b7f9231284690b0cd873eae55e07c52fe13519391b3ceed3489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
