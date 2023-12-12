@extends("mytheme::frontend.layouts.default")

@section('vaahcms_extend_frontend_head')

@endsection

@section('vaahcms_extend_frontend_css')

@endsection

@section('vaahcms_extend_frontend_scripts')

@endsection

@section('content')
<div class="container has-text-centered mt-6">

        <div class="notification is-link is-light">
            This page should contain welcome message which does not require any database to run.
            You can write theme setup information.
        </div>

        <section class="hero">
            <div class="hero-body">
                <p class="title">MyTheme</p>

                <p class="subtitle">Welcome Page.</p>


            </div>

        </section>
    <section class="footer">
        <a href="{!! config('settings.global.link_github') !!}">
            <i class="fab fa-github"></i> Link to GitHub
        </a>
        {!! config('settings.global.copyright_year'); !!}
{{--        <a href="{!! config('settings.global.copyright_link'); !!}">link</a>--}}
        {!! config('settings.global.signup_page_visibility'); !!}

    </section>

</div>
@endsection
