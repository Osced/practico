<?php
	/*
	Copyright (C) 2013  John F. Arroyave Gutiérrez
						unix4you2@gmail.com

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
	*/
?>

<div align=center>

<table class="table table-unbordered btn-xs">
	<tr>
		<td width=100><img src="../img/practico_login.png" border=0 ALT="Logo Practico" width="116" height="80"></td>
		<td valign=top><b>
			[<?php echo $MULTILANG_ConfiguracionGeneral; ?>]</b><br><br>
			<?php echo $MULTILANG_ConfiguracionDescripcion; ?>:
		</td>
	</tr>
</table>
<form name="continuar" action="" method="POST" style="display:inline; height: 0px; border-width: 0px; width: 0px; padding: 0; margin: 0;">
<input type="hidden" name="NombreRADNEW" value="Practico">
<input type="hidden" name="IdiomaPredeterminadoNEW" value="<?php echo $Idioma; ?>">




<hr><b class="icon-red">[<?php echo $MULTILANG_MotorBD; ?>]</b><br>
    <label for="MotorBDNEW"><?php echo $MULTILANG_TipoMotor; ?>:</label>
    <div class="form-group input-group">
        <select id="MotorBDNEW" name="MotorBDNEW" class="form-control" >
				<option value="mysql">MySQL - MariaDB (3.x/4.x/5.x)</option>
				<option value="pgsql">PostgreSQL</option>
				<option value="sqlite">SQLite v2 - SQLite v3</option>
				<option value="sqlsrv">FreeTDS/Microsoft SQL Server: Win32 [max version 2008]</option>
				<option value="mssql">FreeTDS/Microsoft SQL Server: Win32&Linux, [max version 2000]</option>
				<option value="ibm">IBM (DB2)</option>
				<option value="dblib">DBLIB</option>
				<option value="odbc">Microsoft Access (ODBC v3: IBM DB2, unixODBC, Win32 ODBC)</option>
				<option value="oracle">ORACLE (OCI Oracle Call Interface)</option>
				<option value="ifmx">Informix (IBM Informix Dynamic Server)</option>
				<option value="fbd">Firebird (Firebird/Interbase 6)</option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitMotor; ?>: <?php echo $MULTILANG_AyudaDesMotor; ?>"><i class="fa fa-question-circle fa-fw"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Servidor; ?>:
        </span>
        <input name="ServidorNEW" type="text" class="form-control">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Puerto; ?>:
        </span>
        <input name="PuertoBDNEW" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_PuertoNoPredeterminado; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Basedatos; ?>:
        </span>
        <input name="BaseDatosNEW" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitBD; ?>: <?php echo $MULTILANG_AyudaDesBD; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
        <span class="input-group-addon">
            <?php echo $MULTILANG_Usuario; ?>:
        </span>
        <input name="UsuarioBDNEW" type="text" class="form-control">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Contrasena; ?>:
        </span>
        <input name="PasswordBDNEW" type="password" class="form-control">
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_PrefijoCore; ?>:
        </span>
        <input name="TablasCoreNEW" value="core_" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitPreCore; ?>: <?php echo $MULTILANG_AyudaDesPreCore; ?>"><i class="fa fa-exclamation-triangle icon-orange  fa-fw"></i></a>
        </span>
        <span class="input-group-addon">
            <?php echo $MULTILANG_PrefijoApp; ?>:
        </span>
        <input name="TablasAppNEW" value="app_" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitPreApp; ?>: <?php echo $MULTILANG_AyudaDesPreApp; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_LlavePaso; ?>:
        </span>
        <input name="LlaveDePasoNEW" value="<?php echo TextoAleatorio(10); ?>" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaLlave; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>
    <?php echo $MULTILANG_NotasImportantesInst1; ?>




<hr><b class="icon-red">[<?php echo $MULTILANG_ParametrosApp; ?>]</b><br>
    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_ParamNombreEmpresa; ?>:
        </span>
        <input name="NombreCortoEmpresa" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="(<?php echo $MULTILANG_AyudaTitNomEmp; ?>) <?php echo $MULTILANG_AyudaDesNomEmp; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_ParamNombreApp; ?>:
        </span>
        <input name="NombreAplicacion" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="(<?php echo $MULTILANG_AyudaTitNomApp; ?>) <?php echo $MULTILANG_AyudaDesNomApp; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_ParamVersionApp; ?>:
        </span>
        <input name="VersionAplicacion" value="1.0" type="text" class="form-control">
    </div>

    <?php echo $MULTILANG_NotasImportantesInst2; ?>




<hr><b class="icon-red">[<?php echo $MULTILANG_ConfiguracionVarias; ?>]</b><br>
    <label for="ZonaHorariaNEW"><?php echo $MULTILANG_ZonaHoraria; ?>:</label>
    <div class="form-group input-group">
        <select id="ZonaHorariaNEW" name="ZonaHorariaNEW" class="form-control" >
            <?php
                $archivo_origen="../inc/practico/zonas_horarias.txt";
                $archivo = fopen($archivo_origen, "r");
                //descarta comentario inicial de archivo
                if ($archivo)
                    {
                        $linea = fgets($archivo, 1024);
                        while (!feof($archivo))
                            {
                                $linea = fgets($archivo, 1024);
                                if (trim($linea)=="America/Bogota")
                                    echo "<option value='".trim($linea)."' selected>".trim($linea)."</option>";
                                else
                                    echo "<option value='".trim($linea)."'>".trim($linea)."</option>";
                            }
                        fclose($archivo);
                    }
            ?>
        </select>
    </div>

    <label for="CaracteresCaptchaNEW"><?php echo $MULTILANG_CaracteresCaptcha; ?>:</label>
    <div class="form-group input-group">
        <select id="CaracteresCaptchaNEW" name="CaracteresCaptchaNEW" class="form-control" >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4" selected>4</option>
				<option value="5">5</option>
				<option value="6">6</option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitCaptcha; ?>: <?php echo $MULTILANG_AyudaDesCaptcha; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <label for="ModoDepuracionNEW"><?php echo $MULTILANG_ModoDepuracion; ?>:</label>
    <div class="form-group input-group">
        <select id="ModoDepuracionNEW" name="ModoDepuracionNEW" class="form-control" >
            <option value="1"><?php echo $MULTILANG_Encendido; ?></option>
			<option value="0" selected><?php echo $MULTILANG_Apagado; ?></option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitDebug; ?>: <?php echo $MULTILANG_AyudaDesDebug; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <label for="BuscarActualizacionesNEW"><?php echo $MULTILANG_BuscarActual; ?>:</label>
    <div class="form-group input-group">
        <select id="BuscarActualizacionesNEW" name="BuscarActualizacionesNEW" class="form-control" >
			<option value="1"><?php echo $MULTILANG_Encendido; ?></option>
			<option value="0" selected><?php echo $MULTILANG_Apagado; ?></option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_Ayuda; ?>: <?php echo $MULTILANG_DescActual; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>




<hr><b class="icon-red">[<?php echo $MULTILANG_MotorAuth; ?>]</b><br>
    <label for="Auth_TipoMotorNEW"><?php echo $MULTILANG_Tipo; ?>:</label>
    <div class="form-group input-group">
        <select id="Auth_TipoMotorNEW" name="Auth_TipoMotorNEW" class="form-control" >
            <option value="practico" <?php if ($Auth_TipoMotor=="practico") echo "SELECTED"; ?> ><?php echo $MULTILANG_AuthPractico; ?></option>
            <option value="ldap" <?php if ($Auth_TipoMotor=="ldap") echo "SELECTED"; ?> ><?php echo $MULTILANG_AuthLDAP; ?></option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_Importante; ?>: <?php echo $MULTILANG_AyudaDesAuth; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <label for="Auth_ProtoTransporteNEW"><?php echo $MULTILANG_ProtoTransporte; ?>:</label>
    <div class="form-group input-group">
        <select id="Auth_ProtoTransporteNEW" name="Auth_ProtoTransporteNEW" class="form-control" >
            <option value="" <?php if ($Auth_ProtoTransporte=="") echo "SELECTED"; ?> ><?php echo $MULTILANG_ProtoTransAUTO; ?></option>
            <option value="http" <?php if ($Auth_ProtoTransporte=="http") echo "SELECTED"; ?> SELECTED><?php echo $MULTILANG_ProtoTransHTTP; ?></option>
            <option value="https" <?php if ($Auth_ProtoTransporte=="https") echo "SELECTED"; ?> ><?php echo $MULTILANG_ProtoTransHTTPS; ?></option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_Importante; ?>: <?php echo $MULTILANG_ProtoDescripcion; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>



<hr><b class="icon-red">[<?php echo $MULTILANG_AuthLDAPTitulo; ?>]</b><br>
    <label for="Auth_TipoEncripcionNEW"><?php echo $MULTILANG_AlgoritmoCripto; ?>:</label>
    <div class="form-group input-group">
        <select id="Auth_TipoEncripcionNEW" name="Auth_TipoEncripcionNEW" class="form-control" >
            <option  <?php if ($Auth_TipoEncripcion=="plano") echo "SELECTED"; ?> value="plano">Texto plano/Plain text</option>
            <option  <?php if ($Auth_TipoEncripcion=="md5") echo "SELECTED"; ?> value="md5">MD5</option>
            <option  <?php if ($Auth_TipoEncripcion=="md4") echo "SELECTED"; ?> value="md4">MD4</option>
            <option  <?php if ($Auth_TipoEncripcion=="md2") echo "SELECTED"; ?> value="md2">MD2</option>
            <option  <?php if ($Auth_TipoEncripcion=="sha1") echo "SELECTED"; ?> value="sha1">SHA 1</option>
            <option  <?php if ($Auth_TipoEncripcion=="sha256") echo "SELECTED"; ?> value="sha256">SHA 256</option>
            <option  <?php if ($Auth_TipoEncripcion=="sha384") echo "SELECTED"; ?> value="sha384">SHA 384</option>
            <option  <?php if ($Auth_TipoEncripcion=="sha512") echo "SELECTED"; ?> value="sha512">SHA 512</option>
            <option  <?php if ($Auth_TipoEncripcion=="crc32") echo "SELECTED"; ?> value="crc32">CRC 32</option>
            <option  <?php if ($Auth_TipoEncripcion=="crc32b") echo "SELECTED"; ?> value="crc32b">CRC 32B</option>
            <option  <?php if ($Auth_TipoEncripcion=="adler32") echo "SELECTED"; ?> value="adler32">Adler 32</option>
            <option  <?php if ($Auth_TipoEncripcion=="gost") echo "SELECTED"; ?> value="gost">Gost</option>
            <option  <?php if ($Auth_TipoEncripcion=="whirlpool") echo "SELECTED"; ?> value="whirlpool">Whirlpool</option>
            <option  <?php if ($Auth_TipoEncripcion=="snefru") echo "SELECTED"; ?> value="snefru">Snefru</option>
            <option  <?php if ($Auth_TipoEncripcion=="ripemd128") echo "SELECTED"; ?> value="ripemd128">Ripemd 128</option>
            <option  <?php if ($Auth_TipoEncripcion=="ripemd160") echo "SELECTED"; ?> value="ripemd160">Ripemd 160</option>
            <option  <?php if ($Auth_TipoEncripcion=="ripemd256") echo "SELECTED"; ?> value="ripemd256">Ripemd 256</option>
            <option  <?php if ($Auth_TipoEncripcion=="ripemd320") echo "SELECTED"; ?> value="ripemd320">Ripemd 320</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger128,3") echo "SELECTED"; ?> value="tiger128,3">Tiger 128,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger128,4") echo "SELECTED"; ?> value="tiger128,4">Tiger 128,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger160,3") echo "SELECTED"; ?> value="tiger160,3">Tiger 160,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger160,4") echo "SELECTED"; ?> value="tiger160,4">Tiger 160,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger192,3") echo "SELECTED"; ?> value="tiger192,3">Tiger 192,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="tiger192,4") echo "SELECTED"; ?> value="tiger192,4">Tiger 192,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval128,3") echo "SELECTED"; ?> value="haval128,3">Haval 128,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval128,4") echo "SELECTED"; ?> value="haval128,4">Haval 128,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval128,5") echo "SELECTED"; ?> value="haval128,5">Haval 128,5</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval160,3") echo "SELECTED"; ?> value="haval160,3">Haval 160,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval160,4") echo "SELECTED"; ?> value="haval160,4">Haval 160,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval160,5") echo "SELECTED"; ?> value="haval160,5">Haval 160,5</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval192,3") echo "SELECTED"; ?> value="haval192,3">Haval 192,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval192,4") echo "SELECTED"; ?> value="haval192,4">Haval 192,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval192,5") echo "SELECTED"; ?> value="haval192,5">Haval 192,5</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval224,3") echo "SELECTED"; ?> value="haval224,3">Haval 224,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval224,4") echo "SELECTED"; ?> value="haval224,4">Haval 224,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval224,5") echo "SELECTED"; ?> value="haval224,5">Haval 224,5</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval256,3") echo "SELECTED"; ?> value="haval256,3">Haval 256,3</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval256,4") echo "SELECTED"; ?> value="haval256,4">Haval 256,4</option>
            <option  <?php if ($Auth_TipoEncripcion=="haval256,5") echo "SELECTED"; ?> value="haval256,5">Haval 256,5</option>
        </select>
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaTitCript; ?>: <?php echo $MULTILANG_AyudaDesCript; ?>"><i class="fa fa-exclamation-triangle icon-orange fa-fw"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Servidor; ?>:
        </span>
        <input name="Auth_LDAPServidorNEW" value="<?php echo $Auth_LDAPServidor; ?>" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="<?php echo $MULTILANG_AyudaDesLdapIP; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
        <span class="input-group-addon">
            <?php echo $MULTILANG_Puerto; ?>:
        </span>
        <input name="Auth_LDAPPuertoNEW" value="<?php echo $Auth_LDAPPuerto; ?>" type="text" class="form-control">
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_Dominio; ?>: (dc=)
        </span>
        <input name="Auth_LDAPDominioNEW" value="<?php echo $Auth_LDAPDominio; ?>" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="(<?php echo $MULTILANG_Opcional; ?>) <?php echo $MULTILANG_AyudaDesLdapDominio; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

    <div class="form-group input-group">
        <span class="input-group-addon">
            <?php echo $MULTILANG_UO; ?>: (ou=)
        </span>
        <input name="Auth_LDAPOUNEW" value="<?php echo $Auth_LDAPOU; ?>" type="text" class="form-control">
        <span class="input-group-addon">
            <a href="#" title="(<?php echo $MULTILANG_Opcional; ?>) <?php echo $MULTILANG_AyudaDesLdapUO; ?>"><i class="fa fa-question-circle fa-fw text-info"></i></a>
        </span>
    </div>

</div>

<?php
	abrir_barra_estado();

	$anterior=$paso-1;
	$siguiente=$paso+1;

	if ($hay_error)
		{
			echo '<input type="Hidden" name="paso" value="1">
				  <input type="Hidden" name="Idioma" value="'.$Idioma.'">';
			echo '<input type="Button" class="btn btn-danger" value=" '.$MULTILANG_ProbarNuevamente.' " onclick="document.continuar.submit();">';
		}
	else
		{
			echo '<input type="Hidden" name="paso" value="'.$siguiente.'">
				  <input type="Hidden" name="Idioma" value="'.$Idioma.'">';
			echo '<button onclick="document.continuar.submit();" type="button" class="btn btn-success navbar-btn">'.$MULTILANG_Continuar.' <i class="fa fa-check"></i></button>';
		}
	echo '</form>';
	echo '<form name="regresar" action="" method="POST" style="display:inline; height: 0px; border-width: 0px; width: 0px; padding: 0; margin: 0;">
			<input type="Hidden" name="paso" value="'.$anterior.'">
			<input type="Hidden" name="Idioma" value="'.$Idioma.'">
			<button onclick="document.regresar.submit();" type="button" class="btn btn-primary navbar-btn"><i class="fa fa-caret-square-o-left"></i> '.$MULTILANG_Anterior.'</button>
		  </form>';
	cerrar_barra_estado();
?>

