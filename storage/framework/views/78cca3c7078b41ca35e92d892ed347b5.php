<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Add_Product'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?> Add Tenant <?php $__env->stopSection(); ?>

<form method="POST" action="<?php echo e(route('process.form')); ?>">
	<?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                        <div class="p-4">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title font-size-16 rounded-circle bg-soft-primary text-primary">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Tenant Information</h5>
                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            
                                <div class="row">
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="tenant_name">Tenant Name</label>
										<input id="tenant_name" name="tenant_name" placeholder="Enter Store Name" type="text" class="form-control">
										<?php $__errorArgs = ['tenant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="customer_name">Tenant Code</label>
										<input id="tenant_code" name="tenant_code" placeholder="Enter Customer Name" type="text" class="form-control">
										<?php $__errorArgs = ['tenant_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="group_name">Group Name</label>
										<input id="group_name" name="group_name" placeholder="Enter Group Name" type="text" class="form-control">
										<?php $__errorArgs = ['group_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>

							</div>

							<div class="row">
							
							<div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-control" data-trigger name="category"
                                                id="choices-single-category">
                                                <option value="">Select</option>
                                                <option value="EL">Electronic</option>
                                                <option value="FA">Fashion</option>
                                                <option value="FI">Fitness</option>
                                            </select>
											<?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="outlet_code">Outlet Code</label>
										<input id="outlet_code" name="outlet_code" placeholder="Enter Outlet Code" type="text" class="form-control">
										<?php $__errorArgs = ['outlet_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="mall_code">Mall Code</label>
										<input id="mall_code" name="mall_code" placeholder="Enter Mall Code" type="text" class="form-control">
										<?php $__errorArgs = ['mall_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="row">
							
								<div class="col-lg-4">
								<div class="mb-3">
                                <label for="unit_type" class="form-label">Unit Type</label>
                                            <select class="form-control" data-trigger name="unit_type"
                                                id="choices-single-category">
                                                <option value="">Select</option>
                                                <option value="Store">Store</option>
                                                <option value="Kiosk">Kiosk</option>
                                            </select>
										<?php $__errorArgs = ['unit_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
								</div>
								
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="floor">Floor</label>
										<input id="floor" name="floor" placeholder="Enter Floor" type="text" class="form-control">
										<?php $__errorArgs = ['floor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="lease_startdate">Lease Start Date</label>
										<input id="lease_startdate" name="lease_startdate" placeholder="Enter Lease Start Date" type="date" class="form-control">
										<?php $__errorArgs = ['lease_startdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="lease_enddate">Lease End Date</label>
										<input id="lease_enddate" name="lease_enddate" placeholder="Enter Lease End Date" type="date" class="form-control">
										<?php $__errorArgs = ['lease_enddate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="created_date">Created Date</label>
										<input id="created_date" name="created_date" placeholder="Enter Created Date" type="date" class="form-control">
										<?php $__errorArgs = ['created_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="modified_date">Modified Date</label>
										<input id="modified_date" name="modified_date" placeholder="Enter Modified Date" type="date" class="form-control">
										<?php $__errorArgs = ['modified_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="row">

								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="areas">Areas</label>
										<input id="areas" name="areas" placeholder="Enter Areas" type="text" class="form-control">
										<?php $__errorArgs = ['areas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="base_rent">Base Rent</label>
										<input id="base_rent" name="base_rent" placeholder="Enter Base Rent" type="text" class="form-control">
										<?php $__errorArgs = ['base_rent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
									<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="created_by">Created By</label>
										<input id="created_by" name="created_by" placeholder="Enter Created By" type="text" class="form-control">
										<?php $__errorArgs = ['created_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="row">

								<div class="col-lg-4">
								<div class="mb-3">
                                <label for="active" class="form-label">Active</label>
                                            <select class="form-control" data-trigger name="active"
                                                id="choices-single-active">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
											<?php $__errorArgs = ['created_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($message); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
								</div>
								
								<div class="col-lg-4">
									<div class="mb-3">
										<label class="form-label" for="insurance_expiry_date">Insurance Expiry Date</label>
										<input id="insurance_expiry_date" name="insurance_expiry_date" placeholder="Enter Insurance Expiry Date" type="date" class="form-control">
										<?php $__errorArgs = ['insurance_expiry_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p><?php echo e($insurance_expiry_date); ?></p>
									    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								
							</div>
                           
                        </div>
                    </div>
                </div>
				
				
				 <div class="card">
                    <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title font-size-16 rounded-circle bg-soft-primary text-primary">
                                            02
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Login Details</h5>
                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metatitle">Username</label>
                                            <input id="metatitle" name="username" placeholder="Enter Title" type="text"
                                                class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metakeywords">Password</label>
                                            <input id="metakeywords" name="password" placeholder="Enter Keywords"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                    
                        </div>
                    </div>
                </div>

                <div class="card">
                    <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title font-size-16 rounded-circle bg-soft-primary text-primary">
                                            03
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Documents</h5>
                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end row -->
	<div class="row">

	<center>    <button class="btn btn-success waves-effect btn-label waves-light" type="submit" style="width:20%;">Save</button>	 </center>			
	
    </div> <!-- end row-->
	<br>				

	</form>
    <!-- successfully modal  -->
    <div id="success-btn" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-scroll="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="bx bx-check-circle display-1 text-success"></i>
                        <h3 class="mt-3">Product Added Successfully</h3>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/ecommerce-choices.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AldarAdmin\resources\views/tenant-new-tenant.blade.php ENDPATH**/ ?>