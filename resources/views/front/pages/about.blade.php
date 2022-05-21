@extends('front.layout.master')

@section('title') {{ __('menu.kurs_haqqinda') }} @endsection
@section('css')

@endsection

@section('content')
    {!! __('about.about_content') !!}
@endsection

@section('js')
    <script type="text/javascript" src="js/about_course.js"></script>
@endsection
