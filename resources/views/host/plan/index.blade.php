@extends('host.layouts.master')
@section('content')
<link href="{{ asset('assets/css/plandata.css') }}" rel="stylesheet" type="text/css">
<section class="content container-fluid">
	<div>
		<div class="sp_fhGbki">
			<div class="sp_Bgjituf">
				<div class="sp_vnhfyR">
					<div class="sp_ighRt">
						<div class="sp_vnbGt">
							<h1 class="sp_Xdubt">スペース管理</h1>
						</div>
						<div class="sp_Mjiyu8a">
							<a class="sp_Cvhgyt" href="{{ route('host.facility.new') }}" font-size="16" target="_self">　
								<i class="sp_EriuhR"></i>新規スペースの作成
							</a>
						</div>
					</div>
					@foreach ($plans as $plan)
						<div class="sp_vfRts">
							<div class="sp_fugTo">
								<ul class="sp_dhfRt">
									<li class="Sduryb">
										<div class="sp_khitRf">
											<div class="sp_vnbT">
												<a href="#">　
													<picture>
														<source class="sp_vFrtb" type="image/webp" srcset="https://cdnspacemarket.com/uploads/attachments/361191/image.jpg?fit=crop&amp;bg-color=9c9c9c">
														<img class="sp_Cerig" src="{{ $space->thumbnail()->url }}" alt="sample">　
													</picture>
												</a>
											</div>
											<div class="sp_Rtib8d">
												<h2 class="sp_Ceifug">{{ $space->name }}</h2>　
												<div class="sp_Nhiru5d">
													<div class="sp_Migut">
														<div>
															<span class="sp_Eigutb">
																@if ($plan->isHourly())
																<span class="sp_dibutr">時間貸し</span>
																@endif
																@if ($plan->isDayly())
																<span class="sp_dibutr">日貸し</span>
																@endif
															</span>
														</div>
													</div>
													<div class="sp_Dirubg">
														<a class="sp_vhfTg" href="{{ route('host.space.plan.show', [$space->id, $plan->id]) }}" type="anchor">
															<span class="sp_khiRed">編集</span>
														</a>
														<a class="fqXqIA" type="anchor">
															<span class="hOmAKq">
																<i class="eYXOxq"></i>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@stop