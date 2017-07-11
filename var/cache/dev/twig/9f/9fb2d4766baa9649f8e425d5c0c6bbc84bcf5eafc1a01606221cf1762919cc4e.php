<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ddba719c9c84dc2f1630e2c3acede31e8f782f793cd37e0132f1ab76dae1f2a extends Twig_Template
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
        $__internal_d304915a819e50e0e16656e70bffbf681e13c48ddf0de8f1fd2066293ae44b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d304915a819e50e0e16656e70bffbf681e13c48ddf0de8f1fd2066293ae44b64->enter($__internal_d304915a819e50e0e16656e70bffbf681e13c48ddf0de8f1fd2066293ae44b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_87ac4e8a58e81bbe194a15b698f41618654c8900e5b51f97c302895ca5cb00ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ac4e8a58e81bbe194a15b698f41618654c8900e5b51f97c302895ca5cb00ca->enter($__internal_87ac4e8a58e81bbe194a15b698f41618654c8900e5b51f97c302895ca5cb00ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d304915a819e50e0e16656e70bffbf681e13c48ddf0de8f1fd2066293ae44b64->leave($__internal_d304915a819e50e0e16656e70bffbf681e13c48ddf0de8f1fd2066293ae44b64_prof);

        
        $__internal_87ac4e8a58e81bbe194a15b698f41618654c8900e5b51f97c302895ca5cb00ca->leave($__internal_87ac4e8a58e81bbe194a15b698f41618654c8900e5b51f97c302895ca5cb00ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
