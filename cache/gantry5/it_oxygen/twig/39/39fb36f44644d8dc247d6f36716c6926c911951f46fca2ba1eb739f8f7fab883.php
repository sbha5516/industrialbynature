<?php

/* @particles/offcanvas-toggle.html.twig */
class __TwigTemplate_13ec39788cd1df197dcdc8a99d5fb1a0ec27521b1ef9bf66307647c008b1fe21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/offcanvas-toggle.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 5
            echo "\t\t";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
\t\t<style type=\"text/css\">
\t\t\t@media (min-width: ";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method"), "48rem")) : ("48rem")), "html", null, true);
            echo ") {
\t\t\t\t.g-offcanvas-toggle {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t";
        }
    }

    // line 16
    public function block_particle($context, array $blocks = array())
    {
        // line 17
        echo "
\t<div class=\"offcanvas-toggle-particle g-offcanvas-toggle\" data-offcanvas-toggle=\"\">
\t  <i class=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "icon", array()));
        echo "\"></i>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/offcanvas-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  56 => 17,  53 => 16,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	{% if particle.enabled %}*/
/* 		{{ parent() }}*/
/* 		<style type="text/css">*/
/* 			@media (min-width: {{ gantry.config.get('styles.breakpoints.mobile-menu-breakpoint')|default('48rem') }}) {*/
/* 				.g-offcanvas-toggle {*/
/* 					display: none;*/
/* 				}*/
/* 			}*/
/* 		</style>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* */
/* 	<div class="offcanvas-toggle-particle g-offcanvas-toggle" data-offcanvas-toggle="">*/
/* 	  <i class="{{ particle.icon|e }}"></i>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
