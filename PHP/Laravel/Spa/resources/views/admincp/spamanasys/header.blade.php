<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">
			<!-- BEGIN: Brand -->
			<div class="m-stack__item m-brand  m-brand--skin-dark ">
				<div class="m-stack m-stack--ver m-stack--general">
					<div class="m-stack__item m-stack__item--middle m-brand__logo">
						<a href="{{ route('spa_showDashBoard') }}" class="m-brand__logo-wrapper">
							<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png"/>
						</a>
					</div>
					<div class="m-stack__item m-stack__item--middle m-brand__tools">
						<!-- BEGIN: Left Aside Minimize Toggle -->
						<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
						">
						<span></span>
					</a>
					<!-- END -->
					<!-- BEGIN: Responsive Aside Left Menu Toggler -->
					<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
						<span></span>
					</a>
					<!-- END -->
					
					<!-- BEGIN: Topbar Toggler -->
					<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
						<i class="flaticon-more"></i>
					</a>
					<!-- BEGIN: Topbar Toggler -->
				</div>
			</div>
		</div>
		<!-- END: Brand -->
		<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
			<!-- BEGIN: Horizontal Menu -->
			<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark m-topbar m-stack m-stack--ver m-stack--general"  >
				<ul class="m-topbar__nav m-nav m-nav--inline">
					<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
						<a href="#" class="m-nav__link m-dropdown__toggle icon-ring" id="">
							<span class="badge-ring"></span>
							<span class="m-nav__link-icon" id="ring-animate">
								<i class="flaticon-music-2"></i>
							</span>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
									<span class="m-dropdown__header-title">
										Thông báo
									</span>
									<span class="m-dropdown__header-subtitle">
										Danh sách khách đặt lịch
									</span>
								</div>
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
													Khách đặt lịch đang chờ xác nhận
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
												<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
													<div class="m-list-timeline m-list-timeline--skin-light">
														<div class="m-list-timeline__items list-reservation">
															{{-- {{foreach}} --}}
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
			<div id="m_header_topbar" class="m-topbar m-stack m-stack--ver m-stack--general">
				<div class="m-stack__item m-topbar__nav-wrapper">
					<ul class="m-topbar__nav m-nav m-nav--inline">
					<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
						<a href="#" class="m-nav__link m-dropdown__toggle">
							<span class="m-topbar__userpic">
								<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
							</span>
							<span class="m-topbar__username m--hide">
								Nick
							</span>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
									<div class="m-card-user m-card-user--skin-dark">
										<div class="m-card-user__pic">
											<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
										</div>
										<div class="m-card-user__details">
											<span class="m-card-user__name m--font-weight-500">
												{{Auth::user()->name}}
											</span>
											<a href="{{$rootURL}}" class="m-card-user__email m--font-weight-300 m-link">
												{{Auth::user()->email}}
											</a>
										</div>
									</div>
								</div>
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="m-nav m-nav--skin-light">
											<li class="m-nav__section m--hide">
												<span class="m-nav__section-text">
													Section
												</span>
											</li>
											<li class="m-nav__item">
												<a href="{{ route('admincp_showProfile') }}" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-profile-1"></i>
													<span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">
																Tài khoản
															</span>

														</span>
													</span>
												</a>
											</li>
											<li class="m-nav__separator m-nav__separator--fit"></li>
											<li class="m-nav__item">
												<a href="{{ route('dashboard') }}" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-profile-1"></i>
													<span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">
																Hệ Thống quản trị nội dung CMS
															</span>
														</span>
													</span>
												</a>
											</li>
											<li class="m-nav__separator m-nav__separator--fit"></li>
											<li class="m-nav__item">
												<a href="{{ route('admincp_logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
													Đăng xuất
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- END: Topbar -->
	</div>
</div>
</div>
</header>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url: "{{ route('spa_getAjaxJsonCalendar')}}",
			type: 'GET',
			dataType: 'JSON',
			success: function(data){
				var htmlList = '';
				for(var i = 0; i < data.length; i++){
					htmlList += 
					'<div class="m-list-timeline__item"><span class="m-list-timeline__badge"></span><span class="m-list-timeline__text">'+data[i].ReservationCustomerName+' <span class="m-badge '+ data[i].ReservationClass +' m-badge--wide">'+data[i].ReservationStatus+' </span></span><span class="m-list-timeline__time">'+data[i].datetime+'</span></div>';
				}
				$(".list-reservation").html(htmlList);
			},
		});
		setInterval( function () {
			$.ajax({
				url: "{{ route('getSSreservation')}}",
				type: 'GET',
				dataType: 'JSON',
				success: function(data){
					if(data == 1){
						$.ajax({
							url: "{{ route('spa_getAjaxJsonCalendar')}}",
							type: 'GET',
							dataType: 'JSON',
							success: function(data){
								console.log("New data");
								//console.log(data);
								$(".icon-ring").attr("id","m_topbar_notification_icon");
								$(".badge-ring").addClass("m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger");
								var htmlList = '';
								for(var i = 0; i < data.length; i++){
									htmlList += 
									'<div class="m-list-timeline__item"><span class="m-list-timeline__badge"></span><span class="m-list-timeline__text">'+data[i].ReservationCustomerName+' <span class="m-badge '+ data[i].ReservationClass +' m-badge--wide">'+data[i].ReservationStatus+' </span></span><span class="m-list-timeline__time">'+data[i].datetime+'</span></div>';
								}
								$(".list-reservation").html(htmlList);
							},
						});
					}
					else{
						$.ajax({
							url: "{{ route('spa_getAjaxJsonCalendar')}}",
							type: 'GET',
							dataType: 'JSON',
							success: function(data){
								var htmlList = '';
								for(var i = 0; i < data.length; i++){
									htmlList += 
									'<div class="m-list-timeline__item"><span class="m-list-timeline__badge"></span><span class="m-list-timeline__text">'+data[i].ReservationCustomerName+' <span class="m-badge '+ data[i].ReservationClass +' m-badge--wide">'+data[i].ReservationStatus+' </span></span><span class="m-list-timeline__time">'+data[i].datetime+'</span></div>';
								}
								$(".list-reservation").html(htmlList);
							},
						});
					}
				},
			});
		}, 8000);

		$('.icon-ring').on('click', function() {
			$(".icon-ring").attr("id","");
			$("#ring-animate").removeClass("m-animate-shake");
			$(".badge-ring").removeClass("m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger");
		});

	});
</script>
@endpush