<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ConsultationModel;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi
        $rules = [
            'nama' => 'required',
            'phone' => 'required',
            'jurusan' => 'required',
            'jenjang' => 'required',
            'universitas' => 'required',
            'email' => 'required',
            'angkatan' => 'required',
            'judul_penelitian' => 'required',
            'info' => 'required',
            'kds' => 'required',
        ];

        $message = [
            'nama.required'=> 'nama masih kosong',
            'phone.required'=> 'whatsapp masih kosong',
            'jurusan.required'=> 'jurusan masih kosong',
            'jenjang.required'=> 'jenjang masih kosong',
            'universitas.required'=> 'universitas masih kosong',
            'email.required'=> 'email masih kosong',
            'angkatan.required'=> 'angkatan masih kosong',
            'judul.required'=> 'judul masih kosong',
            'info.required'=> 'info masih kosong',
            'kds.required'=> 'kds masih kosong',
        ];

        //jalankan validasi
        $validator = Validator::make($request->all(), $rules, $message);

        //cek validasi
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        ConsultationModel::create([
            'nama' => $request->input('nama'),
            'phone' => $request->input('phone'),
            'jurusan' => $request->input('jurusan'),
            'jenjang' => $request->input('jenjang'),
            'universitas' => $request->input('universitas'),
            'email' => $request->input('email'),
            'angkatan' => $request->input('angkatan'),
            'judul_penelitian' => $request->input('judul_penelitian'),
            'info' => $request->input('info'),
            'kds' => $request->input('kds'),
        ]);

        return redirect()->route('consultation.index')->with('success', 'Consultation berhasil dikirim!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
