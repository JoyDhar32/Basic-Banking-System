

@extends('layout')
@section('title','Clients Details')
@section('body')

<section class="page-title-section overlay" data-background="{{ asset('images/2.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('home') }}">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Transaction</li>
          </ul>
          <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->



  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 text-center">
            <h3>Request for a Transaction</h3>
            <div class="card">
                <div class="row">
                    <h5 class="text-left col-sm-6 flex-column d-flex">Your Account Details</h5>
                    <h5 class="text-center col-sm-6 flex-column d-flex">Add Receiver </h5>
                </div>

                <form class="form-card" method="POST" action="{{ route('final_process',[$client->id]) }}">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-5 flex-column d-flex"> <label
                                class="form-control-label px-3">Invoice<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="" value="{{ $client->invoice }}" disabled>
                        </div>

                        <div class="form-group col-sm-5 flex-column d-flex"> <label
                                class="form-control-label px-3">Invoice<span class="text-danger"> *</span></label>
                            <select name="receiver_invoice" class="select">
                                <option value="" disabled selected>Select Receiver Invoice</option>
                                @foreach ($all_clients as $all)
                                    @if ($all->id != $client->id)
                                        <option value="{{ $all->id }}">{{ $all->invoice }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class=" row justify-content-between text-left">
                        <div class="form-group col-sm-5 flex-column d-flex"> <label class="form-control-label px-3">Full
                                Name<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="sname"
                                value="{{ $client->fullname }}" disabled> </div>

                        <div class="form-group col-sm-5 flex-column d-flex"> <label class="form-control-label px-3">Enter Amount to Transfer <span class="text-danger">*</span></label>
                            <input type="number" id="transfer_amount" name="transfer_amount" placeholder="Enter Amount ">
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-5 flex-column d-flex"> <label
                                class="form-control-label px-3">Email Address<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $client->email }}" disabled> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-5 flex-column d-flex"> <label
                                class="form-control-label px-3">Available Amount<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $client->amount }} USD" disabled> </div>

                    </div>


                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn btn-info btn-sm">Next
                                Step</button> </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

@if(Session::has('failed'))
<script>
    swal("Check Transfer Amount", "Transfer Amount cannot be Zero or Negative or cannot exceed you orginial balance", "error");
</script>
@endif
@endsection

