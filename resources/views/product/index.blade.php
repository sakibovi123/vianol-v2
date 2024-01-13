@include("sidebar")
@include("navbar")
@include("footer")
<div class="content-wrapper p-3">
    <div class="provider-container">
        <p>
            Product | Product Management
        </p>
        <div class="provider-container-links">
            <a href="#" class="links-div fs-6">
                <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span>
                Dashboard
            </a>
            <p class="fs-6 mx-2">/</p>
            <a href="#" class="links-div fs-6">
                {{-- <span class="iconify icn fs-4" data-icon="clarity:dashboard-line"></span> --}}
                Products
            </a>
        </div>
    </div>

    <div class="card-section shadow rounded">
        <div class="d-flex flex-column gap-2">
            <div class="menu-items-upper d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('products_index') }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="bi:list-task"></span>
                        Product List
                    </a>
                    <a href="{{ route('create_product') }}" class="d-flex align-items-center gap-1">
                        <span class="iconify" data-icon="mdi:create-new-folder"></span>
                        Create Product
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


                    <a href="{{ asset('products') }}" class="d-flex align-items-center fs-6">
                        <span class="iconify" data-icon="solar:restart-bold"></span>
                        Refresh
                    </a>
                    <div id="printButton" class="d-flex align-items-center fs-6 dropdown-btn">
                        <span class="iconify" data-icon="material-symbols:print-outline"></span>
                        Print
                    </div>
                    {{-- <div id="toggleColumnBtn" class="d-flex align-items-center fs-6 dropdown-btn">
                        <span class="iconify" data-icon="mingcute:column-line"></span>
                        Column
                    </div> --}}
                    <div class="dropdown">
                        <button class="dropdown-toggle dropdown-btn d-flex align-items-center" type="button" id="dropdownMenuClickableInside" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="iconify" data-icon="mingcute:column-line"></span> Columns
                        </button>
                        <ul class="dropdown-menu columns-drop" aria-labelledby="dropdownMenuButton1">
                          <li class="toggle-vis dropdown-item" data-column="0" ><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Image</li>
                          <li class="toggle-vis dropdown-item" data-column="1"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>First Name</li>
                          <li class="toggle-vis dropdown-item" data-column="2"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>City</li>
                          <li class="toggle-vis dropdown-item" data-column="3"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Address</li>
                          <li class="toggle-vis dropdown-item" data-column="4"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Landline Phone</li>
                          <li class="toggle-vis dropdown-item" data-column="5"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Mobile Phone</li>
                          <li class="toggle-vis dropdown-item" data-column="6"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Email</li>
                          <li class="toggle-vis dropdown-item" data-column="7"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Creattion Date</li>
                          <li class="toggle-vis dropdown-item" data-column="8"><span class="iconify toggle-icn fs-4 mx-2" data-icon="mdi:tick"></span>Status</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border w-100 border-1"></div>
            {{-- @if ( $suppliers ) --}}


            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Start of operation</th>
                        <th>End of operation</th>
                        <th>Price</th>
                        <th>%</th>
                        <th>Adults</th>
                        <th>Boys</th>
                        <th>Infants</th>
                        <th>Suppliers</th>
                        <th>Top</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $products as $product )
                    <tr class="p-3">
                        <td class="">
                            <div class="image-container">
                                <img class=""
                                     src="{{ $product->image }}"
                                     alt="">
                            </div>
                        </td>

                        <td>{{ $product->product_title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->operation_from_date }}</td>
                        <td>{{ $product->operation_to_date }}</td>
                        <td>{{ $product->total_price }}</td>
                        <td>---</td>
                        <td>{{ $product->adult_amount }}</td>

                        <td>{{ $product->boy_amount }}</td>
                        <td>{{ $product->infant_amount }}</td>
                        <td>{{ $product->supplier->name }}</td>
                        <td>TOP</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td colspan="2" class="d-flex">
                            <a href="{{ route("edit_product", $product->id) }}">
                                <span class="iconify fs-4 text-primary" data-icon="mingcute:edit-line"></span>
                            </a>
                            <form action="{{ route('delete_product', $product->id) }}">
                                @csrf
                                @method("DELETE")
                                <button class="border-0 bg-transparent" type="submit">
                                    <span class="iconify fs-4 text-danger" data-icon="ph:trash"></span>
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach
                    <tr></tr>


                </tbody>

            </table>

        </div>
    </div>

</div>

