{{-- @include("base") --}}
@include("sidebar")
@include("navbar")
@include("footer")

<div class="content-wrapper p-3">
    <div class="title-bread d-flex align-items-center justify-content-between">
        <h3 class="title text-uppercase">Add Gallery | GALLERY MANAGEMENT</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('providers') }}">Gallery List</a></li>

              <li class="breadcrumb-item" aria-current="page">Create a gallery</li>
            </ol>
        </nav>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('store_provider') }}"    class="form-container bg-white rounded shadow-sm">
        @csrf
        <div class="upper-menu-items d-flex align-items-center gap-3 p-2">
            <a href="{{ route('gallery_index') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="bi:list-task"></span>
                Gallery List
            </a>
            <a href="{{ route('create_gallery') }}" class="d-flex align-items-center gap-1">
                <span class="iconify" data-icon="mdi:create-new-folder"></span>
                Create Gallery
            </a>
        </div>
        <div class="bg-secondary w-100 border"></div>

        <div class="w-100 row p-5">
            <div class="col">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <p class="fs-6 fw-2 w-25">Description</p>
                    <div class="d-flex flex-column align-items-start w-100">
                        <div class="items-container container bg-light border d-flex align-items-start p-2">
                            <div class="dropdown border p-1 bg-light d-flex gap-2">
                                <span class="iconify fs-5" data-icon="mdi:magic"></span>
                            </div>
                        </div>
                        <textarea id="editor" name="description" class="form-control w-100" id="summernote" cols="10" rows="10"></textarea>
                    </div>
                    
                    {{-- <div id="editor"></div> --}}
                </div>
                <div class="d-flex align-items-center justify-content-between my-4">
                    {{-- imgae uploader --}}
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
                                </div> 
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                </div>


            </div>
            <div class="col">
                <div class="d-flex align-items-center justify-content-between gap-5">
                    <p class="fs-6">Supplier</p>
                    <select name="" class="w-100 form-control" id="">
                        <option value="" selected>Select Supplier</option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach


                    </select>
                </div>
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

            <a href="{{ route("providers") }}" class="mx-2 d-flex align-items-center justify-content-center btn btn-light">
                <span class="iconify mx-1" data-icon="ph:arrow-clockwise-bold"></span>
                Cancel
            </a>
        </div>
    </form>

</main>


{{-- @include("footer") --}}
