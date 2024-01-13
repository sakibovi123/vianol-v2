@include("sidebar")
@include("navbar")
@include("footer")
<div class="content-wrapper p-3">
    <div class="provider-container">
        <p>
            Category | Category Management
        </p>
        <div class="provider-container-links">
            <a href="#" class="links-div fs-6">
                <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span>
                Dashboard
            </a>
            <p class="fs-6 mx-2">/</p>
            <a href="#" class="links-div fs-6">
                {{-- <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span> --}}
                Category
            </a>
        </div>
    </div>

    <div class="card-section shadow rounded">
        <div class="d-flex flex-column gap-2">
            <div class="menu-items-upper d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route("category_index") }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="bi:list-task"></span>
                        List Category
                    </a>
                    <a href="{{ route('category_create') }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="mdi:create-new-folder"></span>
                        Create Category
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
                            <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Name</li>
                            <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Image</li>
                          <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Updated at</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="border w-100 border-1"></div>
            @if ( $categories )


            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>

                        <th>Updated at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                         <tr >
                            <td class="w-25">
                                <div class="img-container bg-light rounded-circle shadow">
                                    <img src="{{ $category->image }}" class="object-fit-cover w-100" alt="">
                                </div>
                            </td>
                            <td class="">{{ $category->category_name }}</td>
                            <td class="">{{ $category->updated_at }}</td>
                            <td class="d-flex" colspan="2">
                                <div class="">
                                    <a class="" href="{{ route('edit_category', $category->id) }}">
                                        <span class="iconify fs-4 text-primary" data-icon="mingcute:edit-line"></span>
                                    </a>
                                </div>

                                <div class="">
                                    <form method="POST" class="h-100 d-flex col" action= "{{ route('delete_category', $category->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="border-0 bg-transparent p-0">
                                            <span class="iconify fs-4 text-danger" data-icon="ph:trash"></span>
                                        </button>
                                    </form>
                                </div>


                            </td>
                        </tr>
                    @endforeach


                </tbody>

            </table>
            @endif
        </div>
    </div>

</div>


