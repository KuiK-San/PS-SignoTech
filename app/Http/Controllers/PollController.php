<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poll', ['polls'=>Poll::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.poll');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Poll = new Poll;

        
        $Poll->titulo = $request->titulo;
        $Poll->poll_owner = $request->usuario;
        $Poll->descricao = $request->descricao  ;
        $Poll->inital_date = $request->intial_date;
        $Poll->final_date = $request->final_date;
        $Poll->options = $request->json;

        $Poll->save();

        return redirect('/poll');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show.poll', ['poll' => Poll::findOrFail($id), 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('create.poll', ['poll' => Poll::findOrFail($id), 'id' => $id]);
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

        $Poll = Poll::find($id);

        if(isset($request->vote)){
            return redirect("/poll/" . $id);
        }

        $Poll->titulo = $request->titulo;
        $Poll->poll_owner = $request->usuario;
        $Poll->descricao = $request->descricao  ;
        $Poll->inital_date = $request->intial_date;
        $Poll->final_date = $request->final_date;
        $Poll->options = $request->json;

        $Poll->save();

        return redirect('/poll');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Poll::where('id', $id)->delete();

        return redirect('/poll');
    }

    public function vote(Request $request, $id)
    {
        $options = Poll::find($id)->options;

        $options = json_decode($options, true);

        $options[$request->votes]['votes'] ++;      

        $Poll = Poll::find($id);

        $Poll->options = json_encode($options);

        $Poll->save();

        return redirect('/poll/' . $id);

    }

    public function getVotes($id)
    {
        $data = json_decode(Poll::find($id)->options);


        return response()->json($data);
    }
}
