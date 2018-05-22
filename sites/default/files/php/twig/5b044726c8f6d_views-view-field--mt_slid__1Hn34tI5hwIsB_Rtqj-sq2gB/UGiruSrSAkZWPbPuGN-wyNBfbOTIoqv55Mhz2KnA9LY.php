<?php

/* themes/custom/showcaseplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig */
class __TwigTemplate_7072d472a562ccb4c7f5dcd22f020fff5948d83335ef0c66ae697adb0086958b extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 22
        echo "<div class=\"tp-caption transparent-background\"
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
        // line 35
        echo "<div class=\"tp-caption\"
  data-x=\"[center,center,center,center]\"
  data-y=\"[center,center,center,center]\"
  data-hoffset=\"[0,0,0,0]\"
  data-voffset=\"[0,0,0,0]\"
  data-fontweight=\"500\"
  data-whitespace=\"normal\"
  data-basealign=\"slide\"
  data-start=\"1200\"
  data-width=\"[570,570,570,430]\"
  data-transform_idle=\"o:1\"
  data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
  data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\">
    ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["output"] ?? null), "html", null, true));
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/showcaseplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 49,  72 => 48,  57 => 35,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/showcaseplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig", "/Users/brayfe/sites/troy-martin/themes/custom/showcaseplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig");
    }
}
