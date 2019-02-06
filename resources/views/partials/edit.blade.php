<div class="modal fade" id="fila{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar fila {{ $key }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="">
                    @foreach ($columns as $keycolumn=>$column)
                        @if ($column != 'created_at' && $column != 'updated_at' && $keycolumn!= 0)
                            <label>{{ $column }}:</label>
                            <input type="text" name="{{ $column }}" value="{{ $row->$column }}"><br>
                        @endif
                    @endforeach
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </div>
</div>