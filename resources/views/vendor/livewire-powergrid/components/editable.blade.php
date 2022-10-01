@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')
@props([
    'primaryKey' => null,
    'row' => null,
    'field' => null,
    'theme' => null,
    'currentTable' => null,
    'tableName' => null,
])
<div 
     x-cloak
     x-data="pgEditable({
       tableName: '{{ $tableName }}',
       id: '{{ $row->{$primaryKey} }}',
       dataField: '{{ $field }}',
       content: '{{ $helperClass->resolveContent($currentTable, $field, $row) }}'
     })"
     >


    <div x-html="content"
         x-show="!editable"
         x-on:click="editable = true"
         @trigger-power-edit.window="editable = is_row_editable"
    ></div>
    <div x-show="editable">
        @if($field === 'product_type')
            <select 
                x-model="editable_data.product_type"
                class="{{ $theme->inputClass }} p-2">
                <option value="food">food</option>
                <option value="non-food">Non Food</option>
            </select>
        @elseif($field === 'supplier')
            <select 
                x-model="editable_data.supplier"
                class="{{ $theme->inputClass }} p-2">
                 @foreach (\App\Models\Supplier::all() as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach
            </select>
        @elseif($field === 'ID')
            <div>
                jrj
            </div>
        @elseif($field === 'product_category')
            <select 
                x-model="editable_data.product_category"
                class="{{ $theme->inputClass }} p-2">
                 @foreach (\App\Models\productCategory::all() as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach
            </select>
         @elseif($field === 'expiry_date_formatted')

           <input
            type="text"
            class="{{ $theme->inputClass }} p-2"
            id="editable_data_{{$row->id}}"
            x-model="editable_data.{{$field}}"
            />
        @elseif($field === 'barcode')
          <input
                type="text"
                oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');"
                class="{{ $theme->inputClass }} p-2"
                x-model="editable_data.{{$field}}"
                >
        @elseif($field === 'expiry_date')
        
           <section class="relative">
               <input
                type="text"
                class="{{ $theme->inputClass }} p-2 .expiry_date_{{$row->id}}"
                id="#expiry_date{{$row->id}}"
                x-model="editable_data.{{$field}}"
                />

                <i class="las la-calendar right-2 top-1 absolute"></i>
                <button 
                    x-on:click="editable_data.{{$field}} = '-'"
                    x-show="editable_data.{{$field}} != '-'"
                    class="bg-green-500 absolute -right-1 -top-2 rounded-full w-4 h-4 flex items-center justify-center">
                        <i class="las la-times text-white "></i>
                </button>

           </section>

        @elseif($field === 'quantity_pcs')
        
          <input
            type="text"
            class="{{ $theme->inputClass }} p-2"
            oninput="this.value = this.value.replace(/^0/, '').replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
            x-model="editable_data.{{$field}}"
            />

         @elseif($field === 'quantity_box')
        
          <input
            type="text"
            class="{{ $theme->inputClass }} p-2"
            oninput="this.value = this.value.replace(/^./, '').replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
            x-model="editable_data.{{$field}}"
            />

        @elseif($field === 'showroom_formatted')
        
          <input
            type="checkbox"
            class="{{ $theme->inputClass }} p-2"
            x-model="editable_data.{{$field}}"

            />

        @else
        <input
            type="text"
            {{-- x-on:keydown.enter="save()" --}}
            {{-- x-on:keydown.enter="alert(4)" --}}
            {{-- :class="{'cursor-pointer': !editable}" --}}
            class="{{ $theme->inputClass }} p-2"
            {{-- x-ref="editable" --}}
            x-model="editable_data.{{$field}}"
            {{-- x-text="content" --}}
            {{-- :value="$root.firstElementChild.innerText" --}}
            />
        @endIf
    </div>

</div>