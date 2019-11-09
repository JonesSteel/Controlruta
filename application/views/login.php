<?php $this->load->view('header'); ?>
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-8">
			<div class="card">
				<div class="card-header" style="text-align: center">
					<img src="<?php echo base_url('assets/img/mi_ruta.png'); ?>" alt="Movilidad Integrada CDMX"/>
					<br>
					<h5 style="font-weight: bold">Revista de Ruta 2019 - Inicio de Sesión</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="rfc" class="bmd-label-floating">Nombre</label>
						<input type="text" class="form-control form-control-lg" id="rfc" required>
						<span class="bmd-help">Ingrese su Usuario del Sistema</span>
					</div>
					<div class="form-group">
						<label for="password" class="bmd-label-floating">Contraseña</label>
						<input type="password" class="form-control form-control-lg" id="password" style="width: 100%" required>
						<span class="bmd-help">Ingrese su Contraseña</span>
					</div>
					<br/>
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<button type="submit" class="btn btn-raised btn-success">Entrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
