@extends('FilmAdmins.layout.index')

@section('title', '电影院信息')


@section('content')

	<!-- <h1>这是电影院信息</h1> -->

     
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
			                        <input type="text" class="medium">
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
			                        <input type="text" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        城市
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        区域
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       状态
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
			                    </div>
			                </div>




			               
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影院执照
			                    </label>
			                    <div class="mws-form-item">
			                    	<div style="width:180px;height:180px;border:1px solid #C5C5C5">
			                    		
										  <img src="1.jpg">

			                    	</div>
			                     
			                    </div>
			                </div>

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       影院地址
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="medium" cols="" rows="">
			                        </textarea>
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       影院详细地址
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="medium" cols="" rows="">
			                        </textarea>
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