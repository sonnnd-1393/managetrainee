<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Batch\BatchRepositoryInterface;
use Yajra\Datatables\Datatables;

class BatchController extends Controller
{
    protected $batchRepository;

    public function __construct(
        BatchRepositoryInterface $batchRepository
    ) {
        $this->batchRepository = $batchRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->batchRepository->getAll();
        // // dd($data);
        // return Datatables::of($data)
        //     ->addColumn('action', function ($data) {
        //         return '<a href="#" class="btn btn-sm btn-warning edit" data-id="' . $data->id . '" @click="edittt()" ><i class="fa fa-edit"></i></a>
        //                 <a href="" class="btn btn-sm btn-danger delete" v-on:click.native="delete()" data-id="' . $data->id . '"><i class="fa fa-trash"></i></a>';
        //     })
        //     ->rawColumns([ 
        //         'action',
        //     ])
        //     ->make(true);
        return view('home.base', compact('data'));
    }

    public function batchDatatable(){
        $data = $this->batchRepository->getAll();
        // dd($data);
        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="#" class="btn btn-sm btn-warning edit" data-id="' . $data->id . '" @click="edittt()" ><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn-danger delete" v-on:click.native="delete()" data-id="' . $data->id . '"><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
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
        // $data = $this->batchRepository->create($request->all());

        return response()->json([ 'error' => false, 'success' => 'success' ]);
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

