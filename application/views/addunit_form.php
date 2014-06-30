<html>
<head>
<title></title>
</head>
<body>
    <article class="wrapper">
		<div class="row">
			<div class="span12">
				<h1 class="center">Administrador de la Página</h1>
				
			</div>
		</div>
	<!-- ******** GOOGLE END ******** -->
		
	<!-- ******** RESERVATION START ******** -->
		<div class="row">
			<div class="span12">
				<hr>
				<h2 class="center">Crear Inmuebles</h2>
				<div class="message">
					<div id="alert"></div>
				</div>
			</div>
		</div>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('Addunit/validate_fields');?>
        <div class="row">
            <div class="span6">
                <table>
                    <tbody>

                        <tr>
                            <td>Inmueble en: </td>
                            <td>
                                <select name="inmueble">
                                    <option value="1" <?php echo set_select('inmueble', '1', TRUE); ?> >Arriendo</option>
                                    <option value="2" <?php echo set_select('inmueble', '2'); ?> >Venta</option>
                                  <!--  <option value="three" <?php //echo set_select('myselect', 'three'); ?> >Three</option>  -->
                                </select>    
                            </td>
                        </tr>

                        <tr>
                            <td>Lugar:</td>
                            <td><input type="text"  name="lugar" value="<?php echo set_value('lugar'); ?>"></td>
                        </tr>

                        <tr>
                            <td>Zona:</td>
                            <td><input type="text"  name="zona" value="<?php echo set_value('zona'); ?>"></td>
                        </tr>

                        <tr>
                            <td>Tipo:</td>
                            <td><input type="text"  name="tipo" value="<?php echo set_value('tipo'); ?>"></td>
                        </tr>

                        <tr>
                            <td>Edad:</td>
                            <td><input type="text"  name="edad" value="<?php echo set_value('edad'); ?>" ></td>
                        </tr>

                        <tr>
                            <td>Área:</td>
                            <td><input type="text"  name="area" value="<?php echo set_value('area'); ?>" ></td>
                        </tr>

                        <tr>
                            <td>Descripción:</td>
                            <td><textarea  name="descripcion"><?php echo $this->input->post('descripcion'); ?> </textarea></td>
                        </tr>

                        <tr>
                            <td>Valor:</td>
                            <td><input type="text"  name="valor"  value="<?php echo set_value('valor'); ?>" ></td>
                        </tr>

                        <tr>
                            <td>Fotografía:</td>
                            <td><input  type='file'  name='photo'> <input type="hidden" value="C1B2" name="pmctrl"> </td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Enviar"></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </form>


        <!-- ******** RESERVATION START ******** -->

    </article>


</body>
</html>