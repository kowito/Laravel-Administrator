@if (is_array($item))
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropdown-toggle withripple" data-toggle="dropdown">{{$key}} <b class="caret"></b><div class="ripple-wrapper"></div></a>
		<ul class="dropdown-menu">
			@foreach ($item as $k => $subitem)
				<?php echo View::make("administrator::partials.menu_item", array(
					'item' => $subitem,
					'key' => $k,
					'settingsPrefix' => $settingsPrefix,
					'pagePrefix' => $pagePrefix
				))?>
			@endforeach
		</ul>
	</li>
@else
	<li>
		@if (strpos($key, $settingsPrefix) === 0)
			<a href="{{URL::route('admin_settings', array(substr($key, strlen($settingsPrefix))))}}" class=" withripple">{{$item}}<div class="ripple-wrapper"></div></a>
		@elseif (strpos($key, $pagePrefix) === 0)
			<a href="{{URL::route('admin_page', array(substr($key, strlen($pagePrefix))))}}">{{$item}}</a>
		@else
			<a href="{{URL::route('admin_index', array($key))}}">{{$item}}</a>
		@endif
	</li>
@endif
