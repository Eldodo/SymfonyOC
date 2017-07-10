<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_567a207026c5541abeea390c2dee98c6fb867c915aa886bb88ec46f6fa256257 extends Twig_Template
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
        $__internal_4849b059f4c996e7766492985771070c9085def3d929d912007637f93d17211e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4849b059f4c996e7766492985771070c9085def3d929d912007637f93d17211e->enter($__internal_4849b059f4c996e7766492985771070c9085def3d929d912007637f93d17211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c08128f041ed0ccf6d5b2c624a9622609d036203421bef94ecc1b073b0106d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08128f041ed0ccf6d5b2c624a9622609d036203421bef94ecc1b073b0106d15->enter($__internal_c08128f041ed0ccf6d5b2c624a9622609d036203421bef94ecc1b073b0106d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4849b059f4c996e7766492985771070c9085def3d929d912007637f93d17211e->leave($__internal_4849b059f4c996e7766492985771070c9085def3d929d912007637f93d17211e_prof);

        
        $__internal_c08128f041ed0ccf6d5b2c624a9622609d036203421bef94ecc1b073b0106d15->leave($__internal_c08128f041ed0ccf6d5b2c624a9622609d036203421bef94ecc1b073b0106d15_prof);

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
