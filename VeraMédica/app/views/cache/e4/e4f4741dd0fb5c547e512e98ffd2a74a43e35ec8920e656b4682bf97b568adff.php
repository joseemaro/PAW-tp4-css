<?php

/* list.appointments.html */
class __TwigTemplate_0a1a514b1ea9f9766f2daafc74114437659d45ae98777df208c3fb7418ade0d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "list.appointments.html", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "List Appointments";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo twig_include($this->env, $context, "nav.views.html");
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "        <section>
            <h1>Listar turnos</h1>";
        // line 17
        if (($context["appointments"] ?? null)) {
            // line 18
            echo "                <table>
                    <thead>
                    <tr>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\">Hora</th>
                        <th scope=\"col\">Nombre del paciente</th>
                        <th scope=\"col\">Teléfono</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>";
        } else {
            // line 30
            echo "                <p> No hay turnos registrados hasta el momento </p>";
        }
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 34
            echo "                    <tbody>
                        <tr>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "fecha_turno", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "horario_turno", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "telefono", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"get\" id=\"show-appointment-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"view_appointment\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button class =\"table-button\" type=\"submit\" form=\"show-appointment-";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">View</button>
                                </form>
                                <form method=\"get\" id=\"edit-appointment-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"edit_appointment\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button class =\"table-button\" type=\"submit\" form=\"edit-appointment-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Edit</button>
                                </form>
                                <form method=\"get\" id=\"destroy-appointment-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"del_appointment\" onSubmit=\"return confirm('Desea eliminar el turno?');\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button class =\"table-button\" type=\"submit\" form=\"destroy-appointment-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </table>

        </section>";
    }

    public function getTemplateName()
    {
        return "list.appointments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  144 => 52,  140 => 51,  136 => 50,  131 => 48,  127 => 47,  123 => 46,  118 => 44,  114 => 43,  110 => 42,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 34,  81 => 33,  78 => 30,  65 => 18,  63 => 17,  60 => 15,  57 => 14,  51 => 10,  48 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}List Appointments{% endblock %}

{% block header %}
{{ include('nav.views.html') }}
{% endblock %}

{% block head %}
{{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">
{% endblock %}

{% block main %}
        <section>
            <h1>Listar turnos</h1>
            {% if appointments %}
                <table>
                    <thead>
                    <tr>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\">Hora</th>
                        <th scope=\"col\">Nombre del paciente</th>
                        <th scope=\"col\">Teléfono</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
            {% else %}
                <p> No hay turnos registrados hasta el momento </p>
            {% endif %}

                {% for appointment in appointments %}
                    <tbody>
                        <tr>
                            <td>{{ appointment.fecha_turno }}</td>
                            <td>{{ appointment.horario_turno }}</td>
                            <td>{{ appointment.nombre }}</td>
                            <td>{{ appointment.telefono }}</td>
                            <td>{{ appointment.email }}</td>
                            <td>
                                <form method=\"get\" id=\"show-appointment-{{ appointment.id }}\" action=\"view_appointment\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button class =\"table-button\" type=\"submit\" form=\"show-appointment-{{ appointment.id }}\">View</button>
                                </form>
                                <form method=\"get\" id=\"edit-appointment-{{ appointment.id }}\" action=\"edit_appointment\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button class =\"table-button\" type=\"submit\" form=\"edit-appointment-{{ appointment.id }}\">Edit</button>
                                </form>
                                <form method=\"get\" id=\"destroy-appointment-{{ appointment.id }}\" action=\"del_appointment\" onSubmit=\"return confirm('Desea eliminar el turno?');\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button class =\"table-button\" type=\"submit\" form=\"destroy-appointment-{{ appointment.id }}\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                {% endfor %}
            </table>

        </section>
{% endblock %}", "list.appointments.html", "C:\\Users\\josee\\Desktop\\PROGRAMACION WEB\\repos\\TRABAJO4-CSS\\PAW-tp4-css-2\\VeraMédica\\app\\views\\list.appointments.html");
    }
}
