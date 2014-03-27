<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- layout by 404 creative studios. http://www.404creative.com -->
<html>
<head>
<title>Asociaci&oacute;n Cooperativa TICAS 073</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="capacitacion, servicios, hardware, software" />
<meta name="description" content="Adiestramiento en plataformas Open Source, Servicio tecnico especializado" />
<link href="styles/boldblue1.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="container">
  <!-- begin top rounded corner styles -->
  <b class="rtop"><b class="r1"></b><b class="r2"></b> <b class="r3"></b> <b class="r4"></b></b>
  <!-- end top rounded corner styles -->
  <div id="pageHeader"><img src="images/logoticas.png" height="50"/>&nbsp;&nbsp;&nbsp;Asociaci&oacute;n Cooperativa TICAS 073</div>
<div id="divPageContent">
    <table border="0" cellpadding="5" cellspacing="0">
      <tr>
          <td valign="top" class="leftColumn">
            <div id="navcontainer">
              <ul id="navlist">
                <li><a href="index.html" id="current">Inicio</a></li>
                <!--<li><a href="construct.html">Cursos en L&iacute;nea</a></li>-->
                <li id="active"><a href="ventas.html">Ventas</a></li>
                <li><a href="soluciones.html">Soluciones</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="construct.html">Soporte</a></li>
                <li><a href="inscripciones.php">Inscripciones On-Line</a></li>
                <li><a href="contactos.html">Cont&aacute;ctenos</a></li>
              </ul>
            </div> 
            <div id="sideBarNews">
              <div id="newsHeader">Noticias</div>
              <div id="sideBarNewsContent">
                <div class="newsItem">Pr&oacute;ximos cursos de capacitaci&oacute; de nivel b&aacute;sico en la inducci&oacute;n a GNU/Linux y Herramientas de escritorio.</div>
                <div class="readNewsLink"><a href="n1.html">Leer m&aacute;s</a></div>
<!--                <div class="newsItem">A re-engineering of your current world view will reaffirm your online presence enabling a more effervescent solution.</div>
                <div class="readNewsLink"><a href="index.html">Read More</a></div>
                <div class="newsItem">A re-engineering of your current world view will reaffirm your online presence enabling a more effervescent solution.</div>
                <div class="readNewsLink"><a href="index.html">Read More</a></div>-->
              </div>
            </div>
          </td>
          <td valign="top" class="rightColumn">
            <?php
            ?>
            <p class="subHeader">Planilla de Inscripci&oacute;n</p>
            <form name="inscripcion" action="inscripciones.php" method="POST">
              <h6>Datos Personales del Alumno:</h6>
              <TABLE border="0">
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Nombres:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="nombres" id="nombres" maxlength="60" size="64" tabindex="0" title="Escribir los nombres del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Apellidos:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="apellidos" id="apellidos" maxlength="60" size="64" tabindex="1" title="Escribir los apellidos del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Cargo:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="cargo" id="cargo" maxlength="40" size="44" tabindex="2" title="Escribir el cargo del participante si proviene de una empresa">
                  </TD>
                  <TD>
                    <LABEL>&#160;</LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">C.I./Pasaporte:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="cedula_pasaporte" id="cedula_pasaporte" maxlength="15" size="18" tabindex="3" title="Debe indicar el Nro. de C&eacute;dula o el Nro. de Pasaporte del Participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Fecha Nacimiento:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="dia" id="dia" onchange="inscripcion.submit();" title="Seleccione el d&iacute;a de nacimiento">
                      <OPTION value="0"></OPTION>
                      <?php
                      for ($i=1;$i<=31;$i++) {
                        print "<OPTION value='$i'>$i</OPTION>";
                      }
                      ?>
                    </SELECT>
                    <LABEL>&#160;-&#160;</LABEL>
                    <SELECT name="mes" id="mes" onchange="inscripcion.submit();" title="Seleccione el mes de nacimiento">
                      <OPTION value="0"></OPTION>
                      <OPTION value="1">Enero</OPTION>
                      <OPTION value="2">Febrero</OPTION>
                      <OPTION value="3">Marzo</OPTION>
                      <OPTION value="4">Abril</OPTION>
                      <OPTION value="5">Mayo</OPTION>
                      <OPTION value="6">Junio</OPTION>
                      <OPTION value="7">Julio</OPTION>
                      <OPTION value="8">Agosto</OPTION>
                      <OPTION value="9">Septiembre</OPTION>
                      <OPTION value="10">Octubre</OPTION>
                      <OPTION value="11">Noviembre</OPTION>
                      <OPTION value="12">Diciembre</OPTION>
                    </SELECT>
                    <LABEL>&#160;-&#160;</LABEL>
                    <SELECT name="anno" id="anno" onchange="inscripcion.submit();" title="Seleccione el d&iacute;a de nacimiento">
                      <OPTION value="0"></OPTION>
                      <?php
                      for ($i=1940;$i<=date("Y");$i++) {
                        print "<OPTION value='$i'>$i</OPTION>";
                      }
                      ?>
                    </SELECT>
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Estado Civil:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="estado_civil" id="estado_civil" onchange="inscripcion.submit();" title="Seleccione el estado civil del participante">
                      <OPTION value="0"></OPTION>
                      <OPTION value="S">Soltero</OPTION>
                      <OPTION value="C">Casado</OPTION>
                      <OPTION value="D">Divorciado</OPTION>
                      <OPTION value="V">Viudo</OPTION>
                    </SELECT>
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Sexo:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <LABEL>Masculino</LABEL><input type="radio" name="sexo" value="M" title="Seleccione el sexo del participante"/>&#160;<LABEL>Femenino</LABEL><input type="radio" name="sexo" value="F" title="Seleccione el sexo del participante"/>
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Direcci&oacute;n:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="direccion1" id="direccion1" maxlength="60" size="64" tabindex="4" title="Especificar una direcci&oacute;n del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="direccion2" id="direccion2" maxlength="60" size="64" tabindex="5" title="Especificar una direcci&oacute;n del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="direccion3" id="direccion3" maxlength="60" size="64" tabindex="6" title="Especificar una direcci&oacute;n del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Estado:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="estado" id="estado" onchange="inscripcion.submit();" tabindex="7" title="Seleccione el Estado de donde proviene el participante">
                      <OPTION value="0">&#160;</OPTION>
                      <OPTION value="1">Amazonas</OPTION>
                      <OPTION value="2">Anzo&aacute;tegui</OPTION>
                      <OPTION value="3">Apure</OPTION>
                      <OPTION value="4">Aragua</OPTION>
                      <OPTION value="5">Barinas</OPTION>
                      <OPTION value="6">Bolivar</OPTION>
                      <OPTION value="7">Carabobo</OPTION>
                      <OPTION value="8">Cojedes</OPTION>
                      <OPTION value="9">Delta Amacuro</OPTION>
                      <OPTION value="10">Distrito Capital</OPTION>
                      <OPTION value="11">Falc&oacute;n</OPTION>
                      <OPTION value="12">Gu&aacute;rico</OPTION>
                      <OPTION value="13">Lara</OPTION>
                      <OPTION value="14">M&eacute;rida</OPTION>
                      <OPTION value="15">Miranda</OPTION>
                      <OPTION value="16">Monagas</OPTION>
                      <OPTION value="17">Nueva Esparta</OPTION>
                      <OPTION value="18">Portuguesa</OPTION>
                      <OPTION value="19">Sucre</OPTION>
                      <OPTION value="20">T&aacute;chira</OPTION>
                      <OPTION value="21">Trujillo</OPTION>
                      <OPTION value="22">Vargas</OPTION>
                      <OPTION value="23">Yaracuy</OPTION>
                      <OPTION value="24">Zulia</OPTION>
                    </SELECT>
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Ciudad:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="ciudad" id="ciudad" onchange="inscripcion.submit();" tabindex="8" title="Seleccione la ciudad de donde proviene el participante">
                      <OPTION value="0">&#160;</OPTION>
                    </SELECT>
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">C&oacute;digo Postal:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="codigo_postal" id="codigo_postal" maxlength="5" size="8" tabindex="9" title="Indique el c&oacute;digo postal del participante">
                  </TD>
                  <TD>
                    <LABEL>&#160;</LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Telef&oacute;no:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="codigo_area" id="codigo_area" maxlength="4" size="6" tabindex="10" title="Indique el c&oacute;digo de &aacute;rea">
                    <LABEL>&#160;-&#160;</LABEL>
                    <INPUT name="telefono" id="telefono" maxlength="7" size="9" tabindex="11" title="Indique el telef&oacute;no">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Fax:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="codigo_area_fax" id="codigo_area_fax" maxlength="4" size="6" tabindex="12" title="Indique el c&oacute;digo de &aacute;rea">
                    <LABEL>&#160;-&#160;</LABEL>
                    <INPUT name="fax" id="fax" maxlength="7" size="9" tabindex="13" title="Indique el n&uacute;mero de fax">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Correo Electr&oacute;nico:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="email" id="email" maxlength="50" size="54" tabindex="14" title="Indique el correo electr&oacute;nico del participante">
                  </TD>
                  <TD>
                    <LABEL><FONT color="Red" style="bold">*</FONT></LABEL>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Correo Electr&oacute;nico Alternativo:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="email_alt" id="email_alt" maxlength="50" size="54" tabindex="15" title="Indique el correo electr&oacute;nico alternativo del participante">
                  </TD>
                  <TD>
                    <LABEL>&#160;</LABEL>
                  </TD>
                </TR>
              </TABLE>
              <h6>Datos de la Empresa (solo para inscripciones de empresas):</h6>
              <TABLE>
                <tr>
                  <td>
                    <label>Empresa:&#160;</label>
                  </td>
                  <td>
                    <input name="empresa" id="empresa" maxlength="60" size="64" title="Indique el nombre de la empresa" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Tipo:&#160;</label>
                  </td>
                  <td>
                    <label>C.A.</label>
                    <input type="radio" name="tipo" id="tipo" title="Compa&ntilde;ia An&oacute;nima" value="C.A." />
                    <label>S.A.</label>
                    <input type="radio" name="tipo" id="tipo" title="Sociedad An&oacute;nima" value="S.A." />
                    <label>S.R.L.</label>
                    <input type="radio" name="tipo" id="tipo" title="Sociedad de Responsabilidad Limitada" value="S.R.L." />
                    <label>R.L.</label>
                    <input type="radio" name="tipo" id="tipo" title="Responsabilidad Limitada (Cooperativas)" value="R.L." />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>R.I.F.:&#160;</label>
                  </td>
                  <td>
                    <input type="text" name="rif1" id="rif1" maxlength="1" size="2" title="Persona Jur&iacute;dica o Natural" />
                    <label>&#160;-&#160;</label>
                    <input type="text" name="rif2" id="rif2" maxlength="8" size="10" title="N&uacute;mero de registro fiscal" />
                    <label>&#160;-&#160;</label>
                    <input type="text" name="rif3" id="rif3" maxlength="1" size="2" title="N&uacute;mero de registro fiscal" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>N.I.T.:&#160;</label>
                  </td>
                  <td>
                    <input type="text" name="nit" id="nit" maxlength="20" size="22" title="N&uacute;mero de Identificaci&oacute;n Fiscal" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Actividad:&#160;</label>
                  </td>
                  <td>
                    <input type="text" name="actividad" id="actividad" maxlength="100" size="64" title="Actividad a la que se dedica la empresa" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Nro. de Empleados:&#160;</label>
                  </td>
                  <td>
                    <select name="nro_empleados" id="nro_empleados" onchange="inscripcion.submit();" title="N&uacute;mero de empleados que laboran en la empresa">
                    <option value="0"></option>
                    <option value="1-5">1-5</option>
                    <option value="6-10">6-10</option>
                    <option value="11-20">11-20</option>
                    <option value="20-30">20-30</option>
                    <option value="20mas">20 y M&aacute;s</option>
                    </select>
                  </td>
                </tr>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Direcci&oacute;n:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_direccion1" id="empre_direccion1" maxlength="60" size="64" tabindex="4" title="Especificar una direcci&oacute;n de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_direccion2" id="empre_direccion2" maxlength="60" size="64" tabindex="5" title="Especificar una direcci&oacute;n de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_direccion3" id="empre_direccion3" maxlength="60" size="64" tabindex="6" title="Especificar una direcci&oacute;n de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Estado:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="empre_estado" id="empre_estado" onchange="inscripcion.submit();" tabindex="7" title="Seleccione el Estado de donde proviene la empresa">
                      <OPTION value="0">&#160;</OPTION>
                      <OPTION value="1">Amazonas</OPTION>
                      <OPTION value="2">Anzo&aacute;tegui</OPTION>
                      <OPTION value="3">Apure</OPTION>
                      <OPTION value="4">Aragua</OPTION>
                      <OPTION value="5">Barinas</OPTION>
                      <OPTION value="6">Bolivar</OPTION>
                      <OPTION value="7">Carabobo</OPTION>
                      <OPTION value="8">Cojedes</OPTION>
                      <OPTION value="9">Delta Amacuro</OPTION>
                      <OPTION value="10">Distrito Capital</OPTION>
                      <OPTION value="11">Falc&oacute;n</OPTION>
                      <OPTION value="12">Gu&aacute;rico</OPTION>
                      <OPTION value="13">Lara</OPTION>
                      <OPTION value="14">M&eacute;rida</OPTION>
                      <OPTION value="15">Miranda</OPTION>
                      <OPTION value="16">Monagas</OPTION>
                      <OPTION value="17">Nueva Esparta</OPTION>
                      <OPTION value="18">Portuguesa</OPTION>
                      <OPTION value="19">Sucre</OPTION>
                      <OPTION value="20">T&aacute;chira</OPTION>
                      <OPTION value="21">Trujillo</OPTION>
                      <OPTION value="22">Vargas</OPTION>
                      <OPTION value="23">Yaracuy</OPTION>
                      <OPTION value="24">Zulia</OPTION>
                    </SELECT>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Ciudad:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <SELECT name="empre_ciudad" id="empre_ciudad" onchange="inscripcion.submit();" tabindex="8" title="Seleccione la ciudad de donde proviene la empresa">
                      <OPTION value="0">&#160;</OPTION>
                    </SELECT>
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">C&oacute;digo Postal:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_codigo_postal" id="empre_codigo_postal" maxlength="5" size="8" tabindex="9" title="Indique el c&oacute;digo postal de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Telef&oacute;no:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_codigo_area" id="empre_codigo_area" maxlength="4" size="6" tabindex="10" title="Indique el c&oacute;digo de &aacute;rea">
                    <LABEL>&#160;-&#160;</LABEL>
                    <INPUT name="empre_telefono" id="empre_telefono" maxlength="7" size="9" tabindex="11" title="Indique el telef&oacute;no">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Fax:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_codigo_area_fax" id="empre_codigo_area_fax" maxlength="4" size="6" tabindex="12" title="Indique el c&oacute;digo de &aacute;rea">
                    <LABEL>&#160;-&#160;</LABEL>
                    <INPUT name="empre_fax" id="empre_fax" maxlength="7" size="9" tabindex="13" title="Indique el n&uacute;mero de fax">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Correo Electr&oacute;nico:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="empre_email" id="empre_email" maxlength="50" size="54" tabindex="14" title="Indique el correo electr&oacute;nico de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">URL:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="url" id="url" maxlength="50" size="54" tabindex="14" title="Indique la direcci&oacute;n del sitio Web de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Responsable:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="responsable" id="responsable" maxlength="50" size="54" tabindex="14" title="Indique el nombre del responsable por parte de la empresa">
                  </TD>
                </TR>
                <TR>
                  <TD>
                    <LABEL><FONT style="bold">Correo Electr&oacute;nico del Responsable:&#160;</FONT></LABEL>
                  </TD>
                  <TD>
                    <INPUT name="responsable_email" id="responsable_email" maxlength="50" size="54" tabindex="14" title="Indique el correo electr&oacute;nico del responsable por la empresa">
                  </TD>
                </TR>
              </TABLE>
              <h6>Inscripci&oacute;n del Curso</h6>
              <table>
                <tr>
                  <td>
                    <label>Categor&iacute;a:&#160;</label>
                  </td>
                  <td>
                    <select name="categoria" id="categoria" onchange="inscripcion.submit();" title="categor&iacute;a a la cual pertenece el curso">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Curso:&#160;</label>
                  </td>
                  <td>
                    <select name="curso" id="curso" onchange="inscripcion.submit();" title="curso al cual inscribir al participante">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Fecha:&#160;</label>
                  </td>
                  <td>
                    <select name="fecha" id="fecha" onchange="inscripcion.submit();" title="fecha programada para el curso">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Horario:&#160;</label>
                  </td>
                  <td>
                    <select name="horario" id="horario" onchange="inscripcion.submit();" title="horario programado para el curso el curso">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Facturar a:&#160;</label>
                  </td>
                  <td>
                    <label>Particular&#160;</label>
                    <input type="radio" name="facturar" id="facturar" title="Facturar a particular" value="P" />
                    <label>Empresa&#160;</label>
                    <input type="radio" name="facturar" id="facturar" title="Facturar a empresa" value="E" />
                  </td>
                </tr>
              </table>
              <h6>Registro de Pago</h6>
              <table>
                <tr>
                  <td>
                    <label>Banco:&#160;</label>
                  </td>
                  <td>
                    <select name="banco" id="banco" onchange="inscripcion.submit();" title="Banco donde se encuentra la cuenta de la cooperativa">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Cuenta:&#160;</label>
                  </td>
                  <td>
                    <select name="cuenta" id="cuenta" onchange="inscripcion.submit();" title="Nro. de cuenta de la cooperativa">
                      <option value="0"></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Nro. Voucher:&#160;</label>
                  </td>
                  <td>
                    <input type='text' name="voucher" id="voucher" maxlength="20" size="20" title="N&uacute;mero del voucher correspondiente al dep&oacute;sito realizado" />
                  </td>
                </tr>
              </table>
              <table>
                <tr><td>&#160;</td></tr>
                <tr><td>&#160;</td></tr>
                <tr>
                  <td align="center">
                    <input type="submit" name="enviar" id='enviar' title="enviar datos" value="enviar" />
                  </td>
                  <td align="center">
                    <input type="reset" name="borrar" id='borrar' title="borrar datos del formulario" value="borrar" />
                  </td>
                </tr>
              </table>
            </form>
          </td>
      </tr>
    </table>
  </div>
  <div id="divBaseLinks"><a href="index.html">Inicio</a> | <a href="mapadelsitio.html">Mapa del Sitio</a></div>
  <!-- begin bottom rounded corner styles -->
  <b class="rbottom"><b class="r4"></b> <b class="r3"></b> <b class="r2"></b> <b class="r1"></b></b>
  <!-- end bottom rounded corner styles -->
</div> 
<div class="spacer">&nbsp;</div>
</body>
</html>