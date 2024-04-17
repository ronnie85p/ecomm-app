<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function items() 
    {
        return [
            [
                'id' => 1,
                'product_id' => 1,
                'name' => 'Product item 1',
                'description' => 'product item 1 description',   
                'old_price' => 12.50,
                'price' => 10.00,
                'discount_value' => 2.50,
                'cost' => 10.00,             
                'count' => 1,
                'properties' => [],
                'checked' => 1,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'name' => 'Product item 2',
                'description' => 'product item 2 description',   
                'price' => 0.00,
                'cost' => 0.00,             
                'count' => 1,
                'properties' => [],
                'checked' => 1,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'name' => 'Product item 3',
                'description' => 'product item 3 description',   
                'price' => 0.00,
                'cost' => 0.00,             
                'count' => 1,
                'properties' => [],
                'checked' => 1,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'product_id' => 4,
                'name' => 'Product item 4',
                'description' => 'product item 4 description',   
                'price' => 0.00,
                'cost' => 0.00,             
                'count' => 1,
                'properties' => [],
                'checked' => 1,
                'created_at' => null,
                'updated_at' => null
            ],
        ];
    }

    public function total($items)
    {
        $total = [
            'cart_cost' => 0.00,
            'tax_cost' => 0.00,
            'discount_value' => 0.00,
            'cost' => 0.00
        ];

        collect($items)->each(function ($item) use (&$total) {
            $count = intval($item['count']);
            $oldPrice = floatval($item['old_price'] ?? $item['price']);
            $discountVal = floatval($item['discount_value'] ?? 0.00);
            $taxCost = floatval($item['tax_cost'] ?? 0.00);
            $oldCost = $oldPrice * $count;

            $total['cart_cost'] += $oldCost;
            $total['tax_cost'] += $taxCost;
            $total['discount_value'] += $discountVal;
            $total['cost'] += $oldCost - $discountVal + $taxCost;
        });

        return $total;
    }

    public function data()
    {
        $deliveryCost = 0.00;
        $taxIncluded = 0;
        $items = $this->items();
        $total = $this->total($items);

        return [
            'items' => $items,
            'total' => $total,
            'delivery_id' => 1,
            'payment_id' => 1,
            'delivery_cost' => $deliveryCost,
            'tax_included' => 0
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->response($request, [
            'title' => 'Оформление заказа',
            'data' => $this->data(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function deliveries()
    {
        $data = include(resource_path() . '/fakes/delivery/methods.php');

        return $data;
    }

    public function payments()
    {
        $data = include(resource_path() . '/fakes/payment/methods.php');

        return $data;
    }

    public function showDelivery(Request $request)
    {
        return $this->response($request, [
            'data' => $this->data(),
            'deliveries' => $this->deliveries()
        ]);
    }

    public function showOrdering(Request $request)
    {
        return $this->response($request, [
            'data' => $this->data(),
            'payments' => $this->payments()
        ]);
    }
}
