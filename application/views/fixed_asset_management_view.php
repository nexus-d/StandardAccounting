<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>JCORE - <?php echo $title; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="">

    <?php echo $_def_css_files; ?>

    <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">

    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link type="text/css" href="assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">
     <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <style>

        html {
            zoom: 0.8;
            zoom: 80%;
        }

        select {
            width: 100%;
        }

        .toolbar{
            float: left;
        }

        td.details-control {
            background: url('assets/img/Folder_Closed.png') no-repeat center center;
            cursor: pointer;
        }
        tr.details td.details-control {
            background: url('assets/img/Folder_Opened.png') no-repeat center center;
        }

        .child_table{
            padding: 5px;
            border: 1px #ff0000 solid;
        }

        .glyphicon.spinning {
            animation: spin 1s infinite linear;
            -webkit-animation: spin2 1s infinite linear;
        }

        @keyframes spin {
            from { transform: scale(1) rotate(0deg); }
            to { transform: scale(1) rotate(360deg); }
        }

        @-webkit-keyframes spin2 {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(360deg); }
        }

    </style>

</head>

<body class="animated-content">

<?php echo $_top_navigation; ?>

<div id="wrapper">
    <div id="layout-static">

        <?php echo $_side_bar_navigation;?>

        <div class="static-content-wrapper white-bg">
            <div class="static-content"  >
                <div class="page-content"><!-- #page-content -->

                    <ol class="breadcrumb" style="margin:0;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="fixed_asset_management">Fixed Asset Management</a></li>
                    </ol>

                    <div class="container-fluid">
                        <div data-widget-group="group1">
                            <div class="row">
                                <div class="col-md-12">

                                    <div id="div_assets_list">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <b style="color: white; font-size: 12pt;"><i class="fa fa-bars"></i>&nbsp; Fixed Asset Management</b>
                                            </div>
                                            <div class="panel-body table-responsive">
                                                <table id="tbl_fixed_management" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead class="">
                                                    <tr>
                                                        <th>Asset Code</th>
                                                        <th>Description</th>
                                                        <th>Location</th>
                                                        <th>Category</th>
                                                        <th><center>Action</center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="panel-footer"></div>
                                        </div>
                                    </div>

                                    <div id="div_assets_fields">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <b class="panel-title" style="color: white; font-size: 12pt;"></b>
                                            </div>
                                            <div class="panel-body">
                                                <h4 style="margin-top: 0;margin-bottom: 5px;"><b>Asset # : <span id="span_asset_no"><?php echo date('Y'); ?>-XXXX</span></b></h4><hr>
                                                <div>
                                                    <div class="row">
                                                        <div class="container-fluid">
                                                            <div id="frm_fixed_asset">
                                                                <div class="col-xs-12 col-md-4">
                                                                   Asset Code : <br>
                                                                   <div class="input-group">
                                                                       <span class="input-group-addon">
                                                                             <i class="fa fa-code"></i>
                                                                        </span>
                                                                       <input class="form-control" type="text" name="asset_code">
                                                                   </div>
                                                                        Asset Description : <br>
                                                                   <div class="input-group">
                                                                       <span class="input-group-addon">
                                                                             <i class="fa fa-file-text-o"></i>
                                                                        </span>
                                                                       <input class="form-control" type="text" name="asset_description">
                                                                   </div>
                                                                    Serial No. : <br>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                             <i class="fa fa-code"></i>
                                                                        </span>
                                                                        <input class="form-control" type="text" name="serial_no">
                                                                   </div>
                                                                   Acquisition Cost : <br>
                                                                   <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                             <i class="fa fa-credit-card"></i>
                                                                        </span>
                                                                        <input class="form-control" type="text" name="acquisition_cost">
                                                                   </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4">
                                                                    Salvage Value : <br>
                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                             <i class="fa fa-credit-card"></i>
                                                                        </span>
                                                                   <input class="form-control" type="text" name="salvage_value">
                                                                   </div>
                                                                       Acquisition Date : <br>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                             <i class="fa fa-calendar"></i>
                                                                        </span>
                                                                       <input class="date-picker form-control " value="<?php echo date("m/d/Y"); ?>" type="text" name="date_acquired">
                                                                    </div>
                                                                    Location : <br>
                                                                   <select id="cbo_location" name="location_id" class="form-control">
                                                                        <option value="0">[ Add New Location ]</option>
                                                                        <?php foreach($locations as $location) { ?>
                                                                            <option value="<?php echo $location->location_id; ?>"><?php echo $location->location_name; ?></option>
                                                                        <?php } ?>
                                                                   </select><br>
                                                                   Category : <br>
                                                                   <select id="cbo_category" name="category_id" class="form-control">
                                                                        <option value="0">[ Add New Category ]</option>
                                                                        <?php foreach($categories as $category) { ?>
                                                                            <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                                                        <?php } ?>
                                                                   </select>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4">
                                                                    Life <i>(in Years)</i> : <br>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                             <i class="fa fa-line-chart"></i>
                                                                        </span>
                                                                       <input class="form-control" type="text" name="life_years">
                                                                    </div>
                                                                    Asset / Property Status : <br>
                                                                   <select id="cbo_asset_status" name="asset_status_id" class="form-control">
                                                                        <?php foreach($asset_properties as $asset_property) { ?>
                                                                            <option value="<?php echo $asset_property->asset_status_id; ?>"><?php echo $asset_property->asset_property_status; ?></option>
                                                                        <?php } ?>
                                                                   </select>
                                                                   Department : <br>
                                                                   <select id="cbo_department" name="asset_status_id" class="form-control">
                                                                        <option value="0">[ Create New Department ]</option>
                                                                        <?php foreach($departments as $department) { ?>
                                                                            <option value="<?php echo $department->department_id; ?>"><?php echo $department->department_name; ?></option>
                                                                        <?php } ?>
                                                                   </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="container-fluid">
                                                            <div style="padding: 0 1% 0 1%;">
                                                                Notes
                                                                <textarea class="form-control" name="remarks"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <button class="btn btn-primary">Save Changes</button>
                                                <button id="btn_cancel_assets" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .container-fluid -->

                </div> <!-- #page-content -->
            </div>

            <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm">
                    <div class="modal-content"><!---content--->
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Deletion</h4>
                        </div>

                        <div class="modal-body">
                            <p id="modal-body-message">Are you sure ?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal-->

            <div id="modal_new_category" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#2ecc71;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                <h4 id="category_title" style="color: #ecf0f1;"><span id="">New Category</span></h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form id="frm_category" role="form">
                                        <div class="">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label class="col-xs-12 col-md-4 control-label "><strong>* Category Name :</strong></label>
                                                    <div class="col-xs-12 col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-users"></i>
                                                            </span>
                                                            <input type="text" name="category_name" class="form-control" placeholder="Category Name" data-error-msg="category name is required!" required>
                                                        </div>
                                                    </div>
                                                </div><br/>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"><strong>* Category Description :</strong></label>
                                                    <div class="col-md-8">
                                                        <textarea name="category_desc" class="form-control" data-error-msg="Category Description is required!" placeholder="Description" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btn_save_category" class="btn btn-primary" name="btn_save">Save</button>
                                <button id="btn_cancel_category" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal_new_location" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                    <h4 style="color: #ecf0f1;"><span id="">New Location</span></h4>
                                </div>

                                <div class="modal-body">
                                    <form id="frm_location" role="form" class="form-horizontal row-border">
                                        <div class="form-group">
                                            <div style="padding-left: 10px;">
                                                <strong>* Location Name :</strong>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="location_name" class="form-control" placeholder="Location Name" data-error-msg="Location name is required!" required>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button id="btn_save_location" class="btn-primary btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;""><span class=""></span>  Save Changes</button>
                                    <button id="btn_cancel_location" class="btn-default btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div id="modal_new_department" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background: #2ecc71">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 id="category_title" style="color: #ecf0f1;"><span id="">New Department</span></h4>
                        </div>
                        <div class="modal-body">
                            <form id="frm_department" role="form" class="form-horizontal">
                                <div class="row" style="margin: 1%;">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="">Branch name * :</label>
                                            <textarea name="department_name" class="form-control" data-error-msg="Branch name is required!" placeholder="Branch name" required></textarea>

                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin: 1%;">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                                <label class="">Description :</label>
                                                <textarea name="department_desc" class="form-control" placeholder="Description"></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin: 1%;">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="">Delivery Address :</label>
                                            <textarea name="delivery_address" class="form-control" placeholder="Delivery Address"></textarea>

                                        </div>
                                    </div>
                                </div>



                                <div class="row" style="margin: 1%;">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="">Please specify the default cost of this Branch when purchasing items (Optional) :</label>
                                            <select name="default_cost" id="cbo_default_cost" class="form-control" data-error-msg="Item type is required." required>
                                                <option value="1">Purchase Cost 1 (Luzon Area)</option>
                                                <option value="2">Purchase Cost 2 (Viz-Min Area)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br /><br />



                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="btn_save_department" class="btn btn-primary">Save Changes</button>
                            <button id="btn_cancel_department" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li><h6 style="margin: 0;">&copy; 2016 - Paul Christian Rueda</h6></li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                </div>
            </footer>

        </div>
    </div>
</div>


<?php echo $_switcher_settings; ?>
<?php echo $_def_js_files; ?>

<script src="assets/plugins/spinner/dist/spin.min.js"></script>
<script src="assets/plugins/spinner/dist/ladda.min.js"></script>

<script src="assets/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/plugins/datapicker/bootstrap-datepicker.js"></script>

<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _cboLocation; var _cboCategory; var _cboAsset; var _cboDepartments

    var initializeControls=function(){
        dt=$('#tbl_fixed_management').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false
        });

        $('.date-picker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true

        });

        _cboDepartments=$('#cbo_department').select2({
            placeholder:"Please select Department",
            allowClear:true
        });

       _cboAsset=$('#cbo_asset_status').select2({
            placeholder: "Please Select Asset / Property Status",
            allowClear: true
       });

        _cboCategory=$('#cbo_category').select2({
            placeholder: "Please select Category",
            allowClear: true
        });

        _cboLocation=$('#cbo_location').select2({
            placeholder: "Please select Location",
            allowClear: true
        });

        _cboAsset.select2('val',null);
        _cboCategory.select2('val',null);
        _cboLocation.select2('val',null);
        _cboDepartments.select2('val',null);

        var createToolBarButton=function(){
            var _btnNew='<button class="btn btn-green"  id="btn_new" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;" data-toggle="modal" data-target="" data-placement="left" title="New unit" >'+
                '<i class="fa fa-plus"></i> New Asset</button>';
            $("div.toolbar").html(_btnNew);
        }();

        $('#div_assets_fields').hide();
    }();

    var bindEventHandlers=(function(){
        var detailRows = [];

        _cboCategory.on('select2:select', function(){
            if(_cboCategory.val() == 0)
                $('#modal_new_category').modal('show');

            $('#btn_save_category').attr('disabled',false);
        });

        _cboLocation.on('select2:select', function(){
            if(_cboLocation.val() == 0)
                $('#modal_new_location').modal('show');

            $('#btn_save_location').attr('disabled', false);
        });

        _cboDepartments.on('select2:select', function(){
            if(_cboDepartments.val() == 0)
                $('#modal_new_department').modal('show');
        });

        $('#btn_cancel_department').on('click', function(){
            clearFields($('#frm_department'));
            _cboDepartments.select2('val',null);
            $('#modal_new_department').modal('hide');
        });

        $('#btn_cancel_location').on('click', function(){
            clearFields($('#frm_location'));
            _cboLocation.select2('val',null);
            $('#modal_new_location').modal('hide');
        });

        $('#btn_cancel_category').on('click', function(){
            clearFields($('#frm_category'));
            _cboCategory.select2('val',null);
            $('#modal_new_category').modal('hide');            
        });

        $('#tbl_product_type tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );

                row.child( format( row.data() ) ).show();

                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );

        $('#btn_cancel_assets').click(function(){
            showList(true);
        });

        $('#btn_new').click(function(){
            _txnMode="new";
            showList(false);
            $('.panel-title').html('<i class="fa fa-plus"></i>&nbsp; New Asset');
        });

        $('#tbl_product_type tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.refproduct_id;

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });
            $('#prodtype_title').text('Edit Product Type');
            $('#modal_product_type').modal('show');
            //showList(false);
        });

        $('#tbl_product_type tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.refproduct_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removeProducttype().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
            });
        });

        $('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            $('#div_img_unit').hide();
            $('#div_img_loader').show();

            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            console.log(_files);

            $.ajax({
                url : 'Refproducts/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                    $('#div_img_loader').hide();
                    $('#div_img_unit').show();
                }
            });
        });

        $('#btn_cancel').click(function(){
            $('#modal_product_type').modal('hide');
            //showList(true);
        });

        $('#btn_save_location').click(function(){
            if(validateRequiredFields($('#frm_location'))){
                createLocation().done(function(response){
                    showNotification(response);
                    $('#cbo_location').append('<option value="'+ response.row_added[0].location_id +'">'+ response.row_added[0].location_name +'</option>');
                    _cboLocation.select2('val',response.row_added[0].location_id);
                    clearFields($('#frm_location'));
                    $('#modal_new_location').modal('hide');
                    $('#btn_save_location').attr('disabled', true);
                });
            }
        });

        $('#btn_save_category').click(function(){
            if(validateRequiredFields($('#frm_category'))){
                createCategory().done(function(response){
                    showNotification(response);
                    $('#cbo_category').append('<option value="'+ response.row_added[0].category_id +'">'+ response.row_added[0].category_name +'</option>');
                    _cboCategory.select2('val',response.row_added[0].category_id);
                    clearFields($('#frm_category'));
                    $('#modal_new_category').modal('hide');
                    $('#btn_save_category').attr('disabled',true);
                });
            }
        });

        $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_fixed_asset'))){
                if(_txnMode=="new"){
                    createProducttype().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields();
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }else{
                    updateProducttype().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields();
                        //showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }
                $('#modal_product_type').modal('hide');
            }
        });
    })();

    var validateRequiredFields=function(){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea','#frm_product_type').each(function(){
            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                stat=false;
                return false;
            }
        });
        return stat;
    };

    var createFixedAsset=function(){
        var _data=$('#frm_fixed_asset').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Refproducts/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updateProducttype=function(){
        var _data=$('#frm_product_type').serializeArray();
        _data.push({name : "refproduct_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Refproducts/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeProducttype=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Refproducts/transaction/delete",
            "data":{refproduct_id : _selectedID}
        });
    };

    var createLocation=function(){
        var _data=$('#frm_location').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Locations/transaction/create",
            "data":_data
        });
    };

    var createCategory=function(){
        var _data=$('#frm_category').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Categories/transaction/create",
            "data":_data
        });
    };

    var showList=function(b){
        if(b){
            $('#div_assets_list').show();
            $('#div_assets_fields').hide();
        }else{
            $('#div_assets_list').hide();
            $('#div_assets_fields').show();
        }
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

    var showSpinningProgress=function(e){
        $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
    };

    var clearFields=function(frm){
        $('input,textarea,select', frm).val('');
        $('form').find('input:first').focus();
    };

    function format ( d ) {
        return '<br /><table style="margin-left:10%;width: 80%;">' +
        '<thead>' +
        '</thead>' +
        '<tbody>' +
        '<tr>' +
        '<td>Unit Name : </td><td><b>'+ d.unit_name+'</b></td>' +
        '</tr>' +
        '<tr>' +
        '<td>Unit Description : </td><td>'+ d.unit_desc+'</td>' +
        '</tr>' +
        '</tbody></table><br />';
    };
});

</script>

</body>

</html>