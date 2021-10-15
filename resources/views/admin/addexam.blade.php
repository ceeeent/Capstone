@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">
<legend><h1> Add Exam </h1></legend>



<br>
<div class="container">

    <div class="vidname">
            <label class=""><b> Exam Name </b></label>
            <input type="text" name="" class="" id="" placeholder=" ">
    </div>
</div>


<br>

<section class="container">
    <div class="table table-responsive">
        <table class="table table-responsive table-striped table-bordered">
            <thead>
                <tr>
                    <td>Question</td>
                    <td> Answer </td>
                    <td> Remove </td>
                </tr>
            </thead>
                <tbody id="TextBoxContainer"> </tbody>

            <tfoot>
                <tr>
                <th colspan="5">
                    <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls" title="Add More Exam"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add Question&nbsp;</button>
                </th>
                </tr>
            </tfoot>

        </table>
    </div>
</section>

<center>
<br>
<button type="button" name="submit" class="btn btn-primary">Save</button>
</center>

</div>




@endsection