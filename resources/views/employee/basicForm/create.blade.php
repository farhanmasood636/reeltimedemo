<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css" />
    <title>Basic Form</title>
  </head>

  <body style="height: 1100px !important">
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
      <div class="title">Basic Guide Report Form</div>
      <div class="content">
        <form
          onsubmit="return handleData()"
          action="{{ route('employee.basicform.store') }}"
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf @method('POST')
          <div class="user-details">
            <div class="input-box">
              <span class="details">Location</span>
              <input name="location" type="text" required />
              @error('location')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Date</span>
              <input name="date" type="text" required />
              @error('date')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Water Condition</span>
              <input name="water_condition" type="text" required />
              @error('water_condition')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Fish Species</span>
              <input name="fish_species" type="text" required />
              @error('fish_species')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Depth</span>
              <input name="depth" type="text" required />
              @error('depth')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Lures/Bait</span>
              <input name="lures_bait" type="text" required />
              @error('lures_bait')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Tactics</span>
              <input name="tactics" type="text" required />
              @error('tactics')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Patterns To Look For</span>
              <input name="patterns_to_look_for" type="text" required />
              @error('patterns_to_look_for')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Weather Condition</span>
              <input type="checkbox" name="weather_condition[]" value="Sunny" />
              <label for="weather1">Sunny</label><br />
              <input
                type="checkbox"
                name="weather_condition[]"
                value="Cloudy"
              />
              <label for="weather2">Cloudy</label><br />
              <input type="checkbox" name="weather_condition[]" value="Clear" />
              <label for="weather3">Clear</label><br />
              <input type="checkbox" name="weather_condition[]" value="Rain" />
              <label for="weather4">Rain</label><br />
              <input type="checkbox" name="weather_condition[]" value="Fog" />
              <label for="weather5">Fog</label><br />
              <input type="checkbox" name="weather_condition[]" value="Windy" />
              <label for="weather6">Windy</label><br />
              @error('weather1'||'weather2'||'weather3'||'weather4'||'weather5'||'weather6')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Structure</span>
              <input type="checkbox" name="structure[]" value="Flats" />
              <label for="flats">Flats</label><br />
              <input type="checkbox" name="structure[]" value="Points" />
              <label for="points">Points</label><br />
              <input type="checkbox" name="structure[]" value="Ledges" />
              <label for="ledges">Ledges</label><br />
              <input type="checkbox" name="structure[]" value="Channel Edges" />
              <label for="channel_edges">Channel Edges</label><br />
              @error('flats'||'points'||'ledges'||'channel_edges')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Cover</span>
              <input type="checkbox" name="cover[]" value="Brush Piles" />
              <label for="brush_piles">Brush Piles</label><br />
              <input type="checkbox" name="cover[]" value="Logs" />
              <label for="logs">Logs</label><br />
              <input type="checkbox" name="cover[]" value="Down Trees" />
              <label for="down_trees">Down Trees</label><br />
              <input type="checkbox" name="cover[]" value="Rock Piles" />
              <label for="rock_piles">Rock Piles</label><br />
              <input type="checkbox" name="cover[]" value="Stake Beds" />
              <label for="stake_beds">Stake Beds</label><br />
              @error('brush_piles'||'logs'||'down_trees'||'rock_piles'||'stake_beds')
              <div class="text-danger">{{ $message }}</div>
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
            <br>
              <input type="submit" value="Submit" />
          </div>
        </form>
      </div>
    </div>
    <script>
      function handleData() {
        var form_data = new FormData(document.querySelector("form"));

        if (
          !form_data.has("weather_condition[]") ||
          !form_data.has("structure[]") ||
          !form_data.has("cover[]")
        ) {
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
