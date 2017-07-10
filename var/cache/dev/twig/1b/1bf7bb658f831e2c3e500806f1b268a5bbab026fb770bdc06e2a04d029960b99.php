<?php

/* ::base.html.twig */
class __TwigTemplate_e5aaa710ad05ff01d8c08fb3f7784e54091a35f64b96d647d3dca94f1a0868b7 extends Twig_Template
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
        $__internal_8fbe3c07fd1a8cc9623f1439a91f72ce2ebdecc160408bab4c36f48053a3fe89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbe3c07fd1a8cc9623f1439a91f72ce2ebdecc160408bab4c36f48053a3fe89->enter($__internal_8fbe3c07fd1a8cc9623f1439a91f72ce2ebdecc160408bab4c36f48053a3fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3767a5ada7a732ca8a1516e1fb8060d122d66f5ae511871bcd7ddfcc5cfb0fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3767a5ada7a732ca8a1516e1fb8060d122d66f5ae511871bcd7ddfcc5cfb0fe7->enter($__internal_3767a5ada7a732ca8a1516e1fb8060d122d66f5ae511871bcd7ddfcc5cfb0fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8fbe3c07fd1a8cc9623f1439a91f72ce2ebdecc160408bab4c36f48053a3fe89->leave($__internal_8fbe3c07fd1a8cc9623f1439a91f72ce2ebdecc160408bab4c36f48053a3fe89_prof);

        
        $__internal_3767a5ada7a732ca8a1516e1fb8060d122d66f5ae511871bcd7ddfcc5cfb0fe7->leave($__internal_3767a5ada7a732ca8a1516e1fb8060d122d66f5ae511871bcd7ddfcc5cfb0fe7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98f1ab8a62244db12cc65aa8effd8f0a822d4af91f77d9386e432801c6a2baf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f1ab8a62244db12cc65aa8effd8f0a822d4af91f77d9386e432801c6a2baf9->enter($__internal_98f1ab8a62244db12cc65aa8effd8f0a822d4af91f77d9386e432801c6a2baf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_944ae0345fc9b886e29e6cc227aa88daa1afc25d9febf8659b13e59869e3086b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944ae0345fc9b886e29e6cc227aa88daa1afc25d9febf8659b13e59869e3086b->enter($__internal_944ae0345fc9b886e29e6cc227aa88daa1afc25d9febf8659b13e59869e3086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_944ae0345fc9b886e29e6cc227aa88daa1afc25d9febf8659b13e59869e3086b->leave($__internal_944ae0345fc9b886e29e6cc227aa88daa1afc25d9febf8659b13e59869e3086b_prof);

        
        $__internal_98f1ab8a62244db12cc65aa8effd8f0a822d4af91f77d9386e432801c6a2baf9->leave($__internal_98f1ab8a62244db12cc65aa8effd8f0a822d4af91f77d9386e432801c6a2baf9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3348f60bac2e2f2978b68ffdaa69505fc739702fc45278be05694a4f6e1fb5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3348f60bac2e2f2978b68ffdaa69505fc739702fc45278be05694a4f6e1fb5ee->enter($__internal_3348f60bac2e2f2978b68ffdaa69505fc739702fc45278be05694a4f6e1fb5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6545c6f9e9a49298c16d52149201d2c57b572b103f71569f6dfa3ec017fa7891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6545c6f9e9a49298c16d52149201d2c57b572b103f71569f6dfa3ec017fa7891->enter($__internal_6545c6f9e9a49298c16d52149201d2c57b572b103f71569f6dfa3ec017fa7891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6545c6f9e9a49298c16d52149201d2c57b572b103f71569f6dfa3ec017fa7891->leave($__internal_6545c6f9e9a49298c16d52149201d2c57b572b103f71569f6dfa3ec017fa7891_prof);

        
        $__internal_3348f60bac2e2f2978b68ffdaa69505fc739702fc45278be05694a4f6e1fb5ee->leave($__internal_3348f60bac2e2f2978b68ffdaa69505fc739702fc45278be05694a4f6e1fb5ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ea60caacd2357e1d60f238e971c2915453e005844f839b6de0d0ab0521921e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ea60caacd2357e1d60f238e971c2915453e005844f839b6de0d0ab0521921e->enter($__internal_a8ea60caacd2357e1d60f238e971c2915453e005844f839b6de0d0ab0521921e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88d0b58b21efb959f9fa753e90c45f03a4774881db8ceaa56faeb9c840de72ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d0b58b21efb959f9fa753e90c45f03a4774881db8ceaa56faeb9c840de72ab->enter($__internal_88d0b58b21efb959f9fa753e90c45f03a4774881db8ceaa56faeb9c840de72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88d0b58b21efb959f9fa753e90c45f03a4774881db8ceaa56faeb9c840de72ab->leave($__internal_88d0b58b21efb959f9fa753e90c45f03a4774881db8ceaa56faeb9c840de72ab_prof);

        
        $__internal_a8ea60caacd2357e1d60f238e971c2915453e005844f839b6de0d0ab0521921e->leave($__internal_a8ea60caacd2357e1d60f238e971c2915453e005844f839b6de0d0ab0521921e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ea0520c77949de4f09d2cc55b0708730c8bb78c39b240bc51acccf6123a168c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea0520c77949de4f09d2cc55b0708730c8bb78c39b240bc51acccf6123a168c->enter($__internal_9ea0520c77949de4f09d2cc55b0708730c8bb78c39b240bc51acccf6123a168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93ff9eb82e666b131bb2d6fb366b0de7576e098afe4f2378275abbd2c8183935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ff9eb82e666b131bb2d6fb366b0de7576e098afe4f2378275abbd2c8183935->enter($__internal_93ff9eb82e666b131bb2d6fb366b0de7576e098afe4f2378275abbd2c8183935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_93ff9eb82e666b131bb2d6fb366b0de7576e098afe4f2378275abbd2c8183935->leave($__internal_93ff9eb82e666b131bb2d6fb366b0de7576e098afe4f2378275abbd2c8183935_prof);

        
        $__internal_9ea0520c77949de4f09d2cc55b0708730c8bb78c39b240bc51acccf6123a168c->leave($__internal_9ea0520c77949de4f09d2cc55b0708730c8bb78c39b240bc51acccf6123a168c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
