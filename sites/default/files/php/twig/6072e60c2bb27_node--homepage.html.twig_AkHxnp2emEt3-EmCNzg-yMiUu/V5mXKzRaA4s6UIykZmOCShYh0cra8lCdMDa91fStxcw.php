<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/tpk/templates/node--homepage.html.twig */
class __TwigTemplate_937109231778b347d6302a096467181154edf9d08ebffa9aa86f0fad80a8f2a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">
  <div class=\"hero\" style='background-image: url(\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header_image", [], "any", false, false, true, 79), 0, [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\")'>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <h1 class=\"col-md-12 col-12\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_header", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "</h1>
          <p class=\"col-md-5 col-12\">";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_body", [], "any", false, false, true, 84), 0, [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-sm-12 hero-button\">
          <a class=\"button\" href='tel:";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_field_hero_button", [], "any", false, false, true, 87), 0, [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "'>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skambinti"));
        echo "</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"about-us container\">
    <div class=\"col-md-5 col-sm-12\">
      <h2>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_about_us_header", [], "any", false, false, true, 94), 0, [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "</h2>
      <p>";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_about_us_body", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-6 about-is-image pull-right\">
      <img src=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 98), 0, [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("homepage about-us section logo"));
        echo "\">
    </div>
  </div>
  <div class=\"services container\">
    <h2 class=\"text-center\">";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services_header", [], "any", false, false, true, 102), 0, [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "</h2>
    <div class=\"services-list\">
      ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
        <a class=\"button\" href='";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services_button", [], "any", false, false, true, 105)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#url"] ?? null) : null), 105, $this->source), "html", null, true);
        echo "'>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services_button", [], "any", false, false, true, 105)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#title"] ?? null) : null), 105, $this->source), "html", null, true);
        echo "</a>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tpk/templates/node--homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 105,  97 => 104,  92 => 102,  83 => 98,  77 => 95,  73 => 94,  61 => 87,  55 => 84,  51 => 83,  44 => 79,  39 => 78,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{#{%#}
{#  set classes = [#}
{#    node.bundle|clean_class,#}
{#    node.isPromoted() ? 'is-promoted',#}
{#    node.isSticky() ? 'is-sticky',#}
{#    not node.isPublished() ? 'is-unpublished',#}
{#    view_mode ? view_mode|clean_class,#}
{#    'clearfix',#}
{#  ]#}
{#%}#}
<article{{ attributes.addClass(classes) }}>
  <div class=\"hero\" style='background-image: url(\"{{ content.field_header_image.0 }}\")'>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <h1 class=\"col-md-12 col-12\">{{ content.field_hero_header.0 }}</h1>
          <p class=\"col-md-5 col-12\">{{ content.field_hero_body.0 }}</p>
        </div>
        <div class=\"col-sm-12 hero-button\">
          <a class=\"button\" href='tel:{{ content.field_field_hero_button.0 }}'>{{ 'Skambinti'|t }}</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"about-us container\">
    <div class=\"col-md-5 col-sm-12\">
      <h2>{{ content.field_about_us_header.0 }}</h2>
      <p>{{ content.field_about_us_body.0 }}</p>
    </div>
    <div class=\"col-md-6 about-is-image pull-right\">
      <img src=\"{{ content.field_image.0 }}\" alt=\"{{ 'homepage about-us section logo'|t }}\">
    </div>
  </div>
  <div class=\"services container\">
    <h2 class=\"text-center\">{{ content.field_services_header.0 }}</h2>
    <div class=\"services-list\">
      {{ content.field_paragraph }}
        <a class=\"button\" href='{{ content.field_services_button[0]['#url'] }}'>{{ content.field_services_button[0]['#title'] }}</a>
    </div>
  </div>
</article>
", "themes/custom/tpk/templates/node--homepage.html.twig", "/Applications/MAMP/htdocs/drupal/themes/custom/tpk/templates/node--homepage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 78, "t" => 87);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
