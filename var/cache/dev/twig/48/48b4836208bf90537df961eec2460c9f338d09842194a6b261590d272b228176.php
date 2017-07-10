<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ea4b8004f81ac668e39c490c634f5383600c4ac9ce5148604a822c6f511537d extends Twig_Template
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
        $__internal_3b34bdc1dc7d475c143ee936f88919e6ca2edeca300a6fe0ee15b79f7d64111f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b34bdc1dc7d475c143ee936f88919e6ca2edeca300a6fe0ee15b79f7d64111f->enter($__internal_3b34bdc1dc7d475c143ee936f88919e6ca2edeca300a6fe0ee15b79f7d64111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e8184b8f976fd35a0472a4473b3186a522de7e6c2e999acbf91d68d3aff0c019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8184b8f976fd35a0472a4473b3186a522de7e6c2e999acbf91d68d3aff0c019->enter($__internal_e8184b8f976fd35a0472a4473b3186a522de7e6c2e999acbf91d68d3aff0c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3b34bdc1dc7d475c143ee936f88919e6ca2edeca300a6fe0ee15b79f7d64111f->leave($__internal_3b34bdc1dc7d475c143ee936f88919e6ca2edeca300a6fe0ee15b79f7d64111f_prof);

        
        $__internal_e8184b8f976fd35a0472a4473b3186a522de7e6c2e999acbf91d68d3aff0c019->leave($__internal_e8184b8f976fd35a0472a4473b3186a522de7e6c2e999acbf91d68d3aff0c019_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
