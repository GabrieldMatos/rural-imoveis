<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title_prefix', config('adminlte.title_prefix', '')); ?>
<?php echo $__env->yieldContent('title', config('adminlte.title', 'AdminLTE 2')); ?>
<?php echo $__env->yieldContent('title_postfix', config('adminlte.title_postfix', '')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/plugins/iCheck/all.css')); ?>">

    <?php if(config('adminlte.plugins.select2')): ?>
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <?php endif; ?>

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/dist/css/AdminLTE.min.css')); ?>">

    <?php if(config('adminlte.plugins.datatables')): ?>
        <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
    <?php endif; ?>
    <?php echo $__env->yieldContent('adminlte_css'); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition <?php echo $__env->yieldContent('body_class'); ?>">

<?php echo $__env->yieldContent('body'); ?>

<script src="<?php echo e(asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/adminlte/plugins/iCheck/icheck.js')); ?>"></script>


<?php if(config('adminlte.plugins.select2')): ?>
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<?php endif; ?>

<?php if(config('adminlte.plugins.datatables')): ?>
    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
<?php endif; ?>

<?php if(config('adminlte.plugins.chartjs')): ?>
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
<?php endif; ?>
<script>
$("#fileUpload").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});


$("#fileUpload1").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder1");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto2");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload2").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder2");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto3");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload3").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder3");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto4");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload4").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder4");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto5");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload5").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder5");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto6");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload6").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder6");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto7");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload7").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder7");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto8");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload8").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder8");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto9");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload9").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder9");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
        var prox_image = document.getElementById("foto10");
        prox_image.style.visibility = 'visible';
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

$("#fileUpload10").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder10");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "img-thumbnail center-block",
                "style": "height: 200px;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<?php echo $__env->yieldContent('adminlte_js'); ?>

</body>
</html>
