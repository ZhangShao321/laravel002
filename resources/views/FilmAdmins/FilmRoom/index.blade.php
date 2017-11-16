@extends('FilmAdmins.layout.index')

@section('title', '电影院添加影厅')


@section('content')
        
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>添加影厅</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="form_layouts.html">
                            <div class="mws-form-block">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">影厅名</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="roomname">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">影厅类型</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="roomtype">
                                    </div>
                                </div>
                                
                                <!-- <div class="mws-form-row">
                                    <label class="mws-form-label">影厅类型</label>
                                    <div class="mws-form-item">
                                        <select class="small">
                                            <option>Option 1</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                </div> -->
                                
                                </div>
                            </div>
                            <div class="mws-button-row">
                                {{ csrf_field() }}
                                <input type="submit" value="添加" class="btn btn-danger">
                                
                            </div>
                        </form>
                    </div>
                </div>




@endsection



@section('js')
        



@endsection