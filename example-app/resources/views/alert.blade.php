@if ($errors -> any())
@foreach ($errors->all() as $message) 
<div class="toast fade show d-flex align-items-center justify-content-between bg-gradient-warning border-0 pe-2 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body text-white">
    {{$message}}
  </div>
  <i class="fas fa-times text-md cursor-pointer pe-2 text-white" data-bs-dismiss="toast" aria-label="Close"></i>
</div>
@endforeach
@endif