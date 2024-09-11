@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/add-dep.css') }}">
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="{{ asset('images/img/img-login.svg') }}" alt="" />
            </div>
            <div class="login__forms">
                <form action="{{ route('admin.dep.store') }}" method="POST" class="login__registre" id="form"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!--- dep add --->
                    <x-add-dep />


                    <button class="login__button" type="submit" style="width: 100%">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
