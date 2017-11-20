@extends('FilmAdmins.layout.index')

@section('title', '影片列表')


@section('content')
         


 <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
           影片列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">

       
         <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="" method="get">
                    <div id="DataTables_Table_0_length" class="dataTables_length">
                        <label>
                            Show
                         <select name="num" size="1" aria-controls="DataTables_Table_1">
                            <option value="10" @if(isset($_GET['num'])  ? $_GET['num'] : '10')) selected="selected"  @endif >
                            10
                            </option>
                            <option value="25" @if($request->num == '25')  selected="selected" @endif >
                                25
                            </option>
                            <option value="50" @if($request->num == '50')  selected="selected" @endif  >
                                50
                            </option>
                       
                       
                        </select>
                            entries
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                        <label>
                            Search:
                              <input type="text" aria-controls="DataTables_Table_1" name="seach" value="{{isset($_GET['seach']) ? $_GET['seach'] : ''}}">
                              <button>确定</button>
                        </label>
                    </div>


        </form>
            <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 157px;">
                           ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 209px;">
                           名称
                        </th>
                        
                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 209px;">
                        时长
                        </th>



                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 191px;">
                            关键字
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 137px;">
                            导演
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                            主演
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                            简介
                        </th>


                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                            上映时间
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                            票价
                        </th>

                      <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                            售票总数
                        </th>





                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                        图片
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                        状态
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 101px;">
                        
                        操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <style type="text/css">
                        
                          /*  td{
                                width:100px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis
                            }*/
                       
                    </style>
                  
                       @foreach($film as $k => $v)
                                <tr class="@if($k%2==0) odd @else even @endif">
                                    <td class="sorting_1">{{$v->id}}</td>
                                    <td class="">{{$v->filmname}}</td>
                                    <td class="">{{$v->filmtime}}</td>
                                    <td class="">{{$v->keywords}}</td>
                                    <td class="">{{$v->director}}</td>
                                    <td class="">{{$v->protagonist}}</td>
                                    <td class="" >{{$v->summary}}</td>
                                    <td class="">{{ $v->showtime }}</td>
                                    <td class="">{{$v->price}}</td>
                                    <td class="">{{$v->shownum}}</td>
                                    <td class="">
                                        <img src="{{asset($v->filepic)}}" style="width:120px;height:60px"  />
                                    </td>
                                  
                                  
                                    
                                    <td class="">{{$v->status }}</td>
                                   <td class="">
                                     <a href="{{asset('/FilmAdmins/edit?id=').$v->id}}">编辑</a> 
                                     <a id="del" name="{{$v->id}}" href="#">删除</a>
                                     <!-- href="{{asset('/FilmAdmins/delete?id=').$v->id}} "-->

                                   </td>
                                </tr>
                     @endforeach 


                </tbody>
            </table>


            <div class="dataTables_info" id="DataTables_Table_0_info">
                <!-- 显示总页数 -->
            </div>
            
              <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
               {!! $film->appends($request->all())->render() !!}



            </div>

        </div>
    </div>
</div>

                 






@endsection



@section('js');

    <script type="text/javascript">
        // alert($);
        $("#del").click(function(){



            layer.alert('你确定要删除该信息吗', {
            skin: 'layui-layer-molv' //样式类名  自定义样式
            ,closeBtn: 1    // 是否显示关闭按钮
            ,anim: 1 //动画类型
            ,btn: ['确定','取消'] //按钮
            ,icon: 6    // icon
            ,yes:function(){
                layer.msg('按钮1')

                //确认发送ajax
                var id = $('#del').attr('name');

               console.log();

               
                $.get("{{asset('/FilmAdmins/delete')}}",{id:id},function(data){
                      // console.log(data);
                      alert(data+"删除成功");
                      });





            }
            ,btn2:function(){
                layer.msg('按钮2')
            }});
                    





        });

    </script>



@endsection;