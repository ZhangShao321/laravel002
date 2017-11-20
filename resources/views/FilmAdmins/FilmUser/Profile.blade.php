@extends('FilmAdmins.layout.index')

@section('title', '修改logo')


@section('content')
     
		<div class="mws-panel grid_8">
			    <div class="mws-panel-header">
			        <span>
			           修改logo
			        </span>
			    </div>
			    <div class="mws-panel-body no-padding">


			        <form action="{{asset('/FilmAdmins/dopro')}}" class="mws-form" method="post" enctype="multipart/form-data">
			            <div class="mws-form-inline">
							<br/>
			            	<div style="width:240px;height:240px;border:1px solid #C5C5C5;margin:auto;">
								
								<img src="{{asset($res->clogo)}}" style="width:239px;height:239px"/>

							</div>

							
			            	{{ csrf_field() }}
			                
			              <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        logo
			                    </label>
			                    <div class="mws-form-item">
			                       <input type="file" name="clogo" class="large">
			                    </div>
			                </div>

			         
			            </div>
			            <div class="mws-button-row" style="text-align: right">
			                <input  type="submit" class="btn btn-info" value="修改">
			                
			            </div>
			        </form>
			    </div>
			</div>





@endsection