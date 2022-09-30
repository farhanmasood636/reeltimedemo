<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
        <link
            rel="stylesheet"
            href="/plugins/fontawesome-free/css/all.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <title>Locations Form</title>
    </head>

    <body>
        <div class="container">
            <!-- <div class="back">
        <a href="{{ url('/employee/locationmapform/location-section-five') }}"
          ><i
            class="fa fa-arrow-left"
            style="color: #659ba9"
            aria-hidden="true"
          ></i
        ></a>
      </div> -->
            @if(session('success'))
            <div class="alert alert-success text-center">
                <h4>{{ session('success') }}</h4>
            </div>
            @endif
            <div class="title">Area Amenities Form</div>
            <div class="content">
                <form
                    action="{{ route('employee.locationmapform.create.step.six.post') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf @method('POST')
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Is Camping Allowed?</span>
                            <input
                                name="is_camping_allowed"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="is_camping_allowed"
                                value="No"
                                type="radio"
                                checked
                            />No @error('is_camping_allowed')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Allowed Camping Type</span>
                            <input
                                type="checkbox"
                                name="allowed_camping_type[]"
                                value="1"
                            />
                            <label for="rv">RV</label>
                            <br />
                            <input
                                type="checkbox"
                                name="allowed_camping_type[]"
                                value="2"
                            />
                            <label for="tent">Tent</label>
                            <br />
                            <input
                                type="checkbox"
                                name="allowed_camping_type[]"
                                value="3"
                            />
                            <label for="cabins">Cabins</label>
                            <br />
                            <input
                                type="checkbox"
                                name="allowed_camping_type[]"
                                value="4+"
                            />
                            <label for="primitive">Primitive</label>
                            <br />
                            @error('rv'||'tebt'||'cabins'||'primitive')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details"
                                >Is There Electricity At The Campground?</span
                            >
                            <input
                                name="is_electricity"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="is_electricity"
                                value="No"
                                type="radio"
                                checked
                            />No
                            <input
                                name="is_electricity"
                                value="Not Applicable"
                                type="radio"
                            />Not Applicable @error('is_electricity')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details"
                                >Is There Water At The Campground?</span
                            >
                            <input
                                name="is_water"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="is_water"
                                value="No"
                                type="radio"
                                checked
                            />No
                            <input
                                name="is_water"
                                value="Not Applicable"
                                type="radio"
                            />Not Applicable @error('is_water')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Picnic Area</span>
                            <input
                                name="picnic_area"
                                value="Yes"
                                type="radio"
                                onclick="show1()"
                            />Yes
                            <input
                                name="picnic_area"
                                value="No"
                                type="radio"
                                onclick="show2()"
                            />No @error('picnic_area')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div
                            style="display: none"
                            id="picnic_area_amenities"
                            class="input-box"
                        >
                            <span class="details">Picnic Area Amenities</span>
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Trash"
                            />
                            <label for="trash">Trash</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Grills"
                            />
                            <label for="grills">Grills</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Picnic Tables"
                            />
                            <label for="picnic_tables">Picnic Tables</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Shade"
                            />
                            <label for="shade">Shade</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Parking"
                            />
                            <label for="parking">Parking</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Restrooms"
                            />
                            <label for="restrooms">Restrooms</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="Water Fountains"
                            />
                            <label for="water_fountains">Water Fountains</label>
                            <br />
                            <input
                                type="checkbox"
                                name="picnic_area_amenities[]"
                                value="None"
                                checked
                            />
                            <label for="none">None</label>
                            @error('trash'||'grills'||'picnic_tables'||'shade'||'parking'||'restrooms'||'water_fountains'||'none')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Family Area/Recreation</span>
                            <input
                                name="family_area_recreation"
                                value="Yes"
                                type="radio"
                                onclick="show3()"
                            />Yes
                            <input
                                name="family_area_recreation"
                                value="No"
                                type="radio"
                                onclick="show4()"
                            />No @error('family_area_recreation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div
                            style="display: none"
                            class="input-box"
                            id="family_area_recreation_type"
                        >
                            <span class="details"
                                >Family Area/Recreation Type</span
                            >
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Playground"
                            />
                            <label for="playground">Playground</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Covered Pavilions"
                            />
                            <label for="covered_pavilions"
                                >Cover Pavilions</label
                            >
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Disc Golf"
                            />
                            <label for="disc_gold">Disc Golf</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Tennis"
                            />
                            <label for="tennis">Tennis</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Volley Ball"
                            />
                            <label for="volleyball">Volley Ball</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Hiking/Walking Trails"
                            />
                            <label for="hiking_walking_trails"
                                >Hiking/Walking Trails</label
                            >
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Greenway"
                            />
                            <label for="greenway">Greenway</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Swimming"
                            />
                            <label for="swimming">Swimming</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Beach"
                            />
                            <label for="beach">Beach</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="Golf Course"
                            />
                            <label for="golf_course">Golf Course</label>
                            <br />
                            <input
                                type="checkbox"
                                name="family_area_recreation_type[]"
                                value="None"
                                checked
                            />
                            <label for="none">None</label>
                            @error('playground'||'covered_pavilions'||'disc_golf'||'tennis'||'volleyball'||'hiking_walking_trails'||'greenway'||'swimming'||'beach'||'golf_course'||'none')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Rating</span>
                            <div class="rating-wrap">
                                <div class="center">
                                    <fieldset class="rating">
                                        <input
                                            type="radio"
                                            id="star4"
                                            name="rating"
                                            value="4"
                                        /><label
                                            for="star4"
                                            class="full"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star3.5"
                                            name="rating"
                                            value="3.5"
                                        /><label
                                            for="star3.5"
                                            class="half"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star3"
                                            name="rating"
                                            value="3"
                                        /><label
                                            for="star3"
                                            class="full"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star2.5"
                                            name="rating"
                                            value="2.5"
                                        /><label
                                            for="star2.5"
                                            class="half"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star2"
                                            name="rating"
                                            value="2"
                                        /><label
                                            for="star2"
                                            class="full"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star1.5"
                                            name="rating"
                                            value="1.5"
                                        /><label
                                            for="star1.5"
                                            class="half"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star1"
                                            name="rating"
                                            value="1"
                                        /><label
                                            for="star1"
                                            class="full"
                                        ></label>
                                        <input
                                            type="radio"
                                            id="star0.5"
                                            name="rating"
                                            value="0.5"
                                        /><label
                                            for="star0.5"
                                            class="half"
                                        ></label>
                                    </fieldset>
                                </div>

                                <input
                                    type="text"
                                    name="area_amenities_rating"
                                    style="display: none"
                                    id="rating-value"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Next" />
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            function show1() {
                document.getElementById("picnic_area_amenities").style.display =
                    "block";
                document.body.style.height = 1200 + "px !important";
            }
            function show2() {
                document.getElementById("picnic_area_amenities").style.display =
                    "none";
            }
            function show3() {
                document.getElementById(
                    "family_area_recreation_type"
                ).style.display = "block";
                document.body.style.height = 1200 + "px !important";
            }
            function show4() {
                document.getElementById(
                    "family_area_recreation_type"
                ).style.display = "none";
            }
            let star = document.querySelectorAll("input");
            let showValue = document.querySelector("#rating-value");

            for (let i = 0; i < star.length; i++) {
                star[i].addEventListener("click", function () {
                    i = this.value;

                    showValue.setAttribute("value", i);
                });
            }
        </script>
    </body>
</html>
