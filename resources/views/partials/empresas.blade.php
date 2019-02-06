@foreach ($empresas as $oferta)
    <div class='oferta'>                         
        <h5>{{ $oferta->nomEmpresa }}</h5>                        
        <p>Sector: {{ $oferta->sector }} <br>
            Localidad: {{ $oferta->ubicacion }}</p>
            Provincia: {{ $oferta->provincia }}</p>                                                                                  
        <div class="row">
            <p class="col-md-4">Email: {{ $oferta->email}}</p>
            <p class="col-md-4">Teléfono: {{ $oferta->telefono }}</p>
            <p class="col-md-4">Link: {{ $oferta->link }}</p>
        </div>
        <time>{{ $oferta->fecAlta }}</time><br>
        @include('partials.botonOfertas')
    </div>
@endforeach