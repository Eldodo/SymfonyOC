<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
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
        $__internal_40016a3b62e688c246f58c40a8d5f61deb2c6558cb420b171a660776afa6f6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40016a3b62e688c246f58c40a8d5f61deb2c6558cb420b171a660776afa6f6e0->enter($__internal_40016a3b62e688c246f58c40a8d5f61deb2c6558cb420b171a660776afa6f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8b70e0eb7f65570284afe9eb2ca7afb3a32255e43e9d578a446c4370fae12cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b70e0eb7f65570284afe9eb2ca7afb3a32255e43e9d578a446c4370fae12cb7->enter($__internal_8b70e0eb7f65570284afe9eb2ca7afb3a32255e43e9d578a446c4370fae12cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_40016a3b62e688c246f58c40a8d5f61deb2c6558cb420b171a660776afa6f6e0->leave($__internal_40016a3b62e688c246f58c40a8d5f61deb2c6558cb420b171a660776afa6f6e0_prof);

        
        $__internal_8b70e0eb7f65570284afe9eb2ca7afb3a32255e43e9d578a446c4370fae12cb7->leave($__internal_8b70e0eb7f65570284afe9eb2ca7afb3a32255e43e9d578a446c4370fae12cb7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aa826a035110b2d1b162b3dfef45429e12b12c9dfac7752adb2c80a963a7814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa826a035110b2d1b162b3dfef45429e12b12c9dfac7752adb2c80a963a7814->enter($__internal_3aa826a035110b2d1b162b3dfef45429e12b12c9dfac7752adb2c80a963a7814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34ab752b0324c82a2ea91f8c223e265d1b0cff20acb45b1ae6a1b4f4febbfa05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ab752b0324c82a2ea91f8c223e265d1b0cff20acb45b1ae6a1b4f4febbfa05->enter($__internal_34ab752b0324c82a2ea91f8c223e265d1b0cff20acb45b1ae6a1b4f4febbfa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34ab752b0324c82a2ea91f8c223e265d1b0cff20acb45b1ae6a1b4f4febbfa05->leave($__internal_34ab752b0324c82a2ea91f8c223e265d1b0cff20acb45b1ae6a1b4f4febbfa05_prof);

        
        $__internal_3aa826a035110b2d1b162b3dfef45429e12b12c9dfac7752adb2c80a963a7814->leave($__internal_3aa826a035110b2d1b162b3dfef45429e12b12c9dfac7752adb2c80a963a7814_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7affdbe93d3c1bc23bccce8fcda2576524eb3ee5fc64b16b9bd4179997650e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7affdbe93d3c1bc23bccce8fcda2576524eb3ee5fc64b16b9bd4179997650e7b->enter($__internal_7affdbe93d3c1bc23bccce8fcda2576524eb3ee5fc64b16b9bd4179997650e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca4232c4b5655f656aa2dfb222bfe5d5da1c8ad8533511d35ce9c07c93e1ebfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4232c4b5655f656aa2dfb222bfe5d5da1c8ad8533511d35ce9c07c93e1ebfe->enter($__internal_ca4232c4b5655f656aa2dfb222bfe5d5da1c8ad8533511d35ce9c07c93e1ebfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ca4232c4b5655f656aa2dfb222bfe5d5da1c8ad8533511d35ce9c07c93e1ebfe->leave($__internal_ca4232c4b5655f656aa2dfb222bfe5d5da1c8ad8533511d35ce9c07c93e1ebfe_prof);

        
        $__internal_7affdbe93d3c1bc23bccce8fcda2576524eb3ee5fc64b16b9bd4179997650e7b->leave($__internal_7affdbe93d3c1bc23bccce8fcda2576524eb3ee5fc64b16b9bd4179997650e7b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_56586724bacba7c203ce8bbecee4ea3c49b86a6f60022d226df6c8c8ce444523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56586724bacba7c203ce8bbecee4ea3c49b86a6f60022d226df6c8c8ce444523->enter($__internal_56586724bacba7c203ce8bbecee4ea3c49b86a6f60022d226df6c8c8ce444523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96ac2fe2056f6ab715de6eb69576906e7dbc418dbb731c70a4979878ea194957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ac2fe2056f6ab715de6eb69576906e7dbc418dbb731c70a4979878ea194957->enter($__internal_96ac2fe2056f6ab715de6eb69576906e7dbc418dbb731c70a4979878ea194957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96ac2fe2056f6ab715de6eb69576906e7dbc418dbb731c70a4979878ea194957->leave($__internal_96ac2fe2056f6ab715de6eb69576906e7dbc418dbb731c70a4979878ea194957_prof);

        
        $__internal_56586724bacba7c203ce8bbecee4ea3c49b86a6f60022d226df6c8c8ce444523->leave($__internal_56586724bacba7c203ce8bbecee4ea3c49b86a6f60022d226df6c8c8ce444523_prof);

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
