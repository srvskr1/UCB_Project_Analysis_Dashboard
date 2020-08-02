<?php


namespace App\Http\Controllers;
use App\network;
use App\project;
use App\task;
use App\networkdetails;
use App\resourcs_name;
use Validator;
use App\Charts\dashboard;
use App\Charts\dashboard1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(Request $req){
     	$temp = network::where('team','application')->get();
     	$t1 = network::where('team','application')->pluck('percentage');
     	$t2 = network::where('team','application')->pluck('name');
     	$t3 = network::where('team','network')->pluck('name');
     	$t4 = network::where('team','network')->pluck('percentage');
     	$t5 = network::where('team','csm')->pluck('name');
     	$t6 = network::where('team','csm')->pluck('percentage');
     	$t7 = network::where('team','issm')->pluck('name');
     	$t8 = network::where('team','issm')->pluck('percentage');
     	$t9 = network::where('team','infra')->pluck('name');
     	$t10 = network::where('team','infra')->pluck('percentage');
     	$t11 = network::where('team','software')->pluck('name');
     	$t12 = network::where('team','software')->pluck('percentage');

     	$t13 = network::where('team','application')->pluck('mandays');
     	$t14 = network::where('team','network')->pluck('mandays');
     	$t15 = network::where('team','csm')->pluck('mandays');
     	$t16 = network::where('team','issm')->pluck('mandays');
     	$t17 = network::where('team','infra')->pluck('mandays');
     	$t18 = network::where('team','software')->pluck('mandays');

		global $s1;
		global $i;
		$new = array();
		$new1 = array();
		$new2 = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}

		for ($i=0 ; $i <sizeof($t4) ; $i++ ) { 
			array_push($new1,(int)$t4[$i]);
		}
		for ($i=0 ; $i <sizeof($t4) ; $i++ ) { 
			array_push($new2,(int)$t6[$i]);
		}

     	$chart = new dashboard('a1');
     	$chart->title('Application Team');
		$chart->labels($t2);
		//$chart->dimensions(1000, 500);
		$chart->dataset('Total percentage', 'pie', $t1);
		$chart->loaderColor('#a83232','#e9f505');

		$chart1 = new dashboard('a2');
		$chart1->title('Network Team');
		$chart1->labels($t3);
		$chart1->dataset('Total percentage', 'pie', $t4);
		$chart1->loaderColor('#a83232');

		$chart2 = new dashboard('a1');
     	$chart2->title('CSM Team');
		$chart2->labels($t5);
		//$chart2->dimensions(1000, 500);
		$chart2->dataset('Total percentage', 'pie', $t6);
		$chart2->loaderColor('#a83232','#e9f505');

		$chart3 = new dashboard('a2');
		$chart3->title('ISSM TEAM');
		$chart3->labels($t7);
		$chart3->dataset('Total percentage', 'pie', $t8);
		$chart3->loaderColor('#a83232');


		$chart4 = new dashboard('a2');
		$chart4->title('Infra TEAM');
		$chart4->labels($t9);
		$chart4->dataset('Total percentage', 'pie', $t10);
		$chart4->loaderColor('#a83232');


		$chart5 = new dashboard('a2');
		$chart5->title('software TEAM');
		$chart5->labels($t11);
		$chart5->dataset('Total percentage', 'pie', $t12);
		$chart5->loaderColor('#a83232');

		$chart6 = new dashboard('a2');
		$chart6->title('App
		lication Team');
		$chart6->labels($t2);
		$chart6->dataset('Total Mandays', 'bar', $t13);
		$chart6->loaderColor('#a83232');

		$chart7 = new dashboard('a2');
		$chart7->title('Network Team');
		$chart7->labels($t3);
		$chart7->dataset('Total Mandays', 'bar', $t14);
		$chart7->loaderColor('#a83232');

		

		$chart8 = new dashboard('a2');
		$chart8->title('ISSM Team');
		$chart8->labels($t7);
		$chart8->dataset('Total Mandays', 'bar', $t16);
		$chart8->loaderColor('#a83232');

		$chart9 = new dashboard('a2');
		$chart9->title('INFRA Team');
		$chart9->labels($t9);
		$chart9->dataset('Total Mandays', 'bar', $t17);
		$chart9->loaderColor('#a83232');

		$chart10 = new dashboard('a2');
		$chart10->title('SOFTWARE Team');
		$chart10->labels($t11);
		$chart10->dataset('Total Mandays', 'bar', $t18);
		$chart10->loaderColor('#a83232');

		$chart11 = new dashboard('a2');
		$chart11->title('CSM Team');
		$chart11->labels($t5);
		$chart11->dataset('Total Mandays', 'bar', $t15);
		$chart11->loaderColor('#a83232');



         
		
     	return view('Admin.index',['new'=>$temp,'chart'=> $chart, 'chart1'=>$chart1,'chart2'=>$chart2,'chart3'=>$chart3,'chart4'=>$chart4,'chart5'=>$chart5,'chart6'=>$chart6,'chart7'=>$chart7,'chart8'=>$chart8,'chart9'=>$chart9,'chart10'=>$chart10,'chart11'=>$chart11] );

     }	
     public function form(Request $req){

     	return view('Admin.form');

     }
     public function csmform(Request $req){

     	return view('Admin.csmform');

     }
     public function network_index(Request $req){

     	$temp = project::where('team','network')->get();

     	$t1 = project::where('team','network')->pluck('mandays');
     	
     	$t5 = project::where('team','network')->pluck('project_name')->count();
     	$t6 = project::where('team','network')->pluck('percentage')->avg();
     	$t2 = project::where('team','network')->pluck('project_name');
     	$t3 = project::pluck('status');

    	$request = $req->session()->get('username');
		global $s1;
		global $i;
		$new = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');

        
		
     	return view('Admin.network',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request] );

     
     	
     }	
     public function create(Request $req){

         $req->validate([
             'pname' => 'required',
             'cname' => 'required',
             'man' => 'required',
             'start' => 'required',
             /*'status' => 'required',
             'prname' => 'required',
             'sdate' => 'required',
             'edate' => 'required',
             'percentage' => 'required',
             'tstatus' => 'required'*/

         ]);

         global $prname;
         global $sdate;
         global $edate;
         global $percentage;
         global $tstatus;
         global $comment;



         $prname = $req->prname;
         $sdate = $req->sdate;
         $edate = $req->edate;
         $percentage = $req->percentage;
         $tstatus = $req->tstatus;
         $comment = $req->comment;
         //echo count($req->$prname);
         //print_r($req->prname);

         //echo count($prname);
         //print_r($comment);
         if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
         {
             $project = new project();
             $project->project_name = $req->pname;
             $project->project_coordinator = $req->cname;
             $project->start_date = $req->start;
             $project->status = $req->status;
             $project->mandays = $req->man;
             $project->team = 'network';
             $project->save();

             $t1 = project::all()->sortByDesc('id')->pluck('id')->first();
             //echo $t1;
             for ($i=0; $i < count($prname) ; $i++) {

                 $task = new task();
                 $task->project_id = $t1;
                 $task->task_name = $prname[$i];
                 $task->sdate = $sdate[$i];
                 $task->edate = $edate[$i];
                 $task->percentage = $percentage[$i];
                 $task->status = $tstatus[$i];
                 $task->comment = $comment[$i];
                 $task->save();
             }
             return redirect()->route('admin.network');

         }
         else
         {
             echo "not ok";
         }



         /*$network = new network();
         $network->team = 'application';
         $network->name = $req->pname;
         $network->co_ordinator = $req->cname;
         $network->mandays = $req->man;
        $network->start = $req->start;

        $network->description = $req->description;
        $network->comment = $req->comment;
        $network->status = $req->status;
        $network->save();

        return redirect()->route('admin.application');*/

     }


     	


      public function csm_index(Request $req){

     	$temp = project::where('team','csm')->get();

     	$t1 = project::where('team','csm')->pluck('mandays');
     	
     	$t2 = project::where('team','csm')->pluck('project_name');
     	$t3 = project::pluck('status');
     	$t5 = project::where('team','csm')->pluck('project_name')->count();
     	$t6 = project::where('team','csm')->pluck('percentage')->avg();
    	$request = $req->session()->get('username');
		global $s1;
		global $i;
		$new = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}	

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');


		
     	return view('Admin.csm',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request] );

     
     	
     }

     public function application_index(Request $req){

     	$temp = project::where('team','application')->get();

     	$t1 = project::where('team','application')->pluck('mandays');
     	$t5 = project::where('team','application')->pluck('project_name')->count();
     	$t6 = project::where('team','application')->pluck('percentage')->avg();
     	$t2 = project::where('team','application')->pluck('project_name');
     	$t3 = project::pluck('status');

     	//print_r($t2);

    	$request = $req->session()->get('username');
		global $s1;
		global $i;
		$new = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');


		
     	return view('Admin.application',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request] );

     
     	
     }

    /**
     * @param Request $req
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function issm_index(Request $req){

     	$temp = project::where('team','issm')->get();
     	$t1 = project::where('team','issm')->pluck('mandays');
     	$t5 = project::where('team','issm')->pluck('project_name')->count();
     	$t6 = project::where('team','issm')->pluck('percentage')->avg();

     	$t2 = project::where('team','issm')->pluck('project_name');
     	$t3 = project::pluck('status');
     	$request = $req->session()->get('username');
    
		global $s1;
		global $i;
		$new = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');
		
     	return view('Admin.issm',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request] );

        	
     }

     public function software_index(Request $req){
     	$temp = project::where('team','software')->get();
     	$t1 = project::where('team','software')->pluck('mandays');
     	$t5 = project::where('team','software')->pluck('project_name')->count();
     	$t6 = project::where('team','software')->pluck('percentage')->avg();
     	$t2 = project::where('team','software')->pluck('project_name');
     	$t3 = project::pluck('status');
    	$request = $req->session()->get('username');
		global $s1;
		global $i;
		$new = array();

		for ($i=0 ; $i <sizeof($t1) ; $i++ ) {
			array_push($new,(int)$t1[$i]);
		}

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');



     	return view('Admin.software',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request]);



     }

     public function csm_form_post(Request $req){

         $req->validate([
             'pname' => 'required',
             'cname' => 'required',
             'man' => 'required',
             'start' => 'required',
             /*'status' => 'required',
             'prname' => 'required',
             'sdate' => 'required',
             'edate' => 'required',
             'percentage' => 'required',
             'tstatus' => 'required'*/

         ]);

         global $prname;
         global $sdate;
         global $edate;
         global $percentage;
         global $tstatus;
         global $comment;



         $prname = $req->prname;
         $sdate = $req->sdate;
         $edate = $req->edate;
         $percentage = $req->percentage;
         $tstatus = $req->tstatus;
         $comment = $req->comment;
         //echo count($req->$prname);
         //print_r($req->prname);

         //echo count($prname);
         //print_r($comment);
         if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
         {
             $project = new project();
             $project->project_name = $req->pname;
             $project->project_coordinator = $req->cname;
             $project->start_date = $req->start;
             $project->status = $req->status;
             $project->mandays = $req->man;
             $project->team = 'csm';
             $project->save();

             $t1 = project::all()->sortByDesc('id')->pluck('id')->first();
             //echo $t1;
             for ($i=0; $i < count($prname) ; $i++) {

                 $task = new task();
                 $task->project_id = $t1;
                 $task->task_name = $prname[$i];
                 $task->sdate = $sdate[$i];
                 $task->edate = $edate[$i];
                 $task->percentage = $percentage[$i];
                 $task->status = $tstatus[$i];
                 $task->comment = $comment[$i];
                 $task->save();
             }
             return redirect()->route('admin.csm');

         }
         else
         {
             echo "not ok";
         }


     	
     }

     public function software_form_post(Request $req){

         $req->validate([
             'pname' => 'required',
             'cname' => 'required',
             'man' => 'required',
             'start' => 'required',
             /*'status' => 'required',
             'prname' => 'required',
             'sdate' => 'required',
             'edate' => 'required',
             'percentage' => 'required',
             'tstatus' => 'required'*/

         ]);

         global $prname;
         global $sdate;
         global $edate;
         global $percentage;
         global $tstatus;
         global $comment;



         $prname = $req->prname;
         $sdate = $req->sdate;
         $edate = $req->edate;
         $percentage = $req->percentage;
         $tstatus = $req->tstatus;
         $comment = $req->comment;
         //echo count($req->$prname);
         //print_r($req->prname);

         //echo count($prname);
         //print_r($comment);
         if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
         {
             $project = new project();
             $project->project_name = $req->pname;
             $project->project_coordinator = $req->cname;
             $project->start_date = $req->start;
             $project->status = $req->status;
             $project->mandays = $req->man;
             $project->team = 'software';
             $project->save();

             $t1 = project::all()->sortByDesc('id')->pluck('id')->first();
             //echo $t1;
             for ($i=0; $i < count($prname) ; $i++) {

                 $task = new task();
                 $task->project_id = $t1;
                 $task->task_name = $prname[$i];
                 $task->sdate = $sdate[$i];
                 $task->edate = $edate[$i];
                 $task->percentage = $percentage[$i];
                 $task->status = $tstatus[$i];
                 $task->comment = $comment[$i];
                 $task->save();
             }
             return redirect()->route('admin.software');

         }
         else
         {
             echo "not ok";
         }


     	
     }
     public function issm_form_post(Request $req){

         $req->validate([
             'pname' => 'required',
             'cname' => 'required',
             'man' => 'required',
             'start' => 'required',
             /*'status' => 'required',
             'prname' => 'required',
             'sdate' => 'required',
             'edate' => 'required',
             'percentage' => 'required',
             'tstatus' => 'required'*/

         ]);

         global $prname;
         global $sdate;
         global $edate;
         global $percentage;
         global $tstatus;
         global $comment;



         $prname = $req->prname;
         $sdate = $req->sdate;
         $edate = $req->edate;
         $percentage = $req->percentage;
         $tstatus = $req->tstatus;
         $comment = $req->comment;
         //echo count($req->$prname);
         //print_r($req->prname);

         //echo count($prname);
         //print_r($comment);
         if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
         {
             $project = new project();
             $project->project_name = $req->pname;
             $project->project_coordinator = $req->cname;
             $project->start_date = $req->start;
             $project->status = $req->status;
             $project->mandays = $req->man;
             $project->team = 'issm';
             $project->save();

             $t1 = project::all()->sortByDesc('id')->pluck('id')->first();
             //echo $t1;
             for ($i=0; $i < count($prname) ; $i++) {

                 $task = new task();
                 $task->project_id = $t1;
                 $task->task_name = $prname[$i];
                 $task->sdate = $sdate[$i];
                 $task->edate = $edate[$i];
                 $task->percentage = $percentage[$i];
                 $task->status = $tstatus[$i];
                 $task->comment = $comment[$i];
                 $task->save();
             }
             return redirect()->route('admin.issm');

         }
         else
         {
             echo "not ok";
         }

     }
     public function infra_form_post(Request $req){

         $req->validate([
             'pname' => 'required',
             'cname' => 'required',
             'man' => 'required',
             'start' => 'required',
             /*'status' => 'required',
             'prname' => 'required',
             'sdate' => 'required',
             'edate' => 'required',
             'percentage' => 'required',
             'tstatus' => 'required'*/

         ]);

         global $prname;
         global $sdate;
         global $edate;
         global $percentage;
         global $tstatus;
         global $comment;



         $prname = $req->prname;
         $sdate = $req->sdate;
         $edate = $req->edate;
         $percentage = $req->percentage;
         $tstatus = $req->tstatus;
         $comment = $req->comment;
         //echo count($req->$prname);
         //print_r($req->prname);

         //echo count($prname);
         //print_r($comment);
         if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
         {
             $project = new project();
             $project->project_name = $req->pname;
             $project->project_coordinator = $req->cname;
             $project->start_date = $req->start;
             $project->status = $req->status;
             $project->mandays = $req->man;
             $project->team = 'infra';
             $project->save();

             $t1 = project::all()->sortByDesc('id')->pluck('id')->first();
             //echo $t1;
             for ($i=0; $i < count($prname) ; $i++) {

                 $task = new task();
                 $task->project_id = $t1;
                 $task->task_name = $prname[$i];
                 $task->sdate = $sdate[$i];
                 $task->edate = $edate[$i];
                 $task->percentage = $percentage[$i];
                 $task->status = $tstatus[$i];
                 $task->comment = $comment[$i];
                 $task->save();
             }
             return redirect()->route('admin.infra');

         }
         else
         {
             echo "not ok";
         }

     }
     public function details(Request $req,$id,$team)
     {
         $temp = task::where('project_id', $id)->get();
         $request = $req->session()->get('username');


         return view('Admin.details', ['new' => $temp, 'new1' => $id, 'team' => $team, 'sess' => $request]);


     }

         public function edit(Request $req,$id)
         {
             $temp = project::where('id', $id)->get();
             $request = $req->session()->get('username');


             return view('Admin.fromedit', ['new' => $temp[0], 'new1' => $id,  'sess' => $request]);


         }
         public function fedit(Request $req,$id)
        {
            $prname = $req->prname;
            $cname = $req->cname;
            $sdate = $req->start;
            $status = $req->status;
            $man =   $req->man;


            DB::table('project')
                ->where('id', $id)
                ->update(['project_name' => $req->pname,'project_coordinator'=> $cname,'start_date'=>$sdate,'status'=>$status,'mandays'=>$man]);


            return redirect()->route('admin.index');


        }






    public function dtails(Request $req,$id,$pr,$pid,$team){


        $result= DB::table('task')
            ->where('id', $id)
            ->update(array('action' => 'Complete','status'=>'Completed'));



        $temp = project::where('id',$pid)->pluck('percentage');
        //print_r($temp);
        $new = array();
        for ($i=0 ; $i <sizeof($temp) ; $i++ ) {
            array_push($new,(int)$temp[$i]);
        }
        $sum=$new[0] + $pr;


        if ($sum==100)
        {
            $result= DB::table('project')
                ->where('id', $pid)
                ->update(array('percentage' => $sum));
            $result1= DB::table('project')
                ->where('id', $pid)
                ->update(array('status' => 'Completed'));

        }
        else
        {
            $result= DB::table('project')
                ->where('id', $pid)
                ->update(array('percentage' => $sum));
        }


        $temp = task::where('project_id',$pid)->get();

        return view('Admin.details',['new'=>$temp,'new1'=>$id,'team'=>$team]);
    }

    public function rollback(Request $req,$id,$pr,$pid,$team){

        $result= DB::table('task')
            ->where('id', $id)
            ->update(array('action' => 'Not Complete','status'=>'procesing'));

        $temp = project::where('id',$pid)->pluck('percentage');
        //print_r($temp);
        $new = array();
        for ($i=0 ; $i <sizeof($temp) ; $i++ ) {
            array_push($new,(int)$temp[$i]);
        }
        $sum=$new[0] - $pr;
        $result1= DB::table('project')
            ->where('id', $pid)
            ->update(array('percentage' => $sum));

        $result2= DB::table('project')
            ->where('id', $pid)
            ->update(array('status' => 'procesing'));
        $temp = task::where('project_id',$pid)->get();

        return view('Admin.details',['new'=>$temp,'new1'=>$id,'team'=>$team]);
    }



      public function add(Request $req,$id,$team){


      		$t1 = resourcs_name::where('team',$team)->get();
      		

     	
     		return view('Admin.add',['new'=>$id,'team'=>$team,'new1'=>$t1]);     	     	     	    	
     }
      public function csm_form(Request $req){
     	
     		return view('Admin.csmform');     	     	     	    	
     }
     public function software_form(Request $req){
     	
     		return view('Admin.softwareform');     	     	     	    	
     }
     public function issm_form(Request $req){
     	
     		return view('Admin.issmform');     	     	     	    	
     }
     public function infra_form(Request $req){
     	
     		return view('Admin.infraform');     	     	     	    	
     }


	     public function addproject(Request $req){
     	
     	$req->validate([
    		'pname' => 'required',
    		'cname' => 'required',
    		'man' => 'required',
    		'start' => 'required',
    		/*'status' => 'required',
    		'prname' => 'required',
    		'sdate' => 'required',
    		'edate' => 'required',
    		'percentage' => 'required',
    		'tstatus' => 'required'*/
	
		]);

     	global $prname;
     	global $sdate;
     	global $edate;
     	global $percentage;
     	global $tstatus;
     	global $comment;



     	$prname = $req->prname;
     	$sdate = $req->sdate;
     	$edate = $req->edate;
     	$percentage = $req->percentage;
     	$tstatus = $req->tstatus;
     	$comment = $req->comment;
			//echo count($req->$prname); 
			//print_r($req->prname);
     	
		//echo count($prname);
		//print_r($comment);
		if(count($prname)==count($sdate)&&count($edate)==count($percentage)&&count($tstatus)==count($percentage))
		{
			$project = new project();
			$project->project_name = $req->pname;
			$project->project_coordinator = $req->cname;
			$project->start_date = $req->start;	
			$project->status = $req->status;
			$project->mandays = $req->man;
			$project->team = 'application';
			$project->save();

			$t1 = project::all()->sortByDesc('id')->pluck('id')->first();
			//echo $t1;
		for ($i=0; $i < count($prname) ; $i++) { 

			$task = new task();
			$task->project_id = $t1;
			$task->task_name = $prname[$i];
			$task->sdate = $sdate[$i];
			$task->edate = $edate[$i];
			$task->percentage = $percentage[$i];
			$task->status = $tstatus[$i];
			$task->comment = $comment[$i];
			$task->save();
		}
            return redirect()->route('admin.application');

		}
		else
		{
			echo "not ok";
		}

			
		
     	/*$network = new network();
     	$network->team = 'application';
     	$network->name = $req->pname;
     	$network->co_ordinator = $req->cname;
     	$network->mandays = $req->man;
		$network->start = $req->start;
		
		$network->description = $req->description;
		$network->comment = $req->comment;
		$network->status = $req->status;
		$network->save();

		return redirect()->route('admin.application');*/
     	
     }

     public function application_add(Request $req){

     	return view('Admin.application_add');

     }

     public function infra_index(Request $req){

     	$temp = project::where('team','infra')->get();

     	$t1 = project::where('team','infra')->pluck('mandays');
     	

     	$t2 = project::where('team','infra')->pluck('project_name');
     	$t3 = project::pluck('status');
     	$t5 = project::where('team','infra')->pluck('project_name')->count();
     	$t6 = project::where('team','infra')->pluck('percentage')->avg();
    	$request = $req->session()->get('username');
		global $s1;
		global $i;
		$new = array();
		
		for ($i=0 ; $i <sizeof($t1) ; $i++ ) { 
			array_push($new,(int)$t1[$i]);
		}

     	$chart = new dashboard;
		$chart->labels($t2);
		$chart->dataset('Total Mandays', 'pie', $new);
		$chart->loaderColor('#a83232','#e9f505');


		
     	return view('Admin.infra',['new'=>$temp,'chart'=> $chart,'total'=>$t5,'avg'=>$t6,'sess'=>$request] );

     
     	
     }	




      public function adddetailse(Request $req,$id,$team){
     	
     	$req->validate([
    		
    		'duration' => 'required',
    		'start' => 'required',
    		'finish' => 'required',
    		'predecessors' => 'required',
    		'rname' => 'required',
    		'complete' => 'required',
    		'remarks' => 'required',
    		
		]);
     	$a1 = network::where('id',$id)->pluck('percentage');

     	global $temp;
     	$temp = $a1[0]+$req->complete;
     	

     	
     	if($temp>100)
     	{
     		return redirect()->route('admin.add',[$id,$team]);
     	}

     	elseif ($temp==100) {

     		$network = new networkdetails();
	     	$network->project_id = $req->project_id;
	     	$network->team = $req->team;
	     	$network->duration = $req->duration;
	     	$network->start = $req->start;
			$network->finish = $req->finish;
			$network->predecessors = $req->predecessors;
			$network->resource_names = $req->rname;
			$network->complete = $req->complete;
			$network->remarks = $req->remarks;
			$network->save();


			$titles = networkdetails::where('project_id',$id)->pluck('complete');
			$a1 = network::where('id',$id)->pluck('percentage');
			
			$end = DB::table('network')
					->where('id', $id)
					->pluck('start');
			
			$newdate= date_create($req->finish);
			
			$enddate = date_create($end[0]);
			
			$diff=date_diff($enddate,$newdate);
			
			$n1 = $diff->format("%a");

			$n1=(int)$n1;
			
			$n = 'complete';

			$result= DB::table('network')
	            ->where('id', $id)
	            ->update(array('percentage' => $temp, 'status'=> $n, 'end'=>date("Y/m/d"),'mandays'=>$n1));
	        
	            return redirect()->route('admin.details',[$id,$team]);	
     		
     	}

     		
		else
		{
	     	
			$result= DB::table('network')
	            ->where('id', $id)
	            ->update(array('percentage' => $temp));
	            return redirect()->route('admin.details',[$id,$team]);	
		}
		

		

     	    	     	     	    	
     }
}
