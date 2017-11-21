@extends('FilmAdmins.layout.index')

@section('title', '影片添加')


@section('content')
     
		<div class="mws-panel grid_8">
			    <div class="mws-panel-header">
			        <span>
			            影片添加
			        </span>
			    </div>
			    <div class="mws-panel-body no-padding">

				 @if (count($errors) > 0)
            <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




			        <form action="{{asset('/FilmAdmins/doAdd')}}" enctype="multipart/form-data"  class="mws-form" method="post">
			            <div class="mws-form-inline">
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影片名称
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="filmname" class="medium">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       上映时间
			                    </label>
			                    <div class="mws-form-item">
			                     <input type="text" value="" name="showtime" class="large"  id="EndDate" runat="server"  readonly="readonly" />  
			                        
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        关键字
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="keywords" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        导演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="director" class="medium">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        主演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="protagonist" class="medium">
			                    </div>
			                </div>

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       时长
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="filmtime" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       票价
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="price" class="medium">
			                    </div>
			                </div>




			               
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        图片
			                    </label>
			                    <div class="mws-form-item">
			                       <input type="file" name="filepic" class="medium">
			                    </div>
			                </div>


			               

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       简介
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="medium" name="summary" cols="" rows="">
			                        </textarea>
			                    </div>
			                </div>

			                <div class="mws-form-row">
                				<label class="mws-form-label">状态</label>
                				<div class="mws-form-item">
                					<select class="large" name="status">
                						 
                                        <option value="1" selected>上映</option>
                                        <option value="2">即将上映</option>
                                        
                					</select>
                				</div>
                    		</div>

			                 
			              
                    		{{ csrf_field() }}

			           
			            </div>
			            <div class="mws-button-row">
			                <input type="submit" class="btn btn-danger" value="添加">
			            </div>
			        </form>
			    </div>
			</div>





@endsection