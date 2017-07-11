<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6f24b409d2a2a6c7bb543488586c56eb9e81738c2f54cfedf9f79eb8c708254b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c30f4c6dafb0599736e2f208fbcf5ca218a682492e631fbb86fde9326bdd0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c30f4c6dafb0599736e2f208fbcf5ca218a682492e631fbb86fde9326bdd0ae->enter($__internal_5c30f4c6dafb0599736e2f208fbcf5ca218a682492e631fbb86fde9326bdd0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_32f4313ce7ddf7d46569165c2c7d40d096b49002dc332e9e20dd78e5c16fb950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f4313ce7ddf7d46569165c2c7d40d096b49002dc332e9e20dd78e5c16fb950->enter($__internal_32f4313ce7ddf7d46569165c2c7d40d096b49002dc332e9e20dd78e5c16fb950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5c30f4c6dafb0599736e2f208fbcf5ca218a682492e631fbb86fde9326bdd0ae->leave($__internal_5c30f4c6dafb0599736e2f208fbcf5ca218a682492e631fbb86fde9326bdd0ae_prof);

        
        $__internal_32f4313ce7ddf7d46569165c2c7d40d096b49002dc332e9e20dd78e5c16fb950->leave($__internal_32f4313ce7ddf7d46569165c2c7d40d096b49002dc332e9e20dd78e5c16fb950_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b69dced7b1a9b53d3564c8d34ef47da8156542426b1c717c0f1e7c177dd3ed17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69dced7b1a9b53d3564c8d34ef47da8156542426b1c717c0f1e7c177dd3ed17->enter($__internal_b69dced7b1a9b53d3564c8d34ef47da8156542426b1c717c0f1e7c177dd3ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9779b21e26749553147ac5dc2e3c3382861b8e3128410e7365769a291098685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9779b21e26749553147ac5dc2e3c3382861b8e3128410e7365769a291098685a->enter($__internal_9779b21e26749553147ac5dc2e3c3382861b8e3128410e7365769a291098685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9779b21e26749553147ac5dc2e3c3382861b8e3128410e7365769a291098685a->leave($__internal_9779b21e26749553147ac5dc2e3c3382861b8e3128410e7365769a291098685a_prof);

        
        $__internal_b69dced7b1a9b53d3564c8d34ef47da8156542426b1c717c0f1e7c177dd3ed17->leave($__internal_b69dced7b1a9b53d3564c8d34ef47da8156542426b1c717c0f1e7c177dd3ed17_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdb89e5c0f93075730a97cf5e37826cef0ff681079282967ca87c09f6e1580a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb89e5c0f93075730a97cf5e37826cef0ff681079282967ca87c09f6e1580a6->enter($__internal_cdb89e5c0f93075730a97cf5e37826cef0ff681079282967ca87c09f6e1580a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64be5e58c9889d6e96048f029c3be8772d961e61499588cc82d946f33d89c245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64be5e58c9889d6e96048f029c3be8772d961e61499588cc82d946f33d89c245->enter($__internal_64be5e58c9889d6e96048f029c3be8772d961e61499588cc82d946f33d89c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_64be5e58c9889d6e96048f029c3be8772d961e61499588cc82d946f33d89c245->leave($__internal_64be5e58c9889d6e96048f029c3be8772d961e61499588cc82d946f33d89c245_prof);

        
        $__internal_cdb89e5c0f93075730a97cf5e37826cef0ff681079282967ca87c09f6e1580a6->leave($__internal_cdb89e5c0f93075730a97cf5e37826cef0ff681079282967ca87c09f6e1580a6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b0b28de82d4dccf62efc522dc6edfdf183d982bb5eb059896badffcfb65419c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0b28de82d4dccf62efc522dc6edfdf183d982bb5eb059896badffcfb65419c->enter($__internal_9b0b28de82d4dccf62efc522dc6edfdf183d982bb5eb059896badffcfb65419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b32a89154c689fb36926786e761424ba2c52192256e22d05fbe89c4d4e36da1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32a89154c689fb36926786e761424ba2c52192256e22d05fbe89c4d4e36da1c->enter($__internal_b32a89154c689fb36926786e761424ba2c52192256e22d05fbe89c4d4e36da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b32a89154c689fb36926786e761424ba2c52192256e22d05fbe89c4d4e36da1c->leave($__internal_b32a89154c689fb36926786e761424ba2c52192256e22d05fbe89c4d4e36da1c_prof);

        
        $__internal_9b0b28de82d4dccf62efc522dc6edfdf183d982bb5eb059896badffcfb65419c->leave($__internal_9b0b28de82d4dccf62efc522dc6edfdf183d982bb5eb059896badffcfb65419c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
