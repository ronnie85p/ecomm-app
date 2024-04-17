<?php

namespace App\Http\Controllers\Dashboard\Settings\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarZoneController extends Controller
{
    public function data($car_id, $zone_id = null)
    {
        $cars = include(resource_path() . '/fakes/delivery/cars.php');
        $zones = include(resource_path() . '/fakes/delivery/zones.php');
        $data = include(resource_path() . '/fakes/delivery/car_zones.php');

        $data = array_filter($data, fn($v) => $v['car_id'] == $car_id);

        if ($zone_id) {
            $data = array_filter($data, fn($v) => $v['zone_id'] == $zone_id);
        }

        $data = array_map(function ($v) use ($zones, $cars) {
            $v['zone'] = $zones[array_search($v['zone_id'], array_column($zones, 'id'))]; 
            $v['car'] = $cars[array_search($v['zone_id'], array_column($cars, 'id'))]; 
            return $v;
         }, $data);

        return $data;
    }

    public function zones()
    {
        $data = include(resource_path() . '/fakes/delivery/zones.php');

        return  $data;
    }

    public function car($id)
    {
        $data = include(resource_path() . '/fakes/delivery/cars.php');

        $data = array_filter($data, fn($v) => $v['id'] == $id);
        $data = array_pop($data);

        return $data;
    }

    public function zone($id)
    {
        $data = include(resource_path() . '/fakes/delivery/car_zones.php');
        $data = array_filter($data, fn($v) => $v['id'] == $id);
        $data = array_pop($data);

        return $data;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, string $car_id)
    {
        $car = $this->car($car_id);
        $data = $this->data($car_id);

        return $this->response($request, [
            'title' => 'Транспорт',
            'car' => $car,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, string $car_id)
    {
        $car = $this->car($car_id);

        return $this->response($request, [
            'title' => 'Новая зона',
            'car' => $car
        ]);
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
    public function edit(Request $request, string $id)
    {
        $zones = $this->zones();
        $data = $this->zone($id);
        $car = $this->car($data['car_id']);

        return $this->response($request, [
            'title' => 'Car Zone | Edit',
            'zones' => $zones,
            'car' => $car,
            'data' => $data
        ]);
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
