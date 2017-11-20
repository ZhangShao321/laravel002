@extends('admin.layout.admins')
        
@section('title','修改用户')


@section('content')

<div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>修改用户</span>
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

               <form action="{{url('admin/user/'.$res->id)}}" method="post" class="mws-form" enctype="multipart/form-data">
                    <div class="mws-form-inline">

                         <div class="mws-form-row">
                              <label class="mws-form-label">电话（帐号）:</label>
                              <div class="mws-form-item">
                                   <input type="text" name="phone" class="small" value="{{$res->phone}}">
                              </div>
                         </div>
                         
                         <div class="mws-form-row">
                              <label class="mws-form-label">权限:</label>
                              <div class="mws-form-item">
                                   <input type="text" name="auth" class="small" value="{{$res->auth}}">
                              </div>
                         </div>
                    
                         <div class="mws-form-row">
                              <label class="mws-form-label">状态：</label>
                              <div class="mws-form-item clearfix">
                                   <input type="text" name="status" class="small" value="{{$res->status}}">
                              </div>
                         </div>
               
               
                    </div>
                    <div class="mws-button-row">

                         {{csrf_field() }}
                         {{method_field('PUT')}}
                         <input type="submit" class="btn btn-danger" value="修改">
                    
                         
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

