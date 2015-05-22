<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //$this->load->view('pages/home');
        return view('home');
    }
    
    /**
     * List todos based on their status.
     * @param string $status
     */
    public function status($status) {
        echo 'status';
//        $this->load->helper('url');
//        $this->load->library('table');
//        $todos = array();
//        $this->load->model('Todo');
//        $rows = $this->Todo->get_many_by('status', strtoupper($status));
//        foreach ($rows as $row) {
//            $todos[] = array(
//                $row->title,
//                $row->description,
//                $row->status,
//                anchor('todos/add_edit/' . $row->id, 'Edit') . ' | ' . anchor('todos/delete/' . $status . '/' . $row->id, 'Delete'),
//            );
//        }
//
//        $this->load->view('pages/list', array(
//            'status' => $status,
//            'todos' => $todos,
//        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        ////populate from post
//        $todo->title = $this->input->post('title');
//        $todo->description = $this->input->post('description');
//
//
//        // validation
//        $this->load->library('form_validation');
//        $this->form_validation->set_rules(array(
//            array(
//                'field' => 'title',
//                'label' => 'Title',
//                'rules' => 'required',
//            ),
//            array(
//                'field' => 'description',
//                'label' => 'Description',
//                'rules' => 'required',
//            ),
//        ));
//
//        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
//
//        //if doesn't validate
//        if (!$this->form_validation->run()) {
//            $this->load->view('pages/add-edit', array(
//                'edit' => $id != null,
//                'todo' => $todo,
//            ));
//        } else {//if validates
//            $todo->id = (int) $id;
//            //hard-code a few values not in the form
//            $todo->priority = 1;
//            $todo->comment = "my comment";
//            $todo->created_on = "2015-01-01";
//            $todo->last_modified_on = "2015-01-01";
//            $todo->due_on = "2015-01-01";
//            $todo->status = "PENDING";
//            $todo->deleted = 0;
//            $todo->save($id);
//            //add flash and redirect
//            $action = "";
//            if ($id == null) {
//                $action = "added";
//            } else {
//                $action = "updated";
//            }
//            $this->session->set_flashdata('success', 'TODO successfully ' . $action);
//            redirect('/todos/status/' . strtolower($todo->status), 'refresh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        //if is add
//            if ($id) {
//                //get Todo from db by id 
//                $this->load->model('Todo');
//                $todo = $this->Todo->get($id);
//            }
//            $this->load->view('pages/add-edit', array(
//                'edit' => $id != null,
//                'todo' => $todo,
//            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //$this->load->model('Todo');
//    if($this->Todo->delete($id)){
//	$this->session->set_flashdata('success', 'TODO successfully deleted.');
//    }else{
//	$this->session->set_flashdata('error', 'There was a problem deleting the TODO. Please try again.');	
//    }
//    //take back to list
//    redirect('/todos/status/'.$status, 'refresh');
    }

}
