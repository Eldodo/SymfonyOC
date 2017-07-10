<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
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
        $__internal_0cdb692b197e1da5b74bed7cb5a802d37e3f1cd32319a5a8a7232530911ab0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdb692b197e1da5b74bed7cb5a802d37e3f1cd32319a5a8a7232530911ab0ee->enter($__internal_0cdb692b197e1da5b74bed7cb5a802d37e3f1cd32319a5a8a7232530911ab0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_330e89504ebabdf9671f8cc4795b2ca654bd2930d3fd17568ddeaf5be1be21b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330e89504ebabdf9671f8cc4795b2ca654bd2930d3fd17568ddeaf5be1be21b8->enter($__internal_330e89504ebabdf9671f8cc4795b2ca654bd2930d3fd17568ddeaf5be1be21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0cdb692b197e1da5b74bed7cb5a802d37e3f1cd32319a5a8a7232530911ab0ee->leave($__internal_0cdb692b197e1da5b74bed7cb5a802d37e3f1cd32319a5a8a7232530911ab0ee_prof);

        
        $__internal_330e89504ebabdf9671f8cc4795b2ca654bd2930d3fd17568ddeaf5be1be21b8->leave($__internal_330e89504ebabdf9671f8cc4795b2ca654bd2930d3fd17568ddeaf5be1be21b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fab9a7ac59d47dd8080ab3a88af1452cd00a46d565c3cad30f2d6b67a0dc392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fab9a7ac59d47dd8080ab3a88af1452cd00a46d565c3cad30f2d6b67a0dc392->enter($__internal_5fab9a7ac59d47dd8080ab3a88af1452cd00a46d565c3cad30f2d6b67a0dc392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_531e25c39c3196b25431ac4d213f5a47bdd04f22b4254f09b758f87c83281828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531e25c39c3196b25431ac4d213f5a47bdd04f22b4254f09b758f87c83281828->enter($__internal_531e25c39c3196b25431ac4d213f5a47bdd04f22b4254f09b758f87c83281828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_531e25c39c3196b25431ac4d213f5a47bdd04f22b4254f09b758f87c83281828->leave($__internal_531e25c39c3196b25431ac4d213f5a47bdd04f22b4254f09b758f87c83281828_prof);

        
        $__internal_5fab9a7ac59d47dd8080ab3a88af1452cd00a46d565c3cad30f2d6b67a0dc392->leave($__internal_5fab9a7ac59d47dd8080ab3a88af1452cd00a46d565c3cad30f2d6b67a0dc392_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bf1aab67dd1a6ad038e281ac0cdf3750135fd7aa433f96b8dffb611b31604fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf1aab67dd1a6ad038e281ac0cdf3750135fd7aa433f96b8dffb611b31604fa->enter($__internal_6bf1aab67dd1a6ad038e281ac0cdf3750135fd7aa433f96b8dffb611b31604fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b50fd8a8b4f15b391e719ee3f7deed5b0597dfbb1049f0d6a72445e08d9421b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50fd8a8b4f15b391e719ee3f7deed5b0597dfbb1049f0d6a72445e08d9421b1->enter($__internal_b50fd8a8b4f15b391e719ee3f7deed5b0597dfbb1049f0d6a72445e08d9421b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b50fd8a8b4f15b391e719ee3f7deed5b0597dfbb1049f0d6a72445e08d9421b1->leave($__internal_b50fd8a8b4f15b391e719ee3f7deed5b0597dfbb1049f0d6a72445e08d9421b1_prof);

        
        $__internal_6bf1aab67dd1a6ad038e281ac0cdf3750135fd7aa433f96b8dffb611b31604fa->leave($__internal_6bf1aab67dd1a6ad038e281ac0cdf3750135fd7aa433f96b8dffb611b31604fa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe60d6393bbd72fea703d9c0ce5b57104712990753c9e776b04a269ab1574555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe60d6393bbd72fea703d9c0ce5b57104712990753c9e776b04a269ab1574555->enter($__internal_fe60d6393bbd72fea703d9c0ce5b57104712990753c9e776b04a269ab1574555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85466e859bb75181befbe4fe28915dea9cec36ed290127ae5c6e64f2e35041e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85466e859bb75181befbe4fe28915dea9cec36ed290127ae5c6e64f2e35041e9->enter($__internal_85466e859bb75181befbe4fe28915dea9cec36ed290127ae5c6e64f2e35041e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85466e859bb75181befbe4fe28915dea9cec36ed290127ae5c6e64f2e35041e9->leave($__internal_85466e859bb75181befbe4fe28915dea9cec36ed290127ae5c6e64f2e35041e9_prof);

        
        $__internal_fe60d6393bbd72fea703d9c0ce5b57104712990753c9e776b04a269ab1574555->leave($__internal_fe60d6393bbd72fea703d9c0ce5b57104712990753c9e776b04a269ab1574555_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
