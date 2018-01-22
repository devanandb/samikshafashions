<div class="uk-container">
	@if(session()->has('error'))
		<div class="uk-alert-danger" uk-alert>
		    <a class="uk-alert-close" uk-close></a>
		    <p>{!! session()->get('error') !!}</p>
		</div>
	@endif

	@if(session()->has('info'))
		<div class="uk-alert-primary" uk-alert>
		    <a class="uk-alert-close" uk-close></a>
		    <p>{!! session()->get('info') !!}</p>
		</div>
	@endif
</div>