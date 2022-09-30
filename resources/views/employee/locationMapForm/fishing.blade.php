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

    <body style="height: 800px !important">
        <div class="container">
            <!-- <div class="back">
        <a href="{{ url('/employee/locationmapform/location-section-one') }}"
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
            <div class="title">Fishing Access Form</div>
            <div class="content">
                <form
                    action="{{ route('employee.locationmapform.create.step.two.post') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf @method('POST')

                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Bank Access</span>
                            <input
                                type="checkbox"
                                name="bank_access[]"
                                value="Poor"
                            />
                            <label for="poor">Poor</label>
                            <br />
                            <input
                                type="checkbox"
                                name="bank_access[]"
                                value="Fair"
                            />
                            <label for="fair">Fair</label>
                            <br />
                            <input
                                type="checkbox"
                                name="bank_access[]"
                                value="Good"
                            />
                            <label for="good">Good</label>
                            <br />
                            <input
                                type="checkbox"
                                name="bank_access[]"
                                value="Excellent"
                            />
                            <label for="excellent">Excellent</label>
                            <br />
                            @error('poor'||'fair'||'good'||'excellent'||'stake_beds')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Fish Attractors</span>
                            <input
                                name="fish_attractors"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="fish_attractors"
                                value="No"
                                type="radio"
                                checked
                            />No
                            <input
                                type="text"
                                name="description_of_attractor"
                                placeholder="Description Of Attractor"
                            />
                            @error('fish_attractors'||'description_of_attractor')
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
                            <span class="details">Fish Cleaning Station</span>
                            <input
                                name="fish_cleaning_station"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="fish_cleaning_station"
                                value="No"
                                type="radio"
                                checked
                            />No @error('cleaning')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Courtesy Dock</span>
                            <input
                                name="dock"
                                id="chk_yes"
                                value="Yes"
                                type="radio"
                            />Yes
                            <input
                                name="dock"
                                value="No"
                                type="radio"
                                checked
                            />No
                            <input
                                style="display: none"
                                id="how_many"
                                type="text"
                                name="courtesy_dock_numbers"
                                placeholder="If Yes, Then How Many?"
                            />
                            @error('dock'||'courtesy_dock_numbers')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Applicable Link</span>
                            <input name="applicable_link_fishing" type="text" />
                            @error('applicable_link_fishing')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Applicable Image/Video</span>
                            <input
                                name="applicable_image_video_fishing"
                                type="file"
                            />
                            @error('applicable_image_video_fishing')
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
                                    name="fishing_rating"
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
            $(function () {
                $("input[name='dock']").click(function () {
                    if ($("#chk_yes").is(":checked")) {
                        $("#how_many").show();
                    } else {
                        $("#how_many").hide();
                    }
                });
            });

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
