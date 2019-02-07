<div class='oferta'>
    <h5>{{ $oferta->tipoTrabajo}}</h5>
    <time>Publicada: {{ $oferta->fecSubido }}</time><br>
    <p>Empresa: {{ $oferta->nomEmpresa }}<br>
        Ubicacion: {{ $oferta->ubicacion }}</p>

    <button type="button"  id="botonOfertas" class="botonOfertas btn btn-primary" data-toggle="modal" data-target="#oferta{{ $oferta->idOferta }}" data-whatever="@mdo">Detalles</button>
    
    <div class="modal fade" id="oferta{{ $oferta->idOferta }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $oferta->tipoTrabajo }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="">
                    <time>Publicada: {{ $oferta->fecSubido }}</time><br>
                    <p>Empresa: {{ $oferta->nomEmpresa }}<br>
                        Ubicacion: {{ $oferta->ubicacion }}<br>
                        Experiencia deseada: {{ $oferta->minExpe > 0 ? $oferta->minExpe : 'Sin experiencia' }}<br>
                        Sueldo: {{ $oferta->salario }}</p>
                    <p>Descripcion del puesto ofertado por le empresa</p>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Inscribirse</button>
        </div>
        </div>
    </div>
    </div>
</div>