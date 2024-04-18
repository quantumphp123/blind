<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Professional;
use App\Models\Moreimages;
use App\Models\Skill;
use Session;
use Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Post;
use App\Exports\PostExport;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\Models\Event;
use App\Models\StoreEvent;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
	
	 public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data)->setOptions(['defaultFont' => 'sans-serif']);;
    
        return $pdf->download('ReportCard.pdf');
    }
	
	public function basic_email() {
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('saifthegame0001@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('saif.quantum@gmail.com','saif khan');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('saif.quantum@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
	
	
	
	public function login_post(Request $request)
	{

	$credentials = $request->only('email','password');
	if(Auth::attempt($credentials)){
	if(Auth::user()->role_id == 1){
	$useLoginId=User::where(['email'=>$request->email])->get();

	session()->put('admin-login-id',$useLoginId[0]->id);
	return redirect(url('admin-dashboard'));

	}else{
	Session::flush();
	Auth::logout();
	\Session::put('err_msg','Invalid Username and Password.');
	//return redirect(url('admin-login'));

	return redirect()->route('admin-login');
	}
	}else{
	\Session::put('err_msg','Invalid Username and Password.');
	return redirect(url('admin-login'));
	}
	}

   
	  public function admin_dashboard()
    {
       return view('admin.dashboard');
    }
	
	public function professional()
    {
		$data['professional']=Professional::orderby('id','desc')->get();
       return view('admin.professional.index',$data);
    }
	
	
	
	public function ExportProfessional()
  {
    return Excel::download(new PostExport, 'Professional.xlsx');
  }
	
	public function add_professional()
    {
       return view('admin.professional.add');
    }
	
	
	public function post_add_professional(Request $request)
	
	{

	$validator = Validator::make($request->all(), [
	'name'=>'required|max:100|min:0',
	'mobile'=>'required|max:10|min:0|unique:professionals',
	'email' => 'required|email|max:100|min:0|unique:professionals',
	'password' => 'required|max:100|min:0',
	'address' => 'required|max:100|min:0',
	//'file' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
	]);

	if($validator->fails()){
	return redirect()->back()
	->withErrors($validator)
	->withInput();
	}

	if($request->skill==""){
		\Session::put('success','Please select at least one Skill');
		return redirect()->route('student-list');
	}
	
	
	$rand = mt_rand(1500, 5000);
	$professional_id_code = 'PDI-'.$rand;
	
	$length = 50;
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
	$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	$randomString;
	
	
	$userprofile=new Professional;
	
	
	if($request->file('file')){
	$imageName = time().'.'.$request->file->extension();
	$request->file->move(public_path('uploads/professional'),$imageName);
	$userprofile->image=url('public/uploads/professional').'/'.$imageName;
	}else{
	$userprofile->image=url('public/uploads/professional/dummy.jpeg'); 
	} 
 
 
	$userprofile->name=$request->name;
	$userprofile->professional_id=$professional_id_code;
	$userprofile->remember_token=$randomString;
	$userprofile->email=$request->email;
	$userprofile->mobile=$request->mobile;
	$userprofile->password=$request->password;
	$userprofile->address=$request->address;
	$userprofile->status='0';
	$userprofile->save();
	$professional_id = $userprofile->id;



	if($request->skill){
	for($i=0;$i<count($request->skill);$i++){
	$instrument=new Skill;
	$instrument->professional_id=$professional_id;
	$instrument->skill=$request->skill[$i];
	$instrument->save();
	  }
	}

	\Session::put('success','Data Added Successfully.');
	return redirect()->route('professional');

	}
	
	
	function add_more_images(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
	
	//'proffessional_id'=>'required|max:10|min:0|exists:professionals',
	
	]);

	if($validator->fails()){
	return redirect()->back()
	->withErrors($validator)
	->withInput();
	}
		
		$proff_id = $request->proff_id;
		 if($request->file('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                 $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('uploads/professional'), $name);  
                $files[] = $name;  
				
				$userprofile_image=url('public/uploads/professional').'/'.$name;
			   
			   DB::table('proff_images')->insert(
			array(
			'proffessional_id'=>$proff_id,
			'status'=>0,
			'image'=>$userprofile_image
			));
            }
			\Session::put('success','Images Uploaded.');
			 return redirect("view-professional/$proff_id");
         }else{
			 \Session::put('success','Please Select Atleast One Image.');
			 return redirect("view-professional/$proff_id");
		 }
		
		
		
	}
	
	function update_proffessional_status(Request $request)
	{
		
		$proffstatus = $request->proffstatus;
		$id = $request->col_id;
		
		
		$userprofile=Moreimages::find($id);
		
		if($userprofile->status==0){
			$userprofile->status=1;
		$userprofile->save();
	    echo '<span id="status_pending<?php echo $orderDetails->id; ?>" class="badge badge-info">approved</span>';		
		exit();
		}
		
		if($userprofile->status==1){
			$userprofile->status=0;
		$userprofile->save();
			echo '<span id="status_approved<?php echo $orderDetails->id; ?>" class="badge badge-warning">pending</span>';
		exit();
		}
		
	
	}
	
	
	function delete_more_images($id)
	{
		
	$result = DB::table('proff_images')->where('id',$id)->get();
	$proff_id = $result[0]->proffessional_id;
	$result[0]->image;
	$string_no =  strpos($result[0]->image,"public");
	$new_image = substr($result[0]->image,$string_no);
	$str = $result[0]->image;
	$storage =  unlink($new_image);
    if($storage){
		
	Moreimages::where('id',$id)->delete();
	\Session::put('success','File deleted successfully');
	return redirect("view-professional/$proff_id");
		
	}else{
		\Session::put('success','Something went wrong');
	return redirect("view-professional/$proff_id");
	}   
	
		
	}
	
	
	
	function proff_update(Request $request)
	{
		
	 $id = $request->proff_id;
	
	//$userprofile=new Professional;
	$userprofile=Professional::find($id);
	$userprofile->name=$request->name;
	$userprofile->email=$request->email;
	$userprofile->mobile=$request->mobile;
	$userprofile->password=$request->password;
	$userprofile->address=$request->address;
	$userprofile->save();
	\Session::put('success','Data Updated Successfully.');
	return redirect("view-professional/$id");
	
	}
	
	
	
	
	public function delete_professional($id)
    {
		Professional::destroy($id);
		\Session::put('success','Data Deleted Successfully.');
	   return redirect()->route('professional');
	}
	
	public function change_status(Request $request)
	{
		$status = $request->status;
		 $id = $request->proff_id;
			
		if($status=='0'){
		$res=Professional::find($id);
		$res->status='1';
		$res->save();
		}else{
		$res=Professional::find($id);
		$res->status='0';
		$res->save();
		}
		
	}
	
	
	public function view_professional($id)
    {
		$data['info'] = Professional::find($id);
		$data['skill'] = Skill::where('professional_id',$id)->get();
		$data['Moreimages']=Moreimages::where('proffessional_id',$id)->orderby('id','desc')->get();
        
	    return view('admin.professional.detail',$data);
	}
	
	public function delete_skill($id,$userId)
    {
		Skill::destroy($id);
		\Session::put('success','Data Deleted Successfully.');
	   return redirect("view-professional/$userId");
	}
	
	
	
	public function add_skill(Request $request)
	
	{
		
		$id = $request->proff_id;
     if($request->skill==""){
		\Session::put('success','Please select at least one instrument');
		return redirect("view-professional/$id");
	}
    
	if($request->skill){
	for($i=0;$i<count($request->skill);$i++){
	$instrument=new Skill;
	$instrument->professional_id=$request->proff_id;
	$instrument->skill=$request->skill[$i];
	$instrument->save();
	  }
	}

	\Session::put('success','Data Added Successfully.');
	return redirect("view-professional/$id");

	}
	
	
	public function estimate()
    {
       return view('admin.estimate.index');
    }
	
	public function add_estimate()
    {
       return view('admin.estimate.add');
    }
	




	public function calendar()
    {
        $data['events'] = Event::all();
        $data['storedEvents'] = StoreEvent::all();
        return view('admin.calendar.calendar',$data);
    }

    public function addEvent(Request $request)
    {
        $data = new StoreEvent();
        $data->date = $request->date;
        $data->event = $request->event;
        if($data->save())
        {
            return response()->json(['success'=>'Data Updated Successfully', 'code'=>200]);
        }
        else
        {
            return response()->json(['success'=>'Something Gone Wrong', 'code'=>400]);
        }


    }


    public function events()
    {
        $data['storedEvents'] = StoreEvent::orderby('id','desc')->get();
        return view('admin.calendar.event',$data);
    }

    public function addNewEvent()
    {
        $data['events'] = Event::all();
        return view('admin.calendar.post-event',$data);
    }




    public function eventList()
    {
        $data['event'] = Event::orderby('id','desc')->get();
        return view('admin.event.event-list',$data);
    }

    public function postEvent(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $validator = Validator::make($request->all(), [
                'event'=>'required|max:100|min:0',
            ]);

            if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
            }

            $data = new Event();
            $data->event = $request->event;
            $data->save();
            return redirect()->route("event-list")->with("success","Successfully Added!");
        }
        else
        {
            return view("admin.event.add-event");
        }
    }

    public function deleteParentEvent($id)
    {
        $data = Event::where('id',$id)->first();
        $data->delete();
        return redirect()->back();
    }



    public function eventPost(Request $request)
    {
        $data = new StoreEvent();
        $data->date = $request->date;
        $data->event = $request->event;
        if($data->save())
        {
            // return redirect()->route('events');
            return response()->json(['success'=>'Data Updated Successfully', 'code'=>200]);
        }
        else
        {
            return response()->json(['success'=>'Something Gone Wrong', 'code'=>400]);
        }
    }

    public function deleteEvent($id)
    {
        $data = StoreEvent::where('id',$id)->first();
        $data->delete();
        return redirect()->back();
    }





	public function logout()
	{
	Auth::logout();
	Session::flush();
	return redirect(url('admin-login'));
	}
	
    public function create()
    {
        //
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
}
