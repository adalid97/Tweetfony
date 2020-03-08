<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* listaTweets.html.twig */
class __TwigTemplate_419034495a4d80372f8a742586ccdb14373ae627da167cb1226079f7b76be1ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'principal' => [$this, 'block_principal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listaTweets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listaTweets.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listaTweets.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Demo";
        $this->displayParentBlock("titulo", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "principal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "principal"));

        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) || array_key_exists("tweets", $context) ? $context["tweets"] : (function () { throw new RuntimeError('Variable "tweets" does not exist.', 5, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 6
            echo "\t<ul class=\"tweetline\">
\t\t<li class='tweet'>
\t\t\t<div class=\"contenido\">
\t\t\t\t<div class=\"cabecera\">
\t\t\t\t
\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verTweet", ["id" => twig_get_attribute($this->env, $this->source, $context["tweet"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img class=\"avatarSmall\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "user", [], "any", false, false, false, 12), "userName", [], "any", false, false, false, 12)) . "-small.jpg")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t<strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t<span>@";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "user", [], "any", false, false, false, 14), "userName", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t<small class=\"time\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tweet"], "date", [], "any", false, false, false, 17), "d/m/Y H:m:s"), "html", null, true);
            echo "</small>
\t\t\t\t</div>
\t\t\t\t<div class=\"mensaje\">";
            // line 19
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tweet"], "text", [], "any", false, false, false, 19), 80), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"likes\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tweet"], "likes", [], "any", false, false, false, 20)), "html", null, true);
            echo " 👍</div>
\t\t\t</div>
\t\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t<p>No hay tweet</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listaTweets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 26,  139 => 24,  130 => 20,  126 => 19,  121 => 17,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  96 => 6,  91 => 5,  81 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block titulo %}Demo{{ parent() }}
{% endblock %}
{% block principal %}
{% for tweet in tweets %}
\t<ul class=\"tweetline\">
\t\t<li class='tweet'>
\t\t\t<div class=\"contenido\">
\t\t\t\t<div class=\"cabecera\">
\t\t\t\t
\t\t\t\t\t<a href=\"{{ path('verTweet', {'id': tweet.id}) }}\">
\t\t\t\t\t\t<img class=\"avatarSmall\" src=\"{{ asset('images/avatars/' ~tweet.user.userName~'-small.jpg') }}\"/>
\t\t\t\t\t\t<strong>{{ tweet.user.name }}</strong>
\t\t\t\t\t\t<span>@{{tweet.user.userName}}</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t<small class=\"time\">{{ tweet.date|date(\"d/m/Y H:m:s\") }}</small>
\t\t\t\t</div>
\t\t\t\t<div class=\"mensaje\">{{ tweet.text|truncate(80) }}</div>
\t\t\t\t<div class=\"likes\">{{ tweet.likes|length }} 👍</div>
\t\t\t</div>
\t\t</li>
\t{% else %}
\t\t<p>No hay tweet</p>
\t{% endfor %}
</ul>{% endblock %}

{# Comentario #}
", "listaTweets.html.twig", "/var/www/html/U6/tweetfony/templates/listaTweets.html.twig");
    }
}
