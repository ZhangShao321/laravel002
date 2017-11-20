
@extends('admin.layout.admins')
        
@section('title','管理员添加')


@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
<<<<<<< HEAD
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
                              
                                   
=======
                         <span>Inline Form</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                         <form action="form_layouts.html" class="mws-form">
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Small text field</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Medium text field</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="medium">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Large text field</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="large">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Textarea</label>
                                        <div class="mws-form-item">
                                             <textarea class="large" cols="" rows=""></textarea>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Dropdown List</label>
                                        <div class="mws-form-item">
                                             <select class="large">
                                                  <option>Option 1</option>
                                                  <option>Option 3</option>
                                                  <option>Option 4</option>
                                                  <option>Option 5</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Checkboxes</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li><input type="checkbox"> <label>Checkbox 1</label></li>
                                                  <li><input type="checkbox"> <label>Checkbox 2</label></li>
                                                  <li><input type="checkbox"> <label>Checkbox 3</label></li>
                                                  <li><input type="checkbox"> <label>Checkbox 4</label></li>
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">Radio Buttons</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li><input type="radio"> <label>Radio 1</label></li>
                                                  <li><input type="radio"> <label>Radio 1</label></li>
                                                  <li><input type="radio"> <label>Radio 1</label></li>
                                                  <li><input type="radio"> <label>Radio 1</label></li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <div class="mws-button-row">
                                   <input type="submit" class="btn btn-danger" value="Submit">
                                   <input type="reset" class="btn " value="Reset">
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
                              </div>
                         </form>
                    </div>         
                </div>
<<<<<<< HEAD

@endsection

@section('js')
<script>

     $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection
=======
@endsection
>>>>>>> eb39acf43462b13edef35b450481a0f84b29ba8b
