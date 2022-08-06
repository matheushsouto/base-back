<?php

namespace Modules\Partner\Models;

use Modules\Base\Models\BaseModel;
class Webhook extends BaseModel
{

    /**
     * Table columns.
     */
    protected $fillable = [
        'event',
        'url',
        'code',
        'response',
        'type',
        'data',
        'client_id',
        'sent_at',
        'receive_at',
        'running'
    ];

}
