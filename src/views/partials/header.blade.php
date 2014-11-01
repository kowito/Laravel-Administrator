<div class="bs-component">
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{URL::route('admin_dashboard')}}" class="navbar-brand withripple">{{Config::get('administrator::administrator.title')}}<div class="ripple-wrapper"></div></a>
		</div>
		<div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				@foreach ($menu as $key => $item)
					@include('administrator::partials.menu_item')
				@endforeach
			</ul>
		</div>
	</div>
</div>

<header>
	<a href="#" id="menu_button"><div></div></a>
	<a href="#" id="filter_button" class="{{$configType === 'model' ? '' : 'hidden'}}"><div></div></a>
	<div id="right_nav">
		@if (count(Config::get('administrator::administrator.locales')) > 0)
			<ul id="lang_menu">
				<li class="menu">
				<span>{{Config::get('app.locale')}}</span>
					@if (count(Config::get('administrator::administrator.locales')) > 1)
						<ul>
							@foreach (Config::get('administrator::administrator.locales') as $lang)
								@if (Config::get('app.locale') != $lang)
									<li>
										<a href="{{URL::route('admin_switch_locale', array($lang))}}">{{$lang}}</a>
									</li>
								@endif
							@endforeach
						</ul>
					@endif
				</li>
			</ul>
		@endif

		@if(Config::get('administrator::administrator.logout_path'))
			<a href="{{URL::to(Config::get('administrator::administrator.logout_path'))}}" id="logout">{{trans('administrator::administrator.logout')}}</a>
		@endif
	</div>
</header>
