@extends('admin.layout.admins')
        
@section('title','商户添加')

<<<<<<< HEAD
	
@section('content')
		
=======

@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>添加商户</span>
          </div>
          <div class="mws-panel-body no-padding">

     		@if (count($errors) > 0)
			   <div class="mws-form-message error">
			       <ul>
			           @foreach ($errors->all() as $error)
			               <li style='list-style:none;'>{{ $error }}</li>
			           @endforeach
			       </ul>
				</div>
			@endif

			<!-- id
			电影院名称
			电影院地址id
			电影院法人
			电影院联系电话
			营业执照照片
			影院logo
			状态 -->


          	<form action="{{url('admin/user/')}}" method="post" class="mws-form" enctype="multipart/form-data">
          		<div class="mws-form-inline">

          			<div class="mws-form-row">
          				<label class="mws-form-label">电影院名称:</label>
          				<div class="mws-form-item">
          					<input type="text" name="phone" class="small" value="">
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">电影院法人:</label>
          				<div class="mws-form-item">
          					<input type="password" name="password" class="small">
          				</div>
          			</div>
          			
          			<div class="mws-form-row">
          				<label class="mws-form-label">电影院联系电话:</label>
          				<div class="mws-form-item">
          					<input type="text" name="auth" class="small" value="1">
          				</div>
          			</div>

          			<div class="mws-form-row">
          				<label class="mws-form-label">电影院logo:</label>
          				<div class="mws-form-item">
          					<input type="text" name="auth" class="small" value="1">
          				</div>
          			</div>

					<div class="mws-form-row">
          				<label class="mws-form-label">状态：</label>
          				<div class="mws-form-item clearfix">
          					<input type="text" name="status" class="small" value="1">
          				</div>
          			</div>
        		
          	
          		</div>
          		<div class="mws-button-row">

          			{{ csrf_field() }}
          			<input type="submit" class="btn btn-danger" value="添加">
          		
          			
          		</div>
          	</form>
          </div>    	
      </div>

>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b

@endsection