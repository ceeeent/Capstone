

$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td><input name = "DynamicTextBox" type="text" value ="" placeholder="Question" "' + value + '" class="form-control" /></td>' + '<td><select name="" class="form-control"><option>  </option><option> Yes</option><option> No</option></select></td>'  + value + '" /></td>' + '<td><button title="Remove Column" type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}