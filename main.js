function getTable(val) {

    fetch("files/tableAJAX.php?Count="+ val).then(res => res.json()).then(parsed =>draw(parsed));
    
 }
    function del() {
        document.getElementById("gable").innerHTML = "";
    }

        function draw(params) {  // Makes a table from JSON
       
                var table = document.getElementById('gable');
                params.forEach(function(object) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + object.ID + '</td>' +
                '<td>' + object.city + '</td>' +
                '<td>' + object.LOG_DATE + '</td>' +
                '<td>' + object.ip + '</td>' +
                '<td>' + object.username + '</td>';
                table.appendChild(tr);
                });
            }




      
