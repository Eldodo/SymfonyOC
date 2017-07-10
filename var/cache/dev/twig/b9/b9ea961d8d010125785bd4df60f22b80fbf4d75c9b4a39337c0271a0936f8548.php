<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4909e32202005780f4c87bd803f8bf3a1e6aafd235c462d2d2dad687b192aa9f extends Twig_Template
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
        $__internal_8afb17fa8c647e0961fe70464c9f53846786b8311f0d01d9fd111032c8efc8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afb17fa8c647e0961fe70464c9f53846786b8311f0d01d9fd111032c8efc8d5->enter($__internal_8afb17fa8c647e0961fe70464c9f53846786b8311f0d01d9fd111032c8efc8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7ca660f5174d5ebc0144e4c2f95e47c7046313090f5e90d3a87651196f9a97dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca660f5174d5ebc0144e4c2f95e47c7046313090f5e90d3a87651196f9a97dd->enter($__internal_7ca660f5174d5ebc0144e4c2f95e47c7046313090f5e90d3a87651196f9a97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8afb17fa8c647e0961fe70464c9f53846786b8311f0d01d9fd111032c8efc8d5->leave($__internal_8afb17fa8c647e0961fe70464c9f53846786b8311f0d01d9fd111032c8efc8d5_prof);

        
        $__internal_7ca660f5174d5ebc0144e4c2f95e47c7046313090f5e90d3a87651196f9a97dd->leave($__internal_7ca660f5174d5ebc0144e4c2f95e47c7046313090f5e90d3a87651196f9a97dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
