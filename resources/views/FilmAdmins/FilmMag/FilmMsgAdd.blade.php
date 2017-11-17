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
			        <form action="form_layouts.html" class="mws-form">
			            <div class="mws-form-inline">
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影片名称
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="small">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       上映时间
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        关键字
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        导演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        主演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       票价
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>




			               
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        图片
			                    </label>
			                    <div class="mws-form-item">
			                       <input type="file" class="large">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影片
			                    </label>
			                    <div class="mws-form-item">
			                       <input type="file" class="large">
			                    </div>
			                </div>


							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       简介
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="large" cols="" rows="">
			                        </textarea>
			                    </div>
			                </div>

			                 
			                <div class="mws-form-row">
                    				<label class="mws-form-label">状态</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input  name="status" checked type="radio"> <label>开启</label></li>
                    						<li><input  name="status" type="radio"> <label>禁用</label></li>
                    						
                    					</ul>
                    				</div>
                    		</div>

			           
			            </div>
			            <div class="mws-button-row">
			                <input type="submit" class="btn btn-danger" value="添加">
			            </div>
			        </form>
			    </div>
			</div>





@endsection