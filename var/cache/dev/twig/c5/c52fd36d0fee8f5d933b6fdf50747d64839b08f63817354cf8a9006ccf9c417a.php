<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d707bb79568e9c601f86413b23f44b9ad42e8c22eb42e47f9c715ece8d0397f2 extends Twig_Template
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
        $__internal_a770ac4bdcf7908adbaaa18c78a63caf215c523a0f468747150cf4906d6618e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a770ac4bdcf7908adbaaa18c78a63caf215c523a0f468747150cf4906d6618e3->enter($__internal_a770ac4bdcf7908adbaaa18c78a63caf215c523a0f468747150cf4906d6618e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dc2c4f3926f7d3d077793d4d5fde7c7b72b267185aeacc31a902867174c7a755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2c4f3926f7d3d077793d4d5fde7c7b72b267185aeacc31a902867174c7a755->enter($__internal_dc2c4f3926f7d3d077793d4d5fde7c7b72b267185aeacc31a902867174c7a755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a770ac4bdcf7908adbaaa18c78a63caf215c523a0f468747150cf4906d6618e3->leave($__internal_a770ac4bdcf7908adbaaa18c78a63caf215c523a0f468747150cf4906d6618e3_prof);

        
        $__internal_dc2c4f3926f7d3d077793d4d5fde7c7b72b267185aeacc31a902867174c7a755->leave($__internal_dc2c4f3926f7d3d077793d4d5fde7c7b72b267185aeacc31a902867174c7a755_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
