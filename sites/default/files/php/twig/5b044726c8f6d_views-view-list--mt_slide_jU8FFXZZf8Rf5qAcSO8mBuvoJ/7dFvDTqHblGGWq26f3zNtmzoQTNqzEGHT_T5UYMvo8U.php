<?php

/* themes/custom/showcaseplus/templates/views-view-list--mt_slideshow_boxed_width--block.html.twig */
class __TwigTemplate_3ce664d692869e081429027558ca2fb136b132601f0b45e56ae85b515b5ebdac extends Twig_Template
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
        $tags = array("if" => 23, "for" => 33);
        $filters = array("length" => 23);
        $functions = array("attach_library" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length'),
                array('attach_library')
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

        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcaseplus/slider-revolution-boxed-width-init"), "html", null, true));
        echo "
<div class=\"container\">
  <div id=\"slideshow-boxedwidth\" class=\"slideshow-boxedwidth slider-revolution-wrapper ";
        // line 23
        if ((twig_length_filter($this->env, ($context["rows"] ?? null)) <= 1)) {
            echo "one-slide";
        }
        echo "\" data-version=\"5.0\">
  ";
        // line 24
        if (($context["attributes"] ?? null)) {
            // line 25
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
  ";
        }
        // line 27
        echo "    ";
        if (($context["title"] ?? null)) {
            // line 28
            echo "      <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
    ";
        }
        // line 30
        echo "
    <";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "type", array()), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "attributes", array()), "html", null, true));
        echo ">

      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            echo "        <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo " data-transition=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["mt_setting"] ?? null), "rs_slideshow_boxedwidth_effect", array()), "html", null, true));
            echo "\" data-slotamount=\"default\" data-title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#row", array(), "array"), "_entity", array()), "getTitle", array(), "method"), "html", null, true));
            echo "\" data-masterspeed=\"default\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "type", array()), "html", null, true));
        echo ">
    <div class=\"tp-bannertimer tp-bottom\"></div>
  ";
        // line 39
        if (($context["attributes"] ?? null)) {
            // line 40
            echo "</div>
  ";
        }
        // line 42
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/showcaseplus/templates/views-view-list--mt_slideshow_boxed_width--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  109 => 40,  107 => 39,  102 => 37,  99 => 36,  84 => 34,  80 => 33,  74 => 31,  71 => 30,  65 => 28,  62 => 27,  56 => 25,  54 => 24,  48 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/showcaseplus/templates/views-view-list--mt_slideshow_boxed_width--block.html.twig", "/Users/brayfe/sites/troy-martin/themes/custom/showcaseplus/templates/views-view-list--mt_slideshow_boxed_width--block.html.twig");
    }
}
