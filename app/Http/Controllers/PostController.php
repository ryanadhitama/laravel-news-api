<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Helpers\ResponseFormatter;
use App\Helpers\Message;

class PostController extends Controller
{
    use Message;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $models = Post::isActive();

            if($request->search != null) {
                $models = $models->where('title', 'like', '%'.$request->search.'%');
            }

            if($request->take != null) {
                $models = $models->take($request->take);
            }

            if($request->category_id != null) {
                $models = $models->where('category_id', $request->category_id);
            }

            if($request->type == 'trending') {
                $models = $models->withCount('hits')
                ->orderBy('hits_count', 'desc');
            }
            
            $models = $models->orderBy('created_at', 'desc')->get();

           

            $data = PostResource::collection($models);
            return ResponseFormatter::success($data, $this->STATUS_SUCCESS_GET_DATA);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th->getMessage());
        }

        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
            $models = Post::where('slug', $id)->first();
            $data = new PostResource($models);
            return ResponseFormatter::success($data, $this->STATUS_SUCCESS_GET_DATA);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th->getMessage());
        }

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
