<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_70b1e2a7bde8dd80773bb175d771ca222c4fe9bccd1d1596af18e633d5f7a3f2 extends Twig_Template
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
        $__internal_b27d61b603f7db22f52a4eb84e7915f18d4d81ad17fa5ccd3281fcc529fae5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27d61b603f7db22f52a4eb84e7915f18d4d81ad17fa5ccd3281fcc529fae5fe->enter($__internal_b27d61b603f7db22f52a4eb84e7915f18d4d81ad17fa5ccd3281fcc529fae5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ecd6104e3fbd5ee4e7e1534bbc831b923ce2432afb6d6e1ad4e3e32bfff64446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd6104e3fbd5ee4e7e1534bbc831b923ce2432afb6d6e1ad4e3e32bfff64446->enter($__internal_ecd6104e3fbd5ee4e7e1534bbc831b923ce2432afb6d6e1ad4e3e32bfff64446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b27d61b603f7db22f52a4eb84e7915f18d4d81ad17fa5ccd3281fcc529fae5fe->leave($__internal_b27d61b603f7db22f52a4eb84e7915f18d4d81ad17fa5ccd3281fcc529fae5fe_prof);

        
        $__internal_ecd6104e3fbd5ee4e7e1534bbc831b923ce2432afb6d6e1ad4e3e32bfff64446->leave($__internal_ecd6104e3fbd5ee4e7e1534bbc831b923ce2432afb6d6e1ad4e3e32bfff64446_prof);

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
