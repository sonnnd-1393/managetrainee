@extends('home.layout')

@section('content')
	<div id=app>
		<home-component></home-component>
	</div>
@endsection

@section('style')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="bower-components/managetrainee-bower/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('script')
	<script src="bower-components/managetrainee-bower/js/basic.js" type="text/javascript"></script>
	<script src="bower-components/managetrainee-bower/js/datatables.bundle.js" type="text/javascript"></script>
@endsection
