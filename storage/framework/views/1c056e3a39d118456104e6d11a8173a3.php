<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('pagetitle'); ?>Dashboard <?php $__env->stopSection(); ?>
<div class="row">
    <div class="col-xxl-9">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <div class="avatar-title rounded bg-primary bg-gradient">
                                        <i data-eva="pie-chart-2" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">Revenue</p>
                                <h4 class="mb-0">$21,456</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-end ms-2">
                                <div class="badge rounded-pill font-size-13 badge-soft-success">+ 2.65%
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <div class="avatar-title rounded bg-primary bg-gradient">
                                        <i data-eva="shopping-bag" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">Orders</p>
                                <h4 class="mb-0">5,643</h4>
                            </div>
                            <div class="flex-shrink-0 align-self-end ms-2">
                                <div class="badge rounded-pill font-size-13 badge-soft-danger">- 0.82%
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <div class="avatar-title rounded bg-primary bg-gradient">
                                        <i data-eva="people" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">Tenants</p>
                                <h4 class="mb-0"><?php echo e($tenantCount); ?></h4>
                            </div>
                            <div class="flex-shrink-0 align-self-end ms-2">
                                <div class="badge rounded-pill font-size-13 badge-soft-danger">- 1.04%
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!--   on end row -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-3">Insurance Expiry</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Report By:</span> <span class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                                <a class="dropdown-item" href="#">Today</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Tenant Name</th>
                                <th class="align-middle">Tenant Code</th>
                                <th class="align-middle">Mall Code</th>
                                <th class="align-middle">Outlet Code</th>
                                <th class="align-middle">Floor</th>
                                <th class="align-middle">Insurance Expiry</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-semibold"><?php echo e($row->tenant_name); ?></a> </td>
                                <td><?php echo e($row->tenant_code); ?></td>
                                <td><?php echo e($row->mall_code); ?></td>
                                <td> <?php echo e($row->outlet_code); ?> </td>
                                <td><?php echo e($row->floor); ?></span> </td>
                                <td class="text-center"> <span class="badge badge-pill badge-soft-success font-size-11"><?php echo e($row->lease_enddate); ?></span> </td>
                            </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
            <!-- end card body -->
        </div>

        <!-- end card -->

        <!-- end row -->
    </div>
    <!-- end col -->
    <div class="col-xxl-3">

        <div class="user-sidebar">
            <div class="card">
                <div class="card-body p-0">
                    <div class="user-profile-img">
                        <img src="<?php echo e(URL::asset('assets/images/pattern-bg.jpg')); ?>" class="profile-img profile-foreground-img rounded-top"
                            style="height: 120px;" alt="">
                        <div class="overlay-content rounded-top">
                            <div>
                                <div class="user-nav p-3">
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-eva="more-horizontal-outline" data-eva-width="20"
                                                    data-eva-height="20" class="fill-white"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end user-profile-img -->

                    <div class="mt-n5 position-relative">
                        <div class="text-center">
                            <img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?><?php endif; ?>" alt=""
                                class="avatar-xl rounded-circle img-thumbnail">

                            <div class="mt-3">
                                <h5 class="mb-1"><?php echo e(Auth::user()->name); ?></h5>
                                <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="row text-center pb-3">
                            <div class="col-6 border-end">
                                <div class="p-1">
                                    <h5 class="mb-1">1,269</h5>
                                    <p class="text-muted mb-0">Products</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <h5 class="mb-1">5.2k</h5>
                                    <p class="text-muted mb-0">Followers</p>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">


                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-3">Earning</h5>
                                </div>
                                <div>
                                    <button class="btn btn-link py-0 shadow-none" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-trigger="hover" title="Info">
                                        <i data-eva="info-outline" class="fill-muted" data-eva-height="20"
                                            data-eva-width="20"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="chart-radialBar" class="apex-charts" data-colors='["#3b76e1"]'></div>

                            <div class="text-center mt-4">
                                <h4>$26,256</h4>
                                <p class="text-muted">Earning this Month</p>
                                <div class="d-flex align-items-start justify-content-center gap-2">
                                    <div class="badge rounded-pill font-size-13 badge-soft-success">+ 2.65%
                                    </div>
                                    <div class="text-muted text-start text-truncate">From previous period</div>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <div class="px-4 mx-n3" data-simplebar style="height: 258px;">

                            <div>
                                <h5 class="card-title mb-3">Recent Activity</h5>

                                <ul class="list-unstyled mb-0">
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">12</h5>
                                                        <div>Sep</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0">Responded to need “Volunteer Activities"</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">11</h5>
                                                        <div>Sep</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0">Everyone realizes would be desirable... <a
                                                        href="javascript: void(0);">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">10</h5>
                                                        <div>Sep</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0">
                                                    Joined the group “Boardsmanship Forum”</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <a href="#" class="btn btn-link w-100 shadow-none"><i
                                                class="mdi mdi-loading mdi-spin me-2"></i> Load More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <!-- end col -->

    <div class="col-xl-6">

        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AldarAdmin\resources\views/index.blade.php ENDPATH**/ ?>