<?php

/* new.appointment.html */
class __TwigTemplate_fb35da9291616cb04be385b5372cca6c328ebe53f8b14bc767e530821b3278b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "new.appointment.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_title($context, array $blocks = array())
    {
        echo "New Appointment";
    }

    public function block_header($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "nav.views.html");
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\">";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
<form class=\"general-form\" action=\"/save_appointment\" method=\"post\" enctype=\"multipart/form-data\">
    <label><b>Nombre: (*)</b><input type=\"text\" name=\"nombre\" required></label><br>
    <label><b>Email: (*)</b><input type=\"email\" name=\"email\" required></label><br>
    <label><b>Telefono: (*)</b><input type=\"tel\" name=\"telefono\" required></label><br>
    <label><b>Edad:</b><input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\"></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" maxlength=\"2\"></label><br>
    <label><b>Altura: </b><input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value=\"150\" list=\"tickmarks\">
            <datalist id=\"tickmarks\">
                <option value=\"100\" label=\"1mts\">
                <option value=\"110\">
                <option value=\"120\">
                <option value=\"130\">
                <option value=\"140\">
                <option value=\"150\" label=\"1,50\">
                <option value=\"160\">
                <option value=\"170\">
                <option value=\"180\">
                <option value=\"190\">
                <option value=\"200\" label=\"2mts\">
            </datalist></label><br>
    <label><b>Fecha de nacimiento: (*)</b><input type=\"date\" name=\"fecha_nacimiento\" required></label><br>
    <label><b>Color de pelo: </b><select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select></label><br>
    <label><b>Fecha de turno: (*)</b><input type=\"date\" name=\"fecha_turno\" required></label><br>
    <label><b>Horario de turno(hh:min): (*)</b> <input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" required></label><br>
    <label><b>Diagnostico </b><input type=\"file\" name=\"diagnostico\" accept=\"image/jpeg, image/x-png, image/x-jpg\"></label><br>

    <input type=\"submit\" value=\"Enviar\" />
    <input type=\"reset\" value=\"Limpiar\" />
</form>
<p> Los campos marcados como (*) son obligatorios </p>";
    }

    public function getTemplateName()
    {
        return "new.appointment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  55 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %} {% block title %}New Appointment{% endblock %} {% block header %} {{ include('nav.views.html') }}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\"> {% endblock %} {% block head %} {{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\"> {% endblock %} {% block main %}

<form class=\"general-form\" action=\"/save_appointment\" method=\"post\" enctype=\"multipart/form-data\">
    <label><b>Nombre: (*)</b><input type=\"text\" name=\"nombre\" required></label><br>
    <label><b>Email: (*)</b><input type=\"email\" name=\"email\" required></label><br>
    <label><b>Telefono: (*)</b><input type=\"tel\" name=\"telefono\" required></label><br>
    <label><b>Edad:</b><input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\"></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" maxlength=\"2\"></label><br>
    <label><b>Altura: </b><input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value=\"150\" list=\"tickmarks\">
            <datalist id=\"tickmarks\">
                <option value=\"100\" label=\"1mts\">
                <option value=\"110\">
                <option value=\"120\">
                <option value=\"130\">
                <option value=\"140\">
                <option value=\"150\" label=\"1,50\">
                <option value=\"160\">
                <option value=\"170\">
                <option value=\"180\">
                <option value=\"190\">
                <option value=\"200\" label=\"2mts\">
            </datalist></label><br>
    <label><b>Fecha de nacimiento: (*)</b><input type=\"date\" name=\"fecha_nacimiento\" required></label><br>
    <label><b>Color de pelo: </b><select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select></label><br>
    <label><b>Fecha de turno: (*)</b><input type=\"date\" name=\"fecha_turno\" required></label><br>
    <label><b>Horario de turno(hh:min): (*)</b> <input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" required></label><br>
    <label><b>Diagnostico </b><input type=\"file\" name=\"diagnostico\" accept=\"image/jpeg, image/x-png, image/x-jpg\"></label><br>

    <input type=\"submit\" value=\"Enviar\" />
    <input type=\"reset\" value=\"Limpiar\" />
</form>
<p> Los campos marcados como (*) son obligatorios </p>
{% endblock %}", "new.appointment.html", "C:\\Users\\josee\\Desktop\\PROGRAMACION WEB\\repos\\TRABAJO4-CSS\\PAW-tp4-css-2\\VeraMédica\\app\\views\\new.appointment.html");
    }
}
