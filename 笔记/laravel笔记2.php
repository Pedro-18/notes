<?php 
            $validator = \Validator::make($request->all(),$rules,$notices);//验证方法
            if($validator->passes()){//验证判断
	    //校验失败，跳转回登录页，同时把错误信息、输入信息回传
	    return redirect('admin/manager/login')
	        ->withErrors($validator)//传递验证信息，还可以->withErrors(['errorinfo'=>'用户名或密码错误'])
	        ->withInput();//将传递过来的参数返回

        \Auth::guard('back')->logout();//清除session，退出登录
        if(\Auth::guard('back')->attempt($name_pwd,$request->input('online'))){//验证器使用

        	// 关联模型操作方法
           ->with(['course'=>function($c){
            $c->orderBy('course_id','desc');
          $c->where('course_name','like','%jquery%');
               $c->with('profession');
            }])

     $course = Course::pluck('course_name','course_id')->toArray();//取出的数据以键值对形式