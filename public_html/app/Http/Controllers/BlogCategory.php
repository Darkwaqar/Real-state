<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['url'] = url('/admin/add-blog-category');
        $data['title'] = 'Add Blog Category';
        $data['buttonName'] = 'Add Category';
        return view('admins/blogs/blogcategory',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName'=>'required',
            'categorySlug'=>'required',
            'categoryDp'=>'required|image',
            'status'=>'required',
        ]);
        $tableCategory = new BlogCategories();
        $fileName = time().'aris.'.$request->file('categoryDp')->getClientOriginalExtension();
        //var_dump($fileName);
        $checkCategory = BlogCategories::all();
        $isCountry = $checkCategory->where('bc_slug',$request->post('categorySlug'))->toArray();
        if (count($isCountry) > 0) {
            setFlashData(
                'alert-primary',
                'The category is already exist.',
                redirect()->route('newBlogCategory')
            );
        }
        else{
            $request->file('categoryDp')->move(public_path('images/blogs'),$fileName);
            $tableCategory->bc_name  = $request->post('categoryName');
            $tableCategory->bc_slug  = $request->post('categorySlug');
            $tableCategory->bc_dp  = $fileName;
            $tableCategory->bc_status  = $request->post('status');
            $tableCategory->admin_id  = getAdminId();

            //$tableCountry->save()
            if ($tableCategory->save()) {
                setFlashData(
                    'alert-success',
                    'You have successfully uploaded the category.',
                    redirect()->route('newBlogCategory')
                );
            }
            else{

                setFlashData(
                    'alert-primary',
                    'You can\'t add the category right now.',
                    redirect()->route('newBlogCategory')
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function blogcategories(Request $request)
    {


        $search = $request['s'] ?? "";
        if (!empty($search) && isset($search)) {
            $data = ['blogCategories'=>BlogCategories::withTrashed()
            ->with('admin')
            ->where('bc_name','like','%'.$search.'%')->simplePaginate(20)];
        }
        else{
            $data = ['blogCategories'=>BlogCategories::withTrashed()
            ->with('admin')
            ->simplePaginate(20)];
        }

        return view('admins/blogs/blogcategories')->with($data);
    }

    public function show(BlogCategories $blogCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategories $blogCategories)
    {

            $data['myCategory'] = $blogCategories->toArray();
            //dd($data['myCategory']);
            $data['buttonName'] = 'Update Category';
            $data['url'] = url('/admin/update-blog-category/'. $data['myCategory']['bc_id']);
            $data['title'] = 'Update Now';
            return view('admins/blogs/blogcategory',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategories $blogCategories)
    {
        //dd($blogCategories->toArray());
        $request->validate([
            'categoryName'=>'required',
            'categorySlug'=>'required',
            'status'=>'required',
        ]);

        $tableCategory = $blogCategories->find($request->post('xfxc'));
        //var_dump($fileName);
        $checkCtegory = $blogCategories->all();
        $oldImage = $blogCategories->toArray()['bc_dp'];
        $isCategory = $checkCtegory->
        where('bc_slug',$request->post('categorySlug'))
            ->where('bc_id','!=',$request->post('xfxc'))
            ->toArray();
            //dd($isCategory);
        if (count($isCategory) > 0) {
            setFlashData(
                'alert-primary',
                'The category is already exist.',
                redirect()->route('blogCategory')
            );
        }
        else{
            if ($request->exists('categoryDp')) {
                $fileName = time().'aris.'.$request->file('categoryDp')->getClientOriginalExtension();
                $request->file('categoryDp')->move(public_path('images/blogs'),$fileName);
                $tableCategory->bc_dp  = $fileName;
            }

            $filePath = 'public/images/blogs';
            //var_dump($request->all());
            //dd();
            $tableCategory->bc_name  = $request->post('categoryName');
            $tableCategory->bc_slug  = $request->post('categorySlug');
            $tableCategory->bc_status  = $request->post('status');
            $tableCategory->admin_id  = getAdminId();
            //$tableCountry->save()

            if ($tableCategory->save()) {

                if (file_exists($filePath.'/'.$oldImage) && $request->exists('categoryDp')) {
                    unlink($filePath.'/'.$oldImage);
                }
                setFlashData(
                    'alert-success',
                    'You Have successfully updated the category.',
                    redirect()->route('blogCategory')
                );
            }
            else{
                setFlashData(
                    'alert-primary',
                    'You can\'t update the category right now.',
                    redirect()->route('blogCategory')
                );


            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategories $blogCategories)
    {
        if ($blogCategories->delete()) {
            setFlashData(
                'alert-success',
                'You have successfully deleted the blog category',
                redirect()->route('blogCategory')
            );
        }
        else{
            setFlashData(
                'alert-primary',
                'You can\'t delete the blog category right now.',
                redirect()->route('blogCategory')
            );
        }
    }

    public function restoreBlogCategory($id)
    {
        if (isset($id)) {
            $isCountryExist = BlogCategories::withTrashed()->where('bc_id',$id)->restore();
            if ($isCountryExist) {
                setFlashData(
                    'alert-success',
                    'You have successfully restored the category',
                    redirect()->route('blogCategory')
                );
            }
            else{
                setFlashData(
                    'alert-primary',
                    'You can\'t restore the category right now.',
                    redirect()->route('blogCategory')
                );
            }
        }
        else{
            setFlashData(
                'alert-primary',
                'The city is already exist.',
                redirect()->route('blogCategory')
            );
        }
    }
}
