<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}" >

    <label for="{{$id}}" class="col-sm-2 control-label" >{{$label}}</label>
    <div class="col-sm-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	    <span style="color: red;">
            @include('admin::form.error')
        </span>

        <div id="wrapper">
            <div id="container">
                <div  class="uploader" style="padding: 20px;">
                    <ul id="{{$name}}-file-view" class="file-view-list">
                        @if(!empty(json_decode($value,true)))
                        @foreach(json_decode($value,true) as $key => $val)
                        <li id="VIEW_FILE_{{$key}}">
                            <p class="imgWrap"><img src="/storage/{{ $val }}"></p>
                            <p class="progress"><span></span></p>
                            <div class="file-panel" style="height: 0px;"><span class="cancel">删除</span><span class="rotateRight">向右旋转</span><span class="rotateLeft">向左旋转</span></div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
                <!--头部，相册选择和格式选择-->
                <div class="uploader" id="uploader{{$name}}">
                    <div class="queueList" id="queueList{{$name}}">
                        <div id="dndArea{{$name}}" class="placeholder">
                            <div id="filePicker{{$name}}"></div>
                            <p>或将文件拖到这里，单次可选择多张</p>
                        </div>
                    </div>
                    <div class="statusBar" style="display:none;">
                        <div class="progress">
                            <span class="text">0%</span>
                            <span class="percentage"></span>
                        </div><div class="info"></div>
                        <div class="btns">
                            <div class="filePicker2" id="filePicker2{{$name}}"></div><div class="uploadBtn">开始上传</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group">
            <input readonly style="background-color: #fff" type="hidden" id="{{$name}}-savedpath" name="{{$name}}" value="{{ old($column, $value) }}" class="form-control title" placeholder="{{$label}}">
        </div>
        @include('admin::form.help-block')
    </div>
</div>






