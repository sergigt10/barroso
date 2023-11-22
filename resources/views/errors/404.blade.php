@extends('frontend.layouts.app')

@section('content')
    <section class="comming section-padding">
        <div class="v-middle">
            <div class="container">
                <div class="row text-center mb-30">
                    <div class="col-md-12">
                        <h2>@lang("PÀGINA NO DISPONIBLE")</h2>
                    </div>
                </div>
                <div class="row mb-30">
                    <div class="col-md-12 text-center">
                        <h1>ERROR 404</h1>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="go-back col-md-12">
                        <a href='{{ route('frontend.inici.index') }}'> 
                            <span><i class="ti-arrow-left" aria-hidden="true"></i></span>
                            &nbsp; @lang("Tornar a la pàgina d'inici")
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection