<?php

/* @particles/main-feature.html.twig */
class __TwigTemplate_1942650d205d11765d434147d099aea3ebc650975d06fcdbc590bbe692c9f50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/main-feature.html.twig", 1);
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
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        $context["attr_extra_left"] = "";
        // line 13
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array())) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 16
                    $context["attr_extra_left"] = ((((((isset($context["attr_extra_left"]) ? $context["attr_extra_left"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        $context["attr_extra_right"] = "";
        // line 22
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array())) {
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 25
                    $context["attr_extra_right"] = ((((((isset($context["attr_extra_right"]) ? $context["attr_extra_right"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h3 class=\"g-main-feature-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h3>";
        }
        // line 32
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
            echo "<p class=\"g-main-feature-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
            echo "</p>";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array())) {
            echo "<a class=\"button g-main-feature-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array()), "_blank")) : ("_blank")));
            echo "\">";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array())) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array()));
                echo "\"></i>";
            }
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttontext", array());
            echo "</a>";
        }
        $context["textcontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        ob_start();
        // line 37
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())) {
            echo "<a data-lightbox-type=\"image\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
            echo "\" data-uk-lightbox class=\"main-feature--image \">
        <span class=\"lightbox\"></span>
        <img class=\"g-main-feature-image";
            // line 39
            if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagebottom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagebottom", array()), "yes")) : ("yes"))) == "yes")) {
                echo " image-bottom";
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "alt", array()));
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('GantryTwig')->imageSize($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array()));
            echo ">";
        }
        // line 40
        echo "        </a>
";
        $context["imagecontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_particle($context, array $blocks = array())
    {
        // line 44
        echo "
    <div class=\"g-main-feature";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
        <div class=\"g-grid\">
            <div class=\"g-block g-main-feature-left";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo " image-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array())) {
            echo (isset($context["attr_extra_left"]) ? $context["attr_extra_left"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 49
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 50
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["imagecontent"]) ? $context["imagecontent"] : null), "html", null, true);
        }
        // line 51
        echo "                </div>
            </div>
            <div class=\"g-block g-main-feature-right";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo " align-right image-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array())) {
            echo (isset($context["attr_extra_right"]) ? $context["attr_extra_right"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 55
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["imagecontent"]) ? $context["imagecontent"] : null), "html", null, true);
        }
        // line 56
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 57
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/main-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 57,  222 => 56,  218 => 55,  203 => 53,  199 => 51,  194 => 50,  190 => 49,  175 => 47,  163 => 45,  160 => 44,  157 => 43,  153 => 1,  149 => 40,  137 => 39,  129 => 37,  127 => 36,  110 => 33,  103 => 32,  96 => 31,  94 => 30,  83 => 25,  79 => 24,  75 => 23,  73 => 22,  71 => 21,  60 => 16,  56 => 15,  52 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% set attr_extra = '' %}*/
/* {% if particle.extra %}*/
/*     {% for attributes in particle.extra %}*/
/*         {% for key, value in attributes %}*/
/*             {% set attr_extra = attr_extra ~ ' ' ~ key|e ~ '="' ~ value|e('html_attr') ~ '"' %}*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* {% set attr_extra_left = '' %}*/
/* {% if particle.extra_left %}*/
/*     {% for attributes in particle.extra_left %}*/
/*         {% for key, value in attributes %}*/
/*             {% set attr_extra_left = attr_extra_left ~ ' ' ~ key|e ~ '="' ~ value|e('html_attr') ~ '"' %}*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* {% set attr_extra_right = '' %}*/
/* {% if particle.extra_right %}*/
/*     {% for attributes in particle.extra_right %}*/
/*         {% for key, value in attributes %}*/
/*             {% set attr_extra_right = attr_extra_right ~ ' ' ~ key|e ~ '="' ~ value|e('html_attr') ~ '"' %}*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* {% set textcontent %}*/
/*     {% if particle.title %}<h3 class="g-main-feature-title">{{ particle.title|raw }}</h3>{% endif %}*/
/*     {% if particle.description %}<p class="g-main-feature-desc">{{ particle.description|raw }}</p>{% endif %}*/
/*     {% if particle.link %}<a class="button g-main-feature-link" href="{{ particle.link|e }}" target="{{ particle.target|default('_blank')|e }}">{% if particle.buttonicon %}<i class="{{ particle.buttonicon|e }}"></i>{% endif %}{{ particle.buttontext|raw }}</a>{% endif %}*/
/* {% endset %}*/
/* */
/* {% set imagecontent %}*/
/*     {% if particle.image %}<a data-lightbox-type="image" href="{{ url(particle.image) }}" data-uk-lightbox class="main-feature--image ">*/
/*         <span class="lightbox"></span>*/
/*         <img class="g-main-feature-image{% if particle.imagebottom|default('yes')|e == 'yes' %} image-bottom{% endif %}" alt="{{ particle.alt|e }}" src="{{ url(particle.image) }}" {{ particle.image|imagesize|raw }}>{% endif %}*/
/*         </a>*/
/* {% endset %}*/
/* */
/* {% block particle %}*/
/* */
/*     <div class="g-main-feature{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>*/
/*         <div class="g-grid">*/
/*             <div class="g-block g-main-feature-left{% if particle.css.left %} {{ particle.css.left|e }}{% endif %}{% if particle.layout|default('right')|e == 'left' %} image-block{% endif %}" {% if particle.extra_left %}{{ attr_extra_left|raw }}{% endif %}>*/
/*                 <div class="g-content">*/
/*                     {% if particle.layout|default('right')|e == 'right' %}{{ textcontent }}{% endif %}*/
/*                     {% if particle.layout|default('right')|e == 'left' %}{{ imagecontent }}{% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="g-block g-main-feature-right{% if particle.css.right %} {{ particle.css.right|e }}{% endif %}{% if particle.layout|default('right')|e == 'right' %} align-right image-block{% endif %}" {% if particle.extra_right %}{{ attr_extra_right|raw }}{% endif %}>*/
/*                 <div class="g-content">*/
/*                     {% if particle.layout|default('right')|e == 'right' %}{{ imagecontent }}{% endif %}*/
/*                     {% if particle.layout|default('right')|e == 'left' %}{{ textcontent }}{% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
