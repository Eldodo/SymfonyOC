<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_590e0d1656fe47aef845ab4cc569065fffc90539b95839532bd5d7832f02dd2f extends Twig_Template
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
        $__internal_a2c2ce4495f274f2fc62789d28a5a4d07f0c57c48e693c4ee5b615684668d381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c2ce4495f274f2fc62789d28a5a4d07f0c57c48e693c4ee5b615684668d381->enter($__internal_a2c2ce4495f274f2fc62789d28a5a4d07f0c57c48e693c4ee5b615684668d381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_386a10b975ec42c358a442af0f59ca01a066613c153d99c371ef55a3282380f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386a10b975ec42c358a442af0f59ca01a066613c153d99c371ef55a3282380f8->enter($__internal_386a10b975ec42c358a442af0f59ca01a066613c153d99c371ef55a3282380f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a2c2ce4495f274f2fc62789d28a5a4d07f0c57c48e693c4ee5b615684668d381->leave($__internal_a2c2ce4495f274f2fc62789d28a5a4d07f0c57c48e693c4ee5b615684668d381_prof);

        
        $__internal_386a10b975ec42c358a442af0f59ca01a066613c153d99c371ef55a3282380f8->leave($__internal_386a10b975ec42c358a442af0f59ca01a066613c153d99c371ef55a3282380f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
