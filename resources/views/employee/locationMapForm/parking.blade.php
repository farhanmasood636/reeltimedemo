<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Locations Form</title>
</head>

<body style="height: 800px !important">
    <div class="container">
        <div class="back"> <a href="{{ url('/employee') }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a> </div> @if(session('success'))
        <div class="alert alert-success text-center">
            <h4>{{ session('success') }}</h4>
        </div> @endif
        <div class="title">Parking Access Form</div>
        <div class="content">

            <form action="{{ route('employee.locationmapform.create.step.three.post') }}" method="POST" enctype="multipart/form-data"> @csrf @method('POST')
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Surface</span>
                        <input type="checkbox" name="surface[]" value="Pavel">
                        <label for="pavel">Pavel</label><br>
                        <input type="checkbox" name="surface[]" value="Gravel">
                        <label for="gravel">Gravel</label><br>
                        <input type="checkbox" name="surface[]" value="Dirt">
                        <label for="dirt">Dirt</label><br>
                        @error('pavel'||'gravel'||'dirt')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Spaces</span>
                        <input type="checkbox" name="spaces[]" value="Less Than 5">
                        <label for="lt5">Less Than 5</label><br>
                        <input type="checkbox" name="spaces[]" value="Between 5-10">
                        <label for="b510">Between 5-10</label><br>
                        <input type="checkbox" name="spaces[]" value="Between 10-25">
                        <label for="b1025">Between 10-25</label><br>
                        <input type="checkbox" name="spaces[]" value="More Than 25">
                        <label for="mt25">More Than 25</label><br>
                        @error('lt5'||'b510'||'b1025'||'mt25')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Trailer Spaces</span>
                        <input name="trailer_spaces" value="Yes" type="radio" />Yes
                        <input name="trailer_spaces" value="No" type="radio" checked/>No
                        <input type="text" name="trailer_spaces_numbers" placeholder="How Many?">
                        @error('trailer_spaces'||'trailer_spaces_numbers')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Handicap Spaces</span>
                        <input name="handicap_spaces" value="Yes" type="radio" />Yes
                        <input name="handicap_spaces" value="No" type="radio" checked/>No
                        <input type="text" name="handicap_spaces_numbers" placeholder="How Many?">
                        @error('handicap_spaces'||'handicap_spaces_numbers')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Lighted Parking</span>
                        <input name="lighted_parking" id="chk_yes" value="Yes" type="radio"  />Yes
                        <input name="lighted_parking" value="No" type="radio" checked/>No
                        <input style="display: none;" type="text" name="lighted_parking_type" id="lighted_parking_type" placeholder="If Yes, Then It Is Poor, Fair, Good, Excellent?">
                        @error('lighted_parking'||'lighted_parking_type')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Applicable Link</span>
                        <input name="applicable_link_parking" type="text">
                        @error('applicable_link_parking')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Applicable Image/Video</span>
                        <input name="applicable_image_video_parking" type="file" value="None">
                        @error('applicable_image_video_parking')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Next" >
                </div>
            </form>
        </div>
        <script type="text/javascript">
      $(function() {
    $("input[name='lighted_parking']").click(function() {
      if ($("#chk_yes").is(":checked")) {
        $("#lighted_parking_type").show();
      } else {
        $("#lighted_parking_type").hide();
      }
    });
  });
    </script>
    </div>
</body>

</html>