<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_813d99ef0d6b208d6e353d560da2bfc8f22822f9aecd8e20199f983a94aca8d9 extends Twig_Template
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
        $__internal_d0ec0cbd222efcd30aee3a8e96ff9cf2c8f3c41c4838e97370144102e3916396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ec0cbd222efcd30aee3a8e96ff9cf2c8f3c41c4838e97370144102e3916396->enter($__internal_d0ec0cbd222efcd30aee3a8e96ff9cf2c8f3c41c4838e97370144102e3916396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_770276bc603d53e2c7211e9159b64a04c9620130aead48c32a0e452d8eb25b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770276bc603d53e2c7211e9159b64a04c9620130aead48c32a0e452d8eb25b0b->enter($__internal_770276bc603d53e2c7211e9159b64a04c9620130aead48c32a0e452d8eb25b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d0ec0cbd222efcd30aee3a8e96ff9cf2c8f3c41c4838e97370144102e3916396->leave($__internal_d0ec0cbd222efcd30aee3a8e96ff9cf2c8f3c41c4838e97370144102e3916396_prof);

        
        $__internal_770276bc603d53e2c7211e9159b64a04c9620130aead48c32a0e452d8eb25b0b->leave($__internal_770276bc603d53e2c7211e9159b64a04c9620130aead48c32a0e452d8eb25b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
