<div class="col-sm-8">
    	<h3 class='text-center'>Nombre Tabla</h3>
    <div class="row">
		if ()
    	<table class="table table-striped table-bordered">
    		<thead class='thead-light'>
    			<th scope="col">#</th>
    			@foreach ($columns as $keycolumn=>$column)
    				@if ($column != 'created_at' && $column != 'updated_at' && $keycolumn!= 0)
    					<th scope="col">{{ $column }}</th>
					@endif
    			@endforeach
    			<th scope="col">Editar</th>
    			<th scope="col">Eliminar</th>
    		</thead>
    		@foreach ($table as $key=>$row)
    		<tr>
    			<td scope="col">{{ $row->idGrado }}</td>
				@foreach ($columns as $keycolumn=>$column)
    				@if ($column != 'created_at' && $column != 'updated_at' && $keycolumn!= 0)
	    				<td>{{ $row->$column }}</td>
	    			@endif
    			@endforeach
    			<td><button type="button" class="btn-warning" data-toggle="modal" data-target="#fila{{ $key }}" data-whatever="@mdo">Editar</button></td>
    			@include('partials.edit')
    			<td><button class="btn-danger">Eliminar</button></td>
    		</tr>
    		@endforeach
    	</table>
    </div>
 </div>