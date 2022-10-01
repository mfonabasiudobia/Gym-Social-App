@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')
@props([
    'primaryKey' => null,
    'row' => null,
    'field' => null,
    'theme' => null,
    'currentTable' => null,
    'tableName' => null,
])
<div>
   
  @if($field == 'date')
       <div>
           {{\Carbon\Carbon::now()->format('d-m-y');}}
       </div>
  @elseif($field == 'time')
       <div>
           {{\Carbon\Carbon::now()->format('h-i');}}
       </div>
@elseif($field == 'sno')
      
 @elseif($field === 'product_type')
            <select 
                x-model="editable_data.product_type"
                :class="isAutoFill ? 'cursor-not-allowed' : ''"
                :disabled="isAutoFill"
                class="{{ $theme->inputClass }} p-2">
                <option value="">--Select--</option>
                <option value="food">food</option>
                <option value="non-food">Non Food</option>
            </select>
@elseif($field === 'supplier')
            <select 
                x-model="editable_data.supplier"
                x-show="!barcodeNotFound"
                :class="isAutoFill ? 'cursor-not-allowed' : ''"
                :disabled="isAutoFill"
                class="{{ $theme->inputClass }} p-2">
                        <option value="">--Select--</option>
                 @foreach (\App\Models\Supplier::all() as $item)
                        <option value="{{$item->id}}" :class="isDescriptionDropdown && !suppliers.includes({{$item->id}}) ? 'hidden' : ''">{{$item->name}}</option>
                 @endforeach
            </select>

             <span x-show="barcodeNotFound">Barcode not found</span>
@elseif($field === 'product_category')
            <select 
                :class="isAutoFill ? 'cursor-not-allowed' : ''"
                x-show="!barcodeNotFound"
                :disabled="isAutoFill"
                x-model="editable_data.product_category"
                class="{{ $theme->inputClass }} p-2">
                        <option value="">--Select--</option>
                 @foreach (\App\Models\productCategory::all() as $item)
                        <option value="{{$item->id}}" :class="isDescriptionDropdown && !product_categories.includes({{$item->id}}) ? 'hidden' : ''">{{$item->name}}</option>
                 @endforeach
            </select>  

             <span x-show="barcodeNotFound">Barcode not found</span>
@elseif($field === 'description')
        
        <div class="flex items-center space-x-2">


               <input
                    {{-- x-show="!isDescriptionDropdown && !barcodeNotFound" --}}
                    type="text"
                    :class="isAutoFill  ? 'cursor-not-allowed' : ''"
                    :disabled="isAutoFill"
                    x-on:change.debounce="$wire.emit('handleInventory', { data : editable_data, type : '{{$field}}' })"
                    class="{{ $theme->inputClass }} p-2"
                    x-model="editable_data.{{$field}}"
                >

                <select 
                    x-on:change="$wire.emit('handleInventory', { data : editable_data, type : '{{$field}}' })" 
                    class="{{ $theme->inputClass }} p-2" 
                    x-model="editable_data.{{$field}}"
                    x-show="isDescriptionDropdown">
                        <option value="">--Select--</option>
                    <template x-for="description in descriptions">
                        <option :value="description" x-text="description"></option>
                    </template>
                </select>


            <span x-show="barcodeNotFound">Barcode not found</span>

        </div>
@elseif($field === 'barcode')
      <input
            type="text"
            oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');"
            x-on:keydown="reset()" 
            x-on:change.debounce="$wire.emit('handleInventory', { data : editable_data, type : '{{$field}}' })"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"
            >

@elseif($field === 'expiry_date_available_formatted')
        
             <select 
                    x-on:change="$wire.emit('handleInventory', { data : editable_data, type : '{{$field}}' })" 
                    class="{{ $theme->inputClass }} p-2" 
                    x-show="!barcodeNotFound"
                    x-model="editable_data.{{$field}}">
                        <option value="">--Select--</option>
                    <template x-for="date in expiry_dates_available">
                        <option :value="date" x-text="date"></option>
                    </template>
                </select>

                <span x-show="barcodeNotFound">-</span>

@elseif($field === 'expiry_date_count_formatted')
        
        <div x-text='expiry_dates_available.length'>0</div>

@elseif($field === 'remaining_quantity_pcs_formatted')
        
        <div x-text='editable_data.remaining_quantity_pcs_formatted'>0</div>

@elseif($field === 'remaining_total_quantity_pcs_formatted')

        <div x-text='editable_data.remaining_total_quantity_pcs_formatted'>0</div>

@elseif($field === 'remaining_quantity_box_formatted')
        
        <div x-text='editable_data.remaining_quantity_box_formatted'>0</div>

@elseif($field === 'remaining_total_quantity_box_formatted')

        <div x-text='editable_data.remaining_total_quantity_box_formatted'>0</div>

@elseif($field === 'expiry_date_match_formatted')
        
        <div x-show="barcodeNotFound || !isExpiryDateFound">X</div>

        <div x-show="isExpiryDateFound">
            <i class="las la-check"></i>
        </div>

@elseif($field === 'nearest_expiry_date_formatted')
        
        <div>X</div> 

@elseif($field === 'expiry_date')
        
           <section class="flex items-center space-x-2">
            <div class="relative">
               <input
                type="text"
                class="{{ $theme->inputClass }} p-2"
                id="new-date-formatted"
                x-model="editable_data.{{$field}}"
                />

                <i class="las la-calendar right-2 top-1 absolute"></i>
                <button 
                    x-on:click="editable_data.{{$field}} = '-'"
                    x-show="editable_data.{{$field}} != '-'"
                    class="bg-green-500 absolute -right-1 -top-2 rounded-full w-4 h-4 flex items-center justify-center">
                        <i class="las la-times text-white "></i>
                </button>
            </div>

                  <select 
                    x-on:change="$wire.emit('handleInventory', { data : editable_data, type : '{{$field}}' })" 
                    class="{{ $theme->inputClass }} p-2" 
                    x-show="!barcodeNotFound"
                    x-model="editable_data.{{$field}}">
                        <option value="">--</option>
                    <template x-for="date in expiry_dates_available">
                        <option :value="date" x-text="date"></option>
                    </template>
                </select>

           </section>


@elseif($field === 'quantity_pcs')
        
           <input
            type="text"
            oninput="this.value = this.value.replace(/^0/, '').replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
            x-on:input="if(parseInt(event.target.value) > parseInt(editable_data.remaining_total_quantity_pcs_formatted) ){
                $dispatch('set-total-quantity-greater')
            }else if(parseInt(event.target.value) > parseInt(editable_data.remaining_quantity_pcs_formatted)){
                $dispatch('set-quantity-greater')
            }"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"
            >

@elseif($field === 'quantity_box')
        
           <input
            type="text"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
            x-on:change.debounce="if(editable_data.quantity_box > editable_data.remaining_total_quantity_box_formatted){
                $dispatch('set-total-quantity-greater')
            }else if(editable_data.quantity_box > editable_data.remaining_quantity_box_formatted){
                $dispatch('set-quantity-greater')
            }"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"
            >

@elseif($field === 'return')
        
        <input type="checkbox" x-model="isReturnChecked"  />

@elseif($field === 'is_new')
        
        <input type="checkbox" x-model="editable_data.is_new" onClick='return false;'  />


@elseif($field === 'showroom_formatted')
        
        <input type="checkbox" x-model="isShowroomChecked" />

@elseif($field === 'notes')
        
        <input
            type="text"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"
            >

@else
        <input
            type="text"
            :class="isAutoFill  ? 'cursor-not-allowed' : ''"
            :disabled="isAutoFill"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"
            >
@endIf 

</div>
