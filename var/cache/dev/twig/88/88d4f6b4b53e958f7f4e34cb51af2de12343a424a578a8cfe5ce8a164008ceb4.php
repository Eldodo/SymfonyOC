<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_320956a3c8876e0ae5aea8abca1e6ded0343eb39ff2d5228fae9d739e959eec2 extends Twig_Template
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
        $__internal_5677d2c6b77d898c2ebdfa6c5728bca8aa47f5a1d47812e3bd0a4e93c87a6068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5677d2c6b77d898c2ebdfa6c5728bca8aa47f5a1d47812e3bd0a4e93c87a6068->enter($__internal_5677d2c6b77d898c2ebdfa6c5728bca8aa47f5a1d47812e3bd0a4e93c87a6068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_64552f9f9616bdfdd21e24e4ad07d4099817bdd98101d1941bc4adf7ab01530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64552f9f9616bdfdd21e24e4ad07d4099817bdd98101d1941bc4adf7ab01530b->enter($__internal_64552f9f9616bdfdd21e24e4ad07d4099817bdd98101d1941bc4adf7ab01530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5677d2c6b77d898c2ebdfa6c5728bca8aa47f5a1d47812e3bd0a4e93c87a6068->leave($__internal_5677d2c6b77d898c2ebdfa6c5728bca8aa47f5a1d47812e3bd0a4e93c87a6068_prof);

        
        $__internal_64552f9f9616bdfdd21e24e4ad07d4099817bdd98101d1941bc4adf7ab01530b->leave($__internal_64552f9f9616bdfdd21e24e4ad07d4099817bdd98101d1941bc4adf7ab01530b_prof);

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
