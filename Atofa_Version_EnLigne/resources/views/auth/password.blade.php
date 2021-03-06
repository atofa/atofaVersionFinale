@extends('template')

@section('titre')
	Atofa | Mot de passe oublié
@stop

@section('contenu')

<div class="container container-ajusted">		
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row well trait-horizontal">
					<div class="row">
						
						<h3 class="text-center ">Entrer votre email pour recevoir le lien de changement de mot de passe</h3>	
					</div>
										
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="panel panel-primary">
									
									<div class="panel-body">
										@if (session('status'))
											<div class="alert alert-success">
												{{ session('status') }}
											</div>
										@endif

										@if (count($errors) > 0)
											<div class="alert alert-danger">
												<strong>Whoops!</strong> Il y a un problème dans les données saisies<br><br>
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif

										<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">

											<div class="form-group">
												<label class="col-md-4 control-label">Adresse Email</label>
												<div class="col-md-8">
													<input type="email" class="form-control" name="email" value="{{ old('email') }}">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
													<button type="submit" class="btn btn-primary">
														Envoyer le lien par mail
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
	

@stop
