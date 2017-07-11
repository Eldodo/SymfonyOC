<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a7ca0dc7093b4805cf2a334ee2112fd447b05b8233603438a6f4b338e74f3eb7 extends Twig_Template
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
        $__internal_23a6280873dc526df1d7dabd96d874d744afa7d23853dc94b37b57acbb971eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a6280873dc526df1d7dabd96d874d744afa7d23853dc94b37b57acbb971eaa->enter($__internal_23a6280873dc526df1d7dabd96d874d744afa7d23853dc94b37b57acbb971eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_873fb0cf62e80c757a049393fe14454d2654a6b1538eed683639ed5e7d923cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873fb0cf62e80c757a049393fe14454d2654a6b1538eed683639ed5e7d923cab->enter($__internal_873fb0cf62e80c757a049393fe14454d2654a6b1538eed683639ed5e7d923cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_23a6280873dc526df1d7dabd96d874d744afa7d23853dc94b37b57acbb971eaa->leave($__internal_23a6280873dc526df1d7dabd96d874d744afa7d23853dc94b37b57acbb971eaa_prof);

        
        $__internal_873fb0cf62e80c757a049393fe14454d2654a6b1538eed683639ed5e7d923cab->leave($__internal_873fb0cf62e80c757a049393fe14454d2654a6b1538eed683639ed5e7d923cab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
