@extends('frontend.layouts.master')
@section('title','Buy Beats | Sell Beats | Beat Battle Online')
@section('frontend-body')

<!-- home body content -->
	
			<!-- slider -->
			<section class="row">
				<div class="col-12" style="color: #ffffff;text-align: justify;">
					<h2 style="color: #fff;">{{$dataContent->category_name}}</h2 style="color: #fff;">
					<p style="color: #ffffff;text-align: justify;">{!! $dataContent->content !!}</p>
				</div>
			</section>
			<!-- end slider -->
		
	<!-- end home body content -->

@endsection
