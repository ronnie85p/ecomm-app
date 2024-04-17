<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{

    public $categories;
    
    public $products;

    public function categories() 
    {
        if (empty($this->categories)) {
            $data = include(resource_path() . '/fakes/products/categories.php');

            $this->categories = collect($data);
        }

        return $this->categories;
    }

    public function products() 
    {
        if (empty($this->products)) {
            $data = include(resource_path() . '/fakes/products/products.php');

            $this->products = collect($data);
        }

        return $this->products;
    }

    public function buildLinks($categoryId, $routePath, $category, &$links = []) 
    {
        if (empty($category)) return;

        Arr::prepend($links, [
            'text' => $category['name'], 
            'uri' => rtrim($routePath, '/') . '/' . $category['id'],
            'current' => $category['id'] == $categoryId
        ]);

        if (!empty($category['category'])) {
            $this->buildLinks($categoryId, $routePath, $category['category'], $links);
        }

        return $links;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->response($request, [
            'data' => $this->categories()
                ->where('category_id', 0)
        ]);
    }

    public function getProducts(Request $request, ?string $catId = null)
    {
        $category = $this->categories()
            ->firstWhere('id', $catId);
        $category['categories'] = $this->categories()
            ->where('category_id', $catId);

        $categories = $this->categories()
            ->where('category_id', 0)
            ->where('id', '!=', $catId);

        $categories->prepend($category);
        
        // $links = $this->buildLinks($catId, '/categories', $category);

        return $this->response($request, [
            'category' => $category,
            'categories' => $categories,
            // 'links' => $links,
            'data' => $this->products()
                ->where('category_id', $catId)
                ->all()
        ]);
    }

    public function showProduct(Request $request, string $categoryId, string $productId)
    {
        return $this->response($request, [
            'data' => $this->products()
                ->firstWhere('id', $productId)
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
    public function show(Request $request, string $id)
    {
        return $this->response($request, [
            'data' => $this->data($id)
        ]);
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
