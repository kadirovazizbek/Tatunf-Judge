<?php

/* pages/authentication/reset_password.twig */
class __TwigTemplate_3dd6333e92c62f01e786c59e5b17dbf560ebe7228525791829bff2e91e53159c extends Twig_Template
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
        $context["title"] = "Сброс пароля";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open(("login/reset/" . (isset($context["key"]) ? $context["key"] : null)));
        echo "
\t<div class=\"box login\">

\t\t<div class=\"judge_logo\">
\t\t\t<a href=\"";
        // line 13
        echo site_url();
        echo "\"><img src=\"";
        echo base_url("assets/images/banner.png");
        echo "\"/></a>
\t\t</div>

\t\t<div class=\"login_form\">
\t\t\t<div class=\"login1\">
\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_password\">Новый пароль:</label><br/>
\t\t\t\t\t<input id=\"form_password\" type=\"password\" name=\"password\" required=\"required\" pattern=\".{6,200}\" title=\"Пароль должен содержать как минимум 6 символов\" class=\"sharif_input\"/>
\t\t\t\t\t";
        // line 21
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_password_2\">Повторите новый пароль:</label><br/>
\t\t\t\t\t<input id=\"form_password_2\" type=\"password\" name=\"password_again\" required=\"required\" pattern=\".{6,200}\" title=\"Поле Подтвердите пароль должно содержать как минимум 6 смволов\" class=\"sharif_input\"/>
\t\t\t\t\t";
        // line 27
        echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 29
        if ((isset($context["reset"]) ? $context["reset"] : null)) {
            // line 30
            echo "\t\t\t\t\t<div class=\"shj_ok\">Войдите со своим новым паролем!</div>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t</div>
\t\t\t<div class=\"login2\">
\t\t\t\t<p style=\"margin:0;\">
\t\t\t\t\t<a href=\"";
        // line 35
        echo site_url("login");
        echo "\">Войти</a>
\t\t\t\t\t<input type=\"submit\" value=\"Установить пароль\" id=\"sharif_submit\"/>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/reset_password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  66 => 32,  62 => 30,  60 => 29,  55 => 27,  46 => 21,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
