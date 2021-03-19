
@extends('layouts.app')

@section('content')
 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <style>
   .no-arrow {
	  -moz-appearance: textfield;
	}
	.no-arrow::-webkit-inner-spin-button {
	  display: none;
	}
	.no-arrow::-webkit-outer-spin-button,
	.no-arrow::-webkit-inner-spin-button {
	  -webkit-appearance: none;
	  margin: 0;
	}
   </style>
<div class="container" style="margin-top: 20px;">
	@include( "header" )
			
    <div class="row justify-content-left">
		@foreach($list_proof as $col_proof)
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Prova {{ $col_proof->id }} : {{ $col_proof->type }}Km</h3>
				
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID Corredor</th>
					  <th>Idade</th>
                      <th>Nome</th>
					  <th>Posição</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php $x=0; ?>
					@foreach($list_position as $col_position)
					@if($col_position->id_proof == $col_proof->id)
					<?php $x++; ?>
					<tr>
					  <td>{{ $col_position->id_racer }} </td>
                      <td>{{ $col_position->idade }} </td>
                      <td>{{ $col_position->name }} </td>
					  <td>{{ $x }}° </td>
                    </tr>
					@endif
					@endforeach
                   
                  </tbody>
                </table>
              </div>
			  <div class="card-footer">
				<a href="{{ url( 'positionage' ) }}?p={{$col_proof->id}}"> Classificação por Idade </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		@endforeach
    </div>
</div>

@endsection
