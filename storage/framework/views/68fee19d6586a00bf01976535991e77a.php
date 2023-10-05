
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 offset-md-3 mt-3">
        <h2>Dashboard</h2>
        <a href="<?php echo e(route('logout')); ?>">Logout</a>
        <table class="table">
            <tr>
                <td><input type="number" id="row1col1" class="input form-control"></td>
                <td><input type="number" id="row1col2" class="input form-control"></td>
                <td><input type="number" id="row1col3" class="input form-control"></td>
            </tr>
            <tr>
                <td><input type="number" id="row2col1" class="input form-control"></td>
                <td><input type="number" id="row2col2" class="input form-control"></td>
                <td><input type="number" id="row2col3" class="input form-control"></td>
            </tr>
            <tr>
                <td><input type="number" id="row3col1" class="input form-control"></td>
                <td><input type="number" id="row3col2" class="input form-control"></td>
                <td><input type="number" id="row3col3" class="input form-control"></td>
            </tr>
        </table>
        
        <h3>Calculations:</h3>
        <div id="additionResult"></div>
        <div id="multiplicationResult"></div>
        <div id="subtractionResult"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("footer_script"); ?>
    <script>
        $(document).ready(function () {
            $(document).on("input",".input",function(){
                calculation();
            });
        });
        function calculation(){
            var addition = 0;
            var multiplication = 1;
            var subtraction = 0;

            for (var i = 1; i <= 3; i++) {
                addition += parseFloat($("#row1col" + i).val());
                addition += parseFloat($("#row" + i + "col1").val());

                multiplication *= parseFloat($("#row2col" + i).val());
                multiplication *= parseFloat($("#row" + i + "col2").val());
                if(i == 1){
                    subtraction += parseFloat($("#row3col" + i).val());
                }
                subtraction -= parseFloat($("#row" + i + "col3").val());
            }

            $("#additionResult").html("Addition : " + addition);
            $("#multiplicationResult").html("Multiplication : " + multiplication);
            $("#subtractionResult").html("Subtraction : " + subtraction);
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-demo\resources\views/dashboard.blade.php ENDPATH**/ ?>