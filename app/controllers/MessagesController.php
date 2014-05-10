<?php

class MessagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /messages
	 *
	 * @return Response
	 */
	public function index()
	{
		$messages = Message::all();

		return $messages;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /messages
	 *
	 * @return Response
	 */
	public function store()
	{
		$message = new Message();

		$input = Input::all();

		$message->message = $input['message'];
		$message->user_id = $input['user_id'];
		$message->event_id = $input['event_id'];

		$message->save();
	}

	/**
	 * Display the specified resource.
	 * GET /messages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$message = Message::find($id);

		return $message;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /messages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$message = new Message($id);

		$input = Input::all();

		$message->message = $input['message'];
		$message->user_id = $input['user_id'];
		$message->event_id = $input['event_id'];

		$message->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /messages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Message::destroy($id);
	}

}