<?php

/* @particles/template-js.html.twig */
class __TwigTemplate_6dbdd0f71e499611fa1fa65bb0ae10988f5cf5a4b55bf2fdd4c19f5f6411aab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/template-js.html.twig", 1);
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
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "jquery.framework"), "method"), "html", null, true);
            echo "
        ";
            // line 6
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
        <script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/template.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/template-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript_footer %}*/
/*     {% if particle.enabled %}*/
/*         {{ joomla.html('jquery.framework') }}*/
/*         {{ parent() }}*/
/*         <script src="{{ url('gantry-theme://js/template.js') }}" type="text/javascript"></script>*/
/*     {% endif %}*/
/* {% endblock %}*/
