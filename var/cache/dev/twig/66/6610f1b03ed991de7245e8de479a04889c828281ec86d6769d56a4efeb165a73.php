<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_415b1b15156db4bc8bcc335a395d1cdd4ae89a027611d30c05707b22057412b5 extends Twig_Template
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
        $__internal_3f5a52b5681b32f7f324c6176958ec184b746f3f4a068061ec9c76061ca0d0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5a52b5681b32f7f324c6176958ec184b746f3f4a068061ec9c76061ca0d0c6->enter($__internal_3f5a52b5681b32f7f324c6176958ec184b746f3f4a068061ec9c76061ca0d0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_39cfabf3f9c6018ed066893ebfa593fd7e71c3b21c5a77b13fd865a3b317c222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cfabf3f9c6018ed066893ebfa593fd7e71c3b21c5a77b13fd865a3b317c222->enter($__internal_39cfabf3f9c6018ed066893ebfa593fd7e71c3b21c5a77b13fd865a3b317c222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3f5a52b5681b32f7f324c6176958ec184b746f3f4a068061ec9c76061ca0d0c6->leave($__internal_3f5a52b5681b32f7f324c6176958ec184b746f3f4a068061ec9c76061ca0d0c6_prof);

        
        $__internal_39cfabf3f9c6018ed066893ebfa593fd7e71c3b21c5a77b13fd865a3b317c222->leave($__internal_39cfabf3f9c6018ed066893ebfa593fd7e71c3b21c5a77b13fd865a3b317c222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
