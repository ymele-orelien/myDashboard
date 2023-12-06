<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donate;
use App\Models\Demande;
use App\Models\Picture;
use App\Models\simpleUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\simpleUsersRequest;
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
       

    }


    public function register( simpleUsersRequest $request){
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
//image
$image=Str::random(32)."".$request->image->getClientOriginalExtension();


            //enregistrement des donnee
            $simple=new simpleUsers([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make( $request->password),
                'gender'=>$request->gender,
                'bloodGroup'=>$request->bloodGroup,
                'dateBirth'=>$request->dateBirth,


            ]);


$simple->save();
            return response()->json([
                'status'=>200,
                'message'=>'Votre compte abien etait cree',
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

    public function edit(string $id){
        $simple=simpleUsers::find($id);

        return response()->json([
            'status'=>1,
            "message"=>"Utilisateur trouve",
            "simpleUsers"=>$simple

        ],200);
    }

    ///////////////////

    public function update(Request $request, string $id){
        try{
            //validation
            $validation=Validator::make($request->all(),[
                'name'=>'required|max:191',
                'email'=>"required|unique|max:191",

                // 'gender'=>'required|max:191',
                    'bloodGroup'=>"required|max:3",
                    'dateBirth'=>"required|max:191",
                ]);
             //recuperation et modification des informations liees aux simpleUsers
$simple=simpleUsers::where( 'id',$id)->exists();
if($simple){
    $data=simpleUsers::find($id);
    $data->name=$request->name;
    $data->email=$request->email;
    // $data->password=$request->password;
// $data->gender=$request->gender;
$data->bloodGroup=$request->bloodGroup;
$data->dateBirth=$request->dateBirth;

$data->update();

}

//affichage aux format Json
return response()->json([
    'status'=>200,
    "message"=>" Modification effectuer avec success",
    "simpleUsers"=>$data

],200);
        }
        catch(Exeception $exception){
            return response()->json([
                'status'=>500,
                "message"=>$exception,


            ],500);
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


            ],200);
        } else {
            return response()->json([
                'status'=>1,
                "message"=>" suppression echouer",


            ],200);
        }
    }
    public function create_demande($id){

$simple=simpleUser::find($id);
$dmd= new Demande([
    'motif'=>$request->motif,
    'bloodGroup'=>$request->bloodGroup,
    'poches'=>$request->poche

]);
$simple = $simple->demandes()->save($dmd);
    }

    public function create_donate(Request $request, $id){

        $simple=simpleUser::find($id);
        $donate= new Donate([
            'simpleUser_id'=>$request->simpleUser_id,
            'detail'=>$request->detail,
            'bloodGroup'=>$request->bloodGroup,
            'poches'=>$request->poches

        ]);
        $simple = $simple->donates()->save($donate);
            }

}
