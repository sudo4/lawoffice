@if (Session::has('success'))
<div class="toast d-flex align-items-right text-white bg-info border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
        {{ Session::forget('success') }}
        {{ Session::save() }}
    </div>
    <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
@endif

@if (Session::has('success'))
<div class="toast d-flex align-items-right text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
        {{ Session::forget('error') }}
        {{ Session::save() }}
    </div>
    <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
@endif