<?php

class ApiImportManagement extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        $checkThreading = $input['id_threading'];
        $checkidvoteIM = 0;
        $user_id = $input['user_id'];
        $data = 'no data insert';
        $ssuserid = Common::checkSessionLogin($input);
        if ($checkThreading = 'accreditation'){
            $checkidvoteIM = checkIdVote('ImportManagement',$input['id_vote']);
            if ($checkidvoteIM){
                CommonNormal::update($input['id_vote'],$input,'ImportManagement');
                $data = 'data update success';
            }else{
                CommonNormal::create($input,'ImportManagement');
                $data = 'data insert success';
            }
        }else{
            $checkidvoteIM = checkIdVote('ImportManagementAccreditation',$input['id_vote']);
            if ($checkidvoteIM){
                CommonNormal::update($input['id_vote'],$input,'ImportManagementAccreditation');
            }else{
                CommonNormal::create($input,'ImportManagementAccreditation');
            }
        }

        return Common::returnData(200,SUCCESS,$user_id,$ssuserid, $data);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
