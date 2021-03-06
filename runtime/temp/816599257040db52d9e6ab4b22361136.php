<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"F:\guishan\xiangmu\TwoThink\addons\code\adminlist.html";i:1511097513;}*/ ?>
<div class="page-header">
    <h4>TwoThink代码生成器</h4>
</div>
<div class="row">
    <!-- 表单 -->
    <form id="form" action="<?php echo addons_url('code://table/info'); ?>" method="post" class="form-horizontal">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">model_info</a></li>
                <!--<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">扩展</a></li>-->
            </ul>
            <!-- Tab panes -->
            <div class="tab-content margin-top-10">

                <div role="tabpanel" class="tab-pane active" id="tab1">
                    <div id="table_xz" class="form-inline">
                        <div class="form-group"  style="margin-left: 0px;">
                            <label >表名</label>
                            <select name="addons_table_name" class="btn btn-default">
                                <?php $_result=table_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label>分组</label>
                            <select name="addons_module_name" class="btn btn-default">
                                <option value="admin">admin</option>
                                <option value="home">home</option>
                                <option value="addons">addons</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label>模块</label>
                            <input name="addons_controller_name" type="text" class="form-control">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <div type="button" class="btn btn-info ajax-post-code" url='<?php echo addons_url("code://table/grcode"); ?>' target-form="table_name">生成代码</div>
                        </div>
                    </div>
                </div>
                <!--<div role="tabpanel" class="tab-pane" id="tab2">...</div>-->

            </div>
        </div>
        <div class="col-sm-12" style="margin-top: 10px">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#show_field" aria-controls="show_field" role="tab" data-toggle="tab">字段管理</a></li>
                <li role="presentation"><a href="#Ftab1" aria-controls="Ftab1" role="tab" data-toggle="tab">info设计</a></li>
            </ul>

            <div class="tab-content margin-top-10">
                <div id="show_field" role="tabpanel" class="tab-pane active">
                </div>
                <!--设计-->
                <div id="Ftab1" role="tabpanel" class="tab-pane"></div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-item form-submit">
                <button class="btn submit-btn ajax-post btn-danger" id="submit" type="submit" target-form="form-horizontal">确 定</button>
                <a class="btn btn-return btn-success" href="#" onclick="javascript:history.back(-1);return false;">返 回</a>
            </div>
        </div>
    </form>
</div>

<script src="__ADDONS__/code/codemirror/lib/codemirror.js"></script>
<link rel="stylesheet" href="__ADDONS__/code/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="__ADDONS__/code/codemirror/theme/ambiance.css">
<script src="__ADDONS__/code/codemirror/mode/php/php.js"></script>

<style>
    .margin-top-10{margin-top: 10px;}
    .CodeMirror{
        height: auto !important;
    }
    .CodeMirror-scroll .CodeMirror-gutters{
        left: 0px !important;
    }
    .CodeMirror-scroll .CodeMirror-gutter-wrapper{
        left: -32px !important;
    }
    .CodeMirror-scroll .CodeMirror-linenumber{
        left: 0px !important;
    }
    /*.layui-layer-dialog .layui-layer-content {*/
        /*padding: 0px !important;*/
    /*}*/
</style>
<script>
    $(document).ready(function(){
        //默认模块名
        var table_name = $("#table_xz [name=addons_table_name]").find("option:selected").text(),
            form = $('.form-horizontal');
        table_field();
        design();

        $("#table_xz [name=addons_controller_name]").val(HumpNaming(table_name,true));
        //选择表并切换模块名
        $("#table_xz [name=addons_table_name]").change(function(){
            var value = $(this).val();
            var data = HumpNaming(value,true);
            $("#table_xz [name=addons_controller_name]").val(data);

            table_field(value);
            design(value);
        });
        //代码生成
        $(".ajax-post-code").on('click',function () {
            var query = form.serialize();
                url   = $(this).attr('url');
            TwoAjax(url,query,function (data) {
                layer.open({
                    id:'preview_window',
                    skin: 'layui-layer-molv',
                    title: '代码预览(请手动复制代码)',
                    shadeClose: true,
                    type:1,
                    maxmin:true,
                    area: ['720px', '510px'], //宽高
                    content:'<textarea></textarea>',
//                    btn: ['复制代码', '确定'],
//                    btn1: function(index, layero){
//                        copyText("preview_window .CodeMirror-lines");
//                    }
                });
                var codemirror_option = {
                    lineNumbers   :true,
                    matchBrackets :true,
                    mode          :"application/x-httpd-php",
                    indentUnit    :4,
                    gutter        :true,
                    fixedGutter   :true,
                    indentWithTabs:true,
//                    readOnly	  :true,
                    lineWrapping  :false,
                    height		  :500,
                    enterMode     :"keep",
                    tabMode       :"shift",
                    theme: "ambiance"
                };
                var preview_window = $("#preview_window").removeClass(".loading").find("textarea");
                var editor = CodeMirror.fromTextArea(preview_window[0], codemirror_option);
                editor.setValue(data.data);
                $(window).resize();
            });

        });

        //字段管理
        function table_field() {
            var url = '<?php echo addons_url("code://table/field"); ?>',
                query = form.serialize();
            TwoAjax(url,query,function (html) {
                if(html.code){
                    $("#show_field").html(html.data);
                }else{
                    layer.msg(html.msg,{'icon':5});
                }

            });
        }
        //model_info设计
        function design() {
            var url = '<?php echo addons_url("code://table/design"); ?>',
                query = form.serialize();
            TwoAjax(url,query,function (html) {
                if(html.code){
                    $("#Ftab1").html(html.data);
                }else{
                    layer.msg(html.msg,{'icon':5});
                }

            });
        }

        function TwoAjax(url, data, successfn) {
            data = (data==null || data=="" || typeof(data)=="undefined")? {"date": new Date().getTime()} : data;
            $.ajax({
                type: "post",
                data: data,
                url: url,
                dataType: "json",
                success:successfn
            });
        };
        function HumpNaming(str,status=false){
            var strArr=str.split('');
            for(var i=1;i<strArr.length;i++){
                if(strArr[i]=='_'){
                    strArr.splice(i,1);
                    if(i<strArr.length){
                        strArr[i]=strArr[i].toUpperCase();
                    }
                }

            }
            var strArr =  strArr.join('');
            if(status){
                strArr =  strArr[0].toUpperCase() + strArr.substring(1, strArr.length);
            }
            return  strArr;
        }

    });
</script>