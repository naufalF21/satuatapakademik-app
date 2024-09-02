@extends('layouts.front')
@section('content')
    {{-- hero --}}
    @include('pages.about.sections.hero')
    {{-- end hero --}}

    {{-- story --}}
    @include('pages.about.sections.story')
    {{-- end story --}}

    {{-- support --}}
    @include('includes.support')
    {{-- end support --}}

    {{-- mentors --}}
    @include('pages.about.sections.mentors')
    {{-- end mentors --}}

    {{-- map --}}
    @include('pages.about.sections.map')
    {{-- end map --}}

    {{-- join now --}}
    @include('includes.banner-join-now')
    {{-- end join now --}}
@endsection
