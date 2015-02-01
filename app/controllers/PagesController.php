<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('chart');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations = null;
		return View::make('charts',compact('locations'));

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
	}

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$input = array('Chennai','Hyderabad','Bangalore','Delhi','Mumbai','Goa','Manali','Kolkata');
		$chat_count = array();
		for ($i=0; $i < sizeof($input); $i++) { 
			$locations = Location::where('location',$input[$i])->get()->first();
			
			$chat = count(Chat::where('locationid',$locations->id)->get());
			
			array_push($chat_count,$chat); # count of searches for location

		}
		
	
		// $arr = array();
		// foreach ($chat as $c ) {
		// 	$checkin = (int)date('d',strtotime($c->checkInDate));
			
		// 	$checkout = (int)date('d',strtotime($c->checkOutDate));
			
		// 	$val = $checkout - $checkin;
		// 	array_push($arr, $val);
		// }

		// $chats = Chat::where('message','like','% @ Rs.%')->get();
		

		return View::make('charts',compact('chat_count','input'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}