<div class="col 12 ">
    @if(Session::has('success'))
    <div class="row">
        <div class="col-md-12">
          <h3>  {{ Session::get('success') }}<h3>
        </div>
    </div>
    @endif

    <form action="{{ url('/s3-image-uplaod') }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="photos[]" multiple="" >
    <button type="submit"> upload to s3 </button>
</form>
</div>
