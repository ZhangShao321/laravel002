@extends('FilmAdmins.layout.index')

@section('title', '电影院编辑')


@section('content')
     
		<div class="mws-panel grid_8">
			    <div class="mws-panel-header">
			        <span>
			            电影院信息
			        </span>
			    </div>
			    <div class="mws-panel-body no-padding">
			        <form action="form_layouts.html" class="mws-form">
			            <div class="mws-form-inline">
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        电影院名称
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="small">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        电影院法人
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        电话
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        城市
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        区域
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       状态
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="large">
			                    </div>
			                </div>




			               
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影院执照
			                    </label>
			                    <div class="mws-form-item">
			                       <input type="file" class="large">
			                    </div>
			                </div>

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       影院地址
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="large" cols="" rows="">
			                        </textarea>
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       影院详细地址
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
			                <input type="submit" class="btn btn-danger" value="Submit">
			                <input type="reset" class="btn " value="Reset">
			            </div>
			        </form>
			    </div>
			</div>





@endsection