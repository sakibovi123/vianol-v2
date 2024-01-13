@include("sidebar")
@include("navbar")
@include("base")
@include('footer')
<div class="content-wrapper">
    <!--Details Card-->
    <section class="card-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card dashcard border-0">
                        <a href="#">
                            <div class="card-body dashcard-body">
                                <span class="fa-solid fa-wallet card-icon"></span>
                                <div class="card-info">
                                    <p class="card-text">Wallet Balance</p>
                                    <h6 class="balance-text">$1684.94</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashcard border-0 mb-3">
                        <a href="#">
                            <div class="card-body dashcard-body">
                                <span class="fa-solid fa-dollar-sign card-icon"></span>
                                <div class="card-info">
                                    <p class="card-text">Referral Earning</p>
                                    <h6 class="balance-text">$1684.94</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashcard border-0 mb-3">
                        <a href="#">
                            <div class="card-body dashcard-body">
                                <span class="fa-solid fa-scale-unbalanced-flip card-icon"></span>
                                <div class="card-info">
                                    <p class="card-text">Estimate Sales</p>
                                    <h6 class="balance-text">$1684.94</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashcard border-0 mb-3">
                        <a href="#">
                            <div class="card-body dashcard-body">
                                <span class="fas fa-chart-line card-icon"></span>
                                <div class="card-info">
                                    <p class="card-text">Earnings</p>
                                    <h6 class="balance-text">$1684.94</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Charts-->
    <section class="dashboard-top-sec">
        <div class="container-fluid">
            <div class="row">
                <!--Sales Chart-->
                <div class="col-lg-8">
                    <div class="bg-white top-chart-earn">
                        <div class="row">
                            <div class="col-sm-4 my-2 pe-0">
                                <div class="last-month">
                                    <h5>Dashboard</h5>
                                    <p>Overview of Latest Month</p>
                                    <div class="earn">
                                        <h2>$3367.98</h2>
                                        <p>Current Month Sales</p>
                                    </div>
                                    <div class="sale mb-3">
                                        <h2>95</h2>
                                        <p>Current Month Sales</p>
                                    </div>
                                    <a href="#" class="di-btn">Last Month Summary</a>
                                </div>
                            </div>
                            <div class="col-sm-8 my-2 ps-0">
                                <!--Nav tabs-->
                                <div class="classic-tabs">
                                    <div class="tabs-wrapper">
                                        <ul class="nav nav-pills chart-header-tab mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link chart-nav active" id="pills-week-tab" data-bs-toggle="pill"
                                                   data-bs-target="#pills-week" type="button" role="tab" aria-controls="pills-week"
                                                   aria-selected="true">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link chart-nav" id="pills-month-tab" data-bs-toggle="pill"
                                                   data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month"
                                                   aria-selected="false">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link chart-nav" id="pills-year-tab" data-bs-toggle="pill"
                                                   data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year"
                                                   aria-selected="false">Yearly</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-week" role="tabpanel"
                                                 aria-labelledby="pills-week-tab">
                                                <div class="widget-content">
                                                    <div id="weekly"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                                <div class="widget-content">
                                                    <div id="monthly"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                                                <div class="widget-content">
                                                    <div id="yearly"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Trafic Chart-->
                <div class="col-lg-4">
                    <div class="bg-white top-chart-earn">
                        <div class="traffic-title">
                            <p>Traffic Scale</p>
                        </div>
                        <div class="traffic">
                            <div id="chart-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Admin list-->
    <section>
        <div class="all-admin my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="admin-list">
                            <p class="admin-ac-title">All Admin</p>
                            <ul class="admin-ul">
                                <li class="admin-li">
                                    <img src="assets/img/user.png" alt="" class="admin-image">
                                    <div class="admin-ac-details">
                                        <div>
                                            <a href="#" class="admin-name">John Doe</a>
                                            <p class="activty-text">Active Now</p>
                                        </div>
                                    </div>
                                    <div class="status text-success"><i class="fa-sharp fa-solid fa-circle-dot"></i></div>
                                </li>
                                <li class="admin-li">
                                    <img src="assets/img/user.png" alt="" class="admin-image">
                                    <div class="admin-ac-details">
                                        <div>
                                            <a href="#" class="admin-name">Alex Paul</a>
                                            <p class="activty-text">Active 15 min ago</p>
                                        </div>
                                    </div>
                                    <div class="status text-secondary"><i class="fa-sharp fa-solid fa-circle-dot"></i></div>
                                </li>
                                <li class="admin-li">
                                    <img src="assets/img/user.png" alt="" class="admin-image">
                                    <div class="admin-ac-details">
                                        <div>
                                            <a href="#" class="admin-name">Bob Biswas</a>
                                            <p class="activty-text">Active Now</p>
                                        </div>
                                    </div>
                                    <div class="status text-success"><i class="fa-sharp fa-solid fa-circle-dot"></i></div>
                                </li>
                                <li class="admin-li">
                                    <img src="assets/img/user.png" alt="" class="admin-image">
                                    <div class="admin-ac-details">
                                        <div>
                                            <a href="#" class="admin-name">John Smith</a>
                                            <p class="activty-text">Active Now</p>
                                        </div>
                                    </div>
                                    <div class="status text-success"><i class="fa-sharp fa-solid fa-circle-dot"></i></div>
                                </li>
                                <li class="admin-li">
                                    <img src="assets/img/user.png" alt="" class="admin-image">
                                    <div class="admin-ac-details">
                                        <div>
                                            <a href="#" class="admin-name">Petter Decosta</a>
                                            <p class="activty-text">Active 30 min ago</p>
                                        </div>
                                    </div>
                                    <div class="status text-secondary"><i class="fa-sharp fa-solid fa-circle-dot"></i></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="order-list">
                            <p class="order-ac-title">Order Status</p>

                            <div class="data-table-section table-responsive{-sm|-md|-lg|-xl|-xxl}">
                                <!--<table id="order-table" class="table table-striped" style="width:100%">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Age</th>
                                      <th>Start date</th>
                                      <th>Salary</th>
                                    </tr>
                                  </thead>
                                  <tbody class="order-view-tb">
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011-04-25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Garrett Winters</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>63</td>
                                      <td>2011-07-25</td>
                                      <td>$170,750</td>
                                    </tr>
                                    <tr>
                                      <td>Ashton Cox</td>
                                      <td>Junior Technical Author</td>
                                      <td>San Francisco</td>
                                      <td>66</td>
                                      <td>2009-01-12</td>
                                      <td>$86,000</td>
                                    </tr>
                                    <tr>
                                      <td>Cedric Kelly</td>
                                      <td>Senior Javascript Developer</td>
                                      <td>Edinburgh</td>
                                      <td>22</td>
                                      <td>2012-03-29</td>
                                      <td>$433,060</td>
                                    </tr>
                                    <tr>
                                      <td>Airi Satou</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>33</td>
                                      <td>2008-11-28</td>
                                      <td>$162,700</td>
                                    </tr>
                                    <tr>
                                      <td>Brielle Williamson</td>
                                      <td>Integration Specialist</td>
                                      <td>New York</td>
                                      <td>61</td>
                                      <td>2012-12-02</td>
                                      <td>$372,000</td>
                                    </tr>
                                </table>-->
                                <table class="table text-center table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Main Content End-->
