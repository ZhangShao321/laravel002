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
                        >
                           ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        >
                           名称
                        </th>
                        
                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                       >
                        时长
                        </th>



                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        >
                            关键字
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        >
                            导演
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        >
                        
                            主演
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                       >
                        
                            简介
                        </th>


                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        >
                        
                            上映时间
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        >
                        
                            票价
                        </th>

                      <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        >
                        
                            售票总数
                        </th>





                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                       >
                        
                        图片
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                       >
                        
                        状态
                        </th>
                        <th class="sorting"  role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                       style="width:70px" >
                        
                        操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <style type="text/css">
<<<<<<< HEAD
                        
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
=======
                     table{
                        
                            table-layout:fixed;/* 只有定义了表格的布局算法为fixed，下面td的定义才能起作用。 */

                            font-size: 12px;
                        }
                        td{
                           
                            word-break:keep-all;/* 不换行 */
                            white-space:nowrap;/* 不换行 */
                            overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
                            text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
                        }

                     
                    

                    </style>



                  
                       @foreach($film as $k => $v)
                                <tr class="">
                                    <td class="bian">{{$v->id}}</td>
                                    <td class="bian">{{$v->filmname}}</td>
                                    <td class="bian">{{$v->filmtime}}</td>
                                    <td class="bian">{{$v->keywords}}</td>
                                    <td class="bian">{{$v->director}}</td>
                                    <td class="bian">{{$v->protagonist}}</td>
                                    <td class="bian">{{$v->summary}}</td>
                                    <td class="bian">{{ $v->showtime }}</td>
                                    <td class="bian">{{$v->price}}</td>
                                    <td class="bian">{{$v->shownum}}</td>
                                    <td >
>>>>>>> 37e0468b33b4372cb9b3ca5e090caa97f447532c
                                        <img src="{{asset($v->filepic)}}" style="width:120px;height:60px"  />
                                    </td>
                                  
                                  
                                    
<<<<<<< HEAD
                                    <td class="">{{$v->status }}</td>
                                   <td class="">
                                     <a href="{{asset('/FilmAdmins/edit?id=').$v->id}}">编辑</a> 
                                     <a id="del" name="{{$v->id}}" href="#">删除</a>
                                     <!-- href="{{asset('/FilmAdmins/delete?id=').$v->id}} "-->
=======
                                    <td class=""> {{$sta[$v->status] }}</td>
                                   <td style="overflow: visible; " class="">
                                     <a href="{{asset('/FilmAdmins/edit?id=').$v->id}}" >编辑</a> |
                                     <span style="cursor:pointer; color:#C5D52B" class="del"  value="{{$v->id}}"  >删除</span>
                                    
>>>>>>> 37e0468b33b4372cb9b3ca5e090caa97f447532c

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



<<<<<<< HEAD
=======
                               
>>>>>>> 37e0468b33b4372cb9b3ca5e090caa97f447532c
            </div>

        </div>
    </div>
</div>




@endsection



@section('js');

<script type="text/javascript">

    //删除
    $("span").click(function(){
        //获取id
         var id = $(this).attr('value');
         layer.alert('你确定要删除此信息', {
            skin: 'layui-layer-molv' //样式类名  自定义样式
            ,closeBtn: 1    // 是否显示关闭按钮
            ,anim: 1 //动画类型
            ,btn: ['确定','取消'] //按钮
            ,icon: 3    // icon  6 笑脸  4,锁  5 哭 3,?  2,X  1,√ 0,!
            ,shadeClose: false
            ,yes:function(){
                // layer.msg('执行中');
                layer.msg('执行中', {
                              icon: 16
                              ,shade: 0.01
                            });

                // console.log(id);
                $.ajax({
                            type: "GET",
                            url: "{{url('/FilmAdmins/delete')}}",
                            data: 'id='+id,
                            success: function(msg){
                              alert(msg);
                              // console.log(msg);
                               location.reload();  
                            }
                         });




            }
            ,btn2:function(){
                // layer.msg('按钮2');取消执行的按钮
            }});
    });






    //说表移入效果

    $('tbody  .bian').mouseover(function(e){
             var val=$(e.target).text(); // 每一个格子的文本值
              layer.tips(val, '.bian', {
                  tips: [1, '#78BA32'] //还可配置颜色
                });


    });



       

    
</script>


@endsection;



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



