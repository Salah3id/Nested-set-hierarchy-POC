<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Admin;

/**
 * Class AdminTransformer.
 *
 * @package namespace App\Transformers;
 */
class AdminTransformer extends TransformerAbstract
{
    /**
     * Transform the Admin entity.
     *
     * @param \App\Models\Admin $model
     *
     * @return array
     */
    public function transform(Admin $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
