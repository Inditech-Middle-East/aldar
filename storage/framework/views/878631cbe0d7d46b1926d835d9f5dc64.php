<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Customers'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?>Tenants <?php $__env->stopSection(); ?>

    <div class="row">
        <div class="col-12">
		<div id="addproduct-accordion" class="custom-accordion">
		
					                <div class="card">
                    <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title font-size-16 rounded-circle bg-soft-primary text-primary">
                                            A
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Import Tenants</h5>
                                    <p class="text-muted text-truncate mb-0">Choose file to upload</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                           <form action="<?php echo e(url('/import-excel')); ?>" method="post" enctype="multipart/form-data"> 
						       <?php echo csrf_field(); ?>
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                    </div>

                                    <button class="btn btn-success" type="submit">Upload</button>
                                </div>
						</form>
                        </div>
                    </div>
                </div>
				
            <div class="card">
                <div class="card-body">
				     <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tenants</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-striped mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tenant Name</th>
                                <th>Tenant Code</th>
                                <th>Outlet Code</th>
                                <th>Mall Code</th>
                                <th>Lease Start Date</th>
                                <th>Lease End Date</th>
                                <th>Unit Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($index+1); ?></th>                              
                                <td><?php echo e($row->tenant_name); ?></td>
                                <td><?php echo e($row->tenant_code); ?></td>
                                <td><?php echo e($row->outlet_code); ?></td>
                                <td><?php echo e($row->mall_code); ?></td>
                                <td><?php echo e($row->lease_startdate); ?></td>
                                <td><?php echo e($row->lease_enddate); ?></td>
                                <td><?php echo e($row->unit_type); ?></td>
								<td> <form method="POST" action="<?php echo e(route('viewTenant')); ?>"> 
										<?php echo csrf_field(); ?>
										
									<input type="hidden" value="<?php echo e($row->id); ?>" name="tenant_id">
									<input type="submit" name="View" value="View" class="btn btn-link btn-rounded waves-effect">
									</form>
									</td>
                            </tr>
						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>		 
                </div>
            </div>
			

        </div>
    </div>
    </div>



    <!-- End Page-content -->
    <!--  successfully modal  -->
    <div id="success-btn" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-scroll="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="bx bx-check-circle display-1 text-success"></i>
                        <h3 class="mt-3">New Customer Created Successfully</h3>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	

    <!--  Extra Large modal example -->
    <div class="modal fade new-customer" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="NewCustomers-Username">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username"
                                    id="NewCustomers-Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="NewCustomers-Email">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email" id="NewCustomers-Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="NewCustomers-Phone">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter Phone" id="NewCustomers-Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="NewCustomers-Wallet">Wallet</label>
                                <input type="text" class="form-control" placeholder="0" id="NewCustomers-Wallet">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="text" class="form-control" placeholder="Select Date" id="customers-date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="NewCustomers-Address">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address"
                                    id="NewCustomers-Address">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                    class="bx bx-x me-1"></i> Cancel</button>
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i>
                                Confirm</button>
                        </div>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
 <script src="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AldarAdmin\resources\views/tenant-tenants.blade.php ENDPATH**/ ?>