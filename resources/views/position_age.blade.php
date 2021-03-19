
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
		
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">18 - 25 Anos</h3>
				
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
					@if($col_position->idade >= 18 && $col_position->idade<25 )
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
				<a href="{{ url( 'positionage' ) }}"> Classificação por Idade </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">25 - 35 Anos</h3>
				
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
					@if($col_position->idade >= 25 && $col_position->idade<35 )
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
				<a href="{{ url( 'positionage' ) }}"> Classificação por Idade </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">35 - 45 Anos</h3>
				
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
					@if($col_position->idade >= 35 && $col_position->idade<45 )
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
				<a href="{{ url( 'positionage' ) }}"> Classificação por Idade </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">45 - 55 Anos</h3>
				
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
					@if($col_position->idade >= 45 && $col_position->idade<55 )
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
				<a href="{{ url( 'positionage' ) }}"> Classificação por Idade </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		
		<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Acima de 55 Anos</h3>
				
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
					@if($col_position->idade >55)
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
				<a href="{{ url( 'proofage' ) }}"> Classificação Geral </a>
			  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
		
    </div>
</div>

@endsection
