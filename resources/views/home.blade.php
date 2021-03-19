
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
			<form action="{{ url( 'home' ) }}" method="get">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Provas </h3>
				
              </div>
			  </form>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Prova</th>
					  <th>Tipo</th>
                      <th>Data</th>
                    </tr>
                  </thead>
                  <tbody>
					@foreach($list_proof as $col_proof)
					<tr>
					  <td><a href="#" data-toggle='modal' data-target="#new_competitor{{$col_proof->id}}"  > {{ $col_proof->id }} </a> </td>
                      <td>{{ $col_proof->type }}Km </td>
                      <td>{{ date("d/m/Y", strtotime($col_proof->date)) }}</td>
                    </tr>
					@endforeach
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>

@endsection
