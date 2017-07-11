<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39fd64b77a20582ceb43ddb85a8a4b5edce979b354dcfab69ebb7cc4ae260f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c86d6adf469753e9febaf014adf105f018f6def2782a96447a49e3c300c11daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86d6adf469753e9febaf014adf105f018f6def2782a96447a49e3c300c11daa->enter($__internal_c86d6adf469753e9febaf014adf105f018f6def2782a96447a49e3c300c11daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_dfb81d5df77091dd5db63c58cee8ade1242750ab4b443e56529b6191259db24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb81d5df77091dd5db63c58cee8ade1242750ab4b443e56529b6191259db24f->enter($__internal_dfb81d5df77091dd5db63c58cee8ade1242750ab4b443e56529b6191259db24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86d6adf469753e9febaf014adf105f018f6def2782a96447a49e3c300c11daa->leave($__internal_c86d6adf469753e9febaf014adf105f018f6def2782a96447a49e3c300c11daa_prof);

        
        $__internal_dfb81d5df77091dd5db63c58cee8ade1242750ab4b443e56529b6191259db24f->leave($__internal_dfb81d5df77091dd5db63c58cee8ade1242750ab4b443e56529b6191259db24f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22d47e7438e27953e9c5c2e20ae525ea1eed9f6fcda2e125ea91950425775f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d47e7438e27953e9c5c2e20ae525ea1eed9f6fcda2e125ea91950425775f94->enter($__internal_22d47e7438e27953e9c5c2e20ae525ea1eed9f6fcda2e125ea91950425775f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_457c6a128246a243aabe525e3b65a2ca1c58e4e434ccd08e971be843110df559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457c6a128246a243aabe525e3b65a2ca1c58e4e434ccd08e971be843110df559->enter($__internal_457c6a128246a243aabe525e3b65a2ca1c58e4e434ccd08e971be843110df559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_457c6a128246a243aabe525e3b65a2ca1c58e4e434ccd08e971be843110df559->leave($__internal_457c6a128246a243aabe525e3b65a2ca1c58e4e434ccd08e971be843110df559_prof);

        
        $__internal_22d47e7438e27953e9c5c2e20ae525ea1eed9f6fcda2e125ea91950425775f94->leave($__internal_22d47e7438e27953e9c5c2e20ae525ea1eed9f6fcda2e125ea91950425775f94_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dca3066828302b3d6df6abf81932bcf2697604a8e7461d943a034174acf5d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dca3066828302b3d6df6abf81932bcf2697604a8e7461d943a034174acf5d8e->enter($__internal_7dca3066828302b3d6df6abf81932bcf2697604a8e7461d943a034174acf5d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_773d8164a0448d98dae870765436524e6ee4e15c0e48e2d297362e9ccae8962a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773d8164a0448d98dae870765436524e6ee4e15c0e48e2d297362e9ccae8962a->enter($__internal_773d8164a0448d98dae870765436524e6ee4e15c0e48e2d297362e9ccae8962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_773d8164a0448d98dae870765436524e6ee4e15c0e48e2d297362e9ccae8962a->leave($__internal_773d8164a0448d98dae870765436524e6ee4e15c0e48e2d297362e9ccae8962a_prof);

        
        $__internal_7dca3066828302b3d6df6abf81932bcf2697604a8e7461d943a034174acf5d8e->leave($__internal_7dca3066828302b3d6df6abf81932bcf2697604a8e7461d943a034174acf5d8e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_96203478f03bcd896e2977977fb1593f801dda8f1c7a42310b2fbba511c37ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96203478f03bcd896e2977977fb1593f801dda8f1c7a42310b2fbba511c37ae7->enter($__internal_96203478f03bcd896e2977977fb1593f801dda8f1c7a42310b2fbba511c37ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65b3150ecb6397f30b279472a85457e57ef7c49f368bf081ce9fd16d4ed25a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b3150ecb6397f30b279472a85457e57ef7c49f368bf081ce9fd16d4ed25a70->enter($__internal_65b3150ecb6397f30b279472a85457e57ef7c49f368bf081ce9fd16d4ed25a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_65b3150ecb6397f30b279472a85457e57ef7c49f368bf081ce9fd16d4ed25a70->leave($__internal_65b3150ecb6397f30b279472a85457e57ef7c49f368bf081ce9fd16d4ed25a70_prof);

        
        $__internal_96203478f03bcd896e2977977fb1593f801dda8f1c7a42310b2fbba511c37ae7->leave($__internal_96203478f03bcd896e2977977fb1593f801dda8f1c7a42310b2fbba511c37ae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
