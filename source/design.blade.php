@extends('_layouts.master')

@section('title', 'Design')

@section('content')

   <h1>DESIGN PORTFOLIO</h1>
   
   <img src='source/_assets/images/testimage.png' alt='test photo' />

   <link rel="testimage" href="{{ mix('image/testimage.jpg', 'assets/build') }}">

   

 
@endsection
