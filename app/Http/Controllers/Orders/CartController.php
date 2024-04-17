<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
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

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = $this->items();
        $total = $this->total($items);

        return $this->response($request, [
            'title' => 'Корзина',
            'data' => [
                'items' => $items,
                'total' => $total
            ]
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
}
