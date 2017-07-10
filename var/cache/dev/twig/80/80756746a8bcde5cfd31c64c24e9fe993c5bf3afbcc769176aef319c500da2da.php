<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_12cffe921b29e721c708185f02b26e7455664e24eaa6cc939c4a64f22e3bc314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f4c1a57e5dc56bb90ef04d6a664622dba42034e26ece9af5be3889985b8740e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4c1a57e5dc56bb90ef04d6a664622dba42034e26ece9af5be3889985b8740e->enter($__internal_4f4c1a57e5dc56bb90ef04d6a664622dba42034e26ece9af5be3889985b8740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_a2b1c695ee7f15d1ec4c33c219243ae943175a0e05ef1f7174b7dbffd6bdbe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b1c695ee7f15d1ec4c33c219243ae943175a0e05ef1f7174b7dbffd6bdbe0d->enter($__internal_a2b1c695ee7f15d1ec4c33c219243ae943175a0e05ef1f7174b7dbffd6bdbe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
\t
    <div id=\"menu\">

      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu"));
        echo "

    </div>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
  </body>
</html>";
        
        $__internal_4f4c1a57e5dc56bb90ef04d6a664622dba42034e26ece9af5be3889985b8740e->leave($__internal_4f4c1a57e5dc56bb90ef04d6a664622dba42034e26ece9af5be3889985b8740e_prof);

        
        $__internal_a2b1c695ee7f15d1ec4c33c219243ae943175a0e05ef1f7174b7dbffd6bdbe0d->leave($__internal_a2b1c695ee7f15d1ec4c33c219243ae943175a0e05ef1f7174b7dbffd6bdbe0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37ddf291b1d4861fabf854c7f3d0f0074289d612d809148d1264977c2da3458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ddf291b1d4861fabf854c7f3d0f0074289d612d809148d1264977c2da3458->enter($__internal_b37ddf291b1d4861fabf854c7f3d0f0074289d612d809148d1264977c2da3458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6322016c9e5b449644f6f572bd325ccece531b0d72bbd4c8ea57f5211bf81d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6322016c9e5b449644f6f572bd325ccece531b0d72bbd4c8ea57f5211bf81d8e->enter($__internal_6322016c9e5b449644f6f572bd325ccece531b0d72bbd4c8ea57f5211bf81d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_6322016c9e5b449644f6f572bd325ccece531b0d72bbd4c8ea57f5211bf81d8e->leave($__internal_6322016c9e5b449644f6f572bd325ccece531b0d72bbd4c8ea57f5211bf81d8e_prof);

        
        $__internal_b37ddf291b1d4861fabf854c7f3d0f0074289d612d809148d1264977c2da3458->leave($__internal_b37ddf291b1d4861fabf854c7f3d0f0074289d612d809148d1264977c2da3458_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_31aae7d8f4ecb73de086a767163f684ea21797eb8eacbe048ed49aa59e6d42fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31aae7d8f4ecb73de086a767163f684ea21797eb8eacbe048ed49aa59e6d42fe->enter($__internal_31aae7d8f4ecb73de086a767163f684ea21797eb8eacbe048ed49aa59e6d42fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1441d9966dbea4f02e47fcf04a7bf819dcd866f7159b5cfa42292102a0ccbf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1441d9966dbea4f02e47fcf04a7bf819dcd866f7159b5cfa42292102a0ccbf3b->enter($__internal_1441d9966dbea4f02e47fcf04a7bf819dcd866f7159b5cfa42292102a0ccbf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        
        $__internal_1441d9966dbea4f02e47fcf04a7bf819dcd866f7159b5cfa42292102a0ccbf3b->leave($__internal_1441d9966dbea4f02e47fcf04a7bf819dcd866f7159b5cfa42292102a0ccbf3b_prof);

        
        $__internal_31aae7d8f4ecb73de086a767163f684ea21797eb8eacbe048ed49aa59e6d42fe->leave($__internal_31aae7d8f4ecb73de086a767163f684ea21797eb8eacbe048ed49aa59e6d42fe_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  81 => 16,  63 => 7,  51 => 18,  49 => 16,  43 => 13,  34 => 7,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>{% block title %}OC Plateforme{% endblock %}</title>
  </head>
  <body>
\t
    <div id=\"menu\">

      {{ render(controller(\"OCPlatformBundle:Advert:menu\")) }}

    </div>
    {% block body %}
    {% endblock %}

  </body>
</html>", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
