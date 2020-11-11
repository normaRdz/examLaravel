<?php $__env->startSection('content'); ?>
	<div class="container">
		<div id="detalles"></div>
		<div class="card" id="donacionCard">
            <div class="card-header">
            	<h3>Donacion</h3>
            </div>
            <div class="card-body">
                <form id="donacionesForm">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="form-group">
						<label for="donador">Donador</label>
			            <select class="form-control" name="donador" id="donador" required>
			                    <option value="" selected="selected"></option>
			            </select>
					</div>
					<div class="form-group">
						<label for="beneficiario">Beneficiario</label>
			            <select class="form-control" name="beneficiario" id="beneficiario" required>
			                    <option value="" selected="selected"></option>
			            </select>
					</div>
					<div class="form-group form-check">
						<label for="cantidad">Cantidad</label>
						<input class="form-control" type="text" name="cantidad" id="cantidad">
						
					</div>
					<button type="button" class="btn btn-primary" onclick="saveDonacion()">Donar</button>
				</form>
            </div>
        </div>

	</div>

	<script type="text/javascript">
		

		$(document).ready(function () {
			$("#donador").select2({
			    theme: "bootstrap",
			    placeholder: ':: Seleccionar ::',
			    language: "es",
			    ajax: {
			        url: "/api/donadores",
			        dataType: "json",
			        delay: 250
			    }
			});

			$("#beneficiario").select2({
			    theme: "bootstrap",
			    placeholder: ':: Seleccionar ::',
			    language: "es",
			    ajax: {
			        url: "/api/beneficiarios",
			        dataType: "json",
			        delay: 250
			    }
			});
		  
		});


		function saveDonacion() {
            $.ajax({
                type: "POST",
                url: "/donaciones/guardar",
                data: $('#donacionesForm').serialize(),
                success: function (data) {
                	$('#donacionCard').addClass('d-none');
                    $('#detalles').html('<div class="alert alert-success"></button>Donacion exitosa!</div>');
                }
            });
        }
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/normarodriguez/Sites/prueba/resources/views/donaciones.blade.php ENDPATH**/ ?>