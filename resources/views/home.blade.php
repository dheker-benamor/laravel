@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row-cols-6"> {{ __('You are logged in!') }}</div>


                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="Caterory" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Caterory
                                </button>
                                <div class="dropdown-menu" aria-labelledby="Caterory">
                                    <a class="dropdown-item" href={{route('Category.index')}}>show </a>
                                    <a class="dropdown-item" href=" ">add </a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="Produit" type="button" class="btn  btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produit
                                </button>
                                <div class="dropdown-menu col-4" aria-labelledby="Produit">
                                    <a class="dropdown-item" href="#">add </a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">remove</a>
                                </div>
                            </div>
                        </div>
                </div>

                @yield('contenu')
            </div>
        </div>
    </div>
</div>
@endsection
