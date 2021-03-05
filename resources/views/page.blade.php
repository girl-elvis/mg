@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @if (is_front_page() )    
      @include('partials.home-header')
      @include('partials.content-home')   
    @else
      @include('partials.page-header')    
      @include('partials.content-page')
    @endif 
  @endwhile
@endsection
