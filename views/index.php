<?php include "includes/header.php"; ?>

<!-- begin::main -->
<div id="main">
    <!-- begin::main-content -->
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card bg-dark-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-dark rounded-circle">
                                        <i class="fa fa-ambulance"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">Total Cases</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card bg-danger-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-danger rounded-circle">
                                        <i class="fa fa-hotel"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">Total Deaths</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card bg-primary-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-primary rounded-circle">
                                        <i class="fa fa-heartbeat"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">Total Recovered</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card bg-secondary-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-secondary rounded-circle">
                                        <i class="fa fa-plus-circle"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">New Cases Today</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card bg-info-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-info rounded-circle">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">New Deaths Today</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card bg-warning-gradient border-0">
                            <div class="card-body text-center">
                                <figure class="avatar mb-3 border-0">
                                    <span class="avatar-title bg-white text-warning rounded-circle">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </span>
                                </figure>
                                <h2 class="font-weight-bold mb-3">0</h2>
                                <h5 class="mb-0">Critical Cases</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <a href='https://chatr.fr' target='_blank'><img src='../public/assets/images/banner.png'
                                style='width: 100%;' /></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div id="regions_div"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="datatable"
                                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Location</th>
                                                <th>Confirmed Cases</th>
                                                <th>Active Cases</th>
                                                <th>Critical Cases</th>
                                                <th>Deaths</th>
                                                <th>Recovered</th>
                                                <th>New Cases Today</th>
                                                <th>New Deaths Today</th>
                                                <th>Mortality Rate (%)</th>
                                                <th>Recovery Rate (%)</th>
                                                <th>Total Tests</th>
                                            </tr>
                                        </thead>
                                        <tbody> </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>