 <?php
        $isFollower = AppHelper::exec()->getUserById($userId)->followers->where('from_id', auth()->id())->where('to_id', $userId)->first()
?>

<button class="btn-xs btn-rounded <?php echo e($isFollower ? 'bg-white text-dark border-2' : 'bg-primary text-white'); ?> " x-on:click="$wire.emit('toggleFollow', <?php echo e($userId); ?>)">
    <?php if($isFollower): ?> Following <?php else: ?> Follow <?php endif; ?>
 </button><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/components/buttons/follow1.blade.php ENDPATH**/ ?>