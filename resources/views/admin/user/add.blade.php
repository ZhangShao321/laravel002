
@extends('admin.layout.admins')
        
@section('title','添加用户')


@section('content')

	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>添加用户</span>
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



                    	<form action="/admin/user" method="post" class="mws-form" enctype="multipart/form-data">
                    		<div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名:</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="username" class="small" value="{{old('username')}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">密码:</label>
                    				<div class="mws-form-item">
                    					<input type="password" name="password" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">确认密码:</label>
                    				<div class="mws-form-item">
                    					<input type="password" name="repass" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱:</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="email" class="small" value="{{old('email')}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号:</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="phone" class="small" value="{{old('phone')}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">头像:</label>
                    				<div class="mws-form-item">
                    					<!-- <input type="file" name="profiles" class="small"> -->
                    				<input type="file" name="profile" style="width: 100%; padding-right: 85px;"  placeholder="No file selected...">

                    				</div>
                    			</div>
                    		
								<div class="mws-form-row">
                    				<label class="mws-form-label">状态</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" name="status" value="1" checked> <label>开启</label></li>
                    						<li><input type="radio" name="status" value="0"> <label>关闭</label></li>
                    						
                    					</ul>
                    				</div>
                    			</div>                    		
                    	
                    		</div>
                    		<div class="mws-button-row">

                    			{{csrf_field() }}
                    			<input type="submit" class="btn btn-danger" value="添加">
                    		
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>


@endsection

@section('js')
<script type="text/javascript">

	$('.mws-form-message').delay(5000).slideUp();

</script>

@endsection