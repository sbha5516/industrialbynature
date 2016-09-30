<?php

/* @particles/content-pro.html.twig */
class __TwigTemplate_d2d0106b3d8c42006c5ee2333d58f86cbf2bbf0b5e9041d88a7775ad167c86e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/content-pro.html.twig", 1);
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
        ob_start();
        // line 13
        echo "\t<div class=\"g-particle-intro\">
\t\t";
        // line 14
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 15
            echo "\t\t\t<h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
\t\t\t<div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
\t\t";
        }
        // line 17
        echo "\t
\t\t";
        // line 18
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 19
        echo "\t</div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        ob_start();
        // line 23
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t";
            $context["attr_extra_item"] = "";
            // line 25
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 26
                echo "\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('GantryTwig')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 27
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t";
            // line 29
            ob_start();
            // line 30
            echo "\t\t\t<div class=\"g-content-pro-item\">
                ";
            // line 31
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 32
                echo "                    <h4 class=\"g-content-pro-title\">
                        ";
                // line 33
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 34
                    echo "                        <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                            ";
                }
                // line 36
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "
                            ";
                // line 37
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 38
                    echo "                        </a>
                        ";
                }
                // line 40
                echo "                    </h4>
                ";
            }
            // line 42
            echo "\t\t\t\t";
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 43
                echo "\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t";
                // line 44
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 45
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                    echo "\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t<img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('GantryTwig')->imageSize($this->getAttribute($context["item"], "image", array()));
                echo ">
\t\t\t\t\t\t";
                // line 49
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 50
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t";
            if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                // line 55
                echo "\t\t\t\t\t<div class=\"g-info-container\">

\t\t\t\t\t\t";
                // line 57
                if ($this->getAttribute($context["item"], "date", array())) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()));
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<p class=\"g-content-pro-desc text-center\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()));
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                    if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                        echo " no-special";
                    }
                    if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                        echo " no-link";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 67
                    if ($this->getAttribute($context["item"], "specialtext", array())) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 69
                        if ($this->getAttribute($context["item"], "icon", array())) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                            echo "\"></i>";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "specialtext", array()));
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "bottomlink", array())) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t<a target=\"";
                        // line 75
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "bottomlink", array()));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 85
            echo "\t\t\t</div>
\t\t";
            $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            echo "
\t\t";
            // line 88
            ob_start();
            // line 89
            echo "\t\t\t<div class=\"g-content-pro-item uk-overlay uk-overlay-hover\">
\t\t\t\t";
            // line 90
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 91
                echo "\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t";
                // line 92
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 93
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                    echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t\t<img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('GantryTwig')->imageSize($this->getAttribute($context["item"], "image", array()));
                echo ">
\t\t\t\t\t\t";
                // line 96
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 97
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t";
            if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                // line 102
                echo "\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom\">
\t\t\t\t\t\t";
                // line 103
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 104
                    echo "\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t";
                    // line 105
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t<a target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 109
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "date", array())) {
                    // line 115
                    echo "\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()));
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<p class=\"g-content-pro-desc text-center\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()));
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                    // line 123
                    echo "\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                    if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                        echo " no-special";
                    }
                    if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                        echo " no-link";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 124
                    if ($this->getAttribute($context["item"], "specialtext", array())) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        if ($this->getAttribute($context["item"], "icon", array())) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                            echo "\"></i>";
                        }
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "specialtext", array()));
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "bottomlink", array())) {
                        // line 131
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t<a target=\"";
                        // line 132
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "bottomlink", array()));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 142
            echo "\t\t\t</div>
\t\t";
            $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 144
            echo "
\t\t";
            // line 145
            ob_start();
            // line 146
            echo "\t\t\t<div class=\"g-content-pro-item uk-overlay\">
\t\t\t\t";
            // line 147
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 148
                echo "\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t";
                // line 149
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 150
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                    echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t\t<img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('GantryTwig')->imageSize($this->getAttribute($context["item"], "image", array()));
                echo ">
\t\t\t\t\t\t";
                // line 153
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                    // line 154
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t";
            if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                // line 159
                echo "\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom\">
\t\t\t\t\t\t";
                // line 160
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 161
                    echo "\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t";
                    // line 162
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t<a target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 166
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "date", array())) {
                    // line 172
                    echo "\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()));
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 177
                    echo "\t\t\t\t\t\t\t<p class=\"g-content-pro-desc text-center\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()));
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                    // line 180
                    echo "\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                    if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                        echo " no-special";
                    }
                    if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                        echo " no-link";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 181
                    if ($this->getAttribute($context["item"], "specialtext", array())) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        if ($this->getAttribute($context["item"], "icon", array())) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                            echo "\"></i>";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "specialtext", array()));
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "bottomlink", array())) {
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t<a target=\"";
                        // line 189
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 190
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "bottomlink", array()));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 195
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 197
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 199
            echo "\t\t\t</div>
\t\t";
            $context["style3"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 201
            echo "
\t\t";
            // line 202
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                // line 203
                echo "\t\t\t<div class=\"g-block";
                if ($this->getAttribute($context["item"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                }
                echo "\" ";
                if ($this->getAttribute($context["item"], "extra", array())) {
                    echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                }
                echo ">
\t\t\t\t<div ";
                // line 204
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                    echo "class=\"g-content\"";
                }
                echo ">
\t\t\t\t\t";
                // line 205
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                    echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                }
                // line 206
                echo "\t\t\t\t\t";
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                    echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                }
                // line 207
                echo "\t\t\t\t\t";
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                    echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                }
                // line 208
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 211
            echo "
\t\t";
            // line 212
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset"))) {
                // line 213
                echo "\t\t\t<li ";
                if ($this->getAttribute($context["item"], "class", array())) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    echo "\"";
                }
                echo " ";
                if ($this->getAttribute($context["item"], "extra", array())) {
                    echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                }
                echo ">
\t\t\t\t";
                // line 214
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                    echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                }
                // line 215
                echo "\t\t\t\t";
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                    echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                }
                // line 216
                echo "\t\t\t\t";
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                    echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                }
                // line 217
                echo "\t\t\t</li>
\t\t";
            }
            // line 219
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["contentproitems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 223
    public function block_particle($context, array $blocks = array())
    {
        // line 224
        echo "\t
\t";
        // line 225
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
            // line 226
            echo "\t\t<div class=\"g-content-pro ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
            }
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
            echo "\" ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
                echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            }
            echo ">
\t\t\t";
            // line 227
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 228
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 230
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t";
            // line 231
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 235
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider")) {
            // line 236
            echo "\t\t<div class=\"g-content-pro-slider ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
            }
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
            echo "\" ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
                echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            }
            echo ">
\t\t\t";
            // line 237
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 238
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 239
            echo "\t\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 240
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "=\"{autoplay:true}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider";
            // line 242
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " uk-grid";
            }
            echo " uk-grid-width-medium-1-";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo "\">
\t\t\t\t\t\t";
            // line 243
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 246
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\"></a>";
            }
            // line 247
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\"></a>";
            }
            // line 248
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
        // line 251
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset")) {
            // line 252
            echo "\t\t<div class=\"g-content-pro-slideset ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
            }
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
            echo "\" ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
                echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            }
            echo ">
\t\t\t";
            // line 253
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 254
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 255
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: ";
            // line 256
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", large: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", duration: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array()), 200)) : (200)));
            echo ", ";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "autoplay: 'true',";
            }
            echo " animation: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "fade")) : ("fade")));
            echo "'}\">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slideset uk-grid\">
\t\t\t\t\t\t";
            // line 259
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 262
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>";
            }
            // line 263
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>";
            }
            // line 264
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 265
                $context["counter"] = 0;
                // line 266
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 267
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "\"><a href=\"\"></a></li>
\t    \t\t\t\t";
                    // line 268
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 269
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                echo "\t\t\t\t</ul>";
            }
            // line 271
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/content-pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 271,  884 => 270,  878 => 269,  876 => 268,  871 => 267,  866 => 266,  864 => 265,  859 => 264,  854 => 263,  850 => 262,  844 => 259,  828 => 256,  825 => 255,  819 => 254,  817 => 253,  796 => 252,  793 => 251,  788 => 248,  783 => 247,  779 => 246,  773 => 243,  765 => 242,  758 => 240,  755 => 239,  749 => 238,  747 => 237,  726 => 236,  723 => 235,  716 => 231,  713 => 230,  707 => 228,  705 => 227,  684 => 226,  682 => 225,  679 => 224,  676 => 223,  672 => 1,  664 => 219,  660 => 217,  655 => 216,  650 => 215,  646 => 214,  633 => 213,  631 => 212,  628 => 211,  623 => 208,  618 => 207,  613 => 206,  609 => 205,  603 => 204,  591 => 203,  589 => 202,  586 => 201,  582 => 199,  578 => 197,  574 => 195,  566 => 190,  560 => 189,  557 => 188,  554 => 187,  547 => 184,  541 => 183,  538 => 182,  536 => 181,  526 => 180,  523 => 179,  517 => 177,  514 => 176,  508 => 173,  505 => 172,  502 => 171,  498 => 169,  494 => 167,  492 => 166,  487 => 165,  479 => 163,  477 => 162,  474 => 161,  472 => 160,  469 => 159,  466 => 158,  462 => 156,  458 => 154,  456 => 153,  447 => 152,  441 => 150,  439 => 149,  436 => 148,  434 => 147,  431 => 146,  429 => 145,  426 => 144,  422 => 142,  418 => 140,  414 => 138,  406 => 133,  400 => 132,  397 => 131,  394 => 130,  387 => 127,  381 => 126,  378 => 125,  376 => 124,  366 => 123,  363 => 122,  357 => 120,  354 => 119,  348 => 116,  345 => 115,  342 => 114,  338 => 112,  334 => 110,  332 => 109,  327 => 108,  319 => 106,  317 => 105,  314 => 104,  312 => 103,  309 => 102,  306 => 101,  302 => 99,  298 => 97,  296 => 96,  287 => 95,  281 => 93,  279 => 92,  276 => 91,  274 => 90,  271 => 89,  269 => 88,  266 => 87,  262 => 85,  258 => 83,  254 => 81,  246 => 76,  240 => 75,  237 => 74,  234 => 73,  227 => 70,  221 => 69,  218 => 68,  216 => 67,  206 => 66,  203 => 65,  197 => 63,  194 => 62,  188 => 59,  185 => 58,  183 => 57,  179 => 55,  176 => 54,  172 => 52,  168 => 50,  166 => 49,  157 => 48,  150 => 45,  148 => 44,  145 => 43,  142 => 42,  138 => 40,  134 => 38,  132 => 37,  127 => 36,  119 => 34,  117 => 33,  114 => 32,  112 => 31,  109 => 30,  107 => 29,  104 => 28,  98 => 27,  95 => 26,  90 => 25,  87 => 24,  82 => 23,  80 => 22,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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
/* {% set particleheading %}*/
/* 	<div class="g-particle-intro">*/
/* 		{% if particle.mainheading %}*/
/* 			<h3 class="g-title g-main-title">{{ particle.mainheading|raw }}</h3>*/
/* 			<div class="g-title-separator {% if particle.introtext == false %}no-intro-text{% endif %}"></div>*/
/* 		{% endif %}	*/
/* 		{% if particle.introtext %}<p class="g-introtext">{{ particle.introtext|raw }}</p>{% endif %}*/
/* 	</div>*/
/* {% endset %}*/
/* */
/* {% set contentproitems %}*/
/* 	{% for item in particle.items %}*/
/* 		{% set attr_extra_item = '' %}*/
/* 		{% for extra in item.extra %}*/
/* 			{% set attr_extra_item = attr_extra_item ~ ' ' ~ extra|keys|first|e ~ '="' ~ extra|values|first|e('html_attr') ~ '"' %}*/
/* 		{% endfor %}*/
/* */
/* 		{% set style1 %}*/
/* 			<div class="g-content-pro-item">*/
/*                 {% if item.title %}*/
/*                     <h4 class="g-content-pro-title">*/
/*                         {% if item.link %}*/
/*                         <a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/*                             {% endif %}*/
/*                             {{ item.title|e }}*/
/*                             {% if item.link %}*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </h4>*/
/*                 {% endif %}*/
/* 				{% if item.image %}*/
/* 					<div class="g-content-pro-image">*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							<a href="{{ url(item.image, false, 0) }}" data-uk-lightbox class="uk-overlay uk-overlay-hover">*/
/* 							<span class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></span>*/
/* 						{% endif %}*/
/* 							<img alt="{{ item.alt|e }}" src="{{ url(item.image) }}" {{ item.image|imagesize|raw }}>*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if item.title or item.description %}*/
/* 					<div class="g-info-container">*/
/* */
/* 						{% if item.date %}*/
/* 							<div class="g-item-details">*/
/* 								<span class="date"><i class="fa fa-clock-o"></i>{{ item.date|e }}</span>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if item.description %}*/
/* 							<p class="g-content-pro-desc text-center">{{ item.description|e }}</p>*/
/* 						{% endif %}*/
/* 						{% if item.specialtext or item.bottomlink %}*/
/* 							<div class="g-bottom-info clearfix{% if item.specialtext == false %} no-special{% endif %}{% if item.bottomlink == false %} no-link{% endif %}">*/
/* 								{% if item.specialtext %}*/
/* 									<div class="g-content-pro-special">*/
/* 										{% if item.icon %}<i class="{{ item.icon|e }}"></i>{% endif %}*/
/* 										{{ item.specialtext|e }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if item.bottomlink %}*/
/* 									<div class="g-content-pro-link">*/
/* 										<a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/* 											{{ item.bottomlink|e }}*/
/* 											<i class="fa fa-long-arrow-right"></i>*/
/* 										</a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endset %}*/
/* */
/* 		{% set style2 %}*/
/* 			<div class="g-content-pro-item uk-overlay uk-overlay-hover">*/
/* 				{% if item.image %}*/
/* 					<div class="g-content-pro-image">*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							<a href="{{ url(item.image, false, 0) }}" data-uk-lightbox class="uk-overlay">*/
/* 						{% endif %}*/
/* 							<img alt="{{ item.alt|e }}" src="{{ url(item.image) }}" {{ item.image|imagesize|raw }}>*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if item.title or item.description %}*/
/* 					<div class="g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">*/
/* 						{% if item.title %}*/
/* 							<h4 class="g-content-pro-title">*/
/* 								{% if item.link %}*/
/* 									<a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/* 								{% endif %}*/
/* 									{{ item.title|e }}*/
/* 								{% if item.link %}*/
/* 									</a>*/
/* 								{% endif %}*/
/* 							</h4>*/
/* 						{% endif %}*/
/* 						{% if item.date %}*/
/* 							<div class="g-item-details">*/
/* 								<span class="date"><i class="fa fa-clock-o"></i>{{ item.date|e }}</span>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if item.description %}*/
/* 							<p class="g-content-pro-desc text-center">{{ item.description|e }}</p>*/
/* 						{% endif %}*/
/* 						{% if item.specialtext or item.bottomlink %}*/
/* 							<div class="g-bottom-info clearfix{% if item.specialtext == false %} no-special{% endif %}{% if item.bottomlink == false %} no-link{% endif %}">*/
/* 								{% if item.specialtext %}*/
/* 									<div class="g-content-pro-special">*/
/* 										{% if item.icon %}<i class="{{ item.icon|e }}"></i>{% endif %}*/
/* 										{{ item.specialtext|e }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if item.bottomlink %}*/
/* 									<div class="g-content-pro-link">*/
/* 										<a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/* 											{{ item.bottomlink|e }}*/
/* 											<i class="fa fa-long-arrow-right"></i>*/
/* 										</a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endset %}*/
/* */
/* 		{% set style3 %}*/
/* 			<div class="g-content-pro-item uk-overlay">*/
/* 				{% if item.image %}*/
/* 					<div class="g-content-pro-image">*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							<a href="{{ url(item.image, false, 0) }}" data-uk-lightbox class="uk-overlay">*/
/* 						{% endif %}*/
/* 							<img alt="{{ item.alt|e }}" src="{{ url(item.image) }}" {{ item.image|imagesize|raw }}>*/
/* 						{% if particle.lightbox|default('enable') == 'enable' %}*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if item.title or item.description %}*/
/* 					<div class="g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom">*/
/* 						{% if item.title %}*/
/* 							<h4 class="g-content-pro-title">*/
/* 								{% if item.link %}*/
/* 									<a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/* 								{% endif %}*/
/* 									{{ item.title|e }}*/
/* 								{% if item.link %}*/
/* 									</a>*/
/* 								{% endif %}*/
/* 							</h4>*/
/* 						{% endif %}*/
/* 						{% if item.date %}*/
/* 							<div class="g-item-details">*/
/* 								<span class="date"><i class="fa fa-clock-o"></i>{{ item.date|e }}</span>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if item.description %}*/
/* 							<p class="g-content-pro-desc text-center">{{ item.description|e }}</p>*/
/* 						{% endif %}*/
/* 						{% if item.specialtext or item.bottomlink %}*/
/* 							<div class="g-bottom-info clearfix{% if item.specialtext == false %} no-special{% endif %}{% if item.bottomlink == false %} no-link{% endif %}">*/
/* 								{% if item.specialtext %}*/
/* 									<div class="g-content-pro-special">*/
/* 										{% if item.icon %}<i class="{{ item.icon|e }}"></i>{% endif %}*/
/* 										{{ item.specialtext|e }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if item.bottomlink %}*/
/* 									<div class="g-content-pro-link">*/
/* 										<a target="{{ item.target|default('_parent')|e }}" href="{{ item.link|e }}">*/
/* 											{{ item.bottomlink|e }}*/
/* 											<i class="fa fa-long-arrow-right"></i>*/
/* 										</a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endset %}*/
/* */
/* 		{% if particle.behaviour|default('static') == 'static' %}*/
/* 			<div class="g-block{% if item.class %} {{ item.class|e }}{% endif %}" {% if item.extra %}{{ attr_extra_item|raw }}{% endif %}>*/
/* 				<div {% if particle.gutter|default('enabled') == 'enabled' %}class="g-content"{% endif %}>*/
/* 					{% if particle.style|default("style1") == "style1" %}{{ style1 }}{% endif %}*/
/* 					{% if particle.style|default("style1") == "style2" %}{{ style2 }}{% endif %}*/
/* 					{% if particle.style|default("style1") == "style3" %}{{ style3 }}{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if particle.behaviour|default('static') == 'slider' or particle.behaviour|default('static') == 'slideset' %}*/
/* 			<li {% if item.class %}class="{{ item.class|e }}"{% endif %} {% if item.extra %}{{ attr_extra_item|raw }}{% endif %}>*/
/* 				{% if particle.style|default("style1") == "style1" %}{{ style1 }}{% endif %}*/
/* 				{% if particle.style|default("style1") == "style2" %}{{ style2 }}{% endif %}*/
/* 				{% if particle.style|default("style1") == "style3" %}{{ style3 }}{% endif %}*/
/* 			</li>*/
/* 		{% endif %}*/
/* */
/* 	{% endfor %}*/
/* {% endset %}*/
/* */
/* {% block particle %}*/
/* 	*/
/* 	{% if particle.behaviour|default('static') == 'static' %}*/
/* 		<div class="g-content-pro {{ particle.style|default("style1")|e }}{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}{% if particle.pullup|default(0) %} g-pullup{% endif %}{% if particle.gutter|default('enabled') == 'enabled' %} gutter-enabled{% else %} gutter-disabled{% endif %}" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>*/
/* 			{% if particle.mainheading or particle.introtext %}*/
/* 				{{ particleheading }}*/
/* 			{% endif %}*/
/* 			<div class="g-grid">*/
/* 				{{ contentproitems }}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if particle.behaviour|default('static') == 'slider' %}*/
/* 		<div class="g-content-pro-slider {{ particle.style|default("style1")|e }}{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}{% if particle.pullup|default(0) %} g-pullup{% endif %}{% if particle.gutter|default('enabled') == 'enabled' %} gutter-enabled{% else %} gutter-disabled{% endif %}" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>*/
/* 			{% if particle.mainheading or particle.introtext %}*/
/* 				{{ particleheading }}*/
/* 			{% endif %}		    	*/
/* 			<div class="uk-slidenav-position" data-uk-slider{% if particle.autoplay|default("disable") == "enable" %}="{autoplay:true}"{% endif %}>*/
/* 				<div class="uk-slider-container">*/
/* 					<ul class="uk-slider{% if particle.gutter|default('enabled') == 'enabled' %} uk-grid{% endif %} uk-grid-width-medium-1-{{ particle.columns|default('3')|e }}">*/
/* 						{{ contentproitems }}*/
/* 					</ul>*/
/* 				</div>*/
/* 				{% if (particle.navigation|default('arrows') == 'arrows') or (particle.navigation|default('arrows') == 'both') %}<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>{% endif %}*/
/* 				{% if (particle.navigation|default('arrows') == 'arrows') or (particle.navigation|default('arrows') == 'both') %}<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>{% endif %}*/
/* 			</div>		    	*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if particle.behaviour|default('static') == 'slideset' %}*/
/* 		<div class="g-content-pro-slideset {{ particle.style|default("style1")|e }}{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}{% if particle.pullup|default(0) %} g-pullup{% endif %}{% if particle.gutter|default('enabled') == 'enabled' %} gutter-enabled{% else %} gutter-disabled{% endif %}" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>*/
/* 			{% if particle.mainheading or particle.introtext %}*/
/* 				{{ particleheading }}*/
/* 			{% endif %}	    	*/
/* 			<div class="uk-slidenav-position" data-uk-slideset="{small: 1, medium: {{ particle.columns|default('3')|e }}, large: {{ particle.columns|default('3')|e }}, duration: {{ particle.duration|default(200)|e}}, {% if particle.autoplay|default("disable") == "enable" %}autoplay: 'true',{% endif %} animation: '{{ particle.animation|default('fade')|e}}'}">*/
/* 				<div class="uk-slider-container">*/
/* 					<ul class="uk-slideset uk-grid">*/
/* 						{{ contentproitems }}*/
/* 					</ul>*/
/* 				</div>*/
/* 				{% if (particle.navigation|default('arrows') == 'arrows') or (particle.navigation|default('arrows') == 'both') %}<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>{% endif %}*/
/* 				{% if (particle.navigation|default('arrows') == 'arrows') or (particle.navigation|default('arrows') == 'both') %}<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>{% endif %}*/
/* 				{% if (particle.navigation|default('arrows') == 'dots') or (particle.navigation|default('arrows') == 'both') %}<ul class="uk-slideset-nav uk-dotnav uk-flex-center">*/
/* 	    			{% set counter = 0 %}*/
/* 	    			{% for item in particle.items %}*/
/* 	    				<li data-uk-slideset-item="{{ counter }}"><a href=""></a></li>*/
/* 	    				{% set counter = counter + 1 %}*/
/* 	    			{% endfor %}*/
/* 				</ul>{% endif %}*/
/* 			</div>		    	*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
