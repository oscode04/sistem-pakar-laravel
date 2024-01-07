<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\GejalaRequest;
use App\Models\Symptom;
use Yajra\DataTables\Facades\DataTables;

class InputGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            // $query = Article::with(['video', 'category', 'subCategory']);
            $query = Symptom::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form action = "' . route('input-gejala.destroy', $item->id_symptoms) . '" method="POST">
                            ' . method_field('DELETE') . csrf_field() . '
                            <button type="submit" class="dopdown-item text-danger ms-2"  style="background-color: transparent; border: none;">
                                Hapus
                            </button>
                        ';
                })
                // ->editColumn('main_img', function ($item) {
                //     return $item->main_img ? '<img src="' . Storage::url($item->main_img) . '" style="max-height:150px;"/>' : '';
                // })
                // ->rawColumns(['action', 'main_img'])
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.inputgejala.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.inputgejala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GejalaRequest $request)
    {
        $data = $request->all();

        Symptom::create($data);

        return redirect()->route('input-gejala');
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
        $item = Article::findOrFail($id);
        // $item = Article::where('slug', $id)->firstOrFail();

        $categories = Category::all();
        $subCategories = SubCategory::all();

        return view('pages.admin.article.edit', [
            'item' => $item,
            'categories' => $categories,
            'subCategories' => $subCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, string $id)
    {
        $data = $request->all();

        // $data['slug'] = Str::slug($request->nama_kategori);
        $item = Article::findOrFail($id);

        // $data['slug'] = Str::slug($request->judul);
        if ($item->judul !== $request->judul) {
            $data['slug'] = Str::slug($request->judul);
        }
        if ($request->hasFile('main_img')) {
            $data['main_img'] = $request->file('main_img')->store('assets/article_main_img', 'public');
        }
        $item->update($data);

        return redirect()->route('article')->with('success', 'Artikel berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_symptoms)
    {
        $item = Symptom::where('id_symptoms', $id_symptoms);

        $item->delete();
        return redirect()->route('input-gejala');
    }
}
