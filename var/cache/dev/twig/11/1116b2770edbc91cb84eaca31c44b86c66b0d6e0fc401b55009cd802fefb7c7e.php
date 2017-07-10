<?php

/* ::layout.html.twig */
class __TwigTemplate_7201443bfc695d2b9817bec5e857c46c38c317155a0f900b5ae51b94d016cac2 extends Twig_Template
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
        $__internal_97715d4a9aed309d32e2b3deb685d11bec765f0128352e3d7152a52e70a50a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97715d4a9aed309d32e2b3deb685d11bec765f0128352e3d7152a52e70a50a5d->enter($__internal_97715d4a9aed309d32e2b3deb685d11bec765f0128352e3d7152a52e70a50a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_32e52ee63fd4b5e9312f941f26c8fd762578b6c3cefc3757d421430e0c425e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e52ee63fd4b5e9312f941f26c8fd762578b6c3cefc3757d421430e0c425e84->enter($__internal_32e52ee63fd4b5e9312f941f26c8fd762578b6c3cefc3757d421430e0c425e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_97715d4a9aed309d32e2b3deb685d11bec765f0128352e3d7152a52e70a50a5d->leave($__internal_97715d4a9aed309d32e2b3deb685d11bec765f0128352e3d7152a52e70a50a5d_prof);

        
        $__internal_32e52ee63fd4b5e9312f941f26c8fd762578b6c3cefc3757d421430e0c425e84->leave($__internal_32e52ee63fd4b5e9312f941f26c8fd762578b6c3cefc3757d421430e0c425e84_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd2ad015c46c18e5e5b62d96e070bca6505d6f16f80ca5e857bfb9a006673089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2ad015c46c18e5e5b62d96e070bca6505d6f16f80ca5e857bfb9a006673089->enter($__internal_bd2ad015c46c18e5e5b62d96e070bca6505d6f16f80ca5e857bfb9a006673089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aac48e446503880bef0df46b5f9a86042595c87bc9e8da606f1c22359dd89bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac48e446503880bef0df46b5f9a86042595c87bc9e8da606f1c22359dd89bf5->enter($__internal_aac48e446503880bef0df46b5f9a86042595c87bc9e8da606f1c22359dd89bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_aac48e446503880bef0df46b5f9a86042595c87bc9e8da606f1c22359dd89bf5->leave($__internal_aac48e446503880bef0df46b5f9a86042595c87bc9e8da606f1c22359dd89bf5_prof);

        
        $__internal_bd2ad015c46c18e5e5b62d96e070bca6505d6f16f80ca5e857bfb9a006673089->leave($__internal_bd2ad015c46c18e5e5b62d96e070bca6505d6f16f80ca5e857bfb9a006673089_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3c46e11493c8c0349048dc6fe012a9ffa3ac8a1d4baf88adf9f08d5f81ef76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c46e11493c8c0349048dc6fe012a9ffa3ac8a1d4baf88adf9f08d5f81ef76c->enter($__internal_f3c46e11493c8c0349048dc6fe012a9ffa3ac8a1d4baf88adf9f08d5f81ef76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edee70ced249d777aea243dfb6e98704d3b6a9294705d233cf83880ba691e2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edee70ced249d777aea243dfb6e98704d3b6a9294705d233cf83880ba691e2c0->enter($__internal_edee70ced249d777aea243dfb6e98704d3b6a9294705d233cf83880ba691e2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_edee70ced249d777aea243dfb6e98704d3b6a9294705d233cf83880ba691e2c0->leave($__internal_edee70ced249d777aea243dfb6e98704d3b6a9294705d233cf83880ba691e2c0_prof);

        
        $__internal_f3c46e11493c8c0349048dc6fe012a9ffa3ac8a1d4baf88adf9f08d5f81ef76c->leave($__internal_f3c46e11493c8c0349048dc6fe012a9ffa3ac8a1d4baf88adf9f08d5f81ef76c_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd53e9d7d9be1818021c50dddb3ecab996ed1cda73ef2cdb2e06c13750f5236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd53e9d7d9be1818021c50dddb3ecab996ed1cda73ef2cdb2e06c13750f5236->enter($__internal_4dd53e9d7d9be1818021c50dddb3ecab996ed1cda73ef2cdb2e06c13750f5236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4507ee052ffb358c501f2f27b8c4e72466fd83a7f094ad3be3b531cbf0f12d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507ee052ffb358c501f2f27b8c4e72466fd83a7f094ad3be3b531cbf0f12d0f->enter($__internal_4507ee052ffb358c501f2f27b8c4e72466fd83a7f094ad3be3b531cbf0f12d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_4507ee052ffb358c501f2f27b8c4e72466fd83a7f094ad3be3b531cbf0f12d0f->leave($__internal_4507ee052ffb358c501f2f27b8c4e72466fd83a7f094ad3be3b531cbf0f12d0f_prof);

        
        $__internal_4dd53e9d7d9be1818021c50dddb3ecab996ed1cda73ef2cdb2e06c13750f5236->leave($__internal_4dd53e9d7d9be1818021c50dddb3ecab996ed1cda73ef2cdb2e06c13750f5236_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25a5ccba8953dce3aa53aeb0856a22f4b66874631dd401a2ae58b0ae08fd82e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a5ccba8953dce3aa53aeb0856a22f4b66874631dd401a2ae58b0ae08fd82e2->enter($__internal_25a5ccba8953dce3aa53aeb0856a22f4b66874631dd401a2ae58b0ae08fd82e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c24b49ae702300293b2d7e5a9fc8d1beb39dfc8dd117c00fc8eec50702f337e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24b49ae702300293b2d7e5a9fc8d1beb39dfc8dd117c00fc8eec50702f337e7->enter($__internal_c24b49ae702300293b2d7e5a9fc8d1beb39dfc8dd117c00fc8eec50702f337e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c24b49ae702300293b2d7e5a9fc8d1beb39dfc8dd117c00fc8eec50702f337e7->leave($__internal_c24b49ae702300293b2d7e5a9fc8d1beb39dfc8dd117c00fc8eec50702f337e7_prof);

        
        $__internal_25a5ccba8953dce3aa53aeb0856a22f4b66874631dd401a2ae58b0ae08fd82e2->leave($__internal_25a5ccba8953dce3aa53aeb0856a22f4b66874631dd401a2ae58b0ae08fd82e2_prof);

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
</html>", "::layout.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
