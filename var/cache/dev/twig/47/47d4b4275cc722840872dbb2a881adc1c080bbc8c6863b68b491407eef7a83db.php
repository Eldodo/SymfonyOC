<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b7478cacc288bd5ee1de1d083556ca8a8a5bd472f913783e54b0eec7137ee13d extends Twig_Template
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
        $__internal_e35b8e9d8953c3fb12714160f824807d1f1cc18a6059c923f8a3c962b01a36cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35b8e9d8953c3fb12714160f824807d1f1cc18a6059c923f8a3c962b01a36cb->enter($__internal_e35b8e9d8953c3fb12714160f824807d1f1cc18a6059c923f8a3c962b01a36cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3bd50934cac1a7655d9d5498c50bb26ab161cdd2a46f6cc8c9672fa03139635d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd50934cac1a7655d9d5498c50bb26ab161cdd2a46f6cc8c9672fa03139635d->enter($__internal_3bd50934cac1a7655d9d5498c50bb26ab161cdd2a46f6cc8c9672fa03139635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e35b8e9d8953c3fb12714160f824807d1f1cc18a6059c923f8a3c962b01a36cb->leave($__internal_e35b8e9d8953c3fb12714160f824807d1f1cc18a6059c923f8a3c962b01a36cb_prof);

        
        $__internal_3bd50934cac1a7655d9d5498c50bb26ab161cdd2a46f6cc8c9672fa03139635d->leave($__internal_3bd50934cac1a7655d9d5498c50bb26ab161cdd2a46f6cc8c9672fa03139635d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
