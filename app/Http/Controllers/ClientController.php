<?php
namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('createclient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
    {
    	$client = new Client();

		 $client->cname = $request->input('cname');
		 $client->constitution = $request->input('constitution');
		 $client->address = $request->input('address');
		 $client->city = $request->input('city');
		 $client->contperson = $request->input('contperson');
		 $client->email = $request->input('email');
		 $client->bank = $request->input('bank');
		 $client->texposure = $request->input('texposure');
		 $client->Ratedexpo = $request->input('Ratedexpo');
		 $client->ratinghist = $request->input('ratinghist');
		 $client->nextfolloup = $request->input('nextfolloup');
		 $client->industrytype = $request->input('industrytype');
		 $client->purpose = $request->input('purpose');
		 $client->status = $request->input('status');
	 $client->save();
     return redirect('clientall');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $client = Client::all();
        return view('clientall')->with(compact('client'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('editclient')->with(compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $client = Client::find($request->input('id'));

		 $client->cname = $request->input('cname');
		 $client->constitution = $request->input('constitution');
		 $client->address = $request->input('address');
		 $client->city = $request->input('city');
		 $client->contperson = $request->input('contperson');
		 $client->email = $request->input('email');
		 $client->bank = $request->input('bank');
		 $client->texposure = $request->input('texposure');
		 $client->Ratedexpo = $request->input('Ratedexpo');
		 $client->ratinghist = $request->input('ratinghist');
		 $client->nextfolloup = $request->input('nextfolloup');
		 $client->industrytype = $request->input('industrytype');
		 $client->purpose = $request->input('purpose');
		 $client->status = $request->input('status');
	 $client->save();
     return redirect('clientall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $client = Client::findOrFail($id);
 
            $client->delete();
            return redirect('clientall');
    }
}