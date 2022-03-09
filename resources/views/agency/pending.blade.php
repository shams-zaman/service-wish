@if (auth()->user()->is_updated == false)
    Please Complete Your Profile
    <a href="{{ route('agency-form') }}"><b>Go back</b></a>
@endif
Your request is pending;
