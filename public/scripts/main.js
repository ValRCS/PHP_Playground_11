console.log("Hello world!");

$(".my-del-btn").click(function () {
    var rowid = $(this).val();
    console.log("Going to be deleting row:" + rowid);

    $.post("deleteSong.php", { delete: rowid },
        function (data) { //this happen on success
            console.log("Delete Success!!");
            console.log(data); //we see full html here,
            // so for AJAX we could use something less and 
            // delete specific row via Javascript
            //instead we just reload the page from server

            // window.location.reload(true);
            //could also use redirect to a different or pass parameters
            window.location.replace("/?message=success");
        });
})

