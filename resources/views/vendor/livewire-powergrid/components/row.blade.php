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
        $content = $row->{$column->field};
        $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);
        $field   = $column->dataField != '' ? $column->dataField : $column->field;

        $isQuatityRemaining = in_array($column->field, ['remaining_quantity_pcs_formatted', 
                                  'remaining_quantity_box_formatted', 
                                  'remaining_total_quantity_pcs_formatted', 
                                  'remaining_total_quantity_box_formatted']);
    @endphp


    <td class="{{ $theme->table->tdBodyClass . ' '.$column->bodyClass ?? '' }} 
         <?php  if($column->field == 'notes' && $row->id % 2 == 0) echo 'bg-green-light'; 
                elseif($column->field == 'notes' && $row->id % 2 != 0) echo 'bg-green-dark';
                elseif($isQuatityRemaining  && $row->{$column->field} == 0) echo 'format-2';
                elseif($isQuatityRemaining  && $row->{$column->field} < 1) echo 'format-1';
                elseif($isQuatityRemaining  && $row->{$column->field} > 1) echo 'format-7';
                 ?>"

        :class="editable_data.return ? 'format-5' : editable_data.showroom_formatted ? 'format-6' : ''"
        style="{{ $column->hidden === true ? 'display:none': '' }}; {{ $theme->table->tdBodyStyle . ' '.$column->bodyStyle ?? '' }}"
    >
        @if($column->editable === true && !str_contains($field, '.'))
            <span class="{{ $theme->clickToCopy->spanClass }}">
                        <x-livewire-powergrid::editable
                            :tableName="$tableName"
                            :primaryKey="$primaryKey"
                            :currentTable="$currentTable"
                            :row="$row"
                            :theme="$theme->editable"
                            :field="$field"/>
                        @if($column->clickToCopy)
                    <x-livewire-powergrid::click-to-copy
                        :row="$row"
                        :field="$content"
                        :label="data_get($column->clickToCopy, 'label') ?? null"
                        :enabled="data_get($column->clickToCopy, 'enabled') ?? false"/>
                @endif
                </span>
        @elseif(count($column->toggleable) > 0)
            @include($theme->toggleable->view, ['tableName' => $tableName])
        @else
            <span class="@if($column->clickToCopy) {{ $theme->clickToCopy->spanClass }} @endif">
                    <div>
                        {!! $content !!}
                    </div>
                    @if($column->clickToCopy)
                    <x-livewire-powergrid::click-to-copy
                        :row="$row"
                        :field="$content"
                        :label="data_get($column->clickToCopy, 'label') ?? null"
                        :enabled="data_get($column->clickToCopy, 'enabled') ?? false"/>
                @endif
                </span>
        @endif
    </td>
@endforeach









