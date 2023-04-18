// Generan Date Picker
let date = new Date();
let now = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
$(".date_picker").datetimepicker({
    // value: now,
    format: "d.m.Y",
});

// h:i A


$(".date_picker_no_time").datetimepicker({
    value: now,
    format: "d.m.Y",
});



$(".dob").datetimepicker({
    value: now,
    format: "d.m.Y",
});