<?php

namespace mrugeshtatvasoft\DataTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \mrugeshtatvasoft\DataTables\DataTables
 *
 * @method static \mrugeshtatvasoft\DataTables\EloquentDataTable eloquent($builder)
 * @method static \mrugeshtatvasoft\DataTables\QueryDataTable query($builder)
 * @method static \mrugeshtatvasoft\DataTables\CollectionDataTable collection($collection)
 *
 * @see \mrugeshtatvasoft\DataTables\DataTables
 */
class DataTables extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatables';
    }
}
