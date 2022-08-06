<?php

namespace Modules\Partner\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Partner\Http\Requests\ClientRequest;
use Modules\Partner\Models\Client;

class ClientController extends BaseController
{
    protected $filterClientId = false;

    /**
     * ClientController constructor.
     *
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->model     = $client;
        $this->validator = ClientRequest::class;
    }

    // function create(ClientRequest $request)
    // {
    //     $allFields = $request->all();
    //     $social_contract = $request->file('social_contract', true);
    //     if (is_file($social_contract)) {
    //         $path = FileSystemService::uploadFile($social_contract, 'social_contract');
    //         $allFields['social_contract'] =  $path;
    //     } else {
    //         unset($allFields['social_contract']);
    //     }

    //     if (isset($allFields['id'])) {
    //         $item = $this->model->find($allFields['id']);
    //         $item->update($allFields);
    //         return;
    //     }

    //     $this->model->create($allFields);
    // }

    /**
     * Display the specified resource.
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function convertClient($id, $type)
    {
        $client = Client::find($id);
        $client->type = $type;
        $client->save();
        return response()->json($client);
    }
}
