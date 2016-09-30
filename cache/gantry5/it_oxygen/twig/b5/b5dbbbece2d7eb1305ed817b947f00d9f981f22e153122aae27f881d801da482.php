<?php

/* @particles/logo.html.twig */
class __TwigTemplate_dd40a3e438b0edf326c8d4dc7066b9d5e2dd593f86d286d98fd974146405f11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["url"] = _twig_default_filter($this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "url", array())), $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "siteUrl", array(), "method"));
        // line 5
        echo "    ";
        if (((isset($context["url"]) ? $context["url"] : null) == $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "siteUrl", array(), "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 6
        echo "
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("rel", $context)) ? (_twig_default_filter((isset($context["rel"]) ? $context["rel"] : null), "")) : (""));
        echo " class=\"g-logo ";
        echo (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()), "")) : (""));
        echo "\">
    ";
        // line 8
        $context["image"] = $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array()));
        // line 9
        echo "    ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 10
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "Logo")) : ("Logo")), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  65 => 12,  57 => 10,  54 => 9,  52 => 8,  42 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/*     {% set url = url(particle.url)|default(gantry.siteUrl()) %}*/
/*     {% if (url == gantry.siteUrl()) %}{% set rel='rel="home"' %}{% endif %}*/
/* */
/* <a href="{{ url }}" title="{{ particle.text }}" {{ rel|default('')|raw }} class="g-logo {{ particle.class|default('')|raw }}">*/
/*     {% set image = url(particle.image) %}*/
/*     {% if image %}*/
/*     <img src="{{ url(particle.image) }}" alt="{{ particle.text }}" />*/
/*     {% else %}*/
/*     {{ particle.text|default('Logo') }}*/
/*     {% endif %}*/
/* </a>*/
/* {% endblock %}*/
/* */
