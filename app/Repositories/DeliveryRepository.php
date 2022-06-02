<?php

namespace App\Repositories;

use App\Models\Delivery;
use App\Models\DeliveryItem;
use App\Models\DeliveryItemAsset;
use Illuminate\Database\Eloquent\Collection;

/**
 * DeliveryRepository allows to get prepared data from all models, that depend on Delivery Model
 * DeliveryRepository does not allow add or edit data in models
 * 
 * @package App\Repositories
 */
class DeliveryRepository
{    
    /**
     * get Delivery Item for edit
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAllForTable()
    {
        $deliveries = Delivery::all();

        return $deliveries;
    }
    
    /**
     * get Delivery for edit by ID
     *
     * @param int $id
     * @return App\Models\Delivery
     */
    public function getForEdit($id)
    {
        $delivery = Delivery::find($id);

        return $delivery;
    }

    /**
     * get Delivery Items by Delivery ID
     *
     * @param int $id
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getDeliveryItemsWithAssets($id)
    {
        $deliveryItems = DeliveryItem::where('delivery_id', $id)->get();

        return $deliveryItems;
    }
}

