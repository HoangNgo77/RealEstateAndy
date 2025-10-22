<div class="search-area">
        <form action="/submit-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="search-wrap">
                            <div class="row">
                                <div class="search-wrap-area-top">
                                    <ul class="nav nav-tabs custom" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy" type="button" role="tab" aria-controls="buy" aria-selected="true">
                                                Buy
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false">
                                                Sell
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent" type="button" role="tab" aria-controls="rent" aria-selected="false">
                                                Rent
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                        <div class="select-group-wrapper">
                                            <div class="form-group">
                                                <label for="property_type">Property Type</label>
                                                <select name="property_type" id="property_type" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Property Type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="room_type">Room Type</label>
                                                <select name="room_type" id="room_type" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Room Type</option>
                                                    <option value="single">Single Room</option>
                                                    <option value="double">Double Room</option>
                                                    <option value="suite">Suite</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mini_area">Mini Area (Sqft)</label>
                                                <select name="mini_area" id="mini_area" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Area</option>
                                                    <option value="500">500 Sqft</option>
                                                    <option value="1000">1000 Sqft</option>
                                                    <option value="1500">1500 Sqft</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="max_area">Max Area (Sqft)</label>
                                                <select name="max_area" id="max_area" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Area</option>
                                                    <option value="2000">2000 Sqft</option>
                                                    <option value="3000">3000 Sqft</option>
                                                    <option value="4000">4000 Sqft</option>
                                                </select>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn advance-search-active">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius outline w-100">Advanced Search <i class="fa-solid fa-sliders"></i></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="advance-search-wrapper">
                                                <div class="form-group">
                                                    <label for="Amenities">Amenities</label>
                                                    <select name="Amenities" id="Amenities" class="form-select nice-select">
                                                        <option value="1" disabled selected hidden>Select Amenities</option>
                                                        <option value="2">Gymnasium</option>
                                                        <option value="3">Swiming Pool</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Garage">Garage </label>
                                                    <select name="Garage" id="Garage" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Garage</option>
                                                        <option value="1">Small Garage</option>
                                                        <option value="2">Large Garage</option>
                                                        <option value="3">Extra Large Garage</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Floor_Level">Floor Level</label>
                                                    <select name="Floor_Level" id="Floor_Level" class="form-select nice-select">
                                                        <option value="Floor_Level" disabled selected hidden>Select Floor Level</option>
                                                        <option value="1">Ground Floor</option>
                                                        <option value="2">Middle Floor</option>
                                                        <option value="3">Top Floor</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="parking_spaces">Parking Spaces</label>
                                                    <select name="parking_spaces" id="parking_spaces" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Parking Spaces</option>
                                                        <option value="1">No Parking</option>
                                                        <option value="2">2 Space</option>
                                                        <option value="3">3 Spaces</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="max_bedrooms1">Max of Bedrooms</label>
                                                <select name="max_bedrooms" id="max_bedrooms1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="max_bedrooms">Max of Bedrooms</label>
                                                <select name="max_bedrooms" id="max_bedrooms" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <select name="location" id="location" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Location</option>
                                                    <option value="new_york">New York</option>
                                                    <option value="los_angeles">Los Angeles</option>
                                                    <option value="chicago">Chicago</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p class="price-range-title">Price Range</p>
                                                <div class="price_slider_wrapper">
                                                    <div class="price_slider"></div>
                                                    <div class="price_label">
                                                        <span class="from">$125000</span>-<span class="to">$825,000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius w-100"><i class="fa-regular fa-magnifying-glass me-2"></i> Search Property </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                                        <div class="select-group-wrapper">
                                            <div class="form-group">
                                                <label for="property_type1">Property Type</label>
                                                <select name="property_type" id="property_type1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Property Type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="commercial">Commercial</option>
                                                    <option value="land">Land</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="room_type1">Room Type</label>
                                                <select name="room_type1" id="room_type1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Room Type</option>
                                                    <option value="single">Single Room</option>
                                                    <option value="double">Double Room</option>
                                                    <option value="suite">Suite</option>
                                                    <option value="studio">Studio</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mini_area1">Mini Area (Sqft)</label>
                                                <select name="mini_area1" id="mini_area1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Area</option>
                                                    <option value="500">500 Sqft</option>
                                                    <option value="1000">1000 Sqft</option>
                                                    <option value="1500">1500 Sqft</option>
                                                    <option value="2000">2000 Sqft</option>
                                                    <option value="2500">2500+ Sqft</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="max_area1">Max Area (Sqft)</label>
                                                <select name="max_area1" id="max_area1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Area</option>
                                                    <option value="2000">2000 Sqft</option>
                                                    <option value="3000">3000 Sqft</option>
                                                    <option value="4000">4000 Sqft</option>
                                                    <option value="5000">5000+ Sqft</option>
                                                </select>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn advance-search-active">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius outline w-100">Advanced Search <i class="fa-solid fa-sliders"></i></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="advance-search-wrapper">
                                                <div class="form-group">
                                                    <label for="Amenities1">Amenities</label>
                                                    <select name="Amenities1" id="Amenities1" class="form-select nice-select">
                                                        <option value="1" disabled selected hidden>Select Amenities</option>
                                                        <option value="2">Gymnasium</option>
                                                        <option value="3">Swiming Pool</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Garage1">Garage </label>
                                                    <select name="Garage1" id="Garage1" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Garage</option>
                                                        <option value="1">Small Garage</option>
                                                        <option value="2">Large Garage</option>
                                                        <option value="3">Extra Large Garage</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Floor_Level1">Floor Level</label>
                                                    <select name="Floor_Level1" id="Floor_Level1" class="form-select nice-select">
                                                        <option value="Floor_Level" disabled selected hidden>Select Floor Level</option>
                                                        <option value="1">Ground Floor</option>
                                                        <option value="2">Middle Floor</option>
                                                        <option value="3">Top Floor</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="parking_spaces1">Parking Spaces</label>
                                                    <select name="parking_spaces1" id="parking_spaces1" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Parking Spaces</option>
                                                        <option value="1">No Parking</option>
                                                        <option value="2">2 Space</option>
                                                        <option value="3">3 Spaces</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="max_bedrooms11">Max of Bedrooms</label>
                                                <select name="max_bedrooms1" id="max_bedrooms11" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                    <option value="4">4 Bedrooms</option>
                                                    <option value="5">5+ Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="max_bedrooms12">Max of Bedrooms</label>
                                                <select name="max_bedrooms" id="max_bedrooms12" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                    <option value="4">4 Bedrooms</option>
                                                    <option value="5">5+ Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="location1">Location</label>
                                                <select name="location1" id="location1" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Location</option>
                                                    <option value="new_york">New York</option>
                                                    <option value="los_angeles">Los Angeles</option>
                                                    <option value="chicago">Chicago</option>
                                                    <option value="houston">Houston</option>
                                                    <option value="miami">Miami</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p class="price-range-title">Price Range</p>
                                                <div class="price_slider_wrapper">
                                                    <div class="price_slider"></div>
                                                    <div class="price_label">
                                                        <span class="from">$125000</span>-<span class="to">$825,000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius w-100"><i class="fa-regular fa-magnifying-glass me-2"></i> Search Property </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                        <div class="select-group-wrapper">
                                            <div class="form-group">
                                                <label for="property_type2">Property Type</label>
                                                <select name="property_type2" id="property_type2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Property Type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="commercial">Commercial</option>
                                                    <option value="land">Land</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="room_type2">Room Type</label>
                                                <select name="room_type2" id="room_type2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Room Type</option>
                                                    <option value="single">Single Room</option>
                                                    <option value="double">Double Room</option>
                                                    <option value="suite">Suite</option>
                                                    <option value="studio">Studio</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mini_area2">Mini Area (Sqft)</label>
                                                <select name="mini_area2" id="mini_area2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Area</option>
                                                    <option value="500">500 Sqft</option>
                                                    <option value="1000">1000 Sqft</option>
                                                    <option value="1500">1500 Sqft</option>
                                                    <option value="2000">2000 Sqft</option>
                                                    <option value="2500">2500+ Sqft</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="max_area2">Max Area (Sqft)</label>
                                                <select name="max_area2" id="max_area2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Area</option>
                                                    <option value="2000">2000 Sqft</option>
                                                    <option value="3000">3000 Sqft</option>
                                                    <option value="4000">4000 Sqft</option>
                                                    <option value="5000">5000+ Sqft</option>
                                                </select>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn advance-search-active">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius outline w-100">Advanced Search <i class="fa-solid fa-sliders"></i></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="advance-search-wrapper">
                                                <div class="form-group">
                                                    <label for="Amenities2">Amenities</label>
                                                    <select name="Amenities2" id="Amenities2" class="form-select nice-select">
                                                        <option value="1" disabled selected hidden>Select Amenities</option>
                                                        <option value="2">Gymnasium</option>
                                                        <option value="3">Swiming Pool</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Garage2">Garage </label>
                                                    <select name="Garage2" id="Garage2" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Garage</option>
                                                        <option value="1">Small Garage</option>
                                                        <option value="2">Large Garage</option>
                                                        <option value="3">Extra Large Garage</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Floor_Level2">Floor Level</label>
                                                    <select name="Floor_Level2" id="Floor_Level2" class="form-select nice-select">
                                                        <option value="Floor_Level" disabled selected hidden>Select Floor Level</option>
                                                        <option value="1">Ground Floor</option>
                                                        <option value="2">Middle Floor</option>
                                                        <option value="3">Top Floor</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="parking_spaces2">Parking Spaces</label>
                                                    <select name="parking_spaces2" id="parking_spaces2" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Select Parking Spaces</option>
                                                        <option value="1">No Parking</option>
                                                        <option value="2">2 Space</option>
                                                        <option value="3">3 Spaces</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="max_bedrooms22">Max of Bedrooms</label>
                                                <select name="max_bedrooms2" id="max_bedrooms22" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                    <option value="4">4 Bedrooms</option>
                                                    <option value="5">5+ Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="max_bedrooms2">Max of Bedrooms</label>
                                                <select name="max_bedrooms2" id="max_bedrooms2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Max Bedrooms</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedrooms</option>
                                                    <option value="3">3 Bedrooms</option>
                                                    <option value="4">4 Bedrooms</option>
                                                    <option value="5">5+ Bedrooms</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="location2">Location</label>
                                                <select name="location2" id="location2" class="form-select nice-select">
                                                    <option value="" disabled selected hidden>Select Location</option>
                                                    <option value="new_york">New York</option>
                                                    <option value="los_angeles">Los Angeles</option>
                                                    <option value="chicago">Chicago</option>
                                                    <option value="houston">Houston</option>
                                                    <option value="miami">Miami</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p class="price-range-title">Price Range</p>
                                                <div class="price_slider_wrapper">
                                                    <div class="price_slider"></div>
                                                    <div class="price_label">
                                                        <span class="from">$125000</span>-<span class="to">$825,000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="advance-btn-wrapper">
                                                <div class="advance-search-btn">
                                                    <div class="search-btn-item">
                                                        <a class="th-btn radius w-100"><i class="fa-regular fa-magnifying-glass me-2"></i> Search Property </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>