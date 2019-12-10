<?php

/* pages/notifications.twig */
class __TwigTemplate_92e74a01dd936ae5e0f7063c15650542bcc49f1e37c616592c8df3a098213775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'title_menu' => array($this, 'block_title_menu'),
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
        $context["selected"] = "notifications";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-bell";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Notifications";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Notifications";
    }

    // line 12
    public function block_title_menu($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 14
            echo "\t<span class=\"title_menu_item\"><a href=\"";
            echo site_url("notifications/add");
            echo "\"><i class=\"fa fa-plus color10\"></i> New</a></span>
\t";
        }
    }

    // line 20
    public function block_main_content($context, array $blocks = array())
    {
        // line 21
        echo "<script type=\"text/javascript\" src=\"";
        echo base_url("assets/fancybox2/jquery.fancybox.min.js");
        echo "\"></script>
<link href=\"";
        // line 22
        echo base_url("assets/fancybox2/jquery.fancybox.min.css");
        echo "\" rel=\"stylesheet\"/>
";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) == 0)) {
            // line 24
            echo "<p style=\"text-align: center;\">Nothing yet...</p>
";
        }
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 27
            echo "\t<div class=\"notif\" id=\"number";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\">
\t\t<div class=\"notif_title\" dir=\"auto\">
\t\t\t<span class=\"anchor ttl_n\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "title"), "html", null, true);
            echo "</span>
\t\t\t<div class=\"notif_meta\">
\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "time"), "html", null, true);
            echo "
\t\t\t\t";
            // line 32
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 33
                echo "\t\t\t\t\t<span class=\"anchor edt_n\">Edit</span>
\t\t\t\t\t<span class=\"anchor del_n\">Delete</span>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"notif_text\" dir=\"auto\">
\t\t\t";
            // line 39
            echo $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "text");
            echo "
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "pages/notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  112 => 36,  107 => 33,  105 => 32,  101 => 31,  96 => 29,  88 => 27,  84 => 26,  80 => 24,  78 => 23,  74 => 22,  69 => 21,  66 => 20,  58 => 14,  55 => 13,  52 => 12,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
