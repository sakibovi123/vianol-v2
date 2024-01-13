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
              
              <li class="breadcrumb-item" aria-current="page">Add Provider</li>
            </ol>
        </nav>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('store_provider') }}"    class="form-container bg-white rounded shadow-sm">
        @csrf
        <div class="upper-menu-items d-flex align-items-center gap-3 p-2">
            <a href="{{ route('providers') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="bi:list-task"></span>
                Provider List
            </a>
            <a href="{{ route('create_provider') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="mdi:create-new-folder"></span>
                Create Provider
            </a>
        </div>
        <div class="bg-secondary w-100 border"></div>

        <div class="main-body w-100 p-3 d-flex align-items-start justify-content-between">
            <div class="left-column w-100 d-flex flex-column align-items-center mb-3">
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">FirstName</p>
                    <input type="text" class="mx-3 w-100 form-control" name="name" placeholder="Enter first name...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Landline Phone</p>
                    <input type="text" class="mx-3 w-100 form-control" name="landline_number" placeholder="Enter landline phone...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Mobile Phone</p>
                    <input type="text" class="mx-3 w-100 form-control" name="mobile_phone" placeholder="Enter mobile phone...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Email</p>
                    <input type="email" class="mx-3 w-100 form-control" name="email" placeholder="Enter email...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">City</p>
                    <input type="text" class="mx-3 w-100 form-control" name="city" placeholder="Enter city...">
                </div>
                <div class="field w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Address</p>
                    <input type="address" id="address" class="mx-3 w-75 form-control" name="address" placeholder="Enter address...">
                    <button class="btn btn-primary w-25" type="button" onclick="showMap()">Set</button>
                </div>

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
                <div class="field w-100 d-flex align-items-start justify-content-start mb-3">
                    <p class="w-50 fw-bold">Description</p>
                    <div class="d-flex w-100 flex-column">
                        <textarea type="text" rows="6" cols="10" class="rich form-control" name="description" placeholder="Enter description..."></textarea>
                    </div>
                </div>

                {{-- <div class="w-100 d-flex align-items-center justify-content-start mb-3">
                    <p class="w-50 fw-bold">Description</p>
                    <textarea type="text" rows="6" class="mx-3 w-100 form-control" name="description" placeholder="Enter description..."></textarea>
                </div> --}}

            </div>
            {{-- <div class="w-100 mb-3"> --}}
            <div class="right-column w-100 mx-5 mb-5 d-flex flex-column align-items-start justify-content-start">
                    
                    <div class="field w-100 d-flex align-items-start mb-3">
                        {{-- <p class="fw-bold w-50">Image</p> --}}
                        <div class="d-flex flex-column w-100 justify-content-center align-items-center">
                            <div class="d-flex align-items-start justify-content-between w-100">
                                <p class="fs-6 w-25">Image</p>
                                <div id="uploader" class="upload-container w-75">
                                    <label for="inputTag">
                                        <span class="iconify icn-up" data-icon="ic:baseline-cloud-upload" style="font-size: 50px; color: gray;"></span>
                                        <input name="image" id="inputTag" class="form-control upload" type="file" style="display: none;"/>
                                    </label>
                                    <p style="font-size: 20px; font-weight: 500; color: gray;">Drop files here to upload</p>
                                    <div id="imagePreview">
                                        
                                    </div>
                                    <span id="removeImage" class="iconify fs-3 d-none" data-icon="basil:cross-outline"></span>
                                    {{-- <span id="removeImage" class="bi bi-x-circle position-absolute top-0 end-0" style="font-size: 24px; color: red; cursor: pointer; display: none;"></span> --}}
                                    
                                </div>
                                
                                
                            </div>
                            
                        </div>
                        
                        
                    </div>
                        {{-- <input type="file" name="condition_of_sale" class="form-control"> --}}
                        <div class="field w-100 d-flex align-items-start mb-3">
                            <div class="d-flex flex-column w-100 justify-content-center align-items-center">
                                <div class="d-flex align-items-start justify-content-between w-100">
                                    <p class="fs-6 w-25">General Conditions of Sale</p>
                                    <div id="uploader2" class="upload-container2 w-75">
                                        <label for="inputTag2">
                                            <span class="iconify icn-up" data-icon="ic:baseline-cloud-upload" style="font-size: 50px; color: gray;"></span>
                                            <input name="condition_of_sale" id="inputTag2" class="form-control upload" type="file" style="display: none;"/>
                                        </label>
                                        <p style="font-size: 20px; font-weight: 500; color: gray;">Drop files here to upload</p>
                                        <div id="imagePreview2" class="position-relative">
                                            <!-- Image Preview Will Be Displayed Here -->
                                        </div>
                                        <span id="removeImage2" class="iconify fs-3 d-none" data-icon="basil:cross-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    <div class="field w-100 d-flex align-items-center">
                        <p class="fw-bold text-wrap w-25">Privacy Consent</p>
                        <select name="privacy_consent" class="w-75 form-select">
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
            <button type="submit" class="submit-btn d-flex align-items-center justify-content-center btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-1 bi bi-floppy" viewBox="0 0 16 16">
                    <path d="M11 2H9v3h2z"/>
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                </svg>
                     Save
            </button>

            <a href="{{ route("providers") }}" class="mx-2 d-flex align-items-center justify-content-center btn btn-light">
                <span class="iconify mx-1" data-icon="ph:arrow-clockwise-bold"></span>
                Cancel
            </a>
        </div>
    </form>

</main>


{{-- @include("footer") --}}