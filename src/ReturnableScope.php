<?php

namespace Gmask\Returnable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class ReturnableScope implements Scope
{
    /**
     * Apply the scope.
     *
     * @param Builder $builder
     * @param Model   $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $query = $builder->getQuery();
        $returnable = $model->getReturnable();

        if (is_null($builder->getQuery()->columns)) {
            $query->columns = $returnable;
        }
    }

    /**
     * Remove the scope.
     *
     * @param Builder $builder
     */
    public function remove(Builder $builder)
    {
        $query = $builder->getQuery();

        $query->columns = null;
    }
}
