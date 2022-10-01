<section class="space-y-3" x-show="currentComponent == 'post-visibility'">
	       <div class="flex items-center justify-between">
                <span>Who can see your post?</span>
            </div>
            <hr />

            <template x-for="item in [
                {icon : 'las la-globe', title : 'Anyone', short_desc : 'Anyone can see', model : 'public'},
                {icon : 'las la-network-wired', title : 'Network', short_desc : 'Only your network can see this post', model : 'network'},
                {icon : 'las la-eye-slash', title : 'No one', short_desc : 'No one can see this post', model : 'hidden'}
            ]">
                <section class="flex items-center py-2 space-x-3">
                    <div>
                        <i :class="item.icon" class="text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <h2 x-text="item.title" class="text-sm font-bold"></h2>
                        <p x-text="item.short_desc" class="text-xs font-light"></p>
                    </div>
                    <div>
                        <input type="radio" :value="item.model" x-model="postVisibility" class="assent-pink-500" />
                    </div>
                </section>
            </template>

            <hr />

            <div class="flex items-center justify-end">
                <button 
                    type="button"
                    x-on:click="currentComponent = 'main-post'" 
                    class="btn-lg btn-rounded bg-primary text-white">
                    Back
                </button>
            </div>
</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/partials/modal/inc/post-visibility-component.blade.php ENDPATH**/ ?>