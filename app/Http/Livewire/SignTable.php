<?php

namespace App\Http\Livewire;

use App\Models\Sign;
use App\Models\Via;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class SignTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showToggleColumns()
            // ->persist(['columns', 'filters'])
            ->showToggleColumns()
            ->showSearchInput()
            ->showExportOption('download', ['excel', 'csv', 'pdf']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\Sign>|null
    */
    public function datasource(): ?Builder
    {
        return Sign::query()->with('via');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return ['via' => ['codigo_via', 'nombre_via']];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()

            ->addColumn('id')
            ->addColumn('abscisa' , function (Sign $model) {
                return '<a href="'.route('sign.show', $model).'">'.$model->abscisa.'</a>';
            })
            ->addColumn('costado')
            ->addColumn('descripcion')
            ->addColumn('estado_tablero', function ($model) {
                switch ($model->estado_tablero) {
                    case 'B':
                        return '🟢 Bueno';
                        break;
                    case 'R':
                        return '🟡 Regular';
                        break;
                    case 'M':
                        return '🔴 Malo';
                        break;
                    
                    default:
                        return 'Por revisar';
                        break;
                }
            })
            ->addColumn('estado_paral', function ($model) {
                switch ($model->estado_paral) {
                    case 'B':
                        return '🟢 Bueno';
                        break;
                    case 'R':
                        return '🟡 Regular';
                        break;
                    case 'M':
                        return '🔴 Malo';
                        break;
                    
                    default:
                        return 'Por revisar';
                        break;
                }
            })
            ->addColumn('dimensiones')
            ->addColumn('leyenda')
            ->addColumn('observaciones')
            ->addColumn('cordenadas')
            ->addColumn('via_id', function ($model) {
                return $model->via->codigo_via;
            })
            ->addColumn('created_at_formatted', function(Sign $model) { 
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Sign $model) { 
                return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
            });
    }
    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('ID')
                ->field('id')
                ->makeInputRange(),

            Column::add()
                ->title('ABSCISA')
                ->field('abscisa')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('COSTADO')
                ->field('costado')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('DESCRIPCION')
                ->field('descripcion')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('ESTADO TABLERO')
                ->field('estado_tablero')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('ESTADO PARAL')
                ->field('estado_paral')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('DIMENSIONES')
                ->field('dimensiones')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('LEYENDA')
                ->field('leyenda')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('OBSERVACIONES')
                ->field('observaciones')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('CORDENADAS')
                ->field('cordenadas')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('CODIGO VIA')
                ->field('via_id'),

            Column::add()
                ->title('CREATED AT')
                ->field('created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title('UPDATED AT')
                ->field('updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('updated_at'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Sign Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('sign.edit', ['sign' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('sign.destroy', ['sign' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Sign Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($sign) => $sign->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

     /**
     * PowerGrid Sign Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Sign::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    */
}
