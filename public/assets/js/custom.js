let date = new Date();
let now = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
$(".date_picker").datetimepicker({
    // value: now,
    format: "Y-m-d",
});


$(".dob").datetimepicker({
    value: '1994-04-15',
    format: "Y-m-d",
});