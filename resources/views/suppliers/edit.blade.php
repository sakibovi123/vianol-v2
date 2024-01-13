{{-- @include("base") --}}
@include("sidebar")
@include("navbar")
@include("footer")

<div class="content-wrapper p-3">
    <div class="title-bread d-flex align-items-center justify-content-between">
        <h3 class="title text-uppercase">Add Provider | PROVIDER MANAGEMENT</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('providers') }}">Provider List</a></li>
              
              <li class="breadcrumb-item" aria-current="page">Edit Provider</li>
            </ol>
        </nav>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('update_provider', $supplier->id) }}"    class="form-container bg-white rounded shadow-sm">
        @csrf
        @method("PUT")
        <div class="upper-menu-items d-flex align-items-center gap-3 p-2">
            <a href="{{ route('providers') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="bi:list-task"></span>
                Provider List
            </a>
            <a href="{{ route('fetch_provider', $supplier->id) }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="mdi:create-new-folder"></span>
                Update Provider
            </a>
        </div>
        <div class="bg-secondary w-100 border"></div>

        <div class="main-body w-100 p-3 d-flex align-items-center justify-content-between">
            <div class="left-column w-100 d-flex flex-column align-items-center mb-3">
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">FirstName</p>
                    <input value="{{ $supplier->name }}" type="text" class="mx-3 w-100 form-control" name="name" placeholder="Enter first name...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Landline Phone</p>
                    <input value="{{ $supplier->landline_number }}" type="text" class="mx-3 w-100 form-control" name="landline_number" placeholder="Enter landline phone...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Mobile Phone</p>
                    <input value="{{ $supplier->mobile_phone }}" type="text" class="mx-3 w-100 form-control" name="mobile_phone" placeholder="Enter mobile phone...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Email</p>
                    <input value="{{ $supplier->email }}" type="email" class="mx-3 w-100 form-control" name="email" placeholder="Enter email...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">City</p>
                    <input value="{{ $supplier->city }}" type="text" class="mx-3 w-100 form-control" name="city" placeholder="Enter city...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Address</p>
                    <input value="{{ $supplier->address }}" type="address" id="address" class="mx-3 w-75 form-control" name="address" placeholder="Enter address...">
                    <button class="btn btn-primary w-25" type="button" onclick="showMap()">Set</button>
                </div>

{{--                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">--}}
{{--                    <p class="w-50 fw-bold">Google Map link</p>--}}
{{--                    <input type="text" class="mx-3 w-100 form-control" name="google_map_link" placeholder="Enter google map link">--}}
{{--                    <input type="hidden" class="mx-3 w-100 form-control" name="longitude" placeholder="">--}}
{{--                    <input type="hidden" class="mx-3 w-100 form-control" name="latitude" placeholder="">--}}
{{--                </div>--}}
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Set Location</p>
                    <div class="w-100 d-flex flex-column align-items-center gap-3">
                        <div class="w-100" id="map"></div>
                        <input type="hidden" name="longitude" id="longitude">
                        <input type="hidden" name="latitude" id="latitude">
                    </div>
                </div>

                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Supplier Close</p>
                    <select class="mx-3 form-select w-100" name="is_active">
                        <option value="active">Active</option>
                        <option value="deactivate">deactivate</option>
                    </select>
                </div>

                {{-- <div class="w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Description</p>
                    <textarea type="text" rows="6" class="mx-3 w-100 form-control" name="description" placeholder="Enter description..."></textarea>
                </div> --}}

            </div>
            {{-- <div class="w-100 mb-3"> --}}
            <div class="right-column w-100 mx-5 mb-5 d-flex flex-column">
                    <div class="field w-100 d-flex align-items-start justify-content-start mb-3">
                        <p class="w-50 fw-bold">Description</p>
                        <div class="d-flex w-100 flex-column">
                            <textarea type="text" rows="7" cols="10" class="rich form-control" name="description" placeholder="Enter description...">
                                {{-- {{ $supplier->description }} --}}
                            </textarea>
                        </div>
                    </div>

                    <div class="field w-100 d-flex align-items-center mb-3">
                        <p class="fw-bold w-50">Image</p>
                        <input type="file" id="fileElem" name="image" class="w-100 form-control" />
                        <div id="gallery"></div>
                    </div>

                    <div class="field w-100 d-flex align-items-center mb-5">
                        <p class="fw-bold text-wrap w-50">Condition Of Sale</p>
                        <input type="file" name="condition_of_sale" class="w-100 form-control" />
                        <div id="gallery"></div>

                    </div>

                    <div class="field w-100 d-flex align-items-center">
                        <p class="fw-bold text-wrap w-50">Privacy Consent</p>
                        <select name="privacy_consent" class="w-100 form-select">
                            <option value="active">Active</option>
                            <option value="deactivate">Deactive</option>
                        </select>
                        <div id="gallery"></div>

                    </div>
            </div>

            {{-- </div> --}}
        </div>
        <div class="border w-100 bg-secondary"></div>
        <div class="button-bd p-3 d-flex align-items-center justify-content-end">
            <button type="submit" class="d-flex align-items-center justify-content-center w-25 btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                    <path d="M11 2H9v3h2z"/>
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                </svg>
                     Save
            </button>

            <a href="{{ route("providers") }}" class="mx-2 d-flex align-items-center justify-content-center w-25 btn btn-secondary">
                <i class="bi bi-arrow-clockwise"></i>
                Cancel
            </a>
        </div>
    </form>

</main>


{{-- @include("footer") --}}