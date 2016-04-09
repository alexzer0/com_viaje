<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->msg; ?></h1>

<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->msg; ?></h1>


<form method="post" name="miform" action="procesa-medida.php">
<table align="center" style="border-top:2px solid #4B5C17;border-bottom:2px solid #4B5C17;border-right:2px solid #4B5C17;border-left:2px solid #4B5C17;background-color:#D3D7B7;" width="60%" cellpadding="1" cellspacing="1">
	<tr>
		<td colspan="2" align="center" bgcolor="#4B5C17" class="titulo Estilo1">Fait ton Propre Circuit</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Noms:</div></td>
		<td><input name="txt-nombres" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Prénom:</div></td>
		<td><input name="txt-apellidos" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Sexe:</div></td>
		<td>
		<input name="rdbSexo" type="radio" value="Masculino" checked="checked">M
		<input name="rdbSexo" type="radio" value="Femenino" />F
		</td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">E-mail:</div></td>
		<td><input name="txt-mail" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Pays de Procedence:</div></td>
		<td><input name="txt-pais" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido">
		  <div align="left"><strong>Nombre de Perssonnes qui voyagent:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Enfantes</div></td>
		<td><input name="txt-ninos" type="text" class="inputbox" size="5"></td>
	</tr>
	<tr>		
		<td width="150px"><div class="contenido">Adultes</div></td>
		<td><input name="txt-adultos" type="text" class="inputbox" size="5"></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido" align="center">
		  <div align="left"><strong>Je voudrais visiter:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Perou:</div></td>
		<td><select name="peru" class="inputbox">
		<option>Lima</option>
		<option>Ica</option>
		<option>Nazca</option>
		<option>Arequipa</option>
		<option>Puno</option>
		<option>Cusco</option>
		<option>Ayacucho</option>
		<option>Puerto Maldona</option>
		<option>La Libertad</option>
		<option>Lambayeque</option>
		<option>Piura</option>
		<option>Tumbes</option>
		<option>Tacna</option>
		</select></td>
	</tr>	
	<tr>
		<td width="150px"><div class="contenido">Bolivie:</div></td>
		<td><select name="bolivia" class="inputbox">
		<option>La Paz</option>
		<option>Pando</option>
		<option>Santa Cruz</option>
		<option>Potosí</option>
		<option>Beni</option>
		<option>Cochabamba</option>
		<option>Oruro</option>
		<option>Tarija</option>
		<option>La Libertad</option>
		<option>Chuquisaca</option>
		</select></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Équateur :</div></td>
		<td><select name="ecuador" class="inputbox">
		<option>Azuay</option>
		<option>Guayas</option>
		<option>Salinas</option>
		<option>Bolivar</option>
		<option>Cotapaxi</option>
		<option>Chimborazo</option>
		<option>Loja</option>
		<option>Esmeralda</option>
		<option>Galapagos</option>
		<option>El Oro</option>
		</select></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Hôtels:</div></td>
		<td><select name="hoteles" class="inputbox">
		<option>Seleccionar hoteles...</option>
		<option>5* Deluxe</option>
		<option>4* First Class</option>
		<option>3* Superior</option>
		<option>2* Standard</option>
		</select></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Transportation:</div></td>
		<td><select name="transporte" class="inputbox">
		<option>Aereo</option>
		<option>Bus</option>
		<option>Ambos</option>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido" align="center">
		  <div align="left"><strong>Durée du Voyage:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px">Date d' Arrivée:</td>
		<td>
		<input name="txtfinicio" type="text" class="texcalendario" size="9" readonly="false">
		<a href="#" onClick="if(oDP)oDP.open(miform.txtfinicio);return false;">
		<img src="../images/calendario.gif" border="0" alt="Calendario"></a>
		</td>
	</tr>
	<tr>
		<td width="150px">Date du Retour ou départ:</td>
		<td>
		<input name="txtfsalida" type="text" class="texcalendario" size="9" readonly="false">
		<a href="#" onClick="if(oDP)oDP.open(miform.txtfsalida);return false;">
		<img src="../images/calendario.gif" border="0" alt="Calendario"></a>
		</td>
	</tr>
	<tr>
		<td width="150px">Langue:</td>
		<td><select name="idioma" class="inputbox">
		<option>Anglais</option>
		<option>France</option>
		<option>Allemand</option>
		<option>Ruse</option>		
		<option>Japon</option>
		<option>Italie</option>
		</select></td>
	</tr>
	<tr>
		<td>Autre Service:</td>
		<td><textarea name="otros" cols="35" rows="5" class="inputbox"></textarea></td>
	</tr>
	<tr>
		<td>Consultations & Suggestions:</td>
		<td><textarea name="consultas" cols="35" rows="5" class="inputbox"></textarea></td>
	</tr> 
	<tr>
		<td><div align="left">
		<input name="btnLimpiar" type="reset" value="Pour nettoyer" class="boton">
		</div></td>
		<td><div align="right">
		<input name="btnEnviar" type="submit" value="Pour envoyer" class="boton">
		</div></td>
	</tr>				
</table>		  
</form> 