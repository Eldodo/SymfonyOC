<?php

/* ::layout.html.twig */
class __TwigTemplate_bb76d284d4d861134f38afb5e46b16f2bfe35bf83b72dcc3abcd1774bcbeadda extends Twig_Template
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
        $__internal_f1b4b93b02c0977e7468e09149860a504e861939c91f09af7d0ad7c3d4a5fc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b4b93b02c0977e7468e09149860a504e861939c91f09af7d0ad7c3d4a5fc19->enter($__internal_f1b4b93b02c0977e7468e09149860a504e861939c91f09af7d0ad7c3d4a5fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_d9655886979f9d2bc02ce13dc89b4b2ba27084b58120f3964c90ef9ddeec4da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9655886979f9d2bc02ce13dc89b4b2ba27084b58120f3964c90ef9ddeec4da4->enter($__internal_d9655886979f9d2bc02ce13dc89b4b2ba27084b58120f3964c90ef9ddeec4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_f1b4b93b02c0977e7468e09149860a504e861939c91f09af7d0ad7c3d4a5fc19->leave($__internal_f1b4b93b02c0977e7468e09149860a504e861939c91f09af7d0ad7c3d4a5fc19_prof);

        
        $__internal_d9655886979f9d2bc02ce13dc89b4b2ba27084b58120f3964c90ef9ddeec4da4->leave($__internal_d9655886979f9d2bc02ce13dc89b4b2ba27084b58120f3964c90ef9ddeec4da4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6de5c69566f0d983b06b98ab6564d5c46118bf8756b1d8caa3edaf4693e0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6de5c69566f0d983b06b98ab6564d5c46118bf8756b1d8caa3edaf4693e0c8->enter($__internal_bd6de5c69566f0d983b06b98ab6564d5c46118bf8756b1d8caa3edaf4693e0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0850197da1c021c8b78347505955369568ffa896148a6f4e123e6216f52de07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0850197da1c021c8b78347505955369568ffa896148a6f4e123e6216f52de07d->enter($__internal_0850197da1c021c8b78347505955369568ffa896148a6f4e123e6216f52de07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_0850197da1c021c8b78347505955369568ffa896148a6f4e123e6216f52de07d->leave($__internal_0850197da1c021c8b78347505955369568ffa896148a6f4e123e6216f52de07d_prof);

        
        $__internal_bd6de5c69566f0d983b06b98ab6564d5c46118bf8756b1d8caa3edaf4693e0c8->leave($__internal_bd6de5c69566f0d983b06b98ab6564d5c46118bf8756b1d8caa3edaf4693e0c8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f97e687435eeffdb45da9a04c5402b1b999eeebeb2125c332e822f4ec76dcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f97e687435eeffdb45da9a04c5402b1b999eeebeb2125c332e822f4ec76dcc8->enter($__internal_5f97e687435eeffdb45da9a04c5402b1b999eeebeb2125c332e822f4ec76dcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4915679900713198bd470b9abbd1408692e4819c9fc9361d7351974d05a78ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4915679900713198bd470b9abbd1408692e4819c9fc9361d7351974d05a78ca3->enter($__internal_4915679900713198bd470b9abbd1408692e4819c9fc9361d7351974d05a78ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_4915679900713198bd470b9abbd1408692e4819c9fc9361d7351974d05a78ca3->leave($__internal_4915679900713198bd470b9abbd1408692e4819c9fc9361d7351974d05a78ca3_prof);

        
        $__internal_5f97e687435eeffdb45da9a04c5402b1b999eeebeb2125c332e822f4ec76dcc8->leave($__internal_5f97e687435eeffdb45da9a04c5402b1b999eeebeb2125c332e822f4ec76dcc8_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_d604bf414a70bb2949ed4c213fc261757773cc3712993cba1d24341134be62bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d604bf414a70bb2949ed4c213fc261757773cc3712993cba1d24341134be62bd->enter($__internal_d604bf414a70bb2949ed4c213fc261757773cc3712993cba1d24341134be62bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cbce6038d30119e03d00593d89ccd325b65c35e9163c052bef053945952778f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbce6038d30119e03d00593d89ccd325b65c35e9163c052bef053945952778f->enter($__internal_9cbce6038d30119e03d00593d89ccd325b65c35e9163c052bef053945952778f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_9cbce6038d30119e03d00593d89ccd325b65c35e9163c052bef053945952778f->leave($__internal_9cbce6038d30119e03d00593d89ccd325b65c35e9163c052bef053945952778f_prof);

        
        $__internal_d604bf414a70bb2949ed4c213fc261757773cc3712993cba1d24341134be62bd->leave($__internal_d604bf414a70bb2949ed4c213fc261757773cc3712993cba1d24341134be62bd_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_664ac307c746ea21f6989dc6b54786a366a81c6850c827a2b49cf53cb2fa7431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664ac307c746ea21f6989dc6b54786a366a81c6850c827a2b49cf53cb2fa7431->enter($__internal_664ac307c746ea21f6989dc6b54786a366a81c6850c827a2b49cf53cb2fa7431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15f14eb21adc5b7cab307e090528ae0749001f1f1afbbba44cfdc24d674298ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f14eb21adc5b7cab307e090528ae0749001f1f1afbbba44cfdc24d674298ed->enter($__internal_15f14eb21adc5b7cab307e090528ae0749001f1f1afbbba44cfdc24d674298ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_15f14eb21adc5b7cab307e090528ae0749001f1f1afbbba44cfdc24d674298ed->leave($__internal_15f14eb21adc5b7cab307e090528ae0749001f1f1afbbba44cfdc24d674298ed_prof);

        
        $__internal_664ac307c746ea21f6989dc6b54786a366a81c6850c827a2b49cf53cb2fa7431->leave($__internal_664ac307c746ea21f6989dc6b54786a366a81c6850c827a2b49cf53cb2fa7431_prof);

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
