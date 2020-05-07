@extends('layouts.app', ['title' => 'Contact'])


@section('content')
	<div class="container">
		<div class="row">
			<div style="padding-top: 80px;">
				<p style="text-align: center; font-size: 24px;">Contact</p>
			</div>
		</div>
		<div class="row" style="padding-top: 80px;">
			<div class="col-md-6">
				<div>
					<div>
						<p>Entrez en contact!</p>
					</div>
					<br>
					<div>
						<p>ADRESSE</p>
						<p>Bedi, à 50 m de la pharmacie Santa Rosa, Douala</p>
					</div>
					<div>
						<p>CONTACTEZ-NOUS</p>
						<p>Tél : (+237) 698 00 77 51 | 679 61 15 86 | 655 72 32 67</p>
						<p>E-mail : {{ config('mpropre.admin_support_mail') }}</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="#">
					<form method="POST" action="#">
						 {{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
							<input type="text" name="name" id="name" value="{{ old('name') }}" required="required" placeholder="Nom" class="form-control">
							{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
						</div>

						<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
		                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required="required" value="{{old('email')}}">
		                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
		                </div>

		                <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
							<input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}" required="required" placeholder="Téléphone" class="form-control">
							{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
						</div>

		                <div class="form-group{{ $errors->has('message') ? 'has-error' : '' }}">
		                    <textarea class="form-control" rows="10" cols="10" required="required" id="message" name="message">{{old('message')}}</textarea>
		                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
		                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">ENVOYER &raquo;</button>
                </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection