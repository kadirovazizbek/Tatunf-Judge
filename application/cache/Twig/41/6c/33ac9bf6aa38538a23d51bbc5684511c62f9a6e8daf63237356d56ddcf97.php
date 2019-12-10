<?php

/* templates/top_bar.twig */
class __TwigTemplate_416c33ac9bf6aa38538a23d51bbc5684511c62f9a6e8daf63237356d56ddcf97 extends Twig_Template
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
        // line 6
        echo "<div id=\"top_bar\" class=\"color-";
        echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
        echo "\">
\t<div class=\"top_object shj_menu\" id=\"user_top\">
\t\t<a href=\"";
        // line 8
        echo site_url("profile");
        echo "\" id=\"profile_link\"><i class=\"fa fa-user\"></i></a>
\t\t<div class=\"top_menu user-menu\">
\t\t\t<div class=\"gravatar\">
            <!--<img src=\"http://www.gravatar.com/avatar/";
        // line 11
        echo md5($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"));
        echo "?s=70&d=identicon\" />-->
            <!--<img src=\"/assets/images/default-avatar.png\" />-->
            </div>
\t\t\t<div class=\"name\"><i class=\"fa fa-user\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"menu-controls\">
\t\t\t\t<a href=\"";
        // line 16
        echo site_url("logout");
        echo "\" class=\"logout-btn\"><i class=\"fa fa-sign-out\"></i> Выход</a>
\t\t\t\t<a href=\"";
        // line 17
        echo site_url("profile");
        echo "\" class=\"profile-btn\"><i class=\"fa fa-wrench\"></i> Профиль</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"top_object countdown\" id=\"countdown\">
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_days\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"days_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_hours\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"hours_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_minutes\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"minutes_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_seconds\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"seconds_label\"></span>
\t\t</div>
\t</div>
\t<div class=\"top_object countdown\" id=\"extra_time\">
\t\t<i class=\"fa fa-plus-square fa-2x\"></i>
\t\t<div class=\"time_block\">
\t\t\t<span>Extra</span><br><span>Time</span>
\t\t</div>
\t</div>
\t<div id=\"shj_logo\" class=\"top_left\">
\t\t<a href=\"";
        // line 46
        echo site_url("/");
        echo "\">
\t\t\t<img src=\"";
        // line 47
        echo base_url("assets/images/paperplane.svg");
        echo "\"/>
\t\t\t<h1 class=\"shjlogo-text\">TATU Nf <span>ACM</span></h1>
\t\t</a>
\t</div>
\t";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 52
            echo "\t<div class=\"top_object shj_menu top_left\" id=\"admin_tools_top\">
\t\tИнструменты
\t\t<ul class=\"top_menu\">
\t\t\t<li><a href=\"";
            // line 55
            echo site_url("rejudge");
            echo "\">Повторная проверка</a></li>
\t\t\t<li><a href=\"";
            // line 56
            echo site_url("queue");
            echo "\">Очередь попыток</a></li>
\t\t\t<li><a href=\"";
            // line 57
            echo site_url(("moss/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id", array(), "array")));
            echo "\">Чит-проверка</a></li>
\t\t</ul>
\t</div>
\t";
        }
        // line 61
        echo "\t<div class=\"top_object shj_menu top_left\" id=\"select_assignment_top\">
\t\t<a href=\"";
        // line 62
        echo site_url("assignments");
        echo "\"><span dir=\"auto\" class=\"assignment_name\">";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name")) > 30)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), 0, 30) . "...")) : ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"))), "html", null, true);
        echo "</span></a>
\t\t<ul class=\"top_menu\" id=\"select_assignment_menu\">
\t\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)), 0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment_item"]) {
            // line 65
            echo "              ";
            if ((($this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "open") == 1) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2))) {
                // line 66
                echo "\t\t\t\t<li class=\"assignment_block select_assignment\">
\t\t\t\t\t<i class=\"fa ";
                // line 67
                echo ((($this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t<span class=\"assignment_item\" dir=\"auto\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "name"), "html", null, true);
                echo "</span>
\t\t\t\t</li>
              ";
            }
            // line 71
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t<li>
\t\t\t<a href=\"";
        // line 73
        echo site_url("assignments");
        echo "\">Все соревнования</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"top_object top_left shj-spinner\" style=\"display: none;\">
\t\t<i class=\"fa fa-refresh fa-spin fa-lg\"></i>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/top_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 72,  143 => 71,  131 => 67,  128 => 66,  125 => 65,  121 => 64,  114 => 62,  111 => 61,  104 => 57,  100 => 56,  91 => 52,  89 => 51,  82 => 47,  42 => 16,  37 => 14,  25 => 8,  19 => 6,  219 => 71,  215 => 67,  212 => 66,  207 => 62,  202 => 61,  197 => 60,  192 => 51,  187 => 9,  182 => 72,  180 => 71,  175 => 68,  173 => 66,  168 => 63,  166 => 62,  162 => 61,  158 => 60,  152 => 73,  150 => 55,  148 => 54,  144 => 52,  142 => 51,  137 => 68,  127 => 42,  123 => 41,  118 => 39,  113 => 37,  109 => 36,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  70 => 21,  62 => 19,  54 => 17,  50 => 16,  44 => 13,  36 => 11,  31 => 11,  26 => 6,  117 => 39,  112 => 36,  107 => 33,  105 => 32,  101 => 31,  96 => 55,  88 => 27,  84 => 26,  80 => 24,  78 => 46,  74 => 22,  69 => 21,  66 => 20,  58 => 18,  55 => 13,  52 => 12,  46 => 17,  40 => 12,  34 => 8,  29 => 6,);
    }
}
