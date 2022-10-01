@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')
@props([
    'actions' => null,
    'theme' => null,
    'row' => null,
])

<td>

        <button class="px-1" 
                x-on:click="$wire.emit('addInventory', { data : editable_data });">
            <i class='las la-save'></i>
        </button>

</td>