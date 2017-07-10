<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d4089c4e374fa22a4ecc9d6cb6640ad2580b6a179230c6fabde44da95e266f8a extends Twig_Template
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
        $__internal_3d380fb366cfd4c85ec7f3c570d1723f9f2a9b30483413eb2f03e3ab9869bea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d380fb366cfd4c85ec7f3c570d1723f9f2a9b30483413eb2f03e3ab9869bea6->enter($__internal_3d380fb366cfd4c85ec7f3c570d1723f9f2a9b30483413eb2f03e3ab9869bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_68661c5bad4754bef7858fbdcf861868bbdeb4fd6cb74db6de651b18df7eff76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68661c5bad4754bef7858fbdcf861868bbdeb4fd6cb74db6de651b18df7eff76->enter($__internal_68661c5bad4754bef7858fbdcf861868bbdeb4fd6cb74db6de651b18df7eff76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3d380fb366cfd4c85ec7f3c570d1723f9f2a9b30483413eb2f03e3ab9869bea6->leave($__internal_3d380fb366cfd4c85ec7f3c570d1723f9f2a9b30483413eb2f03e3ab9869bea6_prof);

        
        $__internal_68661c5bad4754bef7858fbdcf861868bbdeb4fd6cb74db6de651b18df7eff76->leave($__internal_68661c5bad4754bef7858fbdcf861868bbdeb4fd6cb74db6de651b18df7eff76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
