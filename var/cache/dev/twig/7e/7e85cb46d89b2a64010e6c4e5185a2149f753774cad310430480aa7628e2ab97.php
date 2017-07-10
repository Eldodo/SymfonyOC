<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cc09717f96e0d8a8dee09e3c656e65ad7d1c9bd4eb44b1a9c8d1de292297e7e5 extends Twig_Template
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
        $__internal_f4d1d88879bbc3b62033a1c7e846391bebc84810d94fcbe1378b1377295f7ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d1d88879bbc3b62033a1c7e846391bebc84810d94fcbe1378b1377295f7ced->enter($__internal_f4d1d88879bbc3b62033a1c7e846391bebc84810d94fcbe1378b1377295f7ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_84831c8a91d8d56c27f164ba3b110657fb61799135f090c48b9662c1a86ea256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84831c8a91d8d56c27f164ba3b110657fb61799135f090c48b9662c1a86ea256->enter($__internal_84831c8a91d8d56c27f164ba3b110657fb61799135f090c48b9662c1a86ea256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d1d88879bbc3b62033a1c7e846391bebc84810d94fcbe1378b1377295f7ced->leave($__internal_f4d1d88879bbc3b62033a1c7e846391bebc84810d94fcbe1378b1377295f7ced_prof);

        
        $__internal_84831c8a91d8d56c27f164ba3b110657fb61799135f090c48b9662c1a86ea256->leave($__internal_84831c8a91d8d56c27f164ba3b110657fb61799135f090c48b9662c1a86ea256_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a8ca9cdb79c7d1a53c1d6be879355ceeda6bb0068d04a83f8ae4539e2374d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8ca9cdb79c7d1a53c1d6be879355ceeda6bb0068d04a83f8ae4539e2374d7b->enter($__internal_9a8ca9cdb79c7d1a53c1d6be879355ceeda6bb0068d04a83f8ae4539e2374d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_386791eeccee7996a2d8ddd691770290a0b97e7de026fe85c967f452b754abdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386791eeccee7996a2d8ddd691770290a0b97e7de026fe85c967f452b754abdb->enter($__internal_386791eeccee7996a2d8ddd691770290a0b97e7de026fe85c967f452b754abdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_386791eeccee7996a2d8ddd691770290a0b97e7de026fe85c967f452b754abdb->leave($__internal_386791eeccee7996a2d8ddd691770290a0b97e7de026fe85c967f452b754abdb_prof);

        
        $__internal_9a8ca9cdb79c7d1a53c1d6be879355ceeda6bb0068d04a83f8ae4539e2374d7b->leave($__internal_9a8ca9cdb79c7d1a53c1d6be879355ceeda6bb0068d04a83f8ae4539e2374d7b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e23220487fb0efaa0d4193340c07c4f3336066b83d4bfdcc739d319e61cc437d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23220487fb0efaa0d4193340c07c4f3336066b83d4bfdcc739d319e61cc437d->enter($__internal_e23220487fb0efaa0d4193340c07c4f3336066b83d4bfdcc739d319e61cc437d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37e1dad920cca7cc2222188572fe0c0f288090b39b5386fc26de7605e05d6ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e1dad920cca7cc2222188572fe0c0f288090b39b5386fc26de7605e05d6ec8->enter($__internal_37e1dad920cca7cc2222188572fe0c0f288090b39b5386fc26de7605e05d6ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37e1dad920cca7cc2222188572fe0c0f288090b39b5386fc26de7605e05d6ec8->leave($__internal_37e1dad920cca7cc2222188572fe0c0f288090b39b5386fc26de7605e05d6ec8_prof);

        
        $__internal_e23220487fb0efaa0d4193340c07c4f3336066b83d4bfdcc739d319e61cc437d->leave($__internal_e23220487fb0efaa0d4193340c07c4f3336066b83d4bfdcc739d319e61cc437d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6bb7be0a77849817f934b768ddb8375c224fd2f316f8d0c7bec3f1e90a5e136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bb7be0a77849817f934b768ddb8375c224fd2f316f8d0c7bec3f1e90a5e136->enter($__internal_a6bb7be0a77849817f934b768ddb8375c224fd2f316f8d0c7bec3f1e90a5e136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09ab774598736c08bcfa5360d6e9c628f0f10a59c4e888a6c1b2afb5bf480204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ab774598736c08bcfa5360d6e9c628f0f10a59c4e888a6c1b2afb5bf480204->enter($__internal_09ab774598736c08bcfa5360d6e9c628f0f10a59c4e888a6c1b2afb5bf480204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_09ab774598736c08bcfa5360d6e9c628f0f10a59c4e888a6c1b2afb5bf480204->leave($__internal_09ab774598736c08bcfa5360d6e9c628f0f10a59c4e888a6c1b2afb5bf480204_prof);

        
        $__internal_a6bb7be0a77849817f934b768ddb8375c224fd2f316f8d0c7bec3f1e90a5e136->leave($__internal_a6bb7be0a77849817f934b768ddb8375c224fd2f316f8d0c7bec3f1e90a5e136_prof);

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
