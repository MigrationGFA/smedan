<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ApiController extends Controller
{

    public function __construct() {
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        $this->chat_model = model('App\Models\ChatModel');
    }

    public function index()
    {
        // Your controller logic goes here
        echo 'Hello from ApiController!';
    }

    public function validateUserOnSSO(){

        $json_data = file_get_contents("php://input");

        $data = json_decode($json_data, true);

        if (!isset($data['token']) || empty($data['token']) || !isset($data['email']) || empty($data['email']) || !isset($data['source']) || empty($data['source'])) {
            $missingFields = [];
            
            if (!isset($data['token']) || $data['token'] === '') {
                $missingFields[] = 'token';
            }
            
            if (!isset($data['email']) || $data['email'] === '') {
                $missingFields[] = 'email';
            }
            
            if (!isset($data['source']) || $data['source'] === '') {
                $missingFields[] = 'source';
            }
        
            $response = ['status' => 'error', 'message' => 'Missing or empty required fields in JSON data: ' . implode(', ', $missingFields)];
            return json_encode($response);
        }

        $allowedSources = ['skillpaddy'];

        if (!in_array($data['source'], $allowedSources)) {
            $response = ['status' => 'error', 'message' => 'Source is not allowed.'];
            return json_encode($response);
        }
        
        $detail = $this->gfa_model->getStartUpDetails($data['email'])[0]['Primary_Contact_Name'];
        $detail_array = explode(" ", $detail);

        $data_user = [
            'first_name'=> $detail_array[0],
            'last_name'=> $detail_array[1],
        ];
        
        $data['source'] = 'remsana';

        if(!$this->gfa_model->checkssocred($data)) {
            $response = ['status' => 'error', 'message' => 'User not found'];
            return json_encode($response);
        }

        $response = ['status' => 'success', 'message' => 'User exists', 'data' => $data_user];
        return json_encode($response);
    }

    public function group_members_api()
    {
        print_r($this->gfa_model->getAllCourse());
        die();
        // Post Data
        $json_data = file_get_contents("php://input");

        $dataRecord = json_decode($json_data, true);
        $stateRd =  $dataRecord["state"]; // get state of applicant
        $thisSkill = $dataRecord["course"]; // get course of applicant
        $EmailByCourse = $this->gfa_model->getEmailByCourse($thisSkill);
        $verifyGroupHead = $this->gfa_model->verifyGroupHead("Yes", $stateRd, $thisSkill);
        $groupHeadDetails = $this->gfa_model->getStartUpDetails($verifyGroupHead[0]['email']);

        $data['groupHeadName'] = $groupHeadDetails[0]['Primary_Contact_Name'];
        $data['groupHeadEmail'] = $verifyGroupHead[0]['email'];
        $data['groupHeadGender'] = $groupHeadDetails[0]['Gender'];
        $data['groupHeadCity'] = $getEmailByCourse[0]['city'];

        $EmailByCourseData = $this->gfa_model->displayCourseGroupMemberAPI($thisSkill, $stateRd);

        // Initialize an array to store member details
        $data['members'] = [];

        foreach ($EmailByCourseData as $courseArray) {
            // Skip the group head if their email matches
            if ($data['groupHeadEmail'] == $courseArray['Contact_Email']) {
                continue; 
            }

            // Add member details to the array
            $memberDetails = [
                'memberName' => ucwords($courseArray['Primary_Contact_Name']),
                'memberEmail' => $courseArray['Contact_Email'],
                'memberGender' => $courseArray['Gender'],
                'memberCity' => $courseArray['city'],
            ];

            $data['members'][] = $memberDetails;
        }

        print_r($data);

        //$jsonResponse = json_encode($data);

        // Set the appropriate headers for a JSON response
        //$this->response->setHeader('Content-Type', 'application/json');
        $response = ['status' => 'success', 'message' => 'Data', 'getData' =>"{$data}"];
        return json_encode($response);
        // Output the JSON response
        //return $jsonResponse;
    }

    public function updateCourseStatus(){
        $json_data = file_get_contents("php://input");

        $data = json_decode($json_data, true);

        if (!isset($data['courseId']) || empty($data['courseId']) || !isset($data['complete']) || empty($data['complete']) || !isset($data['email']) || empty($data['email']) || !isset($data['source']) || empty($data['source'])) {
            $missingFields = [];

            if (!isset($data['courseId']) || $data['courseId'] === '') {
                $missingFields[] = 'courseId';
            }
            
            if (!isset($data['complete']) || $data['complete'] === '') {
                $missingFields[] = 'complete';
            }
            
            if (!isset($data['email']) || $data['email'] === '') {
                $missingFields[] = 'email';
            }

            if (!isset($data['source']) || $data['source'] === '') {
                $missingFields[] = 'source';
            }

            $response = ['status' => 'error', 'message' => 'Missing or empty required fields in JSON data: ' . implode(', ', $missingFields)];
            return json_encode($response);
        }

        $allowedSources = ['skillpaddy'];

        if (!in_array($data['source'], $allowedSources)) {
            $response = ['status' => 'error', 'message' => 'Source is not allowed.'];
            return json_encode($response);
        }

        $user_exist = $this->gfa_model->getLoginDetails($data['email']);

        if(!$user_exist) {
            $response = ['status' => 'error', 'message' => 'User not found'];
            return json_encode($response);
        }

        if($data['complete']) {
            $status = 'completed';
        } else {
            $status = 'ongoing';
        }

        $data['course_id'] = $data['courseId'];
        $data['email'] = $data['email'];
        $data['status'] = [
            'status' => $status,
        ];

        //print_r($this->gfa_model->getAllCourseStatus());

        if($this->gfa_model->updateCourseStatus($data)){
            $response = ['status' => 'success', 'message' => 'Status updated successfully'];
        }else {
            $response = ['status' => 'error', 'message' => 'Error occured while updating'];
        }

        //print_r($this->gfa_model->updateCourseStatus($data));

        return json_encode($response);

    }
}


?>