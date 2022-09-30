<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
     <link
            rel="stylesheet"
            href="/plugins/fontawesome-free/css/all.min.css"
        />
        <title>Resource Form</title>
   </head>
<body style="height: 1500px !important">
    <div class="container">
      <div class="back">
        <a href="{{ url('/employee') }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a>
      </div>
        @if(session('success'))
          <div class="alert alert-success text-center">
            <h4>{{ session('success') }}</h4>
          </div>
      @endif
    <div class="title">Resource Form</div>
    <div class="content">
        <form onsubmit="return handleData()" action="{{ route('employee.resourceform.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
        <div class="user-details">
         <div class="input-box">
            <span class="details">Type</span>
            <input name="type" type="text" required>
            @error('type')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
           <div class="input-box">
            <span class="details">Geocode Location</span>
            <input name="geocode_location" type="text" required>
            @error('geocode_location')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div> 
          <div class="input-box">
            <span class="details">Google Maps Link</span>
            <input name="google_maps_link" type="text" required>
            @error('google_maps_link')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div> 
          <div class="input-box">
            <span class="details">Google Maps Image/Video</span>
            <input name="google_maps_image_video" type="file">
            @error('google_maps_image_video')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>  
           <div class="input-box">
            <span class="details">General Description</span>
            <input name="general_description" type="text" required>
            @error('general_description')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Applicable Link</span>
            <input name="applicable_link" type="text">
            @error('applicable_link')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>  
           <div class="input-box">
            <span class="details">Applicable Image/Video</span>
            <input name="applicable_image_video" type="file">
            @error('applicable_image_video')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>  
          <div class="input-box">
            <span class="details">Do they sell baits?</span>
            <input name="sell_baits" value="Yes" type="radio">Yes</input>
            <input name="sell_baits" value="No" type="radio" checked>No</input>
            @error('sell_baits')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they sell lures and terminal tackle?</span>
            <input name="terminal_tackle" value="Yes" type="radio">Yes</input>
            <input name="terminal_tackle" value="No" type="radio" checked>No</input>
            @error('terminal_tackle')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they have drinks, snacks, food?</span>
            <input name="have_drinks" value="Yes" type="radio">Yes</input>
            <input name="have_drinks" value="No" type="radio" checked>No</input>
            @error('have_drinks')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
           <div class="input-box">
            <span class="details">Do they sell ice? </span>
            <input name="sell_ice" value="Yes" type="radio">Yes</input>
            <input name="sell_ice" value="No" type="radio" checked>No</input>
            @error('sell_ice')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they have marine grade fuel?</span>
            <input name="have_grade" value="Yes" type="radio">Yes</input>
            <input name="have_grade" value="No" type="radio" checked>No</input>
            @error('have_grade')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they have regular fuel?</span>
            <input name="regular_fuel" value="Yes" type="radio">Yes</input>
            <input name="regular_fuel" value="No" type="radio" checked>No</input>
            @error('regular_fuel')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they rent fishing boats?</span>
            <input name="fishing_boats" value="Yes" type="radio">Yes</input>
            <input name="fishing_boats" value="No" type="radio" checked>No</input>
            @error('fishing_boats')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they rent pontoon boats?</span>
            <input name="pontoon_boats" value="Yes" type="radio">Yes</input>
            <input name="pontoon_boats" value="No" type="radio" checked>No</input>
            @error('pontoon_boats')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they rent kayaks/canoes?</span>
            <input name="kayaks" value="Yes" type="radio">Yes</input>
            <input name="kayaks" value="No" type="radio" checked>No</input>
            @error('kayaks')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they provide boat motor services?</span>
            <input name="motor_services" value="Yes" type="radio">Yes</input>
            <input name="motor_services" value="No" type="radio" checked>No</input>
            @error('motor_services')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they sell boat parts?</span>
            <input name="boat_parts" value="Yes" type="radio">Yes</input>
            <input name="boat_parts" value="No" type="radio" checked>No</input>
            @error('boat_parts')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they sell boating accessories (life jackets, rope, anchors, etc.)? </span>
            <input name="accessories" value="Yes" type="radio">Yes</input>
            <input name="accessories" value="No" type="radio" checked>No</input>
            @error('accessories')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Do they have restrooms?  </span>
            <input name="restrooms" value="Yes" type="radio">Yes</input>
            <input name="restrooms" value="No" type="radio" checked>No</input>
            @error('restrooms')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Are there other resources not listed?  </span>
            <input name="resources" value="Yes" type="radio">Yes</input>
            <input name="resources" value="No" type="radio" checked>No</input>
            @error('resources')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div> 
          <div class="input-box">
            <span class="details">What kind of bait do they sell?</span>
            <input type="checkbox" name="sell[]" value="Crappie Minnows">
            <label for="crappie_minnows">Crappie Minnows</label><br>
            <input type="checkbox" name="sell[]" value="Large Minnows">
            <label for="large_minnows">Large Minnows</label><br>
            <input type="checkbox" name="sell[]" value="Shiners">
            <label for="shiners">Shiners</label><br>
            <input type="checkbox" name="sell[]" value="Red Worms">
            <label for="red_worms">Red Worms</label><br>
            <input type="checkbox" name="sell[]" value="Night Crawlers">
            <label for="night_crwalers">Night Crawlers</label><br>
            <input type="checkbox" name="sell[]" value="Mealworms">
            <label for="mealworms">Mealworms</label><br>
            <input type="checkbox" name="sell[]" value="Leeches">
            <label for="leeches">Leeches</label><br>
            <input type="checkbox" name="sell[]" value=" Chicken Livers">
            <label for="chicken_livers">Chicken Livers</label><br>
            <input type="checkbox" name="sell[]" value=" Prepared Catfish Baits">
            <label for="prepared_catfish_baits">Prepared Catfish Baits</label><br>
            <input type="checkbox" name="sell[]" value=" Shad or Other Baitfish">
            <label for="shad_or_other_baitfish">Shad or Other Baitfish</label><br>
            <input type="checkbox" name="sell[]" value=" Other Baits">
            <label for="other_baits">Other Baits</label><br>
            <input type="checkbox" name="sell[]" value="None">
            <label for="none">None</label><br>
             @error('crappie_minnows'||'large_minnows'||'shiners'||'red_worms'||'night_crwalers'||'mealworms'||'leeches'||'chicken_livers'||'prepared_catfish_baits'||'shad_or_other_baitfish'||'other_baits'||'none')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
        </div>
        <div class="button">
          <div
              style="text-align: center; visibility: hidden; color: red"
              id="chk_option_error"
            >
              Please Select At Least One Option
            </div>
            <br />
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
  <script>
  function handleData() {
        var form_data = new FormData(document.querySelector("form"));

        if (!form_data.has("sell[]")) {
          document.getElementById("chk_option_error").style.visibility =
            "visible";
          return false;
        } else {
          document.getElementById("chk_option_error").style.visibility =
            "hidden";
          return true;
        }
      }
    </script>
</body>
</html>
