@extends("PackageName.views.templates.main")
@section("info")
    <div class="brand" aria-hidden="false">
        <div class="logo">
            <img src="@asset('images/icon.png')" alt="Logo">
        </div>

        <div class="headline">
            <h1 id="welcome-heading">Welcome to {{ $name }}</h1>
            <p class="lead">A starting point for your package. Handle with love <3</p>

            <div class="small">Built with care — customize this template for your app.</div>
        </div>
    </div>
@endsection
