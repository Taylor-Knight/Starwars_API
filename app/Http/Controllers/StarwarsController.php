<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class StarwarsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function people(Request $request){

        $userInput = $_GET['searchPeople']; //user input from the site
        $people = file_get_contents('https://swapi.dev/api/people/'.$userInput); //speaking with the api
        // dd($people);
        return $people;
    }

    public function films(Request $request){

        $userInput = $_GET['searchFilms']; 
        $films = file_get_contents('https://swapi.dev/api/films/'.$userInput); 
        
        return $films;
    }

    public function planets(Request $request){

        $userInput = $_GET['searchPlanets']; 
        $planets = file_get_contents('https://swapi.dev/api/planets/'.$userInput); 
        
        return $planets;
    }

    public function species(Request $request){

        $userInput = $_GET['searchSpecies']; 
        $species = file_get_contents('https://swapi.dev/api/species/'.$userInput); 
        
        return $species;
    }

    public function index(){

        // $everything = file_get_contents('https://swapi.dev/api/'); //everything
        // $films = file_get_contents('https://swapi.dev/api/films/'); //films
        // $people = file_get_contents('https://swapi.dev/api/people/'); //people
        // $planets = file_get_contents('https://swapi.dev/api/planets/'); //planets
        // $species = file_get_contents('https://swapi.dev/api/species/'); //species
        // $starships = file_get_contents('https://swapi.dev/api/starships/'); //starships
        // $vehicles = file_get_contents('https://swapi.dev/api/vehicles/'); //vehicles
        //  dd($planets);

         return view('starwarsApi') ;
    }

}