<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\simpleUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class SimpleUsersController extends Controller
{



    public function index()
    {
        $simple=simpleUsers::all();
        // $users=User::with(["usersable"])->get();
        return response()->json([
            'status'=>1,
            "message"=>" Affichage reussir",
            "simpleUsers"=> $simple

        ],200);

    }
    public function details($id)
    {
        $simple=simpleUsers::find($id);
        // $users=User::with(["usersable"])->get();
        return response()->json([
            'status'=>1,
            "message"=>" Affichage reussir",
            "simpleUsers"=> $simple

        ],200);

    }


    public function create()

    {
        $simple = simpleUsers::with(['users'])->orderBy('created_at',"DESC")->paginate(15);
        $users=User::all();

    }


    public function register( Request $request){
        try{
             //validation
            $validation=Validator::make($request->all(),[
            'name'=>'required|max:191',
            'email'=>"required|unique|max:191",
            'password'=>"required",

            'gender'=>'required|max:191',
                'bloodGroup'=>"required|max:3",
                'dateBirth'=>"required|max:191",
            ]);
            $simple=new simpleUsers([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'gender'=>$request->gender,
                'bloodGroup'=>$request->bloodGroup,
                'dateBirth'=>$request->dateBirth,
            ]);
            $simple->save();

            ///********relation one to one polymorhs*****\\\\\\\\
            //****************************************\
            // $users=new User([
            //     'name'=>$request->name,
            //     'email'=>$request->email,
            //     'password'=>$request->password,
            //     'status'=>$request->status,
            //     'location'=>$request->location,
            //     'pictures'=>$request->pictures,
            //     'descriptions'=>$request->descriptions,
            //     'phone'=>$request->phone,

            // ]);

            ///////////verification par LE JSON\\\\\\\\\\\\\\\\\\
            // $simple->users()->save($users);
            return response()->json([
                'status'=>422,
                'message'=>'etudiant cree avec success',
                "simpleUsers"=> $simple

            ],200);
        }

        catch( Exception $exception)
        {
            return response()->json([
                'status'=>422,
                "errors"=>$validation->messages(),

            ],422);
        }


    }




    /////////////////

    public function edit(string $id){
        $simple=simpleUsers::find($id);

        return response()->json([
            'status'=>1,
            "message"=>"utilisarteursa trouve",
            "simpleUsers"=>$simple

        ],200);
    }

    ///////////////////

    public function update(Request $request, string $id){
        try{
             //recuperation et modification des informations liees aux simpleUsers
$simple=simpleUsers::where( 'id',$id)->exists();
if($simple){
    $data=simpleUsers::find($id);
    $data->name=$request->name;
    $data->email=$request->email;
    $data->password=$request->password;
$data->gender=$request->gender;
$data->bloodGroup=$request->bloodGroup;
$data->dateBirth=$request->dateBirth;
$data->update();

}

//affichage aux format Json
return response()->json([
    'status'=>1,
    "message"=>" Modification effectuer avec success",
    "simpleUsers"=>$data

],200);
        }
        catch(Exeception $exception){

        }

    }


    public function destroy(string $id)
    {
        $data = simpleUsers::find($id);
        if (!empty($data)) {
            $data->delete();

            // return back();
            return response()->json([
                'status'=>1,
                "message"=>" suppression reussir",
                "simpleUsers"=>$data

            ],200);
        } else {

            return back();
        }
    }

}
