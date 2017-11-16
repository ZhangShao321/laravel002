@extends('FilmAdmins.layout.index')

@section('title', '放映添加')


@section('content')
     
		<div class="mws-panel grid_8">
			    <div class="mws-panel-header">
			        <span>
			            放映添加
			        </span>
			    </div>
			    <div class="mws-panel-body no-padding">
			        <form action="form_layouts.html" class="mws-form">
			            <div class="mws-form-inline">
			              <div class="mws-form-row">
                				<label class="mws-form-label">电影名称</label>
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
                				<label class="mws-form-label">影院名称</label>
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
                				<label class="mws-form-label">影厅名称</label>
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
			                    <label class="mws-form-label">
			                       开始时间
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" class="medium">
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