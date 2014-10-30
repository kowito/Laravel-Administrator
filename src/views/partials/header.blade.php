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
				<li class="active"><a href="javascript:void(0)">Active</a></li>
				<li><a href="javascript:void(0)" class=" withripple">Link<div class="ripple-wrapper"></div></a></li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle withripple" data-toggle="dropdown">Dropdown <b class="caret"></b><div class="ripple-wrapper"></div></a>
					<ul class="dropdown-menu">
						<li><a href="javascript:void(0)">Action</a></li>
						<li><a href="javascript:void(0)">Another action</a></li>
						<li><a href="javascript:void(0)">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Dropdown header</li>
						<li><a href="javascript:void(0)">Separated link</a></li>
						<li><a href="javascript:void(0)">One more separated link</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="javascript:void(0)">Link</a></li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="javascript:void(0)">Action</a></li>
						<li><a href="javascript:void(0)">Another action</a></li>
						<li><a href="javascript:void(0)">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

<header>
	<h1>

	</h1>

	<a href="#" id="menu_button"><div></div></a>
	<a href="#" id="filter_button" class="{{$configType === 'model' ? '' : 'hidden'}}"><div></div></a>

	<div id="mobile_menu_wrapper">
		<ul id="mobile_menu">
			@foreach ($menu as $key => $item)
				@include('administrator::partials.menu_item')
			@endforeach
		</ul>
	</div>

	<ul id="menu">
		@foreach ($menu as $key => $item)
			@include('administrator::partials.menu_item')
		@endforeach
	</ul>
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
		<a href="{{URL::to(Config::get('administrator::administrator.back_to_site_path', '/'))}}" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a>
		@if(Config::get('administrator::administrator.logout_path'))
			<a href="{{URL::to(Config::get('administrator::administrator.logout_path'))}}" id="logout">{{trans('administrator::administrator.logout')}}</a>
		@endif
	</div>
</header>
