<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e03b45158083cc36b6bb4b276c162d0acf343fb7db3cb6bdf94390a85331d221 extends Twig_Template
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
        $__internal_82bb91f921932e4fbd566b55d59d45c066d6a10eb868635a4f4ffb438894bc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bb91f921932e4fbd566b55d59d45c066d6a10eb868635a4f4ffb438894bc68->enter($__internal_82bb91f921932e4fbd566b55d59d45c066d6a10eb868635a4f4ffb438894bc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_672186714aafb902c25f74fee0dc827eeb274a3c377394bfbb4df251b36e3682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672186714aafb902c25f74fee0dc827eeb274a3c377394bfbb4df251b36e3682->enter($__internal_672186714aafb902c25f74fee0dc827eeb274a3c377394bfbb4df251b36e3682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_82bb91f921932e4fbd566b55d59d45c066d6a10eb868635a4f4ffb438894bc68->leave($__internal_82bb91f921932e4fbd566b55d59d45c066d6a10eb868635a4f4ffb438894bc68_prof);

        
        $__internal_672186714aafb902c25f74fee0dc827eeb274a3c377394bfbb4df251b36e3682->leave($__internal_672186714aafb902c25f74fee0dc827eeb274a3c377394bfbb4df251b36e3682_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e124019f28575ab3f2ff8a8e09882e26107e60474a9469f6055985319e3bf5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e124019f28575ab3f2ff8a8e09882e26107e60474a9469f6055985319e3bf5ba->enter($__internal_e124019f28575ab3f2ff8a8e09882e26107e60474a9469f6055985319e3bf5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e05f366e092c864d5197f90dfbd4879f2c57b6e5cff7bda1c0cbd878468055dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05f366e092c864d5197f90dfbd4879f2c57b6e5cff7bda1c0cbd878468055dc->enter($__internal_e05f366e092c864d5197f90dfbd4879f2c57b6e5cff7bda1c0cbd878468055dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e05f366e092c864d5197f90dfbd4879f2c57b6e5cff7bda1c0cbd878468055dc->leave($__internal_e05f366e092c864d5197f90dfbd4879f2c57b6e5cff7bda1c0cbd878468055dc_prof);

        
        $__internal_e124019f28575ab3f2ff8a8e09882e26107e60474a9469f6055985319e3bf5ba->leave($__internal_e124019f28575ab3f2ff8a8e09882e26107e60474a9469f6055985319e3bf5ba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e4f9b13983649ff0d2d00369ed565d8c4e11fe77086cc3e3e90e8143231ef51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4f9b13983649ff0d2d00369ed565d8c4e11fe77086cc3e3e90e8143231ef51->enter($__internal_3e4f9b13983649ff0d2d00369ed565d8c4e11fe77086cc3e3e90e8143231ef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85c73493d34f35d9d8d3eaed7d8d284d3de69d6256261d0bd50b12973ee859c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c73493d34f35d9d8d3eaed7d8d284d3de69d6256261d0bd50b12973ee859c6->enter($__internal_85c73493d34f35d9d8d3eaed7d8d284d3de69d6256261d0bd50b12973ee859c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85c73493d34f35d9d8d3eaed7d8d284d3de69d6256261d0bd50b12973ee859c6->leave($__internal_85c73493d34f35d9d8d3eaed7d8d284d3de69d6256261d0bd50b12973ee859c6_prof);

        
        $__internal_3e4f9b13983649ff0d2d00369ed565d8c4e11fe77086cc3e3e90e8143231ef51->leave($__internal_3e4f9b13983649ff0d2d00369ed565d8c4e11fe77086cc3e3e90e8143231ef51_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc1e7d10369cb6743aba7212fed9e077f474b312782203294181609b2d2400f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc1e7d10369cb6743aba7212fed9e077f474b312782203294181609b2d2400f->enter($__internal_cbc1e7d10369cb6743aba7212fed9e077f474b312782203294181609b2d2400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4f44ad43aaeee3dbfef410b16b0c0b541a17b5d3458eda686697ce55529f301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f44ad43aaeee3dbfef410b16b0c0b541a17b5d3458eda686697ce55529f301->enter($__internal_d4f44ad43aaeee3dbfef410b16b0c0b541a17b5d3458eda686697ce55529f301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4f44ad43aaeee3dbfef410b16b0c0b541a17b5d3458eda686697ce55529f301->leave($__internal_d4f44ad43aaeee3dbfef410b16b0c0b541a17b5d3458eda686697ce55529f301_prof);

        
        $__internal_cbc1e7d10369cb6743aba7212fed9e077f474b312782203294181609b2d2400f->leave($__internal_cbc1e7d10369cb6743aba7212fed9e077f474b312782203294181609b2d2400f_prof);

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
