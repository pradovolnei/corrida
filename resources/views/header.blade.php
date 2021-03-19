<div class="row">
	<div class="col-3">
		<div class="card">
			<a href="#" data-toggle='modal' data-target="#new_racer" class="btn btn-block btn-outline-secondary btn-sm" >  Novo Corredor</a>
		</div>
	</div>
	<div class="col-3">
		<div class="card">
			<a href="#" data-toggle='modal' data-target="#new_proof" class="btn btn-block btn-outline-secondary btn-sm" >  Nova Prova</a>
		</div>
	</div>

	<div class="col-3">
		<div class="card">
			<a href="{{ url( 'proofage' ) }}" data-toggle='modal' data-target="#new_contact" class="btn btn-block btn-outline-secondary btn-sm" > Classificação Geral</a>
		</div>
	</div>
</div>


<div class="modal fade" id="new_racer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Novo Corredor </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form role="form" method="post" action="{{ url( 'newracer' ) }}" enctype="multipart/form-data" >
				<div class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1"> Nome</label>
							<input type="text" class="form-control" placeholder="Nome" name="name" required>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">CPF</label>
							<input type="text" class="form-control" placeholder="CPF" name="cpf" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Data de Nascimento</label>
							<input type="date" class="form-control" name="birth_date" max="{{ date('Y-m-d', strtotime(date('Y-m-d').'-18 year')) }}"  required>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" data-dismiss="modal" style="color:#FFF;" >Fechar</a>
					<button type="bumit" class="btn btn-success" value='Atualizar' name="atualizar" > Salvar  </button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="new_proof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nova Prova </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form role="form" method="post" action="{{ url( 'newproof' ) }}" enctype="multipart/form-data" >
				<div class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1"> Tipo</label>
							<select class="form-control" placeholder="Nome" name="type" required>
								<option value="">Tipo de Prova</option>
								<?php
									$tipos = [3,5,10,21,42];
									foreach($tipos as $col_types){
										echo "<option value='$col_types'>$col_types</option>";
									}
								?>
							</select>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Data </label>
							<input type="date" class="form-control" name="date"  required>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" data-dismiss="modal" style="color:#FFF;" >Fechar</a>
					<button type="bumit" class="btn btn-success" value='Atualizar' name="atualizar" > Salvar  </button>
				</div>
			</form>
		</div>
	</div>
</div>

@foreach($list_proof as $col_proof)
<div class="modal fade" id="new_competitor{{$col_proof->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Novo Competidor </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<div class="modal-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Corredores</th>
								<th>Tempo</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_proof_racer as $col_proof_racer)
							@if($col_proof_racer->id_proof == $col_proof->id)
							<tr>
								<td>{{ $col_proof_racer->name }} </td>
								<td>{{ $col_proof_racer->time }}</td>
							</tr>
							@endif
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
			<form role="form" method="post" action="{{ url( 'newcompet' ) }}" enctype="multipart/form-data" >
				<div class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="id_proof" value="{{$col_proof->id}}">
					<input type="hidden" name="date" value="{{$col_proof->date}}">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1"> Competidor</label>
							<select class="form-control" name="id_racer"  required>
								<option value="">Competidor</option>
								@foreach($list_racer as $col_racer)
									<option value="{{ $col_racer->id }}">{{ $col_racer->name }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Início da Prova</label>
							<input type="time" class="form-control" name="time_start" step=1  required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Fim da Prova</label>
							<input type="time" class="form-control" name="time_end" step=1 required>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" data-dismiss="modal" style="color:#FFF;" >Fechar</a>
					<button type="bumit" class="btn btn-success" value='Atualizar' name="atualizar" > Salvar  </button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach