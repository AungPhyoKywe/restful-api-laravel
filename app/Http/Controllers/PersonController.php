<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{


    /**
     * @Resource('PersonResource')
     */

    public function  show  (Person $person) : PersonResource{

        return new PersonResource( $person);

    }

    /**
     * @Resource('PersonResourceCollection')
     */

    public  function  index() : PersonResourceCollection{

        return new PersonResourceCollection(Person::paginate());

    }

    /**
     * create person
     */

    public function  store(Request $request){

        $request->validate([

            "First_name"   => "required",
            "Last_name"    => "required",
            "phone"        => "required",
            "email"        => "required",
            "city"         => "required",

        ]);
        $person =Person::create($request->all());

        return new PersonResource( $person);

    }
//    update person

    public  function  update(Request $request,Person $person):PersonResource{

        

        $person->update($request->all());

        return new PersonResource($person);
    }
}
