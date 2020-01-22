@php
$submitClasses = 'col-sm-6 offset-sm-6 col-md-4 offset-md-8';
if(config('blog.services.reCaptchStatus')) {
$submitClasses = 'col-md-5 col-lg-4';
}
@endphp

@include('blog.partials.messages')

<div class="row">
    <div class="col-12">PHP</div>
</div>

@push('scripts')
@if(config('blog.services.reCaptchStatus'))
<script src="{{ config('blog.services.reCaptchCDN') }}"></script>
@endif
@endpush