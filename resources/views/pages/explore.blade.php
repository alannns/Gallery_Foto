@extends('layout.layout')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
    <!-- Konten -->
    <section class="mt-32 mb-8">
        @csrf
        <div class="flex max-w-screen-md mx-auto flex-wrap" id="exploredata">
        </div>
    </section>
    <!-- End Konten -->
@endsection
@push('footerjsexternal')
    <script src="/javascript/explore.js"></script>
@endpush
