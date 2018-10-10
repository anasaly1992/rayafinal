<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'name_en', 'name_ar','country_id','parent_id',
        $categories=Category::latest()->paginate(50);
        return view('admin.categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Countries=Country::all();
        $categories=Category::all();
        return view('admin.categories.create', compact('Countries','categories'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'name_en', 'name_ar','country_id','parent_id',
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
<<<<<<< HEAD
            'country_id' => 'required',
=======
            'details_en' => 'required',
            'details_ar' => 'required',
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
            'parent_id' => 'nullable',
            'status' => 'required',
            'order' => 'required',
        ]);
<<<<<<< HEAD
        $category=new Category;
        // $building->postcode = $request->postcode ;
        $category->name_en=$request->name_en;
        $category->name_ar=$request->name_ar;
        $category->parent_id=$request->parent_id;
        $category->country_id=$request->country_id;
        $category->status=$request->status;
        $category->order=$request->order;
        $category-> save();
        //$category->country_id()->sync($request->country_id);
=======
        $input = $request->all();
        Category::create($input);

>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
        return redirect()->route('categories.index')
        ->with('success','Category Add successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(Category $category)
    {
        //
    }
=======
    public function show($id)
    {
        //
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));    }
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $Countries=Country::all();
        $categories=Category::all();
        return view('admin.categories.edit', compact('category','Countries','categories'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
=======
    
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
    public function update(Request $request, Category $category)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
<<<<<<< HEAD
            'country_id' => 'required',
=======
            'details_en' => 'required',
            'details_ar' => 'required',
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
            'parent_id' => 'nullable',
            'status' => 'required',
            'order' => 'required',
        ]);
        $category->update($request->all());
        return redirect()->route('categories.index')
        ->with('success','Category Updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('categories.index')
        ->with('success','Category Deleted successfully');
   
    }
}
