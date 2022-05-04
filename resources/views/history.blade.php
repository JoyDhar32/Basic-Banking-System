@extends('layout')
@section('title','Clients Details')
@section('body')
<section class="page-title-section overlay" data-background="images/2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('home') }}">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">About Us</li>
          </ul>
          <p class="text-lighten mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos similique quis, rem natus consequatur voluptas aut in veritatis reprehenderit nostrum nisi quo perferendis voluptate. Reiciendis totam fugiat quod recusandae, perferendis accusamus voluptatibus iste ipsam voluptatem, aut veniam ullam. Excepturi iure atque sed rem laudantium placeat nesciunt suscipit quasi ullam, mollitia illo similique nisi error quos fuga! Aut, repellendus earum quod iste nesciunt, sequi voluptatum quaerat cum, facere a rem! Sunt ex cumque id maxime dignissimos aliquid facere delectus accusamus labore animi sequi suscipit, dolore obcaecati earum error aperiam architecto culpa? Quo amet vitae iure fugiat magnam, aut magni ad non?</p></div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  {{-- @if(Session::has('batch_deleted')) --}}

  {{-- @endif --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Details</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Sender Invoice</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Transaction</th>
                          <th>Receiver Invoice</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php $i=1 @endphp
                          @foreach($history as $data)
                        <tr>
                            @php $status=$data->status; @endphp
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $data->sender_invoice }}</td>
                          <td>{{ $data->sender_fullname }}</td>
                          <td>{{ $data->sender_email }}</td>
                          <td>{{ $data->transfer }}</td>
                          <td>{{ $data->receiver_invoice }}</td>
                          <td>{{ $data->receiver_fullname }}</td>
                          <td>{{ $data->receiver_email }}</td>
                          <td>
                            @if($status==1)
                            <i class="fas fa-check" style="color:green;font-size:18px;font-weight:bold;"></i> </td>
@else
<div style="color:red;font-size:18px;font-weight:bold;">X</div> </td>
@endif
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
