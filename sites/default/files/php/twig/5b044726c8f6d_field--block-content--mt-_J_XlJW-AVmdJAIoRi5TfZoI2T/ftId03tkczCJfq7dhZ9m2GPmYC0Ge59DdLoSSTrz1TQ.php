<?php

/* themes/custom/showcaseplus/templates/field--block-content--mt-dropdowns-block.html.twig */
class __TwigTemplate_318b8c079db6d65713abb19e3eacc1362d4d8d1302a3af4639a851a846619355 extends Twig_Template
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
        $tags = array("set" => 10, "if" => 26, "for" => 29);
        $filters = array("clean_class" => 12);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
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

        // line 10
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 12
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 13
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 14
($context["label_display"] ?? null)), 4 => "field--mt-dropdowns-block", 5 => "clearfix");
        // line 20
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 22
($context["label_display"] ?? null) == "inline")) ? ("inline") : ("")));
        // line 25
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 26
        if ( !($context["label_hidden"] ?? null)) {
            // line 27
            echo "    <h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "    <div class=\"btn-group\" role=\"group\">
      <div class=\"dropdown\">
        <button class=\"dropdown-trigger\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
            // line 33
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "get", array(0 => "field_mt_dropdown_trigger_icon"), "method"), "value", array())) {
                // line 34
                echo "            <i class=\"fa ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "get", array(0 => "field_mt_dropdown_trigger_icon"), "method"), "value", array()), "html", null, true));
                echo "\">
              <span class=\"sr-only\">
                ";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "get", array(0 => "field_mt_dropdown_trigger_icon"), "method"), "value", array()), "html", null, true));
                echo " dropdown trigger
              </span>
            </i>
          ";
            }
            // line 40
            echo "        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
        </ul>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/showcaseplus/templates/field--block-content--mt-dropdowns-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  95 => 42,  91 => 40,  84 => 36,  78 => 34,  76 => 33,  71 => 30,  66 => 29,  58 => 27,  56 => 26,  51 => 25,  49 => 22,  48 => 20,  46 => 14,  45 => 13,  44 => 12,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/showcaseplus/templates/field--block-content--mt-dropdowns-block.html.twig", "/Users/brayfe/sites/troy-martin/themes/custom/showcaseplus/templates/field--block-content--mt-dropdowns-block.html.twig");
    }
}
