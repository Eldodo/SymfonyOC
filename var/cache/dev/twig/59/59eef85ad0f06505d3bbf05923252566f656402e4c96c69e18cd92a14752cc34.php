<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_37b84cc9d2ae3a5fdb9615553724a2695ff54b4b001906a4b68ae2fe0319eef7 extends Twig_Template
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
        $__internal_3c3606a5a8373ff1c1bd726126f69b4d40f36d11085a0445ac1a017202341462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3606a5a8373ff1c1bd726126f69b4d40f36d11085a0445ac1a017202341462->enter($__internal_3c3606a5a8373ff1c1bd726126f69b4d40f36d11085a0445ac1a017202341462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9715ed8f79015320a140180c385777b3e33b8cc6ed5fa613f29c65672854e18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9715ed8f79015320a140180c385777b3e33b8cc6ed5fa613f29c65672854e18d->enter($__internal_9715ed8f79015320a140180c385777b3e33b8cc6ed5fa613f29c65672854e18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3c3606a5a8373ff1c1bd726126f69b4d40f36d11085a0445ac1a017202341462->leave($__internal_3c3606a5a8373ff1c1bd726126f69b4d40f36d11085a0445ac1a017202341462_prof);

        
        $__internal_9715ed8f79015320a140180c385777b3e33b8cc6ed5fa613f29c65672854e18d->leave($__internal_9715ed8f79015320a140180c385777b3e33b8cc6ed5fa613f29c65672854e18d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
