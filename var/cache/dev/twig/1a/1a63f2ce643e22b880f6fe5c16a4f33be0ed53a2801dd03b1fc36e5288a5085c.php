<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_1fb8e51e3a05d1866884ea81b8df2aff6c06845ff91d718716e0e05d0b06033e extends Twig_Template
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
        $__internal_b1e874c43bb3b60aaa05b8e1472e5ad711419b592f3b85900f63802c506b28d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e874c43bb3b60aaa05b8e1472e5ad711419b592f3b85900f63802c506b28d9->enter($__internal_b1e874c43bb3b60aaa05b8e1472e5ad711419b592f3b85900f63802c506b28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5bc0ad6ead27dcd77943db9cd7d665ac15223a76374883d8d16e441d4ed9334a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc0ad6ead27dcd77943db9cd7d665ac15223a76374883d8d16e441d4ed9334a->enter($__internal_5bc0ad6ead27dcd77943db9cd7d665ac15223a76374883d8d16e441d4ed9334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b1e874c43bb3b60aaa05b8e1472e5ad711419b592f3b85900f63802c506b28d9->leave($__internal_b1e874c43bb3b60aaa05b8e1472e5ad711419b592f3b85900f63802c506b28d9_prof);

        
        $__internal_5bc0ad6ead27dcd77943db9cd7d665ac15223a76374883d8d16e441d4ed9334a->leave($__internal_5bc0ad6ead27dcd77943db9cd7d665ac15223a76374883d8d16e441d4ed9334a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
