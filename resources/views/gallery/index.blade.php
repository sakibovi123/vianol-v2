@include("sidebar")
@include("navbar")
@include("footer")
<div class="content-wrapper p-3">
    <div class="provider-container">
        <p>
            Supplier | Supplier Management
        </p>
        <div class="provider-container-links">
            <a href="#" class="links-div fs-6">
                <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span>
                Dashboard
            </a>
            <p class="fs-6 mx-2">/</p>
            <a href="#" class="links-div fs-6">
                {{-- <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span> --}}
                Gallery
            </a>
        </div>
    </div>

    <div class="card-section shadow rounded">
        <div class="d-flex flex-column gap-2">
            <div class="menu-items-upper d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route("gallery_index") }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="bi:list-task"></span>
                        List Gallery
                    </a>
                    <a href="{{ route('create_gallery') }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="mdi:create-new-folder"></span>
                        Create Gallery
                    </a>
                </div>

                <div class="filter-section d-flex align-items-center justify-content-between gap-3">
                    <div class="dropdown">
                        
                        <button class="dropdown-toggle dropdown-btn d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="iconify" data-icon="ph:export"></span>
                            Export
                        </button>
                        <ul id="buttons" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li id="csvButton"><a class="dropdown-item" href="#">CSV</a></li>
                          <li id="excelButton"><a class="dropdown-item" href="#">Excel</a></li>
                        </ul>
                    </div>
                   
                    
                    <a href="{{ asset('providers') }}" class="d-flex align-items-center fs-6">
                        <span class="iconify" data-icon="solar:restart-bold"></span>
                        Refresh
                    </a>
                    <div id="printButton" class="d-flex align-items-center fs-6 dropdown-btn">
                        <span class="iconify" data-icon="material-symbols:print-outline"></span>
                        Print
                    </div>
                    
                    <div class="dropdown">
                        <button class="dropdown-toggle dropdown-btn d-flex align-items-center" type="button" id="dropdownMenuClickableInside" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="iconify" data-icon="mingcute:column-line"></span> Columns
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>#</li>
                            <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Description</li>
                          <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Image</li>
                          
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border w-100 border-1"></div>
            @if ( $gallery )


            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>SUpplier</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $gl)
                        {{-- <tr >
                            <td class="">
                                <div class="img-container bg-light rounded-circle shadow">
                                    <img src="{{ $supplier->image }}" class="object-fit-cover w-100" alt="">
                                </div>

                            </td>
                            <td class="">{{ $supplier->name }}</td>
                            <td class="">{{ $supplier->city }}</td>
                            <td class="">{{ $supplier->address }}</td>
                            <td class="">{{ $supplier->landline_number }}</td>
                            <td class="">{{ $supplier->mobile_phone }}</td>
                            <td class="">{{ $supplier->email }}</td>
                            <td class="">{{ $supplier->created_at }}</td>
                            <td class="">
                                @if ($supplier->is_active == "Active")
                                    <p class="badge bg-success">Active</p>
                                @else
                                    <p class="badge bg-danger">CX</p>
                                @endif

                            </td>

                            <td class="d-flex" colspan="2">
                                <div class="">
                                    <a class="" href="{{ route('fetch_provider', $supplier->id) }}">
                                        <span class="iconify fs-4 text-primary" data-icon="mingcute:edit-line"></span>
                                    </a>
                                </div>

                                <div class="">
                                    <form method="POST" class="h-100 d-flex col" action= "{{ route('destroy_supplier', $supplier->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="border-0 bg-transparent p-0">
                                            <span class="iconify fs-4 text-danger" data-icon="ph:trash"></span>
                                        </button>
                                    </form>
                                </div>


                            </td>
                        </tr> --}}
                    @endforeach


                </tbody>

            </table>
            @endif
        </div>
    </div>

</div>


