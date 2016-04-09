<form method="post" name="miform" id="miform" action="procesar-medida.php">
<table align="center" style="border-top:2px solid #4B5C17;border-bottom:2px solid #4B5C17;border-right:2px solid #4B5C17;border-left:2px solid #4B5C17;background-color:#D3D7B7;" width="60%" cellpadding="1" cellspacing="1">
	<tr>
		<td colspan="2" align="center" bgcolor="#4B5C17" class="titulo Estilo1">Turismo a la Medida</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Nombres:</div></td>
		<td><input name="txt-nombres" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Apellidos:</div></td>
		<td><input name="txt-apellidos" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Sexo:</div></td>
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
		<td width="150px"><div class="contenido">Pais de procedencia:</div></td>
		<td><input name="txt-pais" type="text" class="inputbox"></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido">
		  <div align="left"><strong>Número de Viajeros:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Niños</div></td>
		<td><input name="txt-ninos" type="text" class="inputbox" size="5"></td>
	</tr>
	<tr>		
		<td width="150px"><div class="contenido">Adultos</div></td>
		<td><input name="txt-adultos" type="text" class="inputbox" size="5"></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido" align="center">
		  <div align="left"><strong>Me Gustaría Visitar:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Perú:</div></td>
		<td><select name="peru" class="inputbox">
		<option>Seleccionar destino...</option>
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
		<td width="150px"><div class="contenido">Bolivia:</div></td>
		<td><select name="bolivia" class="inputbox">
		<option>Seleccionar destino...</option>
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
		<td width="150px"><div class="contenido">Ecuador:</div></td>
		<td><select name="ecuador" class="inputbox">
		<option>Seleccionar destino...</option>
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
		<td colspan="2"><div class="contenido" align="center">
		  <div align="left">Me Gustaría Hospedar en</div>
		</div></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Hoteles:</div></td>
		<td><select name="hoteles" class="inputbox">
		<option>Seleccionar hoteles...</option>
		<option>5* Deluxe</option>
		<option>4* First Class</option>
		<option>3* Superior</option>
		<option>2* Standard</option>
		</select></td>
	</tr>
	<tr>
		<td width="150px"><div class="contenido">Transporte:</div></td>
		<td><select name="transporte" class="inputbox">
		<option>Seleccionar transporte...</option>
		<option>Aereo</option>
		<option>Bus</option>
		<option>Ambos</option>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><div class="contenido" align="center">
		  <div align="left"><strong>Duración de Viaje:</strong></div>
		</div></td>
	</tr>
	<tr>
		<td width="150px">Fecha de Llegada:</td>
		<td>
		<input name="txtfinicio" type="text" class="texcalendario" size="9" readonly="false">
		<a href="#" onClick="if(oDP)oDP.open(miform.txtfinicio);return false;">
		<img src="../images/calendario.gif" border="0" alt="Calendario"></a>
		</td>
	</tr>
	<tr>
		<td width="150px">Fecha de Salida:</td>
		<td>
		<input name="txtfsalida" type="text" class="texcalendario" size="9" readonly="false">
		<a href="#" onClick="if(oDP)oDP.open(miform.txtfsalida);return false;">
		<img src="../images/calendario.gif" border="0" alt="Calendario"></a>
		</td>
	</tr>
	<tr>
		<td width="150px">Idioma:</td>
		<td><select name="idioma" class="inputbox">
		<option>Seleccionar idioma...</option>
		<option>Ingles</option>
		<option>Francés</option>
		<option>Aleman</option>
		<option>Ruso</option>		
		<option>Japonés</option>
		<option>Italiano</option>
		</select></td>
	</tr>
	<tr>
		<td>Otros Servicios:</td>
		<td><textarea name="otros" cols="35" rows="5" class="inputbox"></textarea></td>
	</tr>
	<tr>
		<td>Consultas y Sugerencias:</td>
		<td><textarea name="consultas" cols="35" rows="5" class="inputbox"></textarea></td>
	</tr>
	<tr>
		<td>
		  <div align="left">
		    <input name="btnLimpiar" type="reset" value="Limpiar" class="boton">
		    </div></td><td><div align="right">
		      <input name="btnEnviar" type="reset" value="Enviar" class="boton">
		      </div></td>
	</tr>				
</table>		  
</form>