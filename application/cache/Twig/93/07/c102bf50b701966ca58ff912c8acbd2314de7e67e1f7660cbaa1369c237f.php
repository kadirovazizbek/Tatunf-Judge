<?php

/* templates/side_bar.twig */
class __TwigTemplate_9307c102bf50b701966ca58ff912c8acbd2314de7e67e1f7660cbaa1369c237f extends Twig_Template
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
        echo "<div id=\"side_bar\" class=\"sidebar_open\">
\t<ul>
\t\t<li class=\"color-dashboard";
        // line 8
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "dashboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 9
        echo site_url("dashboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-dashboard fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Главная панель</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") == 3)) {
            // line 15
            echo "\t\t<li class=\"color-settings";
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "settings")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 16
            echo site_url("settings");
            echo "\">
\t\t\t\t<i class=\"fa fa-gear fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Настройки</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-users";
            // line 21
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "users")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 22
            echo site_url("users");
            echo "\">
\t\t\t\t<i class=\"fa fa-users fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Пользователи</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 28
        echo "\t\t<li class=\"color-notifications";
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "notifications")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 29
        echo site_url("notifications");
        echo "\">
\t\t\t\t<i class=\"fa fa-bell fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Уведомления</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-assignments";
        // line 34
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "assignments")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 35
        echo site_url("assignments");
        echo "\">
\t\t\t\t<i class=\"fa fa-folder-open fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Соревнования</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-problems";
        // line 40
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "problems")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 41
        echo site_url("problems");
        echo "\">
\t\t\t\t<i class=\"fa fa-puzzle-piece fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Задачи</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-submit";
        // line 46
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "submit")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 47
        echo site_url("submit");
        echo "\">
\t\t\t\t<i class=\"fa fa-location-arrow fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Отправить</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-final_submissions";
        // line 52
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "final_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 53
        echo site_url("submissions/final");
        echo "\">
\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Послед. попытки</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-all_submissions";
        // line 58
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "all_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 59
        echo site_url("submissions/all");
        echo "\">
\t\t\t\t<i class=\"fa fa-bars fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Все попытки</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-scoreboard";
        // line 64
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "scoreboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 65
        echo site_url("scoreboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-star fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Монитор</span>
\t\t\t</a>
\t\t</li>
\t</ul>
\t<div id=\"sidebar_bottom\">
\t\t<div style=\"display:none\">
\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge\" target=\"_blank\">&copy; Sharif Judge ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["SHJ_VERSION"]) ? $context["SHJ_VERSION"] : null), "html", null, true);
        echo "</a>
\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge/tree/docs\" target=\"_blank\">Docs</a>
\t\t</div>
\t\t<p class=\"timer\"></p>
\t\t<div id=\"shj_collapse\" class=\"pointer\">
\t\t\t<i id=\"collapse\" class=\"fa fa-caret-square-o-left fa-lg\"></i><span class=\"sidebar_text\">Свернуть меню</span>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "templates/side_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 73,  140 => 65,  136 => 64,  124 => 58,  116 => 53,  76 => 34,  68 => 29,  63 => 28,  35 => 14,  27 => 9,  23 => 8,  149 => 72,  143 => 71,  131 => 67,  128 => 59,  125 => 65,  121 => 64,  114 => 62,  111 => 61,  104 => 47,  100 => 46,  91 => 52,  89 => 51,  82 => 47,  42 => 16,  37 => 15,  25 => 8,  19 => 6,  219 => 71,  215 => 67,  212 => 66,  207 => 62,  202 => 61,  197 => 60,  192 => 51,  187 => 9,  182 => 72,  180 => 71,  175 => 68,  173 => 66,  168 => 63,  166 => 62,  162 => 61,  158 => 60,  152 => 73,  150 => 55,  148 => 54,  144 => 52,  142 => 51,  137 => 68,  127 => 42,  123 => 41,  118 => 39,  113 => 37,  109 => 36,  92 => 41,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  70 => 21,  62 => 19,  54 => 22,  50 => 21,  44 => 13,  36 => 11,  31 => 11,  26 => 6,  117 => 39,  112 => 52,  107 => 33,  105 => 32,  101 => 31,  96 => 55,  88 => 40,  84 => 26,  80 => 35,  78 => 46,  74 => 22,  69 => 21,  66 => 20,  58 => 18,  55 => 13,  52 => 12,  46 => 17,  40 => 12,  34 => 8,  29 => 6,);
    }
}
