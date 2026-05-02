	<footer>
		<div class="cls_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="footerlogo">
							<a href="{{ url('/') }}"><img class="" src="{{ url(PAGE_LOGO_URL)}}"></a>
						</div>
						<div class="threelinks">
							<li>
								<a href="{{ url('drive') }}" class="city-link">{{trans('messages.footer.drive')}}
								</a>
							</li>
							<li>
								<a href="{{ url('/') }}/help" class="city-link">{{trans('messages.header.help')}}</a>
							</li>
						</div>
						
					</div>
					<div class="col-lg-9">
						<div class="footertwo">
							<div class="footertwolinks">
								<ul>
									@if (in_array(Route::current()->uri(),['/','ride','signup_rider','ride','signin_rider']) || Auth::check() && Auth::user()->user_type='Rider')
									@else
										<li>
											@if($app_links[1]->value !="" )
												<a class="googleplay_class" href="{{$app_links[1]->value}}" target="_blank">
													<img src="{{ url('images/new/app.png') }}" alt="Download on the Appstore" class="CToWUd">
												</a>
											@endif
										</li>
										<li>
											@if($app_links[3]->value !="" )
												<a href="{{$app_links[3]->value}}" target="_blank" class="ios_class">
													<img src="{{ url('images/new/google.png') }}" alt="Get it on Googleplay" class="CToWUd bot_footimg">
												</a>
											@endif
										</li>

									@endif


									<li style="padding: 0">
										<div class="currency_select">
											{!! Form::select('language',$language, (Session::get('language')) ? Session::get('language') : $default_language[0]->value, ['class' => 'cls_lang', 'aria-labelledby' => 'language-selector-label', 'id' => 'js-language-select']) !!}
										</div>
									</li>
									<li style="padding: 0;margin: 0;">
										<div class="currency_select">
											<select id="js-currency-select" class="cls_lang">
												@foreach($currency_select as $code)
												<option value="{{$code}}" @if(session('currency') == $code ) selected="selected" @endif >{{$code}}
												</option>
												@endforeach
											</select>
										</div>
									</li>
								</ul>
							</div>
							<div class="footertwolinks1">
								<ul class="">
									@foreach($company_pages as $company_page)
									<li>
										<a class="" href="{{ url($company_page->url) }}">
											{{ $company_page->name }}
										</a>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="footertwolinks2 displayflex">
								<div class="social-icons">
									<div class="foot_soc">
										@for($i=0; $i < $join_us->count(); $i++)
										@if($join_us[$i]->value)
										<a href="{{ $join_us[$i]->value }}" target="_blank"> 
											<span class="fa fa-{{ str_replace('_','-',$join_us[$i]->name) }}"></span>
										</a>        
										@endif
										@endfor
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="row text-center" style="margin-top: 40px;">
					<div class="pull-right hidden-xs">
				    </div>
				    <p style="color:#fff;font-size:14px;"> &copy; {{$copyright_year}}</p>
			    </div>
			</div>
		</div>

	</footer>