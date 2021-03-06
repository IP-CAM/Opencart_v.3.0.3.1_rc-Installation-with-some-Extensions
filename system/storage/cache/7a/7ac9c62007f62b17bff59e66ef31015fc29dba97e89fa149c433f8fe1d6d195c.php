<?php

/* extension/export_import.twig */
class __TwigTemplate_ff1ac98f8feedd736969620824c9e0322b557c04136d8fa1c752c39b851156e0 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 6
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (( !(isset($context["error_warning"]) ? $context["error_warning"] : null) &&  !(isset($context["success"]) ? $context["success"] : null))) {
            // line 28
            echo "\t\t<div id=\"export_import_notification\" class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
\t\t\t<div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
            // line 29
            echo (isset($context["text_loading_notifications"]) ? $context["text_loading_notifications"] : null);
            echo "</div>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 33
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_export"]) ? $context["tab_export"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_import"]) ? $context["tab_import"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 46
        echo (isset($context["export"]) ? $context["export"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 49
        echo (isset($context["entry_export"]) ? $context["entry_export"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo (isset($context["entry_export_type"]) ? $context["entry_export_type"] : null);
        echo "<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 54
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "c")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo (isset($context["text_export_type_category"]) ? $context["text_export_type_category"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "p")) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo (isset($context["text_export_type_product"]) ? $context["text_export_type_product"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "o")) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo (isset($context["text_export_type_option"]) ? $context["text_export_type_option"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "a")) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo (isset($context["text_export_type_attribute"]) ? $context["text_export_type_attribute"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 82
        if ((isset($context["exist_filter"]) ? $context["exist_filter"] : null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["export_type"]) ? $context["export_type"] : null) == "f")) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo (isset($context["text_export_type_filter"]) ? $context["text_export_type_filter"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "u")) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo (isset($context["text_export_type_customer"]) ? $context["text_export_type_customer"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr id=\"category_filter\">
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">";
        // line 102
        echo (isset($context["entry_category_filter"]) ? $context["entry_category_filter"] : null);
        echo "<span class=\"help\">";
        echo (isset($context["help_category_filter"]) ? $context["help_category_filter"] : null);
        echo "</span><br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 103
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"categories\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"category";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["category"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
            // line 107
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr id=\"range_type\">
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">";
        // line 115
        echo (isset($context["entry_range_type"]) ? $context["entry_range_type"] : null);
        echo "<span class=\"help\">";
        echo (isset($context["help_range_type"]) ? $context["help_range_type"] : null);
        echo "</span><br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"id\" id=\"range_type_id\">";
        // line 116
        echo (isset($context["button_export_id"]) ? $context["button_export_id"] : null);
        echo " &nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"page\" id=\"range_type_page\">";
        // line 117
        echo (isset($context["button_export_page"]) ? $context["button_export_page"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 119
        echo (isset($context["entry_start_id"]) ? $context["entry_start_id"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 120
        echo (isset($context["entry_start_index"]) ? $context["entry_start_index"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 122
        echo (isset($context["min"]) ? $context["min"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 124
        echo (isset($context["entry_end_id"]) ? $context["entry_end_id"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 125
        echo (isset($context["entry_end_index"]) ? $context["entry_end_index"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 127
        echo (isset($context["max"]) ? $context["max"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 132
        echo (isset($context["button_export"]) ? $context["button_export"] : null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 139
        echo (isset($context["import"]) ? $context["import"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 143
        echo (isset($context["entry_import"]) ? $context["entry_import"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 144
        echo (isset($context["help_import"]) ? $context["help_import"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 145
        echo (isset($context["help_format"]) ? $context["help_format"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 150
        echo (isset($context["entry_incremental"]) ? $context["entry_incremental"] : null);
        echo "<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 151
        if ((isset($context["incremental"]) ? $context["incremental"] : null)) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 153
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " ";
            echo (isset($context["help_incremental_yes"]) ? $context["help_incremental_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " ";
            echo (isset($context["help_incremental_no"]) ? $context["help_incremental_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " ";
            echo (isset($context["help_incremental_yes"]) ? $context["help_incremental_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 162
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " ";
            echo (isset($context["help_incremental_no"]) ? $context["help_incremental_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 167
        echo (isset($context["entry_upload"]) ? $context["entry_upload"] : null);
        echo "<br /><br /><input type=\"file\" name=\"upload\" id=\"upload\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 170
        echo (isset($context["button_import"]) ? $context["button_import"] : null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 177
        echo (isset($context["settings"]) ? $context["settings"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 182
        if ((isset($context["settings_use_option_id"]) ? $context["settings_use_option_id"] : null)) {
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_option_id"]) ? $context["entry_settings_use_option_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 185
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_option_id"]) ? $context["entry_settings_use_option_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 193
        if ((isset($context["settings_use_option_value_id"]) ? $context["settings_use_option_value_id"] : null)) {
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_option_value_id"]) ? $context["entry_settings_use_option_value_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_option_value_id"]) ? $context["entry_settings_use_option_value_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 204
        if ((isset($context["settings_use_attribute_group_id"]) ? $context["settings_use_attribute_group_id"] : null)) {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_attribute_group_id"]) ? $context["entry_settings_use_attribute_group_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_attribute_group_id"]) ? $context["entry_settings_use_attribute_group_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 215
        if ((isset($context["settings_use_attribute_id"]) ? $context["settings_use_attribute_id"] : null)) {
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_attribute_id"]) ? $context["entry_settings_use_attribute_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_attribute_id"]) ? $context["entry_settings_use_attribute_id"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 220
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 223
        if ((isset($context["exist_filter"]) ? $context["exist_filter"] : null)) {
            // line 224
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 227
            if ((isset($context["settings_use_filter_group_id"]) ? $context["settings_use_filter_group_id"] : null)) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" checked=\"checked\" /> ";
                echo (isset($context["entry_settings_use_filter_group_id"]) ? $context["entry_settings_use_filter_group_id"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" /> ";
                echo (isset($context["entry_settings_use_filter_group_id"]) ? $context["entry_settings_use_filter_group_id"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 238
            if ((isset($context["settings_use_filter_id"]) ? $context["settings_use_filter_id"] : null)) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" checked=\"checked\" /> ";
                echo (isset($context["entry_settings_use_filter_id"]) ? $context["entry_settings_use_filter_id"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" /> ";
                echo (isset($context["entry_settings_use_filter_id"]) ? $context["entry_settings_use_filter_id"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 250
        if ((isset($context["settings_use_export_cache"]) ? $context["settings_use_export_cache"] : null)) {
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_export_cache\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_export_cache"]) ? $context["entry_settings_use_export_cache"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_export_cache\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_export_cache"]) ? $context["entry_settings_use_export_cache"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 255
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 261
        if ((isset($context["settings_use_import_cache"]) ? $context["settings_use_import_cache"] : null)) {
            // line 262
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_import_cache\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["entry_settings_use_import_cache"]) ? $context["entry_settings_use_import_cache"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_import_cache\" value=\"1\" /> ";
            echo (isset($context["entry_settings_use_import_cache"]) ? $context["entry_settings_use_import_cache"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 266
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 270
        echo (isset($context["button_settings"]) ? $context["button_settings"] : null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"alert alert-info\">
\t\t  <i class=\"fa fa-check-circle\"></i> Магазин дополнений для Opencart. <i class=\"fa fa-external-link\"></i> <a target=\"_blank\" href=\"https://ocmod.net\">Перейти в магазин</a>
\t\t</div>
\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> <div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 287
        echo (isset($context["text_loading_notifications"]) ? $context["text_loading_notifications"] : null);
        echo "</div>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/getNotifications&user_token=";
        // line 292
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 296
        echo (isset($context["text_retry"]) ? $context["text_retry"] : null);
        echo "</span>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['message']+'<br /><br />";
        // line 298
        echo (isset($context["text_used_category_ids"]) ? $context["text_used_category_ids"] : null);
        echo " ";
        echo (isset($context["text_used_product_ids"]) ? $context["text_used_product_ids"] : null);
        echo "');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 300
        echo (isset($context["error_no_news"]) ? $context["error_no_news"] : null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 304
        echo (isset($context["error_notifications"]) ? $context["error_notifications"] : null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo (isset($context["text_retry"]) ? $context["text_retry"] : null);
        echo "</span>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 307
        echo (isset($context["error_notifications"]) ? $context["error_notifications"] : null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo (isset($context["text_retry"]) ? $context["text_retry"] : null);
        echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_category_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#category_filter').show();
\t} else {
\t\t\$('#category_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_category_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_category_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_notification').remove();
\t});

\tgetNotifications();
});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 386
        echo (isset($context["error_select_file"]) ? $context["error_select_file"] : null);
        echo "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 392
        if ((array_key_exists("post_max_size", $context) && (isset($context["post_max_size"]) ? $context["post_max_size"] : null))) {
            // line 393
            echo "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 394
            echo (isset($context["post_max_size"]) ? $context["post_max_size"] : null);
            echo ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 396
            echo (isset($context["error_post_max_size"]) ? $context["error_post_max_size"] : null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 400
        echo "\t\t";
        if ((array_key_exists("upload_max_filesize", $context) && (isset($context["upload_max_filesize"]) ? $context["upload_max_filesize"] : null))) {
            // line 401
            echo "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 402
            echo (isset($context["upload_max_filesize"]) ? $context["upload_max_filesize"] : null);
            echo ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 404
            echo (isset($context["error_upload_max_filesize"]) ? $context["error_upload_max_filesize"] : null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 408
        echo "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 423
        echo (isset($context["count_product"]) ? $context["count_product"] : null);
        echo ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/getCountProduct&user_token=";
        // line 427
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t\tconsole.log(\"success: count_product='\"+count_product+\"'\");
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 459
        echo (isset($context["error_param_not_number"]) ? $context["error_param_not_number"] : null);
        echo "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 466
        echo ((isset($context["count_category"]) ? $context["count_category"] : null) - 1);
        echo "; break;
\t\tdefault:  count_item = ";
        // line 467
        echo ((isset($context["count_customer"]) ? $context["count_customer"] : null) - 1);
        echo "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 472
        echo (isset($context["min_product_id"]) ? $context["min_product_id"] : null);
        echo " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 473
        echo (isset($context["min_category_id"]) ? $context["min_category_id"] : null);
        echo " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 474
        echo (isset($context["min_customer_id"]) ? $context["min_customer_id"] : null);
        echo " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 479
        echo (isset($context["max_product_id"]) ? $context["max_product_id"] : null);
        echo " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 480
        echo (isset($context["max_category_id"]) ? $context["max_category_id"] : null);
        echo " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 481
        echo (isset($context["max_customer_id"]) ? $context["max_customer_id"] : null);
        echo " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 487
        echo (isset($context["error_batch_number"]) ? $context["error_batch_number"] : null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 491
        echo (isset($context["error_page_no_data"]) ? $context["error_page_no_data"] : null);
        echo "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 498
        echo (isset($context["error_min_item_id"]) ? $context["error_min_item_id"] : null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 502
        echo (isset($context["error_id_no_data"]) ? $context["error_id_no_data"] : null);
        echo "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 523
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t\$('#category' + item['value']).remove();
\t\t\$('#categories').append('<div id=\"category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
\t\tupdateCountProducts();
\t}
});

\$('#categories').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
\tupdateCountProducts();
});
//--></script>

</div>
";
        // line 550
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/export_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  992 => 550,  962 => 523,  938 => 502,  931 => 498,  921 => 491,  914 => 487,  905 => 481,  901 => 480,  897 => 479,  889 => 474,  885 => 473,  881 => 472,  873 => 467,  869 => 466,  859 => 459,  824 => 427,  817 => 423,  800 => 408,  793 => 404,  788 => 402,  785 => 401,  782 => 400,  775 => 396,  770 => 394,  767 => 393,  765 => 392,  756 => 386,  672 => 307,  664 => 304,  657 => 300,  650 => 298,  645 => 296,  638 => 292,  630 => 287,  610 => 270,  604 => 266,  598 => 264,  592 => 262,  590 => 261,  582 => 255,  576 => 253,  570 => 251,  568 => 250,  563 => 247,  557 => 243,  551 => 241,  545 => 239,  543 => 238,  535 => 232,  529 => 230,  523 => 228,  521 => 227,  516 => 224,  514 => 223,  509 => 220,  503 => 218,  497 => 216,  495 => 215,  487 => 209,  481 => 207,  475 => 205,  473 => 204,  465 => 198,  459 => 196,  453 => 194,  451 => 193,  443 => 187,  437 => 185,  431 => 183,  429 => 182,  421 => 177,  411 => 170,  405 => 167,  400 => 164,  393 => 162,  385 => 159,  382 => 158,  375 => 156,  367 => 153,  364 => 152,  362 => 151,  358 => 150,  350 => 145,  346 => 144,  342 => 143,  335 => 139,  325 => 132,  317 => 127,  312 => 125,  308 => 124,  303 => 122,  298 => 120,  294 => 119,  289 => 117,  285 => 116,  279 => 115,  272 => 110,  263 => 107,  256 => 106,  252 => 105,  247 => 103,  241 => 102,  231 => 96,  227 => 94,  223 => 92,  220 => 91,  213 => 88,  209 => 86,  205 => 84,  202 => 83,  200 => 82,  194 => 80,  190 => 78,  186 => 76,  184 => 75,  178 => 73,  174 => 71,  170 => 69,  168 => 68,  162 => 66,  158 => 64,  154 => 62,  152 => 61,  146 => 59,  142 => 57,  138 => 55,  136 => 54,  132 => 53,  125 => 49,  119 => 46,  110 => 40,  106 => 39,  102 => 38,  95 => 33,  88 => 29,  85 => 28,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<a href="{{ back }}" data-toggle="tooltip" title="{{ button_back }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if (error_warning) %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		{% if (success) %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		{% if ((not error_warning) and (not success)) %}*/
/* 		<div id="export_import_notification" class="alert alert-info"><i class="fa fa-info-circle"></i>*/
/* 			<div id="export_import_loading"><img src="view/image/export-import/loading.gif" />{{ text_loading_notifications }}</div>*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* */
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* */
/* 				<ul class="nav nav-tabs">*/
/* 					<li class="active"><a href="#tab-export" data-toggle="tab">{{ tab_export }}</a></li>*/
/* 					<li><a href="#tab-import" data-toggle="tab">{{ tab_import }}</a></li>*/
/* 					<li><a href="#tab-settings" data-toggle="tab">{{ tab_settings }}</a></li>*/
/* 				</ul>*/
/* */
/* 				<div class="tab-content">*/
/* */
/* 					<div class="tab-pane active" id="tab-export">*/
/* 						<form action="{{ export }}" method="post" enctype="multipart/form-data" id="export" class="form-horizontal">*/
/* 							<table class="form">*/
/* 								<tr>*/
/* 									<td>{{ entry_export }}</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td style="vertical-align:top;">*/
/* 										{{ entry_export_type }}<br />*/
/* 										{% if (export_type=='c') %}*/
/* 										<input type="radio" name="export_type" value="c" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="c" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_category }}*/
/* 										<br />*/
/* 										{% if (export_type=='p') %}*/
/* 										<input type="radio" name="export_type" value="p" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="p" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_product }}*/
/* 										<br />*/
/* 										{% if (export_type=='o') %}*/
/* 										<input type="radio" name="export_type" value="o" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="o" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_option }}*/
/* 										<br />*/
/* 										{% if (export_type=='a') %}*/
/* 										<input type="radio" name="export_type" value="a" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="a" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_attribute }}*/
/* 										<br />*/
/* 										{% if (exist_filter) %}*/
/* 										{% if (export_type=='f') %}*/
/* 										<input type="radio" name="export_type" value="f" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="f" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_filter }}*/
/* 										<br />*/
/* 										{% endif %}*/
/* 										{% if (export_type=='u') %}*/
/* 										<input type="radio" name="export_type" value="u" checked="checked" />*/
/* 										{% else %}*/
/* 										<input type="radio" name="export_type" value="u" />*/
/* 										{% endif %}*/
/* 										{{ text_export_type_customer }}*/
/* 										<br />*/
/* 									</td>*/
/* 								</tr>*/
/* */
/* 								<tr id="category_filter">*/
/* 									<td style="vertical-align:top;">{{ entry_category_filter }}<span class="help">{{ help_category_filter }}</span><br />*/
/* 										<input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/* 										<div id="categories" class="well well-sm" style="height: 100px; overflow: auto;"> */
/* 											{% for category in categories %}*/
/* 											<div id="category{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/* 												<input type="hidden" name="categories[]" value="{{ category.category_id }}" />*/
/* 											</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</td>*/
/* 								</tr>*/
/* */
/* 								<tr id="range_type">*/
/* 									<td style="vertical-align:top;">{{ entry_range_type }}<span class="help">{{ help_range_type }}</span><br />*/
/* 										<input type="radio" name="range_type" value="id" id="range_type_id">{{ button_export_id }} &nbsp;&nbsp;*/
/* 										<input type="radio" name="range_type" value="page" id="range_type_page">{{ button_export_page }}*/
/* 										<br /><br />*/
/* 										<span class="id">{{ entry_start_id }}</span>*/
/* 										<span class="page">{{ entry_start_index }}</span>*/
/* 										<br />*/
/* 										<input type="text" name="min" value="{{ min }}" />*/
/* 										<br />*/
/* 										<span class="id">{{ entry_end_id }}</span>*/
/* 										<span class="page">{{ entry_end_index }}</span>*/
/* 										<br />*/
/* 										<input type="text" name="max" value="{{ max }}" />*/
/* 									</td>*/
/* 								</tr>*/
/* */
/* 								<tr>*/
/* 									<td class="buttons"><a onclick="downloadData();" class="btn btn-primary"><span>{{ button_export }}</span></a></td>*/
/* 								</tr>*/
/* 							</table>*/
/* 						</form>*/
/* 					</div>*/
/* */
/* 					<div class="tab-pane" id="tab-import">*/
/* 						<form action="{{ import }}" method="post" enctype="multipart/form-data" id="import" class="form-horizontal">*/
/* 							<table class="form">*/
/* 								<tr>*/
/* 									<td>*/
/* 										{{ entry_import }}*/
/* 										<span class="help">{{ help_import }}</span>*/
/* 										<span class="help">{{ help_format }}</span>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										{{ entry_incremental }}<br />*/
/* 										{% if (incremental) %}*/
/* 										<input type="radio" name="incremental" value="1" checked="checked" />*/
/* 										{{ text_yes }} {{ help_incremental_yes }}*/
/* 										<br />*/
/* 										<input type="radio" name="incremental" value="0" />*/
/* 										{{ text_no }} {{ help_incremental_no }}*/
/* 										{% else %}*/
/* 										<input type="radio" name="incremental" value="1" />*/
/* 										{{ text_yes }} {{ help_incremental_yes }}*/
/* 										<br />*/
/* 										<input type="radio" name="incremental" value="0" checked="checked" />*/
/* 										{{ text_no }} {{ help_incremental_no }}*/
/* 										{% endif %}*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>{{ entry_upload }}<br /><br /><input type="file" name="upload" id="upload" /></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="buttons"><a onclick="uploadData();" class="btn btn-primary"><span>{{ button_import }}</span></a></td>*/
/* 								</tr>*/
/* 							</table>*/
/* 						</form>*/
/* 					</div>*/
/* */
/* 					<div class="tab-pane" id="tab-settings">*/
/* 						<form action="{{ settings }}" method="post" enctype="multipart/form-data" id="settings" class="form-horizontal">*/
/* 							<table class="form">*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_option_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_option_id" value="1" checked="checked" /> {{ entry_settings_use_option_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_option_id" value="1" /> {{ entry_settings_use_option_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_option_value_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_option_value_id" value="1" checked="checked" /> {{ entry_settings_use_option_value_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_option_value_id" value="1" /> {{ entry_settings_use_option_value_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_attribute_group_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_attribute_group_id" value="1" checked="checked" /> {{ entry_settings_use_attribute_group_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_attribute_group_id" value="1" /> {{ entry_settings_use_attribute_group_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_attribute_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_attribute_id" value="1" checked="checked" /> {{ entry_settings_use_attribute_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_attribute_id" value="1" /> {{ entry_settings_use_attribute_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								{% if (exist_filter) %}*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_filter_group_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_filter_group_id" value="1" checked="checked" /> {{ entry_settings_use_filter_group_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_filter_group_id" value="1" /> {{ entry_settings_use_filter_group_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_filter_id) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_filter_id" value="1" checked="checked" /> {{ entry_settings_use_filter_id }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_filter_id" value="1" /> {{ entry_settings_use_filter_id }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								{% endif %}*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_export_cache) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_export_cache" value="1" checked="checked" /> {{ entry_settings_use_export_cache }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_export_cache" value="1" /> {{ entry_settings_use_export_cache }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<label>*/
/* 										{% if (settings_use_import_cache) %}*/
/* 										<input type="checkbox" name="export_import_settings_use_import_cache" value="1" checked="checked" /> {{ entry_settings_use_import_cache }}*/
/* 										{% else %}*/
/* 										<input type="checkbox" name="export_import_settings_use_import_cache" value="1" /> {{ entry_settings_use_import_cache }}*/
/* 										{% endif %}*/
/* 										</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="buttons"><a onclick="updateSettings();" class="btn btn-primary"><span>{{ button_settings }}</span></a></td>*/
/* 								</tr>*/
/* 							</table>*/
/* 						</form>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="alert alert-info">*/
/* 		  <i class="fa fa-check-circle"></i> Магазин дополнений для Opencart. <i class="fa fa-external-link"></i> <a target="_blank" href="https://ocmod.net">Перейти в магазин</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <script type="text/javascript"><!--*/
/* */
/* function getNotifications() {*/
/* 	$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> <div id="export_import_loading"><img src="view/image/export-import/loading.gif" />{{ text_loading_notifications }}</div>');*/
/* 	setTimeout(*/
/* 		function(){*/
/* 			$.ajax({*/
/* 				type: 'GET',*/
/* 				url: 'index.php?route=extension/export_import/getNotifications&user_token={{ user_token }}',*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					if (json['error']) {*/
/* 						$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> '+json['error']+' <span style="cursor:pointer;font-weight:bold;text-decoration:underline;float:right;" onclick="getNotifications();">{{ text_retry }}</span>');*/
/* 					} else if (json['message']) {*/
/* 						$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> '+json['message']+'<br /><br />{{ text_used_category_ids}} {{ text_used_product_ids }}');*/
/* 					} else {*/
/* 						$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> '+'{{ error_no_news }}');*/
/* 					}*/
/* 				},*/
/* 				failure: function(){*/
/* 					$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> '+'{{ error_notifications }} <span style="cursor:pointer;font-weight:bold;text-decoration:underline;float:right;" onclick="getNotifications();">{{ text_retry }}</span>');*/
/* 				},*/
/* 				error: function() {*/
/* 					$('#export_import_notification').html('<i class="fa fa-info-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> '+'{{ error_notifications }} <span style="cursor:pointer;font-weight:bold;text-decoration:underline;float:right;" onclick="getNotifications();">{{ text_retry }}</span>');*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		500*/
/* 	);*/
/* }*/
/* */
/* function check_category_filter(export_type) {*/
/* 	if (export_type=='p') {*/
/* 		$('#category_filter').show();*/
/* 	} else {*/
/* 		$('#category_filter').hide();*/
/* 	}*/
/* }*/
/* */
/* function check_range_type(export_type) {*/
/* 	if ((export_type=='p') || (export_type=='c') || (export_type=='u')) {*/
/* 		$('#range_type').show();*/
/* 		$('#range_type_id').prop('checked',true);*/
/* 		$('#range_type_page').prop('checked',false);*/
/* 		$('.id').show();*/
/* 		$('.page').hide();*/
/* 	} else {*/
/* 		$('#range_type').hide();*/
/* 	}*/
/* }*/
/* */
/* $(document).ready(function() {*/
/* */
/* 	check_category_filter($('input[name=export_type]:checked').val());*/
/* 	check_range_type($('input[name=export_type]:checked').val());*/
/* */
/* 	$("#range_type_id").click(function() {*/
/* 		$(".page").hide();*/
/* 		$(".id").show();*/
/* 	});*/
/* */
/* 	$("#range_type_page").click(function() {*/
/* 		$(".id").hide();*/
/* 		$(".page").show();*/
/* 	});*/
/* */
/* 	$('input[name=export_type]').click(function() {*/
/* 		check_category_filter($(this).val());*/
/* 		check_range_type($(this).val());*/
/* 	});*/
/* */
/* 	$('span.close').click(function() {*/
/* 		$(this).parent().remove();*/
/* 	});*/
/* */
/* 	$('a[data-toggle="tab"]').click(function() {*/
/* 		$('#export_import_notification').remove();*/
/* 	});*/
/* */
/* 	getNotifications();*/
/* });*/
/* */
/* function checkFileSize(id) {*/
/* 	// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details*/
/* 	var input, file, file_size;*/
/* */
/* 	if (!window.FileReader) {*/
/* 		// The file API isn't yet supported on user's browser*/
/* 		return true;*/
/* 	}*/
/* */
/* 	input = document.getElementById(id);*/
/* 	if (!input) {*/
/* 		// couldn't find the file input element*/
/* 		return true;*/
/* 	}*/
/* 	else if (!input.files) {*/
/* 		// browser doesn't seem to support the `files` property of file inputs*/
/* 		return true;*/
/* 	}*/
/* 	else if (!input.files[0]) {*/
/* 		// no file has been selected for the upload*/
/* 		alert( "{{ error_select_file }}" );*/
/* 		return false;*/
/* 	}*/
/* 	else {*/
/* 		file = input.files[0];*/
/* 		file_size = file.size;*/
/* 		{% if ((post_max_size is defined) and (post_max_size)) %}*/
/* 		// check against PHP's post_max_size*/
/* 		post_max_size = {{ post_max_size }};*/
/* 		if (file_size > post_max_size) {*/
/* 			alert( "{{ error_post_max_size }}" );*/
/* 			return false;*/
/* 		}*/
/* 		{% endif %}*/
/* 		{% if ((upload_max_filesize is defined) and (upload_max_filesize)) %}*/
/* 		// check against PHP's upload_max_filesize*/
/* 		upload_max_filesize = {{ upload_max_filesize }};*/
/* 		if (file_size > upload_max_filesize) {*/
/* 			alert( "{{ error_upload_max_filesize }}" );*/
/* 			return false;*/
/* 		}*/
/* 		{% endif %}*/
/* 		return true;*/
/* 	}*/
/* }*/
/* */
/* function uploadData() {*/
/* 	if (checkFileSize('upload')) {*/
/* 		$('#import').submit();*/
/* 	}*/
/* }*/
/* */
/* function isNumber(txt){ */
/* 	var regExp=/^[\d]{1,}$/;*/
/* 	return regExp.test(txt); */
/* }*/
/* */
/* count_product = {{ count_product }};*/
/* */
/* function updateCountProducts() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/export_import/getCountProduct&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("input[name='categories[]']").serialize(),*/
/* 		success: function(json) {*/
/* 			if (json['count']) {*/
/* 				count_product = json['count'];*/
/* 			} else {*/
/* 			}*/
/* 			console.log("success: count_product='"+count_product+"'");*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function validateExportForm(id) {*/
/* 	var export_type = $('input[name=export_type]:checked').val();*/
/* 	if ((export_type!='c') && (export_type!='p') && (export_type!='u')) {*/
/* 		return true;*/
/* 	}*/
/* */
/* 	var val = $("input[name=range_type]:checked").val();*/
/* 	var min = $("input[name=min]").val();*/
/* 	var max = $("input[name=max]").val();*/
/* */
/* 	if ((min=='') && (max=='')) {*/
/* 		return true;*/
/* 	}*/
/* */
/* 	if (!isNumber(min) || !isNumber(max)) {*/
/* 		alert("{{ error_param_not_number }}");*/
/* 		return false;*/
/* 	}*/
/* */
/* 	var count_item;*/
/* 	switch (export_type) {*/
/* 		case 'p': count_item = count_product-1;  break;*/
/* 		case 'c': count_item = {{ count_category-1 }}; break;*/
/* 		default:  count_item = {{ count_customer-1 }}; break;*/
/* 	}*/
/* 	var batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)*/
/* 	var minItemId;*/
/* 	switch (export_type) {*/
/* 		case 'p': minItemId = parseInt( {{ min_product_id }} );  break;*/
/* 		case 'c': minItemId = parseInt( {{ min_category_id }} ); break;*/
/* 		default:  minItemId = parseInt( {{ min_customer_id }} ); break;*/
/* 	*/
/* 	}*/
/* 	var maxItemId;*/
/* 	switch (export_type) {*/
/* 		case 'p': maxItemId = parseInt( {{ max_product_id }} );  break;*/
/* 		case 'c': maxItemId = parseInt( {{ max_category_id }} ); break;*/
/* 		default:  maxItemId = parseInt( {{ max_customer_id }} ); break;*/
/* 	*/
/* 	}*/
/* */
/* 	if (val=="page") {  // Min for the batch size, Max for the batch number*/
/* 		if (parseInt(max) <= 0) {*/
/* 			alert("{{ error_batch_number }}");*/
/* 			return false;*/
/* 		}*/
/* 		if (parseInt(max) > batchNo) {        */
/* 			alert("{{ error_page_no_data }}"); */
/* 			return false;*/
/* 		} else {*/
/* 			$("input[name=max]").val(parseInt(max)+1);*/
/* 		}*/
/* 	} else {*/
/* 		if (minItemId <= 0) {*/
/* 			alert("{{ error_min_item_id }}");*/
/* 			return false;*/
/* 		}*/
/* 		if (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  */
/* 			alert("{{ error_id_no_data }}"); */
/* 			return false;*/
/* 		}*/
/* 	}*/
/* 	return true;*/
/* }*/
/* */
/* function downloadData() {*/
/* 	if (validateExportForm('export')) {*/
/* 		$('#export').submit();*/
/* 	}*/
/* }*/
/* */
/* function updateSettings() {*/
/* 	$('#settings').submit();*/
/* }*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* 		$('#category' + item['value']).remove();*/
/* 		$('#categories').append('<div id="category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="categories[]" value="' + item['value'] + '" /></div>');*/
/* 		updateCountProducts();*/
/* 	}*/
/* });*/
/* */
/* $('#categories').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* 	updateCountProducts();*/
/* });*/
/* //--></script>*/
/* */
/* </div>*/
/* {{ footer }}*/
/* */
