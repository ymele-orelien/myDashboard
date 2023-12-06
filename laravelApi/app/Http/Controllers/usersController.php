<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenements;
use App\Models\simpleUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class usersController extends Controller

{

    /**
     * POUR AFFICHER LA LISTE DE TOUT LES UTILISATEURS
     */
    public function index ()
    {
        $users=User::all();
       return response()->json([
           'status'=>200,
           "message"=>" Affichage reussir",
           "users"=>$users
       ],200);
   }
     /**
     * POUR AFFICHER Les in formation d'un seules utilisateurs
     */
   public function details ($id)
   {
     $users=User::find($id);
     return response()->json([
       'status'=>200,
       "message"=>" Affichage reussir",
       "users"=>$users

     ],200);
    }


   /**
    *ENREGISTRE UN UTILISATEURS
    */
    public function edit(string $id)
    {
       $users=User::find($id);
       return response()->json([
           'status'=>1,
           "message"=>"passe pas",
           "users"=>$users

       ],200);
   }
   /**
    * Modifier les informations
    */
   public function update( UsersRequest $request,string $id)
   {
      try
      {
   $users=User::where( 'id',$id)->exists();
   if($users){
    //recuperation et modification des informations liees aux users
       $users=User::find($id);
       $users->name=$request->name;
       $users->email=$request->email;
       $users->password=$request->password;
       $users->location=$request->location;
       $users->role=$request->role;
       $users->description=$request->description;
       $users->update();
      return response()->json([
       'status'=>200,
       "message"=>"Modification effectuer",

   ],200);}
}
catch(Exeception $exception){
    return response()->json([
        'status'=>422,
        "message"=>"Modification n'effectuer",

    ],422);}
}
/**
 * SUPPRIMER LES UTILISATEURS
 */
   public function destroy(string $id)
   {
       $data = User::find($id);
       if (!empty($data)) {
           $data->delete();
           // return back();
           return response()->json([
               'status'=>200,
               "message"=>" suppression reussir",

           ],200);
       } else {

        return response()->json([
            'status'=>200,
            "message"=>" suppression echouer",

        ],200);
       }
   }
   public function create_Evenements($id){

       $users=User::find($id);
       $evnt= new Evenemenets([
           'parteners_id'=>$request->parteners_id,
           'started'=>$request->started,
           'theme'=>$request->theme,
           'description'=>$request->description

       ]);
       $users = $users->evenements()->save($evnt);
           }




public function profile(Request $request){

    return response()->json([
        'status'=>1,
    'message'=>'informaions du profiles',
'users'=>Auth::user()

    ]);
}
/**
 * DEBLOQUER UN UTILISATEUR
 */

 public function unblockEvent($userId, $eventId)
 {
     // Récupérer l'utilisateur
     $user = User::find($userId);

     // Récupérer l'événement de l'utilisateur
     $event = $user->events()->find($eventId);

     // Vérifier si l'événement existe
     if ($event) {
         // Mettre à jour l'état de blocage de l'événement
         $event->update(['blocked' => false]);

         return response()->json(['message' => 'Événement débloqué avec succès'],200);
     } else {
         return response()->json(['message' => 'Événement non trouvé'], 404);
     }
 }

/**
 * CREER UN EVENEMENETS
 */
public function createEvent(Request $request, $id){
$users=User::find($id);
$events = $users->events();
$event=new Evenements([
    'started'=>$request->started,
    'theme'=>$request->theme,
    'detail'=>$request->detail

]);
$users->events()->save($event);
return response()->json([
    'status'=>200,
    "message"=>"evenements cree avec success!!!!",
    "event"=>$event

],200);
}
/**
 * Update des evenements
 */
public function updateEvent($id, $eventId)
{
    // Récupérer l'utilisateur
    $users = User::find($id);

    // Récupérer l'événement de l'utilisateur
    $event = $users->events()->find($eventId);

    // Vérifier si l'événement existe
    if ($event) {
        // Mettre à jour les détails de l'événement
        $event->update([
            'theme' => 'Nouveau titre',
            'started' => 'Nouvelle description',
            'detail' => 'Nouvelle description',
            // Autres champs à mettre à jour
        ]);

        return response()->json(['message' => 'Événement mis à jour avec succès', 'event' => $event]);
    } else {
        return response()->json(['message' => 'Événement non trouvé'], 404);
    }
}
/**
 * DELETE EVENEMENT
 */
public function deleteEvent($id, $eventId)
{
    // Récupérer l'utilisateur
    $users = User::find($id);

    // Récupérer l'événement de l'utilisateur
    $event = $users->events()->find($eventId);

    // Vérifier si l'événement existe
    if ($event) {
        // Supprimer l'événement
        $event->delete();

        return response()->json(['message' => 'Événement supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Événement non trouvé'], 404);
    }
}

/**
 * BLOCQUER UN UTILISATEUR
 */
public function blockEvent($userId, $eventId)
{
    // Récupérer l'utilisateur
    $user = User::find($userId);

    // Récupérer l'événement de l'utilisateur
    $event = $user->events()->find($eventId);

    // Vérifier si l'événement existe
    if ($event) {
        // Mettre à jour l'état de blocage de l'événement
        $event->update(['blocked' => true]);

        return response()->json(['message' => 'Événement bloqué avec succès']);
    } else {
        return response()->json(['message' => 'Événement non trouvé'], 404);
    }
}







}
