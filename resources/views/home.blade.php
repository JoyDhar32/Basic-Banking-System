@extends('layout')
@section('title', 'home')
@section('body')

    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="images/background.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="text-white">Your bright future is our mission</h1>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="{{ route('clients') }}" class="btn btn-primary">Our Clients</a>
                        </div>
                        <div class="col-xl-5 col-lg-5 align-self-end">

                            <img class="img-fluid w-100" src="images/hero.jpg" alt="banner-feature">
                        </div>
                    </div>
                </div>
                <!-- slider item -->

            </div>
    </section>
    <!-- /hero slider -->


    <!-- about us -->
    <section class="section" style="background:#F8F8F8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">About Banking System</h2>
                    <p>was a mixed blessing. After nationalization there was a shift of emphasis from industry to
                        agriculture. The country witnessed rapid expansion in bank branches, even in rural areas. However,
                        bank nationalization created its own problems like excessive bureaucratization, red-tapism and
                        disruptive tactics of trade unions of bank employees. It was in this backdrop that wide-ranging
                        banking sector reforms were introduced as an integral part of the economic reforms programme started
                        in early 1990s and which is still under way
                    <p> <a href="{{ route('blogs') }}" class="btn btn-outline-primary">Learn more</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="images/about.jpg" alt="about image">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray overflow-md-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">All Details</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-center">
                    <img class="img-fluid w-100" src="images/side.jpg" alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 pt-5">
                                <div class="table-wrap">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Invoice</th>
                                                <th>Client's Name</th>
                                                <th>Email Address</th>
                                                <th>Amount ($)</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1 @endphp
                                            @foreach ($clients as $client)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $client->invoice }}</td>
                                                    <td>{{ $client->fullname }}</td>
                                                    <td>{{ $client->email }}</td>
                                                    <td>{{ $client->amount }}</td>
                                                    <td> <i class="fas fa-check"
                                                            style="color:green;font-size:18px;font-weight:bold;"></i> </td>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->


@endsection
