<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gym Social Media</title>
 
   <link rel="shortcut icon" href="<?php echo e(asset('images/logo.svg')); ?>" type="image/x-icon">
   <meta name="robots" content="noindex, nofollow" />

   <link  rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>?v=<?php echo e(uniqid()); ?>">

    <?php echo $__env->yieldPushContent('header'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
   

<?php echo e($slot); ?>

 

<script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" ></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script defer src="<?php echo e(asset('js/js.js')); ?>?v=<?php echo e(uniqid()); ?>"></script>


<?php echo $__env->yieldPushContent("script"); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo view('livewire-powergrid::assets.scripts')->render(); ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/layouts/base.blade.php ENDPATH**/ ?>