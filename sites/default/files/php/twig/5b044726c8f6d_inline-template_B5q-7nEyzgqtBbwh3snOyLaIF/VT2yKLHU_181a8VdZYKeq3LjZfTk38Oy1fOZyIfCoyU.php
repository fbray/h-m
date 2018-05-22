<?php

/* {# inline_template_start #}<div class="article-header">
<div class="views-field-title"><h5>{{ title }}</h5></div>
<div class="article-meta">
<span class="article-meta-item">by {{ name }}</span>
<span class="article-meta-item">{{ created }}</span>
<span class="article-meta-item"><a href="{{ path }}">{{ comment_count }}</a></span>
</div>
</div> */
class __TwigTemplate_217547459638bc9f55a61669cfd8a085b73ac2c190a5fe04208f84f40e95a05d extends Twig_Template
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
        echo "<div class=\"article-header\">
<div class=\"views-field-title\"><h5>";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h5></div>
<div class=\"article-meta\">
<span class=\"article-meta-item\">by ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
        echo "</span>
<span class=\"article-meta-item\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</span>
<span class=\"article-meta-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo "</a></span>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"article-header\">
<div class=\"views-field-title\"><h5>{{ title }}</h5></div>
<div class=\"article-meta\">
<span class=\"article-meta-item\">by {{ name }}</span>
<span class=\"article-meta-item\">{{ created }}</span>
<span class=\"article-meta-item\"><a href=\"{{ path }}\">{{ comment_count }}</a></span>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 6,  62 => 5,  58 => 4,  53 => 2,  50 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"article-header\">
<div class=\"views-field-title\"><h5>{{ title }}</h5></div>
<div class=\"article-meta\">
<span class=\"article-meta-item\">by {{ name }}</span>
<span class=\"article-meta-item\">{{ created }}</span>
<span class=\"article-meta-item\"><a href=\"{{ path }}\">{{ comment_count }}</a></span>
</div>
</div>", "");
    }
}
