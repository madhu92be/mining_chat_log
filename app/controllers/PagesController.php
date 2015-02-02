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
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		# this commented code is writtened in core php for converting csv file to mysql
		# hackathon_chat_data.csv	
			// $file = fopen('hackathon_chat_data.csv', 'r');
			// $arr = array();
			// $host = "localhost";
			// $username = "root";
			// $password = "root";
			// $db = "chat_mining";

			// $conn = mysql_connect($host,$username,$password);
			// if (!$conn) {
			// 	die("Database connection failed");
			// }

			// mysql_select_db($db);	
			// $table = "create table chatlist (id int not null,message text not null,time text,locationid int,checkInDate text,checkOutDate text)";
			// $created = mysql_query($table,$conn);
			// if (!$created) {
			// 	die("Table not created" . mysql_error());
			// }

			// while (($line = fgetcsv($file,null,',')) !== FALSE) {
			// 	$line[1] = preg_replace("/[\s]+/", ' ', $line[1]);
			// 	$line[1] = preg_replace("/\\\\/", '', $line[1]);
			// 	$line[1] = htmlspecialchars_decode($line[1], ENT_QUOTES);
			// 	$line[1] = strip_tags($line[1]);
			// 	$line[2] = date('Y-m-d H:i:s',$line[2]);
			// 	$arr = explode(':', $line[3]);
			// 	$sql = "insert into chatlist (id,message,time,locationid,checkInDate,checkOutDate) values ('$line[0]','$line[1]','$line[2]','$arr[0]','$arr[1]','$arr[2]')";
			// 	mysql_query($sql);	

			// }

			// fclose($file);

		# chat_location_mapping.csv
		
			// $file = fopen('chat_location_mapping.csv', 'r');
			// $host = "localhost";
			// $username = "root";
			// $password = "root";
			// $db = "chat_mining";

			// $conn = mysql_connect($host,$username,$password);
			// if (!$conn) {
			// 	die("Database connection failed");
			// }

			// mysql_select_db($db);	
			// $table = "create table locality ( id int not null, location text not null ) ";
			// mysql_query($table,$conn);

			// while (($line = fgetcsv($file, 1000, ",")) !== FALSE) {

			// 	$sql = "insert into locality (id,location) values ('$line[0]','$line[1]')";
			// 	if (!$sql) {
			// 		print_r("Inserted  successfully");
			// 	}
			// 	else{
			// 		print_r("Failed to insert");	
			// 	}
			// 	mysql_query($sql);	
			// }


			// fclose($file);


		# In the front end the input user gives is fetched and query is based on that input 
		# and returned to ananlytics
		# As per now we had given the input as static as per the demo purpose.

		# static city data given as input 
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

	

}