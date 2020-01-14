<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Requests\BukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::paginate(5);
        $totalBuku = $buku->count();

        return view('buku.index', compact(
            'buku',
            'totalBuku'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BukuRequest $bukuRequest)
    {
        $buku = new Buku();
        $buku->judul = $bukuRequest->judul;
        $buku->harga = $bukuRequest->harga;
        $buku->save();

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.form_ubah', compact(
            'buku'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BukuRequest $bukuRequest, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->judul = $bukuRequest->judul;
        $buku->harga = $bukuRequest->harga;
        $buku->save();

        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $buku = Buku::where('judul', 'like', '%'.$request->judul.'%')->paginate(5);
        $totalBuku = $buku->count();

        return view('buku.index', compact(
            'buku',
            'totalBuku'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exportAllPDF()
    {
        $totalBuku = Buku::count();

        if($totalBuku != 0){
            $buku = Buku::all();

            return PDF::loadView('buku.cetak_pdf', ['buku' => $buku])->stream('buku.pdf');
        }else{
            abort(404);
        }
    }
}
