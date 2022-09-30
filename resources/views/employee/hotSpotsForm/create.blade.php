<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css" />
    <title>Hot Spots Form</title>
  </head>
  <body style="height: 700px !important">
    <div class="container">
      <div class="back">
        <a href="{{ url('/employee') }}"
          ><i
            class="fa fa-arrow-left"
            style="color: #659ba9"
            aria-hidden="true"
          ></i
        ></a>
      </div>
      @if(session('success'))
      <div class="alert alert-success text-center">
        <h4>{{ session('success') }}</h4>
      </div>
      @endif
      <div class="title">Hot Spots Form</div>
      <div class="content">
        <form
          action="{{ route('employee.hotspotsform.store') }}"
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf @method('POST')
          <div class="user-details">
            <div class="input-box">
              <span class="details">Geocode Location</span>
              <input name="geocode_location" type="text" required />
              @error('geocode_location')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Geocode Location Link</span>
              <input name="geocode_location_link" type="text" />
              @error('geocode_location_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Geocode Location Photo/Video</span>
              <input name="geocode_location_image_video" type="file" />
              @error('geocode_location_image_video')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Species</span>
              <input name="species" type="text" required />
              @error('species')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Description Of Spot</span>
              <input name="description_of_spot" type="text" required />
              @error('description_of_spot')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Applicable Link</span>
              <input name="applicable_link" type="text" />
              @error('applicable_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Applicable Image/Video</span>
              <input name="applicable_image_video" type="file" />
              @error('applicable_image_video')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Submit" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
