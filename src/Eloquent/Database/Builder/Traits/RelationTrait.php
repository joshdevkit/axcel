<?php

namespace Axcel\Halo\Eloquent\Database\Builder\Traits;


trait RelationTrait
{
    /**
     * The loaded relationships for the model.
     *
     * @var array
     */
    protected $relations = [];

    /**
     * Determine if a relation is already loaded.
     *
     * @param string $relation
     * @return bool
     */
    public function relationLoaded($relation)
    {
        return array_key_exists($relation, $this->relations);
    }

    /**
     * Get the loaded relations for the model.
     *
     * @return array
     */
    public function getLoadedRelations()
    {
        return $this->relations;
    }
}
