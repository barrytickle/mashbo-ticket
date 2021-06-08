<?php

namespace App\Http\Controllers;

use App\Models\Draw;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Draw $draw_id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Draw $draw_id, Request $request)
    {

        /* @var Draw $draw_id */

        $quantity = $request->get('quantity');

        $users = User::query()->doesntHave('ticket')->select('id');

        if($users->count() == 0){
            return redirect()->to(route('front.draw.show', ['id' => $draw_id]))->with('error', 'No more users available');
        }else{

            $i = 0;
            $data = [];

            if($users->count() >= $quantity){
                while($i < $quantity){
                    $tmp = [];
                    $tmp['draw_id'] = $draw_id->id;
                    $tmp['user_id'] = $users->inRandomOrder()->first()->id;
                    $tmp['created_at'] = Carbon::now();

                    array_push($data, $tmp);
                    $i++;
                }

                Ticket::insert($data);
            }


            return redirect()->to(route('front.draw.show', ['id' => $draw_id]))->with('success', $quantity.' users successfully added');
        }




//        return view('ticket.create', ['draw' => $draw_id, 'users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hello');
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
