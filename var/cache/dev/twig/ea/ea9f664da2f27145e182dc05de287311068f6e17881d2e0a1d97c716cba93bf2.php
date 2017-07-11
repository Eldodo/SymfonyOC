<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3923a7537312516cb310f1a7d214d44c6014a936891830598ce845e7ef541f58 extends Twig_Template
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
        $__internal_ad3a5e61a466dcfb285ea51fc96bc507abe259222d93228b5320c2741b0cf822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3a5e61a466dcfb285ea51fc96bc507abe259222d93228b5320c2741b0cf822->enter($__internal_ad3a5e61a466dcfb285ea51fc96bc507abe259222d93228b5320c2741b0cf822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_8e2e7468ac835995ef4e572666e8911e1147e7ce9108d3aeb757a87b0ba35520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2e7468ac835995ef4e572666e8911e1147e7ce9108d3aeb757a87b0ba35520->enter($__internal_8e2e7468ac835995ef4e572666e8911e1147e7ce9108d3aeb757a87b0ba35520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ad3a5e61a466dcfb285ea51fc96bc507abe259222d93228b5320c2741b0cf822->leave($__internal_ad3a5e61a466dcfb285ea51fc96bc507abe259222d93228b5320c2741b0cf822_prof);

        
        $__internal_8e2e7468ac835995ef4e572666e8911e1147e7ce9108d3aeb757a87b0ba35520->leave($__internal_8e2e7468ac835995ef4e572666e8911e1147e7ce9108d3aeb757a87b0ba35520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
