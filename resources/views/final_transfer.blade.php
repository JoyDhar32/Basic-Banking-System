@extends('layout')
@section('title', 'transfer money')
@section('body')
<section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Final Step</li>
          </ul>
          <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 text-center">
            <h3>Recheck and Continue </h3>

                <form class="form-card" method="POST" action="{{ route('submitted',[$sender, $info->id, $sender_remaining,$transfer_amount]) }}">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label
                                class="form-control-label px-3">Invoice<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="fname" value="{{ $info->invoice }}" disabled>
                        </div>


                    </div>


                    <div class=" row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Full
                                Name<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $info->fullname }}" disabled> </div>

                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label
                                class="form-control-label px-3">Email Address<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $info->email }}" disabled> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label
                                class="form-control-label px-3">Transfer Amount<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $transfer_amount }} USD" disabled> </div>

                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label
                                class="form-control-label px-3">New Balance<span class="text-danger">
                                    *</span></label> <input type="text" id="fname" name="fname"
                                value="{{ $sender_remaining }} USD" disabled> </div>

                    </div>


                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Confirm Transfer</button> </div>
                    </div>
                </form>
            </div></div></div></div>

@endsection
