@if(session('success'))
<div class="alert alert-success text-center" style="border:none; background: #fff !important;">
<h4 style="color:black;">{{ session('success') }}!</h4>
</div>
@endif