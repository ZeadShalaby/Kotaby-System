@extends('layouts.app')
@section('content')
    <link rel="icon" href="https://raw.githubusercontent.com/Redwiat/redwiat.github.io/main/favicon-redwiat.png"
        type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/verify-code.css') }}">
    <div class="containers">
        <header>
            <i class="bx bxs-check-shield" style="color: rgb(47, 255, 175); font-size: 48px"></i>
        </header>

        <h4>Enter Code</h4>
        <form action="{{ route('users.verify.code') }}" method="POST" id="verifyForm">
            {{ csrf_field() }}
            <div class="input-field">
                <input type="number" maxlength="1" class="code-input" />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
            </div>
            <input type="hidden" name="code" id="code" value="">
            <a href="{{ route('users.resend.code') }}" class="btn-resend">Re-send Code</a>
            <p id="countdown" class="countdown-timer">40 seconds</p> <!-- Added countdown timer here -->
            <button type="submit" class="btn-code">Verify Code</button>
        </form>
    </div>

    <script src="{{ asset('js/verify-code.js') }}"></script>
@endsection
