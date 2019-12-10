<?php

/* pages/authentication/login.twig */
class __TwigTemplate_29fd4b61dab89d4158cb45a83989ac1bc02dcbcefe8517a3d5d2811af03a6eb9 extends Twig_Template
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
        $context["title"] = "Вход";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open();
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
\t\t\t\t\t<label for=\"form_username\">Логин</label><br/>
\t\t\t\t\t<input id=\"form_username\" type=\"text\" name=\"username\" required=\"required\" pattern=\"[0-9a-zA-Z]{3,20}\" title=\"Поле Логин должно содержать от 3 до 20 символов, и содержать только символы в нижнем регистре и цифры\" class=\"sharif_input\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" autofocus=\"autofocus\"/>
\t\t\t\t\t";
        // line 21
        echo form_error("username", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_password\">Пароль</label><br/>
\t\t\t\t\t<input id=\"form_password\" type=\"password\" name=\"password\" required=\"required\" pattern=\".{6,200}\" title=\"Пароль должен содержать как минимум 6 символов\" class=\"sharif_input\"/>
\t\t\t\t\t";
        // line 26
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 29
            echo "\t\t\t\t\t<div class=\"shj_error\">Некорректный логин или пароль.</div>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t\t<div class=\"login2\">
\t\t\t\t<p style=\"margin:0;\">
\t\t\t\t\t";
        // line 34
        if ((isset($context["registration_enabled"]) ? $context["registration_enabled"] : null)) {
            // line 35
            echo "\t\t\t\t\t<a href=\"";
            echo site_url("register");
            echo "\">Регистрация</a> |
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t<a href=\"";
        echo site_url("login/lost");
        echo "\">Сброс пароля</a>
\t\t\t\t\t<input type=\"submit\" value=\"Войти\" id=\"sharif_submit\"/>
\t\t\t\t</p>
\t\t\t</div>
            <p style=\"text-align:center\">Разработано на основе Sharif Judge А.Кадыровым</p>
\t\t</div>

\t</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  75 => 35,  73 => 34,  68 => 31,  64 => 29,  62 => 28,  57 => 26,  49 => 21,  45 => 20,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
