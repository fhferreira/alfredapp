<div class="panel panel-primary">
		
	<div class="panel-heading">
		<h3 class="panel-title title">Registrar movimentação</h3>			
	</div>

	{{ Form::open(array('route' => 'financeiro.store', 'method' => 'POST', "class"=>"", "role"=>"form", "id"=>"transaction_create" )) }}
		
		<div class="panel-body form-horizontal">


			<div class="form-group">
				<label class="control-label col-sm-3 col-xs-1" for="">
					<h3 class="title">R$</h3>
				</label>					
				<div class="col-xs-11 col-sm-9 col-md-9 col-lg-9 form-inline">	

					<input type="text" name="amount" id="inputAmount" class="form-control input-lg text-right transaction_amount price" value="" step="0,01" min="0,00"  required="required" title="">	

					<div data-toggle="buttons" class="input-group">
						<label class="btn btn-success active">
							<input type="checkbox" autocomplete="off" name="done" checked>
							<span class="glyphicon glyphicon-ok"></span>							
							Pago
						</label>				
					</div>	

				</div>
			</div>

					
			<div class="form-group">	
				<label class="control-label col-sm-3" for="">Tipo</label>					
				<div class="col-sm-9 col-md-9 col-lg-9 form-inline">
					<div class="btn-group btn-group-sm btn-group-justified transaction_type" data-toggle="buttons">
						<label class="btn btn-default btn-sm despesa active">
							<input type="radio" name="type" id="" autocomplete="off" value="despesa" checked><i class="fa fa-chevron-down"></i> Despesa
						</label>
						<label class="btn btn-default btn-sm receita">
							<input type="radio" name="type" id="" autocomplete="off" value="receita"><i class="fa fa-chevron-up"></i> Receita
						</label>
					</div>
				</div>
			</div>							

			<div class="form-group">
				{{ Form::label('description', 'Descrição', array("class"=>"col-sm-3 control-label")) }}
				<div class="col-sm-9">				
					<textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
				</div>
			</div>

		</div>

		<div class="panel-body bg-info form-horizontal">

			<div class="form-group">
				<label for="recurring_type" class="col-sm-3 control-label"><i class="fa fa-calendar"></i> Data</label>
				<div class="col-sm-9 col-md-9 col-lg-9 form-inline">
					
					<input type="date" name="date" id="inputDat" class="form-control" value="{{date('Y-m-d')}}" required="required" title="">
								
				</div>						
			</div>


			<!-- <div class="form-group">
				<label for="recurring_type" class="col-sm-3 control-label"><i class="fa fa-refresh"></i> Repetir</label>
				<div class="col-sm-9 col-md-9 col-lg-9 form-inline">
					
					<select name="recurring_type" class="form-control recurring_type" required="required">
						<option value="never" selected>Nunca</option>
						<option value="daily">Diariamente</option>
						<option value="weekly">Semanalmente</option>
						<option value="biweekly">Quinzenalmente</option>
						<option value="monthly">Mensalmente</option>
						<option value="bimonthly">Bimestralmente</option>
						<option value="trimonthly">Trimestralmente</option>
						<option value="sixmonthly">Semestralmente</option>
						<option value="yearly">Anualmente</option>
					</select>	
				
					<select name="recurring_times" class="hidden form-control recurring_times">
						<option value="0">Sem parar</option>						
						<option value="1" selected>1x</option>
						@for ($i = 2; $i <= 500; $i++)
							<option value="{{$i}}">{{$i}}x</option>
						@endfor
					</select>	
								
				</div>						
			</div> -->

		</div>	

		<div class="panel-footer navbar-inverse">	
						
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<div class="btn-group" role="group">					
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancela</button>
				</div>				
				<div class="btn-group" role="group">					
					<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
				</div>
			</div>
			
		</div>	

	{{ Form::close() }}
</div>