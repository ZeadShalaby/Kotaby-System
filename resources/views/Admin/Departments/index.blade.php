@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->

    <style>
        .container-card {
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Row styling */
        .row {
            margin-bottom: 30px;
            /* Space between rows */
        }
    </style>
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent
    <div class="container">

    </div>
@endsection
{{-- {{
    <div class="row">
            @component('components.card-department', ['departments' => $departments])
            @endcomponent
        </div>
    }}  --}}
