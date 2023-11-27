<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
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

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'city' => 'required',
            'message' => 'required'
        ]);
        if(getUserSessionData('id'))
        {
            $contact['name'] = $request->name;
            $contact['email'] = $request->email;
            $contact['phone'] = $request->phone;
            $contact['city'] = $request->city;
            $contact['Message'] = $request->message;
            $contact['user_id'] = getUserId();
            $contact['created_at'] = Carbon::now();
        }else
        {
            $contact['name'] = $request->name;
            $contact['email'] = $request->email;
            $contact['phone'] = $request->phone;
            $contact['city'] = $request->city;
            $contact['Message'] = $request->message;
            $contact['created_at'] = Carbon::now();
        }

        DB::beginTransaction();
        $message = '';
        try {

            DB::table('contacts')->insert($contact);
            $message = 'Thankyou for reaching out to us. Our team will get back to you!';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
                $message = $e->getMessage();

                $message = 'somethig went wrong. Try again';

        }
        return redirect()->back()->withSuccess('Thankyou for reaching out to us. Our team will get back to you!');

    }
    public function scheduleTour(Request $request)
    {


        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',

        ]);
        $date = Carbon::parse($request->date)->format('Y-m-d H:i:s');

        if(getUserSessionData('id'))
        {
        $scheduleTour['property_id'] = $request->propertyId;
        $scheduleTour['date'] = $date;
        $scheduleTour['name'] = $request->name;
        $scheduleTour['email'] = $request->email;
        $scheduleTour['time'] = $request->time;
        $scheduleTour['phone'] = $request->phone;
        $scheduleTour['message'] = $request->message;
        $scheduleTour['buyer_id'] = getUserId();
        $scheduleTour['seller_id'] = $request->sellerId;
        $scheduleTour['created_at'] = Carbon::now();
        }else
        {
            $scheduleTour['property_id'] = $request->propertyId;
            $scheduleTour['date'] = $date;
            $scheduleTour['name'] = $request->name;
            $scheduleTour['email'] = $request->email;
            $scheduleTour['time'] = $request->time;
            $scheduleTour['phone'] = $request->phone;
            $scheduleTour['message'] = $request->message;
            $scheduleTour['seller_id'] = $request->sellerId;
            $scheduleTour['created_at'] = Carbon::now();
        }

        DB::beginTransaction();
        $message = '';
        try {

            DB::table('schedule_a_tour')->insert($scheduleTour);
            $message = 'Thankyou for reaching out to us. Our team will get back to you!';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
                $message = $e->getMessage();

                $message = 'somethig went wrong. Try again';



        }
        return redirect()->back()->withSuccess('Thankyou for reaching out to us. Our team will get back to you!');
    }



    //suggestion store - - user suggestion
    public function suggestionStore(Request $request)
    {


        $request->validate([
            'city' => 'required',
            'suggestion' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',

        ]);

        if(getUserSessionData('id'))
        {
            $suggestion['city']     =       $request->city;
            $suggestion['name']     =       $request->name;
            $suggestion['email']    =      $request->email;
            $suggestion['contact']  =    $request->contact;
            $suggestion['type']     =       $request->type;
            $suggestion['message'] = $request->suggestion;
            $suggestion['user_id'] = getUserId();
        }else
        {
            $suggestion['city'] = $request->city;
            $suggestion['name'] = $request->name;
            $suggestion['email'] = $request->email;
            $suggestion['contact'] = $request->contact;
            $suggestion['type']     =       $request->type;
            $suggestion['message'] = $request->suggestion;
        }

        DB::beginTransaction();
        $message = '';
        try {

            DB::table('suggestions')->insert($suggestion);
            $message = 'Thankyou for reaching out to us. Our team will get back to you!';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
                $message = $e->getMessage();

                $message = 'somethig went wrong. Try again';
        }
        return redirect()->back()->withSuccess($message);

    }


//adivice store - - user advice
    public function adviceStore(Request $request)
    {


        $request->validate([
            'city' => 'required',
            'advice' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',

        ]);

        if(getUserSessionData('id'))
        {
            $suggestion['city']     =       $request->city;
            $suggestion['name']     =       $request->name;
            $suggestion['email']    =      $request->email;
            $suggestion['contact']  =    $request->contact;
            $suggestion['type']     =       $request->type;
            $suggestion['message'] = $request->advice;
            $suggestion['user_id'] = getUserId();
        }else
        {
            $suggestion['city'] = $request->city;
            $suggestion['name'] = $request->name;
            $suggestion['email'] = $request->email;
            $suggestion['contact'] = $request->contact;
            $suggestion['type']     =       $request->type;
            $suggestion['message'] = $request->advice;
        }

        DB::beginTransaction();
        $message = '';
        try {

            DB::table('suggestions')->insert($suggestion);
            $message = 'Thankyou for reaching out to us. Our team will get back to you!';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
                $message = $e->getMessage();

                $message = 'somethig went wrong. Try again';
        }
        return redirect()->back()->withSuccess($message);
    }


}
