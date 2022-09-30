<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Locations Form</title>
  </head>

  <body style="height: 800px !important">
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
      <div class="title">Location Form</div>
      <div class="content">
        <form
          action="{{ route('employee.locationmapform.create.step.one.post') }}"
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf @method('POST')

          <div class="user-details">
            <div class="input-box">
              <span class="details">Geocode Location</span>
              <input name="geocode_location" type="text" />
              @error('geocode_location')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Location Name</span>
              <input name="location_name" type="text" required />
              @error('location_name')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Type Of Area</span>
              <input name="type_of_area" type="text" required />
              @error('type_of_area')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">General Description</span>
              <input name="general_description" type="text" required />
              @error('general_description')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details"
                >Is This Area Safe for Solo, Female, and/or Family anglers?
              </span>
              <input name="is_area_safe" value="Yes" type="radio"  />Yes
              <input name="is_area_safe" value="No" type="radio" checked />No
              @error('is_area_safe')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Common Species Harvested</span>
              <input name="common_species_harvested" type="text" required />
              @error('common_species_harvested')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Waterway</span>
              <input name="waterway" type="text" required />
              @error('waterway')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Access Fee</span>
              <input name="access_fee" id="chk_yes" value="Yes" type="radio"  />Yes
              <input name="access_fee" value="No" type="radio" checked />No
              <input style="display: none;" id="show_fee" name="fee" type="text" placeholder="If Yes Access Fee?" />
              @error('fee' || 'access_fee')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Hot Link to Areas</span>
              <input name="hot_link" type="text" required />
              @error('hot_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Hot Link to Areas Image/Video</span>
              <input name="hot_link_image_video" type="file" />
              @error('hot_link_image_video')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Next" />
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      $(function() {
    $("input[name='access_fee']").click(function() {
      if ($("#chk_yes").is(":checked")) {
        $("#show_fee").show();
      } else {
        $("#show_fee").hide();
      }
    });
  });
    </script>
  </body>
</html>
