
@extends('admin.layout.admins')
        
@section('title','管理员添加')


@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">

                         <span>添加管理员</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    
                              @if (count($errors) > 0)
                                  <div class="mws-form-message warning">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li style='list-style:none;'>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                                      
                         <form action="/admin/guanliyuan" method="post" class="mws-form" enctype='multipart/form-data'>
                              <div class="mws-form-inline">

                                   <div class="mws-form-row">
                                        <label class="mws-form-label">用户名:</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="phone" class="small" value="{{old('phone')}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">密码:</label>
                                        <div class="mws-form-item">
                                             <input type="password" name="password" class="small">
                                        </div>
                                   </div>

                                   <!--  最后登录时间 -->
                            
                                  
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">权限</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li><input type="radio" name="auth" value="1" readonly="readonly" checked> <label>开启</label></li>
                                                  <li><input type="radio" name="auth" readonly="readonly" value="0"> <label>关闭</label></li>
                                                  
                                             </ul>
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
<script>

     $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection

