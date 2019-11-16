<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\CV;
use Illuminate\Database\QueryException;

class CategoriesRepository extends GeneralRepository
{
    public function index()
    {
        try {
            return Category::paginate(10);
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
    }

    public function store(array $cat)
    {
        $response = [
            'status' => false
        ];
        try {
            $category = new Category();
            $category->title = $cat['title'];
            $category->slug = $cat['slug'];
            $category->save();
            $response['status'] = true;
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
        return $response;
    }

    public function show(int $id)
    {
        try {
            return Category::find($id);
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
    }

    public function update(array $cat, int $id)
    {
        $response = [
            'status' => false
        ];
        try {
            $category = Category::find($id);
            $category->title = $cat['title'];
            $category->slug = $cat['slug'];
            $category->save();
            $response['status'] = true;
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
        return $response;
    }

    public function delete(int $id)
    {
        try {
            $deleted = Category::destroy($id);

            return $deleted;
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);

            return false;
        }
    }
}