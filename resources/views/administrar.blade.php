@extends('layouts.master')

@section('contenido')
<div class="row">
   <div class="col-md-12">
      <h1>Departamentos</h1>
   </div>
   </div>

   <div class="row">
   <div class="table table-responsive">
      <table class="table table-bordered" id="table">
         <tr>
         <th width="150px">No</th>
         <th>Nombre</th>
         <th>Siglas</th>
         <th>Create At</th>
         <th class="text-center" width="150px">
            <a href="#" class="create-modal btn btn-success btn-sm">
               <i class="glyphicon glyphicon-plus"></i>
            </a>
         </th>
         </tr>
         {{ csrf_field() }}
         <?php  $no=1; ?>
         @foreach ($depart as $value)
         <tr class="post{{$value->id}}">
            <td>{{ $no++ }}</td>
            <td>{{ $value->nomDepart }}</td>
            <td>{{ $value->siglas }}</td>
            <td>{{ $value->created_at }}</td>
            <td>
               <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->idDepart}}" data-nombre="{{$value->nomDepart}}" data-siglas="{{$value->siglas}}">
               <i class="fa fa-eye"></i>
               </a>
               <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->idDepart}}" data-nombre="{{$value->nomDepart}}" data-siglas="{{$value->siglas}}">
               <i class="glyphicon glyphicon-pencil"></i>
               </a>
               <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->idDepart}}" data-nombre="{{$value->nomDepart}}" data-siglas="{{$value->siglas}}">
               <i class="glyphicon glyphicon-trash"></i>
               </a>
            </td>
         </tr>
         @endforeach
      </table>
   </div>
   {{$depart->links()}}
</div>
@include('partials.modalAdministrar')
@stop