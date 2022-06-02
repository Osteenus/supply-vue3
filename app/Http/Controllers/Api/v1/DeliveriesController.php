<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repositories\DeliveryRepository;

class DeliveriesController extends Controller
{

    private $deliveryRepository;

    public function __construct()
    {
        $this->deliveryRepository = app(DeliveryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //get all deliveries with all attributes
        $deliveries = $this->deliveryRepository->getAllForTable();

        return ['deliveries'=> $deliveries];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'location_from' => 'required',
                'number_of_locations' => 'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'errors' => $validator->errors()->all(),
            ];
        }

        $delivery = Delivery::create([
            'shipping_date' => $request['shipping_date'],
            'location_from' => $request['location_from'],
            'status' => $request['status'],
            'order_number' => $request['order_number'],
            'number_of_locations' => $request['number_of_locations'],
        ]);
 
        return [
            'status' => true,
            'delivery' => $delivery,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, DeliveryRepository $deliveryRepository)
    {
        $id = $request->route('id');
        // get Delivery Item for edit
        $delivery = $deliveryRepository->getForEdit($id);

        // get collection of delivery items included assets by Delivery ID
        $deliveryItems = $deliveryRepository->getDeliveryItemsWithAssets($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
