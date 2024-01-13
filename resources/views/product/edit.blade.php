{{-- @include("base") --}}
@include("sidebar")
@include("navbar")
@include("footer")

<div class="content-wrapper p-3">
    <div class="title-bread d-flex align-items-center justify-content-between">
        <h3 class="title text-uppercase">Add Product | PRODUCT MANAGEMENT</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-primary"><a class="text-primary" href="{{ route('providers') }}">Product List</a></li>

              <li class="breadcrumb-item text-secondary" aria-current="page">Create a product</li>
            </ol>
        </nav>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('update_product', $product->id) }}"
     class="form-container bg-white rounded shadow-sm">
        @csrf
        @method("PUT")
        <div class="upper-menu-items d-flex align-items-center gap-3 p-2">
            <a href="{{ route('products_index') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="bi:list-task"></span>
                Product List
            </a>
            <a href="{{ route('create_product') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="mdi:create-new-folder"></span>
                Create Product
            </a>
        </div>
        <div class="bg-secondary w-100 border"></div>

        <div class="d-flex justify-content-between gap-2 p-5 w-100 container mx-auto">
            <div class="d-flex flex-column gap-5 w-50">
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Destination</p>
                    <input value="{{ $product->destination }}" type="text" name="destination" class="form-control w-75" placeholder="Travel destination">
                </div>

                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Title</p>
                    <input value="{{ $product->product_title }}"
                           type="text" name="destination" class="form-control w-75" placeholder="Enter product title">
                </div>
                {{-- category --}}
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Category</p>
                    <select name="category" class="form-select w-75" id="">
                        <option value="{{ $product->category->id }}" selected>{{ $product->category->category_name }}</option>
                        @foreach( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- category ends --}}
                {{-- review start --}}
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Reviews</p>
                    <div class="w-75 d-flex">
                        <span class="iconify fs-5" data-icon="material-symbols:star"></span>
                        <span class="iconify fs-5" data-icon="material-symbols:star"></span>
                        <span class="iconify fs-5" data-icon="material-symbols:star"></span>
                        <span class="iconify fs-5" data-icon="material-symbols:star"></span>
                        <span class="fs-5 fw-bold">/</span>
                        <span class="fs-6 fw-bold">5.0</span>
                    </div>
                </div>
                {{-- review ends --}}
                {{-- supplier dropdown --}}
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Supplier</p>
                    <select name="category" class="form-select w-75" id="">
                        <option value="{{ $product->supplier->id }}" selected>{{ $product->supplier->name }}</option>
                        @foreach( $suppliers as $supplier )
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach


                    </select>
                </div>
                {{-- supplier drop end --}}
                {{-- image section --}}
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Image</p>
                    <div id="uploader" class="upload-container w-75">
                        <label for="inputTag">
                            <span class="iconify icn-up" data-icon="ic:baseline-cloud-upload" style="font-size: 50px; color: gray;"></span>
                            <input name="image" id="inputTag" class="form-control upload" type="file" style="display: none;"/>
                        </label>
                        <p style="font-size: 20px; font-weight: 500; color: gray;">Drop files here to upload</p>
                        <div id="imagePreview">

                        </div>
                        <span id="removeImage" class="iconify fs-3 d-none" data-icon="basil:cross-outline"></span>
                    </div>

                </div>
                {{-- image end --}}
                {{-- highlight --}}
                <div class="column-2 w-100 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">In evidence</p>
                    <textarea name="description" id="" cols="30" rows="6" class="form-control w-75">{{ $product->in_evidence }}</textarea>
                </div>
                {{-- highlight ends --}}

                {{-- prices --}}
                <div class="column-2 w-100 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Prices</p>
                    <div class="w-75 d-flex flex-column gap-4">
                        <div class="d-flex align-items-center gap-3">
                            <input value="{{ $product->adult_amount }}" name="adults" type="number" class="form-control" placeholder="Adults">
                            <p>age</p>
                            <input value="{{ $product->adult_age }}" name="adult_age" type="number" class="form-control" placeholder="0">
                            <p>price</p>
                            <input value="{{ $product->adult_price }}" name="adult_amount" type="number" id="adult_price" class="form-control" placeholder="$">
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <input value="{{ $product->boy_amount }}" name="boys" type="number" class="form-control" placeholder="Boys">
                            <p>age</p>
                            <input value="{{ $product->boy_age }}" name="boy_age" type="number" class="form-control" placeholder="0">
                            <p>price</p>
                            <input value="{{ $product->boy_price }}" name="boy_amount" type="number" id="boy_price" class="form-control" placeholder="$">
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <input value="{{ $product->infant_amount }}" name="infants" type="number" class="form-control" placeholder="Infants">
                            <p>age</p>
                            <input value="{{ $product->infant_age }}" name="infant_age" type="number" class="form-control" placeholder="0">
                            <p>price</p>
                            <input value="{{ $product->infant_price }}" name="infant_amount" type="number" id="infant_price" class="form-control" placeholder="$">
                        </div>
                    </div>
                </div>
                {{-- prices end --}}
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Total Price</p>
                    <input value="{{ $product->total_price }}" type="text" id="total_price" name="total_price" class="form-control w-75" placeholder="Enter product price">
                </div>

                <div class="column-2 w-100 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Discount</p>
                    <div class="w-75 d-flex flex-column gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <input value="{{ $product->discount_adult_amount }}" type="number" class="form-control" placeholder="Adults">
                            <p>Discount</p>
                            <input value="{{ $product->discount_adult_discount }}" type="number" class="form-control" placeholder="0">
                            <p>From</p>
                            <input value="{{ $product->discount_adult_from_date }}" type="date" class="form-control">
                            <p>Per</p>
                            <input value="{{ $product->discount_adult_to_date }}" type="date" class="form-control">
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input value="{{ $product->discount_boy_amount }}" type="number" class="form-control" placeholder="Boys">
                            <p>Discount</p>
                            <input value="{{ $product->discount_boy_discount }}" type="number" class="form-control" placeholder="0">
                            <p>From</p>
                            <input value="{{ $product->discount_boy_from_date }}" type="date" class="form-control">
                            <p>Per</p>
                            <input value="{{ $product->discount_boy_to_date }}" type="date" class="form-control">
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input value="{{ $product->discount_infant_amount }}" type="number" class="form-control" placeholder="Infants">
                            <p>Discount</p>
                            <input value="{{ $product->discount_infant_discount }}" type="number" class="form-control" placeholder="0">
                            <p>From</p>
                            <input value="{{ $product->discount_infant_from_date }}" type="date" class="form-control">
                            <p>Per</p>
                            <input value="{{ $product->discount_infant_to_date }}" type="date" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="column-2 w-100 d-flex justify-content-between">
                    <label class="w-25 fs-6 fw-bold">Description</label>

                    <textarea name="description" id="" cols="10" rows="6" class="form-control w-75">{{ $product->description }}</textarea>


                </div>

                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Meeting point</p>
                    <input value="{{ $product->meeting_point }}" type="text" name="meeting_point" class="form-control w-75" placeholder="Travel destination">
                </div>


                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Destination Address</p>
                    <input value="{{ $product->destination_address }}" type="text" name="destination_address" class="form-control w-75" placeholder="Travel destination">
                </div>
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fw-bold">Address</p>
                    <input value="{{ $product->address }}" type="address" id="address" class="mx-3 w-50 form-control" name="address" placeholder="Enter address...">
                    <button class="btn btn-primary w-25" type="button" onclick="showMap()">Set</button>
                </div>

                <div class="column-1 w-100 d-flex justify-content-between">
                    <div class="w-100 border rounded" id="map"></div>
                    <input value="{{ $product->longitude }}" type="hidden" name="longitude" id="longitude">
                    <input value="{{ $product->latitude }}" type="hidden" name="latitude" id="latitude">
                </div>

            </div>
            <div class="border h-100"></div>

            {{-- right column --}}


            <div class="d-flex flex-column w-50 gap-5">
                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Cancellation</p>
                    <input value="{{ $product->cancellation }}" type="text" name="cancellation" class="form-control w-75" placeholder="Up two days before">
                </div>

                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Duration of service</p>
                    <input value="{{ $product->duration_of_service }}" type="text" name="duration_of_service" class="form-control w-75" placeholder="Enter the duration of service in days">
                </div>

                <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Languages</p>
                    <select name="languages[]" multiple="multiple" placeholder="Select Languages" id="multi-select-dropdown" class="js-example-basic-multiple form-control w-75">
                        <option value="english">English</option>
                        <option value="italian">Italian</option>
                        <option value="japanese">Japanese</option>
                        <option value="france">France</option>
                        <option value="spanish">Spanish</option>
                    </select>
                </div>

                <div class="column-2 w-100 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Inlcudes</p>
                    <textarea name="includes" id="" cols="30" rows="6" class="form-control w-75"></textarea>
                </div>

                <div class="column-2 w-100 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Operational calendar</p>
                    <div class="w-75 d-flex gap-3">
                        <input type="text" name="" class="form-control bg-light" id="dateRangePicker" placeholder="Select date">
                        <input type="hidden" name="operation_from_date">
                        <input type="hidden" name="operation_to_date">
                        {{-- <input type="date" class="form-control"> --}}
                    </div>
                </div>

                <div class="column-2 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Opening and closing dates</p>
                    <div class="w-75 d-flex gap-3">
                        <input type="hidden" name="">
                        <div id="dateRangePicker2" class="w-100"></div>
                        {{-- <input type="date" class="form-control"> --}}
                    </div>
                </div>


                <div class="column-2 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Flight Included</p>
                    <input type="checkbox" name="flight_included" class="form-check-input">
                </div>

                <div class="column-2 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Repayable</p>
                    <input type="checkbox" name="repayable" class="form-check-input">
                </div>
                <div class="column-2 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">People</p>
                    <input type="number" name="number_of_people" class="form-control"
                     placeholder="Number of people for the service">
                </div>
                <div class="column-2 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Instant confirmation </p>
                    <input type="checkbox" name="flight_included" class="form-check-input">
                </div>
                <div class="column-2 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Subject to reconfirmation</p>
                    <input type="checkbox" name="flight_included" class="form-check-input">
                </div>
                <div class="column-2 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">In the spotlight</p>
                    <input type="checkbox" name="flight_included" class="form-check-input">
                </div>
                <div class="timezone d-flex flex-column w-100 gap-2">
                    <div class="column-2 w-100 d-flex justify-content-between align-items-center">
                        <p class="w-25 fs-6 fw-bold">Timetables</p>
                        <input type="time" name="number_of_people" class="form-control w-75"
                        placeholder="13-14">
                        <span class="iconify fs-4 mx-2 add-icon" id="timezone-icon" data-icon="ic:baseline-plus"></span>
                    </div>
                </div>


                <div class="column-2 w-100 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Immediate confirmation</p>
                    <input type="checkbox" name="immediate_confirmation" class="form-check-input">
                </div>

                <div class="column-2 w-100 w-100 d-flex justify-content-start">
                    <p class="w-25 fs-6 fw-bold">Subject to reconfirmation</p>
                    <input type="checkbox" name="subject_to-reconfirmation" class="form-check-input">
                </div>

                {{-- <div class="column-1 w-100 d-flex justify-content-between">
                    <p class="w-25 fs-6 fw-bold">Image</p>
                    <div id="uploader" class="upload-container w-75">
                        <label for="inputTag">
                            <span class="iconify icn-up" data-icon="ic:baseline-cloud-upload" style="font-size: 50px; color: gray;"></span>
                            <input name="image" id="inputTag" class="form-control upload" type="file" style="display: none;"/>
                        </label>
                        <p style="font-size: 20px; font-weight: 500; color: gray;">Drop files here to upload</p>
                        <div id="imagePreview">

                        </div>
                        <span id="removeImage" class="iconify fs-3 d-none" data-icon="basil:cross-outline"></span>
                    </div>
                </div> --}}


            </div>


        </div>


        <div class="border w-100 bg-secondary"></div>
        <div class="button-bd p-3 d-flex align-items-center justify-content-end">
            <button type="submit" class="submit-btn d-flex align-items-center justify-content-center btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-1 bi bi-floppy" viewBox="0 0 16 16">
                    <path d="M11 2H9v3h2z"/>
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                </svg>
                     Save
            </button>

            <a href="{{ route('providers') }}" class="mx-2 d-flex align-items-center justify-content-center btn btn-light">
                <span class="iconify mx-1" data-icon="ph:arrow-clockwise-bold"></span>
                Cancel
            </a>
        </div>
    </form>

</main>


{{-- @include("footer") --}}

