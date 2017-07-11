<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_654892c36d44fb0b0f53afc7f2616157508e5e2bff2318124865b6ecedde41af extends Twig_Template
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
        $__internal_beb1e8ca424b6f8f276cfe347268326ae9b5632223d07b65f7967a1335deca8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb1e8ca424b6f8f276cfe347268326ae9b5632223d07b65f7967a1335deca8b->enter($__internal_beb1e8ca424b6f8f276cfe347268326ae9b5632223d07b65f7967a1335deca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b97c5058ad1e7274db73129cd706a3d0eb70e208996d3d3f5ddfe3832b411d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97c5058ad1e7274db73129cd706a3d0eb70e208996d3d3f5ddfe3832b411d69->enter($__internal_b97c5058ad1e7274db73129cd706a3d0eb70e208996d3d3f5ddfe3832b411d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_beb1e8ca424b6f8f276cfe347268326ae9b5632223d07b65f7967a1335deca8b->leave($__internal_beb1e8ca424b6f8f276cfe347268326ae9b5632223d07b65f7967a1335deca8b_prof);

        
        $__internal_b97c5058ad1e7274db73129cd706a3d0eb70e208996d3d3f5ddfe3832b411d69->leave($__internal_b97c5058ad1e7274db73129cd706a3d0eb70e208996d3d3f5ddfe3832b411d69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
