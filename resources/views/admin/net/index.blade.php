@extends('admin.layout.admins')
        
@section('title','网站配置')

	
@section('content')
	

	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>修改网站配置</span>
    </div>

    <div class="mws-panel-body no-padding">

    	@if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style='font-size:17px;list-style:none'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<!-- <div class="mws-form-message error">
		        	This is an error message
		            <ul>
		            	<li>You are too fast</li>
		                <li>You are too slow</li>
		            </ul>
		        </div> -->

    	<form action="/admin/user" class="mws-form" method='post' enctype='multipart/form-data'>
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">网站名称:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='username' value="">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">网站关键字:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='email' value="">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">网站版权:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='phone' value="">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">网站logo:</label>
    				<div class="mws-form-item">
    					<input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="文件上传" name='profile'>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">网站状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" name='status' value='1' checked> <label>开启</label></li>
    						<li><input type="radio" name='status' value='0'> <label>禁止</label></li>
    						
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{ csrf_field()}}
    			{{ method_field('PUT')}}
    			<input type="submit" class="btn btn-danger" value="提交">
    			
    			
    		</div>
    	</form>
    </div>    	
</div>


@endsection