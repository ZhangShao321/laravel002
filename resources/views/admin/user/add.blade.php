
@extends('admin.layout.admins')
        
@section('title','添加用户')


@section('content')

<<<<<<< HEAD
	
@endsection

=======
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

          	<form action="{{url('admin/user/')}}" method="post" class="mws-form" enctype="multipart/form-data">
          		<div class="mws-form-inline">

          			<div class="mws-form-row">
          				<label class="mws-form-label">电话（帐号）:</label>
          				<div class="mws-form-item">
          					<input type="text" name="phone" class="small" value="">
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">密码:</label>
          				<div class="mws-form-item">
          					<input type="password" name="password" class="small">
          				</div>
          			</div>
          			
          			<div class="mws-form-row">
          				<label class="mws-form-label">权限:</label>
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


@endsection

@section('js')
<script type="text/javascript">

	$('.mws-form-message').delay(5000).slideUp();

</script>

@endsection
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
