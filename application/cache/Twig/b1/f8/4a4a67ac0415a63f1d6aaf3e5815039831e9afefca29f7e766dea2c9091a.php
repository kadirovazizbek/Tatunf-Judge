<?php

/* pages/admin/edit_problem_plain.twig */
class __TwigTemplate_b1f84a4a67ac0415a63f1d6aaf3e5815039831e9afefca29f7e766dea2c9091a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "problems";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-edit";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (Plain HTML)";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (Plain HTML)";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\t\$(document).ready(function(){
\t\ttabOverride.set(document.getElementById('md_editor'));
\t});
</script>
";
    }

    // line 25
    public function block_main_content($context, array $blocks = array())
    {
        // line 26
        echo form_open(((("problems/edit/html/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
        echo "
<p>
\tAssignment ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id"), "html", null, true);
        echo " (<span dir=\"auto\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "name"), "html", null, true);
        echo "</span>)<br>
\tProblem ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
        echo " - <input type=\"text\" name=\"problem_name\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
        echo "\"/>
</p>
<p>
\t<i class=\"fa fa-warning color3\"></i>
\tWhen you edit as html, the markdown code will be removed.
</p>
<script>
        var test_case_html = '<p class=\"input_p\">'+
                                'Test Case COUNT'+
                                '<table>'+
                                '       <thead><td>Input</td><td>Output</td></thead>'+
                                '       <tbody>'+
                                '       <tr>'+
                                '               <td><textarea dir=\"auto\" name=\"in_COUNT\" rows=\"10\" cols=\"35\" class=\"sharif_input\"></textarea></td>'+
                                '               <td><textarea dir=\"auto\" name=\"out_COUNT\" rows=\"10\" cols=\"35\" class=\"sharif_input\"></textarea></td>'+
                                '       </tr>'+
                                '</table>'+
                                '</p>';
        \$(document).ready(function() {
                \$('#addcase').click(function(e){
                        var next = parseInt(\$('[name=\"num_test_cases\"]').val()) + 1;
                        \$('[name=\"num_test_cases\"]').val(next);
                        \$('#testcases').append(test_case_html.replace(new RegExp('COUNT', 'g'),next));
                });
        });
</script>
<p class=\"input_p\">
\t<textarea name=\"text\" rows=\"20\" cols=\"80\" class=\"sharif_input\" id=\"html_editor\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "description"), "html", null, true);
        echo "</textarea>
</p>
<h2>Test Cases <i class=\"fa fa-plus-circle fa-lg color11 pointer\" id=\"addcase\"></i></h2>
<div id=\"testcases\">
";
        // line 60
        $context["count"] = 0;
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "tests"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "<p class=\"input_p\">
\t";
            // line 63
            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
            // line 64
            echo "        Test Case ";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "
        <table>
                        <thead><td>Input</td><td>Output</td></thead>
                        <tbody>
                        <tr>
                                <td><textarea dir=\"auto\" name=\"in_";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\" rows=\"10\" cols=\"35\" class=\"sharif_input\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "in", array(), "array"), "html", null, true);
            echo "</textarea></td>
                                <td><textarea dir=\"auto\" name=\"out_";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\" rows=\"10\" cols=\"35\" class=\"sharif_input\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "out", array(), "array"), "html", null, true);
            echo "</textarea></td>
                        </tr>
                        </tbody>
                </table>
        </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
        <input type=\"hidden\" name=\"num_test_cases\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "\"/>
<p class=\"input_p\">
\t<input type=\"submit\" value=\"Save\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/edit_problem_plain.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 77,  160 => 76,  146 => 70,  140 => 69,  131 => 64,  129 => 63,  126 => 62,  122 => 61,  120 => 60,  113 => 56,  81 => 29,  75 => 28,  70 => 26,  67 => 25,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
