{% extends "layout.php" %}

{% block tabActivo %}contacto{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Anotación</h1>
	<p class="lead">Todos los campos son obligatorios</p>
</div>

<form method="post" action="/alumnos/anotaciones/guardar" role="form">
		
		<input type="hidden" name="id" value="{{comentario.ID}}"/>
		
										<div class="form-group col-md-6">
											<label for="hora">Hora:</label>
			<input type="text" class="form-control" id="hora" name="hora" value="">
		</div>
										<div class="form-group col-md-6">
											<label for="fecha">Fecha:</label>
			<input type="text" class="campofecha" id="fecha" name="fecha" size="12" value="">
		</div>
		                                <div class="form-group col-md-12">
			                                <label for="alumnoaImplicado">Alumno/a</label>
			<input type="text" class="form-control" id="alumnoaImplicado" name="alumnoaImplicado" value="">
		</div>
		                                <div class="form-group col-md-12">
			                                <label for="comentario">Descripción:</label>
			<textarea style="width:100%" rows="8" cols="50" class="form-control" id="comentario" name="comentario" >{{comentario.COMENTARIO}}</textarea>
		</div>
										
<div class="form-group col-md-3">
			
		<button type="submit" class="btn btn-danger">Cancelar</button><a href="/alumnos/anotaciones/cancelar"></a>

		<button type="submit" class="btn btn-success">Aceptar</button><a href="/alumnos/anotaciones/aceptar"></a>
		
		</div>										
 				
</form>	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".campofecha").calendarioDW();
		});
	</script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
{% endblock cuerpo %}

