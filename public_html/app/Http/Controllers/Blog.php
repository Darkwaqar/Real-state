<?php



namespace App\Http\Controllers;



use App\Mail\AgentActivation;

use App\Mail\TestEmailSes;

use App\Models\BlogCategories;

use App\Models\Blogs;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class Blog extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function textemailses(){

        $data = [];

        Mail::to('shakzee171@gmail.com')->send(new TestEmailSes($data));

    }

    public function index(Request $request)

    {

        // $blogCate = BlogCategories::where('bc_status', 1)
        // ->whereHas('blogs', function ($query) {
        //     $query->where('b_type', 'blog');
        // })
        // ->withCount(['blogs' => function ($query) {
        //     $query->where('b_type', 'blog');
        // }])
        // ->get()
        // ->toArray();

        $search = $request['s'] ?? "";

        if (!empty($search) && isset($search)) {
            $data = ['blogs'=>Blogs::withTrashed()
            ->with('admin')
            ->with('category')
            //->where('b_type','blog')
            ->where('blog_title','like','%'.$search.'%')->simplePaginate(20)];
        }
        else{

            $data = ['blogs'=>Blogs::where('b_type','blog')
            ->with('admin')
            ->with('category')
            //->where('b_type','blog')
            ->simplePaginate(20)];
        }


        //$data['blogCate'] = $blogCate;
        return view('blogs.main',$data);
    }





    public function news(Request $request)

    {



        //dd('not working..');

        $blogCate = BlogCategories::where('bc_status',1)

        ->withCount('blogs')

        ->whereHas('blogs', function($query) use ($request) {

            $query->where('b_type', 'news');

        })

        ->get()->toArray();



        $search = $request['s'] ?? "";

        if (!empty($search) && isset($search)) {

            $data = ['blogs'=>Blogs::withTrashed()

            ->with('admin')

            ->with('category')

            ->where('blog_title','like','%'.$search.'%')

            ->where('b_type','news')

            ->simplePaginate(20)];

        }

        else{

            $data = ['blogs'=>Blogs::withTrashed()

            ->with('admin')

            ->with('category')

            ->where('b_type','news')

            ->simplePaginate(20)];

        }



        $data['blogCate'] = $blogCate;

        return view('blogs/news',$data);

    }



    public function newsCategory(BlogCategories $blogCategories){

        $request    = request();

        $blogCate = BlogCategories::where('bc_status',1)->withCount('blogs')

        ->whereHas('blogs', function($query) use ($request) {

            $query->where('b_type', 'news');

        })

        ->get()->toArray();



        $data = ['blogs'=>Blogs::withTrashed()

        ->with('admin')

        ->where('category_id',$blogCategories->toArray()['bc_id'])

        ->with('category')

        ->where('b_type','news')

        ->simplePaginate(20)];

        $data['blogCate'] = $blogCate;

        return view('blogs/newsCategory',$data);

    }



    public function newsShow(Blogs $blogs)

    {

        $request    = request();

        //$check = BlogCategories::withCount('blogs');

        //dd($check);

        $blogCate = BlogCategories::where('bc_status',1)->withCount('blogs')

        ->whereHas('blogs', function($query) use ($request) {

            $query->where('b_type', 'news');

        })

        ->get()->toArray();

        //dd($blogCate);

        $data['blogCate'] = $blogCate;

        $data['releatedBlog'] = Blogs::where('category_id',$blogs->toArray()['category_id'])

        ->where('b_type','news')

        ->with('admin')

        ->limit(2)->get();

        //var_dump($blotCate->toArray());

        //dd();

        //$array = Blogs::with(['admin','category'])->where('b_id',$blogs->toArray()['b_id']);

        //dd($blogs->load('admin')->load('category')->toArray());

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();


        return view('blogs.newsShow',$data);

    }

    public function homebuyingguide(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/homebuyingguide',$data);

    }



    public function homesellingguide(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/homesellingguide',$data);

    }



    public function presentmortagerates(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/presentmortagerates',$data);

    }





    public function mortgageorbuy(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/mortgageorbuy',$data);

    }





    public function arismarketupdatedynmic(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/arismarketupdatedynmic',$data);

    }



    public function mortgageLearning(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/mortgageLearning',$data);

    }



    public function lenderResource(Blogs $blogs)

    {

        $request    = request();

        $data['singleBlog'] = $blogs->load('admin')->load('category')->toArray();

        return view('blogs/lenderResource',$data);

    }

    public function category(BlogCategories $blogCategories){

        $blogCate = BlogCategories::where('bc_status',1)->withCount('blogs')->get()->toArray();

        $data = ['blogs'=>Blogs::withTrashed()

        ->with('admin')

        ->where('category_id',$blogCategories->toArray()['bc_id'])

        ->with('category')

        ->simplePaginate(20)];

        $data['blogCate'] = $blogCate;

        return view('blogs/category',$data);

    }



    /**

     * Show the form for creating a new resource...

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $data['allBlogCat'] = BlogCategories::all()->toArray();

        //dd($data['allBlogCat']);
        $data['url'] = url('/admin/add-blog');
        $data['title'] = 'Add a new Blog';
        $data['buttonName'] = 'Add Blog';
        return view('admins/blogs/newblog',$data);

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
            'blogName'=>'required',
            'blogSlug'=>'required',
            'blogCategory'=>'required',
            'blogBody'=>'required',
            'blogType'=>'required',
            'blogDp'=>'required|image',
            'status'=>'required',
            'metaTitle'=>'required',
        ]);
        $tableBlog = new Blogs();
        $fileName = time().'aris.'.$request->file('blogDp')->getClientOriginalExtension();
        $checkBlog = Blogs::all();
        $isCountry = $checkBlog->where('b_slug',$request->post('blogSlug'))->toArray();
        if (count($isCountry) > 0) {
            setFlashData(
                'alert-primary',
                'The blog is already exist.',
                redirect()->route('blogs')
            );
        }

        else{
            $request->file('blogDp')->move(public_path('images/blogs'),$fileName);
            $tableBlog->blog_title  = $request->post('blogName');
            $tableBlog->b_slug  = $request->post('blogSlug');
            $tableBlog->category_id  = $request->post('blogCategory');
            $tableBlog->b_body  = $request->post('blogBody');
            $tableBlog->meta_title = $request->post('metaTitle');
            $tableBlog->b_status  = $request->post('status');
            $tableBlog->b_type  = $request->post('blogType');
            $tableBlog->blog_cover  = $fileName;
            $tableBlog->admin_id  = getAdminId();
            //$tableCountry->save()
            if ($tableBlog->save()) {
                setFlashData(
                    'alert-success',
                    'You have successfully uploaded the package.',
                    redirect()->route('blogs')

                );

            }

            else{

                setFlashData(
                    'alert-primary',
                    'You can\'t add the blog right now.',
                    redirect()->route('blogs')

                );

            }

        }

    }



    public function blogs(Request $request)
    {
        $search = $request['s'] ?? "";
        if (!empty($search) && isset($search)) {
            $data = ['blogs'=>Blogs::withTrashed()
            ->with('admin')
            ->where('blog_title','like','%'.$search.'%')->paginate(100)];
        }
        else{
            $data = ['blogs'=>Blogs::withTrashed()
            ->with('admin')
            ->paginate(100)];
        }
        return view('admins/blogs/home')->with($data);

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Blogs  $blogs

     * @return \Illuminate\Http\Response

     */

    public function show(Blogs $blogs)

    {

        $request    = request();

        // //$check = BlogCategories::withCount('blogs');
        // $blogCate = BlogCategories::where('bc_status',1)->withCount('blogs');
        // //dd($blogCate->get());

        // $blogCate = $blogCate->whereHas('blogs', function($query) use ($request) {
        //     $query->where('b_type', 'blog');
        // });

        // $blogCate = $blogCate->get()->toArray();
        // //dd($blogCate);

        // $data['blogCate'] = $blogCate;
        // //dd($data['blogCate']);

        // $blogCate = BlogCategories::where('bc_status',1)->withCount('blogs')
        // ->whereHas('blogs', function($query) use ($request) {
        //     $query->where('b_type', 'blog');
        // })
        // ->get()->toArray();

        // $data['blogCate'] = $blogCate;

        //dd($data['blogCate']);

        $data['releatedBlog'] = Blogs::where('category_id',$blogs->toArray()['category_id'])
        ->with('admin')
        ->where('b_type','blog')
        ->limit(2)->get();

        //var_dump($blotCate->toArray());
        //dd();
        //$array = Blogs::with(['admin','category'])->where('b_id',$blogs->toArray()['b_id']);
        //dd($blogs->load('admin')->load('category')->toArray());

        $data['singleBlog'] = $blogs
        ->load('admin')
        ->load('category')
        ->toArray();
        //dd( $data['singleBlog']);
        return view('blogs.singleBlog',$data);

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Blogs  $blogs

     * @return \Illuminate\Http\Response

     */

    public function edit(Blogs $blogs)

    {

        $data['allBlogCat'] = BlogCategories::all()->toArray();

        $data['myBlog'] = [];

        $data['myBlog'] = $blogs->toArray();

        $data['url'] = url('/admin/update-blog/'.$data['myBlog']['b_id']);

        $data['title'] = 'Update Blog';

        $data['buttonName'] = 'Update Blog';

        return view('admins/blogs/newblog',$data);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Blogs  $blogs

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Blogs $blogs)

    {





        $request->validate([

            'blogName'=>'required',

            'blogSlug'=>'required',

            'blogCategory'=>'required',

            'blogBody'=>'required',

            'blogType'=>'required',

            'status'=>'required',
            'metaTitle'=>'required',

        ]);



        $checkBlog = Blogs::all();

        $oldImage = $blogs->toArray()['blog_cover'];

        //dd($oldImage);

        $isblog = $checkBlog->

        where('blog_cover',$request->post('blogSlug'))

            ->where('b_id','!=',$request->post('xfxc'))

            ->toArray();

        if (count($isblog) > 0) {

            setFlashData(

                'alert-primary',

                'The blog is already exist.',

                redirect()->route('blogs')

            );

        }

        else{

            if ($request->exists('blogDp')) {

                $fileName = time().'mg.'.$request->file('blogDp')->getClientOriginalExtension();

                $request->file('blogDp')->move(public_path('images/blogs'),$fileName);

                $blogs->blog_cover  = $fileName;

            }



            $filePath = 'public/images/blogs';

            //var_dump($request->all());

            //dd();

            $blogs->blog_title  = $request->post('blogName');

            $blogs->b_slug  = $request->post('blogSlug');

            $blogs->category_id  = $request->post('blogCategory');

            $blogs->b_body  = $request->post('blogBody');

            $blogs->b_status  = $request->post('status');
            $blogs->meta_title  = $request->post('metaTitle');

            $blogs->b_type  = $request->post('blogType');

            $blogs->admin_id  = getAdminId();

            //dd($request->post('status'));

            //$tableCountry->save()



            if ($blogs->save()) {



                if (file_exists($filePath.'/'.$oldImage) && $request->exists('categoryDp')) {

                    unlink($filePath.'/'.$oldImage);

                }

                setFlashData(

                    'alert-success',

                    'You Have successfully updated the blog.',

                    redirect()->route('blogs')

                );

            }

            else{

                setFlashData(

                    'alert-primary',

                    'You can\'t update the blog right now.',

                    redirect()->route('blogs')

                );





            }

        }

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Blogs  $blogs

     * @return \Illuminate\Http\Response

     */

    public function destroy(Blogs $blogs)

    {

        if ($blogs->delete()) {

            setFlashData(

                'alert-success',

                'You have successfully deleted the package',

                redirect()->route('blogs')

            );

        }

        else{

            setFlashData(

                'alert-primary',

                'You can\'t delete the package right now.',

                redirect()->route('blogs')

            );

        }

    }

    public function restoreBlog($id)

    {

        if (isset($id)) {

            $isPackage = Blogs::withTrashed()->where('b_id',$id)->restore();

            if ($isPackage) {

                setFlashData(

                    'alert-success',

                    'You have successfully package the blog',

                    redirect()->route('blogs')

                );

            }

            else{

                setFlashData(

                    'alert-primary',

                    'You can\'t restore the blog right now.',

                    redirect()->route('blogs')

                );

            }

        }

        else{

            setFlashData(

                'alert-primary',

                'The package is already exist.',

                redirect()->route('blogs')

            );

        }

    }

}

