<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Inicio</title>
        <link href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <div id='principal'>
            @section('cabecera')
              @include('partials.header')
            @show

            @section('menu')
            @if (Auth::user())
                <div class="row justify-content-center m-5"> 
                    @include('partials.navbar')                    
                </div>
            @endif
            @show

            <div class="container">
                    @yield('contenido')
            </div>

            <div class="d-flex justify-content-end">
                    <a href="http://www.hezkuntza.ejgv.euskadi.eus/r43-2591/eu"><img src="{{ asset('img/gobiernoVasco.png') }}" alt=""></a>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
    <div id='footer' class='container-fluid'>
        @section('footer')
            @include('partials.footer')
        @show
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
{{-- ajax Form Add Formacion--}}
  $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    //$('.modal-title').text('Add Formacion');
  });
  $("#add").click(function() {
    $.ajax({
      type: 'POST',
      url: 'add',
      data: {
        '_token': $('input[name=_token]').val(),
        'nombre': $('input[name=nombre]').val(),
        'siglas': $('input[name=siglas]').val(),
      },
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.error').text(data.errors.nomDepart);
          $('.error').text(data.errors.siglas);
        } else {
          $('.error').remove();
          $('#table').append("<tr class='post" + data.idDepart + "'>"+
          "<td>" + data.idDepart + "</td>"+
          "<td>" + data.nomDepart + "</td>"+
          "<td>" + data.siglas + "</td>"+
          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.idDepart + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "' ><span class='fa fa-eye'></span>"
          + "</button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.idDepartid + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "'><span class='glyphicon glyphicon-pencil'></span>"
          + "</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.idDepart + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "'><span class='glyphicon glyphicon-trash'></span></button></td>"
          +"</tr>");
        }
      }
    });
    $('#nombre').val('');
    $('#siglas').val('');
  });

// function Edit POST
$(document).on('click', '.edit-modal', function() {
$('#footer_action_button').text(" Update Formacion");
$('#footer_action_button').addClass('glyphicon-check');
$('#footer_action_button').removeClass('glyphicon-trash');
$('.actionBtn').addClass('btn-success');
$('.actionBtn').removeClass('btn-danger');
$('.actionBtn').addClass('edit');
//$('.modal-title').text('Formacion Edit');
$('.deleteContent').hide();
$('.form-horizontal').show();
$('#n').val($(this).data('nombre'));
$('#s').val($(this).data('siglas'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
    type: 'POST',
    url: 'edit',
    data: {
'_token': $('input[name=_token]').val(),
'idDepart': $("#fid").val(),
'nomDepart': $('#n').val(),
'siglas': $('#s').val(),

},
success: function(data) {
      $('.post' + data.id).replaceWith(" "+
      "<tr class='post" + data.idDepart + "'>"+
      "<td>" + data.idDepart + "</td>"+
          "<td>" + data.nomDepart + "</td>"+
          "<td>" + data.siglas + "</td>"+
          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.idDepart + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "' ><span class='fa fa-eye'></span>"
          + "</button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.idDepartid + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "'><span class='glyphicon glyphicon-pencil'></span>"
          + "</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.idDepart + "' data-nombre='" + data.nomDepart + "' data-siglas='" + data.siglas + "'><span class='glyphicon glyphicon-trash'></span></button></td>"
          +"</tr>");
        }
  });
});


// form Delete function
$(document).on('click', '.delete-modal', function() {
$('#footer_action_button').text(" Delete");
$('#footer_action_button').removeClass('glyphicon-check');
$('#footer_action_button').addClass('glyphicon-trash');
$('.actionBtn').removeClass('btn-success');
$('.actionBtn').addClass('btn-danger');
$('.actionBtn').addClass('delete');
//$('.modal-title').text('Delete Post');
$('.id').text($(this).data('id'));
$('.deleteContent').show();
$('.form-horizontal').hide();
$('.title').html($(this).data('nomDepart'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function(){
  $.ajax({
    type: 'POST',
    url: 'delete',
    data: {
      '_token': $('input[name=_token]').val(),
      'idDepart': $('.id').text()
    },
    success: function(data){
       $('.post' + $('.id').text()).remove();
    }
  });
});

  // Show function
  $(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#no').text($(this).data('nombre'));
  $('#si').text($(this).data('siglas'));

  //$('.modal-title').text('Show Formacion');
  });
</script>
</body>
</html>