<?php $__env->startSection('main'); ?>
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1> <?php echo e(__('messages.admin.manage_vehicle_model.add_vehicle_model')); ?> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i>  <?php echo e(__('messages.admin.home')); ?></a></li>
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/vehicle_model')); ?>"> <?php echo e(__('messages.admin.manage_vehicle_model.title')); ?></a></li>
      <li class="active"> <?php echo e(__('messages.admin.add')); ?></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title"> <?php echo e(__('messages.admin.manage_vehicle_model.form_title')); ?></h3>
          </div>
          <?php echo Form::open(['url' => LOGIN_USER_TYPE.'/add-vehicle_model', 'class' => 'form-horizontal','files' => true]); ?>

          <div class="box-body">
            <span class="text-danger">(*)<?php echo e(__('messages.admin.fields_are_mandatory')); ?></span>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label"> <?php echo e(__('messages.admin.manage_vehicle_model.form.vehicle_make')); ?><em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('vehicle_make_id',$make, '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('vehicle_make_id')); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label"> <?php echo e(__('messages.admin.manage_vehicle_model.form.model')); ?><em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('model_name', '', ['class' => 'form-control', 'id' => 'input_make_name', 'placeholder' => __('messages.admin.manage_vehicle_model.form.model')]); ?>

                <span class="text-danger"><?php echo e($errors->first('model_name')); ?></span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label"><?php echo e(__('messages.admin.manage_vehicle_model.form.status')); ?><em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => __('messages.admin.manage_vehicle_model.form.status')]); ?>

                <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit"><?php echo e(__('messages.admin.submit')); ?></button>
            <button type="submit" class="btn btn-default" name="cancel" value="cancel"><?php echo e(__('messages.admin.cancel')); ?></button>
          </div>
          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
  </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fdeamvhp/jaoopass.com/resources/views/admin/vehicle_model/add.blade.php ENDPATH**/ ?>