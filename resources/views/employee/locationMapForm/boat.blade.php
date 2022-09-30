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
        <title>Boat Ramp Access</title>
    </head>

    <body style="height: 900px !important">
        <div class="container">
            <!-- <div class="back">
        <a href="{{ url('/employee/locationmapform/location-section-four') }}"
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
            <div class="title">Boat Ramp Access Form</div>
            <div class="content">
                <form
                    action="{{ route('employee.locationmapform.create.step.five.post') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf @method('POST')
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Number Of Ramps</span>
                            <input
                                type="checkbox"
                                name="number_of_ramps[]"
                                value="1"
                            />
                            <label for="one">1</label><br />
                            <input
                                type="checkbox"
                                name="number_of_ramps[]"
                                value="2"
                            />
                            <label for="two">2</label><br />
                            <input
                                type="checkbox"
                                name="number_of_ramps[]"
                                value="3"
                            />
                            <label for="three">3</label><br />
                            <input
                                type="checkbox"
                                name="number_of_ramps[]"
                                value="4+"
                            />
                            <label for="four">4+</label><br />
                            @error('one'||'two'||'three'||'four')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Number Of Lanes</span>
                            <input
                                type="checkbox"
                                name="number_of_lanes[]"
                                value="1"
                            />
                            <label for="one">1</label><br />
                            <input
                                type="checkbox"
                                name="number_of_lanes[]"
                                value="2"
                            />
                            <label for="two">2</label><br />
                            <input
                                type="checkbox"
                                name="number_of_lanes[]"
                                value="3"
                            />
                            <label for="three">3</label><br />
                            <input
                                type="checkbox"
                                name="number_of_lanes[]"
                                value="4+"
                            />
                            <label for="four">4+</label><br />
                            @error('one'||'two'||'three'||'four')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Ramp Surface</span>
                            <input
                                type="checkbox"
                                name="ramp_surface[]"
                                value="Concrete"
                            />
                            <label for="concrete">Concrete</label><br />
                            <input
                                type="checkbox"
                                name="ramp_surface[]"
                                value="Gravel"
                            />
                            <label for="gravel">Gravel</label><br />
                            <input
                                type="checkbox"
                                name="ramp_surface[]"
                                value="Dirt"
                            />
                            <label for="dirt">Dirt</label><br />
                            <input
                                type="checkbox"
                                name="ramp_surface[]"
                                value="Other"
                            />
                            <label for="other">Other</label><br />
                            <input
                                type="text"
                                name="ramp_surface_other_specify"
                                placeholder="If Other, Then Specify!"
                            />
                            @error('concrete'||'gravel'||'dirt'||'ramp_surface_other_specify')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Restrooms</span>
                            <input
                                name="restrooms"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="restrooms"
                                value="No"
                                type="radio"
                                checked
                            />No @error('restrooms')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Applicable Link</span>
                            <input name="applicable_link_boat" type="text" />
                            @error('applicable_link_boat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Applicable Image/Video</span>
                            <input
                                name="applicable_image_video_boat"
                                type="file"
                            />
                            @error('applicable_image_video_boat')
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
                                    name="boat_ramp_access_rating"
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
        <script>
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
