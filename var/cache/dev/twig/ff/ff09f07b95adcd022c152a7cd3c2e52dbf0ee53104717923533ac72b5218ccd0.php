<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7020c4d2459021e8056db397883c656b936d37943dfe53c2f3bc8d1395c6c51e extends Twig_Template
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
        $__internal_a51bb77515482be888f8072b6ca57297e80c9af3880ef06018163855d505db9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51bb77515482be888f8072b6ca57297e80c9af3880ef06018163855d505db9e->enter($__internal_a51bb77515482be888f8072b6ca57297e80c9af3880ef06018163855d505db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4d9350753fc1ca4f99ce61ae22c78d62e17b373a4075598ee11c5ee652bf3440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9350753fc1ca4f99ce61ae22c78d62e17b373a4075598ee11c5ee652bf3440->enter($__internal_4d9350753fc1ca4f99ce61ae22c78d62e17b373a4075598ee11c5ee652bf3440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a51bb77515482be888f8072b6ca57297e80c9af3880ef06018163855d505db9e->leave($__internal_a51bb77515482be888f8072b6ca57297e80c9af3880ef06018163855d505db9e_prof);

        
        $__internal_4d9350753fc1ca4f99ce61ae22c78d62e17b373a4075598ee11c5ee652bf3440->leave($__internal_4d9350753fc1ca4f99ce61ae22c78d62e17b373a4075598ee11c5ee652bf3440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
