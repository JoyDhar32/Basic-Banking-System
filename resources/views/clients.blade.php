@extends('layout')
@section('title','Clients Details')
@section('body')
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">About Clients</li>
          </ul>
          <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5 pt-5">
                <h2 class="heading-section">All Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Invoice</th>
                          <th>Client's Name</th>
                          <th>Email Address</th>
                          <th>Total Amount</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php $i=1 @endphp
                          @foreach($clients as $client)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
<td>{{ $client->invoice }}</td>
                          <td>{{ $client->fullname }}</td>
                          <td>{{ $client->email }}</td>
                          <td>{{ $client->amount }}</td>

                          <td><a href="{{ route('transfer',[$client->id]) }}" class="btn btn-info btn-sm">Transfer Amount</a></td>
                        </tr>
@endforeach

                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
