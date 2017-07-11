<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d7abfa3213c3ffd0f88726be2576bc8ea425b5c93fbed7fe5b4e15b7d94dbd8 extends Twig_Template
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
        $__internal_b1969333f707cc1d5b25212ca3278e3390b196f198b2e88cba37ef82fbb1a780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1969333f707cc1d5b25212ca3278e3390b196f198b2e88cba37ef82fbb1a780->enter($__internal_b1969333f707cc1d5b25212ca3278e3390b196f198b2e88cba37ef82fbb1a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_282797b96c336f609a9c339f67ba7a2ac7f014b05662e2e794d1af08f2ee04ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282797b96c336f609a9c339f67ba7a2ac7f014b05662e2e794d1af08f2ee04ad->enter($__internal_282797b96c336f609a9c339f67ba7a2ac7f014b05662e2e794d1af08f2ee04ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b1969333f707cc1d5b25212ca3278e3390b196f198b2e88cba37ef82fbb1a780->leave($__internal_b1969333f707cc1d5b25212ca3278e3390b196f198b2e88cba37ef82fbb1a780_prof);

        
        $__internal_282797b96c336f609a9c339f67ba7a2ac7f014b05662e2e794d1af08f2ee04ad->leave($__internal_282797b96c336f609a9c339f67ba7a2ac7f014b05662e2e794d1af08f2ee04ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
