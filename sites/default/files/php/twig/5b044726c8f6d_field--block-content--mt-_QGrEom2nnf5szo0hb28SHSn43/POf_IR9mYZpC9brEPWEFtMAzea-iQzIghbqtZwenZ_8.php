<?php

/* themes/custom/showcaseplus/templates/field--block-content--mt-main-slideshow-block.html.twig */
class __TwigTemplate_d9aaf4f38fed2c18fc8072b26a2e228b2a24c9ca4f52f7f8655546e775e88ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 11, "if" => 27, "for" => 44);
        $filters = array("clean_class" => 13);
        $functions = array("attach_library" => 9, "file_url" => 50);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
                array('attach_library', 'file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcaseplus/main-slideshow-block-init"), "html", null, true));
        echo "
";
        // line 11
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 13
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 14
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 15
($context["label_display"] ?? null)), 4 => "field--mt-main-slideshow-block", 5 => "clearfix");
        // line 21
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 23
($context["label_display"] ?? null) == "inline")) ? ("inline") : ("")));
        // line 26
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 27
        if ( !($context["label_hidden"] ?? null)) {
            // line 28
            echo "    <h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 30
        echo "  <div class=\"main-slideshow-block slider-revolution-wrapper\"
    data-attribute-mt-layout=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_main_slideshow_layout_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-autoheight=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_main_slideshow_autoheight"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-initial-height=\"";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_initial_height_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-effect-duration=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_effect_duration_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-bullets-enable=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_bullets_enable"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-tabs-enable=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_tabs_enable"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-touch-swipe-nav=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_touch_swipe_nav_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-bullets-position=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_bullets_position_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-background-opacity=\"";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_background_opacity_value"] ?? null), "html", null, true));
        echo "\"
    data-attribute-mt-ignore-header=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_ignore_header_height_value"] ?? null), "html", null, true));
        echo "\"
    data-version=\"5.0\">
    <div class=\"slider-revolution\">
      <ul>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "          <li data-transition=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_ms_effect_value"] ?? null), "html", null, true));
            echo "\" data-slotamount=\"default\"
            ";
            // line 46
            if ($this->getAttribute($context["item"], "slide_title", array())) {
                // line 47
                echo "                data-title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_title", array()), "html", null, true));
                echo "\"
            ";
            }
            // line 48
            echo " 
          data-masterspeed=\"default\">
            <img src=\"";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["item"], "slide_image_url", array()))), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_image_alt", array()), "html", null, true));
            echo "\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>

            ";
            // line 53
            echo "            <div class=\"tp-caption transparent-background\"
              data-x=\"left\"
              data-y=\"top\"
              data-start=\"0\"
              data-basealign=\"slide\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"o:0;s:300;\"
              data-transform_out=\"o:0;s:300;\"
              data-width=\"full\"
              data-height=\"full\">
            </div>

            ";
            // line 66
            echo "            <div class=\"tp-caption tp-caption--transparent-background ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_caption_color", array()), "html", null, true));
            echo "\"
              data-x=\"[center,center,center,center]\"
              data-y=\"[center,center,center,center]\"
              data-hoffset=\"[0,0,0,0]\"
              data-voffset=\"[0,0,0,0]\"
              data-fontweight=\"500\"
              data-whitespace=\"normal\"
              data-basealign=\"grid\"
              data-start=\"1200\"
              data-width=\"[570,570,570,430]\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
              data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\"
              data-attribute-mt-caption-opacity=\"";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_caption_opacity", array()), "html", null, true));
            echo "\">
              ";
            // line 80
            if (($this->getAttribute($context["item"], "slide_title", array()) && $this->getAttribute($context["item"], "slide_first_link_url", array()))) {
                // line 81
                echo "                <div class=\"tp-caption__title\"><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_first_link_url", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_title", array()), "html", null, true));
                echo "</a></div>
              ";
            } else {
                // line 83
                echo "                <div class=\"tp-caption__title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_title", array()), "html", null, true));
                echo "</div>
              ";
            }
            // line 85
            echo "              ";
            if ($this->getAttribute($context["item"], "slide_caption", array())) {
                // line 86
                echo "                <div class=\"tp-caption__text\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_caption", array()), "html", null, true));
                echo "</div>
              ";
            }
            // line 88
            echo "              ";
            if ($this->getAttribute($context["item"], "slide_first_link_url", array())) {
                // line 89
                echo "                <div class=\"tp-caption__buttons-container\">
                  ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "slide_links", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["slide_link"]) {
                    // line 91
                    echo "                    <a class=\"tp-caption__button\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide_link"], "slide_link_url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide_link"], "slide_link_title", array()), "html", null, true));
                    echo "</a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                </div>
              ";
            }
            // line 95
            echo "            </div>

            ";
            // line 98
            echo "            ";
            if ($this->getAttribute($context["item"], "slide_youtube_id", array())) {
                // line 99
                echo "              <div class=\"rs-background-video-layer\"
                data-ytid=\"";
                // line 100
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_youtube_id", array()), "html", null, true));
                echo "\"
                data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;\"
                data-videorate=\"1\"
                data-videoloop=\"loop\"
                data-videowidth=\"100%\"
                data-videoheight=\"100%\"
                data-videocontrols=\"none\"
                data-aspectratio=\"16:9\"
                data-autoplay=\"true\"
                data-autoplayonlyfirsttime=\"false\"
                data-nextslideatend=\"true\"
                data-forcerewind=\"on\"
                data-volume=\"";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_video_volume", array()), "html", null, true));
                echo "\">
                </div>
            ";
            } elseif ($this->getAttribute(            // line 114
$context["item"], "slide_vimeo_id", array())) {
                // line 115
                echo "              <div class=\"rs-background-video-layer\"
                data-vimeoid=\"";
                // line 116
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_vimeo_id", array()), "html", null, true));
                echo "\"
                data-videoattributes=\"title=0&amp;byline=0&amp;portrait=0&amp;api=1\"
                data-videoloop=\"loop\"
                data-videowidth=\"100%\"
                data-videoheight=\"100%\"
                data-videocontrols=\"none\"
                data-aspectratio=\"16:9\"
                data-autoplay=\"true\"
                data-autoplayonlyfirsttime=\"false\"
                data-nextslideatend=\"true\"
                data-forcerewind=\"on\"
                data-volume=\"";
                // line 127
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_video_volume", array()), "html", null, true));
                echo "\">
                </div>
            ";
            }
            // line 130
            echo "
            <div class=\"tp-caption scroll-button smooth-scroll\"
              data-x=\"center\"
              data-y=\"bottom\"
              data-voffset=\"50\"
              data-start=\"0\"
              data-basealign=\"grid\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"o:0;s:300;\"
              data-transform_out=\"o:0;s:300;\">
              <a href=\"#page-start\"></a>
            </div>

          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "      </ul>
      <div class=\"tp-bannertimer tp-bottom\"></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/showcaseplus/templates/field--block-content--mt-main-slideshow-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 145,  284 => 130,  278 => 127,  264 => 116,  261 => 115,  259 => 114,  254 => 112,  239 => 100,  236 => 99,  233 => 98,  229 => 95,  225 => 93,  214 => 91,  210 => 90,  207 => 89,  204 => 88,  198 => 86,  195 => 85,  189 => 83,  181 => 81,  179 => 80,  175 => 79,  158 => 66,  144 => 53,  137 => 50,  133 => 48,  127 => 47,  125 => 46,  120 => 45,  116 => 44,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  70 => 30,  62 => 28,  60 => 27,  55 => 26,  53 => 23,  52 => 21,  50 => 15,  49 => 14,  48 => 13,  47 => 11,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/showcaseplus/templates/field--block-content--mt-main-slideshow-block.html.twig", "/Users/brayfe/sites/troy-martin/themes/custom/showcaseplus/templates/field--block-content--mt-main-slideshow-block.html.twig");
    }
}
