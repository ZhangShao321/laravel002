@extends('FilmAdmins.layout.index')

@section('title', '影片编辑')


@section('content')
     
		<div class="mws-panel grid_8">
			    <div class="mws-panel-header">
			        <span>
			            影片编辑
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




			       <form action="{{asset('/FilmAdmins/update?id='.$res->id)}}" enctype="multipart/form-data"  class="mws-form" method="post">
			            <div class="mws-form-inline">
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        影片名称
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" value="{{$res->filmname}}" name="filmname" class="medium">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       上映时间
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="showtime" value="{{$res->showtime}}" class="medium">
			                    </div>
			                </div>
			                <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        关键字
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="keywords" value="{{$res->keywords}}" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        导演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="director" value="{{$res->director}}" class="medium">
			                    </div>
			                </div>


			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                        主演
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="protagonist" value="{{$res->protagonist}}" class="medium">
			                    </div>
			                </div>

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       时长
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="filmtime" value="{{$res->filmtime}}" class="medium">
			                    </div>
			                </div>

			                 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       票价
			                    </label>
			                    <div class="mws-form-item">
			                        <input type="text" name="price" value="{{$res->price}}" class="medium">
			                    </div>
			                </div>

							


			               
			                <div class="mws-form-row" >
			                    <label class="mws-form-label">
			                        图片
			                    </label>
			                    <div style="text-align: center; margin-bottom: 5px;">
			                     
			                     <img src="{{asset($res->filepic)}}" style="width:220px;height:220px;">
			                    		

			                    </div>
			                    <div class="mws-form-item">
			                       <input type="file" name="filepic"  class="medium">
			                    </div>
			                </div>


			               

							 <div class="mws-form-row">
			                    <label class="mws-form-label">
			                       简介
			                    </label>
			                    <div class="mws-form-item">
			                        <textarea class="medium" name="summary"  cols="" rows="">
			                        	{{$res->summary}}
			                        </textarea>
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