<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a9371f57abcb570829ae19f8b3669e3e74df5265ab2b7543c5b3d058a9db4118 extends Twig_Template
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
        $__internal_3aab46f4c732d45e5d5e5535547be0d7575c1dfe3b6b7582f316a3b518029e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aab46f4c732d45e5d5e5535547be0d7575c1dfe3b6b7582f316a3b518029e96->enter($__internal_3aab46f4c732d45e5d5e5535547be0d7575c1dfe3b6b7582f316a3b518029e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_653d0d5d5659709e50715a87e5e404ed8696e86a83cb0151a3046eaeaba1bc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d0d5d5659709e50715a87e5e404ed8696e86a83cb0151a3046eaeaba1bc94->enter($__internal_653d0d5d5659709e50715a87e5e404ed8696e86a83cb0151a3046eaeaba1bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3aab46f4c732d45e5d5e5535547be0d7575c1dfe3b6b7582f316a3b518029e96->leave($__internal_3aab46f4c732d45e5d5e5535547be0d7575c1dfe3b6b7582f316a3b518029e96_prof);

        
        $__internal_653d0d5d5659709e50715a87e5e404ed8696e86a83cb0151a3046eaeaba1bc94->leave($__internal_653d0d5d5659709e50715a87e5e404ed8696e86a83cb0151a3046eaeaba1bc94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
