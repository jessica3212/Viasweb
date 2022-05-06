<?php

namespace App\Http\Livewire;

use App\Models\Municipio;
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

final class ViaTable extends PowerGridComponent
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
            ->showSearchInput()
            ->showToggleColumns()
            ->showExportOption('download', ['excel', 'csv']);
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
    * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\Via>|null
    */
    public function datasource(): ?Builder
    {
        return Via::query();
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
        return [
            'ubicacion_desde' => [
                'nombre',
            ],
            'ubicacion_hasta' => [
                'nombre',
            ],
        ];
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
            ->addColumn('codigo_via', function (Via $model) {
                return '<a href="'.route('vias.show', $model).'">'.$model->codigo_via.'</a>';
            })
            ->addColumn('competencia')
            ->addColumn('responsable')
            ->addColumn('orden_resolucion')
            ->addColumn('nombre_via')
            ->addColumn('longitud')
            ->addColumn('ancho_prom')
            ->addColumn('pr_inicio')
            ->addColumn('pr_final')
            ->addColumn('ubicacion_desde_id', function (Via $via) {
                return $via->ubicacion_desde->nombre;
            })
            ->addColumn('ubicacion_hasta_id', function (Via $via) {
                return $via->ubicacion_hasta->nombre;
            })
            ->addColumn('pav_bueno')
            ->addColumn('pav_regular')
            ->addColumn('pav_malo')
            ->addColumn('afir_bueno')
            ->addColumn('afir_regular')
            ->addColumn('afir_malo')
            ->addColumn('tierra_bueno')
            ->addColumn('tierra_regular')
            ->addColumn('tierra_malo')
            ->addColumn('mej_bueno')
            ->addColumn('mej_regular')
            ->addColumn('mej_malo')
            ->addColumn('inicio_longitud')
            ->addColumn('inicio_latitud')
            ->addColumn('inicio_altura')
            ->addColumn('fin_longitud')
            ->addColumn('fin_latitud')
            ->addColumn('fin_altura')
            ->addColumn('created_at_formatted', function(Via $model) { 
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Via $model) { 
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
                ->title('CODIGO VIA')
                ->field('codigo_via')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('COMPETENCIA')
                ->field('competencia')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('RESPONSABLE')
                ->field('responsable')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('ORDEN RESOLUCION')
                ->field('orden_resolucion')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('NOMBRE VIA')
                ->field('nombre_via')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('LONGITUD')
                ->field('longitud')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('ANCHO PROM')
                ->field('ancho_prom')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('PR INICIO')
                ->field('pr_inicio')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('PR FINAL')
                ->field('pr_final')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('UBICACION DESDE')
                ->field('ubicacion_desde_id'),

            Column::add()
                ->title('UBICACION HASTA')
                ->field('ubicacion_hasta_id'),

            Column::add()
                ->title('PAV BUENO')
                ->field('pav_bueno')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('PAV REGULAR')
                ->field('pav_regular')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('PAV MALO')
                ->field('pav_malo')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('AFIR BUENO')
                ->field('afir_bueno')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('AFIR REGULAR')
                ->field('afir_regular')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('AFIR MALO')
                ->field('afir_malo')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('TIERRA BUENO')
                ->field('tierra_bueno')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('TIERRA REGULAR')
                ->field('tierra_regular')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('TIERRA MALO')
                ->field('tierra_malo')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('MEJ BUENO')
                ->field('mej_bueno')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('MEJ REGULAR')
                ->field('mej_regular')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('MEJ MALO')
                ->field('mej_malo')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('INICIO LONGITUD')
                ->field('inicio_longitud')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('INICIO LATITUD')
                ->field('inicio_latitud')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('INICIO ALTURA')
                ->field('inicio_altura')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('FIN LONGITUD')
                ->field('fin_longitud')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('FIN LATITUD')
                ->field('fin_latitud')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('FIN ALTURA')
                ->field('fin_altura')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('FECHA CREACION')
                ->field('created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title('FECHA ACTUALIZACION')
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
     * PowerGrid Via Action Buttons.
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
               ->route('via.edit', ['via' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('via.destroy', ['via' => 'id'])
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
     * PowerGrid Via Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($via) => $via->id === 1)
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
     * PowerGrid Via Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Via::query()->findOrFail($data['id'])
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
