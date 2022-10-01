@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')

@props([
    'theme' => null,
    'row' => null,
    'primaryKey' => null,
    'columns' => null,
    'currentTable' => null,
    'tableName' => null,
    'totalColumn' => null,
])
@foreach($columns as $column)
    @php
        // $content = $row->{$column->field};
        // $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);
        $field   = $column->dataField != '' ? $column->dataField : $column->field;

        // $isQuantityRemaining = in_array($column->field, ['remaining_quantity_pcs_formatted', 
        //                           'remaining_quantity_box_formatted', 
        //                           'remaining_total_quantity_pcs_formatted', 
        //                           'remaining_total_quantity_box_formatted']);
    @endphp
    <td class="{{ $theme->table->tdBodyClass . ' '.$column->bodyClass ?? '' }}"
        style="{{ $column->hidden === true ? 'display:none': '' }}; {{ $theme->table->tdBodyStyle . ' '.$column->bodyStyle ?? '' }}"
        :class="isDescriptionDropdown &&  {{$column->field == 'description'}} ? 'format-4' : ''"
    >

            <span class="{{ $theme->clickToCopy->spanClass }}">

                        <x-livewire-powergrid::new-editable
                            :tableName="$tableName"
                            :primaryKey="$primaryKey"
                            :currentTable="$currentTable"
                            :row="$row"
                            :theme="$theme->editable"
                            :field="$field"/>

                </span>

            

    </td>
@endforeach









