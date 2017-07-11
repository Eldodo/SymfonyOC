<?php

/* ::layout.html.twig */
class __TwigTemplate_0479779490c46626ee41164ab0f578c59fd90a53d6348482d53030bd787fbc12 extends Twig_Template
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
        $__internal_738ac4ac435e3f10b55edbc34de1fea0b49711178e899057b3369b7b83b009aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738ac4ac435e3f10b55edbc34de1fea0b49711178e899057b3369b7b83b009aa->enter($__internal_738ac4ac435e3f10b55edbc34de1fea0b49711178e899057b3369b7b83b009aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_f29ebed0a2abbccbfe3946df258a601e2989e9e5b4dff6fc1ed4bdfbaf555860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29ebed0a2abbccbfe3946df258a601e2989e9e5b4dff6fc1ed4bdfbaf555860->enter($__internal_f29ebed0a2abbccbfe3946df258a601e2989e9e5b4dff6fc1ed4bdfbaf555860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC &#10219
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_738ac4ac435e3f10b55edbc34de1fea0b49711178e899057b3369b7b83b009aa->leave($__internal_738ac4ac435e3f10b55edbc34de1fea0b49711178e899057b3369b7b83b009aa_prof);

        
        $__internal_f29ebed0a2abbccbfe3946df258a601e2989e9e5b4dff6fc1ed4bdfbaf555860->leave($__internal_f29ebed0a2abbccbfe3946df258a601e2989e9e5b4dff6fc1ed4bdfbaf555860_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_84ff38af6c4c031de74af0f0b55c6bd8c46ceaf594926d730252a62e56a41e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ff38af6c4c031de74af0f0b55c6bd8c46ceaf594926d730252a62e56a41e37->enter($__internal_84ff38af6c4c031de74af0f0b55c6bd8c46ceaf594926d730252a62e56a41e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7ba37c9b99364c285db863ec997397110aeadc9eeaea893173faec476b67b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ba37c9b99364c285db863ec997397110aeadc9eeaea893173faec476b67b81->enter($__internal_e7ba37c9b99364c285db863ec997397110aeadc9eeaea893173faec476b67b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_e7ba37c9b99364c285db863ec997397110aeadc9eeaea893173faec476b67b81->leave($__internal_e7ba37c9b99364c285db863ec997397110aeadc9eeaea893173faec476b67b81_prof);

        
        $__internal_84ff38af6c4c031de74af0f0b55c6bd8c46ceaf594926d730252a62e56a41e37->leave($__internal_84ff38af6c4c031de74af0f0b55c6bd8c46ceaf594926d730252a62e56a41e37_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d809601b05640b335af1fcbcdf7874e8ee9d88cda0decbeffdead0aa945990c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d809601b05640b335af1fcbcdf7874e8ee9d88cda0decbeffdead0aa945990c9->enter($__internal_d809601b05640b335af1fcbcdf7874e8ee9d88cda0decbeffdead0aa945990c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d165e6f040a3483b455b11927da9c23bbf4efaa55bd01c69dc1a5d57f26ec46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d165e6f040a3483b455b11927da9c23bbf4efaa55bd01c69dc1a5d57f26ec46->enter($__internal_0d165e6f040a3483b455b11927da9c23bbf4efaa55bd01c69dc1a5d57f26ec46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_0d165e6f040a3483b455b11927da9c23bbf4efaa55bd01c69dc1a5d57f26ec46->leave($__internal_0d165e6f040a3483b455b11927da9c23bbf4efaa55bd01c69dc1a5d57f26ec46_prof);

        
        $__internal_d809601b05640b335af1fcbcdf7874e8ee9d88cda0decbeffdead0aa945990c9->leave($__internal_d809601b05640b335af1fcbcdf7874e8ee9d88cda0decbeffdead0aa945990c9_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_97230e4e247c79014146ee8e4e3a474db158ad84cfeb5f664146ca9cedec30ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97230e4e247c79014146ee8e4e3a474db158ad84cfeb5f664146ca9cedec30ea->enter($__internal_97230e4e247c79014146ee8e4e3a474db158ad84cfeb5f664146ca9cedec30ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a79f82784bb8b56afd06f17a0c59cd41ab407fff65c97add36478d622556cad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79f82784bb8b56afd06f17a0c59cd41ab407fff65c97add36478d622556cad9->enter($__internal_a79f82784bb8b56afd06f17a0c59cd41ab407fff65c97add36478d622556cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_a79f82784bb8b56afd06f17a0c59cd41ab407fff65c97add36478d622556cad9->leave($__internal_a79f82784bb8b56afd06f17a0c59cd41ab407fff65c97add36478d622556cad9_prof);

        
        $__internal_97230e4e247c79014146ee8e4e3a474db158ad84cfeb5f664146ca9cedec30ea->leave($__internal_97230e4e247c79014146ee8e4e3a474db158ad84cfeb5f664146ca9cedec30ea_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e6729759f6c2d0e524db7bf4f31ed867548efcb8242cf9cd329ef86104a61c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6729759f6c2d0e524db7bf4f31ed867548efcb8242cf9cd329ef86104a61c0->enter($__internal_5e6729759f6c2d0e524db7bf4f31ed867548efcb8242cf9cd329ef86104a61c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4904565d4b102ed4d562850c7bf3c8ee9c5c1e4720c7ca6ee6c073d062524ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4904565d4b102ed4d562850c7bf3c8ee9c5c1e4720c7ca6ee6c073d062524ae->enter($__internal_d4904565d4b102ed4d562850c7bf3c8ee9c5c1e4720c7ca6ee6c073d062524ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_d4904565d4b102ed4d562850c7bf3c8ee9c5c1e4720c7ca6ee6c073d062524ae->leave($__internal_d4904565d4b102ed4d562850c7bf3c8ee9c5c1e4720c7ca6ee6c073d062524ae_prof);

        
        $__internal_5e6729759f6c2d0e524db7bf4f31ed867548efcb8242cf9cd329ef86104a61c0->leave($__internal_5e6729759f6c2d0e524db7bf4f31ed867548efcb8242cf9cd329ef86104a61c0_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  184 => 57,  175 => 56,  165 => 45,  156 => 44,  145 => 13,  143 => 12,  134 => 11,  116 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC &#10219
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
