@extends('layouts.front')
@section('content')
    {{-- hero section --}}
    @include('pages.home.sections.hero')
    {{-- end hero section --}}

    {{-- events --}}
    @include('pages.home.sections.events')
    {{-- end events --}}

    {{-- kelas populer --}}
    @include('pages.home.sections.popular-courses')
    {{-- end kelas populer --}}

    {{-- why us --}}
    @include('pages.home.sections.why-us')
    {{-- end why us --}}

    {{-- support --}}
    @include('includes.support')
    {{-- end support --}}

    {{-- join now --}}
    @include('includes.banner-join-now')
    {{-- end join now --}}
@endsection
