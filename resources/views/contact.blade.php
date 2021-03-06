

@extends('layout')
@section('title','Contact Details')
@section('body')

<section class="page-title-section overlay" data-background="{{ asset('images/contact.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('home') }}">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">About Us</li>
          </ul>
          <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

<h1 class="mt-4">Coming Soon</h1>

@endsection
