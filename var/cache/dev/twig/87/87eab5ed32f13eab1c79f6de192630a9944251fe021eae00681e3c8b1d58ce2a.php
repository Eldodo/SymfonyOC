<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d28e3bf5e89303216dc65eb71f36e879639dbc5effbea8ab405e40b761eeeedc extends Twig_Template
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
        $__internal_732e3ab340763df1fd2f702d0c28b87899ff3d7fd951b8d0f5498cde67c4010d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732e3ab340763df1fd2f702d0c28b87899ff3d7fd951b8d0f5498cde67c4010d->enter($__internal_732e3ab340763df1fd2f702d0c28b87899ff3d7fd951b8d0f5498cde67c4010d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_16bee0c9b5239be99ff21b4900b313b59c1b84f3482e0c5cd90947f9436626bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bee0c9b5239be99ff21b4900b313b59c1b84f3482e0c5cd90947f9436626bd->enter($__internal_16bee0c9b5239be99ff21b4900b313b59c1b84f3482e0c5cd90947f9436626bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_732e3ab340763df1fd2f702d0c28b87899ff3d7fd951b8d0f5498cde67c4010d->leave($__internal_732e3ab340763df1fd2f702d0c28b87899ff3d7fd951b8d0f5498cde67c4010d_prof);

        
        $__internal_16bee0c9b5239be99ff21b4900b313b59c1b84f3482e0c5cd90947f9436626bd->leave($__internal_16bee0c9b5239be99ff21b4900b313b59c1b84f3482e0c5cd90947f9436626bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
