@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')

<x-livewire-powergrid::table-base :theme="$theme->table">
    <x-slot name="header">
        <tr class="{{ $theme->table->trClass }}" style="{{ $theme->table->trStyle }}">
            @if($checkbox)
                <x-livewire-powergrid::checkbox-all
                    :checkbox="$checkbox"
                    :theme="$theme->checkbox"/>
            @endif
            @foreach($columns as $column)
                <x-livewire-powergrid::cols
                    :column="$column"
                    :theme="$theme"
                    :sortField="$sortField"
                    :sortDirection="$sortDirection"
                    :enabledFilters="$enabledFilters"/>
            @endforeach

           {{--  @if(isset($actions) && count($actions))
                <th class="{{ $theme->table->thClass .' '. $column->headerClass }}" scope="col"
                    style="{{ $theme->table->thStyle }}" colspan="{{ count($actions )}}"
                    wire:key="{{ md5('actions') }}">
                    {{ trans('livewire-powergrid::datatable.labels.action') }}
                </th>
            @endif --}}
             <th class="{{ $theme->table->thClass .' '. $column->headerClass }}" scope="col"
                    style="{{ $theme->table->thStyle }};color: #fff !important;" colspan="3"
                    wire:key="{{ md5('actions') }}">
                    {{ trans('livewire-powergrid::datatable.labels.action') }}
             </th>
        </tr>
    </x-slot>

    <x-slot name="rows">
        <x-livewire-powergrid::inline-filters
            :makeFilters="$makeFilters"
            :checkbox="$checkbox"
            :actions="$actions"
            :columns="$columns"
            :theme="$theme"
            :filters="$filters"
            :enabledFilters="$enabledFilters"
            :inputTextOptions="$inputTextOptions"
            :tableName="$tableName"
        />
        @if(is_null($data) || count($data) === 0)
            <th>
                <tr class="{{ $theme->table->trBodyClass }}" style="{{ $theme->table->trBodyStyle }}">
                    <td class="{{ $theme->table->tdBodyClass }}" style="{{ $theme->table->tdBodyStyle }}" colspan="{{ (($checkbox) ? 1:0)
                                    + ((isset($actions)) ? 1: 0)
                                    + (count($columns))
                                    }}">
                        <span>{{ trans('livewire-powergrid::datatable.labels.no_data') }}</span>
                    </td>
                </tr>
            </th>
        @endIf
            @if($headerTotalColumn)
                <x-livewire-powergrid::table-header
                    :currentTable="$currentTable"
                    :primaryKey="$primaryKey"
                    :theme="$theme"
                    :columns="$columns"
                    :checkbox="$checkbox"
                    :data="$data"
                    :actions="$actions"
                    :withoutPaginatedData="$withoutPaginatedData"/>
            @endif
            @foreach($data as $row)
                @php
                    $class            = $theme->table->trBodyClass;
                    $rules            = $helperClass->makeActionRules('pg:rows', $row);

                    $ruleSetAttribute = data_get($rules, 'setAttribute');

                    if (filled($ruleSetAttribute)) {
                        foreach ($ruleSetAttribute as $attribute) {
                           if (isset($attribute['attribute'])) {
                              $class .= ' '.$attribute['value'];
                           }
                        }
                    }
                @endphp
                <tr class="{{ $class }}"
                    x-cloak
                    x-data="{
                        editable_data : {
                         id  : {{$row->id}},
                         barcode  : '{{$row->barcode}}',
                         supplier  : '{{$row->supplier_id}}',
                         product_category : {{$row->product_category_id}},
                         product_type  : '{{$row->product_type}}',
                         description  : '{{$row->description}}',
                         expiry_date  : '{{$row->expiry_date}}',
                         unit_per_case  : {{$row->unit_per_case}},
                         quantity_box  : {{$row->quantity_box}},
                         quantity_pcs  : {{$row->quantity_pcs}},
                         notes : '{{$row->notes}}',
                         showroom_formatted : false,
                         return : false,
                        },
                        is_row_editable : false
                   }"

                   x-init="

                   $watch('editable_data', value => {
                         

                         if(universal_data.some((item) => item.id == value.id)){
                            
                            universal_data = universal_data.filter((item) => item.id != value.id );
                         }

                         universal_data.push(value);

                   });

                   $('.expiry_date_{{$row->id}}').datepicker({
                                dateFormat: 'mm-y',
                                changeMonth: true,
                                changeYear: true,
                                showButtonPanel: false,
                                onClose: function(dateText, inst) {

                                    var month = $('#ui-datepicker-div .ui-datepicker-month :selected').val();
                                    var year = $('#ui-datepicker-div .ui-datepicker-year :selected').val();
                                    const newDate = $.datepicker.formatDate('mm-y', new Date(year, month, 1));
                                    $(this).val(newDate);

                                    editable_data.expiry_date = newDate;
                                }
                    }); 

                   {{-- flatpickr(document.querySelector('#editable_data_{{$row->id}}'), {
                    enableTime: false,
                    dateFormat: 'm-y',
                    altInput: false,
                    disableMobile: true,
                    onChange : (dateObj, dateStr) => {
                        expiry_date_formatted = dateStr;
                        this.expiry_date_formatted = dateStr;
                    }
                   }) --}} 
                   "

                    @trigger-power-edit.window="is_row_editable = {{$row->id}} == $event.detail.id ? true : false"
                    style="{{ $theme->table->trBodyStyle }}"
                    wire:key="{{ md5($row->{$primaryKey} ?? $loop->index) }}">
                    @if($checkbox)
                        @php
                            $rules            = $helperClass->makeActionRules('pg:checkbox', $row);
                            $ruleHide         = data_get($rules, 'hide');
                            $ruleDisable      = data_get($rules, 'disable');
                            $ruleSetAttribute = data_get($rules, 'setAttribute');
                        @endphp
                        <x-livewire-powergrid::checkbox-row
                            :theme="$theme->checkbox"
                            :ruleHide="$ruleHide"
                            :ruleDisable="$ruleDisable"
                            :ruleSetAttribute="$ruleSetAttribute[0] ?? []"
                            :attribute="$row->{$checkboxAttribute}"
                            :checkbox="$checkbox"/>
                    @endif

                    <x-livewire-powergrid::row
                        :tableName="$tableName"
                        :currentTable="$currentTable"
                        :primaryKey="$primaryKey"
                        :theme="$theme"
                        :row="$row"
                        :columns="$columns"/>

                    <x-livewire-powergrid::actions
                        :primary-key="$primaryKey"
                        :theme="$theme"
                        :row="$row"
                        :actions="$actions"/>
                </tr>
            @endforeach
    

            @if(in_array(session('current_tab'),['inventory-in', 'inventory-out']))

                @php
                    $class = $theme->table->trBodyClass;
                @endphp

                <tr class="{{ $class }}"
                    :class="barcodeNotFound ? 'format-2' : isReturnChecked ? 'format-5' : isShowroomChecked ? 'format-6' : ''"
                    x-cloak
                    x-data="{
                        editable_data : {
                            id  : 0,
                            barcode  : '',
                            is_new : false,
                            supplier  : '',
                            product_type  : '',
                            description  : '',
                            product_category : '',
                            expiry_date_count_formatted : '',
                            expiry_date_available_formatted : '',
                            remaining_quantity_pcs_formatted : 0,
                            remaining_quantity_box_formatted : 0,
                            remaining_total_quantity_pcs_formatted : 0,
                            remaining_total_quantity_box_formatted : 0,
                            expiry_date_match_formatted : '',
                            nearest_expiry_date_formatted : '',
                            showroom_formatted : '',
                            expiry_date  : '-',
                            unit_per_case  : '',
                            quantity_box  : '',
                            quantity_pcs  : '',
                            notes : ''
                        },
                    descriptions : [],
                    suppliers : [],
                    product_categories : [],
                    expiry_dates_available : [],
                    isDescriptionDropdown : false,
                    isAutoFill : false,
                    barcodeNotFound : false,
                    isReturnChecked : false,
                    isShowroomChecked : false,
                    isExpiryDateFound : false,
                    reset(){
                            this.editable_data.id  = 0;
                            this.editable_data.supplier  = '';
                            this.editable_data.product_type  = '';
                            this.editable_data.description  = '';
                            this.editable_data.product_category = '';
                            this.editable_data.expiry_date_count_formatted = '';
                            this.editable_data.expiry_date_available_formatted = '';
                            this.editable_data.expiry_date_match_formatted = '';
                            this.editable_data.nearest_expiry_date_formatted = '';
                            this.editable_data.showroom_formatted = '';
                            this.editable_data.expiry_date  = '-';
                            this.editable_data.unit_per_case  = '';
                            this.editable_data.quantity_box  = '';
                            this.editable_data.quantity_pcs  = '';
                            this.editable_data.is_new = false;
                            this.editable_data.notes = '';
                            this.editable_data.remaining_total_quantity_pcs_formatted = 0;
                            this.editable_data.remaining_total_quantity_box_formatted = 0;
                            this.editable_data.remaining_quantity_pcs_formatted = 0;
                            this.editable_data.remaining_quantity_box_formatted = 0;
                            this.descriptions = [];
                            this.suppliers = [];
                            this.product_categories = [];
                            this.expiry_dates_available = [];
                            this.isAutoFill = false;
                            this.isDescriptionDropdown = false;
                            this.barcodeNotFound = false;
                            this.isExpiryDateFound = false;
                    }
                   }"

                   @set-new-item-popup.window="editable_data.is_new = true"

                   @set-dropdowns.window="
                        descriptions = $event.detail.descriptions; 
                        suppliers = $event.detail.suppliers;
                        product_categories = $event.detail.product_categories;
                        isDescriptionDropdown = true;
                  "

                  @set-expiry-dates-available-dropdown.window="
                        expiry_dates_available = $event.detail; 
                  "

                  @set-barcode-not-found.window="barcodeNotFound = true"


                  @set-remaining-total-quantity.window="
                    editable_data.remaining_total_quantity_pcs_formatted = $event.detail.total_pcs;
                    editable_data.remaining_total_quantity_box_formatted = $event.detail.total_box; 
                  "

                  @set-auto-fill.window="
                        editable_data.product_type = $event.detail.product_type;
                        editable_data.expiry_date = $event.detail.expiry_date;
                        editable_data.unit_per_case = $event.detail.unit_per_case;
                        //editable_data.quantity_box = $event.detail.quantity_box;
                        //editable_data.quantity_pcs = $event.detail.quantity_pcs;
                        editable_data.supplier = $event.detail.supplier_id;
                        editable_data.description = $event.detail.description;
                        editable_data.product_category = $event.detail.product_category_id;
                        editable_data.expiry_date_count = $event.detail.expiry_date_count;
                        editable_data.remaining_quantity_pcs_formatted = $event.detail.quantity_pcs;
                        editable_data.remaining_quantity_box_formatted = $event.detail.quantity_box;
                        editable_data.expiry_date_match_formatted = $event.detail.expiry_date_match;
                        editable_data.nearest_expiry_date_formatted = $event.detail.nearest_expiry_date;
                        editable_data.notes = $event.detail.notes;
                        isAutoFill = true;
                        barcodeNotFound = false
                   "

                    x-init="
                        {{-- flatpickr(document.querySelector('#new-date-formatted'), {
                            enableTime: false,
                            dateFormat: 'm-y',
                            altInput: false,
                            disableMobile: true,
                            onChange : (dateObj, dateStr) => {
                                expiry_date_formatted = dateStr;
                                this.expiry_date_formatted = dateStr;
                            },
                           }); --}}

                           $('#new-date-formatted').datepicker({
                                dateFormat: 'mm-y',
                                changeMonth: true,
                                changeYear: true,
                                showButtonPanel: false,
                                onClose: function(dateText, inst) {

                                    var month = $('#ui-datepicker-div .ui-datepicker-month :selected').val();
                                    var year = $('#ui-datepicker-div .ui-datepicker-year :selected').val();
                                    const newDate = $.datepicker.formatDate('mm-y', new Date(year, month, 1));
                                    $(this).val(newDate);

                                    editable_data.expiry_date = newDate;
                                }
                            }); 

                           $watch('editable_data.expiry_date', value => {
                                if(expiry_dates_available.includes(value)){
                                    isExpiryDateFound = true;
                                }else{
                                    isExpiryDateFound = false;

                                    if('{{session('current_tab')}}' == 'inventory-out'){
                                        $dispatch('set-expiry-date-not-found')   
                                    }
                                }
                           });

                           $watch('isShowroomChecked', value => isReturnChecked = value && isReturnChecked ? false : false); 
                           $watch('isReturnChecked', value => isShowroomChecked = value && isShowroomChecked ? false : false); 
                           "

                    style="{{ $theme->table->trBodyStyle }}"
                    wire:key="new-row">

                    <x-livewire-powergrid::new-row
                        :tableName="$tableName"
                        :currentTable="$currentTable"
                        :primaryKey="$primaryKey"
                        :theme="$theme"
                        {{-- :row="$row" --}}
                        :columns="$columns"/>

                    <x-livewire-powergrid::new-actions
                        :primaryKey="$primaryKey"
                        :theme="$theme"
                        {{-- :row="$row" --}}
                        :actions="$actions"/>
                </tr>

        @endIf

        @if(is_null($data) || count($data) === 0)
            @if($footerTotalColumn)
                <x-livewire-powergrid::table-footer
                    :currentTable="$currentTable"
                    :primaryKey="$primaryKey"
                    :theme="$theme"
                    :columns="$columns"
                    :checkbox="$checkbox"
                    :data="$data"
                    :actions="$actions"
                    :withoutPaginatedData="$withoutPaginatedData"/>
            @endif
        @endif
    </x-slot>
</x-livewire-powergrid::table-base>
