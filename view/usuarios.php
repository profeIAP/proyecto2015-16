{% extends "layout.php" %}

{% block tabActivo %}comentarios{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Usuarios registrados...</h1>
	<p class="lead">Listado de usuarios</p>
	
</div>
	

<table class="table table-bordered table-hover" id="temas">				
	<thead>	
		<tr>			
			<th>ID</th>	
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Acciones</th>
		</tr>	
	</thead>
	<tbody style=" .table-hover">
		{% for comentario in usuarios %}
			<tr>
			{% for campo, valor in comentario %}
				<td>{{valor}}</td>
			{% endfor %}
				<td>
					{% set url=utils.protegerURL('/usuarios/borrar?id=?id=' ~ comentario.ID )%}
					<a href="{{url}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/trash_can1.png"></a>
					{% set url=utils.protegerURL('/usuarios/editar?id=' ~ comentario.ID )%}
					<a href="{{url}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/document_edit.png"></a>			
				</td>
			</tr>
		{% endfor %}
	</tbody>
</table>

<script>

	$(document).ready(function() 
    { 
        $("#temas").tablesorter(); 
    } 
); 

</script>	


{% endblock cuerpo %}
