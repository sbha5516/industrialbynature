<?php

/* @particles/scrollreveal-js.html.twig */
class __TwigTemplate_b5be74953f86e38759928bdd8875779dab60072550b222755a58c303007be315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/scrollreveal-js.html.twig", 1);
        $this->blocks = array(
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 5
            echo "\t\t";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
\t\t<script src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/scrollReveal.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\twindow.sr = new scrollReveal({ mobile: ";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mobile", array()), "false")) : ("false")));
            echo " });
\t\t</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/scrollreveal-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript_footer %}*/
/* 	{% if particle.enabled %}*/
/* 		{{ parent() }}*/
/* 		<script src="{{ url('gantry-theme://js/scrollReveal.min.js') }}" type="text/javascript"></script>*/
/* 		<script type="text/javascript">*/
/* 			window.sr = new scrollReveal({ mobile: {{ particle.mobile|default("false")|e }} });*/
/* 		</script>*/
/* 	{% endif %}*/
/* {% endblock %}*/
