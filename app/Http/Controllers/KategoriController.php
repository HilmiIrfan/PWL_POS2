<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTable;

class KategoriController extends Controller
{
    public function index(){
        $breabcrumb = (object)[
            'title'=>'Daftar Kategori',
            'list'=>['Home','User']
        ];
        $page=(object)[
            'title'=>'Daftar kategori barang'
        ];
        $activeMenu='kategori';
        return view('kategori.index',['breadcrumb'=>$breabcrumb,'page'=>$page,'activeMenu'=>$activeMenu]);
    }

    public function list(Request $request){
        $categories=KategoriModel::select('kategori_id','kategori_kode','kategori_nama','level_id');
        if ($request->kategori_id) {
            $categories->where('kategori_id', $request->kategori_id);
        }
        return DataTable::of($categories)
            ->addIndexColumn()
            ->addColumn('aksi',function($user){
                $btn='<a href="'.url('/kategori/'.$kategori->kategori_id).'"class="btn btn-info btn-sm">Detail</a>';
                $btn='<a href="'.url('/kategori/'.$kategori->kategori_id.'/edit').'"class="btn btn-warning btn-sm">Edit</a>';
                $btn='<form class="d-inline-block" method="POST" action="'.url('/kategori/'.$kategori->kategori_id).'">'
                    .csrf_field().method_field('DELETE').
                    '<button type="submit" class="btn btn-danger btn-sm" 
                    onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                    return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create(){
        $breadcrumb=(object)[
            'title'=>'Tambah Kategori',
            'list'=>['Home', 'Kategori', 'Tambah']
        ];
        $page=(object)[
            'title'=>'Tambah kategori baru'
        ];
        $kategori=KategoriModel::all();
        $activeMenu='kategori';
        return view('kategori.create',['breadcrumb'=>$breadcrumb,'page'=>$page,'activeMenu'=>$activeMenu]);
    }

    public function store(Request $request){
        $request->validate([
            'kategori_kode'=>'required|string|min:3|unique:m_kategori,kategori_kode',
            'kategori_nama'=>'required|string|min:100',
            'kategori_id'=>'required|integer'
        ]);
        KategoriModel::create([
            'kategori_kode'=>$request->kategori_kode,
            'kategori_nama'=>$request->kategori_nama,
            'kategori_id'=>$request->kategori_id,
        ]);
        return redirect('/kategori')->with('success','Data kategori berhasil disimpan');
    }

    public function show(string $id){
        $kategori=KategoriModel::with('kategori')->find($id);
        $breadcrumb=(object)[
            'title'=>'Detail Kategori',
            'list'=>['Home','Katehori','Detail']
        ];
        $page=(object)[
            'title'=>'Detail kategori'
        ];
        $activeMenu='kategori';
        return view('kategori.show',['breadcrumb'=>$breadcrumb,'page'=>$page,'kategori'=>$kategori,'activeMenu'=>$activeMenu]);
    }
}
