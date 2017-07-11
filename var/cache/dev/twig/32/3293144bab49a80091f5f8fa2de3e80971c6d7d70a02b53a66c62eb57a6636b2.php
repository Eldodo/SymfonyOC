<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_db3e18dc0eab23a86facc6241065d5b06e315453ac9bfd166141071a94449b10 extends Twig_Template
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
        $__internal_bbb5557177401a7ba8b3252c71e48f2b7e1386602b7e37d9027afc77361cef72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb5557177401a7ba8b3252c71e48f2b7e1386602b7e37d9027afc77361cef72->enter($__internal_bbb5557177401a7ba8b3252c71e48f2b7e1386602b7e37d9027afc77361cef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c02b031d277d8c9e7b43360be62aeba4a8ce61ad4383eb6fd84431da372e5c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02b031d277d8c9e7b43360be62aeba4a8ce61ad4383eb6fd84431da372e5c72->enter($__internal_c02b031d277d8c9e7b43360be62aeba4a8ce61ad4383eb6fd84431da372e5c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bbb5557177401a7ba8b3252c71e48f2b7e1386602b7e37d9027afc77361cef72->leave($__internal_bbb5557177401a7ba8b3252c71e48f2b7e1386602b7e37d9027afc77361cef72_prof);

        
        $__internal_c02b031d277d8c9e7b43360be62aeba4a8ce61ad4383eb6fd84431da372e5c72->leave($__internal_c02b031d277d8c9e7b43360be62aeba4a8ce61ad4383eb6fd84431da372e5c72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
