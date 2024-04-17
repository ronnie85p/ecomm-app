<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function data()
    {
        return [
            [
                'id' => 0,
                'by_default' => 1,
                'fulltext' => 'Россия, Московская обл., г. Солнечногорск, ул. Баранова, 16',
                'city' => 'г. Солнечногорск',
                'street' => 'ул. Баранова',
                'building' => 16,
                'user_id' => 1,
                'recipient_id' => 1,
                'recipient' => [
                    'fullname' => 'Pupkin Ivan Ivanovich',
                    'phone' => '+7 900 899 4563',
                    'company_id' => 1,
                    'company' => [
                        'fulltext' => 'ООО ПОМИДОР-ЭКСПЕРТ ИНН ОГРН КПП'
                    ]
                ]
            ],
            [
                'id' => 1,
                'fulltext' => 'Россия, Московская обл., г. Солнечногорск, ул. Баранова, 16, офис 2',
                'city' => 'г. Солнечногорск',
                'street' => 'ул. Баранова',
                'comment' => 'comment',
                'building' => 16,
                'user_id' => 1,
                'recipient_id' => 1,
                'recipient' => [
                    'fullname' => 'Pupkin Ivan Ivanovich',
                    'phone' => '+7 900 899 4563',
                    'company_id' => 1,
                    'company' => [
                        'fulltext' => 'ООО ПОМИДОР-ЭКСПЕРТ ИНН ОГРН КПП'
                    ]
                ]
            ],
        ];
    }

    public function one($id)
    {
        return $this->data()[$id];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->response($request, [
            'data' => $this->data()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return $this->response($request, [
           
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
        return $this->response($request, [
           'data' => $this->one($id)
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
