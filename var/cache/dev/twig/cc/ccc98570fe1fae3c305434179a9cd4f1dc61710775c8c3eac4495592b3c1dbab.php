<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e3c905e13c65fe687928de780033fd5ec4baaf4e39cf747acff992542dfe5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e3c905e13c65fe687928de780033fd5ec4baaf4e39cf747acff992542dfe5f->enter($__internal_96e3c905e13c65fe687928de780033fd5ec4baaf4e39cf747acff992542dfe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a5f9c8ee31fd7a4dc5fe0b0d1913ddb23ba89faf7017a5b3e371b039b6c36db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5f9c8ee31fd7a4dc5fe0b0d1913ddb23ba89faf7017a5b3e371b039b6c36db->enter($__internal_1a5f9c8ee31fd7a4dc5fe0b0d1913ddb23ba89faf7017a5b3e371b039b6c36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_96e3c905e13c65fe687928de780033fd5ec4baaf4e39cf747acff992542dfe5f->leave($__internal_96e3c905e13c65fe687928de780033fd5ec4baaf4e39cf747acff992542dfe5f_prof);

        
        $__internal_1a5f9c8ee31fd7a4dc5fe0b0d1913ddb23ba89faf7017a5b3e371b039b6c36db->leave($__internal_1a5f9c8ee31fd7a4dc5fe0b0d1913ddb23ba89faf7017a5b3e371b039b6c36db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea35fe7bf280155dd1ebecdeeedeac55bdfc6223697e9c5f94e45871097af7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea35fe7bf280155dd1ebecdeeedeac55bdfc6223697e9c5f94e45871097af7f4->enter($__internal_ea35fe7bf280155dd1ebecdeeedeac55bdfc6223697e9c5f94e45871097af7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66993fece84993cb92770fc7984248ac53360677136b2d7a885ae2b625a76a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66993fece84993cb92770fc7984248ac53360677136b2d7a885ae2b625a76a3d->enter($__internal_66993fece84993cb92770fc7984248ac53360677136b2d7a885ae2b625a76a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66993fece84993cb92770fc7984248ac53360677136b2d7a885ae2b625a76a3d->leave($__internal_66993fece84993cb92770fc7984248ac53360677136b2d7a885ae2b625a76a3d_prof);

        
        $__internal_ea35fe7bf280155dd1ebecdeeedeac55bdfc6223697e9c5f94e45871097af7f4->leave($__internal_ea35fe7bf280155dd1ebecdeeedeac55bdfc6223697e9c5f94e45871097af7f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae18da4e6f62cdbb7577d1bc67e25ba11312b2464981d8d875a21d91e31ec6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae18da4e6f62cdbb7577d1bc67e25ba11312b2464981d8d875a21d91e31ec6e7->enter($__internal_ae18da4e6f62cdbb7577d1bc67e25ba11312b2464981d8d875a21d91e31ec6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_928ec7f2339ee9a1704b79038fe17dac3ebb9ec54dba1e73f8789f5d844064a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928ec7f2339ee9a1704b79038fe17dac3ebb9ec54dba1e73f8789f5d844064a9->enter($__internal_928ec7f2339ee9a1704b79038fe17dac3ebb9ec54dba1e73f8789f5d844064a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_928ec7f2339ee9a1704b79038fe17dac3ebb9ec54dba1e73f8789f5d844064a9->leave($__internal_928ec7f2339ee9a1704b79038fe17dac3ebb9ec54dba1e73f8789f5d844064a9_prof);

        
        $__internal_ae18da4e6f62cdbb7577d1bc67e25ba11312b2464981d8d875a21d91e31ec6e7->leave($__internal_ae18da4e6f62cdbb7577d1bc67e25ba11312b2464981d8d875a21d91e31ec6e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a2a6992bf60cc416df41912a7c5b8184fa6ab26557bd19b71fa961bf17ed13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a2a6992bf60cc416df41912a7c5b8184fa6ab26557bd19b71fa961bf17ed13->enter($__internal_78a2a6992bf60cc416df41912a7c5b8184fa6ab26557bd19b71fa961bf17ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1b91e003c15dfeb38ba3fca5b2665ea79e983f4a7d8c881b74cc0bc2709c315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b91e003c15dfeb38ba3fca5b2665ea79e983f4a7d8c881b74cc0bc2709c315->enter($__internal_c1b91e003c15dfeb38ba3fca5b2665ea79e983f4a7d8c881b74cc0bc2709c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1b91e003c15dfeb38ba3fca5b2665ea79e983f4a7d8c881b74cc0bc2709c315->leave($__internal_c1b91e003c15dfeb38ba3fca5b2665ea79e983f4a7d8c881b74cc0bc2709c315_prof);

        
        $__internal_78a2a6992bf60cc416df41912a7c5b8184fa6ab26557bd19b71fa961bf17ed13->leave($__internal_78a2a6992bf60cc416df41912a7c5b8184fa6ab26557bd19b71fa961bf17ed13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14725cbebf6bc1167331da35c6f648c2bc618a7a1c837affb2c7708336280078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14725cbebf6bc1167331da35c6f648c2bc618a7a1c837affb2c7708336280078->enter($__internal_14725cbebf6bc1167331da35c6f648c2bc618a7a1c837affb2c7708336280078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d674aecfb629544080946fd13edce1bdf5cf827e440f6e24c84aa70090b426c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d674aecfb629544080946fd13edce1bdf5cf827e440f6e24c84aa70090b426c9->enter($__internal_d674aecfb629544080946fd13edce1bdf5cf827e440f6e24c84aa70090b426c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d674aecfb629544080946fd13edce1bdf5cf827e440f6e24c84aa70090b426c9->leave($__internal_d674aecfb629544080946fd13edce1bdf5cf827e440f6e24c84aa70090b426c9_prof);

        
        $__internal_14725cbebf6bc1167331da35c6f648c2bc618a7a1c837affb2c7708336280078->leave($__internal_14725cbebf6bc1167331da35c6f648c2bc618a7a1c837affb2c7708336280078_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
