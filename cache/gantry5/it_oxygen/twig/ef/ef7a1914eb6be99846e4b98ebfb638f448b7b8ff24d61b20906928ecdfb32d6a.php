<?php

/* @particles/modal-search.html.twig */
class __TwigTemplate_b02577e05faa8cacc5820a30d23fffcd5ed6a1a0f91349e1c78d4a7ed12510f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/modal-search.html.twig", 1);
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
        ob_start();
        // line 4
        echo "\t<a href=\"#modal-search\" data-uk-modal><i class=\"fa fa-search\"></i></a>

\t<div id=\"modal-search\" class=\"uk-modal\">
\t\t<div class=\"uk-modal-dialog\">
\t\t\t<a class=\"uk-modal-close uk-close\"></a>
\t\t\t";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 10
            echo "\t\t\t\t";
            echo $this->env->getExtension('GantryTwig')->htmlFilter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "filter", array(0 => "{loadposition modal-search}"), "method"));
            echo "
\t\t\t";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress")) {
            // line 14
            echo "\t\t\t\t";
            // line 15
            echo "\t\t\t";
        }
        // line 16
        echo "\t\t</div>
\t</div>
";
        $context["modalsearch"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        ob_start();
        // line 21
        echo "\t<a href=\"#modal-search\" data-uk-modal=\"{center:true}\"><i class=\"fa fa-search\"></i></a>

\t<div id=\"modal-search\" class=\"uk-modal\">
\t\t<a class=\"uk-modal-close uk-close\"></a>
\t\t<div class=\"uk-modal-dialog\">
\t\t\t";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 27
            echo "\t\t\t\t";
            echo $this->env->getExtension('GantryTwig')->htmlFilter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "filter", array(0 => "{loadposition modal-search}"), "method"));
            echo "
\t\t\t";
        }
        // line 29
        echo "
\t\t\t";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress")) {
            // line 31
            echo "\t\t\t\t";
            // line 32
            echo "\t\t\t";
        }
        // line 33
        echo "\t\t</div>
\t</div>
";
        $context["modalsearch_s2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_particle($context, array $blocks = array())
    {
        // line 38
        echo "\t
\t<div class=\"modal-search-container ";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
        echo "\">
\t\t";
        // line 40
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
            echo twig_escape_filter($this->env, (isset($context["modalsearch"]) ? $context["modalsearch"] : null), "html", null, true);
        }
        // line 41
        echo "\t\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
            echo twig_escape_filter($this->env, (isset($context["modalsearch_s2"]) ? $context["modalsearch_s2"] : null), "html", null, true);
        }
        // line 42
        echo "\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/modal-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  107 => 41,  103 => 40,  99 => 39,  96 => 38,  93 => 37,  89 => 1,  84 => 33,  81 => 32,  79 => 31,  77 => 30,  74 => 29,  68 => 27,  66 => 26,  59 => 21,  57 => 20,  52 => 16,  49 => 15,  47 => 14,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% set modalsearch %}*/
/* 	<a href="#modal-search" data-uk-modal><i class="fa fa-search"></i></a>*/
/* */
/* 	<div id="modal-search" class="uk-modal">*/
/* 		<div class="uk-modal-dialog">*/
/* 			<a class="uk-modal-close uk-close"></a>*/
/* 			{% if gantry.platform.getName() == 'joomla' %}*/
/* 				{{ gantry.platform.filter("{loadposition modal-search}")|html|raw }}*/
/* 			{% endif %}*/
/* */
/* 			{% if gantry.platform.getName() == 'wordpress' %}*/
/* 				{# Something here #}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endset %}*/
/* */
/* {% set modalsearch_s2 %}*/
/* 	<a href="#modal-search" data-uk-modal="{center:true}"><i class="fa fa-search"></i></a>*/
/* */
/* 	<div id="modal-search" class="uk-modal">*/
/* 		<a class="uk-modal-close uk-close"></a>*/
/* 		<div class="uk-modal-dialog">*/
/* 			{% if gantry.platform.getName() == 'joomla' %}*/
/* 				{{ gantry.platform.filter("{loadposition modal-search}")|html|raw }}*/
/* 			{% endif %}*/
/* */
/* 			{% if gantry.platform.getName() == 'wordpress' %}*/
/* 				{# Something here #}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endset %}*/
/* */
/* {% block particle %}*/
/* 	*/
/* 	<div class="modal-search-container {{ particle.style|default("style1")|e }}">*/
/* 		{% if particle.style|default("style1") == "style1" %}{{ modalsearch }}{% endif %}*/
/* 		{% if particle.style|default("style1") == "style2" %}{{ modalsearch_s2 }}{% endif %}*/
/* 	</div>*/
/* */
/* {% endblock %}*/
