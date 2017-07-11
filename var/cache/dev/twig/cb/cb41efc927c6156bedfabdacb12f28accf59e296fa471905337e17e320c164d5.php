<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_15990f39ab107fcbd6be20dffc78a71b16ab0e093cc1cc37c9d359700a10ffd0 extends Twig_Template
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
        $__internal_97f03be46e67cee81b99e9e65d734eb6ad62623f6f1536ee64ae282b28299a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f03be46e67cee81b99e9e65d734eb6ad62623f6f1536ee64ae282b28299a89->enter($__internal_97f03be46e67cee81b99e9e65d734eb6ad62623f6f1536ee64ae282b28299a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e526ea63b58c09ecaab9b4e22a66d3ed69e72dbcf41fb67dd967e8752a20b5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e526ea63b58c09ecaab9b4e22a66d3ed69e72dbcf41fb67dd967e8752a20b5a5->enter($__internal_e526ea63b58c09ecaab9b4e22a66d3ed69e72dbcf41fb67dd967e8752a20b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_97f03be46e67cee81b99e9e65d734eb6ad62623f6f1536ee64ae282b28299a89->leave($__internal_97f03be46e67cee81b99e9e65d734eb6ad62623f6f1536ee64ae282b28299a89_prof);

        
        $__internal_e526ea63b58c09ecaab9b4e22a66d3ed69e72dbcf41fb67dd967e8752a20b5a5->leave($__internal_e526ea63b58c09ecaab9b4e22a66d3ed69e72dbcf41fb67dd967e8752a20b5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
