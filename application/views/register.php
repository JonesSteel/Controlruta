<?php $this->load->view('header'); ?>
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="card">
			<div class="card-header" style="text-align: center">
				<img src="<?php echo base_url('assets/img/mi_ruta.png'); ?>" alt="Movilidad Integrada CDMX"/>
				<br>
				<h5 style="font-weight: bold">Revista de Ruta 2019 - Registro</h5>
			</div>
			<form id="signup" method="post">
				<div class="card-body">
					<div class="form-group">
						<label for="rfc">RFC</label>
						<input type="text" class="form-control" id="rfc" required>
					</div>
					<div class="form-group">
						<label for="name">Nombre(s)</label>
						<input type="text" class="form-control" id="name" required>
					</div>
					<div class="form-group">
						<label for="a_paterno">Apellido Paterno</label>
						<input type="text" class="form-control" id="a_paterno" style="width: 100%" required>
					</div>
					<div class="form-group">
						<label for="a_materno">Apellido Materno</label>
						<input type="text" class="form-control" id="a_materno" style="width: 100%">
					</div>
					<!--<div class="form-group">
						<label for="nivel_acceso">Seleccione el Perfil</label>
						<select class="form-control" id="nivel_acceso" required>
							<option value="" selected="true">Seleccione</option>
							<option value="1">Capturista</option>
							<option value="2">Administrador</option>
						</select>
					</div>-->
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" id="password" style="width: 100%" required>
					</div>
					<div class="form-group">
						<label for="c_password">Confirma tu Contraseña</label>
						<input type="password" class="form-control" id="c_password" style="width: 100%" required>
					</div>
					<br/>
					<button type="submit" class="btn btn-success" name="submit" id="submit">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<br/>
<?php $this->load->view('footer'); ?>
