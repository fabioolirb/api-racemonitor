<?php

namespace App\Services;

use Illuminate\Support\Facades\http;
use phpDocumentor\Reflection\Types\Integer;

class RMapiServices
{


 // Comman

    public function  getAppSections(){
        return Http::RMapi()
            ->post('/Common/AppSections/?apiToken='.config('RMapi.token'));
    }

    public function  getCurrentRaces($seriesID){

        return Http::RMapi()
            ->post('/Common/CurrentRaces/?apiToken='.config('RMapi.token'),['seriesID'=>$seriesID]);
    }

    public function  getPastRaces($seriesID){
        return Http::RMapi()
            ->post('/Common/PastRaces/?apiToken='.config('RMapi.token'),['seriesID'=>$seriesID]);
    }

    public function  getRaceTypes(){

        return Http::RMapi()
            ->post('/Common/RaceTypes/?apiToken='.config('RMapi.token'));
    }

    public function  getTimeZones(){

        return Http::RMapi()
            ->post('/Common/TimeZones/?apiToken='.config('RMapi.token'));
    }

    public function  getUpcomingRaces(){

        return Http::RMapi()
            ->post('/Common/UpcomingRaces/?apiToken='.config('RMapi.token'));
    }



   // Account
    public function getAllRaces()
     {
        return Http::RMapi()
            ->post('/Account/AllRaces/?apiToken='.config('RMapi.token'))
            ;
     }

    public function getAccCurrentRaces()
    {
        return Http::RMapi()
            ->post('/Account/CurrentRaces/?apiToken='.config('RMapi.token'));
    }

    public function getSeries()
    {
        return Http::RMapi()
            ->post('/Account/Series/?apiToken='.config('RMapi.token'));
    }

    // Live
    public function getLiveRacer(int $raceID,string $racerID)
    {
        return Http::RMapi()
            ->post('/Live/GetRacer/?apiToken='.config('RMapi.token'),['raceID'=>$raceID,'racerID'=>$racerID]);
    }

    public function getRacerCount(int $raceID)
    {
        return Http::RMapi()
            ->post('/Live/GetRacerCount/?apiToken='.config('RMapi.token'),['raceId'=>$raceID]);
    }

    public function getSession(int $raceID)
    {
        return Http::RMapi()
            ->post('/Live/Session/?apiToken='.config('RMapi.token'),['raceID'=>$raceID]);
    }

    public function getStreamingConnection(int $raceID)
    {
        return Http::RMapi()
            ->post('/Live/GetStreamingConnection/?apiToken='.config('RMapi.token'),['raceId'=>$raceID]);
    }

    public function getWebTiming()
    {
        return Http::RMapi()
            ->post('/Live/GetWebTiming/?apiToken='.config('RMapi.token'));
    }
// Race

    public function getRaceDetails(int $raceID)
    {
        return Http::RMapi()
            ->post('/Race/RaceDetails/?apiToken='.config('RMapi.token'),['raceId'=>$raceID]);
    }


}
