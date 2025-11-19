<?php
namespace App\Controllers;
use App\Models\CalendarModel;

class CalendarController extends BaseController
{
    protected $calendarModel;
    protected $gfa_model;
    
    public function __construct() { 
        $this->calendarModel = new CalendarModel();
        $this->gfa_model = model('App\Models\GfaModel');
    }
  

public function getStartUpDetailsRegAllC($limit)
{           
    $builder = $this->gfa_model->db->table('Startups_Inv');
    $builder->where('Startup_Company_Name !=', "");  
    $builder->where('Primary_Contact_Name !=', "");  
    $builder->orderBy('STUP_ID', "desc");  
    $builder->limit($limit);
    $query = $builder->get(); 
    if($query->getNumRows() > 0 )
    {
        return $query->getResultArray();
    }
    else
    {
        return 0;
    }
            
}

public function getNoOfMentees($email)
{
    $builder = $this->gfa_model->db->table('mentor_info');
    $builder->select('Mentee_No');
    $builder->where('Email', $email);
    $query = $builder->get();
    
    if($query->getNumRows() > 0 )
    {
        return $query->getResultArray()[0]['Mentee_No'];
    }
    else
    {
        return 0;
    }
}


    public function index()
    {
        $email  = session()->get('email');
        // echo $email;
        $account_type = session()->get('account_type');
        
        if(!$email || !$account_type){ return redirect()->to(base_url('gfa/login')); }
        
        $data['email'] =  $email;
        
        if($account_type == 'investor' OR $account_type == 'corperate' || $account_type == 'accelerator'){
            $data['guests'] = $this->getStartUpDetailsRegAllC(20);
            $data['events'] = $this->calendarModel->getAllEvents($email);
            return view('calendar', $data);
        }
        elseif($account_type == 'mentorship'){
            // $data['guests'] = $this->getStartUpDetailsRegAllCalendar($this->getNoOfMentees($email));
        	$data['guests'] = $this->getStartUpDetailsRegAllC(20);
            $data['events'] = $this->calendarModel->getAllEvents($email);
            return view('calendar', $data);
        }
        elseif($account_type == 'startup' || $account_type == 'individual'){
            $data['guests'] = $this->getStartUpDetailsRegAllC(20);
            $data['events'] = $this->calendarModel->getAllStartupEvents($email);
            return view('calendar', $data);
        }
    }

    public function create()
    {
    	$email  = session()->get('email');
    
        $eventTitle = $this->request->getPost("eventTitle");
        $startDate =   $this->request->getPost("startDate");
        $endDate = $this->request->getPost("endDate");
        $eventURL = $this->request->getPost("eventURL");
        $location = $this->request->getPost("location");
        $host = $this->request->getPost("host");
        $guests = $this->request->getPost("guests");
        $eventLabel = $this->request->getPost("eventLabel");
        $eventDescription = $this->request->getPost("eventDescription");


        $result = $this->calendarModel->insertEvent([
            "eventTitle" => $eventTitle,
            "startDate" => $startDate,
            "endDate" => $endDate,
            "eventURL" => $eventURL,
            "location" => $location,
            "host" => $host,
            "guests" => $guests,
            "eventLabel" => $eventLabel,
            "eventDescription" => $eventDescription
        ]);

        if ($result) {
//         	$ref_id = bin2hex(random_bytes(32));
//             $subject = "Upcoming Event!";
//             // $subject = "Upcoming Event: You're a Guest in a Scheduled Event";
//             $message = "You have been invited as a guest to an upcoming event. Check your calendar for details.";
//             $email_notifiers = json_decode($guests, true);
            
//             foreach($email_notifiers as $email_notifier) {
//                 $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
//     	        $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
//             }
            return $this->response->setJSON(['success' => true, 'data' => $result]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error creating event']);
        }
    }
    
    public function update()
    {
		$email  = session()->get('email');
        $id = $this->request->getPost('id');

        $eventTitle = $this->request->getPost('eventTitle');
        $startDate =  $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');
        $eventURL = $this->request->getPost('eventURL');
        $location = $this->request->getPost('location');
        $guests = $this->request->getPost('guests');
        $eventLabel = $this->request->getPost('eventLabel');
        $eventDescription = $this->request->getPost('eventDescription');

        $data = [$eventTitle, $startDate, $endDate, $eventURL, $location, $guests, $eventLabel, $eventDescription];
        
        $result = $this->calendarModel->updateEvent($id, $data);

        if ($result) {
//         	$ref_id = bin2hex(random_bytes(32));
//             $subject = "Upcoming Event Updated!";
//             // $subject = "Upcoming Event: You're a Guest in a Scheduled Event";
//             $message = "Check your calendar for details.";
//             $email_notifiers = json_decode($guests, true);
            
//             foreach($email_notifiers as $email_notifier) {
//                 $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
//     	        $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
//             }
            return $this->response->setJSON(['success' => true, 'message' => $result]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update event.']);
        }        
    }

    public function delete()
    {
    	$email  = session()->get('email');
        $eventId = $this->request->getPost('eventId');

        $result = $this->calendarModel->deleteEvent($eventId);

        if ($result) {
//         	$ref_id = bin2hex(random_bytes(32));
//             $subject = "Upcoming Event Deleted!";
//             // $subject = "Upcoming Event: You're a Guest in a Scheduled Event";
//             $message = "Check your calendar for details.";
//             $email_notifiers = json_decode($guests, true);
            
//             foreach($email_notifiers as $email_notifier) {
//                 $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
//     	        $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
//             }
        
            return $this->response->setJSON(['success' => $result]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error deleting event']);
        }

    }
    
}
