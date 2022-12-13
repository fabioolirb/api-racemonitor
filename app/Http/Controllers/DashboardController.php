<?php

namespace App\Http\Controllers;

use App\Services\RMapiServices;
use Illuminate\Http\Request;

use App\Repositories\DashboardRepository;

class DashboardController extends Controller
{
    /** @var  DashboardRepository */
    private $dashboardRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DashboardRepository $dashboardRepo)
    {
        $this->dashboardRepository = $dashboardRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $service = new RMapiServices();
        //dd($service->getLiveRacer(127088,'415')->json());
        //dd($service->getWebTiming()->json());
        //dd($service->getSession(37820)->json());
        //dd($service->getPastRaces(37820)->json());
        //dd($service->getRaceDetails(37820,''));
        //dd($service->getPastRaces(0)->json());
        //dd($service->getCurrentRaces(0)->json());
        //dd($service->getLiveRacer(37820,'')->json());
        //dd($service->getStreamingConnection(37820,'')->json());
        // dd($service->getSession(37820,'')->json());
        //dd($service->getLiveRacer(37820,'')->json());
        //dd($service->getUpcomingRaces()->json());

        //dd($service->getPastRaces(0)->json());

        //dd($service->getAppSections()->json());

        //dd($service->getAccCurrentRaces()->json());


       // $RMapiSeries = $service->getSeries();
        //dd($service->getLiveRacer()->json());

        $RMapiAllRaces = $service->getAllRaces();
        //dd($RMapiAllRaces->json());
        //dd($RMapiSeries->json());
        //ddd( $service->getAllRaces());
        $RMapiSeries = $service->getSeries();

        //$RMapiSession = $service->getSession();
        //dd($RMapiSession);




        $data = $this->dashboardRepository->GetData();
        return view('dashboard.index', $data);
    }
}
