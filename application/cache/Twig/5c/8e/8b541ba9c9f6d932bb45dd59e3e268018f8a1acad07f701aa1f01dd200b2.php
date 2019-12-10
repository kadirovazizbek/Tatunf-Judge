<?php

/* pages/scoreboard.twig */
class __TwigTemplate_5c8e8b541ba9c9f6d932bb45dd59e3e268018f8a1acad07f701aa1f01dd200b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
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
        $context["selected"] = "scoreboard";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-star";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Мониторинг рейтинга";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Мониторинг рейтинга";
    }

    // line 14
    public function block_main_content($context, array $blocks = array())
    {
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id") == 0)) {
            // line 16
            echo "<p>Вы не выбрали соревнование. <a href=\"/assignments\">Выбрать</a></p>
";
        } elseif ((!$this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "scoreboard"))) {
            // line 18
            echo "<p>Мониторинг отключен администратором.</p>
";
        } else {
            // line 20
            echo "\t<p hidden>Мониторинг рейтинга для <span dir=\"auto\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), "html", null, true);
            echo "</span></p>
\t";
            // line 21
            echo (isset($context["scoreboard"]) ? $context["scoreboard"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "pages/scoreboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  64 => 20,  60 => 18,  56 => 16,  54 => 15,  51 => 14,  45 => 10,  39 => 9,  33 => 8,  28 => 6,);
    }
}
