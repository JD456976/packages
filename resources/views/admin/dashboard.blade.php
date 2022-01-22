<x-admin.layout>
    <x-slot name="title">
        Admin Dashboard
    </x-slot>
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row match-height">
            <div class="col-xl-8 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-warning me-2">
                                        <div class="avatar-content">
                                            <i data-feather='video-off'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ $pending }}</h4>
                                        <p class="card-text font-small-3 mb-0">Pending</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-success me-2">
                                        <div class="avatar-content">
                                            <i data-feather='video'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ $approved }}</h4>
                                        <p class="card-text font-small-3 mb-0">Approved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather='users'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ $totalUsers }}</h4>
                                        <p class="card-text font-small-3 mb-0">Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather='user-x'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ $banned }}</h4>
                                        <p class="card-text font-small-3 mb-0">Banned Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height">
            <!-- Avg Sessions Chart Card starts -->
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row pb-50">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Avg Sessions Chart Card ends -->

            <!-- Support Tracker Chart Card starts -->
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4 class="card-title">Support Tracker</h4>
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 7 Days
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                <h1 class="font-large-2 fw-bolder mt-2 mb-0">163</h1>
                                <p class="card-text">Tickets</p>
                            </div>
                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                <div id="support-trackers-chart"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <div class="text-center">
                                <p class="card-text mb-50">New Tickets</p>
                                <span class="font-large-1 fw-bold">29</span>
                            </div>
                            <div class="text-center">
                                <p class="card-text mb-50">Open Tickets</p>
                                <span class="font-large-1 fw-bold">63</span>
                            </div>
                            <div class="text-center">
                                <p class="card-text mb-50">Response Time</p>
                                <span class="font-large-1 fw-bold">1d</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Support Tracker Chart Card ends -->
        </div>

        <div class="row match-height">
            <!-- Timeline Card -->
            <div class="col-lg-4 col-12">
                <div class="card card-user-timeline">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <i data-feather="list" class="user-timeline-title-icon"></i>
                            <h4 class="card-title">User Timeline</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="timeline ms-50">
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>12 Invoices have been paid</h6>
                                    <p>Invoices are paid to the company</p>
                                    <div class="d-flex align-items-center">
                                        <img class="me-1" src="{{ asset('assets/admin/app-assets/images/icons/json.png') }}" alt="data.json" height="23" />
                                        <h6 class="more-info mb-0">data.json</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Client Meeting</h6>
                                    <p>Project meeting with Carl</p>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-50">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" width="38" height="38" />
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Carl Roy (Client)</h6>
                                            <p class="mb-0">CEO of Infibeam</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Create a new project</h6>
                                    <p>Add files to new design folder</p>
                                    <div class="avatar-group">
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                            <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-20.jpg') }}" alt="Avatar" width="33" height="33" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Update project for client</h6>
                                    <p class="mb-0">Update files as per new design</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Timeline Card -->

            <!-- Sales Stats Chart Card starts -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-start pb-1">
                        <div>
                            <h4 class="card-title mb-25">Sales</h4>
                            <p class="card-text">Last 6 months</p>
                        </div>
                        <div class="dropdown chart-dropdown">
                            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-inline-block me-1">
                            <div class="d-flex align-items-center">
                                <i data-feather="circle" class="font-small-3 text-primary me-50"></i>
                                <h6 class="mb-0">Sales</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <div class="d-flex align-items-center">
                                <i data-feather="circle" class="font-small-3 text-info me-50"></i>
                                <h6 class="mb-0">Visits</h6>
                            </div>
                        </div>
                        <div id="sales-visit-chart" class="mt-50"></div>
                    </div>
                </div>
            </div>
            <!-- Sales Stats Chart Card ends -->

            <!-- App Design Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-app-design">
                    <div class="card-body">
                        <span class="badge badge-light-primary">03 Sep, 20</span>
                        <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
                        <p class="card-text font-small-2 mb-2">
                            You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
                        </p>
                        <div class="design-group mb-2 pt-50">
                            <h6 class="section-label">Team</h6>
                            <span class="badge badge-light-warning me-1">Figma</span>
                            <span class="badge badge-light-primary">Wireframe</span>
                        </div>
                        <div class="design-group pt-25">
                            <h6 class="section-label">Members</h6>
                            <div class="avatar">
                                <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-9.jpg') }}" width="34" height="34" alt="Avatar" />
                            </div>
                            <div class="avatar bg-light-danger">
                                <div class="avatar-content">PI</div>
                            </div>
                            <div class="avatar">
                                <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-14.jpg') }}" width="34" height="34" alt="Avatar" />
                            </div>
                            <div class="avatar">
                                <img src="{{ asset('assets/admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" width="34" height="34" alt="Avatar" />
                            </div>
                            <div class="avatar bg-light-secondary">
                                <div class="avatar-content">AL</div>
                            </div>
                        </div>
                        <div class="design-planning-wrapper mb-2 py-75">
                            <div class="design-planning">
                                <p class="card-text mb-25">Due Date</p>
                                <h6 class="mb-0">12 Apr, 21</h6>
                            </div>
                            <div class="design-planning">
                                <p class="card-text mb-25">Budget</p>
                                <h6 class="mb-0">$49251.91</h6>
                            </div>
                            <div class="design-planning">
                                <p class="card-text mb-25">Cost</p>
                                <h6 class="mb-0">$840.99</h6>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Join Team</button>
                    </div>
                </div>
            </div>
            <!--/ App Design Card -->
        </div>
    </section>
    <!-- Dashboard Analytics end -->
</x-admin.layout>
