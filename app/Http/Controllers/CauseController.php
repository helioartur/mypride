<?php 

namespace App\Http\Controllers;

use App\Cause;
use App\Http\Requests\CauseRequest;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use Request;

class CauseController extends Controller {

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $causes = Cause::all();
      return view('causes.index',compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('causes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CauseRequest $request)
    {
          //$user_create_id=Auth::user()->id;
          $cause = Cause::create($request->all());

          \Session::flash('flash_message','Cause successfully added.'); //<--FLASH MESSAGE

          if (Request::wantsJson()){
              return $cause;
          }else{              
                
               return redirect()->action('CauseController@publish',['cause'=>$cause]);       
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      
    }

    public function publish($cause){

          $cause = DB::table('causes')
                  ->where('causes.id','=',$cause)
                  ->get();
          return view('causes.publish',compact('cause'));
    }
      
  
}

?>