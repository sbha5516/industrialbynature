<?php

/* @nucleus/page_head.html.twig */
class __TwigTemplate_3260d9e06333b3261f6ac533075e658c23d7710096f82db71cbd943a85fdb72a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_platform' => array($this, 'block_head_platform'),
            'head_overrides' => array($this, 'block_head_overrides'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
            'head_ie_stylesheets' => array($this, 'block_head_ie_stylesheets'),
            'head' => array($this, 'block_head'),
            'head_custom' => array($this, 'block_head_custom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "debugger", array()), "assets", array(), "method");
        // line 2
        echo "
";
        // line 3
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 4
        echo "    ";
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 14
        $this->displayBlock('head_platform', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('head_overrides', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "atoms", array())) {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "atoms", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["atom"]) {
                // line 28
                echo "            ";
                try {                    // line 29
                    echo "                ";
                    $this->loadTemplate((("@particles/" . $this->getAttribute($context["atom"], "type", array())) . ".html.twig"), "@nucleus/page_head.html.twig", 29)->display(array_merge($context, array("particle" => $this->getAttribute($context["atom"], "attributes", array()))));
                    // line 30
                    echo "            ";
                } catch (\Exception $e) {
                    if ($context['gantry']->debug()) throw $e;
                    GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
                    $context['e'] = $e;
                    // line 31
                    echo "                ";
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array())) {
            // line 37
            echo "        ";
            $this->loadTemplate("@particles/assets.html.twig", "@nucleus/page_head.html.twig", 37)->display(array_merge($context, array("particle" => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), array("enabled" => 1)))));
            // line 38
            echo "    ";
        }
        $context["atoms"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "<head>
    ";
        // line 42
        $this->displayBlock('head_meta', $context, $blocks);
        // line 63
        $this->displayBlock('head_title', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        $this->displayBlock('head_application', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('head_ie_stylesheets', $context, $blocks);
        // line 82
        $this->displayBlock('head', $context, $blocks);
        // line 83
        echo "    ";
        $this->displayBlock('head_custom', $context, $blocks);
        // line 88
        echo "
</head>
";
    }

    // line 4
    public function block_head_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-assets://css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-engine://css-compiled/nucleus.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "configuration", array()), "css", array()), "files", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "configuration", array()), "css", array()), "files", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 8
            $context["url"] = $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method"));
            if ((isset($context["url"]) ? $context["url"] : null)) {
                // line 9
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method")), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
    }

    // line 14
    public function block_head_platform($context, array $blocks = array())
    {
    }

    // line 16
    public function block_head_overrides($context, array $blocks = array())
    {
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "configuration", array()), "css", array()), "overrides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 18
            $context["url"] = $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method"));
            if ((isset($context["url"]) ? $context["url"] : null)) {
                // line 19
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method")), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
    }

    // line 42
    public function block_head_meta($context, array $blocks = array())
    {
        // line 43
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "meta", array())) {
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "meta", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 48
                    echo "                    <meta name=\"";
                    echo twig_escape_filter($this->env, $context["key"]);
                    echo "\" property=\"";
                    echo twig_escape_filter($this->env, $context["key"]);
                    echo "\" content=\"";
                    echo twig_escape_filter($this->env, $context["value"]);
                    echo "\" />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), "favicon", array())) {
            // line 54
            echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), "favicon", array())), "html", null, true);
            echo "\" />
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), "touchicon", array())) {
            // line 58
            echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        ";
        }
        // line 61
        echo "    ";
    }

    // line 63
    public function block_head_title($context, array $blocks = array())
    {
        // line 64
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Title</title>";
    }

    // line 68
    public function block_head_application($context, array $blocks = array())
    {
        // line 69
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "styles", array(0 => "head"), "method"), "
");
        echo "
        ";
        // line 70
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "scripts", array(0 => "head"), "method"), "
");
    }

    // line 73
    public function block_head_ie_stylesheets($context, array $blocks = array())
    {
        // line 74
        echo "<!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-assets://js/html5shiv-printshiv.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-engine://css/nucleus-ie9.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-assets://js/matchmedia.polyfill.js"), "html", null, true);
        echo "\"></script>
        
        <![endif]-->
    ";
    }

    // line 82
    public function block_head($context, array $blocks = array())
    {
    }

    // line 83
    public function block_head_custom($context, array $blocks = array())
    {
        // line 84
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "head_bottom", array())) {
            // line 85
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "head", array()), "head_bottom", array());
            echo "
        ";
        }
        // line 87
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@nucleus/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 87,  331 => 85,  328 => 84,  325 => 83,  320 => 82,  312 => 77,  308 => 76,  304 => 75,  301 => 74,  298 => 73,  293 => 70,  288 => 69,  285 => 68,  280 => 64,  277 => 63,  273 => 61,  268 => 59,  263 => 58,  261 => 57,  258 => 56,  252 => 54,  250 => 53,  232 => 48,  228 => 47,  224 => 46,  222 => 45,  218 => 43,  215 => 42,  211 => 22,  201 => 19,  198 => 18,  194 => 17,  191 => 16,  186 => 14,  182 => 12,  172 => 9,  169 => 8,  165 => 7,  161 => 6,  156 => 5,  153 => 4,  147 => 88,  144 => 83,  142 => 82,  140 => 73,  137 => 72,  135 => 68,  132 => 67,  130 => 63,  128 => 42,  125 => 41,  121 => 38,  118 => 37,  116 => 36,  113 => 35,  110 => 34,  96 => 33,  93 => 32,  91 => 31,  85 => 30,  82 => 29,  80 => 28,  62 => 27,  59 => 26,  57 => 25,  53 => 16,  50 => 15,  48 => 14,  45 => 4,  33 => 3,  30 => 2,  28 => 1,);
    }
}
/* {% do gantry.debugger.assets() %}*/
/* */
/* {% assets with { priority: 10 } %}*/
/*     {% block head_stylesheets -%}*/
/*         <link rel="stylesheet" href="{{ url('gantry-assets://css/font-awesome.min.css') }}" type="text/css"/>*/
/*         <link rel="stylesheet" href="{{ url('gantry-engine://css-compiled/nucleus.css') }}" type="text/css"/>*/
/*         {% for css in gantry.theme.configuration.css.persistent|default(gantry.theme.configuration.css.files) %}*/
/*             {%- set url = url(gantry.theme.css(css)) %}{% if url %}*/
/*             <link rel="stylesheet" href="{{ url(gantry.theme.css(css)) }}" type="text/css"/>*/
/*         {% endif %}*/
/*         {%- endfor %}*/
/*     {% endblock -%}*/
/* */
/*     {% block head_platform %}{% endblock %}*/
/* */
/*     {% block head_overrides -%}*/
/*         {% for css in gantry.theme.configuration.css.overrides %}*/
/*             {%- set url = url(gantry.theme.css(css)) %}{% if url %}*/
/*             <link rel="stylesheet" href="{{ url(gantry.theme.css(css)) }}" type="text/css"/>*/
/*         {% endif %}*/
/*         {%- endfor %}*/
/*     {% endblock -%}*/
/* {% endassets -%}*/
/* */
/* {%- set atoms %}*/
/*     {% if gantry.config.page.head.atoms %}*/
/*         {% for atom in gantry.config.page.head.atoms %}*/
/*             {% try %}*/
/*                 {% include '@particles/' ~ atom.type ~ '.html.twig' with { particle: atom.attributes } %}*/
/*             {% catch %}*/
/*                 {# TODO: Add message if atom is missing. #}*/
/*             {% endtry %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% if gantry.config.page.assets %}*/
/*         {% include '@particles/assets.html.twig' with { particle: gantry.config.page.assets|merge({'enabled': 1 }) } %}*/
/*     {% endif %}*/
/* {% endset -%}*/
/* */
/* <head>*/
/*     {% block head_meta %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*         {% if gantry.config.page.head.meta -%}*/
/*             {% for attributes in gantry.config.page.head.meta -%}*/
/*                 {%- for key, value in attributes %}*/
/*                     <meta name="{{ key|e }}" property="{{ key|e }}" content="{{ value|e }}" />*/
/*                 {% endfor -%}*/
/*             {%- endfor -%}*/
/*         {%- endif -%}*/
/* */
/*         {% if gantry.config.page.assets.favicon %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ url(gantry.config.page.assets.favicon) }}" />*/
/*         {% endif %}*/
/* */
/*         {% if gantry.config.page.assets.touchicon %}*/
/*         <link rel="apple-touch-icon" sizes="180x180" href="{{ url(gantry.config.page.assets.touchicon) }}">*/
/*         <link rel="icon" sizes="192x192" href="{{ url(gantry.config.page.assets.touchicon) }}">*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {%- block head_title -%}*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>Title</title>*/
/*     {%- endblock %}*/
/* */
/*     {% block head_application -%}*/
/*         {{ gantry.styles('head')|join("\n")|raw }}*/
/*         {{ gantry.scripts('head')|join("\n")|raw }}*/
/*     {%- endblock %}*/
/* */
/*     {% block head_ie_stylesheets -%}*/
/*         <!--[if (gte IE 8)&(lte IE 9)]>*/
/*         <script type="text/javascript" src="{{ url('gantry-assets://js/html5shiv-printshiv.min.js') }}"></script>*/
/*         <link rel="stylesheet" href="{{ url('gantry-engine://css/nucleus-ie9.css') }}" type="text/css"/>*/
/*         <script type="text/javascript" src="{{ url('gantry-assets://js/matchmedia.polyfill.js') }}"></script>*/
/*         */
/*         <![endif]-->*/
/*     {% endblock -%}*/
/* */
/*     {% block head %}{% endblock %}*/
/*     {% block head_custom %}*/
/*         {% if gantry.config.page.head.head_bottom %}*/
/*         {{ gantry.config.page.head.head_bottom|raw }}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
