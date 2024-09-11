@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->





    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Service</h1>
            <p>Your one-stop solution for all your needs</p>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </section>

    <section id="features" class="features">
        <h2>Features</h2>
        <div class="feature-cards">
            <div class="card">
                <h3>Feature 1</h3>
                <p>Details about feature 1.</p>
            </div>
            <div class="card">
                <h3>Feature 2</h3>
                <p>Details about feature 2.</p>
            </div>
            <div class="card">
                <h3>Feature 3</h3>
                <p>Details about feature 3.</p>
            </div>
            <div class="card">
                <h3>Feature 4</h3>
                <p>Details about feature 4.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Kotaby System</p>
    </footer>


    <style>
        nav ul li a {
            color: #d71717;
            text-decoration: none;
        }

        .hero {
            background: #263859;
            padding: 50px 0;
            text-align: center;
        }

        .hero-content h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .hero-content p {
            margin: 10px 0 20px;
            font-size: 1.2rem;
        }

        .btn {
            background: #FFCA42;

            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .features {
            padding: 50px 0;
            text-align: center;
        }

        .features h2 {
            margin-bottom: 30px;
        }

        .feature-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: #d4d4d4;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            width: 220px;
            color: #263859;
            text-align: center;
        }

        footer {
            font-weight: bold;
            background: #333;
            color: #c5c5c5;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
@endsection
