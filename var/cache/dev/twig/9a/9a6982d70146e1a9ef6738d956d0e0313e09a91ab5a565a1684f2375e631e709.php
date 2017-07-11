<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_329ec90fe69a7bdc85c3d0f3438e83689aba609b694ba6a2b6ed9e32cc9eb54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329ec90fe69a7bdc85c3d0f3438e83689aba609b694ba6a2b6ed9e32cc9eb54d->enter($__internal_329ec90fe69a7bdc85c3d0f3438e83689aba609b694ba6a2b6ed9e32cc9eb54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_280c8b64d401afc7da7283e15471a406f03275ca1001c98cbfc84482c65d41d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280c8b64d401afc7da7283e15471a406f03275ca1001c98cbfc84482c65d41d9->enter($__internal_280c8b64d401afc7da7283e15471a406f03275ca1001c98cbfc84482c65d41d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329ec90fe69a7bdc85c3d0f3438e83689aba609b694ba6a2b6ed9e32cc9eb54d->leave($__internal_329ec90fe69a7bdc85c3d0f3438e83689aba609b694ba6a2b6ed9e32cc9eb54d_prof);

        
        $__internal_280c8b64d401afc7da7283e15471a406f03275ca1001c98cbfc84482c65d41d9->leave($__internal_280c8b64d401afc7da7283e15471a406f03275ca1001c98cbfc84482c65d41d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8364cdc3e2fc47a7d870de509fc7179cac6db2e746b7b26d6e58f3178ca04751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8364cdc3e2fc47a7d870de509fc7179cac6db2e746b7b26d6e58f3178ca04751->enter($__internal_8364cdc3e2fc47a7d870de509fc7179cac6db2e746b7b26d6e58f3178ca04751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98b45f9362447afe5805f2e20dc358cac38a14148b3889db19a3d171c1cc535b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b45f9362447afe5805f2e20dc358cac38a14148b3889db19a3d171c1cc535b->enter($__internal_98b45f9362447afe5805f2e20dc358cac38a14148b3889db19a3d171c1cc535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98b45f9362447afe5805f2e20dc358cac38a14148b3889db19a3d171c1cc535b->leave($__internal_98b45f9362447afe5805f2e20dc358cac38a14148b3889db19a3d171c1cc535b_prof);

        
        $__internal_8364cdc3e2fc47a7d870de509fc7179cac6db2e746b7b26d6e58f3178ca04751->leave($__internal_8364cdc3e2fc47a7d870de509fc7179cac6db2e746b7b26d6e58f3178ca04751_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bb9d7faa2a6ff403e6829fe569c736199a04c490aad5bcf80c0e3cd801f6082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb9d7faa2a6ff403e6829fe569c736199a04c490aad5bcf80c0e3cd801f6082->enter($__internal_3bb9d7faa2a6ff403e6829fe569c736199a04c490aad5bcf80c0e3cd801f6082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43f82b4ebf9d69d77412341c9d96775b23eb6d14f070b6d8d57dc8775eaf6030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f82b4ebf9d69d77412341c9d96775b23eb6d14f070b6d8d57dc8775eaf6030->enter($__internal_43f82b4ebf9d69d77412341c9d96775b23eb6d14f070b6d8d57dc8775eaf6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43f82b4ebf9d69d77412341c9d96775b23eb6d14f070b6d8d57dc8775eaf6030->leave($__internal_43f82b4ebf9d69d77412341c9d96775b23eb6d14f070b6d8d57dc8775eaf6030_prof);

        
        $__internal_3bb9d7faa2a6ff403e6829fe569c736199a04c490aad5bcf80c0e3cd801f6082->leave($__internal_3bb9d7faa2a6ff403e6829fe569c736199a04c490aad5bcf80c0e3cd801f6082_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_83fb78da8f5b6523750c4b32b6a4a87876c8d6fb47263340550ea1e76f1ae2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fb78da8f5b6523750c4b32b6a4a87876c8d6fb47263340550ea1e76f1ae2df->enter($__internal_83fb78da8f5b6523750c4b32b6a4a87876c8d6fb47263340550ea1e76f1ae2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b6d76b92094ba9f0714f54ba05879aa306efa6fbe3f08265a60afc676b15a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6d76b92094ba9f0714f54ba05879aa306efa6fbe3f08265a60afc676b15a3a->enter($__internal_0b6d76b92094ba9f0714f54ba05879aa306efa6fbe3f08265a60afc676b15a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b6d76b92094ba9f0714f54ba05879aa306efa6fbe3f08265a60afc676b15a3a->leave($__internal_0b6d76b92094ba9f0714f54ba05879aa306efa6fbe3f08265a60afc676b15a3a_prof);

        
        $__internal_83fb78da8f5b6523750c4b32b6a4a87876c8d6fb47263340550ea1e76f1ae2df->leave($__internal_83fb78da8f5b6523750c4b32b6a4a87876c8d6fb47263340550ea1e76f1ae2df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
