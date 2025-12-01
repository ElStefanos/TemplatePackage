@extends("PackageName.views.templates.main")
@section("info")
    <div class="brand" aria-hidden="false">
        <div class="logo">
            <img src="@asset('images/icon.png')" alt="Logo">
        </div>

        <div class="headline">
            <h1 id="welcome-heading">Welcome to {{ $name }}</h1>
            <p class="lead">A minimal, elegant starting page that mirrors the clean style of modern frameworks — dark mode, responsive and ready to extend.</p>

            <div class="small">Built with care — customize this template for your app.</div>
        </div>
    </div>
@endsection