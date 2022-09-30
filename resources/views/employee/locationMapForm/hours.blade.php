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
        <div class="title">Hours Of Use Form</div>
        <div class="content">

            <form action="{{ route('employee.locationmapform.create.step.four.post') }}" method="POST" enctype="multipart/form-data"> @csrf @method('POST')
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">24-Hour Access</span>
                        <input name="access_24" value="Yes" type="radio" />Yes
                        <input name="access_24" value="No" type="radio" checked />No
                        @error('access_24')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Sunrise to Sunset Access</span>
                        <input type="checkbox" name="sunrise_to_sunset_access[]" value="Yes">
                        <label for="Yes">Yes</label><br>
                        <input type="checkbox" name="sunrise_to_sunset_access[]" value="No">
                        <label for="No">No</label><br>
                        <input type="checkbox" name="sunrise_to_sunset_access[]" value="None">
                        <label for="none">None</label><br>
                        <input type="checkbox" name="sunrise_to_sunset_access[]" value="Other">
                        <label for="other">Other</label><br>
                        <input type="text" name="specify_sunrise_to_sunset_access" placeholder="If Other, Then Specify!">
                        @error('Yes'||'No'||'none'||'other'||'specify_sunrise_to_sunset_access')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Open Year Round</span>
                        <input name="open_year_round" id="chk_yes" value="Yes" type="radio" onclick="show1();"/>Yes
                        <input name="open_year_round" value="No" type="radio" onclick="show2();" checked/>No
                        <input style="display: none;" type="text" name="open_year_round_specify" id="open_year_round_specify" placeholder="If Other, Then Specify!">
                        @error('open_year_round'|'open_year_round_specify')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Closed Months</span>
                        <input name="closed_months" value="Yes" type="radio" onclick="show3();" />Yes
                        <input name="closed_months" value="No" type="radio" onclick="show4();" checked/>No
                        <input style="display: none;" type="text" name="closed_months_specify" id="closed_months_specify" placeholder="If Other, Then Specify!">
                        @error('closed_months'|'closed_months_specify')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Often Hours Of Use</span>
                        <input name="often_hours_of_use" value="Yes" type="radio" onclick="show5();" />Yes
                        <input name="often_hours_of_use" value="No" type="radio" onclick="show6();" checked />No
                        <input style="display: none;" type="text" name="often_hours_of_use_specify" id="often_hours_of_use_specify" placeholder="If Yes, Then Specify!">
                        @error('often_hours_of_use'||'often_hours_of_use_specify')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Applicable Link</span>
                        <input name="applicable_link_hours" type="text">
                        @error('applicable_link_hours')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="details">Applicable Image/Video</span>
                        <input name="applicable_image_video_hours" type="file">
                        @error('applicable_image_video_hours')
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
    </div>
    <script type="text/javascript">
      $(function() {
    $("input[name='open_year_round']").click(function() {
      if ($("#chk_yes").is(":checked")) {
        $("#open_year_round_specify").show();
      } else {
        $("#open_year_round_specify").hide();
      }
    });
  });

   $(document).ready(function() {
        $(".btn_click").click(function(){
            var test = new Array();
            $("input[name='programming']:checked").each(function() {
                test.push($(this).val());
            });
 
            alert("My favourite programming languages are: " + test);
        });
    });

  function show1(){
  document.getElementById('open_year_round').style.display ='block';
}
function show2(){
  document.getElementById('open_year_round_specify').style.display = 'none';
}
  function show3(){
  document.getElementById('closed_months_specify').style.display ='block';
}
function show4(){
  document.getElementById('closed_months_specify').style.display = 'none';
}
function show5(){
  document.getElementById('often_hours_of_use_specify').style.display ='block';
}
function show6(){
  document.getElementById('often_hours_of_use_specify').style.display = 'none';
}

    </script>
</body>

</html>