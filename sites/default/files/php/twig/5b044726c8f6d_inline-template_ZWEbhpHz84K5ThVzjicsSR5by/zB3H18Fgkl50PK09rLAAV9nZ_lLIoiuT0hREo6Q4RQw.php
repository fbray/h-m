<?php

/* {# inline_template_start #}<div class="pricing-table">
<div class="pricing-table-header">
<div class="views-field-title">
<h4>{{ title }}</h4>
</div>
{{ field_mt_most_popular }}
{{ field_mt_price }}
</div>
<div class="pricing-table-body">
{{ field_mt_pricing_table_item }}
</div>
<div class="pricing-table-footer">
<a href="{{ path }}" class="button button--hover-style-2">Sign Up</a>
</div>
</div> */
class __TwigTemplate_5dbc46da980b6e15a45970b07118fb51e9141a28f4a82a8153242457a820ddc1 extends Twig_Template
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

        // line 1
        echo "<div class=\"pricing-table\">
<div class=\"pricing-table-header\">
<div class=\"views-field-title\">
<h4>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
</div>
";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_most_popular"] ?? null), "html", null, true));
        echo "
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_price"] ?? null), "html", null, true));
        echo "
</div>
<div class=\"pricing-table-body\">
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_pricing_table_item"] ?? null), "html", null, true));
        echo "
</div>
<div class=\"pricing-table-footer\">
<a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"button button--hover-style-2\">Sign Up</a>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"pricing-table\">
<div class=\"pricing-table-header\">
<div class=\"views-field-title\">
<h4>{{ title }}</h4>
</div>
{{ field_mt_most_popular }}
{{ field_mt_price }}
</div>
<div class=\"pricing-table-body\">
{{ field_mt_pricing_table_item }}
</div>
<div class=\"pricing-table-footer\">
<a href=\"{{ path }}\" class=\"button button--hover-style-2\">Sign Up</a>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  77 => 10,  71 => 7,  67 => 6,  62 => 4,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"pricing-table\">
<div class=\"pricing-table-header\">
<div class=\"views-field-title\">
<h4>{{ title }}</h4>
</div>
{{ field_mt_most_popular }}
{{ field_mt_price }}
</div>
<div class=\"pricing-table-body\">
{{ field_mt_pricing_table_item }}
</div>
<div class=\"pricing-table-footer\">
<a href=\"{{ path }}\" class=\"button button--hover-style-2\">Sign Up</a>
</div>
</div>", "");
    }
}
