<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;

class CategoriesController extends AppController
{
    /**
     * @var CategoriesRepository
     */
    private $repository;

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->index();
        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3',
            'slug' => 'required|string|min:3'
        ]);
        $response = $this->repository->store($request->input());
        if($response['status'] == true) {
            return redirect('/categories')->with('success', 'Category Created');
        } else{
            return redirect('/categories/create')->with('error', 'Category not created');
        }

    }

    public function show($id)
    {
        $category = $this->repository->show($id);
        return view('categories.show')->with('category', $category);
    }

    public function edit($id)
    {
        $category = $this->repository->show($id);
        return view('categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3',
            'slug' => 'required|string|min:3'
        ]);
        $response = $this->repository->update($request->input(), $id);
        if($response['status'] == true) {
            return redirect('/categories')->with('success', 'Category Updated');
        } else {
            return redirect('/categories/'.$id.'/edit')->with('error', 'Category not updated');
        }
    }

    public function destroy($id)
    {
        $result = $this->repository->delete($id);
        if($result == true) {
            return redirect('/categories')->with('success', 'Category Removed');
        } else {
            return redirect('/categories')->with('error', 'Category not removed');
        }

    }

}
