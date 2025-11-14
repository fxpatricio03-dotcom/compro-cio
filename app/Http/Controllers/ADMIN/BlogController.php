<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Categories;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.Blog.index'); // bikin file Blog yang berisi index di folder admin

        $datas = Blog::with('category')->get();
        $title ="Data Blog";
        return view('admin.blog.index', compact('datas', 'title')); //lempar data ke view pake compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create New Blog";
        $categories = Categories::get();
        return view('admin.blog.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
        
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'writter' => auth()->user->name,
        ];
        
        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('blog', 'public');
            $data['photo'] = $photo;
            //kalo pake storeAs langsung ke filenya didalem folder

            //$photo = $request->file('photo')->storeAs('blog', 'public');
        }
        Blog::create($data);
        Alert::success('Success', 'Create New Blog Success');
        // alert()->info('Info','Password Belum Diisi');
        //toast posisi atas sebelah kanan
        // toast('Create New Blog Success','success');


        return redirect()->to('admin/blog');
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
        $edit = Blog::find($id); //Blog mewakili table
        $categories = Categories::get();
        $title = "Edit Blog";
        return view('admin.blog.edit', compact('edit', 'title', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Blog::find($id); //menemukan table dab ambil id-nya

        $data = [
        
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'writter' => auth()->user->name,
        ];

        if($request->hasFile('photo')){
            if($update->photo) {
            File::delete(public_path('storage/'. $update->photo));
            }
            $photo = $request->file('photo')->store('blog', 'public');
            $data['photo'] = $photo;
        }

        $update->update($data);
        return redirect()->to('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
    */

    //kalo make destroy makenya form buat eksekusi delete data, gk make a href, kalo make a href nanti bikin public function lagi
    public function destroy($id)
    {
        $delete = Blog::find($id)->delete();
        File::delete(public_path('storage/'. $delete->photo));
        alert()->success('Success','Delete success');
        return redirect()->to('admin/blog');
    }
}
